<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php include ('include/data.php'); ?>
<form action="admin.php?page=<?php echo WPPC_BASENAME; ?>" method="post">
	
	<div class="wpbikercolom">
		
		<div id="wpbiker-leftcol">
			
			<div class="wpbiker-admin">
				<input placeholder="Name is used only for admin purposes" type='text' name='title' value="<?php echo $title; ?>" class="input-100 wpbiker-title"/>
			</div>
			
			<div class="wpbiker-admin">
				<?php wp_editor(stripcslashes($param['content']), 'content', $settings); ?>
				<input type='hidden' name='param[content_type]' value="<?php echo $param['content_type']; ?>"/>
			</div>
			
			<div class="tab-box wpbiker-admin">
				
				<ul class="tab-nav">
					<li><a href="#t1"><i class="fa fa-css3" aria-hidden="true"></i> <?php esc_attr_e("Style", "wplg-pc") ?></a></li>
					<li><a href="#t2"><i class="fa fa-mobile" aria-hidden="true"></i> <?php esc_attr_e("Mobile style", "wplg-pc") ?></a></li>
					<li><a href="#t3"><i class="fa fa-times-circle" aria-hidden="true"></i> <?php esc_attr_e("Close Button", "wplg-pc") ?></a></li>
					<li><a href="#t4"><i class="fa fa-eye" aria-hidden="true"></i> <?php esc_attr_e("Display", "wplg-pc") ?></a></li>
					<li><a href="#t5"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> <?php esc_attr_e("Button", "wplg-pc") ?></a></li>
					<li><a href="#t6"><i class="fa fa-product-hunt" aria-hidden="true"></i> <?php esc_attr_e("Pro version", "wow-marketings") ?></a></li>
				</ul>
				
				<div class="tab-panels">
					
					<div id="t1">
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Width", "wplg-pc") ?>:<br/><input type='text' placeholder="662"  name='param[modal_width]' value="<?php echo $param['modal_width']; ?>"/><br/> <input name="param[modal_width_par]" type="radio" value="px" <?php if($param['modal_width_par']=='px') { echo 'checked="checked"'; } ?>>px <input name="param[modal_width_par]" type="radio" value="pr" <?php if($param['modal_width_par']=='pr') { echo 'checked="checked"'; } ?>>%
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Height", "wplg-pc") ?>:<br/><input type='text' placeholder="auto" name='param[modal_height]' value="<?php echo $param['modal_height']; ?>"/><br/> <input name="param[modal_height_par]" type="radio" value="auto" <?php if($param['modal_height_par']=='auto') { echo 'checked="checked"'; } ?>>auto <input name="param[modal_height_par]" type="radio" value="px" <?php if($param['modal_height_par']=='px') { echo 'checked="checked"'; } ?>>px <input name="param[modal_height_par]" type="radio" value="pr" <?php if($param['modal_height_par']=='pr') { echo 'checked="checked"'; } ?>>%	
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Padding", "wplg-pc") ?>:<br/><input type='text'  placeholder="10" name='param[modal_padding]' value="<?php echo $param['modal_padding']; ?>"/> px
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Border width", "wplg-pc") ?>:<br/><input type='text' placeholder="0" name='param[border_width]' value="<?php echo $param['border_width']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Border radius", "wplg-pc") ?>:<br/><input type='text'  placeholder="5" name='param[border_radius]' value="<?php echo $param['border_radius']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Z-index", "wplg-pc") ?>:<br/><input type='text' placeholder="999999" name='param[modal_zindex]' value="<?php echo $param['modal_zindex']; ?>"/>
							</div>
							
						</div>	
						
						<div class="wpbiker-admin-col">	
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Top position", "wplg-pc") ?>: <br/>
								<input type='text'  placeholder="" name='param[modal_top]' value="<?php echo $param['modal_top']; ?>"/> %
							</div>
							
						</div>
						
						
					</div>
					
					<div id="t2">
						
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Trigger for screens less than", "wplg-pc") ?>:<br/>
								<input type='text' placeholder="1024" name='param[screen_size]' value="<?php echo $param['screen_size']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Width", "wplg-pc") ?>: <br/>
								<input type='text' placeholder="85" name='param[mobile_width]' value="<?php echo $param['mobile_width']; ?>"/> <br/> <input name="param[mobile_width_par]" type="radio" value="px" <?php if($param['mobile_width_par']=='px') { echo 'checked="checked"'; } ?>>px <input name="param[mobile_width_par]" type="radio" value="pr" <?php if($param['mobile_width_par']=='pr' || $param['mobile_width_par'] =='') { echo 'checked="checked"'; } ?>>%
							</div>	
							
						</div>
						
					</div>
					
					
					<div id="t3">
						
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Select a type", "wplg-pc") ?>:<br> 
								<select name="param[close_type]" onclick="typeclose();">
									<option value="image" <?php if($param['close_type']=='image') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Image", "wplg-pc") ?></option>		  
								</select>	
							</div>
							
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Also enable closing on", "wplg-pc") ?>:<br>
								<?php esc_attr_e("Overlay", "wplg-pc") ?> <input name="param[close_button_overlay]" type="checkbox" value="1" <?php if(!empty($param['close_button_overlay'])) { echo 'checked="checked"'; } ?>> Esc  <input name="param[close_button_esc]" type="checkbox" value="1" <?php if(!empty($param['close_button_esc'])) { echo 'checked="checked"'; } ?>>
							</div>
						</div>
						
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Size", "wplg-pc") ?>:<br/>
								<input type='text' placeholder="14" name='param[close_size]' value="<?php echo $param['close_size']; ?>"/>
							</div>
							
						</div>
						
					</div>
					
					
					<div id="t4">
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-12">
								<?php esc_attr_e("Show popup", "wplg-pc") ?>:<br/>
								<select name='param[modal_show]' id="modal_show" onchange="wpchange();">        
									<option value="load" <?php if($param['modal_show']=='load') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the page loads", "wplg-pc") ?></option>
									<option value="click" <?php if($param['modal_show']=='click') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Click on a link (with id)", "wplg-pc") ?></option>
									<option value="scroll" <?php if($param['modal_show']=='scroll') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the window is scrolled", "wplg-pc") ?></option>
									<option value="close" <?php if($param['modal_show']=='close') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the user tries to leave the page", "wplg-pc") ?></option>
									<option value="anchor" <?php if($param['modal_show']=='anchor') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Click on a link (with an #anchor link)", "wplg-pc") ?></option>
								</select><br/>
								<div id="wpchange1" style="display:none; width:80%; font-size:12px;">
									<?php echo __("Add an <b>id='pc-popup-id-X'</b> to the link, where X is the number of the modal window", "wplg-pc") ?>
								</div>
								<div id="wpchange2" style="display:none; width:80%; font-size:12px;">
									<?php echo __("Add an anchor to the link: <b>a href='#pc-popup-id-X'</b>, where X is the number of the modal window", "wplg-pc") ?>
								</div>	 
							</div>
							
							<div class="wpbiker-admin-col-4 wpcookie"> 
								<?php esc_attr_e("Show only once? (use cookies)", "wplg-pc") ?>:<br/>
								<select name='param[use_cookies]'>
									<option value="no" <?php if($param['use_cookies']=='no') { echo 'selected="selected"'; } ?>><?php esc_attr_e("no", "wplg-pc") ?></option>
									<option value="yes" <?php if($param['use_cookies']=='yes') { echo 'selected="selected"'; } ?>><?php esc_attr_e("yes", "wplg-pc") ?></option>
									</select>
							</div>
							
							<div class="wpbiker-admin-col-4 wpcookie">
								<?php esc_attr_e("Reset in", "wplg-pc") ?>:<br/>
								<input type='text'  placeholder="1" name='param[modal_cookies]' value="<?php echo $param['modal_cookies']; ?>"/> <?php esc_attr_e("days", "wplg-pc") ?>
							</div>
							
						</div>
						
					</div>
					
					
					<div id="t5">
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Show button", "wplg-pc") ?>:<br/>
								<select name='param[umodal_button]' onchange="displaybutton();">
									<option value="no" <?php if($param['umodal_button']=='no') { echo 'selected="selected"'; } ?>><?php esc_attr_e("no", "wplg-pc") ?></option>
									<option value="yes" <?php if($param['umodal_button']=='yes') { echo 'selected="selected"'; } ?>><?php esc_attr_e("yes", "wplg-pc") ?></option> 
								</select>
							</div>
							
							<div class="wpbiker-admin-col-4 showbutton">
								<?php esc_attr_e("Button position", "wplg-pc") ?>:<br/>
								<select name='param[umodal_button_position]'>
									<option value="popup_button_right" <?php if($param['umodal_button_position']=='popup_button_right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wplg-pc") ?></option>
									<option value="popup_button_left" <?php if($param['umodal_button_position']=='popup_button_left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wplg-pc") ?></option>
									<option value="popup_button_top" <?php if($param['umodal_button_position']=='popup_button_top') { echo 'selected="selected"'; } ?>><?php esc_attr_e("top", "wplg-pc") ?></option>
									<option value="popup_button_bottom" <?php if($param['umodal_button_position']=='popup_button_bottom') { echo 'selected="selected"'; } ?>><?php esc_attr_e("bottom", "wplg-pc") ?></option>
								</select>
							</div>
							
							<div class="wpbiker-admin-col-4 showbutton">
								<?php esc_attr_e("Button's text", "wplg-pc") ?>:<br/>
								<input type="text" name="param[umodal_button_text]" value="<?php echo $param['umodal_button_text']; ?>" placeholder="Feedback"/>
							</div>
							
						</div>
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 showbutton"><?php esc_attr_e("Button width", "wplg-pc") ?>:<br/>
								<input type="text" name="param[button_width]" value="<?php echo $param['button_width']; ?>" placeholder="150"/> px	
							</div>
							
							
							
						</div>
					</div>
					
					<div id="t6">
						
						<div class="wpbiker-admin-col">
							<h3>Additional options in Pro version:</h3>
							<div class="wpbiker-admin-col-6">
								
								<b>Style setting:</b>
								<ul>    
									<li>Background image</li>
									<li>Position</li>	 
									<li>Bottom position</li>
									<li>Left position</li>
									<li>Right position</li>	 
									<li>Overlay</li>	     
									<li>Background color</li>
									<li>Border color</li>
									
								</ul>
								<b>Display setting:</b>  
								<ul>
									<li>Reach for scroll</li>     
									<li>Animate In</li>
									<li>Animation duration</li>
									<li>Animate Out</li>
									<li>Animation duration</li>
								</ul>
							</div>
							<div class="wpbiker-admin-col-6">
								<b>Close button setting:</b>
								<ul>
									<li>Type close button</li>
									<li>Content</li>    
									<li>Top position</li>
									<li>Right position</li>
									<li>Padding top & bottom</li>
									<li>Padding left & right</li>
									<li>Border width</li>
									<li>Border radius</li>
									<li>Delay</li>
									<li>Background color</li>
									<li>Color</li>
									<li>Border color</li>
								</ul>
							</div>
							<div class="wpbiker-admin-col-12">
								<b>Other settings:</b>
								<ul>  
									<li>Button color;</li>
									<li>Button hover color;</li>
									<li>Show for users : for authorized or unauthorized site users;</li>
									<li>Depending on the language</li>
									<li>Show after popup</li>
									<li>Modal Windows display can be carried out on all the pages in all the website publications indicating the specified exceptions, choosing pages/posts by the set id or inserted shortcode at the same time.</li>
								</ul>
								
							</div>
							
							
						</div>
						
						
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div id="wpbiker-rightcol">
			<div class="wpbikerbox">
				<h3><?php esc_attr_e("Publish", "wplg-pc") ?></h3>
				<div class="wpbiker-admin" style="display: block;">
					<div class="wpbikercolom">
						<div style="float:left;">
							<?php if ($id != ""){ echo '<p class="wpbikerdel"><a href="admin.php?page='.WPPC_BASENAME.'&info=del&did='.$id.'">Delete</a></p>';}; ?>
						</div>
						<div style="float:right;">
							<p/>
							<input name="submit" id="submit" class="button button-primary" value="<?php echo $btn; ?>" type="submit">
						</div>
					</div>
					<div class="wpbiker-col">
						<div class="wpbiker-col-12">
							<?php if ($id != ""){ echo '<a href="#popup-preview" class="wpbiker-btn">Preview</a>';}; ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="wpbikerbox">
				<h3><i class="fa fa-eye" aria-hidden="true"></i> <?php esc_attr_e("Show popup", "wplg-pc") ?></h3>
				<div class="inside wpbiker-admin" style="display: block;">
					
					<div class="wpbiker-admin-col">
						
						<div class="wpbiker-admin-col-12">
							<input name="param[include_mobile]" type="checkbox" value="1" <?php if(!empty($param['include_mobile'])) { echo 'checked="checked"'; }; ?> onclick="screen();"> <?php esc_attr_e("Don’t show on screens less than", "wplg-pc") ?> <br/>
							<div style="display:none;" id="screen">
								<input type="text" name="param[screen]" value="<?php echo ( $param['screen'] ); ?>" /> px
							</div>
						</div>
						
						
						<div class="wpbiker-admin-col-12" >
							<b>[PC-Popup id=<?php echo $id; ?>]</b>
						</div>	
						
						
					</div>
				</div>
			</div>
			
			<div class="wpbikerbox">
				<h3><i class="fa fa-plug" aria-hidden="true"></i> <?php esc_attr_e("WP plugins for", "wplg-sc") ?>:</h3>
				<div class="wpbiker-admin wpbiker-plugins">
					<ul>						
						<li><a href="https://wow-estore.com/en/tag/wordpress-plugins-marketing/" target="_blank">Marketing</a></li>
						<li><a href="https://wow-estore.com/en/tag/wordpress-plugins-for-forms/" target="_blank">Forms</a></li>
						<li><a href="https://wow-estore.com/en/tag/wordpress-plugins-menu/" target="_blank">Menu</a></li>	
						<li><a href="https://wow-estore.com/en/tag/wordpress-plugins-authorization/" target="_blank">Authorization</a></li>	
					</ul>
				</div>
			</div>
			
			<div class="wpbikerbox">				
				<div class="wpbiker-admin">
					<div class="wpbiker-admin-col-12">
						<center><a href='https://wpbiker.com/' target="_blank"><img src="<?php echo plugin_dir_url(__FILE__). 'img/icon.png' ?>"></a></center>
					</div>
					
					<div class="wpbiker-admin-col-12 wpbikericon">
						<a href='https://www.facebook.com/wowaffect/' title="Join Us on Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>												
						<a href='https://profiles.wordpress.org/wpbiker/' title="Join Us on WordPress" target="_blank"><i class="fa fa-wordpress wowicon" aria-hidden="true"></i></a>
						<a href='https://wow-estore.com' target="_blank" title="Wow-Estore"><img src="<?php echo plugin_dir_url(__FILE__). 'img/estore.png' ?>"></a>
						<a href='https://wpcalc.com/' target="_blank" title="Online Calculators"><img src="<?php echo plugin_dir_url(__FILE__). 'img/wpcalc.png' ?>"></a>		
							
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
    <input type="hidden" name="addtool" value="<?php echo $hidval; ?>" />    
    <input type="hidden" name="id" value="<?php echo $id; ?>" />	
	<input type="hidden" name="page" value="<?php echo WPPC_BASENAME; ?>" />
	<input type="hidden" name="tool" value="popup" />
	<input type="hidden" name="plugdir" value="<?php echo WPPC_BASENAME; ?>" />		
	<?php wp_nonce_field('wpbiker_action','wpbiker_nonce_field'); ?>
</form>
<?php  if ($act == "update") { 
	include ('preview/preview.php');
}
?>