//Camera Slide-Show Custom Js Here.
$(function () {
    $('.camera_wrap').camera({
        playPause: true,
        navigation: true,
        navigationHover: true,
        hover: false,
        loader: '',
        loaderColor: 'red',
        loaderBgColor: '#222222',
        loaderOpacity: 1,
        loaderPadding: 0,
        time: 4000,
        minHeight: '700px',
        transPeriod: 1500,
        pauseOnClick: true,
        pagination: true
    });
});


// product slider
$('.product_slider').slick({
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    }
  ]
});    


// Parallax js
new universalParallax().init({
    speed: 4
});


// Testimonial slider
$('.testimonial_slider').slick();


// sticky header
$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('#header').addClass('fixed-header');
    }
    else {
        $('#header').removeClass('fixed-header');
    }
});

/*-----------------------------------------------------------------
    Products Carousel
  -------------------------------------------------------------------*/ 

var swiper = new Swiper('.client-carousel', {
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 140,
  paginationClickable: true,
  pagination: '.swiper-pagination',
  paginationType: 'fraction',
  speed: 1000,
  autoplay: 3000,
  roundLengths: true,
  parallax: true,
  keyboardControl: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
      0: {
              spaceBetween: 15
          },
    580: {
      spaceBetween: 30
    },
    768: {
      spaceBetween: 60
    },
    900: {
      spaceBetween: 80
    },
    1200: {
      spaceBetween: 80
    },
    1800: {
      spaceBetween: 140
    }
      }
});



// Testimonial slider
$('.testimonials-carousel').slick();


// Innovation slider
var swiper = new Swiper('.innovate-carousel', {
  loop: true,
  slidesPerView: 2,
  spaceBetween: 30,
  paginationClickable: true,
  pagination: '.swiper-pagination',
  paginationType: 'fraction',
  speed: 1000,
  autoplay: 3000,
  roundLengths: true,
  parallax: true,
  keyboardControl: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
      0: {
        slidesPerView: 1,
          },
    580: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    900: {
      slidesPerView: 1,
    },
  }
});