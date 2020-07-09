<?php
/*
Plugin Name: Renovate Projects
Plugin URI: http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs
Description: Renovate Theme Projects Plugin
Author: QuanticaLabs
Author URI: http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs
Version: 1.1
*/

//custom post type - projects
function re_projects_init()
{
	$labels = array(
		'name' => _x('Projects', 'post type general name', 'renovate'),
		'singular_name' => _x('Project', 'post type singular name', 'renovate'),
		'add_new' => _x('Add New', 're_sidebar', 'renovate'),
		'add_new_item' => __('Add New Project', 'renovate'),
		'edit_item' => __('Edit Project', 'renovate'),
		'new_item' => __('New Project', 'renovate'),
		'all_items' => __('Projects', 'renovate'),
		'view_item' => __('View Project', 'renovate'),
		'search_items' => __('Search Projects', 'renovate'),
		'not_found' =>  __('No projects found', 'renovate'),
		'not_found_in_trash' => __('No projects found in Trash', 'renovate'), 
		'parent_item_colon' => '',
		'menu_name' => __("Projects", 'renovate')
	);
	
	$args = array(  
		"labels" => $labels, 
		"public" => true,  
		"show_ui" => true,  
		"capability_type" => "post",
		"menu_position" => 20,
		"hierarchical" => false,  
		"rewrite" => array("slug" => "projects"),
		"supports" => array("title", "editor", "excerpt", "thumbnail", "page-attributes") 
	);
	register_post_type("re_projects", $args);
	register_taxonomy("re_projects_category", array("re_projects"), array("label" => "Categories", "singular_label" => "Category", "rewrite" => true));
}  
add_action("init", "re_projects_init"); 

//custom sidebars items list
function renovate_projects_edit_columns($columns)
{
	$columns = array(  
		"cb" => "<input type=\"checkbox\" />",  
		"title" => _x('Project name', 'post type singular name', 'renovate'),
		"re_projects_category" => __('Categories', 'renovate'),
		"order" =>  _x('Order', 'post type singular name', 'renovate'),
		"date" => __('Date', 'renovate')
	);    

	return $columns;  
}  
add_filter("manage_edit-re_projects_columns", "renovate_projects_edit_columns");

function manage_renovate_projects_posts_custom_column($column)
{
	global $post;
	switch($column)
	{
		case "re_projects_category":
			echo get_the_term_list($post->ID, "re_projects_category", '', ', ','');
			break;
		case "order":
			echo get_post($post->ID)->menu_order;
			break;
	}
}
add_action("manage_re_projects_posts_custom_column", "manage_renovate_projects_posts_custom_column");

// Register the column as sortable
function renovate_projects_sortable_columns($columns) 
{
    $columns = array(
		"title" => "title",
		"order" => "order",
		"date" => "date"
	);

    return $columns;
}
add_filter("manage_edit-re_projects_sortable_columns", "renovate_projects_sortable_columns");

