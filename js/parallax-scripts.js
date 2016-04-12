$ = jQuery.noConflict();

$(document).ready(function() {
  // initial calls
  onResizeTitleSlide();
  onResizeTitleSlideCenter();


  // event listeners
  $(window).resize(onResizeTitleSlide);
  $(window).resize(onResizeTitleSlideCenter);
});

function testEvent(e) {
  console.log(e);
}

function onResizeTitleSlide() {
  $('.title-slide').height($(window).height());
}

function onResizeTitleSlideCenter() {
  $('.title-slide-center').height(function() {
    return $(this).parent().height();
  });
  $('.title-slide-center').width(function() {
    return $(this).parent().width();
  });
}
