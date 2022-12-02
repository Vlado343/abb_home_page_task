(function ($) {
  "use strict";

  jQuery(window).load(function () {
    /* Sticky Header
		============================*/
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 20) {
        $(".header-fixed").addClass("sticky");
      } else {
        $(".header-fixed").removeClass("sticky");
      }
    });
  });
})(jQuery);
