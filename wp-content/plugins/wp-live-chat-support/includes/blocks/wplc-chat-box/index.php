<?php
/**
 * BLOCK: WP Live Chat Support Chat box
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wplc_gutenberg_block_settings() {
	add_filter('wplc_filter_setting_tabs','wplc_gutenberg_setting_tabs');
	add_action("wplc_hook_settings_page_more_tabs","wplc_gutenberg_settings_content");
}

add_action('admin_init', 'wplc_gutenberg_block_settings');

function wplc_gutenberg_setting_tabs($tab_array) {
    $tab_array['gutenberg'] = array(
      'href' => '#tabs-gutenberg',
      'icon' => 'fa fa-commenting-o',
      'label' => __('Gutenberg Blocks', 'wplivechat')
    );
    return $tab_array;
}

function wplc_gutenberg_settings_content() {
	$gutenberg_settings = get_option('wplc_gutenberg_settings');

	$gutenberg_enable = ( $gutenberg_settings['wplc_gutenberg_enable'] !== null ) ? $gutenberg_settings['wplc_gutenberg_enable'] : 1;
	$checked = ( @$gutenberg_enable == 1 ? 'checked' : '' );
	$gutenberg_size = ( $gutenberg_settings['wplc_gutenberg_size'] ) ? $gutenberg_settings['wplc_gutenberg_size'] : 2;
	$gutenberg_defail_logo = 'https://bleeper.io/app/assets/images/wplc_loading.png';
	$gutenberg_logo = ( $gutenberg_settings['wplc_gutenberg_logo'] == '' ) ? $gutenberg_defail_logo : $gutenberg_settings['wplc_gutenberg_logo'];
	$gutenberg_text = ( $gutenberg_settings['wplc_gutenberg_text'] ) ? $gutenberg_settings['wplc_gutenberg_text'] : 'Live Chat';
	$gutenberg_icon = ( $gutenberg_settings['wplc_gutenberg_icon'] ) ? $gutenberg_settings['wplc_gutenberg_icon'] : 'fa-commenting-o';
	$gutenberg_enable_icon = ( $gutenberg_settings['wplc_gutenberg_enable_icon'] !== null ) ? $gutenberg_settings['wplc_gutenberg_enable_icon'] : 1;
	$icon_checked = ( @$gutenberg_enable_icon == 1 ? 'checked' : '' );
	$gutenberg_custom_html = ( $gutenberg_settings['wplc_custom_html'] ) ? $gutenberg_settings['wplc_custom_html'] : '';
	?>

	<div id="tabs-gutenberg">      
		<h3><?php _e('Gutenberg Blocks', 'wplivechat') ?></h3>
		<table class='form-table wp-list-table wplc_list_table widefat fixed striped pages'>

		    <tr>
		        <td width='300' valign='top'><?php _e('Enable Gutenberg Blocks', 'wplivechat') ?>:</td> 

		        <td>
		            <input type="checkbox" id="activate_block" name="activate_block" <?php echo $checked ?>/>
		        </td>
		    </tr>

		    <tr>
		        <td width='300' valign='top'><?php _e('Gutenberg Block Size', 'wplivechat') ?>:</td> 
		        <td>
		            <select id="wplc_gutenberg_size" name="wplc_gutenberg_size" value="1">
		            	<option <?php echo ($gutenberg_size == 1) ? 'selected' : ''; ?> value="1">Small</option>
		            	<option <?php echo ($gutenberg_size == 2) ? 'selected' : ''; ?> value="2">Medium</option>
		            	<option <?php echo ($gutenberg_size == 3) ? 'selected' : ''; ?> value="3">Large</option>
		       		</select>
		        </td>
		    </tr>

		    <tr>
		        <td width='300' valign='top'><?php _e('Block Logo', 'wplivechat') ?>:</td>

		        <td>
		            <input type="button" id="wplc_gutenberg_upload_logo" class="button button-primary" value="Upload Logo"/>
		            <input type="button" id="wplc_gutenberg_remove_logo" class="button button-default" value="Reset Logo"/>
		            <input type="hidden" id="wplc_gutenberg_default_logo" value="<?php echo $gutenberg_defail_logo; ?>" />
		            <input type="hidden" id="wplc_gutenberg_logo" name="wplc_gutenberg_logo" value="<?php echo $gutenberg_logo; ?>"/>
		        </td>
		    </tr>

		    <tr>
		        <td width='300' valign='top'><?php _e('Block Text', 'wplivechat') ?>:</td>

		        <td>
		            <input type="text" id="wplc_gutenberg_text" name="wplc_gutenberg_text" placeholder="Block text" value="<?php echo $gutenberg_text ?>"/>
		        </td>
		    </tr>

		    <tr>
		        <td width='300' valign='top'><?php _e('Display Icon', 'wplivechat') ?>:<td>
		            <input type="checkbox" id="wplc_gutenberg_enable_icon" name="wplc_gutenberg_enable_icon" <?php echo $icon_checked; ?>/>
		        </td>
		    </tr>

		    <tr>
		        <td width='300' valign='top'><?php _e('Block Icon', 'wplivechat') ?>:</td>

		        <td>
		            <input type="text" id="wplc_gutenberg_icon" name="wplc_gutenberg_icon" placeholder="Block icon" value="<?php echo $gutenberg_icon ?>"/>
		        </td>
		    </tr>

		    <tr>
		        <td width='300' valign='top'><?php _e("Block Preview", "wplivechat") ?>:</td>

		        <td>
		            <div id="wplc-chat-box" class="wplc_gutenberg_preview"></div>
		        </td>
		    </tr>
	
			<tr>
		        <td width='300' valign='top'><?php _e('Custom HTML Template', 'wplivechat') ?>:
					<small><p><i class="fa fa-question-circle wplc_light_grey wplc_settings_tooltip"></i> You can use the following placeholders to add content dynamically:</p>
					<p><code class="wplc_code" title="Click to copy text">{wplc_logo}</code> - <?php _e('Displays the chosen logo', 'wplivechat'); ?></p>
					<p><code class="wplc_code" title="Click to copy text">{wplc_text}</code> - <?php _e('Displays the chosen custom text', 'wplivechat'); ?></p>
					<p><code class="wplc_code" title="Click to copy text">{wplc_icon}</code> - <?php _e('Displays the chosen icon', 'wplivechat'); ?></p></small>
		        </td>

		        <td>
		            <div id='wplc_custom_html_editor'></div>
		            <textarea name='wplc_custom_html' id='wplc_custom_html' style='display: none;' data-editor='css' rows='12'>
		            	<?php echo strip_tags( stripslashes(  trim($gutenberg_custom_html))); ?>
		            </textarea>
		           
		        	
		        	<input type="button" id="wplc_gutenberg_reset_html" class="button button-default" value="Reset Default"/>
		        	<select id="wplc_custom_templates">
		        		<option selected value="0">Select a Template</option>
		        		<option value="template_default">Default - Dark</option>
		        		<option value="template_default_light">Default - Light</option>
		        		<option value="template_default_tooltip">Default - Tooltip</option>
		        		<option value="template_circle">Circle - Default</option>
		        		<option value="template_tooltip">Circle - Tooltip</option>
		        		<option value="template_circle_rotate">Circle - Rotating</option>
		        		<option value="template_chat_bubble">Chat Bubble</option>
		        		
		        	</select>
		        </td>
		    </tr>
		</table>
	</div>

	<?php 
}

add_action('wplc_hook_admin_settings_save','wplc_gutenberg_save_settings');

function wplc_gutenberg_save_settings() {
	
    if (isset($_POST['wplc_save_settings'])) {

        if (isset($_POST['activate_block'])) {
            $wplc_gutenberg_data['wplc_gutenberg_enable'] = 1;
        } else {
            $wplc_gutenberg_data['wplc_gutenberg_enable'] = 0;
        }

        if (isset($_POST['wplc_gutenberg_logo']) && $_POST['wplc_gutenberg_logo'] !== '0') {
            $wplc_gutenberg_data['wplc_gutenberg_logo'] = esc_attr($_POST['wplc_gutenberg_logo']);
        } else {
            $wplc_gutenberg_data['wplc_gutenberg_logo'] = 'https://bleeper.io/app/assets/images/wplc_loading.png';
        }

        if (isset($_POST['wplc_gutenberg_size']) && $_POST['wplc_gutenberg_size'] !== '0') {
            $wplc_gutenberg_data['wplc_gutenberg_size'] = esc_attr($_POST['wplc_gutenberg_size']);
        } else {
            $wplc_gutenberg_data['wplc_gutenberg_size'] = '2';
        }

        if (isset($_POST['wplc_gutenberg_text']) && $_POST['wplc_gutenberg_text'] !== '0') {
            $wplc_gutenberg_data['wplc_gutenberg_text'] = esc_attr($_POST['wplc_gutenberg_text']);
        } else {
            $wplc_gutenberg_data['wplc_gutenberg_text'] = 'Live Chat';
        }

        if (isset($_POST['wplc_gutenberg_icon']) && $_POST['wplc_gutenberg_icon'] !== '0') {
            $wplc_gutenberg_data['wplc_gutenberg_icon'] = esc_attr($_POST['wplc_gutenberg_icon']);
        } else {
            $wplc_gutenberg_data['wplc_gutenberg_icon'] = 'fa-commenting-o';
        }

        if (isset($_POST['wplc_gutenberg_enable_icon'])) {
            $wplc_gutenberg_data['wplc_gutenberg_enable_icon'] = 1;
        } else {
            $wplc_gutenberg_data['wplc_gutenberg_enable_icon'] = 0;
        }

        if (isset($_POST['wplc_custom_html']) && $_POST['wplc_custom_html'] !== '0') {
            $wplc_gutenberg_data['wplc_custom_html'] = esc_attr($_POST['wplc_custom_html']);
        } else {
        	$default_html = '\n<div class="wplc_block">\n\t<span class="wplc_block_logo">{wplc_logo}</span>\n\t<span class="wplc_block_text">{wplc_text}</span>\n\t<span class="wplc_block_icon">{wplc_icon}</span>\n</div>';

            $wplc_gutenberg_data['wplc_custom_html'] = $default_html;
        }
        
        update_option('wplc_gutenberg_settings', $wplc_gutenberg_data);
    }
}

add_action( 'enqueue_block_editor_assets', 'wplc_chat_box_block_editor_assets' );

function wplc_chat_box_block_editor_assets() {
	// Scripts
	wp_enqueue_script(
		'wplc_chat_box',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);

	$gutenberg_settings = get_option( 'wplc_gutenberg_settings' );
	$gutenberg_logo = $gutenberg_settings['wplc_gutenberg_logo'];
	$settings['wplc_typing'] = __("Type here","wplivechat");
	$settings['wplc_enabled'] = $gutenberg_settings['wplc_gutenberg_enable'];
	$settings['wplc_size'] = ( $gutenberg_settings['wplc_gutenberg_size'] ? esc_attr( $gutenberg_settings['wplc_gutenberg_size'] ) : 2 );
	$settings['wplc_logo'] = $gutenberg_logo;
	$settings['wplc_text'] = ( $gutenberg_settings['wplc_gutenberg_text'] ? esc_attr( $gutenberg_settings['wplc_gutenberg_text'] ) : __( 'Live Chat', 'wplivechat' ) );

	$settings['wplc_icon'] = ( $gutenberg_settings['wplc_gutenberg_icon'] ? esc_attr( $gutenberg_settings['wplc_gutenberg_icon'] ) : 'fa-commenting-o' );
	$settings['wplc_icon_enabled'] = $gutenberg_settings['wplc_gutenberg_enable_icon'];
	$settings['wplc_custom_html'] = $gutenberg_settings['wplc_custom_html'];

	wp_localize_script( 'wplc_chat_box', 'wplc_settings', $settings );

	// Styles
	wp_enqueue_style(
		'wplc_chat_box-editor',
		plugins_url( 'editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}

add_action( 'enqueue_block_assets', 'wplc_chat_box_block_block_assets' );

function wplc_chat_box_block_block_assets() {
	// Styles for front-end
	wp_enqueue_style(
		'wplc_chat_box-front-end',
		plugins_url( 'style.css', __FILE__ ),
		array( 'wp-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
	);
	wp_enqueue_style(
		'wplc_chat_box-front-end-template', plugins_url( 'wplc_gutenberg_template_styles.css', __FILE__ ), array( 'wp-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'wplc_gutenberg_template_styles.css' )
	);
}
