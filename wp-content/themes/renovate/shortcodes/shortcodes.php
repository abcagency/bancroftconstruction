<?php
global $renovate_posts_array;
$renovate_posts_array = array();
$count_posts = wp_count_posts();
if($count_posts->publish<100)
{
	$renovate_posts_list = get_posts(array(
		'posts_per_page' => -1,
		'nopaging' => true,
		'orderby' => 'title',
		'order' => 'ASC',
		'post_type' => 'post'
	));
	$renovate_posts_array[__("All", 'renovate')] = "-";
	foreach($renovate_posts_list as $post)
		$renovate_posts_array[$post->post_title . " (id:" . $post->ID . ")"] = $post->ID;
}

global $renovate_pages_array;
$renovate_pages_array = array();
$count_pages = wp_count_posts('page');
if($count_pages->publish<100)
{
	$pages_list = get_posts(array(
		'posts_per_page' => -1,
		'orderby' => 'title',
		'order' => 'ASC',
		'post_type' => 'page'
	));
	$renovate_pages_array = array();
	$renovate_pages_array[__("none", 'renovate')] = "-";
	foreach($pages_list as $single_page)
		$renovate_pages_array[$single_page->post_title . " (id:" . $single_page->ID . ")"] = $single_page->ID;
}

//blog 1 column
require_once(locate_template("shortcodes/blog.php"));
//blog 2 columns
require_once(locate_template("shortcodes/blog_2_columns.php"));
//blog 3 columns
require_once(locate_template("shortcodes/blog_3_columns.php"));
//blog small
require_once(locate_template("shortcodes/blog_small.php"));
//post carousel
require_once(locate_template("shortcodes/post_carousel.php"));
//post
require_once(locate_template("shortcodes/single-post.php"));
//comments
require_once(locate_template("shortcodes/comments.php"));
//items_list
require_once(locate_template("shortcodes/items_list.php"));
//map
require_once(locate_template("shortcodes/map.php"));
if(is_plugin_active('ql_services/ql_services.php'))
{
	//service single
	require_once(locate_template("shortcodes/single-service.php"));
}
if(is_plugin_active('ql_team/ql_team.php'))
{
	//team single
	require_once(locate_template("shortcodes/single-team.php"));
	require_once(locate_template("shortcodes/team_member_box.php"));
}
if(is_plugin_active('renovate-projects/renovate-projects.php'))
{
	//project single
	require_once(locate_template("shortcodes/single-project.php"));
}
//about box
require_once(locate_template("shortcodes/call_to_action_box.php"));
//featured item
require_once(locate_template("shortcodes/featured_item.php"));
//timeline item
require_once(locate_template("shortcodes/timeline_item.php"));
//announcement box
require_once(locate_template("shortcodes/announcement_box.php"));
//pricing table
if(is_plugin_active('css3_web_pricing_tables_grids/css3_web_pricing_tables_grids.php'))
	require_once(locate_template("shortcodes/pricing_table.php"));
//testimonials
require_once(locate_template("shortcodes/testimonials.php"));
//our clients carousel
require_once(locate_template("shortcodes/our_clients_carousel.php"));
//cost calculator
require_once(locate_template("shortcodes/cost_calculator_slider_box.php"));
require_once(locate_template("shortcodes/cost_calculator_dropdown_box.php"));
require_once(locate_template("shortcodes/cost_calculator_input_box.php"));
require_once(locate_template("shortcodes/cost_calculator_summary_box.php"));
require_once(locate_template("shortcodes/cost_calculator_contact_box.php"));

