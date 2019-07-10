(function (document, window, $) {

	'use strict';
    
    function hide_header_menu( menu ) {
        
        var mainMenuButtonClass = 'menu-toggle',
		responsiveMenuClass = 'genesis-responsive-menu';
        
        $( menu + ' .' + mainMenuButtonClass + ',' + menu + ' .' + responsiveMenuClass + ' .sub-menu-toggle' )
			.removeClass( 'activated' )
			.attr( 'aria-expanded', false )
			.attr( 'aria-pressed', false );

		$( menu + ' .' + responsiveMenuClass + ',' + menu + ' .' + responsiveMenuClass + ' .sub-menu' )
			.attr( 'style', '' );
    }
    
    var scrollnow = function(e) {
        
        var target;
                        
        // if scrollnow()-function was triggered by an event
        if (e) {
            e.preventDefault();
            target = this.hash;
        }
        // else it was called when page with a #hash was loaded
        else {
            target = location.hash;
        }

        // same page scroll
        $.smoothScroll({
            scrollTarget: target,
            beforeScroll: function() {
                $('.site-header').addClass('nav-up');
            }
            
        });
    };

    // if page has a #hash
    if (location.hash) {
        $('html, body').scrollTop(0).show();
        // smooth-scroll to hash
        scrollnow();
    }

    // for each <a>-element that contains a "/" and a "#"
    $('a[href*="/"][href*=#]').each(function(){
        // if the pathname of the href references the same page
        if (this.pathname.replace(/^\//,'') === location.pathname.replace(/^\//,'') && this.hostname === location.hostname) {
            // only keep the hash, i.e. do not keep the pathname
            $(this).attr("href", this.hash);
        }
    });
    
    
	        
    $(window).bind('hashchange', function(event) {
	    
      $.smoothScroll({
        // Replace '#/' with '#' to go to the correct target
        scrollTarget: location.hash.replace(/^\#\/?/, '#'),
		
		// Remove '/' after '#' for shareable urls
        afterScroll: function() {
        	window.location.hash = location.hash.replace(/^\#\/?/, '#');
	  	}
	  	
      });
      
    });
    
    $('.fancy-bullets.accordion-content a')
    .bind('click', function(event) {
      // Remove '#' from the hash.
      var hash = this.hash.replace(/^#/, '')
      if (this.pathname === location.pathname && hash) {
        event.preventDefault();
        // Change '#' (removed above) to '#/' so it doesn't jump without the smooth scrolling
        location.hash = '#/' + hash;
      }
      
    });
    
    // Trigger hashchange event on page load if there is a hash in the URL.
    if (location.hash) {
      $(window).trigger('hashchange');
    }

    // select all href-elements that start with #
    // including the ones that were stripped by their pathname just above
    $('body').on('click', 'a[href^=#]:not([href=#])', scrollnow );

}(document, window, jQuery));

