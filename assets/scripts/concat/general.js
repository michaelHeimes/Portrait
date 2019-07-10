(function (document, window, $) {

	'use strict';

	// Load Foundation
	$(document).foundation();
    
    
    // Mobile, allow top lvel menu item to toggle sub menu
    $('li.menu-item-has-children > a').on('click',function(e){
        
        var $toggle = $(this).parent().find('.sub-menu-toggle');
        
        if( $toggle.is(':visible') ) {
            $toggle.trigger('click');
            e.preventDefault();
        }
        
        

    });
    
// Add hash to Downloads scrolling anchor links
/*
$(".fancy-bullets.accordion-content a").click(function(e){ 
  window.location.hash = this.hash;
});
*/
    
//Check to see if the window is top if not then display button
$(window).scroll(function(){
    if ($(this).scrollTop() > 700) {
        $('a#back-top-top').fadeIn();
    } else {
        $('a#back-top-top').fadeOut();
    }
});
    
// Close Dropdown when a link is clicked    
	$('#example-dropdown').on('click', 'ul.dropdown li', function() {
		$('#example-dropdown').foundation('close');
	});  
    	
// Close Header Alert
	var $topBar = $('#top-bar-message-wrap');

	function setHeight() {
	var barHeight = $($topBar).innerHeight();
	
		$(document).on('click', 'body img.header-alert-close', function(e) {
			$($topBar).css( 'margin-top', -barHeight).delay(500).fadeOut(0);
		})
	
	};
	setHeight();
	

// Add Classes to Industry Rows for Wedges
	if ($("body").hasClass("page-template-individual-industry")) {
	$('#main').find('.row-bg-gray:first').addClass('top-wedge');
	$('#main').find('.row-bg-gray:last').addClass('bottom-wedge');
	}

// Core Values Slider
	$('ul.slick-dots li button').addClass('no-style-button');

	$('#core-values').on('click', 'button.single-value', function() {
		$('.hide-for-slider').addClass('hidden');	
		$('.show-for-slider').removeClass('hidden');	

	});
	
	$('#core-values').on('click', 'button.hide-value-slider', function() {
		$('.hide-for-slider').removeClass('hidden');	
		$('.show-for-slider').addClass('hidden');	

	});

// Ingredient Brands Slider
	$('#ingredient-brands').on('click', 'button.single-value', function() {
		$('.hide-for-slider').addClass('hidden');	
		$('.show-for-slider').removeClass('hidden');	
		$('#value-slide').slick("refresh");

	});
	
	$('#ingredient-brands').on('click', 'button.hide-value-slider', function() {
		$('.hide-for-slider').removeClass('hidden');	
		$('.show-for-slider').addClass('hidden');	

	});	
	
// Single Download  Tabs

	// Windows / Mac Tabs

	var singleProductDownload = $('section.single-product-download');
	
	var downloadTabs = $('.spd-bottom');
	
	var $timing = 300;
	
	$(singleProductDownload).each(function (i, obj) {
		
		var windowsButton = $(this).find('.windows-button');
		var macButton = $(this).find('.mac-button');
		var forWindows = $(this).find('.for-windows');
		var forMac = $(this).find('.for-mac');
	
		$(windowsButton).addClass('clicked');
		$(forWindows).show();
		$(forWindows).addClass('visible');
		
		$(windowsButton).click(function(){
			$(macButton).removeClass('clicked');
			$(forMac).fadeOut($timing).delay($timing).hide().removeClass('visible');
			$(this).addClass('clicked');
			$(forWindows).fadeIn($timing).addClass('visible');
		});	
		
		$(macButton).click(function(){
			$(windowsButton).removeClass('clicked');
			$(forWindows).fadeOut($timing).delay($timing).hide().removeClass('visible');
			
			$(this).addClass('clicked');
			$(forMac).fadeIn($timing).addClass('visible');
		});	
	
	});
	
	// 	Bottom Tabs
	
	$(downloadTabs).each(function (i, obj) {
		
		var notesButton = $(this).find('.tab-nav .tab-nav-button.release-notes-button');
		var legacyButton = $(this).find('.tab-nav .tab-nav-button.legacy-downloads-button');
		var notesContent = $(this).find('.release-notes.tab-content');
		var legacyContent = $(this).find('.legacy-versions.tab-content');
	
		$(notesContent).show();
		
		$(notesButton).click(function(){
			$(legacyButton).removeClass('clicked');
			$(legacyContent).fadeOut($timing).delay($timing).hide().removeClass('visible');
			$(this).toggleClass('clicked');
			$(notesContent).fadeIn($timing).toggleClass('visible');
		});	
		
		$(legacyButton).click(function(){
			$(notesButton).removeClass('clicked');
			$(notesContent).fadeOut($timing).delay($timing).hide().removeClass('visible');
			$(this).toggleClass('clicked');
			$(legacyContent).fadeIn($timing).toggleClass('visible');
		});	
	
	});
	
	// 	Software Comparison Table Toggle	
	$('#compare-calman-software').each(function (i, obj) {
		
		var softwareButton = $('.tab-nav .tab-nav-button.pro-software-button');
		var hardwareButton = $('.tab-nav .tab-nav-button.home-theater-button');
		var softwareTable = $('#pro-cal-software');
		var hardwareTable = $('#home-theater-software');		
	
		$(softwareTable).show().addClass('visible');
		$(softwareButton).addClass('clicked');
				
		$(softwareButton).click(function(){
			$(hardwareButton).removeClass('clicked');
			$(hardwareTable).fadeOut($timing).delay($timing).hide().removeClass('visible');
			$(this).addClass('clicked');
			$(softwareTable).fadeIn($timing).addClass('visible');
		});	
		
		$(hardwareButton).click(function(){
			$(softwareButton).removeClass('clicked');
			$(softwareTable).fadeOut($timing).delay($timing).hide().removeClass('visible');
			
			$(this).addClass('clicked');
			$(hardwareTable).fadeIn($timing).addClass('visible');
		});	
		
	});

	// 	Software Product Toggle	
	$('#software-products').each(function (i, obj) {
		
		var proSoftwareButton = $('.tab-nav .tab-nav-button.pro-software-grid-button');
		var consumerSoftwareButton = $('.tab-nav .tab-nav-button.consumer-software-grid-button');
		var proSoftwareGrid = $('#pro-software-grid');
		var consumerSoftwareGrid = $('#consumer-software-grid');		
	
		$(proSoftwareGrid).show().addClass('visible');
		$(proSoftwareButton).addClass('clicked');
				
		$(proSoftwareButton).click(function(){
			$(consumerSoftwareButton).removeClass('clicked');
			$(consumerSoftwareGrid).fadeOut($timing).delay($timing).hide().removeClass('visible');
			$(this).addClass('clicked');
			$(proSoftwareGrid).fadeIn($timing).addClass('visible');
		});	
		
		$(consumerSoftwareButton).click(function(){
			$(proSoftwareButton).removeClass('clicked');
			$(proSoftwareGrid).fadeOut($timing).delay($timing).hide().removeClass('visible');
			
			$(this).addClass('clicked');
			$(consumerSoftwareGrid).fadeIn($timing).addClass('visible');
		});	
		
	});


	// 	Hardware Product Toggle	
	$('#hardware-products').each(function (i, obj) {
		
		var measurementDevicesButton = $('.tab-nav .tab-nav-button.measurement-devices-grid-button');
		var patternGeneratorsButton = $('.tab-nav .tab-nav-button.pattern-generators-grid-button');
		var measurementDevicesGrid = $('#measurement-devices-grid');
		var patternGeneratorsGrid = $('#pattern-generators-grid');		
	
		$(measurementDevicesGrid).show().addClass('visible');
		$(measurementDevicesButton).addClass('clicked');
				
		$(measurementDevicesButton).click(function(){
			$(patternGeneratorsButton).removeClass('clicked');
			$(patternGeneratorsGrid).fadeOut($timing).delay($timing).hide().removeClass('visible');
			$(this).addClass('clicked');
			$(measurementDevicesGrid).fadeIn($timing).addClass('visible');
		});	
		
		$(patternGeneratorsButton).click(function(){
			$(measurementDevicesButton).removeClass('clicked');
			$(measurementDevicesGrid).fadeOut($timing).delay($timing).hide().removeClass('visible');
			
			$(this).addClass('clicked');
			$(patternGeneratorsGrid).fadeIn($timing).addClass('visible');
		});	
		
	});


// 	Add Class to Current Blog Page in Fake Pagination
    $('ul.nav-links a').each(function() {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('current-blog-page');
        }
    });



// Partner Grid
	$('.single-partner-cube').each(function (i, obj) {
		
		var spLogo = $(this).find('.sp-logo-wrap');
		var spCopy = $(this).find('.sp-copy-wrap');
		var spClose = $(this).find('.sp-copy-close');
		
		$(spLogo).hover(
		  function() {
		    $( spCopy ).fadeIn(200);
		  }, function() {
		    $( spCopy ).hide();
		  }
		);
		
		$(spLogo).click(
		  function() {
		    $( spCopy ).fadeIn(250);
		  }
		);	
		
		$(spClose).click(
		  function() {
		    $( spCopy ).fadeOut(250);
		  }
		);		
		
	
	});
	



}(document, window, jQuery));


