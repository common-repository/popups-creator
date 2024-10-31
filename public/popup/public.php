<?php if ( ! defined( 'ABSPATH' ) ) exit;

//* Popup shortcode
add_shortcode('PC-Popup', 'show_popups_creator_windows');
function show_popups_creator_windows($atts) {
    extract(shortcode_atts(array('id' => ""), $atts));		
    global $wpdb;
	$table = $wpdb->prefix . "wpbiker_tool";    
    $sSQL = $wpdb->prepare("select * from $table WHERE id = %d", $id);
    $arrresult = $wpdb->get_results($sSQL); 	
    if (count($arrresult) > 0) {
        foreach ($arrresult as $key => $val) {
			$param = unserialize($val->param);
			ob_start();
			include( 'partials/public.php' );
			$path_style = WPPC_PLUGIN_DIR.'/asset/popup/css/style-'.$val->id.'.css';
			$path_script = WPPC_PLUGIN_DIR.'/asset/popup/js/script-'.$val->id.'.js';
			$file_style = WPPC_PLUGIN_DIR.'/admin/partials/popup/generator/style.php';
			$file_script = WPPC_PLUGIN_DIR.'/admin/partials/popup/generator/script.php';
			if (file_exists($file_style) && !file_exists($path_style)){
				ob_start();
				include ($file_style);
				$content_style = ob_get_contents();
				ob_end_clean();
				file_put_contents($path_style, $content_style);
			}			
			if (file_exists($file_script) && !file_exists($path_script)){
				ob_start();
				include ($file_script);
				$content_script = ob_get_contents();
				$packer = new JavaScriptPacker($content_script, 'Normal', true, false);
				$packed = $packer->pack();
				ob_end_clean();
				file_put_contents($path_script, $packed);				
			}			
			
			$popup = ob_get_contents();
			ob_end_clean();
			
			
			if ($param['use_cookies'] == 'yes'){
				$namecookie = 'pc-popup-id-'.$val->id;
				if (!isset($_COOKIE[$namecookie])){					
					$popupcookie = true;
					wp_enqueue_script( WPPC_BASENAME.'-cookie', plugin_dir_url( __FILE__ ) . 'js/jquery.cookie.js', array( 'jquery' ), WPPC_VERSION);
				}
				else {
					$popupcookie = false;
				}
				
			}
			if ($param['use_cookies'] == 'no'){
				$popupcookie = true;
			}				
			
			if ($popupcookie == true) {
				echo $popup;
				if (file_exists($path_style)) {
					wp_enqueue_style( 'popup-creator-style-'.$val->id, WPPC_PLUGIN_URL. 'asset/popup/css/style-'.$val->id.'.css', array(), WPPC_VERSION);	
				}
				if (file_exists($path_script)) {					
					wp_enqueue_script( 'popup-creator-script-'.$val->id, WPPC_PLUGIN_URL. 'asset/popup/js/script-'.$val->id.'.js', array( 'jquery' ), WPPC_VERSION );
				}
				wp_enqueue_style( 'font-awesome', WPPC_PLUGIN_URL . 'asset/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
				wp_enqueue_style( 'main-style-popup', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), WPPC_VERSION);
			}
        }
		
    } else {		
		echo "<p><strong>No Records</strong></p>";        
    }  
		
	return ;
}

