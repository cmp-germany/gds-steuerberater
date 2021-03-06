$ = jQuery.noConflict();

$(document).ready(function() {
  // initial calls
  setBackgroundImages();
  onResizeTitleSlide();
  onResizeTitleSlideCenter();
  fixIOS();

  $('.quote-slide[data-image]').each(function(){
    if ($(window).width() < 740) {
      $(this).height($(window).height()-100);
    }
  });
  $(window).resize(onResizeTitleSlideCenter);
  $(window).resize(setBackgroundImages);

});

function fixIOS() {
  if (iOS()){
    $('.parallax-slide[data-image][data-speed="0"]').css('background-attachment', 'scroll');
  }
}

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
  $('.parallax-slide[data-image]').each(function(){
    setBackground({
      element: this,
      height: $(this).outerHeight(),
      width: $(this).outerWidth()
    });
  });
  $('.parallax-slide[data-image][data-speed="0"]').each(function(){
    setBackground({
      element: this,
      height: $(window).height(),
      width: $(window).width()
    });
  });
}

function setBackground(args) {
  var backgroundImageData = $(args.element).data('image');

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

  // Thumbnails entfernen, (Haben anderes Aspect Ratio)
  if (sizes.thumbnail) delete sizes.thumbnail;

  // Original hinzufügen
  sizes.original = {
    url: backgroundImageData.url,
    height: backgroundImageData.height,
    width: backgroundImageData.width
  };

  // Die momentane Bildschirmbreite herausfinden
  var screenWidth = args.width;
  var screenHeight = args.height;

  // Passendes Bild heraussuchen
  var sortedKeys = Object.keys(sizes).sort(function(a, b) {return (sizes[a].width - sizes[b].width);});
  var fittingPicture = {};
  for (var i = 0; i < sortedKeys.length; i++) {
    if (sizes[sortedKeys[i]].width >= screenWidth) {
      if (sizes[sortedKeys[i]].height >= screenHeight) {
        fittingPicture = sizes[sortedKeys[i]];
        break;
      }
    }
    fittingPicture = sizes.original;
  }

  // Bild als Hintergrund definieren
  $(args.element).css('background-image', 'url('+fittingPicture.url+')');
}

function iOS() {

  var iDevices = [
    'iPad Simulator',
    'iPhone Simulator',
    'iPod Simulator',
    'iPad',
    'iPhone',
    'iPod'
  ];

  if (!!navigator.platform) {
    while (iDevices.length) {
      if (navigator.platform === iDevices.pop()){ return true; }
    }
  }

  return false;
}
