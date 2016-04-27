$ = jQuery.noConflict();

$(document).ready(function() {
  hideElementsOnWidth();
  showNavbar();
  hideNavbarOnClick();

  $(window).resize(function() {
    hideElementsOnWidth();
  });

});

function hideNavbarOnClick() {
  // Beim klicken auf einen Link
  $('.nav a').on('click', function(){
    if ($(this).parents('#bs-example-navbar-collapse-1').attr('aria-expanded') == "true") {
      $('.navbar-toggle').click();
    }
  });

  // Beim klicken auf den Body
  $('.content-wrapper').click(function() {
    if ($('#bs-example-navbar-collapse-1').attr('aria-expanded') == "true") {
      $('.navbar-toggle').click();
    }
  });
}

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
