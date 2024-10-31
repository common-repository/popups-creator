<?php
	
	$content_close = '<span class="fa-stack fa-lg">
	<i class="fa fa-circle fa-stack-2x" id="close-circle"></i>
	<i class="fa fa-times fa-stack-1x fa-inverse" id="close-times"></i></span>';
	
	$preview = '';	 
	$preview .= '<div id="popup-preview-overlay"></div>';
	$preview .= '<div id="popup-preview-overclose"></div>';	 	 
	$preview .= '<div id="popup-preview-window">';	 	 
	$preview .= do_shortcode(html_entity_decode($param['content']));
	$preview .= '<div id="popup-preview-close">'.$content_close.'</div>';	 
	$preview .= '</div>';	 
	echo $preview;
	
?>
<style>
	
	#popup-preview-overlay { 
	top: 0; 
	right: 0; 
	bottom: 0; 
	left: 0; 
	z-index: 999999; 
	background-color: rgba(0, 0, 0, 0.7); 
	position: fixed; 
	cursor: default;
	display: none; 
	width: 100%; 
	height: 100%; 
	} 
	#popup-preview-overclose { 
	top: 0; 
	right: 0; 
	bottom: 0; 
	left: 0; 
	z-index: 999999; 
	cursor: default; 
	width: 100%; 
	height: 100%; 
	} 
	
	#popup-preview-window{
	width:<?php if(empty($param['modal_width'] )){echo "662";}else{echo $param['modal_width'];}?><?php if($param['modal_width_par'] == 'pr'){echo "%";}else{echo 'px';}?>;
	padding:<?php if($param['modal_padding'] == ""){echo "10";}else{echo $param['modal_padding'];}?>px;
	border: <?php if($param['border_width'] == ""){echo "0";}else{echo $param['border_width'] ;}?>px solid #000000;
	z-index:9999999;
	position: fixed;
	top:<?php if($param['modal_top'] == ""){echo "10";}else{echo $param['modal_top'] ;}?>%;
	right:0%;
	left:0%;
	display: none;
	border-radius:<?php if($param['border_radius'] == ""){echo "5";}else{echo $param['border_radius'];}?>px; 
	margin: 0 auto; 	
	height: <?php if(empty($param['modal_height'])){echo "auto";}else{
		if (empty($param['modal_height_par'])) {
			echo $param['modal_height'].'px';
		}
		if ($param['modal_height_par'] == 'px') {
			echo $param['modal_height'].'px';
		}
		if ($param['modal_height_par'] == 'pr') {
			echo $param['modal_height'].'%';
		}
		if ($param['modal_height_par'] == 'auto') {
			echo 'auto';
		}	
	}?>;
	<?php if(empty($param['modal_height']) || $param['modal_height_par'] == 'auto'){echo "margin-bottom:40px;";} ?>
	background: #ffffff;
	}
	#popup-preview-window img{
	max-width:100%;
	height: auto;
	}
	#popup-preview-close { 
	position: absolute; 
	top: -7px; 
	right: -6px;
	font-size: <?php if($param['close_size'] == ""){echo "14";}else{echo $param['close_size'];}?>px;    
	font-weight: bold; 
	cursor:pointer; 
	display: none; 
	}
	
	#close-circle{
	color: #ffffff;
	
	}
	
	#close-times{
	color: #000000;
	}
	
	
	
	@media only screen and (max-width: 1024px){
	#popup-preview-window {
    max-width: 85%;
	}
	}
	
</style>

<script>
	jQuery(document).ready(function($) {	
		$('a[href$="popup-preview"]').click( function(event){
			event.preventDefault();		
			$('#popup-preview-overlay').fadeIn(400, function(){			
				$('#popup-preview-window').toggle();			
				$('html, body').css('overflow', 'hidden', 'important');	
				showclose();			
			});
			
			
		});  	 
		$('#popup-preview-close').click( function(){		
			
			$('#popup-preview-window').toggle( function(){			
				$('#popup-preview-overlay').fadeOut(400);
				$('html, body').css('overflow', ''); 
				$('#popup-preview-close').toggle();
			});
			
			
		}); 
		function showclose() { 		
			$('#popup-preview-close').toggle();		 
		}  
	}); 
</script>