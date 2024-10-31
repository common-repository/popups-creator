<?php 
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
global $wpdb;
$table = $wpdb->prefix . 'wpbiker_tool';
$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
$sql = "CREATE TABLE {$table} (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,  
  tool TEXT,
  param TEXT,  
  UNIQUE KEY id (id)
) {$charset_collate};";
dbDelta($sql);