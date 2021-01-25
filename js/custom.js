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

  // jQuery(".navbar-toggler-icon").click(function (event) {
  //   jQuery(".mob-menu").toggleClass("open");
  //   event.stopPropagation();
  // });

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

jQuery(document).ready(function (jQuery) {
  var open = false;

  var openSidebar = function () {
    jQuery(".mob-menu").addClass("open");
    jQuery(".overlay1").addClass("active-opacity");
    open = true;
  };
  var closeSidebar = function () {
    jQuery(".mob-menu").removeClass("open");
    jQuery(".overlay1").removeClass("active-opacity");
    open = false;
  };

  jQuery(".navbar-toggler-icon, .close-menu").click(function (event) {
    event.stopPropagation();
    var toggle = open ? closeSidebar : openSidebar;
    toggle();
  });

  jQuery(document).click(function (event) {
    if (!jQuery(event.target).closest(".mob-menu,.close-menu").length) {
      closeSidebar();
    }
  });
});