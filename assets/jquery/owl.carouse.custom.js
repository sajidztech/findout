$(function ($) {
    $('.featuredpropertyslider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('#owltestimonialsliderauthorimage').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            }
        }
    });
    $('#owltestimonialsliderathorcontents').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            }
        }
    });
    var owl = $('#owltestimonialsliderauthorimage, #owltestimonialsliderathorcontents');
    owl.owlCarousel();
    $('.nextbtn').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.prvbtn').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    });


/* Hero Content with property slider */
$('.herocontentsiderwithpropertywrapper').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items: 1,
});

/* Floor structure slider in sinple page */
$('.floorstructureslider').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots: true,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    items: 1,
});


})(jQuery);