<?php

add_action('admin_init', 'kc_options_init');
add_action('admin_menu', 'kc_options_add_page');

/**
 * Init plugin options to white list our options
 */
function kc_options_init(){
	register_setting('kc_theme_options', 'kc_theme_options', 'kc_options_validate');
}

/**
 * Load up the menu page
 */
function kc_options_add_page() {
	add_theme_page(__('Theme Options', 'kaleidos-chaos'), __('Theme Options', 'kaleidos-chaos'), 'edit_theme_options', 'kc_options', 'kc_options_do_page');
}

/**
 * Create the options page
 */
function kc_options_do_page() {

	if (! isset($_REQUEST['settings-updated']))
		$_REQUEST['settings-updated'] = false;
	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>".get_current_theme().__(' Theme Options', 'kaleidos-chaos')."</h2>"; ?>

		<?php if (false !== $_REQUEST['settings-updated']) : ?>
		<div class="updated fade"><p><strong><?php _e('Options saved', 'kaleidos-chaos'); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields('kc_theme_options'); ?>
			<?php $options = get_option('kc_theme_options'); ?>

			<table class="form-table">

				<?php
				/**
				 * A sample text input option
				 */
				?>
				<tr valign="top"><th scope="row"><label class="description" for="kc_theme_options[googleanalytics]"><?php _e('Google Analytics Key', 'kaleidos-chaos'); ?></label></th>
					<td>
						<input id="kc_theme_options[googleanalytics]" class="regular-text" type="text" name="kc_theme_options[googleanalytics]" value="<?php esc_attr_e($options['googleanalytics']); ?>" />
					</td>
				</tr>
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'kaleidos-chaos'); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function kc_options_validate($input) {

	// Say our text option must be safe text with no HTML tags
	$input['googleanalytics'] = wp_filter_nohtml_kses($input['googleanalytics']);
	if (trim($input['googleanalytics']) === '') {
		$input['googleanalytics'] = false;
	} 

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/