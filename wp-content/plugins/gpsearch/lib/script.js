jQuery(function($){
    $('#gpsearch-search-button').click(function(){
        var addr="";
        if (document.getElementById("gpsearch-addr-input").value!=""){
            addr = document.getElementById("gpsearch-addr-input").value;
        }else{
            addr = "東京";
        }
        var pram = "address="+addr+"&sensor=false";
        var url = "//maps.google.com/maps/api/geocode/json?"+pram;
        

        $.ajax({
            type: 'GET',
            url: url,
            cache: false,
            datatype: 'jsonp',
            success: function(json){
                var obj = json.results[0].geometry.location;
                $('#gpsearch-lat-input').val(obj.lat);
                $('#gpsearch-lon-input').val(obj.lng);
                
                gpSearch_display(obj.lat,obj.lng);
            }
        });
    });
});

function gpSearch_display(lat,lon){
    console.log(lat,lon)
    var myMap = new google.maps.Map(document.getElementById("gpsearch-map"), {
        // ズームレベル
        zoom: 18,
        // 中心点緯度経度
        center: new google.maps.LatLng(lat, lon),
        // 距離目盛りの表示
        scaleControl: true,
        // 地図の種類
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var myMarker = new google.maps.Marker({
        // マーカーを置く緯度経度
        position: new google.maps.LatLng(lat, lon),
        map: myMap
      });
      var myInfoWindow = new google.maps.InfoWindow({
        // 吹き出しに出す文
        content: "ここを登録します"
      });
      // 吹き出しを開く
      myInfoWindow.open(myMap, myMarker);
      // 吹き出しが閉じられたら、マーカークリックで再び開くようにしておく
      google.maps.event.addListener(myInfoWindow, "closeclick", function() {
        google.maps.event.addListenerOnce(myMarker, "click", function(event) {
          myInfoWindow.open(myMap, myMarker);
        });
    });
}