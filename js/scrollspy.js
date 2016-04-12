$ = jQuery.noConflict();

$(document).ready(function() {
  // plugin is applied to a scrollable element, targeting my navigation element
  $('body').scrollspy({ 'target': '#bs-example-navbar-collapse-1' });

  if ($('ul.nav li.active').hasClass('hidden')) {
    $('.navbar').hide();
  }

  // listen for scrollspy events on the navigation element itself
  $('#bs-example-navbar-collapse-1').on('activate.bs.scrollspy', function(e) {
    if ($(e.target).hasClass('hidden')){
      $('.navbar').hide();
    } else {
      $('.navbar').show();
    }
  });
});
