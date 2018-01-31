<?php

function front_footer_script() {
    if(!is_admin()) :
        
        wp_enqueue_style(
            'jQuery UI',
            //'//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css'
            get_template_directory_uri().'/lib/jquery/jquery-ui.min.css'
        );
        
        wp_enqueue_script(
            'jQuery UI',
            //'//code.jquery.com/ui/1.12.1/jquery-ui.min.js',
            get_template_directory_uri().'/lib/jquery/jquery-ui.min.js',
            array('jquery'),
            false,
            true
        );
/*
        wp_enqueue_script(
            'animsitionjs',
            get_template_directory_uri().'/lib/animsition/js/animsition.min.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_style(
            'animsitioncss',
            get_template_directory_uri().'/lib/animsition/css/animsition.min.css'
        );
*/
        
        wp_enqueue_script(
            'multiplejs',
            get_template_directory_uri().'/lib/multiple/multiple-select.js',
            array('jquery'),
            false,
            true
        );
        
        wp_enqueue_style(
            'multiplecss',
            get_template_directory_uri().'/lib/multiple/multiple-select.css'
        );
        
        wp_enqueue_script(
            'iScroll',
            get_template_directory_uri().'/lib/iscroll/iscroll-lite.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_script(
            'drawerjs',
            get_template_directory_uri().'/lib/drawer/js/drawer.min.js',
            array('jquery'),
            false,
            true
        );
        
        wp_enqueue_style(
            'drawercss',
            get_template_directory_uri().'/lib/drawer/css/drawer.min.css'
        );
        
        wp_enqueue_script(
            'venojs',
            get_template_directory_uri().'/lib/venobox/venobox.min.js',
            array('jquery'),
            false,
            true
        );
        
        wp_enqueue_style(
            'venocss',
            get_template_directory_uri().'/lib/venobox/venobox.css'
        );
        
        wp_enqueue_script(
            'slick',
            get_template_directory_uri().'/lib/slick/slick.min.js',
            array('jquery'),
            false,
            true
        );
        wp_enqueue_style(
            'slickcss',
            get_template_directory_uri().'/lib/slick/slick.css'
        );

        wp_enqueue_style(
            'slicktheme',
            get_template_directory_uri().'/lib/slick/slick-theme.css'
        );
        /*
        wp_enqueue_script(
            'tabsjs',
            get_template_directory_uri().'/lib/tabs/tabs.js',
            array('jquery'),
            false,
            true
        );
        */
        
        wp_enqueue_script(
            'calendar',
            get_template_directory_uri().'/js/calendar.js',
            array(),
            false,
            true
        );
        
        wp_enqueue_script(
            'map',
            get_template_directory_uri().'/js/map.js',
            array(),
            false,
            true
        );

        wp_enqueue_style(
            'style',
            get_template_directory_uri().'/style.css'
        );
        
        /*
        wp_enqueue_style(
            'Font Awesome',
            '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'
        );
        */
        wp_enqueue_script(
            'Font Awesome',
            'https://use.fontawesome.com/9520ab88b9.js',
            array(),
            false,
            true
        );
        
        wp_enqueue_script(
            'org-accordion',
            get_template_directory_uri().'/js/accordion.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_script(
            'script',
            get_template_directory_uri().'/js/script.js',
            array(),
            false,
            true
        );

        /*
        wp_enqueue_script(
            'modal',
            get_template_directory_uri().'/js/modal.js',
            array(),
            false,
            true
        );
        
        wp_enqueue_script(
            'mega',
            get_template_directory_uri().'/js/mega.js',
            array(),
            false,
            true
        );
        
        if(is_page('schedule')):
            wp_enqueue_script(
                'multiple',
                get_template_directory_uri().'/plugin/multiple/js/jquery.select-multiple.js',
                array('jquery'),
                false,
                true
            );
            wp_enqueue_script(
                'calendar',
                get_template_directory_uri().'/js/calendar.js',
                array('jquery'),
                false,
                true
            );
        endif;
        */

        /*
        if(is_page('schedule') || is_singular('program')) :
            wp_enqueue_style(
                'material-css',
                get_template_directory_uri().'/plugin/material-modal/css/material.css'
            );
            wp_enqueue_style(
                'material-modal-css',
                get_template_directory_uri().'/plugin/material-modal/css/material-modal.css'
            );
            wp_enqueue_script(
                'material',
                '//storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js',
                array(),
                false,
                true
            );
            wp_enqueue_script(
                'material-modal',
                get_template_directory_uri().'/plugin/material-modal/js/material-modal.min.js',
                array(),
                false,
                true
            );
        endif;
        */
        
        /*
        //if(is_page('teacher') || is_archive('program')){
            wp_enqueue_script(
                'tab',
                get_template_directory_uri().'/js/tab.js',
                array('jquery'),
                false,
                true
            );
        //}
        
        if(is_page()){
            wp_enqueue_script(
                'form',
                get_template_directory_uri().'/js/form.js',
                array(),
                false,
                true
            );
        }

        wp_enqueue_script(
            'countUp',
            get_template_directory_uri().'/js/countUp.js',
            array(),
            false,
            true
        );
        */
        
        if(is_singular()) :
            wp_enqueue_script(
                'googlemap',
                '//maps.google.com/maps/api/js?libraries=places&key=AIzaSyArzpB5wM2e0rUrt4790b4kH-eSzPo7onw',
                array('jquery'),
                false,
                true
            );
        endif;

    endif;
}
add_action('wp_enqueue_scripts','front_footer_script',3);

