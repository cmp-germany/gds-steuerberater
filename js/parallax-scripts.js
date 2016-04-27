$ = jQuery.noConflict();

$(document).ready(function() {
  // initial calls
  setBackgroundImages();
  onResizeTitleSlide();
  onResizeTitleSlideCenter();
  modalOnLink();


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
    var backgroundSrc = $(this).data('imageSrc');
    $(this).css('background-image', 'url('+backgroundSrc+')');
  });
}

function modalOnLink() {
  // $('a[data-toggle="modal"]').click(function(){
  //   selector = $(this).data('target');
  //   //console.log($(selector));
  //   $(selector).modal('show');
  // });
}
