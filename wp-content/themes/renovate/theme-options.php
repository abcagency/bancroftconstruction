<?php
//admin menu
function re_theme_admin_menu() 
{
	global $themename;
	add_theme_page(__('Theme Options', 'renovate') ,__('Theme Options', 'renovate'), 'edit_theme_options', 'ThemeOptions', $themename . "_options");
}
add_action("admin_menu", "re_theme_admin_menu");

function re_theme_stripslashes_deep($value)
{
	$value = is_array($value) ?
				array_map('stripslashes_deep', $value) :
				stripslashes($value);

	return $value;
}

function renovate_save_options()
{
	global $themename;

	$theme_options = array(
		"favicon_url" => $_POST["favicon_url"],
		"logo_url" => $_POST["logo_url"],
		"logo_text" => $_POST["logo_text"],
		"footer_text" => $_POST["footer_text"],
		"sticky_menu" => (int)$_POST["sticky_menu"],
		"responsive" => (int)$_POST["responsive"],
		"scroll_top" => (int)$_POST["scroll_top"],
		"layout" => $_POST["layout"],
		"layout_style" => $_POST["layout_style"],
		"layout_image_overlay" => (isset($_POST["layout_image_overlay"]) && $_POST["layout_image_overlay"]!="" ? $_POST["layout_image_overlay"] : "0"),
		"style_selector" => $_POST["style_selector"],
		"direction" => $_POST["direction"],
		"collapsible_mobile_submenus" => $_POST["collapsible_mobile_submenus"],
		"ga_tracking_code" => $_POST["ga_tracking_code"],
		"cf_admin_name" => $_POST["cf_admin_name"],
		"cf_admin_email" => $_POST["cf_admin_email"],
		"cf_smtp_host" => $_POST["cf_smtp_host"],
		"cf_smtp_username" => $_POST["cf_smtp_username"],
		"cf_smtp_password" => $_POST["cf_smtp_password"],
		"cf_smtp_port" => $_POST["cf_smtp_port"],
		"cf_smtp_secure" => $_POST["cf_smtp_secure"],
		"cf_email_subject" => $_POST["cf_email_subject"],
		"cf_template" => $_POST["cf_template"],
		/*"color_scheme" => $_POST["color_scheme"],*/
		/*"font_size_selector" => $_POST["font_size_selector"],*/
		"site_background_color" => $_POST["site_background_color"],
		"main_color" => $_POST["main_color"],
		/*"header_style" => $_POST["header_style"],*/
		"header_top_sidebar" => $_POST["header_top_sidebar"],
		/*"header_top_right_sidebar" => $_POST["header_top_right_sidebar"],*/
		"primary_font" => $_POST["primary_font"],
		"primary_font_subset" => (isset($_POST["primary_font_subset"]) ? $_POST["primary_font_subset"] : ""),
		"primary_font_custom" => $_POST["primary_font_custom"]/*,
		"secondary_font" => $_POST["secondary_font"],
		"secondary_font_custom" => $_POST["secondary_font_custom"],
		"text_font" => $_POST["text_font"],
		"text_font_custom" => $_POST["text_font_custom"]*/
	);
	update_option($themename . "_options", $theme_options);
	echo json_encode($_POST);
	exit();
}
add_action('wp_ajax_' . $themename . '_save', $themename . '_save_options');

function re_get_new_widget_name( $widget_name, $widget_index ) 
{
	$current_sidebars = get_option( 'sidebars_widgets' );
	$all_widget_array = array( );
	foreach ( $current_sidebars as $sidebar => $widgets ) {
		if ( !empty( $widgets ) && is_array( $widgets ) && $sidebar != 'wp_inactive_widgets' ) {
			foreach ( $widgets as $widget ) {
				$all_widget_array[] = $widget;
			}
		}
	}
	while ( in_array( $widget_name . '-' . $widget_index, $all_widget_array ) ) {
		$widget_index++;
	}
	$new_widget_name = $widget_name . '-' . $widget_index;
	return $new_widget_name;
}
function re_download_import_file($file)
{	
	$url = "http://quanticalabs.com/wptest/renovate/files/2015/06/" . $file["name"] . "." . $file["extension"];
	$attachment = get_page_by_title($file["name"], "OBJECT", "attachment");
	if($attachment!=null)
		$id = $attachment->ID;
	else
	{
		$tmp = download_url($url);
		$file_array = array(
			'name' => basename($url),
			'tmp_name' => $tmp
		);

		// Check for download errors
		if(is_wp_error($tmp)) 
		{
			@unlink($file_array['tmp_name']);
			return $tmp;
		}

		$id = media_handle_sideload($file_array, 0);
		// Check for handle sideload errors.
		if(is_wp_error($id))
		{
			@unlink($file_array['tmp_name']);
			return $id;
		}
	}
    return get_attached_file($id);
}
function renovate_import_shop_dummy()
{
	$result = array("info" => "");
	//import dummy content
	$fetch_attachments = true;
	$file = re_download_import_file(array(
		"name" => "dummy-shop.xml",
		"extension" => "gz"
	));
	if(!is_wp_error($file))
		require_once(locate_template('importer/importer.php'));
	else
		$result["info"] = "Import file dummy_shop.xml not found! Please upload import file manually into Media library. You can find this file in 'dummy content files' directory inside zip archive downloaded from ThemeForest.";
	if($result["info"]=="")
		$result["info"] = "dummy_shop.xml file content has been imported successfully!";
	echo "dummy_import_start" . json_encode($result) . "dummy_import_end";
	exit();
}
add_action('wp_ajax_' . $themename . '_import_shop_dummy', $themename . '_import_shop_dummy');
function renovate_import_dummy()
{
	$result = array("info" => "");
	//import dummy content
	$fetch_attachments = true;
	$file = re_download_import_file(array(
		"name" => "dummy-images.xml",
		"extension" => "gz"
	));
	if(!is_wp_error($file))
		require_once(locate_template('importer/importer.php'));
	else
		$result["info"] = "Import file dummy_images.xml not found! Please upload import file manually into Media library. You can find this file in 'dummy content files' directory inside zip archive downloaded from ThemeForest.";
	if($result["info"]=="")
		$result["info"] = "dummy_images.xml file content has been imported successfully!";
	echo "dummy_import_start" . json_encode($result) . "dummy_import_end";
	exit();
}
add_action('wp_ajax_' . $themename . '_import_dummy', $themename . '_import_dummy');

