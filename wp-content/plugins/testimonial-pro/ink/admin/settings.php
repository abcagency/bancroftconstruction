<?php
error_reporting(0);
if( ! defined( 'ABSPATH' )) exit;
	$Def_Settings = unserialize(get_option('wpsm_testimonial_pro_default_settings'));
	$PostId=$post->ID;
	$testi_Meta_Settings = unserialize(get_post_meta( $PostId, 'testi_Meta_Settings' ,true));
	$testi_form_Settings = unserialize(get_post_meta( $PostId, 'testi_user_form_Settings' ,true));
	$option_names = array(
					//BOX COLOR SETTINGS
					'templates_presets'     => $Def_Settings['templates_presets'],
					'templates'     		=> $Def_Settings['templates'],
				//	'ts_ind_clr_display'  => $Def_Settings['ts_ind_clr_display'],
					'ts_sec_title_clr'      => $Def_Settings['ts_sec_title_clr'],
					'ts_name_clr'        	=> $Def_Settings['ts_name_clr'],
					'ts_email_clr'		 	=> $Def_Settings['ts_email_clr'],
					'ts_web_name_clr'       => $Def_Settings['ts_web_name_clr'],
					'ts_link_hvr_clr'    	=> $Def_Settings['ts_link_hvr_clr'],
					'ts_position_clr'  		 => $Def_Settings['ts_position_clr'],
					'ts_content_clr' 		 => $Def_Settings['ts_content_clr'],
					
					'ts_content_bg_clr'		 => $Def_Settings['ts_content_bg_clr'],
					'ts_box_opacity'         => $Def_Settings['ts_box_opacity'],
					'ts_img_border_clr'   	 => $Def_Settings['ts_img_border_clr'],
					'ts_quote_clr'  		 => $Def_Settings['ts_quote_clr'],
					'ts_fillstar_clr' 		 => $Def_Settings['ts_fillstar_clr'],

					'ts_filstr_bord_clr'     => $Def_Settings['ts_filstr_bord_clr'],
					'ts_empstar_clr'  		 => $Def_Settings['ts_empstar_clr'],
					'my_star_size' 		 	 => $Def_Settings['my_star_size'],

					'ts_filter_bg_clr'			 => $Def_Settings['ts_filter_bg_clr'],
					'ts_filter_activebg_clr'	 => $Def_Settings['ts_filter_activebg_clr'],
					'ts_filter_title_clr'		  => $Def_Settings['ts_filter_title_clr'],
					'ts_filter_active_title_clr'   => $Def_Settings['ts_filter_active_title_clr'],

					// BOX FONT FAMILY & SIZE SETTINGS
					
					'ts_sec_title_size'		 => $Def_Settings['ts_sec_title_size'],
					'ts_name_size'           => $Def_Settings['ts_name_size'],
					'ts_email_size'  		 => $Def_Settings['ts_email_size'],
					'ts_website_size'  		 => $Def_Settings['ts_website_size'],
					'ts_position_size'  	 => $Def_Settings['ts_position_size'],
					'ts_content_size' 		 => $Def_Settings['ts_content_size'],
					'ts_sec_title_weight'  	 => $Def_Settings['ts_sec_title_weight'],
					'ts_name_weight'  		 => $Def_Settings['ts_name_weight'],
					
					
					'ts_position_weight'   	 => $Def_Settings['ts_position_weight'],
					'ts_content_weight'  	 => $Def_Settings['ts_content_weight'],
					'ts_content_line'  	 => $Def_Settings['ts_content_line'],
					'font_family'  			 => $Def_Settings['font_family'],
					// TITLE & ICON  DISPLAY SETTINGS
					
					'ts_display_sec_title' 	 => $Def_Settings['ts_display_sec_title'],
					'ts_display_name'  		 => $Def_Settings['ts_display_name'],
					'ts_display_image' 		 => $Def_Settings['ts_display_image'],
					'ts_display_email'  	 => $Def_Settings['ts_display_email'],
					'ts_display_website' 	 => $Def_Settings['ts_display_website'],
					'ts_display_position'  	 => $Def_Settings['ts_display_position'],
					'ts_display_rating' 	 => $Def_Settings['ts_display_rating'],
					'ts_display_content'  	 => $Def_Settings['ts_display_content'],
					
					
					//Navigation Settings 
					
					'ts_nav_type' 			 => $Def_Settings['ts_nav_type'],
					'ts_btn_type'  			 => $Def_Settings['ts_btn_type'],
					'ts_nav_right_text' 	 => $Def_Settings['ts_nav_right_text'],
					'ts_nav_left_text'  	 => $Def_Settings['ts_nav_left_text'],
					'ts_nav_btn_icon' 		 => $Def_Settings['ts_nav_btn_icon'],
					'ts_nav_btn_size'  		 => $Def_Settings['ts_nav_btn_size'],
					'ts_nav_btn_position' 	 => $Def_Settings['ts_nav_btn_position'],
					'ts_nav_btn_font_clr'  	 => $Def_Settings['ts_nav_btn_font_clr'],
					
					'ts_nav_btn_font_hvr_clr' => $Def_Settings['ts_nav_btn_font_hvr_clr'],
					'ts_nav_btn_bg_clr' 	 => $Def_Settings['ts_nav_btn_bg_clr'],
					'ts_nav_btn_hvr_clr'  	 => $Def_Settings['ts_nav_btn_hvr_clr'],
					'ts_nav_dot_size' 		 => $Def_Settings['ts_nav_dot_size'],
					'ts_nav_dot_shape'  	 => $Def_Settings['ts_nav_dot_shape'],
					'ts_nav_dot_bg_clr'  	 => $Def_Settings['ts_nav_dot_bg_clr'],
					'ts_nav_dot_hvr_clr'  	 => $Def_Settings['ts_nav_dot_hvr_clr'],
					
					//layout and Background SETTINGS
				
					'ts_layout'  			 => $Def_Settings['ts_layout'],
					'ts_image_bg'     		 => $Def_Settings['ts_image_bg'],
					'testi_bg_clr' 			 => $Def_Settings['testi_bg_clr'],
					'testi_favicon' 		 => $Def_Settings['testi_favicon'],
					'ts_bg_size' 			 => $Def_Settings['ts_bg_size'],
					'ts_bg_repeat'			 => $Def_Settings['ts_bg_repeat'],
					'ts_bg_position'  		 => $Def_Settings['ts_bg_position'],
					'ts_show_img_overlay' 	 => $Def_Settings['ts_show_img_overlay'],
					'ts_img_overlay_clr'  	 => $Def_Settings['ts_img_overlay_clr'],
					'ts_img_bg_opacity'  	 => $Def_Settings['ts_img_bg_opacity'],
					'ts_show_prlex' 		 => $Def_Settings['ts_show_prlex'],
					'ts_padding_LR' 		 => $Def_Settings['ts_padding_LR'],
					'ts_padding_TB'  		 => $Def_Settings['ts_padding_TB'],
					'ts_link_hvr_clr'   	 => $Def_Settings['ts_link_hvr_clr'],
					'ts_quote_clr' 			 => $Def_Settings['ts_quote_clr'],
					'custom_css'  			 => $Def_Settings['custom_css'],

			);
			foreach($option_names as $option_name => $default_value) {
				if(isset($testi_Meta_Settings[$option_name])) 
					${"" . $option_name}  = $testi_Meta_Settings[$option_name];
				else
					${"" . $option_name}  = $default_value;
			}
			
