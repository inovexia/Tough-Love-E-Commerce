// jQuery(window).on("load", function () {
//   setTimeout(function () {
//     jQuery("#enquirypopup").modal("show");
//   }, 3000);
// });
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
  var swiper2 = new Swiper(".product-slider, .product-page-slider", {
    slidesPerView: 1.1,
    spaceBetween: 15,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },

    coverflow: {
      rotate: 40,
      stretch: 0,
      depth: 50,
      modifier: 1,
      slideShadows: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 1.1,
      },
      768: {
        slidesPerView: 1.6,
      },
      1024: {
        slidesPerView: 3.1,
        loop: true,
      },
      1920: {
        slidesPerView: 3,
        loop: true,
      },
    },
  });

  jQuery(".navbar-toggler-icon").click(function (event) {
    jQuery(".mob-menu").toggleClass("open");
    event.stopPropagation();
  });

  jQuery(".login-form").click(function (e) {
    e.preventDefault();
    jQuery("#enquirypopup").modal("hide");
    jQuery("#signinpopup").modal("show");
  });
  jQuery(".joinus").click(function (e) {
    e.preventDefault();
    jQuery("#signinpopup").modal("hide");
    jQuery("#enquirypopup").modal("show");
  });
});