//progress bar
$attributes = array(
	array(
		"type" => "dropdown",
		"class" => "",
		"heading" => __("Top margin", 'renovate'),
		"param_name" => "top_margin",
		"value" => array(__("None", 'renovate') => "none",  __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section"),
		"description" => __("Select top margin value for your row", "renovate")
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Color', 'js_composer' ),
		'param_name' => 'bgcolor',
		'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Classic Grey', 'js_composer' ) => 'bar_grey',
				__( 'Classic Blue', 'js_composer' ) => 'bar_blue',
				__( 'Classic Turquoise', 'js_composer' ) => 'bar_turquoise',
				__( 'Classic Green', 'js_composer' ) => 'bar_green',
				__( 'Classic Orange', 'js_composer' ) => 'bar_orange',
				__( 'Classic Red', 'js_composer' ) => 'bar_red',
				__( 'Classic Black', 'js_composer' ) => 'bar_black',
			) + getVcShared( 'colors-dashed' ) + array(
				__( 'Custom Color', 'js_composer' ) => 'custom',
			),
		'description' => __( 'Select bar background color.', 'js_composer' ),
		'admin_label' => true,
		'param_holder_class' => 'vc_colored-dropdown',
	)
);
vc_add_params('vc_progress_bar', $attributes);
//row inner
$attributes = array(
	array(
		"type" => "dropdown",
		"class" => "",
		"heading" => __("Type", 'renovate'),
		"param_name" => "type",
		"value" => array(__("Default", 'renovate') => "",  __("Full width", 'renovate') => "full-width",  __("Paralax background", 'renovate') => "full-width re-parallax", __("Cost calculator form", 'renovate') => "cost-calculator-container"),
		"description" => __("Select row type", "renovate")
	),
	array(
		"type" => "dropdown",
		"class" => "",
		"heading" => __("Top margin", 'renovate'),
		"param_name" => "top_margin",
		"value" => array(__("None", 'renovate') => "none",  __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section"),
		"description" => __("Select top margin value for your row", "renovate")
	)
);
vc_add_params('vc_row_inner', $attributes);
//row
vc_map( array(
	'name' => __( 'Row', 'js_composer' ),
	'base' => 'vc_row',
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'show_settings_on_create' => false,
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Place content elements inside the row', 'js_composer' ),
	'params' => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Type", 'renovate'),
			"param_name" => "type",
			"value" => array(__("Default", 'renovate') => "",  __("Full width", 'renovate') => "full-width",  __("Paralax background", 'renovate') => "full-width re-parallax", __("Cost calculator form", 'renovate') => "cost-calculator-container"),
			"description" => __("Select row type", "renovate")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Top margin", 'renovate'),
			"param_name" => "top_margin",
			"value" => array(__("None", 'renovate') => "none",  __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section"),
			"description" => __("Select top margin value for your row", "renovate")
		),
		/*array(
			'type' => 'dropdown',
			'heading' => __( 'Row stretch', 'js_composer' ),
			'param_name' => 'full_width',
			'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Stretch row', 'js_composer' ) => 'stretch_row',
				__( 'Stretch row and content', 'js_composer' ) => 'stretch_row_content',
				__( 'Stretch row and content (no paddings)', 'js_composer' ) => 'stretch_row_content_no_spaces',
			),
			'description' => __( 'Select stretching options for row and content (Note: stretched may not work properly if parent container has "overflow: hidden" CSS property).', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns gap', 'js_composer' ),
			'param_name' => 'gap',
			'value' => array(
				'0px' => '0',
				'1px' => '1',
				'2px' => '2',
				'3px' => '3',
				'4px' => '4',
				'5px' => '5',
				'10px' => '10',
				'15px' => '15',
				'20px' => '20',
				'25px' => '25',
				'30px' => '30',
				'35px' => '35',
			),
			'std' => '0',
			'description' => __( 'Select gap between columns in row.', 'js_composer' ),
		),*/
		array(
			'type' => 'checkbox',
			'heading' => __( 'Full height row?', 'js_composer' ),
			'param_name' => 'full_height',
			'description' => __( 'If checked row will be set to full height.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns position', 'js_composer' ),
			'param_name' => 'columns_placement',
			'value' => array(
				__( 'Middle', 'js_composer' ) => 'middle',
				__( 'Top', 'js_composer' ) => 'top',
				__( 'Bottom', 'js_composer' ) => 'bottom',
				__( 'Stretch', 'js_composer' ) => 'stretch',
			),
			'description' => __( 'Select columns position within row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'full_height',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Equal height', 'js_composer' ),
			'param_name' => 'equal_height',
			'description' => __( 'If checked columns will be set to equal height.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Content position', 'js_composer' ),
			'param_name' => 'content_placement',
			'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Top', 'js_composer' ) => 'top',
				__( 'Middle', 'js_composer' ) => 'middle',
				__( 'Bottom', 'js_composer' ) => 'bottom',
			),
			'description' => __( 'Select content position within columns.', 'js_composer' ),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use video background?', 'js_composer' ),
			'param_name' => 'video_bg',
			'description' => __( 'If checked, video will be used as row background.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'YouTube link', 'js_composer' ),
			'param_name' => 'video_bg_url',
			'value' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
			// default video url
			'description' => __( 'Add YouTube link.', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'js_composer' ),
			'param_name' => 'video_bg_parallax',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Simple', 'js_composer' ) => 'content-moving',
				__( 'With fade', 'js_composer' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'js_composer' ),
			'param_name' => 'parallax',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Simple', 'js_composer' ) => 'content-moving',
				__( 'With fade', 'js_composer' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row (Note: If no image is specified, parallax will use background image from Design Options).', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'is_empty' => true,
			),
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Image', 'js_composer' ),
			'param_name' => 'parallax_image',
			'value' => '',
			'description' => __( 'Select image from media library.', 'js_composer' ),
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'el_id',
			'heading' => __( 'Row ID', 'js_composer' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter row ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'js_composer' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'js_composer' ),
		)
	),
	'js_view' => 'VcRowView'
) );