?>
<script>
function updte_wpsm_counter_pro_default_settings(){
	 jQuery.ajax({
		url: location.href,
		type: "POST",
		data : {
			    'action_ac_pro':'updte_wpsm_ac_pro_default_settings',
			     },
                success : function(data){
									alert("Default Settings Updated");
									location.reload(true);
                                   }	
	});
	
}
</script>
<?php 
	if(isset($_POST['action_ac_pro']) == "updte_wpsm_ac_pro_default_settings")
	{
		$Settings_CN_Array = serialize( array(
				//BOX COLOR SETTINGS
					'templates_presets'     => $templates_presets,
					'templates'     		=> $templates,
				//	'ts_ind_clr_display'  => $Def_Settings['ts_ind_clr_display'],
					'ts_sec_title_clr'      => $ts_sec_title_clr,
					'ts_name_clr'        	=> $ts_name_clr,
					'ts_email_clr'		 	=> $ts_email_clr,
					'ts_web_name_clr'       => $ts_web_name_clr,
					'ts_link_hvr_clr'    	=> $ts_link_hvr_clr,
					'ts_position_clr'  		 => $ts_position_clr,
					'ts_content_clr' 		 => $ts_content_clr,
					
					'ts_content_bg_clr'		 => $ts_content_bg_clr,
					'ts_box_opacity'         => $ts_box_opacity,
					'ts_img_border_clr'   	 => $ts_img_border_clr,
					'ts_quote_clr'  		 => $ts_quote_clr,
					'ts_fillstar_clr' 		 => $ts_fillstar_clr,

					'ts_filstr_bord_clr'     => $ts_filstr_bord_clr,
					'ts_empstar_clr'  		 => $ts_empstar_clr,
					'my_star_size' 		 	 => $my_star_size,

					'ts_filter_bg_clr'         => $ts_filter_bg_clr,
					'ts_filter_activebg_clr'   => $ts_filter_activebg_clr,
					'ts_filter_title_clr'      => $ts_filter_title_clr,
					'ts_filter_active_title_clr' => $ts_filter_active_title_clr,

					// BOX FONT FAMILY & SIZE SETTINGS
					
					'ts_sec_title_size'		 => $ts_sec_title_size,
					'ts_name_size'           => $ts_name_size,
					'ts_email_size'  		 => $ts_email_size,
					'ts_website_size'  		 => $ts_website_size,
					'ts_position_size'  	 => $ts_position_size,
					'ts_content_size' 		 => $ts_content_size,
					'ts_sec_title_weight'  	 => $ts_sec_title_weight,
					'ts_name_weight'  		 => $ts_name_weight,
					
					
					'ts_position_weight'   	 => $ts_position_weight,
					'ts_content_weight'  	 => $ts_content_weight,
					'ts_content_line'  	 => $ts_content_line,
					'font_family'  			 => $font_family,
					// TITLE & ICON  DISPLAY SETTINGS
					
					'ts_display_sec_title' 	 => $ts_display_sec_title,
					'ts_display_name'  		 => $ts_display_name,
					'ts_display_image' 		 => $ts_display_image,
					'ts_display_email'  	 => $ts_display_email,
					'ts_display_website' 	 => $ts_display_website,
					'ts_display_position'  	 => $ts_display_position,
					'ts_display_rating' 	 => $ts_display_rating,
					'ts_display_content'  	 => $ts_display_content,
					
					
					//Navigation Settings 
					
					'ts_nav_type' 			 => $ts_nav_type,
					'ts_btn_type'  			 => $ts_btn_type,
					'ts_nav_right_text' 	 => $ts_nav_right_text,
					'ts_nav_left_text'  	 => $ts_nav_left_text,
					'ts_nav_btn_icon' 		 => $ts_nav_btn_icon,
					'ts_nav_btn_size'  		 => $ts_nav_btn_size,
					'ts_nav_btn_position' 	 => $ts_nav_btn_position,
					'ts_nav_btn_font_clr'  	 => $ts_nav_btn_font_clr,
					
					'ts_nav_btn_font_hvr_clr' => $ts_nav_btn_font_hvr_clr,
					'ts_nav_btn_bg_clr' 	 => $ts_nav_btn_bg_clr,
					'ts_nav_btn_hvr_clr'  	 => $ts_nav_btn_hvr_clr,
					'ts_nav_dot_size' 		 => $ts_nav_dot_size,
					'ts_nav_dot_shape'  	 => $ts_nav_dot_shape,
					'ts_nav_dot_bg_clr'  	 => $ts_nav_dot_bg_clr,
					'ts_nav_dot_hvr_clr'  	 => $ts_nav_dot_hvr_clr,
					
					//layout and Background SETTINGS
				
					'ts_layout'  			 => $Def_Settings['ts_layout'],
					'ts_image_bg'     		 => $Def_Settings['ts_image_bg'],
					'testi_bg_clr' 			 => $Def_Settings['testi_bg_clr'],
					'testi_favicon' 		 => $Def_Settings['testi_favicon'],
					'ts_bg_size' 			 => $Def_Settings['ts_bg_size'],
					'ts_bg_repeat'			 => $Def_Settings['ts_bg_repeat'],
					'ts_bg_position'  		 => $Def_Settings['ts_bg_position'],
					'ts_show_img_overlay' 	 => $Def_Settings['ts_show_img_overlay'],
					'ts_img_overlay_clr'  	 => $Def_Settings['ts_img_overlay_clr'],
					'ts_img_bg_opacity'  	 => $Def_Settings['ts_img_bg_opacity'],
					'ts_show_prlex' 		 => $Def_Settings['ts_show_prlex'],
					'ts_padding_LR' 		 => $Def_Settings['ts_padding_LR'],
					'ts_padding_TB'  		 => $Def_Settings['ts_padding_TB'],
					'ts_link_hvr_clr'   	 => $Def_Settings['ts_link_hvr_clr'],
					'ts_quote_clr' 			 => $Def_Settings['ts_quote_clr'],
					'custom_css'  			 => $Def_Settings['custom_css'],
			) );

			update_option('wpsm_testimonial_pro_default_settings', $Settings_CN_Array);
}

 ?> 
<style>
.wpsm_site_sidebar_widget_title2{
	margin-left: 9px;
    margin-right: 2px;
    background: #31a3dd;
    padding: 10px;
    font-size: 20px;
    text-transform: uppercase;
    text-align: center;
    border-bottom: 9px double #FFF;
    box-shadow: 8px 8px 15px rgba(0,0,0,.4);
	margin-bottom:10px;
}
.wpsm_site_sidebar_widget_title2 h5{
	color: #fff !important;
	margin: 0px !important;
}
.sel-icon-wrapper{
	
	-webkit-box-shadow: 1px 1px 11px rgba(0, 0, 0, 0.5);
    box-shadow: 1px 1px 11px rgba(0, 0, 0, 0.5);
    padding: 0px;
     overflow: hidden;
	  cursor: pointer;
	 display:block;
	 margin-bottom:20px;
	 border : 3px solid transparent;
}
.sel-icon-wrapper.active{
	border : 3px solid #35d0ba;
}
.sel-icon-wrapper:hover{
	border : 3px solid #35d0ba;
}
.sel-icon-wrapper .lefti{
	padding: 5px;
	display:block;
	font-weight:900;
	font-size: 19px;
    text-align: center;
}

.sel-icon-wrapper .checked {
	position: absolute;
    background: #35d0ba;
	color: #fff;
    top: -8px;
    right: 0px;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 24px;
	opacity:0;
}

.sel-icon-wrapper.active .checked{
	
	opacity:1;
}
.selected_label_color{
	color:#35d0ba;
}
.my-title-wpsm h4{
	width: 100%;
}
.my-title-wpsm h4:after{
	content: none;
}
</style>
<input type="hidden" name="testimonial_setting_pro_save_action" value="testimonial_setting_pro_save_action" />
<div class="postbox" style="padding: 5px;margin-bottom: 10px;">
<div class="wpsm_site_sidebar_widget_title  my-title-wpsm" style="margin-left:0;margin-right:0;border-radius: 3px;margin-bottom:5px">
		<h4 style="border-top-left-radius: 2px;">Testimonial Shorcode</h4>
			
	
</div>
<h3>Testimonial Website Form</h3>
	<input readonly="readonly" class="form-control" type="text" value="<?php echo "[TESTIMONIAL_FORM id=".get_the_ID()."]"; ?>">


		<h3>Testimonial Shortcode</h3>
		<input readonly="readonly" class="form-control" type="text" value="<?php echo "[TESTIMONIAL_PRO id=".get_the_ID()."]"; ?>">
		<br/>
</div>
<div style="background-color: #f1f1f1;height: 40px;"></div>
<div class="wpsm_site_sidebar_widget_title my-title-wpsm" style="margin-left:0;margin-right:0;border-radius: 3px;margin-bottom:5px">
		<h4 style="border-top-left-radius: 2px;">Testimonial Settings</h4>
