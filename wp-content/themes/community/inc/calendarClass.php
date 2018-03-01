<?php
class calendarClass {
    public function getCalendar($id = NULL){
        $array = array(
            array(
                'calendar_id' => '156',
                'startdate' => '2018-02-28',
                'enddate' => '2018-02-28',
                'starttime' => '17:00',
                'endtime' => '18:30',
                'name' => 'アーユルヴェーダ基礎講座【レギュラークラス】',
                'content' => 'アーユルヴェーダを基本とした初心者からでも楽しめるヨガクラス',
                'teacher' => array('01'),
                'note' => ''
            ),
            array(
                'calendar_id' => '213',
                'startdate' => '2018-02-24',
                'enddate' => '2018-02-24',
                'starttime' => '17:00',
                'endtime' => '18:30',
                'name' => '聖なる夜の瞑想ヨガ【特別クラス】',
                'content' => 'クリスマスイブの夜に瞑想でサンタとの出会い',
                'teacher' => array('02'),
                'note' => ''
            ),
            array(
                'calendar_id' => '13',
                'startdate' => '2018-02-24',
                'enddate' => '2018-02-24',
                'starttime' => '8:00',
                'endtime' => '10:30',
                'name' => '寒中朝ヨガクラス【レギュラークラス】',
                'content' => '真冬の早朝にカラダをほぐす',
                'teacher' => array('04'),
                'note' => 'この日は先生が嫌だと言っています'
            ),
            array(
                'calendar_id' => '4',
                'startdate' => '2018-02-26',
                'enddate' => '2018-02-28',
                'starttime' => '10:00',
                'endtime' => '19:30',
                'name' => '耐久ヨガクラス【特別クラス】',
                'content' => '3日間の耐久ヨガクラスでは、寝ず食べずの限界に挑みます',
                'teacher' => array('01'),
                'note' => ''
            ),
        );
        return $array;
    }
    public function getInstructor($id = NULL){
        $array = array(
            array('id' => '01','name' => '西浦莉紗','subname' => 'Risa Nishiura','area' => array(13,14,11),'status' => 'success'),
            array('id' => '02','name' => 'ippei','subname' => NULL,'area' => array(13,14,11),'status' => 'success'),
            array('id' => '03','name' => '上遠野 紗織','subname' => 'Saori Katohno','area' => array(13,14,11),'status' => 'nodata'),
            array('id' => '04','name' => '佐藤おりえ','subname' => 'Orie Sato','area' => array(13,14,11),'status' => 'success'),
            array('id' => '05','name' => '理美','subname' => 'さとみ','area' => array(13,14,11),'status' => 'nodata')
        );
        if(!is_null($id)){
            foreach($array as $value){
                if($value['id'] == $id){
                    return $value['name'];
                }
            }
        }
        return $array;
    }
}
?>