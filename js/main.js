$(document).ready(function(){

    $('.menu-toggle').click(function(){
        $(this).toggleClass('open');
    });

});

jQuery(document).ready(function($) {

    var bp = 992;
    var delay = 500;
    var speed = 'slow';
    var sf = $('ul.nav-menu');

    if( $(document).width() >= bp ) {
        sf.superfish({
            delay: delay,
            speed: speed
        });
    }

    $(window).resize(function() {
        if($(document).width() >= bp & !sf.hasClass('sf-js-enabled')) {
            sf.superfish({
                delay: delay,
                speed: speed
            });
        } else if($(document).width() < bp) {
            sf.superfish('destroy');
        }
    });

});