function renovate_import_dummy2()
{
	global $themename;
	$result = array("info" => "");
	//import dummy content
	$fetch_attachments = false;
	$file = re_download_import_file(array(
		"name" => "dummy-data.xml",
		"extension" => "gz"
	));
	if(!is_wp_error($file))
		require_once(locate_template('importer/importer.php'));
	else
	{
		$result["info"] .= "Import file: dummy-data.xml not found! Please upload import file manually into Media library. You can find this file in 'dummy content files' directory inside zip archive downloaded from ThemeForest.";
		exit();
	}
	//set menu
	$locations = get_theme_mod('nav_menu_locations');
	$menus = wp_get_nav_menus();
	foreach($menus as $menu)
		$locations[$menu->slug] = $menu->term_id;
	
	set_theme_mod('nav_menu_locations', $locations);
	//set front page
	$home = get_page_by_title('HOME');
	update_option('page_on_front', $home->ID);
	update_option('show_on_front', 'page');
	//set blog description
	update_option("blogdescription", "Construction Renovation Theme");
	//set top sidebar
	$theme_sidebars_array = get_posts(array(
		'post_type' => 'renovate_sidebars',
		'posts_per_page' => '-1',
		'nopaging' => true,
		'post_status' => 'publish',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));
	$theme_options = get_option($themename . "_options", true);
	$needed_id = 0;
	foreach($theme_sidebars_array as $theme_sidebar)
	{	
		if($theme_sidebar->post_title=="Sidebar Header")
		{
			$needed_id = $theme_sidebar->ID;
			break;
		}
	}
	$theme_options["header_top_sidebar"] = $needed_id;
	update_option($themename . "_options", $theme_options);
	
	//slider import
	$Slider=new RevSlider();
	$Slider->importSliderFromPost(true,true,re_download_import_file(array(
		"name" => "main",
		"extension" => "zip"
	)));   
	
	//widget import
	$response = array(
		'what' => 'widget_import_export',
		'action' => 'import_submit'
	);

	$widgets = isset( $_POST['widgets'] ) ? $_POST['widgets'] : false;
	$json_file = re_download_import_file(array(
		"name" => "widget_data",
		"extension" => "json"
	));
	if(!is_wp_error($json_file))
	{
		$json_data = file_get_contents($json_file);
		$json_data = json_decode( $json_data, true );
		$sidebars_data = $json_data[0];
		$widget_data = $json_data[1];
		$current_sidebars = get_option( 'sidebars_widgets' );
		//remove inactive widgets
		$current_sidebars['wp_inactive_widgets'] = array();
		update_option('sidebars_widgets', $current_sidebars);
		$new_widgets = array( );
		foreach ( $sidebars_data as $import_sidebar => $import_widgets ) :

			foreach ( $import_widgets as $import_widget ) :
				//if the sidebar exists
				//if ( isset( $current_sidebars[$import_sidebar] ) ) :
					$title = trim( substr( $import_widget, 0, strrpos( $import_widget, '-' ) ) );
					$index = trim( substr( $import_widget, strrpos( $import_widget, '-' ) + 1 ) );
					$current_widget_data = get_option( 'widget_' . $title );
					$new_widget_name = re_get_new_widget_name( $title, $index );
					$new_index = trim( substr( $new_widget_name, strrpos( $new_widget_name, '-' ) + 1 ) );

					if ( !empty( $new_widgets[ $title ] ) && is_array( $new_widgets[$title] ) ) {
						while ( array_key_exists( $new_index, $new_widgets[$title] ) ) {
							$new_index++;
						}
					}
					$current_sidebars[$import_sidebar][] = $title . '-' . $new_index;
					if ( array_key_exists( $title, $new_widgets ) ) {
						$new_widgets[$title][$new_index] = $widget_data[$title][$index];
						$multiwidget = $new_widgets[$title]['_multiwidget'];
						unset( $new_widgets[$title]['_multiwidget'] );
						$new_widgets[$title]['_multiwidget'] = $multiwidget;
					} else {
						$current_widget_data[$new_index] = $widget_data[$title][$index];
						$current_multiwidget = $current_widget_data['_multiwidget'];
						$new_multiwidget = $widget_data[$title]['_multiwidget'];
						$multiwidget = ($current_multiwidget != $new_multiwidget) ? $current_multiwidget : 1;
						unset( $current_widget_data['_multiwidget'] );
						$current_widget_data['_multiwidget'] = $multiwidget;
						$new_widgets[$title] = $current_widget_data;
					}

				//endif;
			endforeach;
		endforeach;
		if ( isset( $new_widgets ) && isset( $current_sidebars ) ) {
			update_option( 'sidebars_widgets', $current_sidebars );

			foreach ( $new_widgets as $title => $content ) {
				$content["_multiwidget"] = 1;
				$content = apply_filters( 'widget_data_import', $content, $title );
				update_option( 'widget_' . $title, $content );
			}

		}
	}
	else
	{
		$result["info"] .= "Widgets data file not found! Please upload widgets data file manually.";
		exit();
	}
	if($result["info"]=="")
	{
		//set shop page
		$shop = get_page_by_title('Shop');
		update_option('woocommerce_shop_page_id', $shop->ID);
		//set my-account page
		$myaccount = get_page_by_title('My Account');
		update_option('woocommerce_myaccount_page_id', $myaccount->ID);
		//set cart page
		$cart = get_page_by_title('Cart');
		update_option('woocommerce_cart_page_id', $cart->ID);
		//set checkout page
		$checkout = get_page_by_title('Checkout');
		update_option('woocommerce_checkout_page_id', $checkout->ID);
		
		$hide_notice = sanitize_text_field("install");
		$notices = array_diff(get_option('woocommerce_admin_notices', array()), array("install"));
		update_option('woocommerce_admin_notices', $notices);
		do_action('woocommerce_hide_install_notice');
		
		$result["info"] = "dummy-data.xml file content and widgets settings has been imported successfully!";
	}
	echo "dummy_import_start" . json_encode($result) . "dummy_import_end";
	exit();
}
add_action('wp_ajax_' . $themename . '_import_dummy2', $themename . '_import_dummy2');

