(function (document, window, $) {

	'use strict';    
    
    // Example
    
    
    $('.value-slider').slick({
      dots: true,
      fade: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      prevArrow: $('button.value-before'),
      nextArrow: $('button.value-after'),
    }); 
    
	 $('button.single-value').click(function(e) {
		e.preventDefault();
		var slideno = $(this).data('slide');
		$('.value-slider').slick('slickGoTo', slideno);
	});
    
        
}(document, window, jQuery));