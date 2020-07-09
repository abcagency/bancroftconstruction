<?php
function re_theme_post_carousel_shortcode($atts)
{
	global $theme_options;
	extract(shortcode_atts(array(
		"items_per_page" => 6,
		"offset" => 0,
		"featured_image_size" => "default",
		"ids" => "",
		"category" => "",
		"author" => "",
		"order_by" => "title,menu_order",
		"order" => "DESC",
		"visible" => 3,
		"show_post_title" => 1,
		"show_post_excerpt" => 1,
		"excerpt_length" => 0,
		"read_more" => 0,
		"show_post_categories" => 0,
		"show_post_author" => 0,
		"show_post_date" => 1,
		"date_format" => "renovate",
		"show_post_views" => 1,
		"show_post_comments" => 1,
		"autoplay" => 0,
		"pause_on_hover" => 1,
		"scroll" => 1,
		"scroll_control" => 1,
		"effect" => "scroll",
		"easing" => "swing",
		"duration" => 500,
		"ontouch" => 0,
		"onmouse" => 0,
		"top_margin" => "none"
	), $atts));
	
	$ids = explode(",", $ids);
	if($ids[0]=="-" || $ids[0]=="")
	{
		unset($ids[0]);
		$ids = array_values($ids);
	}
	$category = explode(",", $category);
	if($category[0]=="-" || $category[0]=="")
	{
		unset($category[0]);
		$category = array_values($category);
	}
	$author = explode(",", $author);
	if($author[0]=="-" || $author[0]=="")
	{
		unset($author[0]);
		$author = array_values($author);
	}
	if(in_array("current", (array)$author))
	{
		$author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
		$author = array($author->ID);
	}
	$args = array( 
		'include' => $ids,
		'post_type' => 'post',
		'posts_per_page' => $items_per_page,
		'offset' => (int)$offset,
		//'nopaging' => true,
		'post_status' => 'publish',
		'cat' => ((get_query_var('cat')!="" && empty($category)) ? get_query_var('cat') : ''),
		'category_name' => (!empty($category) ? implode(",", $category) : ''),
		'author__in' => $author,
		'orderby' => ($order_by=="views" || $order_by=="rate" ? 'meta_value_num' : implode(" ", explode(",", $order_by))),
		'order' => $order
	);
	if($order_by=="views")
		$args['meta_key'] = 'post_views_count';
	
	$posts_list = get_posts($args);
	if(is_rtl())
		$posts_list = array_reverse($posts_list);
	$output = '';
	if(count($posts_list))
		$output .= '<div class="carousel-container clearfix' . ($top_margin!="none" ? ' ' . $top_margin : '') . '"><ul class="blog horizontal-carousel three-columns visible-' . (int)$visible . ' autoplay-' . (int)$autoplay . ' pause_on_hover-' . (int)$pause_on_hover . ' scroll-' . (int)$scroll . '">';
	$i=0;
	global $post;
	$currentPost = $post;
	$category_filter_array = $category;
	foreach($posts_list as $post) 
	{
		setup_postdata($post);
		require_once(locate_template("shortcodes/class/Post.php"));
		$carousel_post = new Re_Post("blog", $featured_image_size, (int)$show_post_date, $date_format, (int)$show_post_views, (int)$show_post_comments, (int)$show_post_categories, (int)$show_post_excerpt, (int)$show_post_author, $i);
		$output .= $carousel_post->getLiCssClass("vc_col-sm-4 wpb_column vc_column_container");
		$output .= $carousel_post->getThumbnail("big-thumb");
		$output .= $carousel_post->getPostDetails();
		$output .= $carousel_post->getPostContentDetails();
		if((int)$show_post_title)
		{
			$output .= '<h4><a href="' . get_permalink() . '" title="' . esc_attr(get_the_title()) . '">' . get_the_title() . '</a></h4>';
		}
		if((int)$show_post_excerpt)
		{
			$output .= apply_filters('the_excerpt', ((int)$excerpt_length ? substr(get_the_excerpt(), 0, strpos(get_the_excerpt(), ' ', (int)$excerpt_length)) : get_the_excerpt()));
		}
		if((int)$read_more)
		{
			$output .= '<div class="vc_row wpb_row vc_row-fluid padding-top-54 padding-bottom-17"><a title="' . __('READ MORE', 'renovate') . '" href="' . get_permalink() . '" class="more">' . __('READ MORE', 'renovate') . '</a></div>';
		}
		$output .= '</li>';
		$i++;
	}
	$post = $currentPost;
	
	if(count($posts_list))
	{
		$output .= '</ul>';
		if((int)$scroll_control)
			$output .= '<div class="re-carousel-pagination"></div>';
		$output .= '</div>';
	}
	return $output;
}
add_shortcode("re_post_carousel", "re_theme_post_carousel_shortcode");

