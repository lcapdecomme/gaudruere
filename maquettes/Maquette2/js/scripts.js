
  $(function() {
$('#slideshow').crossSlide({
  fade: 1,
  time: 5
}, [
  {
    src:  'photo1.jpg',
    alt:  'Sand Castle',
    from: '100% 80% 1x',
    to:   '100% 40% 1.2x',
    time: 5
  }, {
    src:  'photo2.jpg',
    alt:  'Sunflower',
    from: 'top left',
    to:   'bottom right 1.3x',
    time: 4
  }, {
    src:  'photo3.jpg',
    alt:  'Flip Flops',
    from: '100% 80% 1.2x',
    to:   '80% 0% 1.1x',
    time: 4
  }, {
    src:  'photo4.jpg',
    alt:  'Rubber Ring',
    from: '100% 50%',
    to:   '30% 50% 1.5x',
    time: 4
  }
], function(idx, img, idxOut, imgOut) {
  if (idxOut == undefined)
  {
    // starting single image phase, put up caption
    $('div.caption').text(img.alt).animate({ opacity: .7 })
  }
  else
  {
    // starting cross-fade phase, take out caption
    $('div.caption').fadeOut()
  }
});
  });