</div>

     
            <div class="panel-group" id="testi_pro_accordion_id" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Testimonial Color Settings
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                 <table class="form-table tm_table">
					<tbody>
					  <tr style="border-bottom:0px;">
					  </tr>
					  <tr><th>Section Title Color
					<a  class="ac_tooltip" href="#help" data-tooltip="#tooltip-sectiontitle"><i class="fa fa-lightbulb-o"></i></a>

				</th>
				<td>
				<input id="ts_sec_title_clr" name="ts_sec_title_clr" type="text" value="<?php echo $ts_sec_title_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip-sectiontitle" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You can update Section Title Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr><th>Testimonial Name Color
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testinamecolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_name_clr" name="ts_name_clr" type="text" value="<?php echo $ts_name_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testinamecolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Testimonial Name Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Testimonial Email Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testiemailcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_email_clr" name="ts_email_clr" type="text" value="<?php echo $ts_email_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testiemailcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Testimonial Email Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Website Link Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_weblinkcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_web_name_clr" name="ts_web_name_clr" type="text" value="<?php echo $ts_web_name_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_weblinkcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Website Link Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Website Link Hover Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_weblinkhovercolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_link_hvr_clr" name="ts_link_hvr_clr" type="text" value="<?php echo $ts_link_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_weblinkhovercolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Website Link Hover Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Designation Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_desigcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_position_clr" name="ts_position_clr" type="text" value="<?php echo $ts_position_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_desigcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Designation Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Testimonial Content Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testicntentcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_content_clr" name="ts_content_clr" type="text" value="<?php echo $ts_content_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testicntentcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Testimonial Content Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Content Background Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testicntentbgcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_content_bg_clr" name="ts_content_bg_clr" type="text" value="<?php echo $ts_content_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testicntentbgcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Testimonial Content Background Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr class="setting_color">
				<th>Content background Opacity</th>
				<td>
				<div id="ts_box_opacity_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_box_opacity" name="ts_box_opacity" readonly="readonly">
				</td>
			</tr>
			<tr>
				<th>Border Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testibordercolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_img_border_clr" name="ts_img_border_clr" type="text" value="<?php echo $ts_img_border_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testibordercolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Testimonial Border Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Quote Icon Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testiqutesiconcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_quote_clr" name="ts_quote_clr" type="text" value="<?php echo $ts_quote_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testiqutesiconcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Testimonial Quote Icon Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			    	</tbody>
			 </table>
                </div>
                </div>
              </div>
              <!-- Star Rating Setting start-->
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Testimonial Star Rating Settings
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                   <table class="form-table tm_table">
					<tbody>
						<tr style="border-bottom:0px;">
						</tr>
						<tr>
				<th>Filled Star Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testifillstarcolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_fillstar_clr" name="ts_fillstar_clr" type="text" value="<?php echo $ts_fillstar_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testifillstarcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Filled Star Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Filled Star Border Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testifillstarbordercolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_filstr_bord_clr" name="ts_filstr_bord_clr" type="text" value="<?php echo $ts_filstr_bord_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testifillstarbordercolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Filled Star Border Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Empty Star Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_testiemptystarbordercolor"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
				<input id="ts_empstar_clr" name="ts_empstar_clr" type="text" value="<?php echo $ts_empstar_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip_testiemptystarbordercolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Empty Star Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr class="setting_color">
				<th>Star Size</th>
				<td>
				<div id="my_star_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="my_star_size" name="my_star_size" readonly="readonly">
				</td>
			</tr>
					</tbody>
				</table>
                  </div>
                </div>
              </div>
              <!--Start Rating Setting End-->

              <!--Font Size and Style Setting Start-->
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Testimonial Font Size And Style Settings
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <table class="form-table tm_table">
						<tbody>
						<tr style="border-bottom:0px;">
						</tr>
						<tr class="setting_color">
				<th>Section Title Font Size</th>
				<td>
				<div id="ts_sec_title_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_sec_title_size" name="ts_sec_title_size" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Name Font Size</th>
				<td>
				<div id="ts_name_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_name_size" name="ts_name_size" readonly="readonly">
				</td>
			</tr>
			
			<tr class="setting_color">
				<th>Email Font Size</th>
				<td>
				<div id="ts_email_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_email_size" name="ts_email_size" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Website Font Size</th>
				<td>
				<div id="ts_website_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_website_size" name="ts_website_size" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Designation Font Size</th>
				<td>
				<div id="ts_position_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_position_size" name="ts_position_size" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Content Font Size</th>
				<td>
				<div id="ts_content_size_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_content_size" name="ts_content_size" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Section Title Font Weight</th>
				<td>
				<div id="ts_sec_title_weight_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_sec_title_weight" name="ts_sec_title_weight" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Name Font Weight</th>
				<td>
				<div id="ts_name_weight_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_name_weight" name="ts_name_weight" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Designation Font Weight</th>
				<td>
				<div id="ts_position_weight_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_position_weight" name="ts_position_weight" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Content Font Weight</th>
				<td>
				<div id="ts_content_weight_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_content_weight" name="ts_content_weight" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Content Line Height</th>
				<td>
				<div id="ts_content_line_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_content_line" name="ts_content_line" readonly="readonly">
				</td>
			</tr>
			<tr>
				<th scope="row"><label><?php _e('Enable Font Family',wpshopmart_testi_pro_text_domain); ?></label></th>
				<td>
					<?php 
					require_once("font-family.php");
					?>	
					<input type="hidden" name="font_family_group" id="font_family_group" value="<?php echo $font_family_group; ?>" />
				</td>
			</tr>
						</tbody>
					</table>
                  </div>
                </div>
              </div>
              <!--Font Size and Style Setting End-->
              <!-- Display Setting Start-->
               <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Testimonial Display Settings                  
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">                    
				<table class="form-table tm_table">
					<tbody>
							<tr style="border-bottom:0px;">
							</tr>
							<tr>
				<th>Display Section Title
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_dissecttitle"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_sec_title" value="yes"  id="enable_display_sec_title" <?php if($ts_display_sec_title == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_sec_title" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_sec_title" value="no" id="disable_display_sec_title"  <?php if($ts_display_sec_title == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_sec_title" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_dissecttitle" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Section Title.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Name
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_dispname"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_name" value="yes"  id="enable_display_name" <?php if($ts_display_name == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_name" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_name" value="no" id="disable_display_name"  <?php if($ts_display_name == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_name" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_dispname" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Name.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Image
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_dispimg"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_image" value="yes"  id="enable_display_image" <?php if($ts_display_image == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_image" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_image" value="no" id="disable_display_image"  <?php if($ts_display_image == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_image" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_dispimg" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Image.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Email
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_dispemail"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_email" value="yes"  id="enable_display_email" <?php if($ts_display_email == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_email" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_email" value="no" id="disable_display_email"  <?php if($ts_display_email == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_email" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_dispemail" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Image.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Website Details
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_dispwebsetails"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_website" value="yes"  id="enable_display_website" <?php if($ts_display_website == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_website" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_website" value="no" id="disable_display_website"  <?php if($ts_display_website == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_website" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_dispwebsetails" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Website Details.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Designation
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_dispdesign"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_position" value="yes"  id="enable_display_position" <?php if($ts_display_position == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_position" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_position" value="no" id="disable_display_position"  <?php if($ts_display_position == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_position" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_dispdesign" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Designation.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Rating
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_disprate"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_rating" value="yes"  id="enable_display_rating" <?php if($ts_display_rating == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_rating" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_rating" value="no" id="disable_display_rating"  <?php if($ts_display_rating == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_rating" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_disprate" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Rating.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
				<th>Display Testimonial Content
					<a class="ac_tooltip" href="#help" data-tooltip="#tooltip_disptesticontent"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_display_content" value="yes"  id="enable_display_content" <?php if($ts_display_content == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_display_content" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_display_content" value="no" id="disable_display_content"  <?php if($ts_display_content == 'no' ) { echo "checked"; } ?> >
						<label for="disable_display_content" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
					<!-- Tooltip -->					
					<div id="tooltip_disptesticontent" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Update Display Testimonial Content.</h2>
					</div>
					</div>
				</td>
			</tr>
					</tbody>
				</table>
                  </div>
                </div>
              </div>
              <!-- Display Setting End-->
              <!--Colomn Layout Setting-->
               <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">                    
                      Testimonial Layout Settings                   
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <table class="form-table tm_table">
					<tbody>
							<tr style="border-bottom:0px;">
							</tr>
							<tr>
				<th>Display Column Layout</th>
				<td>
					<select name="ts_layout" id="ts_layout" class="standard-dropdown" style="width:100%" >
						<option value="12"  <?php if($ts_layout == '12') { echo "selected"; } ?>>One Column Layout</option>
						<option value="6"  <?php if($ts_layout == '6') { echo "selected"; } ?>>Two Column Layout</option>
						<option value="4"  <?php if($ts_layout == '4') { echo "selected"; } ?>>Three Column Layout</option>
						<option value="3"  <?php if($ts_layout == '3') { echo "selected"; } ?>>Four Column Layout</option>					
					</select>
				</td>
			</tr>
					</tbody>
				</table>
                  </div>
                </div>
              </div>
               <!--Colomn Layout Setting End -->
               <!-- Carousel Setting Start-->
               
               
               <div class="panel panel-default" id="testimonail_slider_div" style="<?php if(($templates_presets=="grid") || ($templates_presets=="filter") && (get_post_status( $PostId )=="publish")){echo "display:none;";}?>">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Testimonial Carousel Settings
                      </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    <table class="form-table tm_table">
					<tbody>
							<tr style="border-bottom:0px;">
							</tr>
							<?php if($ts_nav_type==''){ $ts_nav_btn_icon=2;}?>
			<tr class="cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>">
				<th>Select Navigation Type
				<a class="ac_tooltip" href="#help" data-tooltip="#testi_pro_tooltipnavtype"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div id="testi_pro_tooltipnavtype" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">There Are Three Types of Navigation Setting, You can Set one of them.</h2>
					</div>
					</div>
					<div class="widget">
						<input type="radio" name="ts_nav_type" id="nav-1" value="1" checked onchange="ts_nav_select()" <?php if($ts_nav_type == '1' ) { echo "checked"; } ?>>
						<label for="nav-1">Buttons</label>
						<br/></br>
						<input type="radio" name="ts_nav_type" id="nav-2" <?php if($ts_nav_type == '2' ) { echo "checked"; } ?>  value="2" onchange="ts_nav_select()" <?php if($ts_nav_type == '2' ) { echo "checked"; } ?>>
						<label for="nav-2">Dots</label>
						</br></br>
						<input type="radio" name="ts_nav_type" id="nav-3"  <?php if($ts_nav_type == '3' ) { echo "checked"; } ?> value="3" onchange="ts_nav_select()" <?php if($ts_nav_type == '3' ) { echo "checked"; } ?> >
						<label for="nav-3">Both Button and Dots</label>
					</div>
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid' || $ts_nav_type=='2'){echo  "display:none";}?>" >
				<th>Navigation Button Type:
				<a class="ac_tooltip" href="#help" data-tooltip="#testi_pro_tooltipnavbtntype"><i class="fa fa-lightbulb-o"></i></a>
				</th>
				<td>
					<div id="testi_pro_tooltipnavbtntype" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Set Navigation Button Type Accordiong to your choice.</h2>
					</div>
					</div>
					<div class="widget">
						<input type="radio" name="ts_btn_type" id="button-1" checked value="Text" onchange="ts_btn_select()" <?php if($ts_btn_type == 'Text' ) { echo "checked"; } ?>>
						<label for="button-1">Only Text</label>
						<br/></br>
						<input type="radio" name="ts_btn_type" id="button-2" <?php if($ts_btn_type == 'Icon' ) { echo "checked"; } ?>  value="Icon" onchange="ts_btn_select()" <?php if($ts_btn_type == 'Icon' ) { echo "checked"; } ?>>
						<label for="button-2">Only Icon</label>
						</br></br>
						<input style="display: none;" type="radio" name="ts_btn_type" id="button-3"  <?php if($ts_btn_type == 'Both' ) { echo "checked"; } ?> value="Both" onchange="ts_btn_select()" <?php if($ts_btn_type == 'Both' ) { echo "checked"; } ?> >
						<label  style="display: none;" for="button-3">Both Text and Icon</label>
					</div>
				</td>
			</tr>
			<tr style="display: none;" class="ts_btn_group ts_text_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>"  style="<?php if($ts_nav_type == '2' || $ts_btn_type == 'Icon'){echo  "display:none";}?>" >
				<th scope="row"><label><?php _e('Navigation Button Left Text'); ?></label>
					<a  class="ac_tooltip" href="#help" data-tooltip="#nav_btn_lft_txt"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nav_btn_lft_txt" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You can Write Text on Left Side Menu Button.</h2>
					</div>
					</div>
				</th>
				<td>
					<div class="">
						<input type="text" class="form-control" name="ts_nav_left_text" value="<?php if($ts_nav_left_text) { echo $ts_nav_left_text; } ?>" id="ts_nav_left_text">
					</div>
				</td>
			</tr>
			<tr class="ts_btn_group ts_text_group cn_ind_clr_enable_class" style="<?php if($ts_nav_type == '2' || $ts_btn_type == 'Icon'){echo  "display:none";}?>" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>"" >
				<th scope="row"><label><?php _e('Navigation Button Right Text'); ?></label>
					<a  class="ac_tooltip" href="#help" data-tooltip="#nav_btn_rght_txt"><i class="fa fa-lightbulb-o"></i></a>
						<div id="nav_btn_rght_txt" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You can Write Text on Right Side Menu Button.</h2>
					</div>
					</div>
				</th>
				<td>
					<div class="">
						<input type="text" class="form-control" name="ts_nav_right_text" value="<?php if($ts_nav_right_text) { echo $ts_nav_right_text; } ?>" id="ts_nav_right_text">
					</div>
				</td>
			</tr>
			<?php if($ts_nav_btn_icon==''){ $ts_nav_btn_icon=4;}?>
			<tr class="ts_btn_group ts_icon_group cn_ind_clr_enable_class" style="<?php if($ts_nav_type == '2' || $ts_btn_type == 'Text'){echo  "display:none";}?>" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" >
				<th scope="row"><label><?php _e('Carousel Navigation Button Icon Type'); ?></label>
					<a  class="ac_tooltip" href="#help" data-tooltip="#car_nav_btn_icon_type"><i class="fa fa-lightbulb-o"></i></a>
						<div id="car_nav_btn_icon_type" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You can choose any one Icon from here and it will be appear on the frontend.</h2>
					</div>
					</div>
				</th>
				<td>
					<div class="col-md-6 col-sm-6 op_cl_icon_box">
						<div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($ts_nav_btn_icon == '1' ) { echo "active"; } ?>" id="ts_btn_icon_1" onclick="select_btn_icon(1)">
							<div class="checked"><i class="fa fa-check"></i></div>
							<div class="lefti"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-angle-double-right"></i></div>
							<input type="radio" name="ts_nav_btn_icon" id="ts_nav_btn_icon1" value="1"  <?php if($ts_nav_btn_icon == '1' ) { echo "checked"; } ?> style="display:none;"   />
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 op_cl_icon_box">
						<div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($ts_nav_btn_icon == '2' ) { echo "active"; } ?>" id="ts_btn_icon_2" onclick="select_btn_icon(2)">
							<div class="checked"><i class="fa fa-check"></i></div>
							<div class="lefti"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-arrow-right"></i></div>
							<input type="radio" name="ts_nav_btn_icon" id="ts_nav_btn_icon2" value="2"  <?php if($ts_nav_btn_icon == '2' ) { echo "checked"; } ?> style="display:none;"   />
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 op_cl_icon_box">
						<div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($ts_nav_btn_icon == '3' ) { echo "active"; } ?>" id="ts_btn_icon_3" onclick="select_btn_icon(3)">
							<div class="checked"><i class="fa fa-check"></i></div>
							<div class="lefti"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-angle-right"></i></div>
							<input type="radio" name="ts_nav_btn_icon" id="ts_nav_btn_icon3" value="3"  <?php if($ts_nav_btn_icon == '3' ) { echo "checked"; } ?> style="display:none;"   />
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 op_cl_icon_box">
						<div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($ts_nav_btn_icon == '4') { echo "active"; } ?>" id="ts_btn_icon_4" onclick="select_btn_icon(4)">
							<div class="checked"><i class="fa fa-check"></i></div>
							<div class="lefti"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-chevron-right"></i></div>
							<input type="radio" name="ts_nav_btn_icon" checked id="ts_nav_btn_icon4" value="4"  <?php if($ts_nav_btn_icon == '4' ) { echo "checked"; } ?> style="display:none;"   />
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 op_cl_icon_box">
						<div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($ts_nav_btn_icon == '5' ) { echo "active"; } ?>" id="ts_btn_icon_5" onclick="select_btn_icon(5)">
							<div class="checked"><i class="fa fa-check"></i></div>
							<div class="lefti"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-caret-right"></i></div>
							<input type="radio" name="ts_nav_btn_icon" id="ts_nav_btn_icon5" value="5"  <?php if($ts_nav_btn_icon == '5' ) { echo "checked"; } ?> style="display:none;"   />
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 op_cl_icon_box">
						<div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($ts_nav_btn_icon == '6') { echo "active"; } ?>" id="ts_btn_icon_6" onclick="select_btn_icon(6)">
							<div class="checked"><i class="fa fa-check"></i></div>
							<div class="lefti"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-long-arrow-right"></i></div>
							<input type="radio" name="ts_nav_btn_icon" id="ts_nav_btn_icon6" value="6"  <?php if($ts_nav_btn_icon == '6' ) { echo "checked"; } ?> style="display:none;"   />
						</div>	
					</div>
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($ts_nav_type == '2'){echo  "display:none";}?>" >
				<th>Select Navigation Button Size</th>
				<td>
					<select name="ts_nav_btn_size" id="ts_nav_btn_size" class="standard-dropdown" style="width:100%" >
						<option value="Small"  <?php if($ts_nav_btn_size == 'Small') { echo "selected"; } ?>>Small</option>
						<option value="Medium"  <?php if($ts_nav_btn_size == 'Medium') { echo "selected"; } ?>>Medium</option>
						<option value="Large"  <?php if($ts_nav_btn_size == 'Large') { echo "selected"; } ?>>Large</option>
					</select>
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='2'){echo  "display:none";}?>">
				<th>Select Navigation Button Position</th>
				<td>
					<select name="ts_nav_btn_position" id="ts_nav_btn_position" class="standard-dropdown" style="width:100%" >
						<option value="top_left"  <?php if($ts_nav_btn_position == 'top_left') { echo "selected"; } ?>>top-left</option>
						<option value="top_center"  <?php if($ts_nav_btn_position == 'top_center') { echo "selected"; } ?>>top-center</option>
						<option value="top_right"  <?php if($ts_nav_btn_position == 'top_right') { echo "selected"; } ?>>top-right</option>
						<option value="botttom_left"  <?php if($ts_nav_btn_position == 'botttom_left') { echo "selected"; } ?>>bottom-left</option>
						<option value="botttom_center"  <?php if($ts_nav_btn_position == 'botttom_center') { echo "selected"; } ?>>bottom-center</option>
						<option value="botttom_right"  <?php if($ts_nav_btn_position == 'botttom_right') { echo "selected"; } ?>>bottom-right</option>
						<option value="on_content"  <?php if($ts_nav_btn_position == 'on_content') { echo "selected"; } ?>>on-content</option>					
					</select>
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='2'){echo  "display:none";}?>">
				<th>Navigation Button Font Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#nav_btn_font_clr"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nav_btn_font_clr" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Modify Navigation Button Font Color.</h2>
					</div>
					</div>
				</th>
				<td>
				<input id="ts_nav_btn_font_clr" name="ts_nav_btn_font_clr" type="text" value="<?php echo $ts_nav_btn_font_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='2'){echo  "display:none";}?>">
				<th>Navigation Button Font Hover Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#nav_btn_font_hover_clr"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nav_btn_font_hover_clr" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Modify Navigation Button Font Hover Color.</h2>
					</div>
					</div>
				</th>
				<td>
				<input id="ts_nav_btn_font_hvr_clr" name="ts_nav_btn_font_hvr_clr" type="text" value="<?php echo $ts_nav_btn_font_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='2'){echo  "display:none";}?>">
				<th>Navigation Button Background Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#nav_btn_bgcolor"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nav_btn_bgcolor" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Modify Navigation Button Background Color.</h2>
					</div>
					</div>
				</th>
				<td>
				<input id="ts_nav_btn_bg_clr" name="ts_nav_btn_bg_clr" type="text" value="<?php echo $ts_nav_btn_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				</td>
			</tr>
			<tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='2'){echo  "display:none";}?>">
				<th>Navigation Button Background Hover Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#nva_btn_bghover_clr"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nva_btn_bghover_clr" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Modify Navigation Button Background Hover Color.</h2>
					</div>
					</div>
				</th>
				<td>
				<input id="ts_nav_btn_hvr_clr" name="ts_nav_btn_hvr_clr" type="text" value="<?php echo $ts_nav_btn_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />				
				</td>
			</tr>
			<tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='1'){echo  "display:none";}?>" style="<?php if($templates_presets='grid'){echo  "display:none";}?>">
				<th>Select Navigation Dots Size</th>
				<td>
					<select name="ts_nav_dot_size" id="ts_nav_dot_size" class="standard-dropdown" style="width:100%" >
						<option value="Small"  <?php if($ts_nav_dot_size == 'Small') { echo "selected"; } ?>>Small</option>
						<option value="Medium"  <?php if($ts_nav_dot_size == 'Medium') { echo "selected"; } ?>>Medium</option>
						<option value="Large"  <?php if($ts_nav_dot_size == 'Large') { echo "selected"; } ?>>Large</option>
					</select>
				</td>
			</tr>
			<tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='1'){echo  "display:none";}?>" style="<?php if($templates_presets='grid'){echo  "display:none";}?>">
				<th>Select Navigation Dots Shape</th>
				<td>
					<select name="ts_nav_dot_shape" id="ts_nav_dot_shape" class="standard-dropdown" style="width:100%" >
						<option value="Circle"  <?php if($ts_nav_dot_shape == 'Circle') { echo "selected"; } ?>>Circle</option>
						<option value="Rectangle"  <?php if($ts_nav_dot_shape == 'Rectangle') { echo "selected"; } ?>>Rectangle</option>
						<option value="Square"  <?php if($ts_nav_dot_shape == 'Square') { echo "selected"; } ?>>Square</option>
						<option value="Oval"  <?php if($ts_nav_dot_shape == 'Oval') { echo "selected"; } ?>>Oval</option>
					</select>
				</td>
			</tr>
			<tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type ='1'){echo  "display:none";}?>">
				<th>Navigation Dots Background Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#nav_dotsbgclr"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nav_dotsbgclr" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Modify Navigation Dots Background Color.</h2>
					</div>
					</div>
				</th>
				<td>
				<input id="ts_nav_dot_bg_clr" name="ts_nav_dot_bg_clr" type="text" value="<?php echo $ts_nav_dot_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				</td>
			</tr>
			<tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($ts_nav_type =='1'){echo  "display:none";}?>">
				<th>Navigation Dots Background Hover Color					
				<a class="ac_tooltip" href="#help" data-tooltip="#nva_dots_bghover_clrs"><i class="fa fa-lightbulb-o"></i></a>
					<div id="nva_dots_bghover_clrs" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Modify Navigation Dots Background Hover Color.</h2>
					</div>
					</div>
				</th>
				<td>
				<input id="ts_nav_dot_hvr_clr" name="ts_nav_dot_hvr_clr" type="text" value="<?php echo $ts_nav_dot_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				</td>
			</tr>
					</tbody>
				</table>
                  </div>
                </div>
              </div>
         

              <!-- Carousel Setting End-->
              <!-- Background Sction Setting Start-->
               <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Testimonail Background and Padding Settings
                    </a>
                  </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="panel-body">
                   <table class="form-table tm_table">
					<tbody>
							<tr style="border-bottom:0px;">
							</tr>
							<tr>
				<th>Select Section Background:
				<a class="ac_tooltip" href="#help" data-tooltip="#testi_select_section_bgnd"><i class="fa fa-lightbulb-o"></i></a>
					<div id="testi_select_section_bgnd" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">In This Section You Can Apply Three Types of Background Section.</h2>
					</div>
					</div>
				</th>
				<td>
					<div class="widget">
						<input type="radio" name="ts_image_bg" id="radio-1" checked value="Transparent" onchange="ts_img_bg_select()" <?php if($ts_image_bg == 'Transparent' ) { echo "checked"; } ?>>
						<label for="radio-1">Transparent</label>
						<br/></br>
						<input type="radio" name="ts_image_bg" id="radio-2" <?php if($ts_image_bg == 'Color' ) { echo "checked"; } ?>  value="Color" onchange="ts_img_bg_select()"<?php if($ts_image_bg == 'Color' ) { echo "checked"; } ?>>
						<label for="radio-2">Color</label>
						</br></br>
						<input type="radio" name="ts_image_bg" id="radio-3"  <?php if($ts_image_bg == 'Image' ) { echo "checked"; } ?> value="Image" onchange="ts_img_bg_select()" <?php if($ts_image_bg == 'Image' ) { echo "checked"; } ?> >
						<label for="radio-3">Image</label>
					</div>
					
				</td>
			</tr>
			
			<tr class="ts_clr_bg_group" style="<?php if($ts_image_bg!='Color'){echo  "display:none";}?>">
				<th scope="row"><label><?php _e('Background Color',wpshopmart_testi_pro_text_domain); ?></label></th>
				<td>
				<input id="testi_bg_clr" name="testi_bg_clr" type="text" value="<?php echo $testi_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				</td>
			</tr>
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo  "display:none";}?>">
				<th scope="row"><label><?php _e('Background Image',wpshopmart_testi_pro_text_domain); ?></label></th>
				<td>
					<img src="<?php echo $testi_favicon; ?>" style="width:200px; " class="csw-admin-img" />
					<input type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload"  onclick="wpsm_media_upload(this)"/>

					<input type="hidden" id="testi_favicon" name="testi_favicon" class="rcsp_label_text"  value="<?php echo $testi_favicon; ?>"  readonly="readonly" placeholder="No Media Selected" />
				</td>
			</tr>
			
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo  "display:none";}?>">
				<th scope="row"><label><?php _e('Background Size',wpshopmart_testi_pro_text_domain); ?></label></th>					
				<td>
					<select name="ts_bg_size" id="ts_bg_size" class="standard-dropdown" onchange="dropdown_select()" style="width:100%" >
						<optgroup label="Default Size">
							<option value="Cover" <?php if($ts_bg_size == 'Cover' ) { echo "selected"; } ?>>Cover</option>
							<option value="Auto" <?php if($ts_bg_size == 'Auto' ) { echo "selected"; } ?>>Auto</option>
							<option value="Contain" <?php if($ts_bg_size == 'Contain' ) { echo "selected"; } ?>>Contain</option>
						</optgroup>
					</select>
				</td>
			</tr>
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo  "display:none";}?>">
				<th>Background Repeat</th>
				<td>
					<?php if(!isset($ts_bg_repeat)) $ts_bg_repeat = "no-repeat";?>	
					<select name="ts_bg_repeat" id="ts_bg_repeat" class="standard-dropdown" style="width:100%" >
						<optgroup label="Default Repeat">
						<option class="dropdown_group" value="inherit" <?php if($ts_bg_repeat == 'inherit' ) { echo "selected"; } ?>>inherit</option>
						<option class="dropdown_group" value="repeat"  <?php if($ts_bg_repeat == 'repeat' ) { echo "selected"; } ?>>repeat</option>
						<option class="dropdown_group" value="repeat-x" <?php if($ts_bg_repeat == 'repeat-x' ) { echo "selected"; } ?>>repeat-x</option>
						<option class="dropdown_group" value="repeat-y" <?php if($ts_bg_repeat == 'repeat-y' ) { echo "selected"; } ?>>repeat-y</option>
						<option class="dropdown_class" value="No-repeat" <?php if($ts_bg_repeat == 'No-repeat' ) { echo "selected"; } ?>>No-repeat</option>					
						</optgroup>
					</select>
				</td>
			</tr>
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo  "display:none";}?>" >
				<th>Background Position</th>
				<td>
					<?php if(!isset($ts_bg_position)) $ts_bg_position = "center center";?>	
					<select name="ts_bg_position" id="ts_bg_position" class="standard-dropdown" style="width:100%" >
						<optgroup label="Default Position">
						<option value="left top" <?php if($ts_bg_position == 'left top' ) { echo "selected"; } ?>>left-top</option>
						<option value="left center"   <?php if($ts_bg_position == 'left center' ) { echo "selected"; } ?>>left-center</option>
						<option value="left bottom"    <?php if($ts_bg_position == 'left bottom' ) { echo "selected"; } ?>>left-bottom</option>
						<option value="right top" <?php if(ts_bg_position) { echo "selected"; } ?>>right-top</option>
						<option value="right center" <?php if($ts_bg_position == 'right center' ) { echo "selected"; } ?>>right-center</option>					
						<option value="right bottom" <?php if($ts_bg_position == 'right bottom' ) { echo "selected"; } ?>>right-bottom</option>
						<option value="center top" <?php if($ts_bg_position == 'center top' ) { echo "selected"; } ?>>center-top</option>
						<option value="center center" <?php if($ts_bg_position == 'center center' ) { echo "selected"; } ?>>center-center</option>
						<option value="center bottom" <?php if($ts_bg_position == 'center bottom' ) { echo "selected"; } ?>>center-bottom</option>
						</optgroup>
					</select>
				</td>
			</tr>
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo  "display:none";}?>">
				<th>Display Image Overlay
				</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_show_img_overlay" value="yes" id="enable_img_overlay" <?php if($ts_show_img_overlay == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_img_overlay" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_show_img_overlay" value="no" id="disable_img_overlay"  <?php if($ts_show_img_overlay == 'no' ) { echo "checked"; } ?> >
						<label for="disable_img_overlay" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
				</td>
			</tr>
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo "display:none";}?>">
				<th scope="row"><label><?php _e('Image Overlay Color',wpshopmart_testi_pro_text_domain); ?></label></th>
				<td>
				<input id="ts_img_overlay_clr" name="ts_img_overlay_clr" type="text" value="<?php echo $ts_img_overlay_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				</td>
			</tr>
			<tr class="setting_color ts_img_bg_group " style="<?php if($ts_image_bg!='Image'){echo "display:none";}?>" >
				<th>Background Overlay Opacity</th>
				<td>
				<div id="ts_img_bg_opacity_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_img_bg_opacity" name="ts_img_bg_opacity" readonly="readonly">
				</td>
			</tr>
			<tr class="ts_img_bg_group" style="<?php if($ts_image_bg!='Image'){echo  "display:none";}?>">
				<th>Display Parallax Effect</th>
				<td>
					<div class="switch">
						<input type="radio" class="switch-input" name="ts_show_prlex" value="yes" id="enable_show_prlex" <?php if($ts_show_prlex == 'yes' ) { echo "checked"; } ?>   >
						<label for="enable_show_prlex" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_testi_pro_text_domain); ?></label>
						<input type="radio" class="switch-input" name="ts_show_prlex" value="no" id="disable_show_prlex"  <?php if($ts_show_prlex == 'no' ) { echo "checked"; } ?> >
						<label for="disable_show_prlex" class="switch-label switch-label-on"><?php _e('No',wpshopmart_testi_pro_text_domain); ?></label>
						<span class="switch-selection"></span>
					</div>
				</td>
			</tr>
			<tr class="setting_color">
				<th>Section Padding Left/Right</th>
				<td>
				<div id="ts_padding_LR_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_padding_LR" name="ts_padding_LR" readonly="readonly">
				</td>
			</tr>
			<tr class="setting_color">
				<th>Section Padding Top/Bottom</th>
				<td>
				<div id="ts_padding_TB_id" class="size-slider" ></div>
				<input type="text" class="slider-text" id="ts_padding_TB" name="ts_padding_TB" readonly="readonly">
				</td>
			</tr>
					</tbody>
				</table>
                  </div>
                </div>
              </div>
               <!-- Background Sction Setting End-->
               <!-- filter category Start-->
               <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Testimonial Filter Category Settings
                    </a>
                  </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                  <div class="panel-body">
                    <table class="form-table tm_table">
	<tbody>
			<tr style="border-bottom:0px;">
			</tr>

			<tr><th>Filter Background Color
					<a  class="ac_tooltip" href="#help" data-tooltip="#tooltip-filterbg"><i class="fa fa-lightbulb-o"></i></a>

				</th>
				<td>
				<input id="ts_filter_bg_clr" name="ts_filter_bg_clr" type="text" value="<?php echo $ts_filter_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip-filterbg" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Change Filter Background Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr><th>Filter Active Background Color
					<a  class="ac_tooltip" href="#help" data-tooltip="#tooltip-filteractivebg"><i class="fa fa-lightbulb-o"></i></a>

				</th>
				<td>
				<input id="ts_filter_activebg_clr" name="ts_filter_activebg_clr" type="text" value="<?php echo $ts_filter_activebg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip-filteractivebg" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Change Active Background Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr><th>Filter Title Color
					<a  class="ac_tooltip" href="#help" data-tooltip="#tooltip-filtertitle"><i class="fa fa-lightbulb-o"></i></a>

				</th>
				<td>
				<input id="ts_filter_title_clr" name="ts_filter_title_clr" type="text" value="<?php echo $ts_filter_title_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip-filtertitle" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Filter Title Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr><th>Filter Active Title Color
					<a  class="ac_tooltip" href="#help" data-tooltip="#tooltip-filteractivestitle"><i class="fa fa-lightbulb-o"></i></a>

				</th>
				<td>
				<input id="ts_filter_active_title_clr" name="ts_filter_active_title_clr" type="text" value="<?php echo $ts_filter_active_title_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
				<!-- Tooltip -->					
					<div id="tooltip-filteractivestitle" style="display:none;">
					<div class="wpsm_sb_tooltip_div">
						<h2 style="color:#fff !important;">You Can Filter Active Title Color.</h2>
					</div>
					</div>
				</td>
			</tr>
			<tr>
			
				<td class="myscrolldestination">
				<!--filter codes start-->
	<tr><th>Filter Category</th>
	<td>
		<?php
	$design_exit=get_post_meta(get_the_ID(),'filter_category_counts',true);

	if((!empty($design_exit) && (is_numeric($design_exit))))
	{
	$table_designation=unserialize(get_post_meta(get_the_ID(),'filter_category_info',true));

				//print_r($table_designation);
	$iteration=1;
	foreach($table_designation as $des_val)
	{
		
		?>



		<input style="margin: 5px; width:80%;" type="text" class="filter_category_class" name="filter_category[]" value="<?php echo $des_val['filter_category'];?>" id="idfiltercategory_<?php echo $iteration;?>"  onchange="adding_dynamic_gm_designation(<?php echo $iteration;?>)"/>
		<a href="#" id="gm_dy_rm_class<?php echo $iteration;?>" class="append_des_rm_class" onclick="return rm_append_des(<?php echo $iteration;?>)"><span class="fa fa-trash-o" ></span></a>
		<?php
		$iteration++;
	}
}
				?>
	<input type="hidden" value="<?php if(isset($iteration)) { if($iteration!="") {echo $iteration-1;}} ?>" id="iteration">			
	<span id="apnd_fcategory"></span>		
	<button type="button" id="add_fcategory" class="btn btn-primary">Add Category</button>	
	</td>
	</tr>
	<!-- filter code end-->
				</td>
			</tr>
	</tbody>
</table>
                  </div>
                </div>
              </div>
              <!-- filter category End-->


              <!--testimonial form section-->
               <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingNine">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#testi_pro_accordion_id" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Testimonianl Form Display Setting
                    </a>
                  </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNinet">
                  <div class="panel-body">

	<ul id="sortabledd">
  <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#nameoption_wpsm">
  <div class="panel-heading"> <i></i>Name Option</div>
</div>
  	
	
	<div id="nameoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Name
				</td>
				<td>
						<div class="squaredTwo">  
		
<input type="checkbox"  name="array_name[]" value="show_name"  id="enable_display_formusery" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_name")
		{echo "checked";}
	}
	?>/><label for="enable_display_formusery"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo">  <input type="checkbox" name="array_req[]" value="yes" id="enable_require_formusname"
		<?php 
	for($m=0;$m<7;$m++)
	{

	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?> /><label for="enable_require_formusname"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
  <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#emailoption_wpsm">
  <div class="panel-heading"> <i></i>Email Option</div>
</div>
  	
	
	<div id="emailoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Email
				</td>
				<td>
						<div class="squaredTwo">  
		<input type="checkbox"  name="array_name[]" value="show_email"  id="enable_display_formemail"
	<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_email")
		{echo "checked";}
	}
	?>/> 
	<label for="enable_display_formemail"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo">  <input type="checkbox" name="array_req[]" id="wpsm_testi_email_form" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_email_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
    <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#imageoption_wpsm">
  <div class="panel-heading"> <i></i>Image Option</div>