//visual composer
function re_theme_post_carousel_vc_init()
{
	//get posts list
	global $renovate_posts_array;

	//get categories
	$post_categories = get_terms("category");
	$post_categories_array = array();
	$post_categories_array[__("All", 'pressroom')] = "-";
	foreach($post_categories as $post_category)
		$post_categories_array[$post_category->name] =  $post_category->slug;
	
	//get authors list
	$authors_list = get_users(array(
		'who' => 'authors'
	));
	$authors_array = array();
	$authors_array[__("All", 'renovate')] = "-";
	$authors_array[__("Current author (applies on author single page)", 'renovate')] = "current";
	foreach($authors_list as $author)
		$authors_array[$author->display_name . " (id:" . $author->ID . ")"] = $author->ID;
	
	//image sizes
	$image_sizes_array = array();
	$image_sizes_array[__("Default", 'pressroom')] = "default";
	global $_wp_additional_image_sizes;
	foreach(get_intermediate_image_sizes() as $s) 
	{
		if(isset($_wp_additional_image_sizes[$s])) 
		{
			$width = intval($_wp_additional_image_sizes[$s]['width']);
			$height = intval($_wp_additional_image_sizes[$s]['height']);
		}
		else
		{
			$width = get_option($s.'_size_w');
			$height = get_option($s.'_size_h');
		}
		$image_sizes_array[$s . " (" . $width . "x" . $height . ")"] = $s;
	}
	$params = array(
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Post count", 'pressroom'),
			"param_name" => "items_per_page",
			"value" => 6,
			"description" => __("Set -1 to display all.", 'pressroom')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Offset", 'pressroom'),
			"param_name" => "offset",
			"value" => 0,
			"description" => __("Number of post to displace or pass over.", 'pressroom')
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Featured image size", 'pressroom'),
			"param_name" => "featured_image_size",
			"value" => $image_sizes_array
		),
		array(
			"type" => (count($renovate_posts_array) ? "dropdownmulti" : "textfield"),
			"class" => "",
			"heading" => __("Display selected", 'pressroom'),
			"param_name" => "ids",
			"value" => (count($renovate_posts_array) ? $renovate_posts_array : ''),
			"description" => (count($renovate_posts_array) ? '' : __("Please provide post ids separated with commas, to display only selected posts", 'pressroom'))
		),
		array(
			"type" => "dropdownmulti",
			"class" => "",
			"heading" => __("Display from Category", 'pressroom'),
			"param_name" => "category",
			"value" => $post_categories_array
		),
		array(
			"type" => "dropdownmulti",
			"class" => "",
			"heading" => __("Display by author", 'renovate'),
			"param_name" => "author",
			"value" => $authors_array
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Order by", 'pressroom'),
			"param_name" => "order_by",
			"value" => array(__("Title, menu order", 'pressroom') => "title,menu_order", __("Menu order", 'pressroom') => "menu_order", __("Date", 'pressroom') => "date", __("Post views", 'pressroom') => "views", __("Comment count", 'pressroom') => "comment_count", __("Random", 'pressroom') => "rand")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Order", 'pressroom'),
			"param_name" => "order",
			"value" => array( __("descending", 'pressroom') => "DESC", __("ascending", 'pressroom') => "ASC")
		),
		/*array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Visible items", 'pressroom'),
			"param_name" => "visible",
			"value" => 3,
			"description" => __("Number of visible items in carousel", 'pressroom')
		),*/
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show post title", 'renovate'),
			"param_name" => "show_post_title",
			"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show post excerpt", 'renovate'),
			"param_name" => "show_post_excerpt",
			"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Excerpt length", 'renovate'),
			"param_name" => "excerpt_length",
			"value" => 0,
			"description" => __("The excerpt length. Set 0 to use default WordPress excerpt length.", 'renovate'),
			"dependency" => Array('element' => "show_post_excerpt", 'value' => "1")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Read more button", 'pressroom'),
			"param_name" => "read_more",
			"value" => array(__("No", 'pressroom') => 0, __("Yes", 'pressroom') => 1)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show post categories", 'renovate'),
			"param_name" => "show_post_categories",
			"value" => array(__("No", 'renovate') => 0, __("Yes", 'renovate') => 1)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show post author", 'renovate'),
			"param_name" => "show_post_author",
			"value" => array(__("No", 'renovate') => 0, __("Yes", 'renovate') => 1)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show post date", 'renovate'),
			"param_name" => "show_post_date",
			"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Date format", 'renovate'),
			"param_name" => "date_format",
			"value" => array(__("Renovate", 'renovate') => 'renovate', __("From general settings", 'renovate') => 'general_settings'),
			"dependency" => Array('element' => "show_post_date", 'value' => "1")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show post views", 'renovate'),
			"param_name" => "show_post_views",
			"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Show comments number", 'renovate'),
			"param_name" => "show_post_comments",
			"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Autoplay", 'pressroom'),
			"param_name" => "autoplay",
			"value" => array(__("No", 'pressroom') => 0, __("Yes", 'pressroom') => 1)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Pause on hover", 'pressroom'),
			"param_name" => "pause_on_hover",
			"value" => array(__("Yes", 'pressroom') => 1, __("No", 'pressroom') => 0),
			"dependency" => Array('element' => "autoplay", 'value' => '1')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Scroll", 'pressroom'),
			"param_name" => "scroll",
			"value" => 1,
			"description" => __("Number of items to scroll in one step (max: 3)", 'pressroom')
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Scroll control (pagination)", 'pressroom'),
			"param_name" => "scroll_control",
			"value" => array(__("Yes", 'pressroom') => 1, __("No", 'pressroom') => 0)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Top margin", 'pressroom'),
			"param_name" => "top_margin",
			"value" => array(__("None", 'pressroom') => "none", __("Page (small)", 'pressroom') => "page-margin-top", __("Section (large)", 'pressroom') => "page-margin-top-section")
		)
	);
	vc_map( array(
		"name" => __("Post Carousel", 'pressroom'),
		"base" => "re_post_carousel",
		"class" => "",
		"controls" => "full",
		"show_settings_on_create" => true,
		"icon" => "icon-wpb-layer-carousel",
		"category" => __('Renovate', 'renovate'),
		"params" => $params
	));
}
add_action("init", "re_theme_post_carousel_vc_init");
?>
