<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$tool = (isset($_REQUEST["tool"])) ? sanitize_text_field($_REQUEST["tool"]) : '';
include_once( 'popup/menu.php' );
if ($tool  == "add"){
	include_once( 'popup/add.php' );	
}
if ($tool  == ""){
	include_once( 'popup/list.php' );
}
if ($tool  == "pro"){
	include_once( 'popup/pro.php' );
}
if ($tool  == "items"){
	include_once( 'popup/items.php' );
}
if ($tool  == "faq"){
	include_once( 'popup/faq.php' );
}
?>
</div>
