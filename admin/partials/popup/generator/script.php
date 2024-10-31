
jQuery(document).ready(function($) {
	pageY<?php echo $val->id; ?> = 0;
	<?php if (!empty($param['include_mobile'])){ ?>
	screen<?php echo $val->id; ?> = <?php echo $param['screen']; ?>;	
	<?php } else {?>
	screen<?php echo $val->id; ?> = screen.width;
	<?php }?>
	Click<?php echo $val->id; ?> = '';
	$('#pc-popup-id-<?php echo $val->id; ?>, a[href$="pc-popup-id-<?php echo $val->id; ?>"]').click( function(event){
		event.preventDefault();
		$('#pc-popup-overlay-<?php echo $val->id;?>').fadeIn(400, function(){		
		$('#pc-popup-window-<?php echo $val->id; ?>').show();		
		});
	    $('html, body').css('overflow', 'hidden', 'important');
		showclose_<?php echo $val->id; ?>(); 
		Click<?php echo $val->id; ?> = 1; 
	});  
	<?php if ($param['modal_show'] == 'load' ){ ?>
	if (screen.width >= screen<?php echo $val->id; ?>){	
		$('#pc-popup-overlay-<?php echo $val->id;?>').fadeIn(400, function(){		
		$('#pc-popup-window-<?php echo $val->id; ?>').show();		
		});
		$('html, body').css('overflow', 'hidden', 'important'); 
		showclose_<?php echo $val->id; ?>();
		Click<?php echo $val->id; ?> = 1;
		  
	}
	<?php } ?>  
	<?php if ($param['modal_show'] == 'scroll' ){?> 
	if (screen.width >= screen<?php echo $val->id; ?>){
	$(window).bind('scroll.once<?php echo $val->id;?>', function(){
		pc_show_popup_<?php echo $val->id;?>(); 
		}); 
	function pc_show_popup_<?php echo $val->id;?>() {
		if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.5) {			
				$('#pc-popup-overlay-<?php echo $val->id;?>').fadeIn(400, function(){				
				$('#pc-popup-window-<?php echo $val->id; ?>').show();					
				}); 
			 
			$('html, body').css('overflow', 'hidden', 'important'); 
			showclose_<?php echo $val->id; ?>(); 
			$(window).unbind('scroll.once<?php echo $val->id;?>'); 
			Click<?php echo $val->id; ?> = 1; 
		} 
	}
	}
	<?php } ?> 
	<?php if ($param['modal_show'] == 'close' ){?> 
	$(document).bind('mousemove', function(e) {
		if (pageY<?php echo $val->id; ?>) {
			if (e.pageY < pageY<?php echo $val->id; ?>) {
				if( e.pageY - $(document).scrollTop() <= 5) {
					if (screen.width >= screen<?php echo $val->id; ?>){
					show_popup_<?php echo $val->id;?>();
					}
					}  
				}
			}
		pageY<?php echo $val->id; ?> = e.pageY;
	}); 
	function show_popup_<?php echo $val->id;?>() {		
			$('#pc-popup-overlay-<?php echo $val->id;?>').fadeIn(400, function(){		
				$('#pc-popup-window-<?php echo $val->id; ?>').show();					
				}); 		
		$('html, body').css('overflow', 'hidden', 'important'); 
		showclose_<?php echo $val->id; ?>(); 
		$(document).unbind('mousemove');
		Click<?php echo $val->id; ?> = 1;
	}; 
	<?php } ?>  
	$('#pc-popup-close-<?php echo $val->id;?>, #pc-popup-close-id-<?php echo $val->id;?>').click( function(){		
			$('#pc-popup-window-<?php echo $val->id; ?>').hide(function(){						
			$('#pc-popup-overlay-<?php echo $val->id; ?>').fadeOut(400);
			$('html, body').css('overflow', ''); 
			$('#pc-popup-close-<?php echo $val->id; ?>').hide();
			Click<?php echo $val->id; ?> = 0;
			});
			<?php if ($param['use_cookies'] == 'yes'){;?>
			$.cookie('pc-popup-id-<?php echo $val->id;?>', 'yes', { expires: <?php if (empty($param['modal_cookies'])) {echo 1;} else {echo $param['modal_cookies'];};?>, path: '/' });
			<?php } ?>
	}); 
	function showclose_<?php echo $val->id; ?>() {	
		$('#pc-popup-close-<?php echo $val->id; ?>').show(); 		 
	}  
	<?php if (!empty($param['close_button_esc']) ){ ?> 
	$(this).keydown(function(eventObject){
		if (eventObject.which == 27){			
			$('#pc-popup-window-<?php echo $val->id; ?>').hide( function(){			
			$('#pc-popup-overlay-<?php echo $val->id; ?>').fadeOut(400);
			$('html, body').css('overflow', ''); 
			$('#pc-popup-close-<?php echo $val->id; ?>').hide(); 
			Click<?php echo $val->id; ?> = 0;
			});
			<?php if ($param['use_cookies'] == 'yes'){;?>
			$.cookie('pc-popup-id-<?php echo $val->id;?>', 'yes', { expires: <?php if (empty($param['modal_cookies'])) {echo 1;} else {echo $param['modal_cookies'];};?>, path: '/' });
			<?php } ?>
		} 
	});   
	<?php } ?>  
	<?php if (!empty($param['close_button_overlay'])){ ?> 	
		$('#pc-popup-overclose-<?php echo $val->id;?>').click( function(){		
			$('#pc-popup-window-<?php echo $val->id; ?>').hide( function(){			
			$('#pc-popup-overlay-<?php echo $val->id; ?>').fadeOut(400);
			$('html, body').css('overflow', ''); 
			$('#pc-popup-close-<?php echo $val->id; ?>').hide();
			Click<?php echo $val->id; ?> = 0;
			});
			<?php if ($param['use_cookies'] == 'yes'){;?>
			$.cookie('pc-popup-id-<?php echo $val->id;?>', 'yes', { expires: <?php if (empty($param['modal_cookies'])) {echo 1;} else {echo $param['modal_cookies'];};?>, path: '/' });
			<?php } ?>
	}); 	
	<?php } ?> 	
}); 