jQuery(function(e) {
    "use strict";

     
   
  e("#property-2-slider, #nav_slider").owlCarousel({
        autoPlay: 3e3,
        items: 3,
        pagination: !1,
        navigation: !1,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktopSmall: [1024, 2],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1]
    })
	, e("#property-sliders").owlCarousel({
        autoPlay: 3e3,
        items:1,
        pagination: !1,
        navigation: !1,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktopSmall: [1024, 2],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1]
    });
	
    jQuery("#rev_slider_3").revolution({
        sliderType: "standard",
        sliderLayout: "fullscreen",
        scrollbarDrag: "true",
        spinner: "off",
        delay: 3e3,
        navigation: {
            arrows: {
                enable: !0
            }
        },
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: !1
        },
        responsiveLevels: [1240, 1024, 778, 480],
        gridwidth: [1170, 992, 767, 480],
        gridheight: [750, 700, 650, 500]
    });
    e(".parallaxie").parallaxie({
        speed: .6,
        offset: 0
    })
}), (new WOW).init();