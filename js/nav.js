$ = jQuery.noConflict();

$(document).ready(function() {
  hideElementsOnWidth();
  showNavbar();

  $(window).resize(function() {
    hideElementsOnWidth();
  });

  $('.nav a').on('click', function(){
    $('.navbar-toggle').click();
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
  if (screenWidth < args.width) {
    $(args.element).hide();
  } else {
    $(args.element).show();
  }
}
