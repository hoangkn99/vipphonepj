(function($) {
    $(function() {
        /* ------------------------------------------------------------Carousel-------------------------------------------------- */
       
        var Carousel = {
            body : $('.js-carousel'),
            context : $('.js-carouselCtx'),
            itemLenght : $('.js-carouselList .Carousel-content-item').length,
            list :  $('.js-carouselList'),
            currentX : 0,
            startX : 0,
            currentItem : 1,
            isScrolling : false
        }
        /*---------------------- Csroll with mouse ----------------- */
        
        $(window).on('resize load', function(){
            carouselInnit();
        });
        
       
        function scrollCarousel(index) {
            
            Carousel.isScrolling = true;
            var carouselItem = $('#carousel' + index);
            $('.Carousel-nav-item--active').removeClass('Carousel-nav-item--active');
            carouselItem.addClass('Carousel-nav-item--active');
            $('.js-carouselNavItem[data-index='+index+']').addClass('Carousel-nav-item--active');
            $('.js-carouselList').animate({
                'left':0 - carouselItem.position().left
            }, 300, function(){
                Carousel.isScrolling = false;
            }); 
        }

        function carouselInnit() {
            var mWidth = Carousel.body.width();
            var mHeight = mWidth/2.667;
            /*console.log(mWidth);
            console.log(mHeight);*/
            Carousel.context.height(mHeight);
        }


        
        $('.js-carouselList img').on('mousedown', function(e){
            e.preventDefault();
        });

        $('.js-carouselList').on('mousedown', function(e){
            Carousel.currentX = e.pageX;
            Carousel.startX = Carousel.currentX;
            window.addEventListener('mousemove', carouselGrabbing);
            window.addEventListener('mouseup', carouselStop);
        });

        function carouselGrabbing(e) {
            var distanceX = e.pageX - Carousel.currentX; // khoảng cách kéo chuột
            Carousel.currentX = e.pageX;
            Carousel.list.css({
                left: Carousel.list.position().left + distanceX
            });
            if(e.pageX - Carousel.startX >= 50){
                //function a
                Carousel.currentItem--;
                if(Carousel.currentItem<1){
                    Carousel.currentItem = Carousel.itemLenght;
                }
                scrollCarousel(Carousel.currentItem);
                window.removeEventListener('mousemove', carouselGrabbing);
                window.removeEventListener('mouseup', carouselStop);
           
            } else if (Carousel.startX - e.pageX >=50){
                
                Carousel.currentItem++;
                if(Carousel.currentItem>Carousel.itemLenght){
                    Carousel.currentItem = 1;
                }

                scrollCarousel(Carousel.currentItem);
                window.removeEventListener('mousemove', carouselGrabbing);
                window.removeEventListener('mouseup', carouselStop);
            }

            
            

            
            
        }
        function carouselStop(e) {
            console.log('stop');
            window.removeEventListener('mousemove', carouselGrabbing);
            window.removeEventListener('mouseup', carouselStop);
        }

       
        /* Animation hamberger */
        $('.js-navHamburger').click(function(){
             $('.js-nav').toggleClass('Nav--active');
            if($('.js-nav').hasClass('Nav--active')) {
                 $('body').addClass('Noscroll');
             }
             else {
                 $('body').removeClass('Noscroll');
             }
        });

        /* ---- carousel--------------- */
        
        //console.log(itemLenght);
        carouselInnit();
      
      
      

        $('.js-carouselNavItem').click(function(){
            if ($(this).hasClass('Carousel-nav-item--active')) {
                return;
            }
            var index = $(this).attr('data-index');
            Carousel.currentItem = index;
            scrollCarousel(Carousel.currentItem);


        });
        /* carousel with button */
        $('.js-carouselBtn').click(function(){
            if(Carousel.isScrolling){
                return;
            }
            if($(this).hasClass('Carousel-content__btn--right')) {
                //event for right button
                Carousel.currentItem++;
                if(Carousel.currentItem>Carousel.itemLenght)
                {
                    Carousel.currentItem=1;
                }
            }
            else {
                Carousel.currentItem--;
                if(Carousel.currentItem<1)
                {
                    Carousel.currentItem=Carousel.itemLenght;
                }
            }
            scrollCarousel(Carousel.currentItem);
        });

      
       

    });
    
})(jQuery);