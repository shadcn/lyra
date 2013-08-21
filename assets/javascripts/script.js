/**
 * @file
 * JS for Radix Starter.
 */
(function ($) {
  $(document).ready(function() {
    // Animation for search form
    $('.search-form .form-text').focus(function() {
      $(this).animate({
        width: 200
      }, 500);
    });

    $('.search-form .form-text').blur(function() {
      if (!$(this).val()) {
        $(this).animate({
          width: 100
        }, 500);
      }
    });
  });
})(jQuery);