function renovate_options() 
{
	global $themename;

	$theme_options = array(
		"favicon_url" => '',
		"logo_url" => '',
		"logo_text" => '',
		"footer_text" => '',
		"sticky_menu" => '',
		"responsive" => '',
		"scroll_top" => '',
		"layout" => '',
		"layout_style" => '',
		"layout_image_overlay" => '',
		"style_selector" => '',
		"direction" => '',
		"collapsible_mobile_submenus" => '',
		"ga_tracking_code" => '',
		"cf_admin_name" => '',
		"cf_admin_email" => '',
		"cf_smtp_host" => '',
		"cf_smtp_username" => '',
		"cf_smtp_password" => '',
		"cf_smtp_port" => '',
		"cf_smtp_secure" => '',
		"cf_email_subject" => '',
		"cf_template" => '',
		"site_background_color" => '',
		"main_color" => '',
		"header_top_sidebar" => '',
		"primary_font" => '',
		"primary_font_subset" => '',
		"primary_font_custom" => ''
	);
	$theme_options = re_theme_stripslashes_deep(array_merge($theme_options, get_option($themename . "_options")));
	if(isset($_POST["action"]) && $_POST["action"]==$themename . "_save")
	{
	?>
	<div class="updated"> 
		<p>
			<strong>
				<?php _e('Options saved', 'renovate'); ?>
			</strong>
		</p>
	</div>
	<?php
	}
	//get google fonts
	$fontsArray = re_get_google_fonts();
	?>
	<form class="theme_options" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" id="theme-options-panel">
		<div class="header">
			<div class="header_left">
				<h3>
					<a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs" title="QuanticaLabs">
						QuanticaLabs
					</a>
				</h3>
				<h5>Theme Options</h5>
			</div>
			<div class="header_right">
				<div class="description">
					<h3>
						<a href="http://themeforest.net/item/renovate-construction-renovation-wordpress-theme/11789093?ref=QuanticaLabs" title="Renovate - Construction Renovation Theme">
							Renovate - Construction Renovation Theme
						</a>
					</h3>
					<h5>Version 3.2</h5>
					<a class="description_link" target="_blank" href="<?php echo esc_url(get_template_directory_uri() . '/documentation/index.html'); ?>">Documentation</a>
					<a class="description_link" target="_blank" href="http://support.quanticalabs.com">Support Forum</a>
					<a class="description_link" target="_blank" href="http://themeforest.net/item/renovate-construction-renovation-wordpress-theme/11789093?ref=QuanticaLabs">Theme site</a>
				</div>
				<a class="logo" href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs" title="QuanticaLabs">
					&nbsp;
				</a>
			</div>
		</div>
		<div class="content clearfix">
			<ul class="menu">
				<li>
					<a href='#tab-main' class="selected">
						<span class="dashicons dashicons-hammer"></span>
						<?php _e('Main', 'renovate'); ?>
					</a>
				</li>
				<li>
					<a href="#tab-email-config">
						<span class="dashicons dashicons-email-alt"></span>
						<?php _e('Email Config', 'renovate'); ?>
					</a>
				</li>
				<li>
					<a href="#tab-colors">
						<span class="dashicons dashicons-art"></span>
						<?php _e('Colors', 'renovate'); ?>
					</a>
				</li>
				<li>
					<a href="#tab-header">
						<span class="dashicons dashicons-welcome-widgets-menus"></span>
						<?php _e('Header', 'renovate'); ?>
					</a>
				</li>
				<li>
					<a href="#tab-fonts">
						<span class="dashicons dashicons-editor-textcolor"></span>
						<?php _e('Fonts', 'renovate'); ?>
					</a>
				</li>
			</ul>
			<div id="tab-main" class="settings" style="display: block;">
				<h3><?php _e('Main', 'renovate'); ?></h3>
				<ul class="form_field_list">
					<li>
						<label for="import_dummy"><?php _e('DUMMY CONTENT IMPORT', 'renovate'); ?></label>
						<input type="button" class="button" name="<?php echo esc_attr($themename);?>_import_dummy" id="import_dummy" value="<?php esc_attr_e('Import dummy content', 'renovate'); ?>" />
						<img id="dummy_content_preloader" src="<?php echo get_template_directory_uri();?>/admin/images/ajax-loader.gif" />
						<img id="dummy_content_tick" src="<?php echo get_template_directory_uri();?>/admin/images/tick.png" />
						<div id="dummy_content_info"></div>
					</li>
					<?php
					if(is_plugin_active('woocommerce/woocommerce.php')):
					?>
					<li>
						<label for="import_shop_dummy"><?php _e('DUMMY SHOP CONTENT IMPORT', 'renovate'); ?></label>
						<input type="button" class="button" name="<?php echo esc_attr($themename);?>_import_shop_dummy" id="import_shop_dummy" value="<?php esc_attr_e('Import shop dummy content', 'renovate'); ?>" />
						<img id="dummy_shop_content_preloader" src="<?php echo get_template_directory_uri();?>/admin/images/ajax-loader.gif" />
						<img id="dummy_shop_content_tick" src="<?php echo get_template_directory_uri();?>/admin/images/tick.png" />
						<div id="dummy_shop_content_info"></div>
					</li>
					<?php
					endif;
					?>
					<li>
						<label for="favicon_url"><?php _e('FAVICON URL', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["favicon_url"]); ?>" id="favicon_url" name="favicon_url">
							<input type="button" class="button" name="<?php echo esc_attr($themename);?>_upload_button" id="favicon_url_upload_button" value="<?php esc_attr_e('Insert favicon', 'renovate'); ?>" />
						</div>
					</li>
					<li>
						<label for="logo_url"><?php _e('LOGO URL', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["logo_url"]); ?>" id="logo_url" name="logo_url">
							<input type="button" class="button" name="<?php echo esc_attr($themename);?>_upload_button" id="logo_url_upload_button" value="<?php esc_attr_e('Insert logo', 'renovate'); ?>" />
						</div>
					</li>
					<li>
						<label for="logo_text"><?php _e('LOGO TEXT', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["logo_text"]); ?>" id="logo_text" name="logo_text">
						</div>
					</li>
					<li>
						<label for="footer_text"><?php _e('FOOTER TEXT', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["footer_text"]); ?>" id="footer_text" name="footer_text">
						</div>
					</li>
					<li>
						<label for="sticky_menu"><?php _e('STICKY MENU', 'renovate'); ?></label>
						<div>
							<select id="sticky_menu" name="sticky_menu">
								<option value="0"<?php echo ((int)$theme_options["sticky_menu"]==0 ? " selected='selected'" : "") ?>><?php _e('no', 'renovate'); ?></option>
								<option value="1"<?php echo ((int)$theme_options["sticky_menu"]==1 ? " selected='selected'" : "") ?>><?php _e('yes', 'renovate'); ?></option>
							</select>
						</div>
					</li>
					<li>
						<label for="responsive"><?php _e('RESPONSIVE', 'renovate'); ?></label>
						<div>
							<select id="responsive" name="responsive">
								<option value="1"<?php echo ((int)$theme_options["responsive"]==1 ? " selected='selected'" : "") ?>><?php _e('yes', 'renovate'); ?></option>
								<option value="0"<?php echo ((int)$theme_options["responsive"]==0 ? " selected='selected'" : "") ?>><?php _e('no', 'renovate'); ?></option>
							</select>
						</div>
					</li>
					<li>
						<label for="scroll_top"><?php _e('SCROLL TO TOP ICON', 'renovate'); ?></label>
						<div>
							<select id="scroll_top" name="scroll_top">
								<option value="1"<?php echo ((int)$theme_options["scroll_top"]==1 ? " selected='selected'" : "") ?>><?php _e('yes', 'renovate'); ?></option>
								<option value="0"<?php echo ((int)$theme_options["scroll_top"]==0 ? " selected='selected'" : "") ?>><?php _e('no', 'renovate'); ?></option>
							</select>
						</div>
					</li>
					<li>
						<label for="layout"><?php _e('LAYOUT', 'renovate'); ?></label>
						<div>
							<select id="layout" name="layout">
								<option value="fullwidth"<?php echo ($theme_options["layout"]=="fullwidth" ? " selected='selected'" : "") ?>><?php _e('full width', 'renovate'); ?></option>
								<option value="boxed"<?php echo ($theme_options["layout"]=="boxed" ? " selected='selected'" : "") ?>><?php _e('boxed', 'renovate'); ?></option>
							</select>
						</div>
					</li>
					<li class="boxed_bg_image clearfix"<?php echo ($theme_options["layout"]!="boxed" ? ' style="display: none;"' : ''); ?>>
						<label for="layout"><?php _e('BOXED LAYOUT BACKGROUND', 'renovate');?></label>
						<div>
							<label class="small_label"><?php _e("Boxed Layout Background Color", 'renovate'); ?></label>
							<div<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='color_preview' ? ' class="selected"' : ''); ?>>
								<a href="#" class="color_preview" style="background-color: #<?php echo ($theme_options["site_background_color"]!="" ? esc_attr($theme_options["site_background_color"]) : 'E5E5E5'); ?>;"><span class="tick"></span></a>
								<input type="text" class="regular-text color short" value="<?php echo esc_attr($theme_options["site_background_color"]); ?>" id="site_background_color" name="site_background_color" data-default-color="E5E5E5">
							</div>
							<br>
							<label class="small_label"><?php _e("Boxed Layout Pattern", 'renovate'); ?></label>
							<ul class="layout_chooser clearfix">
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-1' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-1">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-2' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-2">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-3' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-3">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-4' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-4">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-5' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-5">
										<span class="tick"></span>
									</a>
								</li>
								<li class="first<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-6' ? ' selected' : ''); ?>">
									<a href="#" class="pattern-6">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-7' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-7">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-8' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-8">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-9' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-9">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='pattern-10' ? ' class="selected"' : ''); ?>>
									<a href="#" class="pattern-10">
										<span class="tick"></span>
									</a>
								</li>
							</ul>
							<label class="small_label"><?php _e("Boxed Layout Image", 'renovate'); ?></label>
							<ul class="layout_chooser clearfix">
								<li<?php echo (!isset($theme_options['layout_style']) || (isset($theme_options['layout_style']) && $theme_options['layout_style']=='image-1') ? ' class="selected"' : ''); ?>>
									<a href="#" class="image-1">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='image-2' ? ' class="selected"' : ''); ?>>
									<a href="#" class="image-2">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='image-3' ? ' class="selected"' : ''); ?>>
									<a href="#" class="image-3">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='image-4' ? ' class="selected"' : ''); ?>>
									<a href="#" class="image-4">
										<span class="tick"></span>
									</a>
								</li>
								<li<?php echo (isset($theme_options['layout_style']) && $theme_options['layout_style']=='image-5' ? ' class="selected"' : ''); ?>>
									<a href="#" class="image-5">
										<span class="tick"></span>
									</a>
								</li>
								<li class="first">
									<input type="checkbox"<?php echo ((isset($theme_options['layout_image_overlay']) && $theme_options['layout_image_overlay']=='overlay') || !isset($theme_options['layout_image_overlay']) ? ' checked="checked"' : ''); ?> id="overlay" name="layout_image_overlay" value="overlay"><label class="overlay_label small_label" for="overlay"><?php _e("overlay", 'renovate'); ?></label>
								</li>
							</ul>
							<input type="hidden" name="layout_style" id="layout_style_input" value="<?php echo esc_attr($theme_options['layout_style']); ?>">
						</div>
					</li>
					<li>
						<label for="style_selector"><?php _e('SHOW STYLE SELECTOR', 'renovate'); ?></label>
						<div>
							<select id="style_selector" name="style_selector">
								<option value="0"<?php echo (!(int)$theme_options["style_selector"] ? " selected='selected'" : "") ?>><?php _e('no', 'renovate'); ?></option>
								<option value="1"<?php echo ((int)$theme_options["style_selector"] ? " selected='selected'" : "") ?>><?php _e('yes', 'renovate'); ?></option>
							</select>
						</div>
					</li>
					<li>
						<label for="direction"><?php _e('Direction', 'renovate'); ?></label>
						<div>
							<select id="direction" name="direction">
								<option value="default" <?php echo ($theme_options["direction"]=="default" ? " selected='selected'" : "") ?>><?php _e('Default', 'renovate'); ?></option>
								<option value="ltr" <?php echo ($theme_options["direction"]=="ltr" ? " selected='selected'" : "") ?>><?php _e('LTR', 'renovate'); ?></option>
								<option value="rtl" <?php echo ($theme_options["direction"]=="rtl" ? " selected='selected'" : "") ?>><?php _e('RTL', 'renovate'); ?></option>	
							</select>
						</div>
					</li>
					<li>
						<label for="collapsible_mobile_submenus"><?php _e('Collapsible mobile submenus', 'renovate'); ?></label>
						<div>
							<select id="collapsible_mobile_submenus" name="collapsible_mobile_submenus">
								<option value="1"<?php echo (!isset($theme_options["collapsible_mobile_submenus"]) || (int)$theme_options["collapsible_mobile_submenus"]==1 ? " selected='selected'" : "") ?>><?php _e('yes', 'renovate'); ?></option>
								<option value="0"<?php echo ((int)$theme_options["collapsible_mobile_submenus"]==0 ? " selected='selected'" : "") ?>><?php _e('no', 'renovate'); ?></option>
							</select>
						</div>
					</li>
					<li>
						<label for="ga_tracking_code"><?php _e('Google Analytics tracking code', 'renovate'); ?></label>
						<div>
							<textarea id="ga_tracking_code" name="ga_tracking_code"><?php echo (isset($theme_options["ga_tracking_code"]) ? esc_attr($theme_options["ga_tracking_code"]) : ""); ?></textarea>							
						</div>
					</li>
				</ul>
			</div>
			<div id="tab-email-config" class="settings">
				<h3><?php _e('Contact Form', 'renovate'); ?></h3>
				<h4><?php _e('ADMIN EMAIL CONFIG', 'renovate'); ?></h4>
				<ul class="form_field_list">
					<li>
						<label for="cf_admin_name"><?php _e('NAME', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["cf_admin_name"]); ?>" id="cf_admin_name" name="cf_admin_name">
						</div>
					</li>
					<li>
						<label for="cf_admin_email"><?php _e('EMAIL', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["cf_admin_email"]); ?>" id="cf_admin_email" name="cf_admin_email">
						</div>
					</li>
				</ul>
				<h4><?php _e('ADMIN SMTP CONFIG (OPTIONAL)', 'renovate'); ?></h4>
				<ul class="form_field_list">
					<li>
						<label for="cf_smtp_host"><?php _e('HOST', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["cf_smtp_host"]); ?>" id="cf_smtp_host" name="cf_smtp_host">
						</div>
					</li>
					<li>
						<label for="cf_smtp_username"><?php _e('USERNAME', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["cf_smtp_username"]); ?>" id="cf_smtp_username" name="cf_smtp_username">
						</div>
					</li>
					<li>
						<label for="cf_smtp_password"><?php _e('PASSWORD', 'renovate'); ?></label>
						<div>
							<input type="password" class="regular-text" value="<?php echo esc_attr($theme_options["cf_smtp_password"]); ?>" id="cf_smtp_password" name="cf_smtp_password">
						</div>
					</li>
					<li>
						<label for="cf_smtp_port"><?php _e('PORT', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["cf_smtp_port"]); ?>" id="cf_smtp_port" name="cf_smtp_port">
						</div>
					</li>
					<li>
						<label for="cf_smtp_secure"><?php _e('SMTP SECURE', 'renovate'); ?></label>
						<div>
							<select id="cf_smtp_secure" name="cf_smtp_secure">
								<option value=""<?php echo ($theme_options["cf_smtp_secure"]=="" ? " selected='selected'" : "") ?>>-</option>
								<option value="ssl"<?php echo ($theme_options["cf_smtp_secure"]=="ssl" ? " selected='selected'" : "") ?>><?php _e('ssl', 'renovate'); ?></option>
								<option value="tls"<?php echo ($theme_options["cf_smtp_secure"]=="tls" ? " selected='selected'" : "") ?>><?php _e('tls', 'renovate'); ?></option>
							</select>
						</div>
					</li>
				</ul>
				<h4><?php _e('EMAIL CONFIG', 'renovate'); ?></h4>
				<ul class="form_field_list">
					<li>
						<label for="cf_email_subject"><?php _e('EMAIL SUBJECT', 'renovate'); ?></label>
						<div>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["cf_email_subject"]); ?>" id="cf_email_subject" name="cf_email_subject">
						</div>
					</li>
					<li>
						<label for="cf_template"><?php _e('TEMPLATE', 'renovate'); ?></label>
						<div>
							<?php _e("Available shortcodes:", 'renovate'); ?><br><strong>[name]</strong>, <strong>[email]</strong>, <strong>[phone]</strong>, <strong>[message]</strong>, <strong>[form_data]</strong><br><br>
							<?php wp_editor($theme_options["cf_template"], "cf_template");?>
						</div>
					</li>
				</ul>
			</div>
			<div id="tab-colors" class="settings">
				<h3><?php _e('Colors', 'renovate'); ?></h3>
				<ul class="form_field_list">
					<li>
						<label for="main_color"><?php _e('Main color', 'renovate'); ?></label>
						<div>
							<span class="color_preview" style="background-color: #<?php echo ($theme_options["main_color"]!="" ? esc_attr($theme_options["main_color"]) : 'F4BC16'); ?>;"></span>
							<input type="text" class="regular-text color short margin_top_0" value="<?php echo esc_attr($theme_options["main_color"]); ?>" id="main_color" name="main_color" data-default-color="F4BC16">
						</div>
						<div>
							<br>
							<label class="small_label"><?php _e("Choose from predefined colors", 'renovate'); ?></label>
							<ul class="layout_chooser for_main_color clearfix">
								<li>
									<a href="#" class="color_preview" style="background-color: #5FC7AE;" data-color="5FC7AE">&nbsp;</a>
								</li>
								<li>
									<a href="#" class="color_preview" style="background-color: #F68220;" data-color="F68220">&nbsp;</a>
								</li>
								<li>
									<a href="#" class="color_preview" style="background-color: #82B541;" data-color="82B541">&nbsp;</a>
								</li>
								<li>
									<a href="#" class="color_preview" style="background-color: #66A1C3;" data-color="66A1C3">&nbsp;</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div id="tab-header" class="settings">
				<h3><?php _e('Header', 'renovate'); ?></h3>
				<ul class="form_field_list">
					<?php
					/*<li class="header_style_container"<?php echo ($theme_options["color_scheme"]=="high_contrast" ? ' style="display: none;"' : ''); ?>>
						<label for="header_style"><?php _e('Header style', 'renovate'); ?></label>
						<div>
							<select id="header_style" name="header_style">
								<?php
								for($i=0; $i<15; $i++)
								{
								?>
								<option<?php echo ($theme_options["header_style"]=="style_" . ($i+1) ? " selected='selected'" : ""); ?>  value="style_<?php echo ($i+1);?>"><?php _e("Style " . ($i+1), 'renovate'); ?></option>
								<?php
								}
								?>
								<option<?php echo ($theme_options["header_style"]=="style_high_contrast" ? " selected='selected'" : ""); ?>  value="style_high_contrast"><?php _e("Style high contrast", 'renovate'); ?></option>
							</select>
						</div>
					</li>*/
					?>
					<li>
						<label for="header_top_sidebar"><?php _e('Header top sidebar', 'renovate'); ?></label>
						<div>
						<?php
						//get theme sidebars
						$theme_sidebars = array();
						$theme_sidebars_array = get_posts(array(
							'post_type' => 'renovate_sidebars',
							'posts_per_page' => '-1',
							'nopaging' => true,
							'post_status' => 'publish',
							'orderby' => 'menu_order',
							'order' => 'ASC'
						));
						for($i=0; $i<count($theme_sidebars_array); $i++)
						{
							$theme_sidebars[$i]["id"] = $theme_sidebars_array[$i]->ID;
							$theme_sidebars[$i]["title"] = $theme_sidebars_array[$i]->post_title;
						}
						?>
						<select id="header_top_sidebar" name="header_top_sidebar">
							<option value=""<?php echo ($theme_options["header_top_sidebar"]=="" ? " selected='selected'" : ""); ?>><?php _e("none", 'renovate'); ?></option>
							<?php
							foreach($theme_sidebars as $theme_sidebar)
							{
								?>
								<option value="<?php echo esc_attr($theme_sidebar["id"]); ?>"<?php echo ($theme_options["header_top_sidebar"]==$theme_sidebar["id"] ? " selected='selected'" : ""); ?>><?php echo $theme_sidebar["title"]; ?></option>
								<?php
							}
							?>
						</select>
						</div>
					</li>
					<?php
					/*
					<li id="header_top_right_sidebar_container">
						<label for="header_top_right_sidebar"><?php _e('Header top right sidebar', 'renovate'); ?></label>
						<div>
						<select id="header_top_right_sidebar" name="header_top_right_sidebar">
							<option value=""<?php echo ($theme_options["header_top_right_sidebar"]=="" ? " selected='selected'" : ""); ?>><?php _e("none", 'renovate'); ?></option>
							<?php
							foreach($theme_sidebars as $theme_sidebar)
							{
								?>
								<option value="<?php echo esc_attr($theme_sidebar["id"]); ?>"<?php echo ($theme_options["header_top_right_sidebar"]==$theme_sidebar["id"] ? " selected='selected'" : ""); ?>><?php echo $theme_sidebar["title"]; ?></option>
								<?php
							}
							?>
						</select>
						</div>
					</li>*/
					?>
				</ul>
			</div>
			<div id="tab-fonts" class="settings">
				<h3><?php _e('Fonts', 'renovate'); ?></h3>
				<ul class="form_field_list">
					<li>
						<label for="primary_font"><?php _e('Primary font', 'renovate'); ?></label>
						<div>
							<label class="small_label"><?php _e('Enter font name', 'renovate'); ?></label>
							<input type="text" class="regular-text" value="<?php echo esc_attr($theme_options["primary_font_custom"]); ?>" id="primary_font_custom" name="primary_font_custom">
							<label class="small_label margin_top_10"><?php _e('or choose Google font', 'renovate'); ?></label>
							<select id="primary_font" name="primary_font">
								<option<?php echo ($theme_options["primary_font"]=="" ? " selected='selected'" : ""); ?>  value=""><?php _e("Default (Raleway)", 'renovate'); ?></option>
								<?php
								$fontsCount = count($fontsArray->items);
								for($i=0; $i<$fontsCount; $i++)
								{
								?>
									
									<?php
									$variantsCount = count($fontsArray->items[$i]->variants);
									if($variantsCount>1)
									{
										for($j=0; $j<$variantsCount; $j++)
										{
										?>
											<option<?php echo ($theme_options["primary_font"]==$fontsArray->items[$i]->family . ":" . $fontsArray->items[$i]->variants[$j] ? " selected='selected'" : ""); ?> value="<?php echo esc_attr($fontsArray->items[$i]->family . ":" . $fontsArray->items[$i]->variants[$j]); ?>"><?php echo $fontsArray->items[$i]->family . ":" . $fontsArray->items[$i]->variants[$j]; ?></option>
										<?php
										}
									}
									else
									{
									?>
									<option<?php echo ($theme_options["primary_font"]==$fontsArray->items[$i]->family ? " selected='selected'" : ""); ?> value="<?php echo esc_attr($fontsArray->items[$i]->family); ?>"><?php echo $fontsArray->items[$i]->family; ?></option>
									<?php
									}
								}
								?>
							</select>
							<img class="theme_font_subset_preloader" src="<?php echo get_template_directory_uri();?>/admin/images/ajax-loader.gif" />
							<label class="small_label font_subset margin_top_10" style="<?php echo (!empty($theme_options["primary_font"]) ? "display: block;" : ""); ?>"><?php _e('Google font subset:', 'pressroom'); ?></label>
							<select id="primary_font_subset" class="font_subset" name="primary_font_subset[]" multiple="multiple" style="<?php echo (!empty($theme_options["primary_font"]) ? "display: block;" : ""); ?>">
							<?php
							if(!empty($theme_options["primary_font"]))
							{
								$fontExplode = explode(":", $theme_options["primary_font"]);
								$font_subset = re_get_google_font_subset($fontExplode[0]);
								foreach($font_subset as $subset)
									echo "<option value='" . $subset . "' " . (in_array($subset, $theme_options["primary_font_subset"]) ? "selected='selected'" : "") . ">" . $subset . "</option>";							
							}
							?>
							</select>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer">
			<div class="footer_left">
				<ul class="social-list">
					<li><a target="_blank" href="http://www.facebook.com/QuanticaLabs/" class="social-list-facebook" title="Facebook"></a></li>
					<li><a target="_blank" href="https://twitter.com/quanticalabs" class="social-list-twitter" title="Twitter"></a></li>
					<li><a target="_blank" href="http://www.flickr.com/photos/76628486@N03" class="social-list-flickr" title="Flickr"></a></li>
					<li><a target="_blank" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social-list-envato" title="Envato"></a></li>
					<li><a target="_blank" href="http://quanticalabs.tumblr.com/" class="social-list-tumblr" title="Tumblr"></a></li>
					<li><a target="_blank" href="http://quanticalabs.deviantart.com/" class="social-list-deviantart" title="Deviantart"></a></li>
				</ul>
			</div>
			<div class="footer_right">
				<input type="hidden" name="action" value="<?php echo esc_attr($themename); ?>_save" />
				<input type="submit" name="submit" value="Save Options" />
				<img id="theme_options_preloader" src="<?php echo get_template_directory_uri();?>/admin/images/ajax-loader.gif" />
				<img id="theme_options_tick" src="<?php echo get_template_directory_uri();?>/admin/images/tick.png" />
			</div>
		</div>
	</form>
<?php
}
?>