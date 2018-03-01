jQuery(function($){
    $('.drawer').drawer();
    $('.venobox').venobox();
    $( ".tabs" ).tabs();
    $( ".accordion" ).accordion({
        //collapsible: true
        heightStyle: "line-content"
    });
    $('.button-search').on('click',function(){
        $('.overlay-search').show();
        $('.header-search').show();
        $('.field-search').focus();
    });
    $('.overlay-search').on('click',function(){
        $(this).hide();
        $('.header-search').hide();
    });
    $('.gpSearch').gpSearch();
    _texrareaAutoHeight();
});

jQuery(function($){
    $(window).scroll(function(){
        var header;
        if($('.front-header').length){
            header = $('.front-header');
        }else if($('.single-header').length) {
            header = $('.single-header');
        }else if($('.page-header').length){
            header = $('.page-header');
        }else if($('.tax-header').length){
            header = $('.tax-header');
        }
        if(header != undefined){
            var menu = $('.site-header');
            var section = header.offset().top + header.height() - menu.height();
            if($(this).scrollTop() > section){
                menu.css('background-color','rgba(0,0,0,0.5)');
                //$('.gotop').addClass('show');
            }else{
                menu.css('background-color','rgba(0,0,0,0)');
                //$('.gotop').removeClass('show');
            }
        }
    });
});

jQuery(function($){
    $('.slick-header ul').slick({
        accessibility: true,
        arrows: true,
        dots: true,
        infinite: true,
        speed: 400,
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        //variableWidth: true,
        cssEase: 'ease-out',
        autoplay: true,
        autoplaySpeed: 6000,
        lazyLoad: 'progressive', // ondemand OR progressive
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    dots: true,
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.slick-tax ul').slick({
        accessibility: true,
        arrows: true,
        dots: true,
        infinite: true,
        speed: 400,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        //variableWidth: true,
        cssEase: 'ease-out',
        autoplay: true,
        autoplaySpeed: 6000,
        lazyLoad: 'progressive', // ondemand OR progressive
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    dots: true,
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.slick-instructor').slick({
        accessibility: true,
        arrows: true,
        dots: true,
        infinite: true,
        speed: 400,
        slidesToShow: 6,
        slidesToScroll: 6,
        //centerMode: true,
        //centerPadding: '15px',
        //variableWidth: true,
        cssEase: 'ease-out',
        autoplay: true,
        autoplaySpeed: 6000,
        lazyLoad: 'progressive', // ondemand OR progressive
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    dots: true,
                    arrows: false,
                    //centerMode: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ]
    });
    $('.slick-profile ul').slick({
        accessibility: true,
        arrows: true,
        dots: true,
        infinite: true,
        speed: 400,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        //variableWidth: true,
        cssEase: 'ease-out',
        autoplay: true,
        autoplaySpeed: 6000,
        lazyLoad: 'progressive', // ondemand OR progressive
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    dots: true,
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
});

jQuery(function($){
    $('.sexGroup').on('click', function() {
        if ($(this).prop('checked')){
            // 一旦全てをクリアして再チェックする
            $('.sexGroup').prop('checked', false);
            $(this).prop('checked', true);
        }
    });
});

jQuery(function($){
    $('.entry-news ul li').click(function(){
        $(this).toggleClass('open');
        $(this).children('.news-content').slideToggle('slow');
    });
});

jQuery(function($){
    $('.pref-li .pref-title').click(function(){
        var $this = $(this).parent();
        $this.toggleClass('open');
        $this.children('.pref-content').slideToggle('slow');
    });
});

jQuery(function($){
    monthlyRefresh();
    function monthlyRefresh(){
        if(!$('#monthly').length) return;
        $('#monthly').empty();
        $('#monthly').monthly({
            disablePast: true,
            mode: 'event',
            dataType: 'json',
            events: eventjson
        });
        var sep = '-';
        var newDate = new Date();
        var now = newDate.getFullYear() + sep + (newDate.getMonth() + 1) + sep + 1;
        var next = newDate.getFullYear() + sep + (newDate.getMonth() + 2) + sep + 1;
        if($('.monthly-day-event').attr('data-date') == now ) {
            $('.monthly-prev').hide();
        }
        $('.monthly-next').on('click',function(){
            if($('.monthly-day-event').attr('data-date') == now ) {
                $('.monthly-next').hide();
                $('.monthly-prev').show();
                //$('monthly-reset').remove();
            }
        });
        $('.monthly-prev').on('click',function(){
            if($('.monthly-day-event').attr('data-date') == next ) {
                $('.monthly-next').show();
                $('.monthly-prev').hide();
            }
        });
	}
});

function _texrareaAutoHeight(){
    var elements = document.getElementsByTagName('textarea');
    for(var i = 0; i < elements.length; i++){
        var ta = elements[i];
        //console.log(ta);
        ta.style.lineHeight = "20px";//init
        if(ta.value === ''){
            ta.style.height = "92px";//init
        }
        ta.addEventListener("input",function(evt){
            if(evt.target.scrollHeight > evt.target.offsetHeight){
                if(evt.target.scrollHeight > 92){
                    evt.target.style.height = evt.target.scrollHeight + "px";
                }else{
                    evt.target.style.height = 92 + "px";
                }
            }else{
                //console.log('2');
                if(evt.target.scrollHeight > 92){
                    var height,lineHeight;
                    while (true){
                        height = Number(evt.target.style.height.split("px")[0]);
                        lineHeight = Number(evt.target.style.lineHeight.split("px")[0]);
                        evt.target.style.height = height - lineHeight + "px"; 
                        if(evt.target.scrollHeight > evt.target.offsetHeight){
                            evt.target.style.height = evt.target.scrollHeight + "px";
                            break;
                        }
                    }
                }
            }
        });
    }
}