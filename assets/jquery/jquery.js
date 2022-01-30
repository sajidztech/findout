jQuery(window).on("load", function () {
    jQuery("body").removeClass("min-vh-100 overflow-hidden");
    jQuery(".preloaderwrapper").hide();
});

(function ($) {
    $('input').checkboxradio({
        icon: false
      });
    $('input').click(function(){
        alert('test');
    });

    $("#mainmenubar").aceResponsiveMenu({
        resizeWidth: '991',
        animationSpeed: 'fast',
        accoridonExpAll: true,
    });
    $("#mainmenubar li").children("ul").parent("li").children("a").append('<i class="fi-rs-angle-small-down"></i>');
    $("#mainmenubar li").children("ul").parent("li").children("a").attr("href", "javascript:;");

    var menudistancefromtop = $(".mainmenufullwrapper").offset().top;
    menudistancewithsomespace = menudistancefromtop + 300;
    menuheight = $(".mainmenufullwrapper").height();
    menuheightwithtopdistance = menudistancefromtop + menuheight;
    windowheight = $(window).height();
    mobilemenuoffsettop = $(".mainmenufullwrapper").offset().top;
    mobilemenuheight = windowheight - menudistancefromtop - 70;

    $(window).on('scroll', function() {
        if($(window).scrollTop() > menuheightwithtopdistance) {
            $(".mainmenufullwrapper").addClass("position-fixed-Y--100").removeClass("position-absolute top-0");
        }
        if($(window).scrollTop() > menudistancewithsomespace) {
            $(".mainmenufullwrapper").addClass("position-fixed-Y-0 whitebg").removeClass("position-fixed-Y--100").css({'box-shadow' : '10px -8px 19px #202020'});
            $(".ace-responsive-menu li a").addClass('darkcolor');
            $(".ace-responsive-menu li a i").addClass('darkcolor');
            $(".mainmenufullwrapper .menulogo a img").attr('src', "assets/images/logo.png");
            $(".mainmenufullwrapper .menu-toggle #menu-btn span").addClass("basebg").removeClass("whitebg");
        }
        if($(window).scrollTop() < menudistancewithsomespace) {
            $(".mainmenufullwrapper").removeClass("position-fixed-Y-0 position-fixed-Y--100 whitebg").addClass("position-absolute top-0").css({'box-shadow' : '0 0 0px #202020'});
            $(".ace-responsive-menu li a").removeClass('darkcolor');
            $(".ace-responsive-menu li a i").removeClass('darkcolor');
            $(".mainmenufullwrapper .menulogo a img").attr('src', "assets/images/logo-white.png");
            $(".mainmenufullwrapper .menu-toggle #menu-btn span").addClass("whitebg").removeClass("basebg");
        }
    });

    $(".mainmenufullwrapper .menu-toggle #menu-btn").click(function () {
        $(".icon-bar").toggleClass("w-100").css({"transition" : "0.4s"});
        $("body").toggleClass("min-vh-100 overflow-hidden");
        $(".mainmenufullwrapper").css({'height' : mobilemenuheight});
    });
    $( "#pricesliderrange" ).slider({
        range: true,
        min: 0,
        max: 10000,
        values: [ 2500, 8000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#pricesliderrange" ).slider( "values", 0 ) + " - $" + $( "#pricesliderrange" ).slider( "values", 1 ) );

    $( "#sizesliderrange" ).slider({
        range: true,
        min: 100,
        max: 5000,
        values: [ 500, 3000 ],
        slide: function( event, ui ) {
            $( "#size" ).val( "sq ft. " + ui.values[ 0 ] + " - sq ft. " + ui.values[ 1 ] );
        }
    });
    $( "#size" ).val( "sq ft. " + $( "#sizesliderrange" ).slider( "values", 0 ) + " - sq ft. " + $( "#sizesliderrange" ).slider( "values", 1 ));

    $('.clicktoshow').click(function() {
        $(this).parent('div').children('.searchbarmodalpopup').slideToggle(300);
    });
    $('.btnforadvancedsearchfilter, .advanced-search-form-close-btn').click(function() {
        $('.searchbarmodalpopupforadvancedtbn').slideToggle(300);
        $('.advancedsearchformfirstwrapper, .advancedsearchform').toggleClass('rotate-0')
        $('.herocontentwrapper').css({'padding' : '100px 0 50px 0',})
    });
    $('.advanced-search-form-close-btn').click(function() {
        $('.searchbarmodalpopupforadvancedtbn').slideUp(300);
    });

    $('.propertylisting-v-1').directionalHover({
        overlay: "property-v-1-details-2-overlay",
        easing: "swing",
        speed: 400
    });

    $(".featuredlocationswrapper:nth-child(5n+1)").addClass("col-md-4 col-sm-6 col-xs-12");
    $(".featuredlocationswrapper:nth-child(5n+2)").addClass("col-md-4 col-sm-6 col-xs-12");
    $(".featuredlocationswrapper:nth-child(5n+3)").addClass("col-md-4 col-sm-12 col-xs-12");
    $(".featuredlocationswrapper:nth-child(5n+4)").addClass("col-md-6 col-sm-6 col-xs-12");
    $(".featuredlocationswrapper:nth-child(5n+5)").addClass("col-md-6 col-sm-6 col-xs-12");

    $('.aboutusthumbs, .herovideopopup, .propertyvideoplayer').magnificPopup({
        disableOn: 767,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    $('.galleryimage').magnificPopup({
        disableOn: 767,
        type: 'image',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        gallery:{
            enabled:true
          }
    });
    

    $('.subscribeform').on('submit', function(){
        var subscribeemail = $('#subscribeemail').val();
        $.ajax({
            'url': 'php/subscribe.php',
            'type': 'POST',
            'data': {
                'subscribeemail' : subscribeemail,
            },
            'success' : function(){
                $('.success-subscribe-msg').removeClass('d-none');
            },
            'error' : function(){
                $('.faild-subscribe-msg').removeClass('d-none');
            },
        });
        return false;
    });

    $('.advancedsearchoptionslabels, .advancedsearchoptions-close').click(function(){
        $('.advancedsearchoptions').slideToggle(300);
    });

    $('.search-filter-close-btn-in-list-page').click(function (){
        $(this).parent('div').children('form').children('.search-filter-in-list-page').slideToggle(300); 
    });
    
    $(window).on('resize', function(){
        if( $(window).width() > 991 ){
            $('.search-filter-in-list-page').css({'display' : 'block'});
        } else if( $(window).width() < 992 ){
            $('.search-filter-in-list-page').css({'display' : 'none'});
        }
        $('.search-filter-in-list-page.no-display').css({'display' : 'none'});
    });

    $('.countryhirarchical, .agentoragencycity').hierarchySelect({
        width: 'auto',
        height: '208px',
        hierarchy: false,
        search: true,
        initialValueSet: false,
        resetSearchOnSelection: false
      });

      $('.propertygallerywrapper li').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});

    $('.contactusfullform').on('submit', function(){
        var contactusname = $('#contactusname').val();
        var contactusemail = $('#contactusemail').val();
        var contactussubject = $('#contactussubject').val();
        var contactuswebsite = $('#contactuswebsite').val();
        var contactusmessage = $('#contactusmessage').val();
        $.ajax({
            'url': 'php/contact.php',
            'type': 'POST',
            'data': {
                'contactusname' : contactusname,
                'contactusemail' : contactusemail,
                'contactussubject' : contactussubject,
                'contactuswebsite' : contactuswebsite,
                'contactusmessage' : contactusmessage,
            },
            'success' : function(){
                $('.alert-success').removeClass('d-none');
            },
            'error' : function(){
                $('.alert-danger').removeClass('d-none');
            },
        });
        return false;
    });

})(jQuery);

jQuery(document).ready(function() {
    var typed = new Typed('.heroheadingtext span', {
        strings: ["apartment", "Bungalow", "condominium", "house", "room"],
        typeSpeed: 30,
        loop: true,
        backDelay: 1500,
        backSpeed: 30,
    }); 
});

// ADDING GOOGLE MAP IN listing-create.html page
function initMap() {
    // The map, centered at Uluru
    new google.maps.Map(document.getElementById("newcreatedlistingmap"), {
        zoom: 15,
        center: { lat: 23.623775, lng: 90.500038 },
    });
};

// ADDING GOOGLE MAP IN single-lissting-1.html & single-lissting-2.html page
function initMap2() {
    // The map, centered at Uluru
    new google.maps.Map(document.getElementById("propertymapbygoogle"), {
        zoom: 4,
        center: { lat: 39.364285, lng: -74.422928 },
    });
};

// ADDING GOOGLE MAP IN listing-map.html page
function initMap3() {
    // The map, centered at Uluru
    new google.maps.Map(document.getElementById("listingmapgoogle"), {
        zoom: 4,
        center: { lat: 39.364285, lng: -74.422928 },
    });
};

// ADDING GOOGLE MAP IN contact-us-2.html page
function initMap4() {
    // The map, centered at Uluru
    new google.maps.Map(document.getElementById("contactusmap"), {
        zoom: 4,
        center: { lat: 39.364285, lng: -74.422928 },
    });
};

// ADDING GOOGLE MAP IN contact-us-1.html page
function initMap5() {
    // The map, centered at Uluru
    new google.maps.Map(document.getElementById("contactusmap"), {
        zoom: 4,
        center: { lat: 39.364285, lng: -74.422928 },
    });
};

    
    
      