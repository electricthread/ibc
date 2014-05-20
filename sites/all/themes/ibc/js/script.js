(function ($) {

	Drupal.behaviors.messages = {
		    attach: function(context, settings) {
				
	        	// Animate messages, status, error
	            $(window, context).load(function() {
	                var msgHeight = 0 - $('.messages, .status, div.error').outerHeight() + 'px';
	                var msg = $('.messages, .status, div.error');
	                $(msg).css('top',msgHeight).show();
	                $(msg).animate({top:0}, 700).animate({opacity:1}, 2700, 
	                function() {
	                	$(this).not('div.error').animate({top:msgHeight}, 400, function() {
	                	   $(this).hide();
	                	});
	                	$('<a id="close-error" href="#">Close X</a>').appendTo('div.error').fadeIn().click(function() {
	                		$('div.error').animate({top:msgHeight}, 400, function() {
	                	   		$(this).hide();
	                		});
	                		return false;
	                	});
	                });
	            });
			}
		};
	

})(jQuery);