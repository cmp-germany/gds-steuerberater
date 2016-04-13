$ = jQuery.noConflict();

$(document).ready(function() {
  // initial calls
  setBackgroundImages();
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

function setBackgroundImages() {
  $('.parallax-slide[data-image-src]').each(function() {
    console.log($(this));
    var backgroundSrc = $(this).data('imageSrc');
    console.log(backgroundSrc);
    $(this).css('background-image', 'url('+backgroundSrc+')');
  });
}
