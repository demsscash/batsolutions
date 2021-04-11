/**
* Template Name: Company - v2.1.0
* Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 2;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Intro carousel
  var heroCarousel = $("#heroCarousel");
  var heroCarouselIndicators = $("#hero-carousel-indicators");
  heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):
      heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");
  });

  heroCarousel.on('slid.bs.carousel', function(e) {
    $(this).find('.carousel-content ').addClass('animate__animated animate__fadeInDown');
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
    $('.venobox_custom').venobox({
      framewidth: '400px',        // default: ''
      frameheight: '300px',       // default: ''
      border: '10px',             // default: '0'
      bgcolor: '#5dff5e',         // default: '#fff'
      titleattr: 'data-title',    // default: 'title'
      numeratio: true,            // default: false
      infinigall: true            // default: false
  });
  });

  // Skills section
  $('.skills-content').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });
  
  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);

VANTA.BIRDS({
  el: "#vantajs",
  /* more options (Uncomment) */
  //birdSize: 1.50,
  //wingSpan: 21.00,
  //speedLimit: 4.00,
  //separation: 32.00,
  //alignment: 33.00,
  //cohesion: 33.00,
  //quantity: 2.00
});

VANTA.BIRDS("#vantajs");

/* code highlight */
$(document).ready(function(){
  hljs.initHighlightingOnLoad();
});


(function() {

  var $$ = function(selector, context) {
    var context = context || document;
    var elements = context.querySelectorAll(selector);
    return [].slice.call(elements);
  };
  
  function _fncSliderInit($slider, options) {
    var prefix = ".fnc-";
  
    var $slider = $slider;
    var $slidesCont = $slider.querySelector(prefix + "slider__slides");
    var $slides = $$(prefix + "slide", $slider);
    var $controls = $$(prefix + "nav__control", $slider);
    var $controlsBgs = $$(prefix + "nav__bg", $slider);
    var $progressAS = $$(prefix + "nav__control-progress", $slider);
  
    var numOfSlides = $slides.length;
    var curSlide = 1;
    var sliding = false;
    var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
    var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;
  
    var autoSlidingActive = false;
    var autoSlidingTO;
    var autoSlidingDelay = 5000; // default autosliding delay value
    var autoSlidingBlocked = false;
  
    var $activeSlide;
    var $activeControlsBg;
    var $prevControl;
  
    function setIDs() {
      $slides.forEach(function($slide, index) {
        $slide.classList.add("fnc-slide-" + (index + 1));
      });
  
      $controls.forEach(function($control, index) {
        $control.setAttribute("data-slide", index + 1);
        $control.classList.add("fnc-nav__control-" + (index + 1));
      });
  
      $controlsBgs.forEach(function($bg, index) {
        $bg.classList.add("fnc-nav__bg-" + (index + 1));
      });
    };
  
    setIDs();
  
    function afterSlidingHandler() {
      $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide");
      $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg");
  
      $activeSlide.classList.remove("m--before-sliding");
      $activeControlsBg.classList.remove("m--nav-bg-before");
      $prevControl.classList.remove("m--prev-control");
      $prevControl.classList.add("m--reset-progress");
      var triggerLayout = $prevControl.offsetTop;
      $prevControl.classList.remove("m--reset-progress");
  
      sliding = false;
      var layoutTrigger = $slider.offsetTop;
  
      if (autoSlidingActive && !autoSlidingBlocked) {
        setAutoslidingTO();
      }
    };
  
    function performSliding(slideID) {
      if (sliding) return;
      sliding = true;
      window.clearTimeout(autoSlidingTO);
      curSlide = slideID;
  
      $prevControl = $slider.querySelector(".m--active-control");
      $prevControl.classList.remove("m--active-control");
      $prevControl.classList.add("m--prev-control");
      $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control");
  
      $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
      $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);
  
      $slider.querySelector(".m--active-slide").classList.add("m--previous-slide");
      $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg");
  
      $activeSlide.classList.add("m--before-sliding");
      $activeControlsBg.classList.add("m--nav-bg-before");
  
      var layoutTrigger = $activeSlide.offsetTop;
  
      $activeSlide.classList.add("m--active-slide");
      $activeControlsBg.classList.add("m--active-nav-bg");
  
      setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
    };
  
  
  
    function controlClickHandler() {
      if (sliding) return;
      if (this.classList.contains("m--active-control")) return;
      if (options.blockASafterClick) {
        autoSlidingBlocked = true;
        $slider.classList.add("m--autosliding-blocked");
      }
  
      var slideID = +this.getAttribute("data-slide");
  
      performSliding(slideID);
    };
  
    $controls.forEach(function($control) {
      $control.addEventListener("click", controlClickHandler);
    });
  
    function setAutoslidingTO() {
      window.clearTimeout(autoSlidingTO);
      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 1;
  
      autoSlidingTO = setTimeout(function() {
        performSliding(curSlide);
      }, delay);
    };
  
    if (options.autoSliding || +options.autoSlidingDelay > 0) {
      if (options.autoSliding === false) return;
      
      autoSlidingActive = true;
      setAutoslidingTO();
      
      $slider.classList.add("m--with-autosliding");
      var triggerLayout = $slider.offsetTop;
      
      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      delay += slidingDelay + slidingAT;
      
      $progressAS.forEach(function($progress) {
        $progress.style.transition = "transform " + (delay / 1000) + "s";
      });
    }
    
    $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control");
  
  };
  
  var fncSlider = function(sliderSelector, options) {
    var $sliders = $$(sliderSelector);
  
    $sliders.forEach(function($slider) {
      _fncSliderInit($slider, options);
    });
  };
  
  window.fncSlider = fncSlider;
  }());
  
  /* not part of the slider scripts */
  
  /* Slider initialization
  options:
  autoSliding - boolean
  autoSlidingDelay - delay in ms. If audoSliding is on and no value provided, default value is 5000
  blockASafterClick - boolean. If user clicked any sliding control, autosliding won't start again
  */
  fncSlider(".example-slider", {autoSlidingDelay: 4000});
  
  var $demoCont = document.querySelector(".demo-cont");
  
  [].slice.call(document.querySelectorAll(".fnc-slide__action-btn")).forEach(function($btn) {
  $btn.addEventListener("click", function() {
    $demoCont.classList.toggle("credits-active");
  });
  });
  
  document.querySelector(".demo-cont__credits-close").addEventListener("click", function() {
  $demoCont.classList.remove("credits-active");
  });
  
  document.querySelector(".js-activate-global-blending").addEventListener("click", function() {
  document.querySelector(".example-slider").classList.toggle("m--global-blending-active");
  });