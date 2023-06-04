
// !(function($) {
//   "use strict";

//   // // Hero typed
//   // if ($('.typed').length) {
//   //   var typed_strings = $(".typed").data('typed-items');
//   //   typed_strings = typed_strings.split(',')
//   //   new Typed('.typed', {
//   //     strings: typed_strings,
//   //     loop: true,
//   //     typeSpeed: 100,
//   //     backSpeed: 50,
//   //     backDelay: 2000
//   //   });
//   // }

//   // Smooth scroll for the navigation menu and links with .scrollto classes
//   $(document).on('click', '.nav-menu a, .scrollto', function(e) {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//       e.preventDefault();
//       var target = $(this.hash);
//       if (target.length) {

//         var scrollto = target.offset().top;

//         $('html, body').animate({
//           scrollTop: scrollto
//         }, 1500, 'easeInOutExpo');

//         if ($(this).parents('.nav-menu, .mobile-nav').length) {
//           $('.nav-menu .active, .mobile-nav .active').removeClass('active');
//           $(this).closest('li').addClass('active');
//         }

//         if ($('body').hasClass('mobile-nav-active')) {
//           $('body').removeClass('mobile-nav-active');
//           $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
//         }
//         return true;
//       }
//     }
//   });

//   $(document).on('click', '.mobile-nav-toggle', function(e) {
//     $('body').toggleClass('mobile-nav-active');
//     $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
//   });

//   $(document).click(function(e) {
//     var container = $(".mobile-nav-toggle");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//       if ($('body').hasClass('mobile-nav-active')) {
//         $('body').removeClass('mobile-nav-active');
//         $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
//       }
//     }
//   });

//   // Navigation active state on scroll
//   var nav_sections = $('section');
//   var main_nav = $('.nav-menu, #mobile-nav');

//   $(window).on('scroll', function() {
//     var cur_pos = $(this).scrollTop() + 10;

//     nav_sections.each(function() {
//       var top = $(this).offset().top,
//         bottom = top + $(this).outerHeight();

//       if (cur_pos >= top && cur_pos <= bottom) {
//         if (cur_pos <= bottom) {
//           main_nav.find('li').removeClass('active');
//         }
//         main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
//       }
//       if (cur_pos < 200) {
//         $(".nav-menu ul:first li:first").addClass('active');
//       }
//     });
//   });

//   // Back to top button
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 100) {
//       $('.back-to-top').fadeIn('slow');
//     } else {
//       $('.back-to-top').fadeOut('slow');
//     }
//   });

//   $('.back-to-top').click(function() {
//     $('html, body').animate({
//       scrollTop: 0
//     }, 1500, 'easeInOutExpo');
//     return true;
//   });

//   // jQuery counterUp
//   $('[data-toggle="counter-up"]').counterUp({
//     delay: 10,
//     time: 1000
//   });

//   // // Skills section
//   // $('.skills-content').waypoint(function() {
//   //   $('.progress .progress-bar').each(function() {
//   //     $(this).css("width", $(this).attr("aria-valuenow") + '%');
//   //   });
//   // }, {
//   //   offset: '80%'
//   // });

//   // Porfolio isotope and filter
//   $(window).on('load', function() {
//     var portfolioIsotope = $('.portfolio-container').isotope({
//       itemSelector: '.portfolio-item',
//       layoutMode: 'fitRows'
//     });

//     $('#portfolio-flters li').on('click', function() {
//       $("#portfolio-flters li").removeClass('filter-active');
//       $(this).addClass('filter-active');

//       portfolioIsotope.isotope({
//         filter: $(this).data('filter')
//       });
//     });

//     // Initiate venobox (lightbox feature used in portofilo)
//     $(document).ready(function() {
//       $('.venobox').venobox();
//     });
//   });

//   // Testimonials carousel (uses the Owl Carousel library)
//   $(".testimonials-carousel").owlCarousel({
//     autoplay: true,
//     dots: true,
//     loop: true,
//     responsive: {
//       0: {
//         items: 1
//       },
//       768: {
//         items: 2
//       },
//       900: {
//         items: 3
//       }
//     }
//   });

//   // Portfolio details carousel
//   $(".portfolio-details-carousel").owlCarousel({
//     autoplay: true,
//     dots: true,
//     loop: true,
//     items: 1
//   });

//   // Initi AOS
//   AOS.init({
//     duration: 1000,
//     easing: "ease-in-out-back"
//   });

// })(jQuery);



                    
// Mendapatkan semua tautan dengan hash yang valid
const links = document.querySelectorAll('a[href^="#"]');

// Fungsi untuk menangani smooth scroll
function smoothScroll(target) {
  const destination = document.querySelector(target);
  const startPosition = window.pageYOffset;
  const targetPosition = destination.offsetTop;
  const distance = targetPosition - startPosition;
  const duration = 1000; // Durasi animasi dalam milidetik
  let start = null;

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) {
      window.requestAnimationFrame(step);
    }
  }

  // Fungsi easing untuk membuat animasi lebih lancar
  function easeInOutCubic(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t * t + b;
    t -= 2;
    return c / 2 * (t * t * t + 2) + b;
  }

  window.requestAnimationFrame(step);
}

// Menghubungkan event click pada setiap tautan untuk smooth scroll
links.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = link.getAttribute('href');
    smoothScroll(target);
  });
});

// proggres scroll

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#FA16E3 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

// scroll reveal



function revealFunction() {
  //first we need to initialize our "sr" (scroll reveal)
  //do you know all the behaviors that will be the same for all animations? Just send it directly here, as in my case, the duration, the distance...

  window.sr = ScrollReveal({ duration: 1350, distance: '250px', easing: 'ease-out' });

  //here we can create infinite classes according to our needs
  //so first we declare the name of the class and pass the props to it
  //see the documentation and you are free to do anything you can think of about the scroll fade effect :)

  sr.reveal('.image__feature', { origin: 'left', reset: true });
  sr.reveal('.header__image', { origin: 'top', reset: true });
  sr.reveal('.header__content', { origin: 'right', reset: true });
  sr.reveal('.premium__grid', { origin: 'bottom', reset: true });
  sr.reveal('.feature__content', { origin: 'right', reset: true });
  sr.reveal('.header__title', { origin: 'left', reset: true });
  sr.reveal('.header__subtitle', { origin: 'right', reset: true });
  sr.reveal('.preview__grid', { origin: 'top', reset: true });
  sr.reveal('.feature__list', { origin: 'bottom', rotate: { x:1000, z:1000 }, reset: true });

  sr.reveal('.faq__title', { origin: 'left', reset: true });
  sr.reveal('.faq__subtitle', { origin: 'right', reset: true });

  sr.reveal('.form__group', { origin: 'left', reset: true });

  sr.reveal('.about-us__image', { origin: 'bottom', rotate: { x:1000, z:1000 }, reset: true });

}

//fist of all, on load we call our magic
window.addEventListener('load', function () {
  revealFunction();
});


// load scroll

window.addEventListener("load", function() {
  // Mengatur posisi scroll ke atas saat halaman dimuat
  window.scrollTo(0, 0);
});


