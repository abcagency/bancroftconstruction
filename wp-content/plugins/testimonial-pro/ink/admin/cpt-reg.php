<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$labels = array(
				'name'                => _x( 'Testimonial Builder Pro', 'Testimonial Builder Pro', wpshopmart_testi_pro_text_domain ),
				'singular_name'       => _x( 'Testimonial Builder Pro', 'Testimonial Builder Pro', wpshopmart_testi_pro_text_domain ),
				'menu_name'           => __( 'Testimonial Builder Pro', wpshopmart_testi_pro_text_domain ),
				'parent_item_colon'   => __( 'Parent Item:', wpshopmart_testi_pro_text_domain ),
				'all_items'           => __( 'All Testimonial', wpshopmart_testi_pro_text_domain ),
				'view_item'           => __( 'View Testimonial', wpshopmart_testi_pro_text_domain ),
				'add_new_item'        => __( 'Add New Testimonial', wpshopmart_testi_pro_text_domain ),
				'add_new'             => __( 'Add New Testimonial', wpshopmart_testi_pro_text_domain ),
				'edit_item'           => __( 'Edit Testimonial', wpshopmart_testi_pro_text_domain ),
				'update_item'         => __( 'Update Testimonial', wpshopmart_testi_pro_text_domain ),
				'search_items'        => __( 'Search Testimonial', wpshopmart_testi_pro_text_domain ),
				'not_found'           => __( 'No Testimonial Found', wpshopmart_testi_pro_text_domain ),
				'not_found_in_trash'  => __( 'No Testimonial found in Trash', wpshopmart_testi_pro_text_domain ),
			);
			$args = array(
				'label'               => __( 'Testimonial Builder Pro', wpshopmart_testi_pro_text_domain ),
				'description'         => __( 'Testimonial Builder Pro', wpshopmart_testi_pro_text_domain ),
				'labels'              => $labels,
				'supports'            => array( 'title', '', '', '', '', '', '', '', '', '', '', ),
				'hierarchical'        => false,
				'public'              => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => false,
				'show_in_admin_bar'   => false,
				'menu_position'       => 5,
				'menu_icon'           => 'dashicons-format-status',
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				//'capability_type'     => 'page',
				//'capability_type'     => array('testi_builder_pros','testi_builder_pro'),
               //  'map_meta_cap'        => true,
				'publicly_queryable'  => false,
			);

			register_post_type( 'testi_builder_pro', $args );
			
 ?>