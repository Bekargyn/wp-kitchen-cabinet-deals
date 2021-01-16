<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://ljapps.com
 * @since      1.0.0
 *
 * @package    WP_FB_Reviews
 * @subpackage WP_FB_Reviews/admin/partials
 */
 
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // wordpress will add the "settings-updated" $_GET parameter to the url
    if (isset($_GET['settings-updated'])) {
        // add settings saved message with the class of "updated"
        add_settings_error('wpfbr_messages', 'wpfbr_message', __('Settings Saved', 'wp-fb-reviews'), 'updated');
		    // show error/update messages
		//settings_errors('wpfbr_messages');
    }
 


?>
    	
<div class="wrap">
<h1 style="padding:0px;"></h1>
</div>
<div id="wp_fb-settings">
<img src="<?php echo plugin_dir_url( __FILE__ ) . 'logo.png'; ?>">

<?php 
include("tabmenu.php");
?>	
	
	<p><?php _e('The first thing you need to do is grant our Facebook app permission to read your Facebook Page reviews and then copy the access code from our app and paste it in to the field below.', 'wp-fb-reviews'); ?> </p>
		<p><?php _e('Designers/Developers: If you are setting this up for a client, it is highly recommended that you delete your Secret Access Code from the plugin after you download the reviews. Otherwise your client will be able to see all Pages you admin in the list below.', 'wp-fb-reviews'); ?> </p>

	<div id="createbtns">
		<button id="fb_get_access_code" type="button" class="button button-secondary"><?php _e('Get Access Code Here', 'wp-fb-reviews'); ?></button>&nbsp;&nbsp;
	</div>
	</br>	
	<form action="options.php" method="post">
		<?php
		// output security fields for the registered setting "wp_fb-facebook"
		settings_fields('wp_fb-facebook');
		// output setting sections and their fields
		// (sections are registered for "wp_fb-facebook", each field is registered to a specific section)
		do_settings_sections('wp_fb-facebook');
		// output save settings button
		submit_button('Save Settings');
		?>
	</form>
	<div id="pagelist"><h2><?php _e('Download Your Facebook Page Reviews', 'wp-fb-reviews'); ?></h2><p><?php _e('Click the button below for the page(s) you would like to display reviews for. Afterwords go to the "Reviews List" Page to see all your reviews.', 'wp-fb-reviews'); ?> </p><p><?php _e('Note: The Pro version allows you to set a cron job to automatically check for new reviews once a day.', 'wp-fb-reviews'); ?> </p>
	<table class="wp-list-table widefat fixed striped posts">
		<thead>
			<tr>
				<th scope="col" id="wpfbpr_actions" class="manage-column column-categories"><?php _e('Action', 'wp-fb-reviews'); ?></th>
				<th scope="col" id="wpfbpr_fbpagename" class="manage-column"><?php _e('Page Name', 'wp-fb-reviews'); ?></th>
				<th scope="col" id="wpfbpr_fbpageid" class="manage-column"><?php _e('Page ID', 'wp-fb-reviews'); ?></th>
			</tr>
		</thead>
		<tbody id="page_list">
		<tr>
		<td colspan="4"><div id="pageslisterror">
			No pages to list. Make sure you have pasted your Secret Access Code above and have granted the manage_pages permission to the app and clicked the Save Settings button.</div>
		</td>
		</tr>
			</tbody>
	</table>
			<div id="wpfb_page_list_pagination_bar" style="margin-top: 5px;display:none;">
			<span id='btnpageprev' pcode="" class="button">Previous</span>
			<span id='btnpagenext' pcode="" class="button">Next</span>
		</div>
	</div>

	<div id="popup" class="popup-wrapper wpfbr_hide">
	  <div class="popup-content">
		<div class="popup-title">
		  <button type="button" class="popup-close">&times;</button>
		  <h3 id="popup_titletext"></h3>
		</div>
		<div class="popup-body">
		  <div id="popup_bobytext1"></div>
		  <div id="popup_bobytext2"></div>
		</div>
	  </div>
	</div>
</div>




