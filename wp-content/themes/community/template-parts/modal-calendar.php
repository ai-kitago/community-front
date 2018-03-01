<div class="modal">
    <input id="modal-trigger" class="checkbox" type="checkbox">
    <div class="modal-overlay">
        <label for="modal-trigger" class="o-close"></label>
        <div class="modal-wrap">
            <!-- <label for="modal-trigger" class="close">&#10006;</label> -->
            <h2>クラスカレンダー</h2>
            <div id="monthly"></div>
        </div>
    </div>
</div>
<script>
<!--
var eventjson =
{
  "monthly": [
    <?php foreach($calendarClass->getCalendar() as $key => $value) : ?>
    {
      <?php
      echo '"id":'.$value['calendar_id'].',
      "name":"'.$value['name'].'<br>'.$value['content'].'<br>';
      foreach($value['teacher'] as $val){
        echo $calendarClass->getInstructor($val).' ';
      }
      echo '",
      "startdate":"'.$value['startdate'].'",
      "enddate":"'.$value['enddate'].'",
      "starttime":"'.$value['starttime'].'",
      "endtime":"'.$value['endtime'].'",
      "content":"'.$value['content'].'",
      "teacher":[';
      foreach($value['teacher'] as $val){
        echo '"'.$val.'",';
      }
      echo '],
      "note":"'.$value['note'].'",
      "color": "#FFB128",
      "url": "#"';
      ?>
    },
    <?php endforeach; ?>
  ]
};
-->
</script>