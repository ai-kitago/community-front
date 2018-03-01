<?php
/*

Copyright 2016 Yuki Yoshikawa (email : yoshikawa@cona.bz)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

Plugin Name: GPS検索
Plugin URI: http://www.cona.bz/
Description: 検索機能にGPS検索を追加
Author: Yuki Yoshikawa
Version: 1.0
Author URI: http://www.cona.bz/
License: GPL2
*/

if ( !class_exists('gpSearch') ) :

class gpSearch {
    //プラグインのテーブル名
    var $table_name;
    var $plugin_name;

    const GPSEARCH_POST_TYPE = 'gpSearch_post_type';
    //const GPSEARCH_POST_TYPE = 'studio';

    public function __construct(){

        global $wpdb;
        $this->plugin_name = 'gpsearch';
        // 接頭辞（wp_）を付けてテーブル名を設定
        $this->table_name = $wpdb->prefix . 'gpsearch';
        // プラグイン有効化したとき実行
        register_activation_hook (__FILE__, array($this, 'gpSearch_install'));
        // メニューに設定表示
        add_action('admin_menu', array( $this, 'gpSearch_add_admin_menu'));

        //add_action('admin_menu', array($this,'gpSearch_add_meta_field'));
        add_action('save_post', array($this,'gpSearch_save'));
        add_action('admin_print_scripts', array($this,'gpSearch_admin_footer_script'));
        add_action('wp_print_scripts',array($this,'gpSearch_front_footer_script'));
        add_filter('template_include', array($this,'gpSearch_archive'));
    }

    // 互換プラグインの有無確認
    public function gpSearch_check_plugin() {
        $active_plugin = get_option( 'active_plugins' );
        if(in_array('advanced-custom-fields/acf.php',$active_plugin)){
            require_once('lib/acf-import.php');
            return true;
        }else{
            return false;
        }
    }

    function gpSearch_archive($template = ''){
        if($_GET['gps'] == 1){
            $template = locate_template(array('archive-gps.php'));
            add_filter('body_class', array($this,'gpSearch_body_class'));
            
            $results = $this->gpSearch_search($_GET);

            if(!empty($results)) {
                foreach ( $results as $row ) {
                    $gpsearch_id[] = $row->post_id;
                }
                query_posts(array(
                    'post_type' => 'studio',
                    'post__in' => $gpsearch_id,
                    'orderby' => 'none'
                ));
            }
        }
        return $template;
    }

    function gpSearch_body_class($classes){
        $classes[] = 'gpsearch single-studio single-list';
	    return $classes;
    }