</div>
  	
	
	<div id="imageoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Image
				</td>
				<td>
						<div class="squaredTwo">  
	<input type="checkbox"  name="array_name[]" value="show_img"  id="enable_display_formimg" 
	<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_img")
		{echo "checked";}
	}
	?>/>
		
	<label for="enable_display_formimg"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo">  <input id="wpsm_testi_image_form"  type="checkbox" name="array_req[]" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_image_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
    <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#websiteoption_wpsm">
  <div class="panel-heading"> <i></i>Website Option</div>
</div>
  	
	
	<div id="websiteoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Website
				</td>
				<td>
						<div class="squaredTwo">  
<input type="checkbox"  name="array_name[]" value="show_website"  id="enable_display_formwebsite" 
<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_website")
		{echo "checked";}
	}
	?>/>
		
	<label for="enable_display_formwebsite"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo">  <input id="wpsm_testi_Website_form"  type="checkbox" name="array_req[]" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_Website_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
    <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#urloption_wpsm">
  <div class="panel-heading"> <i></i>URL Option</div>
</div>
  	
	
	<div id="urloption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show URL
				</td>
				<td>
						<div class="squaredTwo">  
<input type="checkbox" name="array_name[]" value="show_url"  id="enable_display_formwebsiteurl"
<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_url")
		{echo "checked";}
	}
	?>/>
		
	<label for="enable_display_formwebsiteurl"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo">  <input type="checkbox" id="wpsm_testi_Website_url_form" name="array_req[]" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_Website_url_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
    <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#designationoption_wpsm">
  <div class="panel-heading"> <i></i>Designation Option</div>
