<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
function wpsm_team_pro_page_front_script() {
	wp_enqueue_style('wpsm_team_b-font-awesome-front', wpshopmart_team_pro_directory_url.'assets/css/font-awesome/css/font-awesome.css');
}

add_action( 'wp_enqueue_scripts', 'wpsm_team_pro_page_front_script' );
add_filter( 'widget_text', 'do_shortcode');

add_action('media_buttons_context', 'wpsm_teambuilder_pro_design');
add_action('admin_footer', 'wpsm_teambuilder_editor_popup_content');
add_action('admin_footer', 'wpsm_teambuilder_form_editor_popup_content');

function wpsm_teambuilder_pro_design($context) {
 $img = wpshopmart_team_pro_directory_url.'assets/images/icon.png';
  $container_id = 'teambuilder_D';
  $title = 'Select Team to insert into post';
  $context .= '<style>.wpsm_team_shortcode_button {
				background: #673AB7 !important;
				border-color: #673AB7 #673AB7 #673AB7 !important;
				-webkit-box-shadow: 0 1px 0 #673AB7 !important;
				box-shadow: 0 1px 0 #673AB7 !important;
				color: #fff;
				text-decoration: none;
				text-shadow: 0 -1px 1px #673AB7 ,1px 0 1px #673AB7,0 1px 1px #673AB7,-1px 0 1px #673AB7 !important;
			    }</style>
			    <a class="button button-primary wpsm_team_shortcode_button thickbox" title="Select Team to insert into post"    href="#TB_inline?width=400&inlineId='.$container_id.'">
					<span class="dashicons dashicons-admin-users" style="background: url('.$img.'); background-repeat: no-repeat; background-position: left bottom;padding-top: 5px;"></span>
				Team Builder Pro Shortcode
				</a>';
  return $context;
}



function wpsm_teambuilder_editor_popup_content() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#wpsm_team_builder_insert').on('click', function() {
			var id = jQuery('#wpsm_team_builder_insertselect option:selected').val();
			window.send_to_editor('<p>[WPSM_TEAMPRO  id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
<style>
.wpsm_team_shortcode_button {
    background: #673AB7; !important;
    border-color: #673AB7; #673AB7 #673AB7 !important;
    -webkit-box-shadow: 0 1px 0 #673AB7 !important;
    box-shadow: 0 1px 0 #673AB7 !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: 0 -1px 1px #673AB7 ,1px 0 1px #673AB7,0 1px 1px #673AB7,-1px 0 1px #673AB7 !important;
}
</style>
	<div id="teambuilder_D" style="display:none;">
	  <h3>Select Team To Insert Into Post</h3>
	  <?php 
		
		$all_posts = wp_count_posts('team_builder_pro')->publish;
		$args = array('post_type' => 'team_builder_pro', 'posts_per_page' =>$all_posts);
		global $All_rac;
		$All_rac = new WP_Query( $args );			
		if( $All_rac->have_posts() ) { ?>	
			<select id="wpsm_team_builder_insertselect" style="width: 100%;margin-bottom: 20px;">
				<?php
				while ( $All_rac->have_posts() ) : $All_rac->the_post(); ?>
				<?php $title = get_the_title(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php if (strlen($title) == 0) echo 'No Title Found'; else echo $title;   ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary wpsm_team_shortcode_button' id='wpsm_team_builder_insert'><?php _e('Insert Team Shortcode', wpshopmart_team_pro_text_domain); ?></button>
			<?php
		} else {
			_e('No Teams Found', wpshopmart_team_pro_text_domain);
		}
		?>
	</div>
	<?php
}



function wpsm_teambuilder_form_editor_popup_content() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#wpsm_teambuilder_pro_form_insert').on('click', function() {
			var id = jQuery('#wpsm_teambuilder_pro_form_insertselect option:selected').val();
			window.send_to_editor('<p>[teambuilder_FORM id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
<style>
.wpsm_team_shortcode_button {
    background: #673AB7; !important;
    border-color: #673AB7; #673AB7 #673AB7 !important;
    -webkit-box-shadow: 0 1px 0 #673AB7 !important;
    box-shadow: 0 1px 0 #673AB7 !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: 0 -1px 1px #673AB7 ,1px 0 1px #673AB7,0 1px 1px #673AB7,-1px 0 1px #673AB7 !important;
}
</style>
	<div id="teambuilder_F" style="display:none;">
	  <h3>Select Team Form To Insert Into Post</h3>
	  <?php 
		
		$all_posts = wp_count_posts('team_builder_pro')->publish;
		$args = array('post_type' => 'team_builder_pro', 'posts_per_page' =>$all_posts);
		global $All_rac;
		$All_rac = new WP_Query( $args );			
		if( $All_rac->have_posts() ) { ?>	
			<select id="wpsm_teambuilder_pro_form_insertselect" style="width: 100%;margin-bottom: 20px;">
				<?php
				while ( $All_rac->have_posts() ) : $All_rac->the_post(); ?>
				<?php $title = get_the_title(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php if (strlen($title) == 0) echo 'No Title Found'; else echo $title;   ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary wpsm_team_shortcode_button' id='wpsm_teambuilder_pro_form_insert'><?php _e('Insert Team Form Shortcode', wpshopmart_team_pro_text_domain); ?></button>
			<?php
		} else {
			_e('No Teams Found', wpshopmart_team_pro_text_domain);
		}
		?>
	</div>
	<?php
}
?>