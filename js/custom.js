jQuery(document).ready(function () {
  var swiper = new Swiper(".swiper", {
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
        slidesPerView: 2,
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
