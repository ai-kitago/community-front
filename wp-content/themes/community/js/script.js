jQuery(function($){
    $('.drawer').drawer();
    $('.venobox').venobox();
    $( ".tabs" ).tabs();
    $( ".accordion" ).accordion({
        //collapsible: true
        heightStyle: "line-content"
    });
    /*
    $("select[multiple='multiple']").multipleSelect({
        disable: true,
        placeholder: "複数選択可"
    });
    */
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