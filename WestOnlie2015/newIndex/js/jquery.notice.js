/* jQuery Notice Plugin
 * 
 * This plug-in allows you to show a little notice box.
 * 
 * @author: Vincent Composieux
 * @homepage: http://vincent.composieux.fr
 * @date 20/06/2010
 */
$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
});


(function($) {
	$.notice = {
		show: function(message) {
			/** Configuration */
			var top = 0;
			var left = 0;
			var fadeoutDuration = 1000;
			
			/** Launch the notification */
			$('html, body').animate({scrollTop:0});
			$('<div></div>').attr('id', 'notice').css('left', (0-left)+'%').css('top', (0+top)+'px').appendTo('header').text(message);
			
			/** Switch off the notification */
			setTimeout(function() {$('#notice').animate({ opacity: 0, top: '-20px' }, fadeoutDuration);}, 2000);
			setTimeout(function() {$('#notice').remove();}, 3000);
		}
	}
	
	jQnotice = function(message) { $.notice.show(message); };
})(jQuery);