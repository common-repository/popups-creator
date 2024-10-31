<?php if ( ! defined( 'ABSPATH' ) ) exit; 	
	$act = (isset($_REQUEST["act"])) ? $_REQUEST["act"] : '';
	if ($act == "update") {
		$recid = $_REQUEST["id"];
		$result = $wpdb->get_row("SELECT * FROM $data WHERE id=$recid");
		if ($result){
			$id = $result->id;
			$title = $result->title;
			$param = unserialize($result->param);		
			$btn = __("Update", "marketing-wp");
			$hidval = 2;
		}
	}
	else if ($act == "duplicate") {
		$recid = $_REQUEST["id"];
		$result = $wpdb->get_row("SELECT * FROM $data WHERE id=$recid");
		if ($result){
			$id = "";
			$title = "";
			$param = unserialize($result->param);		
			$btn = __("Save", "marketing-wp");
			$hidval = 1;
		}
	}
	else {
		$btn = __("Save", "marketing-wp");
		$id = "";
        $title = "";
		$param['modal_width'] = "";		
		$param['border_width'] = "";
		$param['border_radius'] = "";	
		$param['modal_zindex'] = "";
		$param['modal_padding'] = "";
		$param['modal_show'] = "";
		$param['use_cookies'] = "";
		$param['modal_cookies'] = "1";			
        $param['content'] = "";		
		$param['close_size'] = "14";		
		$param['close_button_esc'] = "";
		$param['close_button_overlay'] = "";
		$param['umodal_button'] = "";
		$param['umodal_button_position'] = "";		
		$param['umodal_button_text'] = "";
		$param['umodal_window_show'] = "";		
		$param['button_width'] = "";		
		$param['modal_height'] = "";			
		$param['modal_width_par'] = "px";
		$param['modal_height_par'] = "auto";		
		$param['content_type'] = "";		
		$param['modal_top'] = "10";		
		$param['include_mobile'] = "";
		$param['screen'] = "480";
		$param['screen_size'] = "";
		$param['mobile_width'] = "";
		$param['mobile_width_par'] = "";		
		$param['close_type'] = "";
		
		$hidval = 1;
	}
	$settings = array(
		'textarea_name' => 'param[content]',
		'textarea_rows' => '10',
		'wpautop' => 0,	
		'media_buttons' => true,	
		'tinymce' => array(
			'theme_advanced_buttons1' => 'formatselect,|,bold,italic,underline,|,' .
			'bullist,blockquote,|,justifyleft,justifycenter' .
			',justifyright,justifyfull,|,link,unlink,|' .
			',spellchecker,wp_fullscreen,wp_adv'
		)
	);
	
	if ($param['content_type'] == '' || $param['content_type'] == 'tinymce'){
		add_filter( 'wp_default_editor', create_function('', 'return "tinymce";') );
	}
	else {add_filter( 'wp_default_editor', create_function('', 'return "html";') );}
?>