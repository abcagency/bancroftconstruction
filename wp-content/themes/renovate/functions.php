<?php
$themename = "renovate";
/*function your_prefix_vcSetAsTheme() 
{
	vc_set_as_theme();
}
add_action('init', 'your_prefix_vcSetAsTheme');*/
if(function_exists('set_revslider_as_theme'))
{
	function renovate_set_revolution_as_theme() 
	{
		set_revslider_as_theme();
	}
	add_action('init', 'renovate_set_revolution_as_theme');
}

//plugins activator
require_once("plugins_activator.php");

//for is_plugin_active
include_once( ABSPATH . 'wp-admin/includes/plugin.php');

//vc_remove_element("vc_row_inner");
if(function_exists("vc_remove_element"))
{
	vc_remove_element("vc_gmaps");
	vc_remove_element("vc_tour");
	vc_remove_element("vc_separator");
	vc_remove_element("vc_text_separator");
}

//theme options
require_once(locate_template("theme-options.php"));

//menu walker
require_once(locate_template("mobile_menu_walker.php"));

//custom meta box
require_once(locate_template("meta-box.php"));

if(function_exists("vc_map"))
{
	//contact_form
	require_once(locate_template("contact_form.php"));
	//shortcodes
	require_once(locate_template("shortcodes/shortcodes.php"));
}

//comments
require_once(locate_template("comments-functions.php"));

//widgets
require_once(locate_template("widgets/widget-contact-info.php"));
require_once(locate_template("widgets/widget-contact-details.php"));
require_once(locate_template("widgets/widget-contact-details-list.php"));
require_once(locate_template("widgets/widget-list.php"));
require_once(locate_template("widgets/widget-recent.php"));
require_once(locate_template("widgets/widget-social-icons.php"));
require_once(locate_template("widgets/widget-cart-icon.php"));

function re_theme_after_setup_theme()
{
	global $themename;
	//set default theme options
	if(!get_option($themename . "_installed") || !get_option("wpb_js_content_types"))
	{		
		$theme_options = array(
			"favicon_url" => get_template_directory_uri() . "/images/favicon.ico",
			"logo_url" => "",
			"logo_text" => "RENOVATE",
			"footer_text" => '© Copyright 2015 <a target="_blank" title="Renovate Theme" href="http://themeforest.net/item/renovate-construction-renovation-wordpress-theme/11789093?ref=QuanticaLabs">Renovate Theme</a> by <a target="_blank" title="QuanticaLabs" href="http://quanticalabs.com">QuanticaLabs</a>',
			"sticky_menu" => 0,
			"responsive" => 1,
			"scroll_top" => 1,
			"layout" => 'fullwidth',
			"layout_style" => '',
			"layout_image_overlay" => '',
			"style_selector" => 0,
			"direction" => "default",
			"collapsible_mobile_submenus" => 1,
			"ga_tracking_code" => "",
			"cf_admin_name" => get_option("admin_email"),
			"cf_admin_email" => get_option("admin_email"),
			"cf_smtp_host" => "",
			"cf_smtp_username" => "",
			"cf_smtp_password" => "",
			"cf_smtp_port" => "",
			"cf_smtp_secure" => "",
			"cf_email_subject" => "Renovate WP: Contact from WWW",
			"cf_template" => "<html>
	<head>
	</head>
	<body>
		<div><b>Name</b>: [name]</div>
		<div><b>E-mail</b>: [email]</div>
		<div><b>Phone</b>: [phone]</div>
		<div><b>Message</b>: [message]</div>
		[form_data]
	</body>
</html>",
			"site_background_color" => '',
			"main_color" => '',
			"header_top_sidebar" => '',
			"primary_font" => '',
			"primary_font_custom" => ''
		);
		add_option($themename . "_options", $theme_options);
		
		add_option("wpb_js_content_types", array(
			"page",
			"re_projects",
			"re_services",
			"ql_services",
			"ql_team")
		);
		
		global $wp_rewrite;
		$wp_rewrite->flush_rules();
		add_option($themename . "_installed", 1);
	}
	
	//Make theme available for translation
	//Translations can be filed in the /languages/ directory
	load_theme_textdomain('renovate', get_template_directory() . '/languages');
	
	//woocommerce
	add_theme_support("woocommerce");
	
	//menus
	add_theme_support("menus");
	
	//register thumbnails
	add_theme_support("post-thumbnails");
	add_image_size("blog-post-thumb", 750, 500, true);
	add_image_size("project-thumb", 570, 380, true);
	add_image_size("large-thumb", 480, 480, true);
	add_image_size("big-thumb", 480, 320, true);
	add_image_size("medium-thumb", 390, 260, true);
	add_image_size("small-thumb", 270, 180, true);
	add_image_size("tiny-thumb", 90, 90, true);
	
	//enable custom background
	add_theme_support("custom-background"); //3.4
	//add_custom_background(); //deprecated
	
	//enable feed links
	add_theme_support('automatic-feed-links');
	
	//title tag
	add_theme_support("title-tag");
	
	//register menus
	if(function_exists("register_nav_menu"))
	{
		register_nav_menu("main-menu", "Main Menu");
	}
	
	//custom theme filters
	add_filter('upload_mimes', 're_custom_upload_files');
	//using shortcodes in sidebar
	add_filter("widget_text", "do_shortcode");
	add_filter("image_size_names_choose", "re_theme_image_sizes");
	add_filter('wp_list_categories','re_category_count_span');
	add_filter('get_archives_link', 're_archive_count_span');
	add_filter('excerpt_more', 're_theme_excerpt_more', 99);
	add_filter('post_class', 're_check_image');
	add_filter('user_contactmethods', 're_contactmethods', 10, 1);
	add_filter('wp_title', 're_wp_title_filter', 10, 2);
	add_filter('site_transient_update_plugins', 'renovate_filter_update_vc_plugin', 10, 2);
	
	//custom theme woocommerce filters
	add_filter('woocommerce_pagination_args' , 're_woo_custom_override_pagination_args');
	add_filter('woocommerce_product_single_add_to_cart_text', 're_woo_custom_cart_button_text');
	add_filter('woocommerce_product_add_to_cart_text', 're_woo_custom_cart_button_text');
	add_filter('loop_shop_columns', 're_woo_custom_loop_columns');
	add_filter('woocommerce_product_description_heading', 're_woo_custom_product_description_heading');
	add_filter('woocommerce_checkout_fields' , 're_woo_custom_override_checkout_fields');
	add_filter('woocommerce_show_page_title', 're_woo_custom_show_page_title');
	add_filter('loop_shop_per_page', create_function( '$cols', 'return 6;' ), 20);
		
	//custom theme actions
	if(!function_exists('_wp_render_title_tag')) 
		add_action('wp_head', 're_theme_slug_render_title');
	add_action("add_meta_boxes", "theme_add_ql_services_custom_box");
	add_action("save_post", "theme_save_ql_services_postdata");
	
	//custom theme woocommerce actions
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
	//remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 5);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 10);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	//add_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);
	
	//phpMailer
	add_action('phpmailer_init', 're_phpmailer_init');
	
	//content width
	if(!isset($content_width)) 
		$content_width = 1050;
	
	//register sidebars
	if(function_exists("register_sidebar"))
	{
		//register custom sidebars
		$sidebars_list = get_posts(array( 
			'post_type' => $themename . '_sidebars',
			'posts_per_page' => '-1',
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC'
		));
		foreach($sidebars_list as $sidebar)
		{
			$before_widget = get_post_meta($sidebar->ID, "before_widget", true);
			$after_widget = get_post_meta($sidebar->ID, "after_widget", true);
			$before_title = get_post_meta($sidebar->ID, "before_title", true);
			$after_title = get_post_meta($sidebar->ID, "after_title", true);
			register_sidebar(array(
				"id" => $sidebar->post_name,
				"name" => $sidebar->post_title,
				'before_widget' => ($before_widget!='' && $before_widget!='empty' ? $before_widget : ''),
				'after_widget' => ($after_widget!='' && $after_widget!='empty' ? $after_widget : ''),
				'before_title' => ($before_title!='' && $before_title!='empty' ? $before_title : ''),
				'after_title' => ($after_title!='' && $after_title!='empty' ? $after_title : '')
			));
		}
	}
}
add_action("after_setup_theme", "re_theme_after_setup_theme");
function re_theme_switch_theme($theme_template)
{
	global $themename;
	delete_option($themename . "_installed");
}
add_action("switch_theme", "re_theme_switch_theme");

