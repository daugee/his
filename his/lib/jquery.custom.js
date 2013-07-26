
//Simple Slider (jQueryTools) ----------------------------------------------------
jQuery(document).ready(function() {
	jQuery(".scrollable").scrollable({size:1, clickable:false, circular: true}).navigator().autoscroll({ 
    	steps: 1, 
    	interval: 5000         
	});	
});