</div>
  	
	
	<div id="designationoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Designation
				</td>
				<td>
						<div class="squaredTwo">  
<input type="checkbox"  name="array_name[]" value="show_desig"  id="enable_display_formdes" 
<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_desig")
		{echo "checked";}
	}
	?>
/>
		
	<label for="enable_display_formdes"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo"> <input id="wpsm_testi_Website_form_designation_form"  type="checkbox" name="array_req[]" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_Website_form_designation_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
    <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#ratingoption_wpsm">
  <div class="panel-heading"> <i></i>Rating Option</div>
</div>
  	
	
	<div id="ratingoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Rating
				</td>
				<td>
						<div class="squaredTwo">  
<input type="checkbox"  name="array_name[]" value="show_rate"  id="enable_display_formrating"  
<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_rate")
		{echo "checked";}
	}
	?>/>
		
	<label for="enable_display_formrating"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo"> <input type="checkbox" id="wpsm_testi_Website_rating_form" name="array_req[]" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_Website_rating_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
    <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#descriptionoption_wpsm">
  <div class="panel-heading"> <i></i>Description Option</div>
</div>
  	
	
	<div id="descriptionoption_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Description
				</td>
				<td>
						<div class="squaredTwo">  
<input type="checkbox"  name="array_name[]" value="show_description"  id="enable_display_formdescription"
<?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formdata']=="show_description")
		{echo "checked";}
	}
	?>
	/>
		
	<label for="enable_display_formdescription"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					Required
				</td>
				<td><div class="squaredTwo"> <input  type="checkbox" id="wpsm_testi_Website_description_form" name="array_req[]" value="yes" <?php 
	for($m=0;$m<7;$m++)
	{
	if($testi_form_Settings[$m]['display_formreq']=="yes")
		{echo "checked";}
	}
	?>/><label for="wpsm_testi_Website_description_form"></label>
