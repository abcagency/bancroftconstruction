<?php
/*
Template Name: 404 page
*/
header("HTTP/1.1 404 Not Found");
header("Status: 404 Not Found");
get_header();
/*get page with 404 page template set*/
$not_found_template_page_array = get_pages(array(
	'post_type' => 'page',
	'post_status' => 'publish',
	'number' => 1,
	'meta_key' => '_wp_page_template',
	'meta_value' => '404.php'
));
$not_found_template_page = $not_found_template_page_array[0];
?>
<div class="theme-page padding-bottom-66">
	<div class="vc_row wpb_row vc_row-fluid gray full-width page-header vertical-align-table">
		<div class="vc_row wpb_row vc_inner vc_row-fluid full-width padding-top-bottom-50 vertical-align-cell">
			<div class="vc_row wpb_row vc_inner vc_row-fluid">
				<div class="page-header-left">
					<h1><?php echo $not_found_template_page->post_title; ?></h1>
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
								<?php echo $not_found_template_page->post_title; ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<?php
		echo wpb_js_remove_wpautop(apply_filters('the_content', $not_found_template_page->post_content));
		global $post;
		$post = $not_found_template_page;
		setup_postdata($post);
		?>
	</div>
</div>
<?php
get_footer(); 
?>