function re_projects_shortcode($atts)
{
	extract(shortcode_atts(array(
		"items_per_page" => "-1",
		"category" => "",
		"ids" => "",
		"order_by" => "title,menu_order",
		"order" => "ASC",
		"type" => "list",
		"all_label" => __("All Projects", 'renovate'),
		"headers" => 1,
		"read_more" => 1,
		"read_more_label" => __("VIEW PROJECT", 'renovate'),
		"top_margin" => "page-margin-top" 
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
	query_posts(array(
		'post__in' => $ids,
		'post_type' => 're_projects',
		'posts_per_page' => $items_per_page,
		'post_status' => 'publish',
		're_projects_category' => implode(",", $category),
		'orderby' => implode(" ", explode(",", $order_by)),
		'order' => $order
	));
	
	
	$output = "";
	if(have_posts())
	{
		if($type=="isotope")
		{
			$categories_count = count($category);
			$output .= '<div class="clearfix gray small"><ul class="ui-tabs-nav isotope-filters margin-top-70">';
			if($all_label!="")
				$output .= '<li>
						<a class="selected" href="#filter-*" title="' . ($all_label!='' ? esc_attr($all_label) : '') . '">' . ($all_label!='' ? $all_label : '') . '</a>
					</li>';
			for($i=0; $i<$categories_count; $i++)
			{
				$term = get_term_by('slug', $category[$i], "re_projects_category");
				$output .= '<li>
						<a href="#filter-' . trim($category[$i]) . '" title="' . esc_attr($term->name) . '">' . $term->name . '</a>
					</li>';
			}
			$output .= '</ul>';
		}
		$output .= '<ul class="projects-list clearfix' . ($type=="isotope" ? ' isotope' : '') . ($top_margin!="none" ? ' ' . $top_margin : '') . '">';
		while(have_posts()): the_post();
			if($type=="isotope")
			{
				$categories = array_filter((array)get_the_terms(get_the_ID(), "re_projects_category"));
				$categories_count = count($categories);
				$categories_string = "";
				$i = 0;
				foreach($categories as $category)
				{
					$categories_string .= urldecode($category->slug) . ($i+1<$categories_count ? ' ' : '');
					$i++;
				}
			}
			$output .= '<li' . ($type=="isotope" ? ' class="' . $categories_string . '"' : '') . '>
			<a href="' . get_permalink() . '" title="' . esc_attr(get_the_title()) . '">
				' . get_the_post_thumbnail(get_the_ID(), ($type=="isotope" ? "small" : "big") . "-thumb" , array("alt" => get_the_title(), "title" => "")) . '
			</a>';
			if((int)$headers || (int)$read_more)
			{
				$output .= '<div class="view align-center">
					<div class="vertical-align-table">
						<div class="vertical-align-cell">';
				if((int)$headers)
					$output .= '<p class="description">' . get_the_title() . '</p>';
				if((int)$read_more)
					$output .= '<a class="more simple" href="' . get_permalink() . '" title="' . esc_attr($read_more_label) . '">' . $read_more_label . '</a>';
				$output .= '</div>
					</div>
				</div>';
			}
		endwhile;
		$output .= '</ul>';
		if($type=="isotope")
			$output .= '</div>';
	}
	//Reset Query
	wp_reset_query();
	return $output;
}
add_shortcode("re_projects", "re_projects_shortcode");

//visual composer
function re_projects_vc_init()
{
	if(is_plugin_active("js_composer/js_composer.php") && function_exists('vc_map'))
	{
		//get projects list
		$projects_list = get_posts(array(
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
			'post_type' => 're_projects'
		));
		$projects_array = array();
		$projects_array[__("All", 'renovate')] = "-";
		foreach($projects_list as $project)
			$projects_array[$project->post_title . " (id:" . $project->ID . ")"] = $project->ID;
			
		//get projects categories list
		$projects_categories = get_terms("re_projects_category");
		$projects_categories_array = array();
		$projects_categories_array[__("All", 'renovate')] = "-";
		foreach($projects_categories as $projects_category)
			$projects_categories_array[$projects_category->name] =  $projects_category->slug;

		vc_map( array(
			"name" => __("Projects list", 'renovate'),
			"base" => "re_projects",
			"class" => "",
			"controls" => "full",
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-layer-custom-post-type-list",
			"category" => __('Renovate', 'renovate'),
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Items per page/Post count", 'renovate'),
					"param_name" => "items_per_page",
					"value" => -1,
					"description" => __("Set -1 to display all.", 'renovate')
				),
				array(
					"type" => "dropdownmulti",
					"class" => "",
					"heading" => __("Display selected", 'renovate'),
					"param_name" => "ids",
					"value" => $projects_array
				),
				array(
					"type" => "dropdownmulti",
					"class" => "",
					"heading" => __("Display from Category", 'medicenter'),
					"param_name" => "category",
					"value" => $projects_categories_array
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Order by", 'renovate'),
					"param_name" => "order_by",
					"value" => array(__("Title, menu order", 'renovate') => "title,menu_order", __("Menu order", 'renovate') => "menu_order", __("Date", 'renovate') => "date", __("Random", 'renovate') => "rand")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Order", 'renovate'),
					"param_name" => "order",
					"value" => array(__("ascending", 'renovate') => "ASC", __("descending", 'renovate') => "DESC")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Type", 'renovate'),
					"param_name" => "type",
					"value" => array(__("list", 'renovate') => "list", __("isotope", 'renovate') => "isotope")
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("All filter label", 'renovate'),
					"param_name" => "all_label",
					"value" => __("All Projects", 'renovate'),
					"dependency" => Array('element' => "type", 'value' => "isotope")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Headers", 'renovate'),
					"param_name" => "headers",
					"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Read more button", 'renovate'),
					"param_name" => "read_more",
					"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Read more button label", 'renovate'),
					"param_name" => "read_more_label",
					"value" => __("VIEW PROJECT", 'renovate'),
					"dependency" => Array('element' => "read_more", 'value' => "1")
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
	}
}
add_action("init", "re_projects_vc_init"); 
?>