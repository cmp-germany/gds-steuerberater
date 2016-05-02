$ = jQuery.noConflict();

$(document).ready(function() {
  // plugin is applied to a scrollable element, targeting my navigation element
  $('body').scrollspy({ 'target': '#bs-example-navbar-collapse-1' });

  if ($('ul.nav li.active').hasClass('hidden')) {
    $('.navbar').hide();
  }

  // listen for scrollspy events on the navigation element itself
  $('#bs-example-navbar-collapse-1').on('activate.bs.scrollspy', function(e) {

    // Hide Navigation Bar, if we are at title-slide
    if ($(e.target).hasClass('hidden')){
      $('.navbar').slideUp('fast');
    } else {
      $('.navbar').slideDown('fast');
    }

    // change the url, depending where we are
    var hash, element, tempId;

    if ($(e.target).hasClass('hidden')){
      hash = '#page-top';
    } else {
      hash = $(e.target).find('a').attr('href');
    }

    element = $(hash);
    tempId = element.attr('id');
    element.attr('id', '');
    location.hash = hash;
    element.attr('id', tempId);
  });
});