    public function gpSearch_install() {
        global $wpdb;

        //DBのバージョン
        $gps_version = '1.0';
        //現在のDBバージョン取得
        $installed_ver = get_option( 'gpsearch_version' );
        
        // DBバージョンが違ったら作成
        if( $installed_ver != $gps_version ) {
            $charset_collate = $wpdb->get_charset_collate();
            $sql = "CREATE TABLE ".$this->table_name." (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
            `post_id` int(11) unsigned NOT NULL,
            `geometry` geometry DEFAULT NULL,
            PRIMARY KEY (id)
            ) $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
            //オプションにDBバージョン保存
            update_option('gpsearch_version', $gps_version);
        }
    }

    function gpSearch_insert($results){
        if (!isset($results)) return;
        global $wpdb;

        foreach($results as $row){
            $post_id = $row->ID;

            $get_id = $wpdb->get_var(
                $wpdb->prepare( "SELECT post_id FROM
                    ". $this->table_name ." WHERE 
                    post_id = %d", $post_id
                )
            );

            //レコードがなかったら新規追加あったら更新
            if ($get_id) {
                $data = 'GeomFromText("POINT( '.$row->lat.' '.$row->lng.')")';
                //$wpdb->update( $this->table_name, $data, array('post_id' => $row->ID));
                $sql = "UPDATE ".$this->table_name." SET geometry = ".$data." WHERE post_id = ".$row->ID;
                 $wpdb->query($sql);
            }else{
                $value = $row->ID.",GeomFromText('POINT( ".$row->lat." ".$row->lng." )')";
                $sql = "INSERT INTO ".$this->table_name." ( post_id,geometry )VALUES(".$value.")";
                $wpdb->query($sql);
            }
        }
        return true;
    }

    function gpSearch_search($data){
        global $wpdb;
        global $_gps;

        $lat = $data['lat'];
        $lon = $data['lng'];

        $sql = "SELECT post_id, ROUND(GLENGTH(GEOMFROMTEXT( CONCAT( 'LineString( ".$lat." ".$lon." , ', X( geometry ) ,  ' ', Y( geometry ) ,  ')' )) ) * 111000 ) AS distance,"
        ." Glength(GeomFromText( CONCAT('LineString(".$lat." ".$lon.", ',X( geometry ), ' ', Y( geometry ) , ')')) ) * 112.12 * 1000 AS meter"
        ." FROM ".$this->table_name." ORDER BY distance LIMIT 10";
        $results = $wpdb->get_results($sql);

        foreach($results as $key){
            $_gps[$key->post_id] = number_format($key->meter / 1000,2);
        }

        return $results;
    }

    function gpSearch_add_admin_menu(){
        add_submenu_page('options-general.php','GPS設定','GPS設定', 'administrator', __FILE__, array($this,'gpSearch_admin_page'));
    }

    //プラグインの設定画面を表示する関数
    function gpSearch_admin_page() {
/*
        if($_POST){
            var_dump($_POST);
            die();
        }
*/
        if ($_POST['posted'] == 'gpSearch_save') {
            //設定画面で入力された設定値を保存
            update_option(self::GPSEARCH_POST_TYPE, $_POST['gpSearch_post_type']);
            //update_option('gpSearch_lat', $_POST['gpSearch_lat']);
        }

        if($_POST['posted'] == 'gpSearch_save'){
            echo '<div class="updated"><p><strong>設定を保存しました</strong></p></div>';
        }

        echo '<h2>GPS設定</h2>
        <form method="post" action="'.str_replace( '%7E', '~', $_SERVER['REQUEST_URI']).'">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="gpSearch_post_type">投稿タイプ<label></th>
                    <td><input type="text" size="30" name="gpSearch_post_type" id="gpSearch_post_type" value="'.esc_attr(get_option(self::GPSEARCH_POST_TYPE)).'" placeholder="初期値（post）"></td>
                </tr>
            </table>
            <input type="hidden" name="posted" value="gpSearch_save">
            <input type="submit" name="submit" class="button button-primary" value="設定保存">
        </form>';
    }

    function gpSearch_error_page(){
        echo '「Advanced Custom Fields」を"インストール"または"有効化"してください。';
    }

    function gpSearch_script(){
        wp_enqueue_script(
        	'gps-script',
        	WP_PLUGIN_URL . '/content-gps-search/js/postgps.js',
        	array(),
        	time(),
        	true
        );
    }

    function gpSearch_add_meta_field(){
        // if文が必要
        $option_post_type = 'post';
        if(get_option(self::GPSEARCH_POST_TYPE)){
            $option_post_type = esc_attr(get_option(self::GPSEARCH_POST_TYPE));
        }
        add_meta_box('gpSearch_meta_field','GPS登録',array($this,'gpSearch_add_meta_box'),$option_post_type,'normal');
    }

    function gpSearch_add_meta_box(){
        global $post;
        
        $addr = get_post_meta($post->ID,'gpsearch_addr',true);
        $lat = get_post_meta($post->ID,'gpsearch_lat',true);
        $lon = get_post_meta($post->ID,'gpsearch_lon',true);
        
        $html = NULL;
        
        $html .= '<input type="hidden" name="gpSearch_meta_hidden" id="gpSearch_meta_hidden" value="' .wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
        
        // 住所
        $html .= '<div id="" class="field field_type-text">';
        $html .= '<p class="label"><label for="gpsearch-addr-input">住所</label></p>';
        $html .= '<div class="gpSearch-wrap col-sp-12">';
        $html .= '<input type="text" id="gpsearch-addr-input" class="suck text" size="80" name="gpsearch_addr" value="'.$addr.'" placeholder="東京都千代田区千代田１−１ or 建物名">';
        $html .= '　<button type="button" id="gpsearch-search-button" class="button button-gpsearch" name="gpsearch_button">検索</button>';
        $html .= '</div>';
        $html .= '</div>';
        // 検索ボタン
        /*
        $html .= '<div id="" class="field field_type-button">';
        $html .= '<div class="gpSearch-wrap">';
        $html .= '<button id="gpsearch-search-button" class="button button-primary" name="gpsearch_button">緯度経度 検索</button>';
        $html .= '</div>';
        $html .= '</div>';
        */
        // 緯度
        $html .= '<div id="" class="field field_type-text">';
        $html .= '<p class="label"><label for="gpsearch-lat-input">緯度（latitude）</label></p>';
        $html .= '<div class="gpSearch-wrap">';
        $html .= '<input type="text" id="gpsearch-lat-input" class="text" name="gpsearch_lat" value="'.$lat.'" placeholder="35.685175">';
        $html .= '</div>';
        $html .= '</div>';
        // 経度
        $html .= '<div id="" class="field field_type-text">';
        $html .= '<p class="label"><label for="gpsearch-lon-input">経度（longitude）</label></p>';
        $html .= '<div class="gpSearch-wrap">';
        $html .= '<input type="text" id="gpsearch-lon-input" class="text" name="gpsearch_lon" value="'.$lon.'" placeholder="139.7527995">';
        $html .= '</div>';
        $html .= '</div>';
        
        // 地図
        $html .= '<div id="" class="field field_type-text">';
        $html .= '<p class="label"><label for="gpsearch-map">地図（座標 確認用）</label></p>';
        $html .='<div id="gpsearch-map"></div>';
        $html .= '</div>';


        echo $html;

    }

    // データ保存
    function gpSearch_save( $post_id ) {
        
    	if ( isset($_POST['gpSearch_meta_hidden']) ){
    	/*
    		if ( !wp_verify_nonce( $_POST['gpSearch_meta_hidden'], plugin_basename(__FILE__) )) return $post_id;

            // 住所
    		$data_addr = isset($_POST['gpsearch_addr']) ? $_POST['gpsearch_addr'] : '';
    		if($data_addr !=get_post_meta($post_id, 'gpsearch_addr', true))
    			update_post_meta($post_id, 'gpsearch_addr',$data_addr);
    		elseif($data_addr == "")
    			delete_post_meta($post_id, 'gpsearch_addr',get_post_meta($post_id,'gpsearch_addr',true));

    		// 緯度
    		$data_lat = isset($_POST['gpsearch_lat']) ? $_POST['gpsearch_lat'] : '';
    		if($data_lat !=get_post_meta($post_id, 'gpsearch_lat', true))
    			update_post_meta($post_id, 'gpsearch_lat',$data_lat);
    		elseif($data_lat == "")
    			delete_post_meta($post_id, 'gpsearch_lat',get_post_meta($post_id,'gpsearch_lat',true));
    
    		// 経度
    		$data_lon = isset($_POST['gpsearch_lon']) ? $_POST['gpsearch_lon'] : '';
    		if($data_lon !=get_post_meta($post_id, 'gpsearch_lon', true))
    			update_post_meta($post_id, 'gpsearch_lon',$data_lon);
    		elseif($data_lon == "")
    			delete_post_meta($post_id, 'gpsearch_lon',get_post_meta($post_id,'gpsearch_lon',true));
    	*/
    		// オリジナルテーブルへ
    		$results[0]->ID = $post_id;
    		$results[0]->lat = $_POST['gpsearch_lat'];
    		$results[0]->lng = $_POST['gpsearch_lon'];
    		
    		$this->gpSearch_insert($results);
    			
    	}else{
    			return $post_id;
    	}
    }
    
    function gpSearch_front_footer_script() {
        wp_enqueue_script(
            'gpsearch_script',
            plugins_url().'/'.$this->plugin_name.'/js/gpsearch.js',
            array('jquery'),
            ''
        );
    }

    function gpSearch_admin_footer_script() {
        wp_enqueue_script(
            'gpsearch_admin_script',
            plugins_url().'/'.$this->plugin_name.'/lib/script.js',
            array('jquery'),
            '',
            true
        );
        /*
        wp_enqueue_script(
            'googlemap_script',
            '//maps.google.com/maps/api/js?key=AIzaSyCl6wihy9QXXFFKSdiG45gy08AWFEEWXnw',
            array(),
            '',
            true
        );
        */
        wp_enqueue_style(
            'gpsearch_admin_style',
            plugins_url().'/'.$this->plugin_name.'/lib/style.css',
            array(),
            ''
        );
    }
    
    function gpSearch_update(){
        global $wpdb;
        $posts_name = $wpdb->prefix . 'posts';
        $postmeta_name = $wpdb->prefix . 'postmeta';
        $option_post_type = 'post';
        if(get_option(self::GPSEARCH_POST_TYPE)) $option_post_type = esc_attr(get_option(self::GPSEARCH_POST_TYPE));
        $results = $wpdb->get_results("SELECT '.$pots_name.'.ID,X.meta_value AS lat,Y.meta_value AS lng
            FROM '.$posts_name.' 
            LEFT OUTER JOIN '.$postmeta_name.' AS X ON '.$post_name.'.ID = X.post_id 
            LEFT OUTER JOIN '.$postmeta_name.' AS Y ON '.$post_name.'.ID = Y.post_id 
            WHERE '.$post_name.'.post_type = '.$option_post_type.' AND '.$post_name.'.post_status = 'publish' AND (X.meta_key = 'gpsearch_lat' AND Y.meta_key = 'gpsearch_lon')");
        
         $value = $this->geo_insert($results);
    }

}

endif;
$gpSearch = new gpSearch;

?>