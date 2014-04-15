$(document)
.bind('keydown', 'esc', function(){ $('.footer_popup').trigger('click'); });

function line_up_lightbox() {			
	$('.footer_popup:visible .middle_white').css({
		// 'marginLeft': ( $(window).width() - $('.footer_popup .middle_white').width() ) / 2,
		// 'marginTop': ( $(window).height() * .1 ) / 2
		'marginTop': -1 * ( $('.footer_popup:visible .middle_white').height() / 2 )
	});
}

function load_into_lightbox( url ) {
	$('.footer_popup .popup_nav a').each(function() {
	
	});
	
	
	if( $('#privacy_policy').length > 0 ) {
		
		$('#privacy_policy').css({'display':'block'}).animate({'opacity':0}, 'normal', function() {
			trigger_load( url );	
		});
		
	} else {
		
		trigger_load( url );

	}
}

	function trigger_load( url ) {
		$('.footer_popup .middle_white').css('display', 'block').load( url + ' .content', function() {
			if( $(this).find('.return').length > 0 ) {
				
				
			}
			
			$('#privacy_policy').css('opacity', 0).animate({'opacity':1});
			line_up_lightbox();
			CSBfleXcroll('privacy_policy');
			$('.popup_nav li:last').css({marginRight:0});
			

		});
	}

$(document).ready(function(){
	$('.footer .footer_navi li a, .return_box').click(function(){
		
		var this_class = $(this).get(0).className;
		
		$('.footer_popup').slideToggle({
			easing:'easeInCubic',
			speed: 1000
		});
		
		$('.footer_popup .popup_nav a.orange').removeClass('orange');
		$('.footer_popup .popup_nav a.' + this_class).addClass('orange');
		
		load_into_lightbox( $(this).attr('href') );
				
		return false;
	});
	// $('.popup_nav li a').hover(function () {
	//     $(this).addClass('hovers');
	//   }, 
	//   function () {
	//     $(this).removeClass("hovers");
	//   }
	// );
	$('.popup_nav li a').click(function(){
		$('.popup_nav li a').removeClass('orange');
		$(this).addClass('orange');

		load_into_lightbox( $(this).attr('href') );
		
	});

	
	$('.footer_popup .x a, .popup_nav li').click(function(event){
		
		if( $(event.target).parents('.middle_white, .popup_nav').length > 0 || $(event.target).hasClass('middle_white,.popup_nav') ) {
		
			return false;
		}
		
		$('.footer_popup').slideUp({
			easing:'easeOutCubic',
			speed: 1000
		});
		$('.middle_white').fadeOut(1000);
		
		return false;
	});
	
	// $('.footer .footer_navi li:last a').trigger('click');
});



function pressDetailCallback(){

    $('.press_images').before('<div class="psource_nav">').cycle({ 
	    fx:     'scrollHorz', 
	    pager: '.psource_nav', 
	    timeout: 0,
	    speed: 'slow',
		pagerAnchorBuilder: function(idx, slide) {
		return '<a href="#">&nbsp;</a>';
		
		}
		
	});

}

$(function(){ 

// Finds all the input elements with title attributes
	$('input[title!=""]').hint();

});
