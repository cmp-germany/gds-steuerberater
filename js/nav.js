$ = jQuery.noConflict();

$(document).ready(function() {
  hideElementsOnWidth();
  showNavbar();

  $(window).resize(function() {
    hideElementsOnWidth();
  });
});

function showNavbar() {
  if (!$('ul.navbar-nav li.active').hasClass('hidden')) {
    $('.navbar-fixed-top').show();
  }
}

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
  console.log(screenWidth);
  if (screenWidth < args.width) {
    $(args.element).hide();
  } else {
    $(args.element).show();
  }
}
