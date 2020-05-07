(function($) {
    $(function() {

        $('.js-navHamburger').click(function(){
             $('.js-nav').toggleClass('Nav--active');
            if($('.js-nav').hasClass('Nav--active')) {
                 $('body').addClass('Noscroll');
             }
             else {
                 $('body').removeClass('Noscroll');
             }
        });
    });
    
})(jQuery);