//column
$vc_column_width_list = array(
	__('1 column - 1/12', 'js_composer') => '1/12',
	__('2 columns - 1/6', 'js_composer') => '1/6',
	__('3 columns - 1/4', 'js_composer') => '1/4',
	__('4 columns - 1/3', 'js_composer') => '1/3',
	__('5 columns - 5/12', 'js_composer') => '5/12',
	__('6 columns - 1/2', 'js_composer') => '1/2',
	__('7 columns - 7/12', 'js_composer') => '7/12',
	__('8 columns - 2/3', 'js_composer') => '2/3',
	__('9 columns - 3/4', 'js_composer') => '3/4',
	__('10 columns - 5/6', 'js_composer') => '5/6',
	__('11 columns - 11/12', 'js_composer') => '11/12',
	__('12 columns - 1/1', 'js_composer') => '1/1'
);
vc_map( array(
	'name' => __( 'Column', 'js_composer' ),
	'base' => 'vc_column',
	'is_container' => true,
	//"as_parent" => array('except' => 'vc_row'),
	'content_element' => false,
	'description' => __( 'Place content elements inside the column', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Column type", 'renovate'),
			"param_name" => "type",
			"value" => array(__("Default", 'renovate') => "",  __("Smart (sticky)", 'renovate') => "re-smart-column"),
			"dependency" => Array('element' => "width", 'value' => array_map('strval', array_values((array_slice($vc_column_width_list, 0, -1)))))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Top margin", 'renovate'),
			"param_name" => "top_margin",
			"value" => array(__("None", 'renovate') => "none",  __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section"),
			"description" => __("Select top margin value for your column", "renovate")
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'js_composer' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'js_composer' ),
			'param_name' => 'width',
			'value' => $vc_column_width_list,
			'group' => __( 'Responsive Options', 'js_composer' ),
			'description' => __( 'Select column width.', 'js_composer' ),
			'std' => '1/1'
		),
		array(
			'type' => 'column_offset',
			'heading' => __( 'Responsiveness', 'js_composer' ),
			'param_name' => 'offset',
			'group' => __( 'Responsive Options', 'js_composer' ),
			'description' => __( 'Adjust column for different screen sizes. Control width, offset and visibility settings.', 'js_composer' )
		)
	),
	'js_view' => 'VcColumnView'
) );