/* --- phpMailer config --- */
function re_phpmailer_init(PHPMailer $mail) 
{
	global $theme_options;
	$mail->CharSet='UTF-8';
	
	$smtp = $theme_options["cf_smtp_host"];
	if(!empty($smtp))
	{
		$mail->IsSMTP();
		$mail->SMTPAuth = true; 
		//$mail->SMTPDebug = 2;
		$mail->Host = $theme_options["cf_smtp_host"];
		$mail->Username = $theme_options["cf_smtp_username"];
		$mail->Password = $theme_options["cf_smtp_password"];
		if((int)$theme_options["cf_smtp_port"]>0)
			$mail->Port = (int)$theme_options["cf_smtp_port"];
		$mail->SMTPSecure = $theme_options["cf_smtp_secure"];
	}
}
 
function re_custom_template_for_vc() 
{
    $data = array();
    $data['name'] = __('Single Post Template', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="3/4"][single_post featured_image_size="default" show_post_title="1" show_post_featured_image="1" show_post_excerpt="0" show_post_categories="1" show_post_date="1" show_post_author="1" show_post_views="1" show_post_comments="1" show_post_author_box="1" show_post_tags_footer="1" show_post_categories_footer="1" show_share_box="1" icons_count="1" icon_type0="behance" icon_type1="behance" icon_type2="behance" icon_type3="behance" icon_type4="behance" icon_type5="behance" icon_type6="behance" icon_type7="behance" icon_type8="behance" icon_type9="behance" icon_type10="behance" icon_type11="behance" icon_type12="behance" icon_type13="behance" icon_type14="behance" icon_type15="behance" icon_type16="behance" icon_type17="behance" icon_type18="behance" icon_type19="behance" icon_type20="behance" icon_type21="behance" icon_type22="behance" icon_type23="behance" icon_type24="behance" date_format="renovate" show_leave_reply_button="1"][comments show_comments_form="1" show_comments_list="1" top_margin="page-margin-top"][/vc_column][vc_column type="re-smart-column" top_margin="none" width="1/4"][call_to_action_box title="COST CALCULATOR" icon="wallet" button_label="REQUEST A QUOTE" button_url="#" button_target="" top_margin="none"]Use our form to estimate the initial cost of renovation or installation.[/call_to_action_box][box_header title="Latest Posts" type="h6" bottom_border="1" class="" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_date="1" top_margin="none" el_class="margin-top-30" show_post_views="0"][box_header title="Most Viewed" type="h6" bottom_border="1" class="" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="views" order="DESC" show_post_title="1" show_post_date="0" top_margin="none" el_class="margin-top-30" show_post_views="1"][box_header title="Text Widget" type="h6" bottom_border="1" class="" top_margin="page-margin-top"][vc_wp_text el_class="margin-top-24"]Here is a text widget settings ipsum lore tora dolor sit amet velum. Maecenas est velum, gravida <a href="#">Vehicula Dolor</a>[/vc_wp_text][vc_wp_categories options="" el_class="page-margin-top clearfix" title="Categories"][vc_wp_archives options="count" title="Archives" el_class="page-margin-top full-width clearfix"][vc_wp_tagcloud taxonomy="post_tag" title="Tags" el_class="page-margin-top clearfix"][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
	
	$data = array();
    $data['name'] = __('Blog Template', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="3/4"][blog re_pagination="1" items_per_page="6" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_excerpt="1" read_more="1" show_post_categories="1" show_post_author="1" show_post_date="1" show_post_views="1" show_post_comments="1" is_search_results="0" top_margin="none" date_format="renovate"][/vc_column][vc_column type="re-smart-column" top_margin="none" width="1/4"][call_to_action_box title="COST CALCULATOR" icon="wallet" button_label="REQUEST A QUOTE" button_url="#" top_margin="none"]Use our form to estimate the initial cost of renovation or installation.[/call_to_action_box][box_header title="Latest Posts" type="h6" bottom_border="1" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_date="1" top_margin="none" el_class="margin-top-30" show_post_views="0"][box_header title="Most Viewed" type="h6" bottom_border="1" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="views" order="DESC" show_post_title="1" show_post_date="0" top_margin="none" el_class="margin-top-30" show_post_views="1"][box_header title="Text Widget" type="h6" bottom_border="1" top_margin="page-margin-top"][vc_wp_text el_class="margin-top-24"]Here is a text widget settings ipsum lore tora dolor sit amet velum. Maecenas est velum, gravida <a href="#">Vehicula Dolor</a>[/vc_wp_text][vc_wp_categories options="" el_class="page-margin-top clearfix" title="Categories"][vc_wp_archives options="count" title="Archives" el_class="page-margin-top full-width clearfix"][vc_wp_tagcloud taxonomy="post_tag" title="Tags" el_class="page-margin-top clearfix"][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
	
	$data = array();
    $data['name'] = __('Search Page Template', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row type="" top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="3/4"][blog re_pagination="1" items_per_page="6" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_excerpt="1" read_more="1" show_post_categories="1" show_post_author="1" show_post_date="1" date_format="renovate" show_post_views="1" show_post_comments="1" is_search_results="1" top_margin="none"][/vc_column][vc_column type="re-smart-column" top_margin="none" width="1/4"][call_to_action_box title="COST CALCULATOR" icon="wallet" button_label="REQUEST A QUOTE" button_url="#" button_target="" top_margin="none"]Use our form to estimate the initial cost of renovation or installation.[/call_to_action_box][box_header title="Latest Posts" type="h6" bottom_border="1" class="" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_date="1" top_margin="none" el_class="margin-top-30" show_post_views="0"][box_header title="Most Viewed" type="h6" bottom_border="1" class="" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="views" order="DESC" show_post_title="1" show_post_date="0" top_margin="none" el_class="margin-top-30" show_post_views="1"][box_header title="Text Widget" type="h6" bottom_border="1" class="" top_margin="page-margin-top"][vc_wp_text el_class="margin-top-24"]Here is a text widget settings ipsum lore tora dolor sit amet velum. Maecenas est velum, gravida <a href="#">Vehicula Dolor</a>[/vc_wp_text][vc_wp_categories options="" el_class="page-margin-top clearfix" title="Categories"][vc_wp_archives options="count" title="Archives" el_class="page-margin-top full-width clearfix"][vc_wp_tagcloud taxonomy="post_tag" title="Tags" el_class="page-margin-top clearfix"][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
	
	$data = array();
    $data['name'] = __('Single Project Template', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="1/1"][single_project top_margin="none"][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
	
	$data = array();
    $data['name'] = __('Single Service Template', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="1/4"][vc_wp_custommenu nav_menu="22" el_class="vertical-menu"][call_to_action_box title="COST CALCULATOR" text="" icon="wallet" button_label="REQUEST A QUOTE" button_url="#" top_margin="page-margin-top"]Use our form to estimate the initial cost of renovation or installation.[/call_to_action_box][box_header title="Download Brochures" type="h6" bottom_border="1" top_margin="page-margin-top"][vc_btn type="action" icon="arrow-circle-down" title="Download Brochure" url="#" top_margin="none" extraclass="margin-top-30"][vc_btn type="action" icon="arrow-circle-down" url="#" top_margin="none" extraclass="margin-top-10" title="Download Summary"][/vc_column][vc_column type="" top_margin="none" width="3/4"][single_service show_social_icons="1" show_twitter="1" show_facebook="1" show_linkedin="1" show_skype="1" show_googleplus="1" show_instagram="1" top_margin="none"][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
	
	$data = array();
    $data['name'] = __('Single Team Member Template', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row type="full-width" top_margin="page-margin-top-section"][vc_column][single_team][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
	
	$data = array();
    $data['name'] = __('Team Member Page Layout', 'renovate');
    $data['weight'] = 0;
    $data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/admin/images/visual_composer/layout.png');
    $data['custom_class'] = 'custom_template_for_vc_custom_template';
    $data['content'] = <<<CONTENT
        [vc_row][vc_column width="1/3"][team_member_box featured_image="" headers="1" headers_links="1" headers_border="0" show_subtitle="1" show_excerpt="0" show_social_icons="1" show_featured_image="1" featured_image_links="0"][/vc_column][vc_column width="1/3"][box_header title="RESUME" type="h3" bottom_border="1"][vc_raw_html el_class="align-left margin-top-40"]JTNDdGFibGUlM0UlMEElMDklM0N0Ym9keSUzRSUwQSUwOSUwOSUzQ3RyJTNFJTBBJTA5JTA5JTA5JTNDdGQlM0VOYW1lJTNBJTIwUGhpbGlwJTIwQnJvd2VyJTNDJTJGdGQlM0UlMEElMDklMDklM0MlMkZ0ciUzRSUwQSUwOSUwOSUzQ3RyJTNFJTBBJTA5JTA5JTA5JTNDdGQlM0VEYXRlJTIwb2YlMjBiaXJ0aCUzQSUyMDE5JTIwTm92ZW1iZXIlMjAxOTkwJTNDJTJGdGQlM0UlMEElMDklMDklM0MlMkZ0ciUzRSUwQSUwOSUwOSUzQ3RyJTNFJTBBJTA5JTA5JTA5JTNDdGQlM0VBZGRyZXNzJTNBJTIwMjcyJTIwTGluZGVuJTIwQXZlbnVlJTJDJTIwV2ludGVyJTIwUGFyayUzQyUyRnRkJTNFJTBBJTA5JTA5JTNDJTJGdHIlM0UlMEElMDklMDklM0N0ciUzRSUwQSUwOSUwOSUwOSUzQ3RkJTNFRW1haWwlM0ElMjAlM0NhJTIwaHJlZiUzRCUyN21haWx0byUzQXBoaWxpcC5icm93ZXIlNDBtYWlsLmNvbSUyNyUzRXBoaWxpcC5icm93ZXIlNDBtYWlsLmNvbSUzQyUyRmElM0UlM0MlMkZ0ZCUzRSUwQSUwOSUwOSUzQyUyRnRyJTNFJTBBJTA5JTA5JTNDdHIlM0UlMEElMDklMDklMDklM0N0ZCUzRVBob25lJTNBJTIwJTJCMTQ5JTIwNzUlMjAyMyUyMDIyMiUyMDM1JTNDJTJGdGQlM0UlMEElMDklMDklM0MlMkZ0ciUzRSUwQSUwOSUzQyUyRnRib2R5JTNFJTBBJTNDJTJGdGFibGUlM0U=[/vc_raw_html][/vc_column][vc_column width="1/3"][box_header title="PROFILE" type="h3" bottom_border="1"][vc_column_text el_class="margin-top-34"]Founded by Kevin Smith back in 2000, Renovate has established itself as one of the greatest and prestigous providers of construction focused interior renovation services and building.

We provide a professional renovation and installation services with a real focus on customer satisfaction. Our installations are carried out by fully trained staff to the highest professional standards. We can help you bring new life to existing rooms and develop unused spaces, from initial design and project specification to archieving a high end finish.[/vc_column_text][/vc_column][/vc_row][vc_row type="full-width" top_margin="page-margin-top-section" el_class="top-border"][vc_column][vc_row_inner top_margin="page-margin-top-section"][vc_column_inner width="1/3"][featured_item icon="key" title="TURNKEY"]We combine quality workmanship, superior knowledge and low prices.[/featured_item][/vc_column_inner][vc_column_inner width="1/3"][featured_item icon="person" title="RESOURCES"]We have the experience, personnel and resources to make.[/featured_item][/vc_column_inner][vc_column_inner width="1/3"][featured_item icon="trolley" title="SUPPLY"]Work with us involves a carefully planned series of steps.[/featured_item][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row type="full-width" top_margin="page-margin-top-section" css=".vc_custom_1456404788489{background-color: #f5f5f5 !important;}" el_class="page-padding-top-section padding-bottom-50"][vc_column][vc_row_inner][vc_column_inner][box_header title="OUR SKILLS" type="h3" bottom_border="1"][/vc_column_inner][/vc_row_inner][vc_row_inner el_class="margin-top-40"][vc_column_inner width="1/2"][vc_progress_bar values="%5B%7B%22label%22%3A%22Interior%20Renovation%22%2C%22value%22%3A%2295%22%7D%2C%7B%22label%22%3A%22Paver%20Walkways%22%2C%22value%22%3A%2272%22%7D%2C%7B%22label%22%3A%22Tiling%20and%20Painting%22%2C%22value%22%3A%2260%22%7D%5D" units="%"][/vc_column_inner][vc_column_inner width="1/2"][vc_progress_bar values="%5B%7B%22label%22%3A%22Solar%20Systems%22%2C%22value%22%3A%2275%22%7D%2C%7B%22label%22%3A%22Household%20Repairs%22%2C%22value%22%3A%2262%22%7D%2C%7B%22label%22%3A%22Design%20and%20Build%22%2C%22value%22%3A%2282%22%7D%5D" units="%"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="page-padding-top-section"][vc_column width="2/3"][box_header title="MY EXPERIENCE" type="h3" bottom_border="1"][timeline_item label="2014-2015" title="HITACHI CONSTRUCT" subtitle="DIGGER OPERATOR" el_class="margin-top-40"]Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor.[/timeline_item][timeline_item label="2012-2014" title="BRICK LTD" subtitle="FOREMAN"]Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor.[/timeline_item][timeline_item label="2011-2012" title="HOME RENEW" subtitle="SENIOR FOREMAN"]Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor.[/timeline_item][/vc_column][vc_column width="1/3"][box_header title="TESTIMONIALS" type="h3" bottom_border="1"][re_testimonials type="small" pagination="1" testimonials_count="2" testimonials_icon0="bucket" testimonials_title0="``We would like to thank Renovate Company for an outstanding effort on this recently completed project located in the Moscow. The project involved a very aggressive schedule and it was completed on time. We would certainly like to use their professional services.``" testimonials_author0="MITCHEL SMITH" testimonials_author_subtext0="INTERIOR RENOVATION" testimonials_icon1="camera" testimonials_title1="``We would like to thank Renovate Company for an outstanding effort on this recently completed project located in the Moscow. The project involved a very aggressive schedule and it was completed on time. We would certainly like to use their professional services.``" testimonials_author1="MITCHEL SMITH" testimonials_author_subtext1="INTERIOR RENOVATION" autoplay="0" scroll="1" duration="500" top_margin="page-margin-top" el_class="margin-top-40"][/vc_column][/vc_row]
CONTENT;
    vc_add_default_templates($data);
}
if(is_plugin_active("js_composer/js_composer.php") && function_exists("vc_set_default_editor_post_types"))
	add_action("vc_load_default_templates_action", "re_custom_template_for_vc");

/* --- Theme Custom Filters & Actions Functions --- */
//add new mimes for upload dummy content files (code can be removed after dummy content import)
function re_custom_upload_files($mimes) 
{
    $mimes = array_merge($mimes, array('xml' => 'application/xml'), array('json' => 'application/json'), array('zip' => 'application/zip'), array('gz' => 'application/x-gzip'), array('ico' => 'image/x-icon'));
    return $mimes;
}
function re_theme_image_sizes($sizes)
{
	$addsizes = array(
		"blog-post-thumb" => __("Blog post thumbnail", 'renovate'),
		"project-thumb" => __("Project thumbnail", 'renovate'),
		"large-thumb" => __("Large thumbnail", 'renovate'),
		"big-thumb" => __("Big thumbnail", 'renovate'),
		"medium-thumb" => __("Medium thumbnail", 'renovate'),
		"small-thumb" => __("Small thumbnail", 'renovate'),
		"tiny-thumb" => __("Tiny thumbnail", 'renovate'),
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
function re_category_count_span($links) 
{
	$links = str_replace('</a> (', '<span>', $links);
	$links = str_replace(')', '</span></a>', $links);
	return $links;
}
function re_archive_count_span($links) 
{
	$links = str_replace('</a>&nbsp;(', '<span>', $links);
	$links = str_replace(')', '</span></a>', $links);
	return $links;
}
//excerpt
function re_theme_excerpt_more($more) 
{
	return '';
}
//sticky
function re_check_image($class) 
{
	if(is_sticky())
		$class[] = 'sticky';
	return $class;
}
//user info
function re_contactmethods($contactmethods) 
{
	$contactmethods['twitter'] = 'Twitter';
	$contactmethods['facebook'] = 'Facebook';
	$contactmethods['linkedin'] = 'Linkedin';
	$contactmethods['skype'] = 'Skype';
	$contactmethods['googleplus'] = 'Google Plus';
	$contactmethods['instagram'] = 'Instagram';
	return $contactmethods;
}
if(!function_exists('_wp_render_title_tag'))
{
    function re_theme_slug_render_title() 
	{
		echo '<title>'. wp_title('-', true, 'right') . '</title>';
    }
}
function re_wp_title_filter($title, $sep)
{
	//$title = get_bloginfo('name') . " | " . (is_home() || is_front_page() ? get_bloginfo('description') : $title);
	return $title;
}
function renovate_filter_update_vc_plugin($date) 
{
    if(!empty($date->checked["js_composer/js_composer.php"]))
        unset($date->checked["js_composer/js_composer.php"]);
    if(!empty($date->response["js_composer/js_composer.php"]))
        unset($date->response["js_composer/js_composer.php"]);
    return $date;
}

//Adds a box to the main column on the Services edit screens
function theme_add_ql_services_custom_box() 
{
	add_meta_box( 
        "ql_services_config",
        __("Options", 'renovate'),
        "theme_inner_ql_services_custom_box_main",
        "ql_services",
		"side",
		"core"
    );
}

function theme_inner_ql_services_custom_box_main($post)
{
	global $themename;
	//Use nonce for verification
	wp_nonce_field(plugin_basename( __FILE__ ), $themename . "_ql_services_noncename");
	
	//The actual fields for data entry
	$icon = get_post_meta($post->ID, "icon", true);
	echo '
	<table>
		<tr>
			<td>
				<label for="icon">' . __('Icon', 'medicenter') . ':</label>
			</td>
			<td>
				<select style="width: 120px;" id="ql_services_icon" name="ql_services_icon">
					<option value="-"' . (empty($icon) || $icon=="-" ? ' selected="selected"' : '') . '>' . __('none', 'renovate') . '</option>
					<option class="sl-small-bricks" value="bricks"' . ($icon=="bricks" ? ' selected="selected"' : '') . '>' . __('bricks', 'renovate') . '</option>
					<option class="sl-small-briefcase" value="briefcase"' . ($icon=="briefcase" ? ' selected="selected"' : '') . '>' . __('briefcase', 'renovate') . '</option>
					<option class="sl-small-brush-1" value="brush-1"' . ($icon=="brush-1" ? ' selected="selected"' : '') . '>' . __('brush-1', 'renovate') . '</option>
					<option class="sl-small-brush-2" value="brush-2"' . ($icon=="brush-2" ? ' selected="selected"' : '') . '>' . __('brush-2', 'renovate') . '</option>
					<option class="sl-small-bubble" value="bubble"' . ($icon=="bubble" ? ' selected="selected"' : '') . '>' . __('bubble', 'renovate') . '</option>
					<option class="sl-small-bubble-check" value="bubble-check"' . ($icon=="bubble-check" ? ' selected="selected"' : '') . '>' . __('bubble-check', 'renovate') . '</option>
					<option class="sl-small-bucket" value="bucket"' . ($icon=="bucket" ? ' selected="selected"' : '') . '>' . __('bucket', 'renovate') . '</option>
					<option class="sl-small-building" value="building"' . ($icon=="building" ? ' selected="selected"' : '') . '>' . __('building', 'renovate') . '</option>
					<option class="sl-small-calculator" value="calculator"' . ($icon=="calculator" ? ' selected="selected"' : '') . '>' . __('calculator', 'renovate') . '</option>
					<option class="sl-small-camera" value="camera"' . ($icon=="camera" ? ' selected="selected"' : '') . '>' . __('camera', 'renovate') . '</option>
					<option class="sl-small-cart-1" value="cart-1"' . ($icon=="cart-1" ? ' selected="selected"' : '') . '>' . __('cart-1', 'renovate') . '</option>
					<option class="sl-small-cart-2" value="cart-2"' . ($icon=="cart-2" ? ' selected="selected"' : '') . '>' . __('cart-2', 'renovate') . '</option>
					<option class="sl-small-chat" value="chat"' . ($icon=="chat" ? ' selected="selected"' : '') . '>' . __('chat', 'renovate') . '</option>
					<option class="sl-small-clock" value="clock"' . ($icon=="clock" ? ' selected="selected"' : '') . '>' . __('clock', 'renovate') . '</option>
					<option class="sl-small-cone" value="cone"' . ($icon=="cone" ? ' selected="selected"' : '') . '>' . __('cone', 'renovate') . '</option>
					<option class="sl-small-construction" value="construction"' . ($icon=="construction" ? ' selected="selected"' : '') . '>' . __('construction', 'renovate') . '</option>
					<option class="sl-small-conversation" value="conversation"' . ($icon=="conversation" ? ' selected="selected"' : '') . '>' . __('conversation', 'renovate') . '</option>
					<option class="sl-small-lab" value="lab"' . ($icon=="lab" ? ' selected="selected"' : '') . '>' . __('lab', 'renovate') . '</option>
					<option class="sl-small-door" value="door"' . ($icon=="door" ? ' selected="selected"' : '') . '>' . __('door', 'renovate') . '</option>
					<option class="sl-small-driller" value="driller"' . ($icon=="driller" ? ' selected="selected"' : '') . '>' . __('driller', 'renovate') . '</option>
					<option class="sl-small-eco" value="eco"' . ($icon=="eco" ? ' selected="selected"' : '') . '>' . __('eco', 'renovate') . '</option>
					<option class="sl-small-faq" value="faq"' . ($icon=="faq" ? ' selected="selected"' : '') . '>' . __('faq', 'renovate') . '</option>
					<option class="sl-small-fax" value="fax"' . ($icon=="fax" ? ' selected="selected"' : '') . '>' . __('fax', 'renovate') . '</option>
					<option class="sl-small-fence" value="fence"' . ($icon=="fence" ? ' selected="selected"' : '') . '>' . __('fence', 'renovate') . '</option>
					<option class="sl-small-forklift" value="forklift"' . ($icon=="forklift" ? ' selected="selected"' : '') . '>' . __('forklift', 'renovate') . '</option>
					<option class="sl-small-garage" value="garage"' . ($icon=="garage" ? ' selected="selected"' : '') . '>' . __('garage', 'renovate') . '</option>
					<option class="sl-small-gears" value="gears"' . ($icon=="gears" ? ' selected="selected"' : '') . '>' . __('gears', 'renovate') . '</option>
					<option class="sl-small-globe" value="globe"' . ($icon=="globe" ? ' selected="selected"' : '') . '>' . __('globe', 'renovate') . '</option>
					<option class="sl-small-hammer" value="hammer"' . ($icon=="hammer" ? ' selected="selected"' : '') . '>' . __('hammer', 'renovate') . '</option>
					<option class="sl-small-helmet" value="helmet"' . ($icon=="helmet" ? ' selected="selected"' : '') . '>' . __('helmet', 'renovate') . '</option>
					<option class="sl-small-house-1" value="house-1"' . ($icon=="house-1" ? ' selected="selected"' : '') . '>' . __('house-1', 'renovate') . '</option>
					<option class="sl-small-house-2" value="house-2"' . ($icon=="house-2" ? ' selected="selected"' : '') . '>' . __('house-2', 'renovate') . '</option>
					<option class="sl-small-key" value="key"' . ($icon=="key" ? ' selected="selected"' : '') . '>' . __('key', 'renovate') . '</option>
					<option class="sl-small-documents" value="documents"' . ($icon=="documents" ? ' selected="selected"' : '') . '>' . __('documents', 'renovate') . '</option>
					<option class="sl-small-lightbulb" value="lightbulb"' . ($icon=="lightbulb" ? ' selected="selected"' : '') . '>' . __('lightbulb', 'renovate') . '</option>
					<option class="sl-small-list" value="list"' . ($icon=="list" ? ' selected="selected"' : '') . '>' . __('list', 'renovate') . '</option>
					<option class="sl-small-location" value="location"' . ($icon=="location" ? ' selected="selected"' : '') . '>' . __('location', 'renovate') . '</option>
					<option class="sl-small-lock" value="lock"' . ($icon=="lock" ? ' selected="selected"' : '') . '>' . __('lock', 'renovate') . '</option>
					<option class="sl-small-mail" value="mail"' . ($icon=="mail" ? ' selected="selected"' : '') . '>' . __('mail', 'renovate') . '</option>
					<option class="sl-small-measure" value="measure"' . ($icon=="measure" ? ' selected="selected"' : '') . '>' . __('measure', 'renovate') . '</option>
					<option class="sl-small-megaphone" value="megaphone"' . ($icon=="megaphone" ? ' selected="selected"' : '') . '>' . __('megaphone', 'renovate') . '</option>
					<option class="sl-small-payment" value="payment"' . ($icon=="payment" ? ' selected="selected"' : '') . '>' . __('payment', 'renovate') . '</option>
					<option class="sl-small-pencil" value="pencil"' . ($icon=="pencil" ? ' selected="selected"' : '') . '>' . __('pencil', 'renovate') . '</option>
					<option class="sl-small-percent" value="percent"' . ($icon=="percent" ? ' selected="selected"' : '') . '>' . __('percent', 'renovate') . '</option>
					<option class="sl-small-person" value="person"' . ($icon=="person" ? ' selected="selected"' : '') . '>' . __('person', 'renovate') . '</option>
					<option class="sl-small-phone" value="phone"' . ($icon=="phone" ? ' selected="selected"' : '') . '>' . __('phone', 'renovate') . '</option>
					<option class="sl-small-photo" value="photo"' . ($icon=="photo" ? ' selected="selected"' : '') . '>' . __('photo', 'renovate') . '</option>
					<option class="sl-small-picture" value="picture"' . ($icon=="picture" ? ' selected="selected"' : '') . '>' . __('picture', 'renovate') . '</option>
					<option class="sl-small-plan" value="plan"' . ($icon=="plan" ? ' selected="selected"' : '') . '>' . __('plan', 'renovate') . '</option>
					<option class="sl-small-poster" value="poster"' . ($icon=="poster" ? ' selected="selected"' : '') . '>' . __('poster', 'renovate') . '</option>
					<option class="sl-small-quote" value="quote"' . ($icon=="quote" ? ' selected="selected"' : '') . '>' . __('quote', 'renovate') . '</option>
					<option class="sl-small-roller" value="roller"' . ($icon=="roller" ? ' selected="selected"' : '') . '>' . __('roller', 'renovate') . '</option>
					<option class="sl-small-ruler" value="ruler"' . ($icon=="ruler" ? ' selected="selected"' : '') . '>' . __('ruler', 'renovate') . '</option>
					<option class="sl-small-scissors" value="scissors"' . ($icon=="scissors" ? ' selected="selected"' : '') . '>' . __('scissors', 'renovate') . '</option>
					<option class="sl-small-screwdriver" value="screwdriver"' . ($icon=="screwdriver" ? ' selected="selected"' : '') . '>' . __('screwdriver', 'renovate') . '</option>
					<option class="sl-small-shield" value="shield"' . ($icon=="shield" ? ' selected="selected"' : '') . '>' . __('shield', 'renovate') . '</option>
					<option class="sl-small-shovel" value="shovel"' . ($icon=="shovel" ? ' selected="selected"' : '') . '>' . __('shovel', 'renovate') . '</option>
					<option class="sl-small-speaker" value="speaker"' . ($icon=="speaker" ? ' selected="selected"' : '') . '>' . __('speaker', 'renovate') . '</option>
					<option class="sl-small-stationery" value="stationery"' . ($icon=="stationery" ? ' selected="selected"' : '') . '>' . __('stationery', 'renovate') . '</option>
					<option class="sl-small-team" value="team"' . ($icon=="team" ? ' selected="selected"' : '') . '>' . __('team', 'renovate') . '</option>
					<option class="sl-small-tick" value="tick"' . ($icon=="tick" ? ' selected="selected"' : '') . '>' . __('tick', 'renovate') . '</option>
					<option class="sl-small-trolley" value="trolley"' . ($icon=="trolley" ? ' selected="selected"' : '') . '>' . __('trolley', 'renovate') . '</option>
					<option class="sl-small-trophy" value="trophy"' . ($icon=="trophy" ? ' selected="selected"' : '') . '>' . __('trophy', 'renovate') . '</option>
					<option class="sl-small-trowel" value="trowel"' . ($icon=="trowel" ? ' selected="selected"' : '') . '>' . __('trowel', 'renovate') . '</option>
					<option class="sl-small-truck" value="truck"' . ($icon=="truck" ? ' selected="selected"' : '') . '>' . __('truck', 'renovate') . '</option>
					<option class="sl-small-video" value="video"' . ($icon=="video" ? ' selected="selected"' : '') . '>' . __('video', 'renovate') . '</option>
					<option class="sl-small-wallet" value="wallet"' . ($icon=="wallet" ? ' selected="selected"' : '') . '>' . __('wallet', 'renovate') . '</option>
					<option class="sl-small-watering-can" value="watering-can"' . ($icon=="watering-can" ? ' selected="selected"' : '') . '>' . __('watering-can', 'renovate') . '</option>
					<option class="sl-small-wrench" value="wrench"' . ($icon=="wrench" ? ' selected="selected"' : '') . '>' . __('wrench', 'renovate') . '</option>
					<option class="sl-small-wrenches" value="wrenches"' . ($icon=="wrenches" ? ' selected="selected"' : '') . '>' . __('wrenches', 'renovate') . '</option>
				</select>
			</td>
		</tr>
	</table>';
}

//When the post is saved, saves our custom data
function theme_save_ql_services_postdata($post_id) 
{
	global $themename;
	//verify if this is an auto save routine. 
	//if it is our form has not been submitted, so we dont want to do anything
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
		return;

	//verify this came from the our screen and with proper authorization,
	//because save_post can be triggered at other times
	if (!isset($_POST[$themename . '_ql_services_noncename']) || !wp_verify_nonce($_POST[$themename . '_ql_services_noncename'], plugin_basename( __FILE__ )))
		return;


	//Check permissions
	if(!current_user_can('edit_post', $post_id))
		return;

	//OK, we're authenticated: we need to find and save the data
	update_post_meta($post_id, "icon", $_POST["ql_services_icon"]);
}

/* --- Theme WooCommerce Custom Filters Functions --- */
function re_woo_custom_override_pagination_args($args) 
{
	$args['prev_text'] = __('&lsaquo;', 'renovate');
	$args['next_text'] = __('&rsaquo;', 'renovate');
	return $args;
}
function re_woo_custom_cart_button_text() 
{
	return __('ADD TO CART', 'woocommerce');
}
if(!function_exists('loop_columns')) 
{
	function re_woo_custom_loop_columns() 
	{
		return 3; // 3 products per row
	}
}
function re_woo_custom_product_description_heading() 
{
    return '';
}
function re_woo_custom_show_page_title()
{
	return false;
}
function re_woo_custom_override_checkout_fields($fields) 
{
	$fields['billing']['billing_first_name']['placeholder'] = 'First Name';
	$fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
	$fields['billing']['billing_company']['placeholder'] = 'Company Name';
	$fields['billing']['billing_email']['placeholder'] = 'Email Address';
	$fields['billing']['billing_phone']['placeholder'] = 'Phone';
	return $fields;
}

//admin functions
require_once(locate_template("admin/functions.php"));

//theme options
global $theme_options;
$theme_options = array(
	"favicon_url" => '',
	"logo_url" => '',
	"logo_text" => '',
	"footer_text" => '',
	"sticky_menu" => '',
	"responsive" => '',
	"scroll_top" => '',
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
	"main_color" => '',
	"header_top_sidebar" => '',
	"primary_font" => '',
	"primary_font_custom" => ''
);
$theme_options = re_theme_stripslashes_deep(array_merge($theme_options, (array)get_option($themename . "_options")));

function re_theme_enqueue_scripts()
{
	global $themename;
	global $theme_options;
	//style
	if($theme_options["primary_font"]!="" && $theme_options["primary_font_custom"]=="")
		wp_enqueue_style("google-font-primary", "//fonts.googleapis.com/css?family=" . urlencode($theme_options["primary_font"]) . (!empty($theme_options["primary_font_subset"]) ? "&subset=" . implode(",", $theme_options["primary_font_subset"]) : ""));
	else if($theme_options["primary_font_custom"]=="")
		wp_enqueue_style("google-font-raleway", "//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900");
	wp_enqueue_style("reset", get_template_directory_uri() . "/style/reset.css");
	wp_enqueue_style("superfish", get_template_directory_uri() ."/style/superfish.css");
	wp_enqueue_style("prettyPhoto", get_template_directory_uri() ."/style/prettyPhoto.css");
	wp_enqueue_style("jquery-qtip", get_template_directory_uri() ."/style/jquery.qtip.css");
	wp_enqueue_style("odometer", get_template_directory_uri() ."/style/odometer-theme-default.css");
	wp_enqueue_style("animations", get_template_directory_uri() ."/style/animations.css");
	wp_enqueue_style("main-style", get_stylesheet_uri());
	if((int)$theme_options["responsive"])
		wp_enqueue_style("responsive", get_template_directory_uri() ."/style/responsive.css");
	else
		wp_enqueue_style("no-responsive", get_template_directory_uri() ."/style/no_responsive.css");

	if(is_plugin_active('woocommerce/woocommerce.php'))
	{
		wp_enqueue_style("woocommerce-custom", get_template_directory_uri() ."/woocommerce/style.css");
		if((int)$theme_options["responsive"])
			wp_enqueue_style("woocommerce-responsive", get_template_directory_uri() ."/woocommerce/responsive.css");
		else
			wp_dequeue_style("woocommerce-smallscreen");
		if(is_rtl())
			wp_enqueue_style("woocommerce-rtl", get_template_directory_uri() ."/woocommerce/rtl.css");
	}
	wp_enqueue_style("re-streamline-small", get_template_directory_uri() ."/fonts/streamline-small/styles.css");
	wp_enqueue_style("re-streamline-large", get_template_directory_uri() ."/fonts/streamline-large/styles.css");
	wp_enqueue_style("re-template", get_template_directory_uri() ."/fonts/template/styles.css");
	wp_enqueue_style("re-social", get_template_directory_uri() ."/fonts/social/styles.css");
	wp_enqueue_style("custom", get_template_directory_uri() ."/custom.css");
	//js
	wp_enqueue_script("jquery", false, array(), false, true);
	wp_enqueue_script("jquery-ui-core", false, array("jquery"), false, true);
	wp_enqueue_script("jquery-ui-accordion", false, array("jquery"), false, true);
	wp_enqueue_script("jquery-ui-tabs", false, array("jquery"), false, true);
	wp_enqueue_script("jquery-ui-selectmenu", false, array("jquery"), false, true);
	wp_enqueue_script("jquery-ui-slider", false, array("jquery"), false, true);
	wp_enqueue_script("jquery-ui-touch-punch", get_template_directory_uri() ."/js/jquery.ui.touch-punch.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-isotope", get_template_directory_uri() ."/js/jquery.isotope.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-ba-bqq", get_template_directory_uri() ."/js/jquery.ba-bbq.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-easing", get_template_directory_uri() ."/js/jquery.easing.1.3.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-carouFredSel", get_template_directory_uri() ."/js/jquery.carouFredSel-6.2.1-packed.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-touchSwipe", get_template_directory_uri() ."/js/jquery.touchSwipe.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-transit", get_template_directory_uri() ."/js/jquery.transit.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-hint", get_template_directory_uri() ."/js/jquery.hint.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-costCalculator", get_template_directory_uri() ."/js/jquery.costCalculator.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-parallax", get_template_directory_uri() ."/js/jquery.parallax.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-qtip", get_template_directory_uri() ."/js/jquery.qtip.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-block-ui", get_template_directory_uri() ."/js/jquery.blockUI.min.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-prettyPhoto", get_template_directory_uri() ."/js/jquery.prettyPhoto.js", array("jquery"), false, true);
	wp_enqueue_script("jquery-odometer", get_template_directory_uri() ."/js/odometer.min.js", array("jquery", "theme-main" ), false, true);
	wp_enqueue_script("google-maps-v3", "//maps.google.com/maps/api/js", false, array(), false, true);
	if(function_exists("is_customize_preview") && !is_customize_preview())
		wp_enqueue_script("theme-main", get_template_directory_uri() ."/js/main.js", array("jquery", "jquery-ui-core", "jquery-ui-accordion", "jquery-ui-tabs"), false, true);
	
	//ajaxurl
	$data["ajaxurl"] = admin_url("admin-ajax.php");
	//themename
	$data["themename"] = $themename;
	//home url
	$data["home_url"] = get_home_url();
	//is_rtl
	$data["is_rtl"] = ((is_rtl() || $theme_options["direction"]=='rtl') && ((isset($_COOKIE["re_direction"]) && $_COOKIE["re_direction"]!="LTR") || !isset($_COOKIE["re_direction"]))) || (isset($_COOKIE["re_direction"]) && $_COOKIE["re_direction"]=="RTL") ? 1 : 0;
	
	//pass data to javascript
	$params = array(
		'l10n_print_after' => 'config = ' . json_encode($data) . ';'
	);
	wp_localize_script("theme-main", "config", $params);
}
add_action("wp_enqueue_scripts", "re_theme_enqueue_scripts");

//function to display number of posts
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='')
	{
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }
    return (int)$count;
}

//function to count views
function setPostViews($postID) 
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='')
	{
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 1);
    }
	else
	{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function get_time_iso8601() 
{
	$offset = get_option('gmt_offset');
	$timezone = ($offset < 0 ? '-' : '+') . (abs($offset)<10 ? '0'.abs($offset) : abs($offset)) . '00' ;
	return get_the_time('Y-m-d\TH:i:s') . $timezone;					
}

function re_theme_direction() 
{
	global $wp_locale, $theme_options;
	if(isset($theme_options['direction']) || (isset($_COOKIE["re_direction"]) && ($_COOKIE["re_direction"]=="LTR" || $_COOKIE["re_direction"]=="RTL")))
	{
		if($theme_options['direction']=='default' && empty($_COOKIE["re_direction"]))
			return;
		$wp_locale->text_direction = ($theme_options['direction']=='rtl' && ((isset($_COOKIE["re_direction"]) && $_COOKIE["re_direction"]!="LTR") || !isset($_COOKIE["re_direction"])) || (isset($_COOKIE["re_direction"]) && $_COOKIE["re_direction"]=="RTL") ? 'rtl' : 'ltr');
	}
}
add_action("after_setup_theme", "re_theme_direction");

//renovate get_font_subsets
function re_ajax_get_font_subsets()
{
	if($_POST["font"]!="")
	{
		$subsets = '';
		$fontExplode = explode(":", $_POST["font"]);
		$subsets_array = re_get_google_font_subset($fontExplode[0]);
		
		foreach($subsets_array as $subset)
			$subsets .= '<option value="' . $subset . '">' . $subset . '</option>';
		
		echo "re_start" . $subsets . "re_end";
	}
	exit();
}
add_action('wp_ajax_renovate_get_font_subsets', 're_ajax_get_font_subsets');

/**
 * Returns array of Google Fonts
 * @return array of Google Fonts
 */
function re_get_google_fonts()
{
	//get google fonts
	$fontsArray = get_option("renovate_google_fonts");
	//update if option doesn't exist or it was modified more than 2 weeks ago
	if($fontsArray===FALSE || (time()-$fontsArray->last_update>2*7*24*60*60)) 
	{
		$google_api_url = 'http://quanticalabs.com/.tools/GoogleFont/font.txt';
		$fontsJson = wp_remote_retrieve_body(wp_remote_get($google_api_url, array('sslverify' => false)));
		$fontsArray = json_decode($fontsJson);
		$fontsArray->last_update = time();		
		update_option("renovate_google_fonts", $fontsArray);
	}
	return $fontsArray;
}

/**
 * Returns array of subsets for provided Google Font
 * @param type $font - Google font
 * @return array of subsets for provided Google Font
 */
function re_get_google_font_subset($font)
{
	$subsets = array();
	//get google fonts
	$fontsArray = re_get_google_fonts();		
	$fontsCount = count($fontsArray->items);
	for($i=0; $i<$fontsCount; $i++)
	{
		if($fontsArray->items[$i]->family==$font)
		{
			for($j=0, $max=count($fontsArray->items[$i]->subsets); $j<$max; $j++)
			{
				$subsets[] = $fontsArray->items[$i]->subsets[$j];
			}
			break;
		}
	}
	return $subsets;
}
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');
function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Bancroft Construction Company';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
?>