</div></td>
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>



  <!--START GDPR SETTING-->
   <li>

  	<div class=" ui-state-default formli-style myiconwpsm_testi collapsed" data-toggle="collapse" data-target="#gdpr_wpsm">
  <div class="panel-heading"> <i></i>GDPR Option</div>
</div>
  	
	
	<div id="gdpr_wpsm" class="collapse">

<table class="my-table-testi">
			<tr>
				<td>
						Show Description
				</td>
				<td>
						<div >  
<input type="radio"  name="array_name[]" value="gdpr_description"  id="gdpr_description" checked="true" />
		
	<label for="enable_display_formdescription"></label>
</div> 
	

				</td>
			</tr>
			<tr>
				<td>
					External Link
				</td>
				<td><div > 
					<input type="radio"  name="array_name[]" value="gdpr_elink"  id="gdpr_elink"/>
					<label for="wpsm_testi_Website_description_form"></label>
</div></td>
			</tr>

			<tr  id="wpsm_gdpr_content">
				<td colspan="2">
				<textarea id="gdpr_external_content" name="gdpr_external_content" rows="5" cols="20">I Consent to having this website store my submitted information so they can respond to my inquiry.</textarea>
				<input style="display: none;" id="gdpr_external_link" type="text" name="gdpr_external_link" value="https://www.google.com/">
				</td>
				
			</tr>
		</table>