//widgetised sidebar
vc_map( array(
	'name' => __( 'Widgetised Sidebar', 'js_composer' ),
	'base' => 'vc_widget_sidebar',
	'class' => 'wpb_widget_sidebar_widget',
	'icon' => 'icon-wpb-layout_sidebar',
	'category' => __( 'Structure', 'js_composer' ),
	'description' => __( 'WordPress widgetised sidebar', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'js_composer' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'js_composer' )
		),
		array(
			'type' => 'widgetised_sidebars',
			'heading' => __( 'Sidebar', 'js_composer' ),
			'param_name' => 'sidebar_id',
			'description' => __( 'Select widget area to display.', 'js_composer' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Top margin", 'renovate'),
			"param_name" => "top_margin",
			"value" => array(__("None", 'renovate') => "none",  __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section"),
			"description" => __("Select top margin value for your sidebar", "renovate")
		)
	)
) );

$vc_is_wp_version_3_6_more = version_compare( preg_replace( '/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo( 'version' ) ), '3.6' ) >= 0;
//tab
vc_map( array(
	'name' => __( 'Tab', 'js_composer' ),
	'base' => 'vc_tab',
	"as_parent" => array('except' => 'vc_tabs, vc_accordion'),
	"allowed_container_element" => array('vc_row', 'vc_nested_tabs', 'vc_nested_accordion'),
	'is_container' => true,
	'content_element' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Title', 'js_composer' ),
			'param_name' => 'title',
			'description' => __( 'Tab title.', 'js_composer' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Icon", 'renovate'),
			"param_name" => "icon",
			"value" => array(
				__("none", 'renovate') => "none",
				__("bricks", 'renovate') => "sl-small-bricks",
				__("briefcase", 'renovate') => "sl-small-briefcase",
				__("brush-1", 'renovate') => "sl-small-brush-1",
				__("brush-2", 'renovate') => "sl-small-brush-2",
				__("bubble", 'renovate') => "sl-small-bubble",
				__("bubble check", 'renovate') => "sl-small-bubble-check",
				__("bucket", 'renovate') => "sl-small-bucket",
				__("building", 'renovate') => "sl-small-building",
				__("calculator", 'renovate') => "sl-small-calculator",
				__("camera", 'renovate') => "sl-small-camera",
				__("cart-1", 'renovate') => "sl-small-cart-1",
				__("cart-2", 'renovate') => "sl-small-cart-2",
				__("chat", 'renovate') => "sl-small-chat",
				__("clock", 'renovate') => "sl-small-clock",
				__("cone", 'renovate') => "sl-small-cone",
				__("construction", 'renovate') => "sl-small-construction",
				__("conversation", 'renovate') => "sl-small-conversation",
				__("lab", 'renovate') => "sl-small-documents",
				__("door", 'renovate') => "sl-small-door",
				__("driller", 'renovate') => "sl-small-driller",
				__("eco", 'renovate') => "sl-small-eco",
				__("faq", 'renovate') => "sl-small-faq",
				__("fax", 'renovate') => "sl-small-fax",
				__("fence", 'renovate') => "sl-small-fence",
				__("forklift", 'renovate') => "sl-small-forklift",
				__("garage", 'renovate') => "sl-small-garage",
				__("gears", 'renovate') => "sl-small-gears",
				__("globe", 'renovate') => "sl-small-globe",
				__("hammer", 'renovate') => "sl-small-hammer",
				__("helmet", 'renovate') => "sl-small-helmet",
				__("house-1", 'renovate') => "sl-small-house-1",
				__("house-2", 'renovate') => "sl-small-house-2",
				__("key", 'renovate') => "sl-small-key",
				__("documents", 'renovate') => "sl-small-lab",
				__("lightbulb", 'renovate') => "sl-small-lightbulb",
				__("list", 'renovate') => "sl-small-list",
				__("location", 'renovate') => "sl-small-location",
				__("lock", 'renovate') => "sl-small-lock",
				__("mail", 'renovate') => "sl-small-mail",
				__("measure", 'renovate') => "sl-small-measure",
				__("megaphone", 'renovate') => "sl-small-megaphone",
				__("payment", 'renovate') => "sl-small-payment",
				__("pencil", 'renovate') => "sl-small-pencil",
				__("percent", 'renovate') => "sl-small-percent",
				__("person", 'renovate') => "sl-small-person",
				__("phone", 'renovate') => "sl-small-phone",
				__("photo", 'renovate') => "sl-small-photo",
				__("picture", 'renovate') => "sl-small-picture",
				__("plan", 'renovate') => "sl-small-plan",
				__("poster", 'renovate') => "sl-small-poster",
				__("quote", 'renovate') => "sl-small-quote",
				__("roller", 'renovate') => "sl-small-roller",
				__("ruler", 'renovate') => "sl-small-ruler",
				__("scissors", 'renovate') => "sl-small-scissors",
				__("screwdriver", 'renovate') => "sl-small-screwdriver",
				__("shield", 'renovate') => "sl-small-shield",
				__("shovel", 'renovate') => "sl-small-shovel",
				__("speaker", 'renovate') => "sl-small-speaker",
				__("stationery", 'renovate') => "sl-small-stationery",
				__("team", 'renovate') => "sl-small-team",
				__("tick", 'renovate') => "sl-small-tick",
				__("trolley", 'renovate') => "sl-small-trolley",
				__("trophy", 'renovate') => "sl-small-trophy",
				__("trowel", 'renovate') => "sl-small-trowel",
				__("truck", 'renovate') => "sl-small-truck",
				__("video", 'renovate') => "sl-small-video",
				__("wallet", 'renovate') => "sl-small-wallet",
				__("watering-can", 'renovate') => "sl-small-watering-can",
				__("wrench", 'renovate') => "sl-small-wrench",
				__("wrenches", 'renovate') => "sl-small-wrenches")
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Tab ID', 'js_composer' ),
			'param_name' => "tab_id"
		)
	),
	'js_view' => $vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35'
) );

//box_header
function re_theme_box_header($atts)
{
	extract(shortcode_atts(array(
		"title" => "Sample Header",
		"type" => "h1",
		"class" => "",
		"bottom_border" => 1,
		"top_margin" => "none"
	), $atts));
	
	return '<' . $type . ' class="box-header' . ($class!="" ? ' ' . $class : '') . ($top_margin!="none" ? ' ' . $top_margin : '') . '">' . do_shortcode($title) . '</' . $type . '>';
}
add_shortcode("box_header", "re_theme_box_header");
//visual composer
vc_map( array(
	"name" => __("Box header", 'renovate'),
	"base" => "box_header",
	"class" => "",
	"controls" => "full",
	"show_settings_on_create" => true,
	"icon" => "icon-wpb-layer-box-header",
	"category" => __('Renovate', 'renovate'),
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Title", 'renovate'),
			"param_name" => "title",
			"value" => "Sample Header"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Type", 'renovate'),
			"param_name" => "type",
			"value" => array(__("H1", 'renovate') => "h1", __("H2", 'renovate') => "h2", __("H3", 'renovate') => "h3", __("H4", 'renovate') => "h4", __("H5", 'renovate') => "h5", __("H6", 'renovate') => "h6")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Bottom border", 'renovate'),
			"param_name" => "bottom_border",
			"value" => array(__("yes", 'renovate') => 1,  __("no", 'renovate') => 0)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Extra class name", 'renovate'),
			"param_name" => "class",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Top margin", 'renovate'),
			"param_name" => "top_margin",
			"value" => array(__("None", 'renovate') => "none", __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section")
		)
	)
));

