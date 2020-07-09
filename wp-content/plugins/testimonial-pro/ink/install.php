<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
function wpsm_testi_b_front_script() {
	wp_enqueue_style('wpsm_team_b-font-awesome-front', wpshopmart_testi_pro_directory_url.'assets/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('wpsm_team_b_bootstrap-front', wpshopmart_testi_pro_directory_url.'assets/css/bootstrap-front.css');
}

add_action( 'wp_enqueue_scripts', 'wpsm_testi_b_front_script' );
add_filter( 'widget_text', 'do_shortcode');

add_action('media_buttons_context', 'wpsm_testimonial_design');
add_action('media_buttons_context', 'wpsm_testimonial_form');
add_action('admin_footer', 'testimonial_editor_popup_content');
add_action('admin_footer', 'testimonial_form_editor_popup_content');

function wpsm_testimonial_design($context) {
 $img = wpshopmart_testi_pro_directory_url.'assets/images/icon.png';
  $container_id = 'testimonial_D';
  $title = 'Select Testimonial to insert into post';
  $context .= '<style>.wp_team_b_shortcode_button {
				background: #11CAA5 !important;
				border-color: #11CAA5 #11CAA5 #11CAA5 !important;
				-webkit-box-shadow: 0 1px 0 #11CAA5 !important;
				box-shadow: 0 1px 0 #11CAA5 !important;
				color: #fff;
				text-decoration: none;
				text-shadow: 0 -1px 1px #11CAA5 ,1px 0 1px #11CAA5,0 1px 1px #11CAA5,-1px 0 1px #11CAA5 !important;
			    }</style>
			    <a class="button button-primary wp_team_b_shortcode_button thickbox" title="Select Testimonial to insert into post"    href="#TB_inline?width=400&inlineId='.$container_id.'">
					<span class="dashicons dashicons-format-status" style="background: url('.$img.'); background-repeat: no-repeat; background-position: left bottom;padding-top: 5px;"></span>
				Testimonial Builder Pro Shortcode
				</a>';
  return $context;
}

function wpsm_testimonial_form($context) {
 $img = wpshopmart_testi_pro_directory_url.'assets/images/icon.png';
  $container_id = 'testimonial_F';
  $title = 'Select Team Group to insert into post';
  $context .= '<style>.wp_team_b_shortcode_button {
				background: #11CAA5 !important;
				border-color: #11CAA5 #11CAA5 #11CAA5 !important;
				-webkit-box-shadow: 0 1px 0 #11CAA5 !important;
				box-shadow: 0 1px 0 #11CAA5 !important;
				color: #fff;
				text-decoration: none;
				text-shadow: 0 -1px 1px #11CAA5 ,1px 0 1px #11CAA5,0 1px 1px #11CAA5,-1px 0 1px #11CAA5 !important;
			    }</style>
			    <a class="button button-primary wp_team_b_shortcode_button thickbox" title="Select Testimonial Form to insert into post"    href="#TB_inline?width=400&inlineId='.$container_id.'">
					<span class="dashicons dashicons-book" style="background: url('.$img.'); background-repeat: no-repeat; background-position: left bottom;padding-top: 5px;"></span>
				Testimonial Builder Form Shortcode
				</a>';
  return $context;
}

function testimonial_editor_popup_content() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#wpsm_team_b_insert').on('click', function() {
			var id = jQuery('#wpsm_team_b_insertselect option:selected').val();
			window.send_to_editor('<p>[TESTIMONIAL_PRO id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
<style>
.wp_team_b_shortcode_button {
    background: #11CAA5; !important;
    border-color: #11CAA5; #11CAA5 #11CAA5 !important;
    -webkit-box-shadow: 0 1px 0 #11CAA5 !important;
    box-shadow: 0 1px 0 #11CAA5 !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: 0 -1px 1px #11CAA5 ,1px 0 1px #11CAA5,0 1px 1px #11CAA5,-1px 0 1px #11CAA5 !important;
}
</style>
	<div id="testimonial_D" style="display:none;">
	  <h3>Select Testimonial To Insert Into Post</h3>
	  <?php 
		
		$all_posts = wp_count_posts('testi_builder_pro')->publish;
		$args = array('post_type' => 'testi_builder_pro', 'posts_per_page' =>$all_posts);
		global $All_rac;
		$All_rac = new WP_Query( $args );			
		if( $All_rac->have_posts() ) { ?>	
			<select id="wpsm_team_b_insertselect" style="width: 100%;margin-bottom: 20px;">
				<?php
				while ( $All_rac->have_posts() ) : $All_rac->the_post(); ?>
				<?php $title = get_the_title(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php if (strlen($title) == 0) echo 'No Title Found'; else echo $title;   ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary wp_team_b_shortcode_button' id='wpsm_team_b_insert'><?php _e('Insert Testimonial Shortcode', wpshopmart_testi_pro_text_domain); ?></button>
			<?php
		} else {
			_e('No Teams Found', wpshopmart_testi_pro_text_domain);
		}
		?>
	</div>
	<?php
}



function testimonial_form_editor_popup_content() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#wpsm_testimonial_form_insert').on('click', function() {
			var id = jQuery('#wpsm_testimonial_form_insertselect option:selected').val();
			window.send_to_editor('<p>[TESTIMONIAL_FORM id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
<style>
.wp_team_b_shortcode_button {
    background: #11CAA5; !important;
    border-color: #11CAA5; #11CAA5 #11CAA5 !important;
    -webkit-box-shadow: 0 1px 0 #11CAA5 !important;
    box-shadow: 0 1px 0 #11CAA5 !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: 0 -1px 1px #11CAA5 ,1px 0 1px #11CAA5,0 1px 1px #11CAA5,-1px 0 1px #11CAA5 !important;
}
</style>
	<div id="testimonial_F" style="display:none;">
	  <h3>Select Testimonial Form To Insert Into Post</h3>
	  <?php 
		
		$all_posts = wp_count_posts('testi_builder_pro')->publish;
		$args = array('post_type' => 'testi_builder_pro', 'posts_per_page' =>$all_posts);
		global $All_rac;
		$All_rac = new WP_Query( $args );			
		if( $All_rac->have_posts() ) { ?>	
			<select id="wpsm_testimonial_form_insertselect" style="width: 100%;margin-bottom: 20px;">
				<?php
				while ( $All_rac->have_posts() ) : $All_rac->the_post(); ?>
				<?php $title = get_the_title(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php if (strlen($title) == 0) echo 'No Title Found'; else echo $title;   ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary wp_team_b_shortcode_button' id='wpsm_testimonial_form_insert'><?php _e('Insert Testimonial Form Shortcode', wpshopmart_testi_pro_text_domain); ?></button>
			<?php
		} else {
			_e('No Teams Found', wpshopmart_testi_pro_text_domain);
		}
		?>
	</div>
	<?php
}
?>