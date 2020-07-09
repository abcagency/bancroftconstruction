<?php
/*
 if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div style=" overflow: hidden;padding: 10px;">
	<div class="wpsm_site_sidebar_widget_title">
		<h4>Add Label For Form Submission</h4>
	</div>
	<input type="hidden" name="testi_save_form_label_action" value="testi_save_form_label_action" />
				<?php 
				global $wpdb;
				global $post_id;
				//global $sbm_post_id;
				//echo $sbm_post_id;
				
				$mylink = $wpdb->get_results( "SELECT * FROM wp_form_data WHERE  post_id='$post_id' ");
				
				$label_Meta_Settings = unserialize(get_post_meta( $post->ID, 'label_Meta_Settings', true));
					
						$label_image  = $label_Meta_Settings['label_image'];
						$label_name  = $label_Meta_Settings['label_name'];
						$label_email  = $label_Meta_Settings['label_email'];
						$label_webname  = $label_Meta_Settings['label_webname'];
						$label_website  = $label_Meta_Settings['label_website'];
						$label_posi  = $label_Meta_Settings['label_posi'];
						$label_rating  = $label_Meta_Settings['label_rating'];
						$label_descrp  = $label_Meta_Settings['label_descrp'];
						$btn_label  = $label_Meta_Settings['btn_label'];
						//$label_rating  = $label_Meta_Settings['label_rating'];
						
						$paypal_id = $wpdb->get_var("select id from wp_form_data where post_id = '$post_id' ");
						print_r($paypal_id);
						echo $paypal_id ;
						?>
			
					<span class="tm_label"><?php _e('Author Image Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_image" value="<?php echo $label_image; ?>" placeholder="Enter Testimonial Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Author Name Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_name" value="<?php echo $label_name; ?>" placeholder="Enter Testimonial Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Author Email Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_email" value="<?php echo $label_email; ?>" placeholder="Enter Your Email Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Author Webname Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_webname" value="<?php echo $label_webname; ?>" placeholder="Enter Your Website Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Author Website URL Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_website" value="<?php echo $label_website; ?>" placeholder="Enter website url with http:// ex : http://wpshopmart.com/" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Author Position Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_posi" value="<?php echo $label_posi; ?>" placeholder="Enter Your Position Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Author Ratings Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_rating" value="<?php echo $label_rating; ?>" placeholder="Enter Your Position Here" class="wpsm_tm_label_text">
				
					<span class="tm_label"><?php _e('Author Testimonial Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="label_descrp" value="<?php echo $label_descrp; ?>" placeholder="Enter Your Position Here" class="wpsm_tm_label_text">
								
					<span class="tm_label"><?php _e('Submit Button Label',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="btn_label" value="<?php echo $btn_label; ?>" placeholder="Enter Your Position Here" class="wpsm_tm_label_text">
					
	
					<div class="wpsm_site_sidebar_widget_title">
						<h4>Update Form Submission</h4>
					</div>
					<?php global $wpdb;
					  $table_name = "wp_form_data";
					  $result=$wpdb->get_results ("SELECT * FROM $table_name");
					  print_r($result);
					  foreach ( $result as $print )
					  {
						  ?>
					<span class="tm_label"><?php _e($label_name,wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_name" id="cs_name" value="<?php echo $print->nam;?>" placeholder="Enter Testimonial Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e($label_email,wpshopmart_testi_pro_text_domain); ?></span>
					<input type="email"  name="cs_email" id="cs_email" value="<?php echo $print->email;?>" placeholder="Enter Your Email Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e($label_webname,wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_webname"  id="cs_webname" value="" placeholder="Enter Your Website Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e($label_website,wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_website" id="cs_website" value="" placeholder="Enter website url with http:// ex : http://wpshopmart.com/" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e($label_posi,wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_posi" id="cs_posi" value="" placeholder="Enter Your Position Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e($label_rating,wpshopmart_testi_pro_text_domain); ?></span>
					<input id="cs_rating" name="cs_rating" class="rating" value="" data-stars="5" data-step="0.1" title=""/>
				
					<span class="tm_label"><?php _e($label_descrp ,wpshopmart_testi_pro_text_domain); ?></span>
					<textarea  name="cs_desc" id="cs_desc" placeholder="Enter Testimonial Content Here" class="wpsm_tm_label_text"></textarea>
					
					<input type="submit" id="submit" name="submit" value="<?php echo $btn_label;?>" class="btn btn-danger">
					  <?php }?>			
		</div>	

	<div style="clear:left;"></div>

	<?php

	*/
	?>