//read more
function re_theme_button($atts)
{
	extract(shortcode_atts(array(
		"type" => "read_more",
		"icon" => "none",
		"url" => "",
		"title" => __("READ MORE", 'renovate'),
		"label" => "",
		"target" => "",
		"extraclass" => "",
		"top_margin" => "none"
	), $atts));

	$output = (is_rtl() ?  (($label!="" ? '<h3>' : '') . '<a class="' . ($type=="read_more" ? 'more' : 're-action-button') . ($type=="action" && !empty($icon) && $icon!="none" ? ' template-' . esc_attr($icon) : '') . (!empty($extraclass) ? ' ' . $extraclass : '') . ($top_margin!="none" ? ' ' . $top_margin : '') . '" href="' . esc_url($url) . '"'  . (!empty($target) ? ' target="' . esc_attr($target) . '"' : '') . ' title="' . esc_attr($title) . '">' . $title . '</a>' . ($label!="" ? '<span class="button-label">' . $label . '</span></h3>' : '')) : (($label!="" ? '<h3><span class="button-label">' . $label . '</span>' : '') . '<a class="' . ($type=="read_more" ? 'more' : 're-action-button') . ($type=="action" && !empty($icon) && $icon!="none" ? ' template-' . esc_attr($icon) : '') . (!empty($extraclass) ? ' ' . $extraclass : '') . ($top_margin!="none" ? ' ' . $top_margin : '') . '" href="' . esc_url($url) . '"'  . (!empty($target) ? ' target="' . esc_attr($target) . '"' : '') . ' title="' . esc_attr($title) . '">' . $title . '</a>' . ($label!="" ? '</h3>' : '')));
	return $output;	
}
add_shortcode("vc_btn", "re_theme_button");
//visual composer
vc_map( array(
	"name" => __("Button", 'renovate'),
	"base" => "vc_btn",
	"class" => "",
	"controls" => "full",
	"show_settings_on_create" => true,
	"icon" => "icon-wpb-ui-button",
	"category" => __('Renovate', 'renovate'),
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Type", 'renovate'),
			"param_name" => "type",
			"value" => array(__("Read more button", 'renovate') => "read_more", __("Action button", 'renovate') => "action")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Icon", 'renovate'),
			"param_name" => "icon",
			"value" => array(
				__("none", 'renovate') => "none",
				__("arrow-circle-down", 'renovate') => "arrow-circle-down",
				__("arrow-circle-right", 'renovate') => "arrow-circle-right",
				__("arrow-dropdown", 'renovate') => "arrow-dropdown",
				__("arrow-left-1", 'renovate') => "arrow-left-1",
				__("arrow-left-2", 'renovate') => "arrow-left-2",
				__("arrow-right-1", 'renovate') => "arrow-right-1",
				__("arrow-right-2", 'renovate') => "arrow-right-2",
				__("arrow-menu", 'renovate') => "arrow-menu",
				__("arrow-up", 'renovate') => "arrow-up",
				__("bubble", 'renovate') => "bubble",
				__("bullet", 'renovate') => "bullet",
				__("calendar", 'renovate') => "calendar",
				__("clock", 'renovate') => "clock",
				__("location", 'renovate') => "location",
				__("eye", 'renovate') => "eye",
				__("mail", 'renovate') => "mail",
				__("map-marker", 'renovate') => "map-marker",
				__("phone", 'renovate') => "phone",
				__("search", 'renovate') => "search",
				__("shopping-cart", 'renovate') => "shopping-cart"
			),
			"dependency" => Array('element' => "type", 'value' => "action")
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Title", 'renovate'),
			"param_name" => "title",
			"value" => __("READ MORE", 'renovate')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Label", 'renovate'),
			"param_name" => "label",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Url", 'renovate'),
			"param_name" => "url",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Button target", 'renovate'),
			"param_name" => "target",
			"value" => array(__("Same window", 'renovate') => "", __("New window", 'renovate') => "_blank")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Top margin", 'renovate'),
			"param_name" => "top_margin",
			"value" => array(__("None", 'renovate') => "none", __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section")
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Extra class name", 'renovate'),
			"param_name" => "extraclass",
			"value" => ""
		),
	)
));
?>