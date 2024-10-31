jQuery(document).ready(function($) {
	//* Vertical table
	$('.tab-nav li:first').addClass('select'); 
	$('.tab-panels>div').hide().filter(':first').show();    
	$('.tab-nav a').click(function(){
		$('.tab-panels>div').hide().filter(this.hash).show(); 
		$('.tab-nav li').removeClass('select');
		$(this).parent().addClass('select');
		return (false); 
	})
	
	
	$('.tab-box').after('<span style="float:right;"><a href="https://wow-estore.com/en/wow-modal-windows-pro/" target="_blank">GET PRO VERSION</a></span>');
	
	
	//* height popup	
	$('[name="param[modal_height_par]"]').click(function(){		
		var height_par = $('input[name="param[modal_height_par]"]:checked').val();		
		if (height_par == 'auto'){
			$('[name="param[modal_height]"]').val('');
			$('[name="param[modal_height]"]').attr("disabled", "disabled");			
		}
		else {
			$('[name="param[modal_height]"]').val('0');
			$('[name="param[modal_height]"]').removeAttr("disabled");
		}
	});
	
	//* content (text/visual)
	$('#content-tmce').click(function(){
		$('[name="content_type"]').val('tinymce');				
	});
	$('#content-html').click(function(){
		$('[name="param[content_type]"]').val('html');				
	});
	
	//* Running functions
	wpchange();	
	displaybutton();	
	screen();
	
});

//* Display popup
function wpchange(){
	var change = jQuery('#modal_show').val();
	jQuery('#wpchange1').css('display', 'none');
	jQuery('#wpchange2').css('display', 'none');
	jQuery('.reached').css('display', 'none');
	jQuery('.wpcookie').css('display', '');
	jQuery('#delay').css('display', '');
	if (change == 'click'){
		jQuery('#wpchange1').css('display', 'block');
		jQuery('.wpcookie').css('display', 'none');
		jQuery('#delay').css('display', 'none');
	}
	if (change == 'anchor'){
		jQuery('#wpchange2').css('display', 'block');
		jQuery('.wpcookie').css('display', 'none');
		jQuery('#delay').css('display', 'none');
	}
	if (change == 'scroll'){
		jQuery('.reached').css('display', 'block');
	}
}



//* Button for popup
function displaybutton(){
	var show = jQuery('[name="param[umodal_button]"]').val();
	if (show == 'yes'){
		jQuery('.showbutton').css('display', '');
	}
	else {
		jQuery('.showbutton').css('display', 'none');
	}
}



//* Show screen
function screen(){
	if (jQuery('[name="param[include_mobile]"]').is(':checked')){
		jQuery('#screen').css('display', '');
	}
	else {
		jQuery('#screen').css('display', 'none');
	}
}

