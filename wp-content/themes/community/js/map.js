jQuery(function($){
    $('#studioMap li,#workshopMap li').hover(
        function(){
            var str = $(this).attr('class');
            var cl = str.replace('Map','');
            $(this).children('a').addClass('active');
            $('ul.'+cl).addClass('active');
        },
        function(){
            var str = $(this).attr('class');
            var cl = str.replace('Map','');
            $(this).children('a').removeClass('active');
            $('ul.'+cl).removeClass('active');
        }
    );
    $('.prefList').hover(
        function(){
            var cl = $(this).attr('class').split(' ');
            var parent = $(this).parent().attr('class').split(' ');
            var id = parent[1].replace(/Search/g,'Map');
            $('#'+id+' li.'+cl[0]+'Map a').addClass('active');
            $(this).addClass('active');
        },
        function(){
            var cl = $(this).attr('class').split(' ');
            var parent = $(this).parent().attr('class').split(' ');
            var id = parent[1].replace(/Search/g,'Map');
            $('#'+id+' li.'+cl[0]+'Map a').removeClass('active');
            $(this).removeClass('active');
        }
    );
    $('#studioMap a,#workshopMap a').click(function(){
        return false;
    });
});