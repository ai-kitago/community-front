var devw = jQuery(window).innerWidth();
/*
jQuery(function(){
    if(devw > 640){
        _calendarFunc();
    }else{
        //_calendarMenu();
        _calendarFuncSP();
    }
    //_calendarNarrow();
});
*/
jQuery(window).load(function(){
    if(devw > 640){
        _calendarFunc();
    }else{
        _calendarFuncSP();
    }
});

jQuery(window).resize(function(){
    if(devw > 640){
        _calendarFunc();
    }else{
        _calendarFuncSP();
    }
})

function _calendarNarrow(){
    var area = jQuery('select[name="area[]"]');
    var options = area.children('option');
    for(var i = 0; i < options.length; i++){
        var selected = options.eq(i).attr('selected');
        if( typeof selected !== 'undefined' && selected !== false ){
            var value = options.eq(i).val();
            var re = new RegExp(value,'i');
            var place = jQuery('select[name="place"]');
            var options = place.children('option');
            for(var i = 0; i < options.length; i++){
                var option = options.eq(i).attr('data-parent');
                //var attr = options[i].getAttribute('data-parent');
                //console.log(option);
                if(!option.match(re)){
                    options.eq(i).remove();
                }
                
            }
        }
    }
}

function _calendarFunc(){
    
    var elemT = 24;
    
    jQuery('.ym').each(function(){
        var monArea = jQuery(this);
        var monH = monArea.offset().top;
        var monB = monH + monArea.height();
        
        var headerH = jQuery('.site-header').height();
        var parent = monArea.parent('.month-box');
        var parentH = parent.offset().top;
        
        var scT = 85;
        var marginT = 20;
        var marginB = 40;
        
        jQuery(window).scroll(function(){
            var sc = jQuery(window).scrollTop() + scT;
            var top = sc - monH + headerH ;
            if(sc > monH && sc < monB - headerH - marginB){
                //monArea.children('p').css('top',top+'px');
                monArea.children('p').addClass('fixed');
                monArea.children('p').css('top',headerH + marginT + 'px');
            } else if (sc > monB - headerH){
                monArea.children('p').removeClass('fixed');
                monArea.children('p').css({'top' : 'auto','bottom' : top+'px'});
            } else {
                monArea.children('p').removeClass('fixed');
                monArea.children('p').css('top', '24px');
            }
        });
        
        /*
        jQuery(window).scroll(function(){
            var sc = jQuery(window).scrollTop() + scT;
            var top = sc - monH + headerH ;
            if(sc < parentH + monArea.height() + marginT){
                monArea.removeClass('fixed');
                monArea.css('top','0px');
            }else if(sc > parentB + 10){
                monArea.removeClass('fixed');
                monArea.css('top',parent.outerHeight() - monArea.outerHeight() + 'px');
            }else{
                monArea.addClass('fixed');
                monArea.css({
                    'width':parentW + 'px',
                    'top':'0px'
                });
            }
        });
        */
    });
    
    jQuery('.dw').each(function(){
        var dayArea = jQuery(this);
        var dayH = dayArea.offset().top;
        var dayB = dayH + dayArea.height();
        
        var headerH = jQuery('.site-header').height();
        var parentH = dayArea.parent('.day-box').siblings('.ym').outerHeight();
        
        var scT = 85;
        var marginT = 20;
        var marginB = 40;
        
        console.log(dayH);
        
        jQuery(window).scroll(function(){
            var sc = jQuery(window).scrollTop() + scT;
            var top = sc - dayH + headerH;
            if(sc < dayH){
                dayArea.children('p').removeClass('fixed');
                dayArea.children('p').css('top','24px');
            } else if (sc > dayB - scT){
                dayArea.children('p').removeClass('fixed');
                dayArea.children('p').css({'top' : 'auto','bottom' : elemT + 'px'});
            } else {
                dayArea.children('p').addClass('fixed');
                dayArea.children('p').css('top',headerH + marginT + 'px');
            }
        });
        
        /*
        jQuery(window).scroll(function(){
            var sc = jQuery(window).scrollTop() + scT;
            var children = dayArea.children('p');

            if(sc < dayH + parentH - marginT){
                children.removeClass('fixed');
                children.css('top', '20px');
            }else if(sc > dayB - parentH - children.height() + marginB){
                children.removeClass('fixed');
                children.css('top',dayArea.outerHeight() - children.outerHeight() - marginB + 'px');
            }else{
                children.addClass('fixed');
                children.css('top', parentH + 20 + 'px');
            }
        });
        */
    });
}

function _calendarFuncSP(){
    
    jQuery('.ym').each(function(){

        var monArea = jQuery(this);
        var parent = monArea.parent('.month-box');
        var parentH = parent.offset().top;
        var parentB = parentH + parent.outerHeight();
        var parentW = parent.width();
        var children = jQuery(this).next().children().children('p');
        var monH = monArea.offset().top;
        var monB = monH + monArea.height();
        
        var headerH = jQuery('.header-main').height();

        var scT = 60;
        var marginT = 30;
        var marginB = 40;
        
        jQuery(window).scroll(function(){
            var sc = jQuery(window).scrollTop() + scT;
            var top = sc - monH + headerH ;
            if(sc < parentH + monArea.height() + marginT){
                monArea.removeClass('fixed');
                monArea.css('top','0px');
            }else if(sc > parentB + 10){
                monArea.removeClass('fixed');
                monArea.css('top',parent.outerHeight() - monArea.outerHeight() + 'px');
            }else{
                monArea.addClass('fixed');
                monArea.css({
                    'width':parentW + 'px',
                    'top':'0px'
                });
            }
        });
    });
    
    jQuery('.dw').each(function(){
        var dayArea = jQuery(this);
        var dayH = dayArea.offset().top;
        var dayB = dayH + dayArea.outerHeight();
        var parentH = dayArea.parent('.day-box').siblings('.ym').outerHeight();
        
        var scT = 60;
        var marginT = 40;
        var marginB = 20;

        jQuery(window).scroll(function(){
            var sc = jQuery(window).scrollTop() + scT;
            var children = dayArea.children('p');

            if(sc < dayH + parentH - marginT){
                children.removeClass('fixed');
                children.css('top', '20px');
            }else if(sc > dayB - parentH - children.height() + marginB){
                children.removeClass('fixed');
                children.css('top',dayArea.outerHeight() - children.outerHeight() - marginB + 'px');
            }else{
                children.addClass('fixed');
                children.css('top', parentH + 20 + 'px');
            }
        });
    });
}

function _calendarMenu() {
    if(jQuery('.calendar-menu').length){
        var url = location.href;
        var calmenu = jQuery('.calendar-menu');
        if(url.match(/[?]/)){
            calmenu.children('.menu-title').addClass('close');
            calmenu.find('form').css('display','none');
        }
        
        //var element = jQuery('.calendar-menu');
        calmenu.children('.menu-title').on("click", function() {
            if(jQuery(this).hasClass('close')){
                jQuery(this).removeClass('close');
            }else{
                jQuery(this).addClass('close');
            }
            calmenu.find('form').slideToggle('fast',function(){
                _calendarFuncSP();
            });
        });
    }
}