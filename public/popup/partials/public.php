<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$content_close = '<span class="fa-stack fa-lg">
	<i class="fa fa-circle fa-stack-2x" id="pc-close-circle-'.$val->id.'"></i>
	<i class="fa fa-times fa-stack-1x fa-inverse" id="pc-close-times-'.$val->id.'"></i></span>';


	if(empty($param['umodal_button_text'] )){
		 $umodal_button_text = "Feedback"; }
	else{
		 $umodal_button_text = $param['umodal_button_text'];
	}	
	if(empty($param['button_width'] )){
		 $button_width = "150"; 
		 $button_width_top = $button_width/2;
		 }
	else{
		 $button_width = $param['button_width'];
		 $button_width_top = $button_width/2;
	}
	if ($param['umodal_button_position'] == "popup_button_right" || $param['umodal_button_position'] == "popup_button_left"){
		$button_position = "margin-top:".$button_width_top."px";
	}
	else{
		$button_position = "";
	}
	 $modal = '';
	 if ($param['umodal_button'] == 'yes')
			$modal .= '<div class="pc-popup-botton-'.$val->id.' '.$param['umodal_button_position'].'" style="width:'.$button_width.'px;'.$button_position.'" id="pc-popup-id-'.$val->id.'">'.$umodal_button_text.'</div>';
     $modal .= '<div id="pc-popup-overlay-'.$val->id.'">';	
     $modal .= '<div id="pc-popup-overclose-'.$val->id.'"></div>';     
	 $modal .= '<div id="pc-popup-window-'.$val->id.'">';
	 $modal .= '<div id="pc-popup-close-'.$val->id.'">'.$content_close.'</div>';
	 $modal .= do_shortcode(html_entity_decode($param['content']));	 
	 $modal .= '</div></div>';	 
	 echo $modal;	 
?>