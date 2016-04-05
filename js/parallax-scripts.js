$ = jQuery.noConflict();

$(document).ready(function() {
  // initial calls
  onResizeTitleSlide();
  onResizeTitleSlideDarkening();


  // event listeners
  $(window).resize(onResizeTitleSlide);
  $(window).resize(onResizeTitleSlideDarkening);
});

function testEvent(e) {
  console.log(e);
}

function onResizeTitleSlide() {
  $('.title-slide').height($(window).height());
}

function onResizeTitleSlideDarkening() {
  $('.title-slide-shadow').height(function() {
    return $(this).parent().height();
  });
  $('.title-slide-shadow').width(function() {
    return $(this).parent().width();
  });
}
