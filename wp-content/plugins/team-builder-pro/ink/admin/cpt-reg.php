<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$labels = array(
				'name'                => _x( 'Team Builder Pro', 'Team Builder Pro', wpshopmart_team_pro_text_domain ),
				'singular_name'       => _x( 'Team Builder Pro', 'Team Builder Pro', wpshopmart_team_pro_text_domain ),
				'menu_name'           => __( 'Team Builder Pro', wpshopmart_team_pro_text_domain ),
				'parent_item_colon'   => __( 'Parent Item:', wpshopmart_team_pro_text_domain ),
				'all_items'           => __( 'All Team', wpshopmart_team_pro_text_domain ),
				'view_item'           => __( 'View Team', wpshopmart_team_pro_text_domain ),
				'add_new_item'        => __( 'Add New Team', wpshopmart_team_pro_text_domain ),
				'add_new'             => __( 'Add New Team', wpshopmart_team_pro_text_domain ),
				'edit_item'           => __( 'Edit Team', wpshopmart_team_pro_text_domain ),
				'update_item'         => __( 'Update Team', wpshopmart_team_pro_text_domain ),
				'search_items'        => __( 'Search Team', wpshopmart_team_pro_text_domain ),
				'not_found'           => __( 'No Team Found', wpshopmart_team_pro_text_domain ),
				'not_found_in_trash'  => __( 'No Team found in Trash', wpshopmart_team_pro_text_domain ),
			);
			$args = array(
				'label'               => __( 'Team Builder Pro', wpshopmart_team_pro_text_domain ),
				'description'         => __( 'Team Builder Pro', wpshopmart_team_pro_text_domain ),
				'labels'              => $labels,
				'supports'            => array( 'title', '', '', '', '', '', '', '', '', '', '', ),
				'hierarchical'        => false,
				'public'              => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => false,
				'show_in_admin_bar'   => false,
				'menu_position'       => 11,
				'menu_icon'           => 'dashicons-admin-users',
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				//'capability_type'     => 'page',
				//'capability_type'     => array('team_builder_pros','team_builder_pro'),
               //  'map_meta_cap'        => true,
				'publicly_queryable'  => false,
			);

			register_post_type( 'team_builder_pro', $args );
			
 ?>