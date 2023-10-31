var swiper = new Swiper(".homeSwiper", {
  loop: true,
  effect: "fade",
  speed: 2000,
  fadeEffect: {
    crossFade: true,
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".homeslidernav.swiper-button-next",
  },
});

var swiper = new Swiper(".beforeafter", {
  slidesPerView: 4,
  spaceBetween: 30,
  grabCursor: true,
  loop: true,
  freeMode: true,
  watchSlidesProgress: true,
  speed: 5000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },
  breakpoints: {
    280: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 16
    },
    1024: {
      slidesPerView: 3,
    }
  }
});

var swiper = new Swiper(".beforeafterimages", {
  slidesPerView: 3,
  spaceBetween: 30,
  grabCursor: true,
  loop: true,
  speed: 5000,
  autoplay: {
    delay: 1,
    disableOnInteraction: true,
  },
  breakpoints: {
    280: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 16
    },
    1024: {
      slidesPerView: 3,
    }
  }
});

var mySwiper = new Swiper(".beforeaftervideos", {
  slidesPerView: 3,
  spaceBetween: 30,
  grabCursor: true,
  loop: true,
  speed: 5000,
  autoplay: {
    delay: 1,
    disableOnInteraction: true,
    pauseOnMouseEnter: true,
  },
  breakpoints: {
    280: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 16
    },
    1024: {
      slidesPerView: 3,
    }
  }
});
$('.beforeaftervideos').on('mouseenter', function(e){
  console.log('stop autoplay');
  mySwiper.autoplay.stop();
})
$('.beforeaftervideos').on('mouseleave', function(e){
  console.log('start autoplay');
  mySwiper.autoplay.start();
})



var swiper = new Swiper(".testimonials", {
  slidesPerView: "auto",
  spaceBetween: 40,
  navigation: {
    nextEl: ".testimonialnav.swiper-button-next",
    prevEl: ".testimonialnav.swiper-button-prev",
  },
});


var swiper = new Swiper(".blogs", {
  slidesPerView: 3,
  spaceBetween: 30,
  grabCursor: true,
  loop: true,
  speed: 2000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".dentalblog.swiper-button-next",
    prevEl: ".dentalblog.swiper-button-prev",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
    },
    560: {
      slidesPerView: 2,
      spaceBetween: 16
    },
    1024: {
      slidesPerView: 3,
    }
  }
});

// $('.counter__wrap li').each(function() {
//   var $this = $(this),
//       countTo = $this.attr('data-count');
  
//   $({ countNum: $this.text()}).animate({
//     countNum: countTo
//   },

//   {

//     duration: 8000,
//     easing:'linear',
//     step: function() {
//       $this.text(Math.floor(this.countNum));
//     },
//     complete: function() {
//       $this.text(this.countNum);
//     }

//   });  
// });