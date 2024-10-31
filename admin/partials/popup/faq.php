<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<p style="color: #43cb83; font-size:36px; margin-top:0px; padding-top:0px;">Frequently Asked Questions</p>

<div class="wpbiker-admin-col" style="font-size:18px;">
	<div class="wpbiker-admin-col-12">
		<h4><span class="dashicons dashicons-editor-help"></span> How to create a Popup?</h4>
		<ul>
			<li>Click Add new to create your first popup</li>
			<li>Setup your popup</li>
			<li>Click Save</li>
			<li>Copy and paste the shortcode, such as [PC-Popup id=1], to where you want the popup to appear.</li>
		</ul>
		<h4><span class="dashicons dashicons-editor-help"></span> How to open a popup clicking on the link?</h4>
		<ul>
			<li>Create a popup</li>
			<li>In the option ‘Show popup’ select -> “Click on a link (with an #anchor link)”</li>
			<li>Copy and paste the shortcode, such as [PC-Popup id=1], to where you want the popup to appear.</li>
			<li>Insert a link like <code>&lt;a href="https://wow-estore.com/#pc-popup-id-1"&gt;Popup&lt;/a&gt;</code> to the page.</li>
		</ul>
		<h4><span class="dashicons dashicons-editor-help"></span> How to open a popup clicking on the button ?</h4>
		<ul>
			<li>Create a popup</li>
			<li>In the option ‘Show popup’ select -> ‘Click on a link (with id)’</li>
			<li>Copy and paste the shortcode, such as [PC-Popup id=1], to where you want the popup to appear.</li>
			<li>Insert a button like <code>&lt;button id='pc-popup-id-1'&gt;Modal Window&lt;/button&gt;</code> to the page.</li>
			</ul>
		<h4><span class="dashicons dashicons-editor-help"></span> How to insert a form into a popup?</h4>
		Install plugin <a href="https://wordpress.org/plugins/forms-creator/" target="_blank">Forms Creator</a>
		<ul>			
			<li>Create a Form via plugin Forms Creator</li>
			<li>Copy and paste the shortcode, such as [PC-Forms id=1] into the content field in the popup settings.</li>
		</ul>
		<h4><span class="dashicons dashicons-editor-help"></span> Can I insert a shortcode into the popup?</h4>
		<ul>
			<li>Yes, you can inert any shortcode into the content of popup</li>
		</ul>
		
		<h4><span class="dashicons dashicons-editor-help"></span> How to open 'Modal Window' via a Side Menu?</h4>
		Install plugin <a href="https://wordpress.org/plugins/side-menu/" target="_blank">Side Menu - add fixed side buttons</a>		
		<ul>
			<li>Create a popup</li>
			<li>In the option ‘Show popup’ select -> Click on a link (with id)</li>
			<li>Copy and paste the shortcode, such as [PC-Popup id=1], to where you want the popup to appear.</li>
			<li>Create Side Menu Item via plugin Side Menu</li>
			<li>In the option Item type select -> modal window</li>
			<li>Then enter which popup to show. Enter Modal window ID such as wpbiker-modal-id-1</li>
			<li>Save Menu Item</li>
		</ul>	
		
		<h4><span class="dashicons dashicons-editor-help"></span> How to insert 'Popup' in php file?</h4>
		
		If you want it to appear everywhere on your site, you can insert it for example in your header.php, like this:  <p/>
		<code>&lt;?php echo do_shortcode('[PC-Popup id=1]');?&gt;</code>
		
		<h4><span class="dashicons dashicons-editor-help"></span>How to insert Shortcode in sidebar widgets?</h4>
		Simply add this code to your theme’s functions.php file or a site-specific plugin. <br/><br/>
		
		<code> add_filter('widget_text','do_shortcode');</code><br/><br/>
		
		
		OR<br/><br/>
		
		Install and activate the <a href="https://wordpress.org/plugins/shortcode-widget/" target="_blank">Shortcode Widget plugin</a>
		
		<h4><span class="dashicons dashicons-editor-help"></span>Support</h4>
		
		Got something to say? Need help?<p />
		<a href="https://wordpress.org/support/plugin/popups-creator" target="_blank" class="wpbiker-btn">View support forum</a>
		
		
		
		
	</div>
</div>