function admin_footer_script(){
    wp_enqueue_script(
        'admin_footer_script',
        get_template_directory_uri().'/js/admin.js',
        array('jquery'),
        '',
        true
    );
}
add_action( 'admin_enqueue_scripts', 'admin_footer_script' );

function aprilfool_sctipt(){
    
    echo '<script>
    <!--
    var __input = [];
    __konami = [38,38,40,40,37,39,37,39,66,65];
    var __aprilfool_img;
    var __aprilfool_i = 1;
    jQuery(window).keyup(function(e){
        __input.push(e.keyCode);
        if (__input.toString().indexOf(__konami) >= 0) {
            
            //jQuery(".top-banner .slick-slide img").each(function(){
                //console.log("ok");
                //__aprilfool_img = "'.get_template_directory_uri().'/images/aprilfool/aprilfool-0" + __aprilfool_i + ".jpg";
                __aprilfool_img = "'.get_template_directory_uri().'/images/aprilfool/aprilfool-02.jpg";
                jQuery(".top-banner .slick-slide img").attr("src",__aprilfool_img);
                /*
                if(__aprilfool_i == 4){
                    __aprolfool_i = 1
                }else{
                    __aprilfool_i++;
                }
                */
            //});
            __input = [];
        }
    });
    -->
    </script>';

}

//add_action('wp_footer','aprilfool_sctipt',2000);

function map_script(){
    if(is_singular()) :
    echo '
        <script>
        var myMap;
        var directionsDisplay;
        var geocoder;
        function gpSearch_display(lat,lon){
            //console.log(lat,lon)
            myMap = new google.maps.Map(document.getElementById("gpsearch-map"), {
                // ズームレベル
                zoom: 18,
                // 中心点緯度経度
                center: new google.maps.LatLng(lat, lon),
                // 距離目盛りの表示
                //scaleControl: true,
                // 地図の種類
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var gMarker = new google.maps.Marker({
                // マーカーを置く緯度経度
                position: myMap.getCenter(),
                map: myMap,
                //position: {lat: lat, lng: lon},
                //icon: "/images/icon-pin.png",
                //draggable: true
            });
            /*
            // center_changed
            google.maps.event.addListener(myMap, "center_changed", function(){
                var pos = myMap.getCenter();
                gMarker.setPosition(pos);
                $("#gpsearch-lat-input").val(pos.lat);
                $("#gpsearch-lon-input").val(pos.lng);
            });
            */
        }
        
        function getRoute(obj){
          var latlng = obj;
          var directionsService = new google.maps.DirectionsService();
          var request = {
            origin: latlng, //入力地点の緯度、経度
            destination: myMap.getCenter(),
            travelMode: google.maps.DirectionsTravelMode.WALKING //ルートの種類
          }
          directionsService.route(request,function(result, status){
            toRender(result);
          });
        }
        function toRender(result){
          directionsDisplay = new google.maps.DirectionsRenderer();
          directionsDisplay.setDirections(result); //取得した情報をset
          directionsDisplay.setMap(myMap); //マップに描画
        }
        function getLatLng(){
            var pos = myMap.getCenter();
            //console.log(pos);
            $("#gpsearch-lat-input").val(pos.lat);
            $("#gpsearch-lon-input").val(pos.lng);
            //return false;
        }
        
        </script>
    ';
    endif;
}

add_action('wp_footer','map_script',2000);

?>