<!-- 
		<span id="name_req"> </span> -->
</div>
  </li>
  <!-- END GDPR SETTING -->







































  
</ul>
                  </div>
                </div>
              </div>
              <!--end testimonial form section-->
            </div>
            
           


<style type="text/css">
.formli-style{
	    padding: 12px 20px 10px 42px;
    background-color: #23282d;
    color: #fff;
    position: relative;
    font-size: 12px;
}	
.formli-style i {
    position: absolute;
    left: 10px;
    top: 10px;
	font-size:18px;
    padding: 5px;
    cursor: move;}
    .myiconwpsm_testi i:before{
    	content: "\f068";
    	font-family: FontAwesome;
    	font-style: normal;
    }  .myiconwpsm_testi.collapsed i:before{
    	content: "\f067"
    }
   .myiconwpsm_testi .panel-heading{
	font-weight: bold;
    text-transform: uppercase;
}
.squaredTwo {
  width: 28px;
  height: 28px;
  position: relative;
  display: inline-block;
  margin: 5px;
  background: #fcfff4;
  background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
}
.squaredTwo label {
  width: 20px;
  height: 20px;
  cursor: pointer;
  position: absolute;
  left: 4px;
  top: 4px;
  background: linear-gradient(to bottom, #222222 0%, #45484d 100%);
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px white;
}
.squaredTwo label:after {
  content: '';
     width: 14px;
    height: 7px;
  position: absolute;
  top: 4px;
  left: 4px;
  border: 3px solid #fcfff4;
  border-top: none;
  border-right: none;
  background: transparent;
  opacity: 0;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.squaredTwo label:hover::after {
  opacity: 0.3;
}
.squaredTwo input[type=checkbox] {
  visibility: hidden;
}
.squaredTwo input[type=checkbox]:checked + label:after {
  opacity: 1;
}
.my-table-testi{
	    width: 100%;
    border: 1px solid #000;
    border-collapse: collapse;

    }.my-table-testi td{
    	    border: 1px solid #000;
    padding: 5px 10px;
    font-weight: bold;
    }

</style>
<style>

#testi_pro_accordion_id .panel{
    border: none;
    box-shadow: none;
    border-radius: 0;
    margin-bottom: 15px;
}
#testi_pro_accordion_id .panel-heading{
    padding: 0;
}
#testi_pro_accordion_id .panel-title a{
    display: block;
    font-size: 16px;
    font-weight: bold;
    line-height: 24px;
    color: #fff;
    background: #5f62ba;
    border: 1px solid #5f62ba;
    padding: 15px 20px 15px 47px;
    position: relative;
    transition: all 0.5s ease 0s;
	text-decoration: none;
}
#testi_pro_accordion_id .panel-title a.collapsed{
    background: #fff;
    border-color: #ddd;
    color: #888;
}
#testi_pro_accordion_id .panel-title a:before{
    content: "\f106";
    font-family: 'FontAwesome';
    font-size: 18px;
    position: absolute;
    top: 30%;
    left: 20px;
    transition: all 0.3s ease 0s;
}
#testi_pro_accordion_id .panel-title a.collapsed:before{
    content: "\f107";
}
#testi_pro_accordion_id .panel-body{
    font-size: 16px;
    color: #888;
    line-height: 25px;
    border: 2px solid #5f62ba;
    border-top: none;
    padding: 10px 15px;
}
#testi_pro_accordion_id .panel-title a:hover,
#testi_pro_accordion_id .panel-title a:focus{
    text-decoration: none;
    outline: none;
}
.wpsm_sb_tooltip_div{
	color:#fff !important;
	padding:10px;
	text-align:center;
	
}
.sb_tooltip_img{
	width:400px;
	
}
.sb_tooltip_img_sec_bg{
	width:200px;
}
.postbox .inside{
	padding-right: 2px !important;
	padding-left: 2px !important;
}
</style>
<script>
jQuery('.ac_tooltip').darkTooltip({
		opacity:1,
		gravity:'east',
		size:'small'
	});
</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		//name
		jQuery("#enable_display_formusery").click(function(){
		jQuery("#name_req").show();	
		});
		jQuery("#disable_display_formusern").click(function(){
		jQuery("#name_req").hide();	
		});

		//email
		jQuery("#enable_display_formemail").click(function(){
		jQuery("#email_req").show();	
		});

		jQuery("#disable_display_formemail").click(function(){
		jQuery("#email_req").hide();	
		});

		//email
		jQuery("#enable_display_formimg").click(function(){
		jQuery("#img_req").show();	
		});

		jQuery("#disable_display_formimg").click(function(){
		jQuery("#img_req").hide();	
		});	

		//website
		jQuery("#enable_display_formwebsite").click(function(){
		jQuery("#website_req").show();	
		});

		jQuery("#disable_display_formwebsite").click(function(){
		jQuery("#website_req").hide();	
		});	

		//URL
		jQuery("#enable_display_formwebsiteurl").click(function(){
		jQuery("#url_req").show();	
		});

		jQuery("#disable_display_formwebsiteurl").click(function(){
		jQuery("#url_req").hide();	
		});	
		
		//designation
		jQuery("#enable_display_formdes").click(function(){
		jQuery("#des_req").show();	
		});

		jQuery("#disable_display_formdes").click(function(){
		jQuery("#des_req").hide();	
		});

		//rating
		jQuery("#enable_display_formrating").click(function(){
		jQuery("#rate_req").show();	
		});

		jQuery("#disable_display_formdes").click(function(){
		jQuery("#rate_req").hide();	
		});

		
		//rating
		jQuery("#enable_display_formdescription").click(function(){
		jQuery("#description_req").show();	
		});

		jQuery("#disable_display_formdescription").click(function(){
		jQuery("#description_req").hide();	
		});

		//gdpr setting
		jQuery("#gdpr_description").click(function(){
		jQuery("#wpsm_gdpr_content").show();	
		jQuery("#gdpr_external_content").show();
		jQuery("#gdpr_external_link").hide();
		});
		jQuery("#gdpr_elink").click(function(){
		jQuery("#wpsm_gdpr_content").show();	
		jQuery("#gdpr_external_content").hide();
		jQuery("#gdpr_external_link").show();
		});

	});
</script>
<script type="text/javascript">
 jQuery( function() {
    jQuery( "#sortabledd" ).sortable();
    jQuery( "#sortabledd" ).disableSelection();
  } );
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_box_opacity_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 10,
		min:0,
		slide: function( event, ui ) {
		jQuery( "#ts_box_opacity" ).val( ui.value );
      }
		});
		jQuery( "#ts_box_opacity_id" ).slider("value",<?php if(isset($ts_box_opacity)){ echo $ts_box_opacity; } else{ echo 5; } ?> );
		jQuery( "#ts_box_opacity" ).val( jQuery( "#ts_box_opacity_id" ).slider("value") );
    
  });
</script>

<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_sec_title_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 80,
		min:10,
		slide: function( event, ui ) {
		jQuery( "#ts_sec_title_size" ).val( ui.value );
      }
		});
		
		jQuery( "#ts_sec_title_size_id" ).slider("value",<?php if(isset($ts_sec_title_size)){ echo $ts_sec_title_size; } else{ echo 36; } ?> );
		jQuery( "#ts_sec_title_size" ).val( jQuery( "#ts_sec_title_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_name_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 40,
		min:8,
		slide: function( event, ui ) {
		jQuery( "#ts_name_size" ).val( ui.value );
      }
		});
		jQuery( "#ts_name_size_id" ).slider("value",<?php if(isset($ts_name_size)){ echo $ts_name_size; } else{ echo 20; } ?> );
		jQuery( "#ts_name_size" ).val( jQuery( "#ts_name_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_email_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max:18,
		min:5,
		slide: function( event, ui ) {
		jQuery( "#ts_email_size" ).val( ui.value );
      }
		});
		jQuery( "#ts_email_size_id" ).slider("value",<?php if(isset($ts_email_size)){ echo $ts_email_size; } else{ echo 12; } ?> );
		jQuery( "#ts_email_size" ).val( jQuery( "#ts_email_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_website_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 18,
		min:5,
		slide: function( event, ui ) {
		jQuery( "#ts_website_size" ).val( ui.value );
      }
		});
		jQuery( "#ts_website_size_id" ).slider("value",<?php if(isset($ts_website_size)){ echo $ts_website_size; } else{ echo 12; } ?> );
		jQuery( "#ts_website_size" ).val( jQuery( "#ts_website_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_position_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 20,
		min:8,
		slide: function( event, ui ) {
		jQuery( "#ts_position_size" ).val( ui.value );
      }
		});
		jQuery( "#ts_position_size_id" ).slider("value",<?php if(isset($ts_position_size)){ echo $ts_position_size; } else{ echo 13; } ?> );
		jQuery( "#ts_position_size" ).val( jQuery( "#ts_position_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_content_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max:50,
		min:8,
		slide: function( event, ui ) {
		jQuery( "#ts_content_size" ).val( ui.value );
      }
		});
		jQuery( "#ts_content_size_id" ).slider("value",<?php if(isset($ts_content_size)){ echo $ts_content_size; } else{ echo 36; } ?> );
		jQuery( "#ts_content_size" ).val( jQuery( "#ts_content_size_id" ).slider( "value") );
    
  });
