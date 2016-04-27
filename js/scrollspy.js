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
    if ($(e.target).hasClass('hidden')){
      location.hash = "";
    } else {
      var hash = $(e.target).find('a').attr('href');
      var element = $(hash);
      var tempId = element.attr('id');
      element.attr('id', '');
      location.hash = hash;
      element.attr('id', tempId);
    }
  });
});
