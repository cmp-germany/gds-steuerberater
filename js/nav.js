$ = jQuery.noConflict();

$(document).ready(function() {
  hideElementsOnWidth();

  $(window).resize(function() {
    hideElementsOnWidth();
  });
});

function hideElementsOnWidth() {
  $('[data-hide-width]').each(function() {
    hideElementOnWidth({
      element: this,
      width: $(this).data('hideWidth')
    });
  });
}

function hideElementOnWidth(args) {
  var screenWidth = $(window).width();
  if (screenWidth < args.width) {
    $(args.element).hide();
  } else {
    $(args.element).show();
  }
}