</script>
<script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_sec_title_weight_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 900,
			min:100,
			step: 100,
			slide: function( event, ui ) {
			jQuery( "#ts_sec_title_weight" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_sec_title_weight_id" ).slider("value",<?php if(isset($ts_sec_title_weight)){ echo $ts_sec_title_weight; } else{ echo 500; }  ?>);
		jQuery( "#ts_sec_title_weight" ).val( jQuery( "#ts_sec_title_weight_id" ).slider( "value") );

	});
</script> 
<script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_name_weight_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 900,
			min:100,
			step: 100,
			slide: function( event, ui ) {
			jQuery( "#ts_name_weight" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_name_weight_id" ).slider("value",<?php if(isset($ts_name_weight)){ echo $ts_name_weight; } else{ echo 500; }  ?>);
		jQuery( "#ts_name_weight" ).val( jQuery( "#ts_name_weight_id" ).slider( "value") );

	});
</script> 
<script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_position_weight_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 900,
			min:100,
			step: 100,
			slide: function( event, ui ) {
			jQuery( "#ts_position_weight" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_position_weight_id" ).slider("value",<?php if(isset($ts_position_weight)){ echo $ts_position_weight; } else{ echo 500; }  ?>);
		jQuery( "#ts_position_weight" ).val( jQuery( "#ts_position_weight_id" ).slider( "value") );

	});
</script> 
<script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_content_weight_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 900,
			min:100,
			step: 100,
			slide: function( event, ui ) {
			jQuery( "#ts_content_weight" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_content_weight_id" ).slider("value",<?php if(isset($ts_content_weight)){ echo $ts_content_weight; } else{ echo 500; }  ?>);
		jQuery( "#ts_content_weight" ).val( jQuery( "#ts_content_weight_id" ).slider( "value") );

	});
</script> 
<script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_content_line_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 50,
			min:14,
			slide: function( event, ui ) {
			jQuery( "#ts_content_line" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_content_line_id" ).slider("value",<?php if(isset($ts_content_line)){ echo $ts_content_line; } else{ echo 24; }  ?>);
		jQuery( "#ts_content_line" ).val( jQuery( "#ts_content_line_id" ).slider( "value") );

	});
</script> 
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_star_shdw_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 5,
		min:-5,
		slide: function( event, ui ) {
		jQuery( "#ts_star_shdw" ).val( ui.value );
      }
		});
		jQuery( "#ts_star_shdw_id" ).slider("value",<?php if(isset($ts_star_shdw)){ echo $ts_star_shdw; } else{ echo 1; } ?> );
		jQuery( "#ts_star_shdw" ).val( jQuery( "#ts_star_shdw_id" ).slider("value") );
    
  });
</script>
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_img_bg_opacity_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 10,
		min:0,
		slide: function( event, ui ) {
		jQuery( "#ts_img_bg_opacity" ).val( ui.value );
      }
		});
		jQuery( "#ts_img_bg_opacity_id" ).slider("value",<?php if(isset($ts_img_bg_opacity)){ echo $ts_img_bg_opacity; } else{ echo 5; } ?> );
		jQuery( "#ts_img_bg_opacity" ).val( jQuery( "#ts_img_bg_opacity_id" ).slider( "value") );
    
  });
</script>
<Script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_padding_LR_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 400,
			min:1,
			slide: function( event, ui ) {
			jQuery( "#ts_padding_LR" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_padding_LR_id" ).slider("value",<?php if(isset($ts_padding_LR)){ echo $ts_padding_LR; } else{ echo 50; }  ?>);
		jQuery( "#ts_padding_LR" ).val( jQuery( "#ts_padding_LR_id" ).slider( "value") );

	});
</script> 
<Script>
	//font slider size script
	jQuery(function() {
		jQuery( "#ts_padding_TB_id" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 400,
			min:1,
			slide: function( event, ui ) {
			jQuery( "#ts_padding_TB" ).val( ui.value );
		  }
		});
		
		jQuery( "#ts_padding_TB_id" ).slider("value",<?php if(isset($ts_padding_TB)){ echo $ts_padding_TB; } else{ echo 50; }  ?>);
		jQuery( "#ts_padding_TB" ).val( jQuery( "#ts_padding_TB_id" ).slider( "value") );

	});
</script> 
<script>
function get_font_group(){
	  
	 var family_group = jQuery('#font_family option:selected').closest('optgroup').prop('label');
	 jQuery("#font_family_group").val(family_group);
			
  }
</script>
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#my_star_size_id" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 30,
		min:8,
		slide: function( event, ui ) {
		jQuery( "#my_star_size" ).val( ui.value );
      }
		});
		jQuery( "#my_star_size_id" ).slider("value",<?php if(isset($my_star_size)){ echo $my_star_size; } else{ echo 20; } ?> );
		jQuery( "#my_star_size" ).val( jQuery( "#my_star_size_id" ).slider("value") );
    
  });
</script>
<script>
		function ts_img_bg_select(){
			
			 value = jQuery("input[name=ts_image_bg]:checked").val();
			 
			 if(value=="Color"){
				jQuery(".ts_clr_bg_group").show(300);
				jQuery(".ts_img_bg_group").hide(300);
			}
			else if(value=="Image"){
				jQuery(".ts_img_bg_group").show(300);
				jQuery(".ts_clr_bg_group").hide(300);
			}
			else{
				jQuery(".ts_img_bg_group").hide(300);
				jQuery(".ts_clr_bg_group").hide(300);
				
			}
			
		}
</script>
<script>
		function ts_nav_select(){
			
			 value = jQuery("input[name=ts_nav_type]:checked").val();
			 
			 if(value=="1"){
				jQuery(".ts_btn_group").show(300);
				jQuery(".ts_dot_group").hide(300);
			}
			else if(value=="2"){
				jQuery(".ts_dot_group").show(300);
				jQuery(".ts_btn_group").hide(300);
			}
			else{
				jQuery(".ts_dot_group").show(300);
				jQuery(".ts_btn_group").show(300);
				
			}
			
		}
</script>
<script>
		function ts_btn_select(){
			
			 value = jQuery("input[name=ts_btn_type]:checked").val();
			 
			 if(value=="Text"){
				jQuery(".ts_text_group").show(300);
				jQuery(".ts_icon_group").hide(300);
			}
			else if(value=="Icon"){
				jQuery(".ts_icon_group").show(300);
				jQuery(".ts_text_group").hide(300);
			}
			else{
				jQuery(".ts_text_group").show(300);
				jQuery(".ts_icon_group").show(300);
				
			}
			
		}
</script>


<script>
//select navigation btn icon  type
function select_btn_icon(id){
	jQuery(".ts_btn_icon_wrapper").removeClass("active");
	jQuery("#ts_btn_icon_"+id).addClass("active");
	jQuery("#ts_nav_btn_icon"+id).prop( "checked", true );
}
</script>

<!-- filter category script-->
<script type="text/javascript">
jQuery(document).ready(function(){
var iteration=jQuery("#iteration").val();
	if(iteration=="")
	{
		var dycount=0;
		//console.log(dycount);
	}
	else
	{
		var dycount=iteration;
		//console.log(dycount);
	}	
jQuery("#add_fcategory").click(function(){
	//alert(dycount++);
	console.log(dycount++);
	jQuery("#flt_div").show();
	//jQuery(".show_flt_slt_opt").show()
jQuery("#apnd_fcategory").append('<input style="margin: 5px;width: 90%;" type="text" class="filter_category_class" name="filter_category[]" id="idfiltercategory_'+dycount+'" onchange="append_filter_value('+dycount+')"/><a href="#" id="gm_dy_rm_class'+dycount+'" class="append_des_rm_class" onclick="return rm_append_des('+dycount+')"><span class="fa fa-trash-o"></span></a>');
});

})	
</script>

<!-- remove button box-->
<script type="text/javascript">
function rm_append_des(id)
{
jQuery("#idfiltercategory_"+id).remove();	
jQuery("#gm_dy_rm_class"+id).remove();	
jQuery(".option_id"+id).remove();
return false;
//console.log(id);
}	
</script>

<!-- adding select option to select box-->
<script type="text/javascript">
function append_filter_value(id)
{
var apnd_opt_val=jQuery(".option_id"+id).val();
if(typeof(apnd_opt_val)  === "undefined")
{
	//alert('ok');
	var txtbox_val=jQuery("#idfiltercategory_"+id).val();
	jQuery(".append_filter_categoy").append('<option class="option_id'+id+'" value="'+txtbox_val+'">'+txtbox_val+'</option');
}
else
{
	//alert('not ok');
	var txtbox_val=jQuery("#idfiltercategory_"+id).val();
	jQuery(".option_id"+id).html('<option class="option_id'+id+'" value="'+txtbox_val+'">'+txtbox_val+'</option');
}


}	

function adding_dynamic_gm_designation(id)
{
	var apnd_opt_val=jQuery("#idfiltercategory_"+id).val();
	jQuery(".option_id"+id).html('<option class="option_id'+id+'" value="'+apnd_opt_val+'">'+apnd_opt_val+'</option');
}	
</script>



