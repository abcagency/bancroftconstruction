<?php
	$args = array('p'=>$testimonial_pro_id ,'post_type' => 'testi_builder_pro','orderby' => 'ASC');
	$loop = new WP_Query( $args );

	while ( $loop->have_posts() ) : $loop->the_post();
		$post_id =  get_the_ID();
		$testi_Meta_Settings = unserialize(get_post_meta( $post_id, 'testi_Meta_Settings', true));
		
		$templates            = $testi_Meta_Settings['templates'];
		$templates_presets    = $testi_Meta_Settings['templates_presets'];
		$ts_sec_title_clr     = $testi_Meta_Settings['ts_sec_title_clr'];
		$ts_name_clr 		  = $testi_Meta_Settings['ts_name_clr'];
		$ts_email_clr 		  = $testi_Meta_Settings['ts_email_clr'];
		$ts_web_name_clr	  = $testi_Meta_Settings['ts_web_name_clr'];
		$ts_link_hvr_clr 	  = $testi_Meta_Settings['ts_link_hvr_clr'];
		$ts_position_clr      = $testi_Meta_Settings['ts_position_clr'];
		$ts_content_clr 	  = $testi_Meta_Settings['ts_content_clr'];
		$ts_content_bg_clr	  = $testi_Meta_Settings['ts_content_bg_clr'];
		$ts_box_opacity 	  = $testi_Meta_Settings['ts_box_opacity'];
		$ts_img_border_clr    = $testi_Meta_Settings['ts_img_border_clr'];
		$ts_quote_clr         = $testi_Meta_Settings['ts_quote_clr'];
		
		//Font-size,Font-weight and Style Settings
		
		$ts_sec_title_size   = $testi_Meta_Settings['ts_sec_title_size'];
		$ts_name_size  		 = $testi_Meta_Settings['ts_name_size'];
		$ts_email_size 		 = $testi_Meta_Settings['ts_email_size'];
		$ts_website_size 	 = $testi_Meta_Settings['ts_website_size'];
		$ts_position_size 	 = $testi_Meta_Settings['ts_position_size'];
		$ts_content_size 	 = $testi_Meta_Settings['ts_content_size'];
		$ts_sec_title_weight = $testi_Meta_Settings['ts_sec_title_weight'];
		$ts_name_weight 	 = $testi_Meta_Settings['ts_name_weight'];
		$ts_position_weight  = $testi_Meta_Settings['ts_position_weight'];
		$ts_content_weight   = $testi_Meta_Settings['ts_content_weight'];
		$font_family 		 = $testi_Meta_Settings['font_family'];
		$ts_fillstar_clr 	 = $testi_Meta_Settings['ts_fillstar_clr'];
		$ts_empstar_clr 	 = $testi_Meta_Settings['ts_empstar_clr'];
		$ts_filstr_bord_clr   = $testi_Meta_Settings['ts_filstr_bord_clr'];
		$my_star_size        = $testi_Meta_Settings['my_star_size'];
		
		
		//Display Settings
		
		$ts_display_sec_title= $testi_Meta_Settings['ts_display_sec_title'];
		$ts_display_content  = $testi_Meta_Settings['ts_display_content'];
		$ts_display_image 	 = $testi_Meta_Settings['ts_display_image'];
		$ts_display_name 	 = $testi_Meta_Settings['ts_display_name'];
		$ts_display_position = $testi_Meta_Settings['ts_display_position'];
		$ts_display_website  = $testi_Meta_Settings['ts_display_website'];		
		$ts_display_email 	 = $testi_Meta_Settings['ts_display_email'];
		$ts_display_rating 	 = $testi_Meta_Settings['ts_display_rating'];
		
		//Navigation Settings
		
		$ts_nav_type 	           = $testi_Meta_Settings['ts_nav_type'];
		$ts_btn_type 	           = $testi_Meta_Settings['ts_btn_type'];
		$ts_nav_right_text 	       = $testi_Meta_Settings['ts_nav_right_text'];
		$ts_nav_left_text          = $testi_Meta_Settings['ts_nav_left_text'];
		$ts_nav_btn_icon           = $testi_Meta_Settings['ts_nav_btn_icon'];
		$ts_nav_btn_size           = $testi_Meta_Settings['ts_nav_btn_size'];
		$ts_nav_btn_position 	   = $testi_Meta_Settings['ts_nav_btn_position'];
		$ts_nav_btn_font_clr       = $testi_Meta_Settings['ts_nav_btn_font_clr'];
		$ts_nav_btn_font_hvr_clr   = $testi_Meta_Settings['ts_nav_btn_font_hvr_clr'];
		$ts_nav_btn_bg_clr 	       = $testi_Meta_Settings['ts_nav_btn_bg_clr'];
		$ts_nav_btn_hvr_clr 	   = $testi_Meta_Settings['ts_nav_btn_hvr_clr'];
		$ts_nav_dot_size 	       = $testi_Meta_Settings['ts_nav_dot_size'];
		$ts_nav_dot_shape          = $testi_Meta_Settings['ts_nav_dot_shape'];
		$ts_nav_dot_bg_clr         = $testi_Meta_Settings['ts_nav_dot_bg_clr'];
		$ts_nav_dot_hvr_clr 	   = $testi_Meta_Settings['ts_nav_dot_hvr_clr'];

		//Background And Layout Settings
		
		$ts_layout 			 = $testi_Meta_Settings['ts_layout'];
		$ts_image_bg 		 = $testi_Meta_Settings['ts_image_bg'];
		$testi_bg_clr 		 = $testi_Meta_Settings['testi_bg_clr'];
		$testi_favicon 		 = $testi_Meta_Settings['testi_favicon'];
		$ts_bg_size 		 = $testi_Meta_Settings['ts_bg_size'];
		$ts_bg_repeat 		 = $testi_Meta_Settings['ts_bg_repeat'];
		$ts_bg_position 	 = $testi_Meta_Settings['ts_bg_position'];
		$ts_show_img_overlay = $testi_Meta_Settings['ts_show_img_overlay'];
		$ts_img_overlay_clr  = $testi_Meta_Settings['ts_img_overlay_clr'];
		$ts_img_bg_opacity   = $testi_Meta_Settings['ts_img_bg_opacity'];
		$ts_show_prlex 		 = $testi_Meta_Settings['ts_show_prlex'];			
		$ts_padding_LR       = $testi_Meta_Settings['ts_padding_LR'];
		$ts_padding_TB       = $testi_Meta_Settings['ts_padding_TB'];
		$ts_img_overlay_clr  = $testi_Meta_Settings['ts_img_overlay_clr'];
		$custom_css       = $testi_Meta_Settings['custom_css'];
		
		$All_data = unserialize(get_post_meta( $post_id, 'wpsm_testi_pro_data', true));
		$TotalCount =  get_post_meta( $post_id, 'wpsm_testi_pro_count', true );		
		$wpsm_section_title =  get_post_meta( $post_id, 'wpsm_testi_pro_section_title', true );	
		/* css files */
		

		if(count($testi_Meta_Settings)) 
		{
			$option_names = array(
        	"ts_filter_bg_clr" => "#f4f4f4",
        	"ts_filter_activebg_clr"=> "#000000",
        	"ts_filter_title_clr"=> "#cccccc",
        	"ts_filter_active_title_clr"=> "#ffffff",
        	"ts_content_line"=>"24",
				);
		foreach($option_names as $option_name => $default_value) {
				if(isset($testi_Meta_Settings[$option_name])) 
					${"" . $option_name}  = $testi_Meta_Settings[$option_name];
				else
					${"" . $option_name}  = $default_value;
			}
		}
		require('common-style.php');	
		include('defaultcss.php');
		 ?>	 
		
		<?php
	
		      ////carousal and grid layout Settings
		
		if($templates_presets=="carousel")
		{
if(($templates==1) || ($templates==3) || ($templates==4) || ($templates==6)  || ($templates==9) || ($templates==10) || ($templates==11) || ($templates==12) || ($templates==14) || ($templates==16) || ($templates==17) || ($templates==21) || ($templates==22) || ($templates==27)  || ($templates==29) || ($templates==31) || ($templates==34) || ($templates==35) || ($templates==36) || ($templates==41)  || ($templates==52)  || ($templates==57))
			{
			$ts_wrapper_cls= "wpsm_ts_wrapper_$post_id";
			$ts_wrapper_id= "wpsm_testi_box_grid_$post_id";
			}
			else
			{
			$ts_wrapper_cls= "wpsm_testi_box_carousel_$post_id wpsm_ts_wrapper_$post_id owl-carousel owl-theme";
			$ts_wrapper_id="wpsm_testi_box_carousel_$post_id";	
			}

		}
		//when template preset is grid below code would be work.
		else
		{
			$ts_wrapper_cls= "wpsm_ts_wrapper_$post_id";
			$ts_wrapper_id= "wpsm_testi_box_grid_$post_id";
		}
	

		if($templates_presets=="carousel")
		{
if(($templates==1) || ($templates==3) || ($templates==4) || ($templates==6) || ($templates==9) || ($templates==10) || ($templates==11) || ($templates==12) || ($templates==14) || ($templates==16) || ($templates==17)  || ($templates==21) || ($templates==22) || ($templates==27)  || ($templates==29) || ($templates==31) || ($templates==34) || ($templates==35) || ($templates==36) || ($templates==41)  || ($templates==52)  || ($templates==57))
			{
					if(in_array($ts_layout, array("12", "6", "4", "3", "2")))
						{
						$ts_Layout_Cls= "col-md-".$ts_layout;
						}
			
					else
						{
						$ts_Layout_Cls="wpsm_col-md-".$ts_layout." wpsm_col-lg-".$ts_layout;
						}
			}
			else
			{
			$ts_Layout_Cls= "item";	
			}
		}
		
		
			elseif(in_array($ts_layout, array("12", "6", "4", "3", "2")))
			{
				$ts_Layout_Cls= "col-md-".$ts_layout;
			}
			
		else
		{
			$ts_Layout_Cls="wpsm_col-md-".$ts_layout." wpsm_col-lg-".$ts_layout;
		}
							
		

		//carousal and nav text and icon settings
		if($templates_presets=="carousel")
		{
if(($templates==1) || ($templates==3) || ($templates==4) || ($templates==6) || ($templates==9) || ($templates==10) || ($templates==11) || ($templates==12) || ($templates==14) || ($templates==16) || ($templates==17)  || ($templates==21) || ($templates==22) || ($templates==27)  || ($templates==29) || ($templates==31) || ($templates==34) || ($templates==35) || ($templates==36) || ($templates==41) || ($templates==52)  || ($templates==57))
			{

			}
			else
			{
			if($ts_nav_type=='1' || $ts_nav_type=='3'){$carousel_nav_type ='true';}
			else {$carousel_nav_type = "false";}

			if($ts_nav_type=='2' || $ts_nav_type=='3'){$carousel_dots_type = 'true';}
			else{$carousel_dots_type = "false";}
			
			$nav_left_text="";
			$nav_right_text="";
			
			if($ts_nav_type=='1' || $ts_nav_type=='3')
			{	
				switch($ts_btn_type)
				{	
					case("Text"):  
						$nav_left_text= $ts_nav_left_text;
						$nav_right_text= $ts_nav_right_text;
					break;
					case("Icon"): 
							switch($ts_nav_btn_icon)
							{	
								case(1):  
									$nav_left_text= "<i class='fa fa-angle-double-left wpsm_test_carousal_icon'></i>";
									$nav_right_text="<i class='fa fa-angle-double-right wpsm_test_carousal_icon'></i>";
								break;
								case(2): 
									$nav_left_text= "<i class='fa fa-arrow-left wpsm_test_carousal_icon'></i>";
									$nav_right_text="<i class='fa fa-arrow-right wpsm_test_carousal_icon'></i>";
								break;
								case(3):  
									$nav_left_text= "<i class='fa fa-angle-left wpsm_test_carousal_icon'></i>";
									$nav_right_text="<i class='fa fa-angle-right wpsm_test_carousal_icon'></i>";
								break;
								case(4): 
									$nav_left_text= "<i class='fa fa-chevron-left wpsm_test_carousal_icon'></i>";
									$nav_right_text="<i class='fa fa-chevron-right wpsm_test_carousal_icon'></i>";
								break;
								case(5):  
									$nav_left_text= "<i class='fa fa-caret-left wpsm_test_carousal_icon'></i>";
									$nav_right_text="<i class='fa fa-caret-right wpsm_test_carousal_icon'></i>";
								break;
								case(6): 
									$nav_left_text= "<i class='fa fa-long-arrow-left wpsm_test_carousal_icon'></i>";
									$nav_right_text="<i class='fa fa-long-arrow-right wpsm_test_carousal_icon'></i>";
								break;
							}
					break;
					case("Both"):  
							switch($ts_nav_btn_icon)
							{	
								case(1): 
									$nav_left_text= "<i class='fa fa-angle-double-left wpsm_test_carousal_icon'></i> ".$ts_nav_left_text;
									$nav_right_text=$ts_nav_right_text." <i class='fa fa-angle-double-right wpsm_test_carousal_icon'></i>";
								break;
								case(2):
									$nav_left_text= "<i class='fa fa-arrow-left wpsm_test_carousal_icon'></i> ".$ts_nav_left_text;
									$nav_right_text=$ts_nav_right_text." <i class='fa fa-arrow-right wpsm_test_carousal_icon'></i>";
								break;
								case(3): 
									$nav_left_text= "<i class='fa fa-angle-left wpsm_test_carousal_icon'></i> ".$ts_nav_left_text;
									$nav_right_text=$ts_nav_right_text." <i class='fa fa-angle-right wpsm_test_carousal_icon'></i>";
								break;
								case(4):
									$nav_left_text= "<i class='fa fa-chevron-left wpsm_test_carousal_icon'></i> ".$ts_nav_left_text;
									$nav_right_text=$ts_nav_right_text." <i class='fa fa-chevron-right wpsm_test_carousal_icon'></i>";
								break;
								case(5): 
									$nav_left_text= "<i class='fa fa-caret-left wpsm_test_carousal_icon'></i> ".$ts_nav_left_text;
									$nav_right_text=$ts_nav_right_text." <i class='fa fa-caret-right wpsm_test_carousal_icon'></i>";
								break;
								case(6):
									$nav_left_text= "<i class='fa fa-long-arrow-left wpsm_test_carousal_icon'></i> ".$ts_nav_left_text;
									$nav_right_text=$ts_nav_right_text." <i class='fa fa-long-arrow-right wpsm_test_carousal_icon'></i>";
								break;
							}
					break;
				}
				
			}
		}

}
		include('designs/design-'.$templates.'/style.php');
		?>
		
		<div class="wpsm_testi_pro_row" id="wpsm_testi_pro_row_<?php echo $post_id; ?>">
			<div class="wpsm_testi_pro_row_overlay_<?php echo $post_id; ?>" >
			<?php 
			if($TotalCount>0) 
			{
				$i=1;
				switch($ts_layout)
					{	
						case(12):
							$cnrow=1;
						break;
						case(6):
							$cnrow=2;
						break;
						case(4):
							$cnrow=3;
						break;
						case(5):
							$cnrow=5;
						break;
						case(2):
							$cnrow=6;
						break;
						case(8):
							$cnrow=8;
						break;
						case(10):
							$cnrow=10;
						break;
						case(3):
							$cnrow=4;
						break;
					}
				
			?>
			
				<?php if($ts_display_sec_title=="yes")
				{
				?>
				<div class="wpsm_sec-title"><h3><?php echo $wpsm_section_title;?></h3></div><?php 
			} ?>
			

		
				<div class='<?php echo $ts_wrapper_cls;?>' id='<?php echo $ts_wrapper_id;?>'>
				
				<?php
				require('designs/design-'.$templates.'/index.php');?>
				
				</div>	
					
<?php 		}
			else{
				echo "<h3>No Testimonial Found </h3>";
			}
			?>	
			</div>
		</div>
		<?php
		if($templates_presets=="carousel"){
if(($templates==1) || ($templates==3) || ($templates==4) || ($templates==6)  || ($templates==9) || ($templates==10) || ($templates==11) || ($templates==12) || ($templates==14) || ($templates==16) || ($templates==17) || ($templates==21) || ($templates==22) || ($templates==27)  || ($templates==29) || ($templates==31) || ($templates==34) || ($templates==35) || ($templates==36) || ($templates==41) || ($templates==52)  || ($templates==57))
			{

			}
			else
			{
?>

<script>
		jQuery(document).ready(function(){
			//jQuery(".wpsm_testi_box_carousel_<?php echo $post_id;?>").testiCarousel({
			jQuery(".wpsm_testi_box_carousel_<?php echo $post_id;?>").owlCarousel({
				margin:10,
				responsiveClass:true,
				navigation:true,
				<?php
				if($ts_btn_type=="Text")
				{
				?>
				navText: ["<?php echo $ts_nav_left_text;?>","<?php echo $ts_nav_right_text;?>"],
				<?php	
				}
				if($ts_btn_type=="Icon")
				{
				?>
				navText: ["<?php echo $nav_left_text;?>","<?php echo $nav_right_text;?>"],
				<?php	
				}
				?>
				rewindNav : false,
			    nav:<?php echo $carousel_nav_type;?>,				
				dots:<?php echo $carousel_dots_type;?>,
				autoplay:true,   
				autoplayTimeout: 5000,
                autoplaySpeed: 500,
                loop:true,
				responsive: {
				  0: {
					items: 1
				  },
				  500: {
					items: 1
				  },
				  
				  1000: {
					items:<?php echo $cnrow;?>
				  }
				}
			});
			
		});
		</script>
<?php 
		}
		}
		?>
		
		<script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
		<script type="text/javascript">
		  WebFont.load({
			google: {
			  families: ['<?php echo $font_family; ?>'] 
			}
		  });
		</script>
	<?php
		require('star-rating-front.php');
		
	endwhile; 

?>