<?php
global $wpdb;
$data = $wpdb->prefix . "wpbiker_tool";
$info = (isset($_REQUEST["info"])) ? $_REQUEST["info"] : '';
if ($info == "saved") {
    echo "<div class='updated' id='message'><p><strong>".__("Record Added", "wplg-pc")."</strong>.</p></div>";
}
if ($info == "update") {
    echo "<div class='updated' id='message'><p><strong>".__("Record Updated", "wplg-pc")."</strong>.</p></div>";
}
if ($info == "del") {
    $delid = $_GET["did"];
    $wpdb->query("delete from " . $data . " where id=" . $delid);
    echo "<div class='updated' id='message'><p><strong>".__("Record Deleted", "wplg-pc").".</strong>.</p></div>";
}
$resultat = $wpdb->get_results("SELECT * FROM " . $data . " WHERE tool='popup' order by id asc");

?>
<div class="wpbiker">
<h1 class="wp-heading-inline"><?php esc_attr_e(WPPC_NAME, "wplg-pc") ?> <a href='https://www.facebook.com/wowaffect/' target="_blank" title="Join us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></h1>
<ul class="wpbiker-admin-menu">
<li><a href='admin.php?page=<?php echo WPPC_BASENAME; ?>'><?php esc_attr_e("List", "wplg-pc") ?></a></li>	
<li><a href='admin.php?page=<?php echo WPPC_BASENAME; ?>&tool=add' ><?php esc_attr_e("Add new", "wplg-pc") ?></a></li>
<li><a href='admin.php?page=<?php echo WPPC_BASENAME; ?>&tool=pro' ><?php esc_attr_e("Pro Version", "wplg-pc") ?></a></li>
<li><a href='admin.php?page=<?php echo WPPC_BASENAME; ?>&tool=items' ><?php esc_attr_e("Plugins", "wplg-pc") ?></a></li>
<li><a href='admin.php?page=<?php echo WPPC_BASENAME; ?>&tool=faq' ><?php esc_attr_e("FAQ", "wplg-pc") ?></a></li>
</ul>
<hr class="wp-header-end">