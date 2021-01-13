jQuery(document).ready(function () {
  var swiper1 = new Swiper(".home-banner", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });
  var swiper3 = new Swiper(".just-in-slides", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });

  var swiper2 = new Swiper(".product-slider", {
    slidesPerView: 3,
    spaceBetween: 0,
    loop: true,

    coverflow: {
      rotate: 40,
      stretch: 0,
      depth: 50,
      modifier: 1,
      slideShadows: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    },
  });

  jQuery(".navbar-toggler-icon").click(function (event) {
    jQuery(".mob-menu").toggleClass("open");
    event.stopPropagation();
  });
});
