/* Navigation */
$(function() {
	$('.navigation li ul').hide();
	$('.navigation li').hover(
		function(){
		$(this).find('ul').show();
		},
		function(){
		$(this).find('ul').hide("fast","easeOutSine");}
		)
});
/* SlideShow */	
$(function() {
	$('#slideshowAccueil').crossSlide({
	  fade: 1,
	  time: 5
	}, [
	  {
		src:  'http://localhost/gaudruere/web/bundles/gaudrueregite/images/chambre1.jpg',
		alt:  'Sand Castle',
		from: '100% 80% 1x',
		to:   '100% 40% 1.2x',
		time: 5
	  }, {
		src:  'http://localhost/gaudruere/web/bundles/gaudrueregite/images/facade.jpg',
		alt:  'Sunflower',
		from: 'top left',
		to:   'bottom right 1.3x',
		time: 4
	  }, {
		src:  'http://localhost/gaudruere/web/bundles/gaudrueregite/images/terrasse1.jpg',
		alt:  'Flip Flops',
		from: '100% 80% 1.2x',
		to:   '80% 0% 1.1x',
		time: 4
	  }, {
		src:  'http://localhost/gaudruere/web/bundles/gaudrueregite/images/jardin1.jpg',
		alt:  'Rubber Ring',
		from: '100% 50%',
		to:   '30% 50% 1.5x',
		time: 4
	  }
	], function(idx, img, idxOut, imgOut) {
	  if (idxOut == undefined)
	  {
		$('div.caption').text(img.alt).animate({ opacity: .7 })
	  }
	  else
	  {
		$('div.caption').fadeOut()
	  }
	});
});
  
  

