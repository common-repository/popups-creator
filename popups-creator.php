<?php 
/**
 * Plugin Name:       Popups Creator
 * Plugin URI:        
 * Description:       Easy create popups with any triggers and content
 * Version:           1.2
 * Author:            wpbiker
 * Author URI:        https://profiles.wordpress.org/wpbiker
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wplg-pc
  */  
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

//* Plugin's constants
//* Plugin's constants
if ( ! defined( 'WPPC_NAME' ) ) {
	define( 'WPPC_NAME', "Popups Creator");
	define( 'WPPC_VERSION', "1.2");
	define( 'WPPC_BASENAME', dirname(plugin_basename(__FILE__)) );	
	define( 'WPPC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	define( 'WPPC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}


//* Activate plugin
function activate_plugin_popups_creator() {
	require_once plugin_dir_path( __FILE__ ) . 'include/activator.php';	
	}	
register_activation_hook( __FILE__, 'activate_plugin_popups_creator' );

//* Include functions for plugin
require_once plugin_dir_path( __FILE__ ) . 'include/function.php';

//* Include class for save info in the database
if( !class_exists( 'WPBIKERDATA' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/wpbikerdata.php';
}

//* Include JavaScript obfuscation library
if( !class_exists( 'JavaScriptPacker' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/class.JavaScriptPacker.php';
}

//* Include admin side
require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

//* Include function for public
require_once plugin_dir_path( __FILE__ ) . 'public/public.php';