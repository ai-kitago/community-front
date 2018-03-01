(function($){
	$.fn.gpSearch = function(options){
		var target = $(this);
		var options = $.extend({
			enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
		}, options);

		target.click(function(){

		    function success(pos) {
                var crd = pos.coords;
                var hostname = location.hostname;
                var link = '//'+hostname+'/studio/?lat='+crd.latitude+'&lng='+crd.longitude+'&gps=1';
                if (navigator.userAgent.indexOf('safari') != -1) {
                    javascript:location.href　=　link;
                }else{
                    location.href = link;
                }
            };

            function error(err) {
                alert('位置情報が取得できません。Error：('+err.code+'）'+err.message);
            }
    		navigator.geolocation.getCurrentPosition(success, error, options);

    		return this;

		});
	}
})(jQuery);