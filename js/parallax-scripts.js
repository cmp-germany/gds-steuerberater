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
  $('.parallax-slide[data-image]').each(function() {
    var backgroundImageData = $(this).data('image');

    if (!backgroundImageData.sizes)
      return;

    oldSizes = backgroundImageData.sizes;

    // Objekte aus den einzelnen Sizes bauen
    var sizes = {};
    for (var key in oldSizes) {
      if (oldSizes.hasOwnProperty(key)) {
        var index = key.indexOf('-');
        if (index == -1) {
          sizes[key] = {url: oldSizes[key]};
        } else {
          newKeyArray = key.split('-');
          newKey = newKeyArray[0];
          newSubKey = newKeyArray[1];
          sizes[newKey][newSubKey] = oldSizes[key];
        }
      }
    }
    
    console.log(sizes);

    // $(this).css('background-image', 'url('+backgroundSrc+')');
  });
}

function modalOnLink() {
  // $('a[data-toggle="modal"]').click(function(){
  //   selector = $(this).data('target');
  //   //console.log($(selector));
  //   $(selector).modal('show');
  // });
}
