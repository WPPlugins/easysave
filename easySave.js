jQuery(window).keydown(function(event) { 

	if (event.ctrlKey || event.metaKey) { // ctrl, cmd was pressed	
		if(String.fromCharCode(event.which).toLowerCase() === 's') { // s key was pressed
		
			// prevent default behavior
			event.preventDefault(); 
			
			// save the post
			if(jQuery('#save-post').length) // post is still draft, don't publish it, just save it
				jQuery('#save-post').trigger('click');
			else // post is already published, update it
				jQuery('#publish').trigger('click');
				
		}
	}
	
});
