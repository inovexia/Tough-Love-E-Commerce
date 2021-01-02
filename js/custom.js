jQuery(document).ready(function () {
  jQuery(".navbar-toggler-icon").click(function (event) {
    jQuery(".mob-menu").toggleClass("open");
    event.stopPropagation();
  });
});
