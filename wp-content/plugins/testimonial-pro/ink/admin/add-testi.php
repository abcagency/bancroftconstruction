<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div style=" overflow: hidden;padding: 10px;">
	<div class="wpsm_site_sidebar_widget_title">
		<h4>Add Testimonial</h2>
	</div>
	<input type="hidden" name="testi_pro_save_data_action" value="testi_pro_save_data_action" />
	<?php		
			$i=1;
			$all_category = get_option('testi_pro_filter_categories');
			$All_data = unserialize(get_post_meta( $post->ID, 'wpsm_testi_pro_data', true));
			$TotalCount =  get_post_meta( $post->ID, 'wpsm_testi_pro_count', true );
			$wpsm_testi_pro_section_title =  get_post_meta( $post->ID, 'wpsm_testi_pro_section_title', true );
			$drp_des=unserialize(get_post_meta(get_the_ID(),'filter_category_info',true));
			?>
	<input type="text" name="Testimonial_pro_section_name" placeholder="Enter Your Testimonial Section name" style="padding: 10px;width: 100%;" value="<?php echo $wpsm_testi_pro_section_title;?>" />
	<ul class="clearfix" id="wpsm_test_panel">
			<?php
			
			if($TotalCount) 
			{
				if($TotalCount!=-1)
				{

					$update_id=1;
					foreach($All_data as $single_data)
					{
						 $cs_photo = $single_data['cs_photo'];
						 $cs_name = $single_data['cs_name'];
						 $cs_email = $single_data['cs_email'];
						 $cs_webname = $single_data['cs_webname'];
						 $cs_posi = $single_data['cs_posi'];
						 $cs_website = $single_data['cs_website'];
						 $cs_desc = $single_data['cs_desc'];
						 $cs_rating = $single_data['cs_rating'];
						 $cs_id = $single_data['cs_id'];
						 $cs_fcategory = $single_data['filter_category'];
						 $cs_status=$single_data['cs_status'];					

					?>	
		<li class="wpsm_tm-panel single_color_box" >

			<div class="col-md-8">
				<div class="col-md-3">
					<img style="margin-bottom:15px; margin-left:-5px;" class="test-img-responsive" src="<?php echo $cs_photo; ?>" />
					<input style="margin-bottom:15px; max-width:110px;" type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload btn-block"  onclick="wpsm_media_upload(this)"/>
					<input style="display:block;width:100%" type="hidden"  name="cs_photo[]" class="wpsm_tm_label_text"  value="<?php echo $cs_photo; ?>"  readonly="readonly" placeholder="No Media Selected" />
					<input style="display:block;width:100%" type="hidden"  name="cs_id[]" class="wpsm_tm_label_text"  value="<?php echo $cs_id; ?>"  readonly="readonly" placeholder="No Media Selected" />
					
				<div class="form-group">	<!--<label>Status</label>-->
					<select name="cs_status[]">
					<option value="1" <?php if($cs_status==1) {	echo "selected";}?>>Approved</option>
					<option value="0" <?php if($cs_status==0) {	echo "selected";}?>>Pending</option>	
					</select></div>
				</div>
				<div class="col-md-9">
					<span class="tm_label"><?php _e('Your Name',wpshopmart_testi_pro_text_domain); ?>

					</span>
					<input type="text"  name="cs_name[]" value="<?php echo $cs_name; ?>" placeholder="Enter Testimonial Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Your Email',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="email"  name="cs_email[]" value="<?php echo $cs_email; ?>" placeholder="Enter Your Email Here" class="wpsm_tm_label_text">
					
					
					
					

					<span class="tm_label"><?php _e('Ratings',wpshopmart_testi_pro_text_domain); ?></span>
					<input id="cs_rating[]" name="cs_rating[]" class="rating" value="<?php echo $cs_rating; ?>" data-stars="5" data-step="0.1" title=""/>
				
					<span class="tm_label"><?php _e('Testimonial Content',wpshopmart_testi_pro_text_domain); ?></span>
					<textarea  name="cs_desc[]"  placeholder="Enter Testimonial Content Here" class="wpsm_tm_label_text"><?php echo esc_html($cs_desc); ?></textarea>
			
					<input style="display:block;width:100%" type="hidden"  name="value_hide[]" class="wpsm_tm_label_text" value="<?php echo $k;?>"  readonly="readonly" placeholder="No Media Selected" />
					
					
				</div>
			</div>
			<div class="col-md-4">
				
  <span class="tm_label"><?php _e('Website Name',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_webname[]" value="<?php echo $cs_webname; ?>" placeholder="Enter Your Website Name Here" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Website URL',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_website[]" value="<?php echo $cs_website; ?>" placeholder="Enter website url with http:// ex : http://wpshopmart.com/" class="wpsm_tm_label_text">
					
					<span class="tm_label"><?php _e('Designation',wpshopmart_testi_pro_text_domain); ?></span>
					<input type="text"  name="cs_posi[]" value="<?php echo $cs_posi; ?>" placeholder="Enter Your Designation Here" class="wpsm_tm_label_text">

					<span class="tm_label"><?php _e('Add Filter Category',wpshopmart_testi_pro_text_domain); ?></span>
					      <select class="append_filter_categoy wpsm_tm_label_text" name="cs_categoryfilter<?php echo $update_id-1;?>[]" multiple>
      <option value="">Select Designation</option>
      <?php
      $m=1;
      foreach ($drp_des as $option) {
      $exp=explode("_",strtolower($cs_fcategory));
    if(in_array(strtolower($option['filter_category']),$exp))
    {
    ?>
    <option class="option_id<?php echo $m;?>" value="<?php echo $option['filter_category'];?>" selected><?php echo $option['filter_category'];?></option>
    <?php
    }
  else
    {
    ?>
    <option class="option_id<?php echo $m;?>" value="<?php echo $option['filter_category'];?>"><?php echo $option['filter_category'];?></option>
  <?php
  } 
  $m++;
  }
  ?>
  </select>
					<a class="remove_button" href="#delete" id="remove_bt" ><i class="fa fa-trash-o"></i></a>
			</div>

		</li>
				<?php 
				$update_id++;
				$i++;
			} // end of foreach
		}
		else{
		echo "<h2>No Tabs Found</h2>";
		}
		?>

		<?php
	}
	else{
	for($i=1; $i<=3; $i++)
			  {
				  ?>
				<li class="wpsm_tm-panel single_color_box" >
					<div class="col-md-8">
						<div class="col-md-3">
							<img style="margin-bottom:15px;" class="test-img-responsive" src="<?php echo wpshopmart_testi_pro_directory_url.'assets/images/user5.png'; ?>" />
							<input style="margin-bottom:15px; max-width:110px;" type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload btn-block"  onclick="wpsm_media_upload(this)"/>
							<input style="display:block;width:100%" type="hidden"  name="cs_photo[]" class="wpsm_tm_label_text"  value="<?php echo wpshopmart_testi_pro_directory_url.'assets/images/user5.png'; ?>"  readonly="readonly" placeholder="No Media Selected" />
							<input style="display:block;width:100%" type="hidden"  name="cs_id[]" class="wpsm_tm_label_text"  value="0"  readonly="readonly" placeholder="No Media Selected" />
							<div class="form-group"><!--<label>Status</label>-->	<select name="cs_status[]">
					<option value="1" selected>Approved</option>
					<option value="0">Pending</option>	
					</select>	
						</div></div>
						
							<div class="col-md-9">
							<span class="tm_label"><?php _e('Your Name',wpshopmart_testi_pro_text_domain); ?></span>
							<input type="text"  name="cs_name[]" value="Testimonial Name" placeholder="Enter Testimonial Name Here" class="wpsm_tm_label_text">
							
							<span class="tm_label"><?php _e('Your Email',wpshopmart_testi_pro_text_domain); ?></span>
							<input type="email"  name="cs_email[]" value="testi@gmail.com" placeholder="Enter Your Email Here" class="wpsm_tm_label_text">
							
							
							 
							 <span class="tm_label"><?php _e('Your Ratings',wpshopmart_testi_pro_text_domain); ?></span>
							 <input id="cs_rating" name="cs_rating[]" value="3" class="Testimonial rating" data-stars="5" data-step="0.1" title=""/>
							
							<span class="tm_label"><?php _e('Testimonial Content',wpshopmart_testi_pro_text_domain); ?></span>
							<textarea  name="cs_desc[]"  placeholder="Enter Testimonial Content Here" class="wpsm_tm_label_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel fermentum dui. Pellentesque vitae porttitor ex, euismod sodales magna. Nunc sed felis sed dui pellentesque sodales porta a magna. Donec dui augue</textarea>
							
							
						</div>
					</div>
					<div class="col-md-4">


								
						<span class="tm_label"><?php _e('Website Name',wpshopmart_testi_pro_text_domain); ?></span>
							<input type="text"  name="cs_webname[]" value="Testimonial Website Name" placeholder="Enter Your Website Name Here" class="wpsm_tm_label_text">
							
							<span class="tm_label"><?php _e('Website URL',wpshopmart_testi_pro_text_domain); ?></span>
							<input type="text"  name="cs_website[]" value="http://wpshopmart.com/"  placeholder="Enter website url with http:// ex : http://wpshopmart.com/" class="wpsm_tm_label_text">
							
							<span class="tm_label"><?php _e('Your Designation',wpshopmart_testi_pro_text_domain); ?></span>
							<input type="text"  name="cs_posi[]" value="Your Designation" placeholder="Enter Your Designation Here" class="wpsm_tm_label_text">


							<span class="show_flt_slt_opt" >
							<span class="tm_label"><?php _e('Add Filter Category',wpshopmart_testi_pro_text_domain); ?></span>
							
							<select class="append_filter_categoy wpsm_tm_label_text" name="cs_categoryfilter<?php echo $i-1;?>[]" multiple="">
        					<option value="">Select Filter Category</option>
      						</select>
      					</span>
							<a class="remove_button" href="#delete" id="remove_bt" ><i class="fa fa-trash-o"></i></a>
					</div>
				</li>
				 <?php
			}
		}
		?>
		<input type="hidden" id="get_maxnumber" value="<?php echo $i-1;?>">
	</ul>
	</div>
						<div style="display:block;margin-top:20px;overflow:hidden;width: 100%;float:left;">
							<div class="col-md-10">
								<a class="btn " class="wpsm_tm-panel add_wpsm_tm_new" id="add_new_ac" onclick="add_new_content()"  style="overflow:hidden;font-size: 52px;font-weight: 600; padding:10px 30px 10px 30px; background:#1e73be;width:100%;color:#fff;text-align:center"  >
									<?php _e('Add New Testimonial', wpshopmart_testi_pro_text_domain); ?>
								</a>
							</div>
							<div class="col-md-2">
							<a  style="float: left;width:100%;padding:10px !important;background:#31a3dd;" class=" add_wpsm_tm_new delete_all_acc" id="delete_all_colorbox"    >
								<i style="font-size:57px;"class="fa fa-trash-o"></i>
								<span style="display:block"><?php _e('Delete All',wpshopmart_testi_pro_text_domain); ?></span>
							</a>
							</div>
						</div>
	<?php require('add-testi-js-footer.php'); ?>
	<script>
        jQuery(document).ready(function () {
            jQuery("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return 'high';
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
                hoverOnClear: false
            });
            var jQueryinp = jQuery('#rating-input');

            jQueryinp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'lg',
                showClear: false
            });

            jQuery('#btn-rating-input').on('click', function () {
                jQueryinp.rating('refresh', {
                    showClear: true,
                    disabled: !jQueryinp.attr('disabled')
                });
            });
            jQuery('.btn-danger').on('click', function () {
                jQuery("#cs_rating").rating('destroy');
            });

            jQuery('.btn-success').on('click', function () {
                jQuery("#cs_rating").rating('create');
            });

            jQueryinp.on('rating.change', function () {
                alert($('#rating-input').val());
            });

            jQuery('.rb-rating').rating({
                'showCaption': true,
                'stars': '3',
                'min': '0',
                'max': '3',
                'step': '1',
                'size': 'xs',
                'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
            });
            jQuery("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });
    </script>

	<div style="clear:left;"></div>