<?php 
/*
Template Name: Blog
*/
get_header();
?>
<div class="theme-page padding-bottom-66">
	<div class="vc_row wpb_row vc_row-fluid gray full-width page-header vertical-align-table">
		<div class="vc_row wpb_row vc_inner vc_row-fluid full-width padding-top-bottom-50 vertical-align-cell">
			<div class="vc_row wpb_row vc_inner vc_row-fluid">
				<div class="page-header-left">
					<?php
					if(is_archive())
					{
						if(is_day())
							$archive_header = __("Daily archives: ", 'renovate') . get_the_date(); 
						else if(is_month())
							$archive_header = __("Monthly archives: ", 'renovate') . get_the_date('F, Y');
						else if(is_year())
							$archive_header = __("Yearly archives: ", 'renovate') . get_the_date('Y');
						else if(is_tag())
							$archive_header = single_tag_title("", false);
						else
							$archive_header = "Archives";
					}
					?>
					<h1><?php echo (is_category() || is_archive() ? (is_category() ? single_cat_title("", false) : $archive_header) : get_the_title());?></h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<label><?php _e("You Are Here:", 'renovate'); ?></label>
						<ul class="bread-crumb">
							<li>
								<a href="<?php echo get_home_url(); ?>" title="<?php esc_attr_e('Home', 'renovate'); ?>">
									<?php _e('HOME', 'renovate'); ?>
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								<?php echo (is_category() || is_archive() ? (is_category() ? single_cat_title("", false) : $archive_header) : get_the_title());?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<?php
		if(is_category() || is_archive())
		{
			/*get page with blog template set*/
			$post_template_page_array = get_pages(array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'number' => 1,
				'meta_key' => '_wp_page_template',
				'meta_value' => 'template-blog.php',
				'sort_order' => 'ASC',
				'sort_column' => 'menu_order',
			));
			if(count($post_template_page_array))
			{
				$post_template_page = $post_template_page_array[0];
				if(count($post_template_page_array) && isset($post_template_page))
				{
					echo wpb_js_remove_wpautop(apply_filters('the_content', $post_template_page->post_content));
					global $post;
					$post = $post_template_page;
					setup_postdata($post);
				}
				else
					echo wpb_js_remove_wpautop(apply_filters('the_content', '[vc_row top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="3/4"][blog re_pagination="1" items_per_page="6" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_excerpt="1" read_more="1" show_post_categories="1" show_post_author="1" show_post_date="1" show_post_views="1" show_post_comments="1" is_search_results="0" top_margin="none" date_format="renovate"][/vc_column][vc_column type="re-smart-column" top_margin="none" width="1/4"][call_to_action_box title="COST CALCULATOR" icon="wallet" button_label="REQUEST A QUOTE" button_url="#" top_margin="none"]Use our form to estimate the initial cost of renovation or installation.[/call_to_action_box][box_header title="Latest Posts" type="h6" bottom_border="1" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_date="1" top_margin="none" el_class="margin-top-30" show_post_views="0"][box_header title="Most Viewed" type="h6" bottom_border="1" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="views" order="DESC" show_post_title="1" show_post_date="0" top_margin="none" el_class="margin-top-30" show_post_views="1"][box_header title="Text Widget" type="h6" bottom_border="1" top_margin="page-margin-top"][vc_wp_text el_class="margin-top-24"]Here is a text widget settings ipsum lore tora dolor sit amet velum. Maecenas est velum, gravida <a href="#">Vehicula Dolor</a>[/vc_wp_text][vc_wp_categories options="" el_class="page-margin-top clearfix" title="Categories"][vc_wp_archives options="count" title="Archives" el_class="page-margin-top full-width clearfix"][vc_wp_tagcloud taxonomy="post_tag" title="Tags" el_class="page-margin-top clearfix"][/vc_column][/vc_row]'));
			}
			else
			{
				if(function_exists("vc_map"))
					echo wpb_js_remove_wpautop(apply_filters('the_content', '[vc_row top_margin="none" el_class="margin-top-70"][vc_column type="" top_margin="none" width="3/4"][blog re_pagination="1" items_per_page="6" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_excerpt="1" read_more="1" show_post_categories="1" show_post_author="1" show_post_date="1" show_post_views="1" show_post_comments="1" is_search_results="0" top_margin="none" date_format="renovate"][/vc_column][vc_column type="re-smart-column" top_margin="none" width="1/4"][call_to_action_box title="COST CALCULATOR" icon="wallet" button_label="REQUEST A QUOTE" button_url="#" top_margin="none"]Use our form to estimate the initial cost of renovation or installation.[/call_to_action_box][box_header title="Latest Posts" type="h6" bottom_border="1" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="date" order="DESC" show_post_title="1" show_post_date="1" top_margin="none" el_class="margin-top-30" show_post_views="0"][box_header title="Most Viewed" type="h6" bottom_border="1" top_margin="page-margin-top"][blog_small re_pagination="0" items_per_page="3" offset="0" featured_image_size="default" ids="-" category="-" author="-" order_by="views" order="DESC" show_post_title="1" show_post_date="0" top_margin="none" el_class="margin-top-30" show_post_views="1"][box_header title="Text Widget" type="h6" bottom_border="1" top_margin="page-margin-top"][vc_wp_text el_class="margin-top-24"]Here is a text widget settings ipsum lore tora dolor sit amet velum. Maecenas est velum, gravida <a href="#">Vehicula Dolor</a>[/vc_wp_text][vc_wp_categories options="" el_class="page-margin-top clearfix" title="Categories"][vc_wp_archives options="count" title="Archives" el_class="page-margin-top full-width clearfix"][vc_wp_tagcloud taxonomy="post_tag" title="Tags" el_class="page-margin-top clearfix"][/vc_column][/vc_row]'));
			}
		}
		else
		{
			if(have_posts()) : while (have_posts()) : the_post();
				the_content();
			endwhile; endif;
		}
		?>
	</div>
</div>
<?php
get_footer(); 
?>