<?php
	$args = array('p'=>$wpsm_team_shortcod_pro_id ,'post_type' => 'team_builder_pro','orderby' => 'ASC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$post_id =  get_the_ID();
		$wpsm_teampro_Meta_Settings = unserialize(get_post_meta( $post_id, 'wpsm_teampro_Meta_Settings', true));
		$templates            = $wpsm_teampro_Meta_Settings['templates'];
		$templates_presets    = $wpsm_teampro_Meta_Settings['templates_presets'];
		$tm_sec_title_clr     = $wpsm_teampro_Meta_Settings['tm_sec_title_clr'];
		$tm_name_clr 		  = $wpsm_teampro_Meta_Settings['tm_name_clr'];
		$tm_email_clr 		  = $wpsm_teampro_Meta_Settings['tm_email_clr'];
		$tm_web_name_clr	  = $wpsm_teampro_Meta_Settings['tm_web_name_clr'];
		$tm_link_hvr_clr 	  = $wpsm_teampro_Meta_Settings['tm_link_hvr_clr'];
		$tm_position_clr      = $wpsm_teampro_Meta_Settings['tm_position_clr'];
		
		$tm_content_clr 	  = $wpsm_teampro_Meta_Settings['tm_content_clr'];
		$tm_content_bg_clr	  = $wpsm_teampro_Meta_Settings['tm_content_bg_clr'];
		$tm_box_opacity 	  = $wpsm_teampro_Meta_Settings['tm_box_opacity'];
		$tm_img_border_clr    = $wpsm_teampro_Meta_Settings['tm_img_border_clr'];
		$tm_quote_clr         = $wpsm_teampro_Meta_Settings['tm_quote_clr'];
		$tm_bg_content_hover_clr         = $wpsm_teampro_Meta_Settings['tm_bg_content_hover_clr'];
		$tm_pop_bg_clr         = $wpsm_teampro_Meta_Settings['tm_pop_bg_clr'];
		$tm_img_hover_clr         = $wpsm_teampro_Meta_Settings['tm_img_hover_clr'];
		$tm_img_hover_opcity         = $wpsm_teampro_Meta_Settings['tm_img_hover_opcity'];
		
		//social icon setting
		$tm_sibg_clr            = $wpsm_teampro_Meta_Settings['tm_sibg_clr'];
		$tm_sihbg_clr            = $wpsm_teampro_Meta_Settings['tm_sihbg_clr'];
		$tm_si_clr            = $wpsm_teampro_Meta_Settings['tm_si_clr'];
		$tm_sih_clr            = $wpsm_teampro_Meta_Settings['tm_sih_clr'];
		$tm_sib_clr            = $wpsm_teampro_Meta_Settings['tm_sib_clr'];
		$tm_sibh_clr            = $wpsm_teampro_Meta_Settings['tm_sibh_clr'];
		$team_social_icon_size            = $wpsm_teampro_Meta_Settings['team_social_icon_size'];
		$tm_rd_link            = $wpsm_teampro_Meta_Settings['tm_rd_link'];

		//Font-size,Font-weight and Style Settings
		
		$tm_sec_title_size   = $wpsm_teampro_Meta_Settings['tm_sec_title_size'];
		$tm_name_size  		 = $wpsm_teampro_Meta_Settings['tm_name_size'];
		$tm_email_size 		 = $wpsm_teampro_Meta_Settings['tm_email_size'];
		$tm_website_size 	 = $wpsm_teampro_Meta_Settings['tm_website_size'];
		$tm_position_size 	 = $wpsm_teampro_Meta_Settings['tm_position_size'];
		$tm_content_size 	 = $wpsm_teampro_Meta_Settings['tm_content_size'];
		$tm_sec_title_weight = $wpsm_teampro_Meta_Settings['tm_sec_title_weight'];
		$tm_name_weight 	 = $wpsm_teampro_Meta_Settings['tm_name_weight'];
		$tm_position_weight  = $wpsm_teampro_Meta_Settings['tm_position_weight'];
		$tm_content_weight   = $wpsm_teampro_Meta_Settings['tm_content_weight'];
		$font_family 		 = $wpsm_teampro_Meta_Settings['font_family'];
		$my_star_size        = $wpsm_teampro_Meta_Settings['my_star_size'];
		
		//Display Settings		
		$tm_display_sec_title= $wpsm_teampro_Meta_Settings['tm_display_sec_title'];
		$tm_display_content  = $wpsm_teampro_Meta_Settings['tm_display_content'];
		$tm_display_image 	 = $wpsm_teampro_Meta_Settings['tm_display_image'];
		$tm_display_name 	 = $wpsm_teampro_Meta_Settings['tm_display_name'];
		$tm_display_position = $wpsm_teampro_Meta_Settings['tm_display_position'];
		$tm_display_website  = $wpsm_teampro_Meta_Settings['tm_display_website'];		
		$tm_display_email 	 = $wpsm_teampro_Meta_Settings['tm_display_email'];
		$tm_display_rating 	 = $wpsm_teampro_Meta_Settings['tm_display_rating'];
		
		//Navigation Settings		
		$tm_nav_type 	           = $wpsm_teampro_Meta_Settings['tm_nav_type'];
		$tm_btn_type 	           = $wpsm_teampro_Meta_Settings['tm_btn_type'];
		$tm_nav_right_text 	       = $wpsm_teampro_Meta_Settings['tm_nav_right_text'];
		$tm_nav_left_text          = $wpsm_teampro_Meta_Settings['tm_nav_left_text'];
		$tm_nav_btn_icon           = $wpsm_teampro_Meta_Settings['tm_nav_btn_icon'];
		$tm_nav_btn_size           = $wpsm_teampro_Meta_Settings['tm_nav_btn_size'];
		$tm_nav_btn_position 	   = $wpsm_teampro_Meta_Settings['tm_nav_btn_position'];
		$tm_nav_btn_font_clr       = $wpsm_teampro_Meta_Settings['tm_nav_btn_font_clr'];
		$tm_nav_btn_font_hvr_clr   = $wpsm_teampro_Meta_Settings['tm_nav_btn_font_hvr_clr'];
		$tm_nav_btn_bg_clr 	       = $wpsm_teampro_Meta_Settings['tm_nav_btn_bg_clr'];
		$tm_nav_btn_hvr_clr 	   = $wpsm_teampro_Meta_Settings['tm_nav_btn_hvr_clr'];
		$tm_nav_dot_size 	       = $wpsm_teampro_Meta_Settings['tm_nav_dot_size'];
		$tm_nav_dot_shape          = $wpsm_teampro_Meta_Settings['tm_nav_dot_shape'];
		$tm_nav_dot_bg_clr         = $wpsm_teampro_Meta_Settings['tm_nav_dot_bg_clr'];
		$tm_nav_dot_hvr_clr 	   = $wpsm_teampro_Meta_Settings['tm_nav_dot_hvr_clr'];

		//Background And Layout Settings	
		$tm_layout 			 = $wpsm_teampro_Meta_Settings['tm_layout'];
		$tm_pop_style 			 = $wpsm_teampro_Meta_Settings['tm_pop_style'];
		
		
		$tm_image_bg 		 = $wpsm_teampro_Meta_Settings['tm_image_bg'];
		$team_bg_clr 		 = $wpsm_teampro_Meta_Settings['team_bg_clr'];
		$team_favicon 		 = $wpsm_teampro_Meta_Settings['team_favicon'];
		$tm_bg_size 		 = $wpsm_teampro_Meta_Settings['tm_bg_size'];
		$tm_bg_repeat 		 = $wpsm_teampro_Meta_Settings['tm_bg_repeat'];
		$tm_bg_position 	 = $wpsm_teampro_Meta_Settings['tm_bg_position'];
		$tm_show_img_overlay = $wpsm_teampro_Meta_Settings['tm_show_img_overlay'];
		$tm_img_overlay_clr  = $wpsm_teampro_Meta_Settings['tm_img_overlay_clr'];
		$tm_img_bg_opacity   = $wpsm_teampro_Meta_Settings['tm_img_bg_opacity'];
		$tm_show_prlex 		 = $wpsm_teampro_Meta_Settings['tm_show_prlex'];			
		$tm_padding_LR       = $wpsm_teampro_Meta_Settings['tm_padding_LR'];
		$tm_padding_TB       = $wpsm_teampro_Meta_Settings['tm_padding_TB'];
		$tm_img_overlay_clr  = $wpsm_teampro_Meta_Settings['tm_img_overlay_clr'];
		$custom_css       = $wpsm_teampro_Meta_Settings['custom_css'];
		
		$All_data = unserialize(get_post_meta( $post_id, 'wpsm_team_pro_data', true));
		$TotalCount =  get_post_meta( $post_id, 'wpsm_team_pro_count', true );		
		$wpsm_section_title =  get_post_meta( $post_id, 'wpsm_team_pro_section_title', true );	

		if(count($wpsm_teampro_Meta_Settings)) 
		{
			$option_names = array(
        	"tm_filter_bg_clr" => "#f4f4f4",
        	"tm_filter_activebg_clr"=> "#000000",
        	"tm_filter_title_clr"=> "#cccccc",
        	"tm_filter_active_title_clr"=> "#ffffff",
        	"tm_content_line"=>"24",
        	"tm_name_hover_clr"=>"#ffffff",
        	"tm_position_hover_clr"=>"#000000",
        	"tm_slide_left_right"=>"left",
        	"tm_pop_color"=>"dark",
				);
		foreach($option_names as $option_name => $default_value) {
				if(isset($wpsm_teampro_Meta_Settings[$option_name])) 
					${"" . $option_name}  = $wpsm_teampro_Meta_Settings[$option_name];
				else
					${"" . $option_name}  = $default_value;
			}
		}
		require('common-style.php');	
		include('defaultcss.php');

		if($tm_pop_style=="no_popup")
		{

		}
		else
		{
		if(($templates_presets=="grider") || ($templates_presets=="table"))
		{
			include('gridder.php');
		}
		else
		{
		if(($tm_pop_style=="modal") || ($tm_pop_style=="slide"))
		{
		include('pop.php');	
		}
		//if($tm_pop_style=="folding")
		else
		{
		include('folding.php');	
		}
		}
	}
		include('custom-scrollbar.php');
		 ?>	 
		<?php
		if($templates_presets=="carousel")
		{
			$tm_wrapper_cls= "wpsm_testi_box_carousel_$post_id wpsm_tm_wrapper_$post_id owl-carousel owl-theme";
			$tm_wrapper_id="wpsm_testi_box_carousel_$post_id";

		}
		//when template preset is grid below code would be work.
		else
		{
			$tm_wrapper_cls= "wpsm_tm_wrapper_$post_id";
			$tm_wrapper_id= "wpsm_testi_box_grid_$post_id";
		}
	

		if($templates_presets=="carousel")
		{
		if($templates==75)
			{
					if(in_array($tm_layout, array("12", "6", "4", "3", "2")))
						{
						$tm_Layout_Cls= "col-md-".$tm_layout;
						}
			
					else
						{
						$tm_Layout_Cls="wpsm_col-md-".$tm_layout." wpsm_col-lg-".$tm_layout;
						}
			}
			else
			{
			$tm_Layout_Cls= "item";	
			}
		}
			elseif(in_array($tm_layout, array("12", "6", "4", "3", "2")))
			{
				$tm_Layout_Cls= "col-md-".$tm_layout;
			}
			
		else
		{
			$tm_Layout_Cls="wpsm_col-md-".$tm_layout." wpsm_col-lg-".$tm_layout;
		}
							
		//carousal and nav text and icon settings
		if($templates_presets=="carousel")
		{
	if($templates==75)
			{

			}
			else
			{
			if($tm_nav_type=='1' || $tm_nav_type=='3'){$carousel_nav_type ='true';}
			else {$carousel_nav_type = "false";}

			if($tm_nav_type=='2' || $tm_nav_type=='3'){$carousel_dotm_type = 'true';}
			else{$carousel_dotm_type = "false";}
			
			$nav_left_text="";
			$nav_right_text="";
			
			if($tm_nav_type=='1' || $tm_nav_type=='3')
			{	
				switch($tm_btn_type)
				{	
					case("Text"):  
						$nav_left_text= $tm_nav_left_text;
						$nav_right_text= $tm_nav_right_text;
					break;
					case("Icon"): 
							switch($tm_nav_btn_icon)
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
							switch($tm_nav_btn_icon)
							{	
								case(1): 
									$nav_left_text= "<i class='fa fa-angle-double-left wpsm_test_carousal_icon'></i> ".$tm_nav_left_text;
									$nav_right_text=$tm_nav_right_text." <i class='fa fa-angle-double-right wpsm_test_carousal_icon'></i>";
								break;
								case(2):
									$nav_left_text= "<i class='fa fa-arrow-left wpsm_test_carousal_icon'></i> ".$tm_nav_left_text;
									$nav_right_text=$tm_nav_right_text." <i class='fa fa-arrow-right wpsm_test_carousal_icon'></i>";
								break;
								case(3): 
									$nav_left_text= "<i class='fa fa-angle-left wpsm_test_carousal_icon'></i> ".$tm_nav_left_text;
									$nav_right_text=$tm_nav_right_text." <i class='fa fa-angle-right wpsm_test_carousal_icon'></i>";
								break;
								case(4):
									$nav_left_text= "<i class='fa fa-chevron-left wpsm_test_carousal_icon'></i> ".$tm_nav_left_text;
									$nav_right_text=$tm_nav_right_text." <i class='fa fa-chevron-right wpsm_test_carousal_icon'></i>";
								break;
								case(5): 
									$nav_left_text= "<i class='fa fa-caret-left wpsm_test_carousal_icon'></i> ".$tm_nav_left_text;
									$nav_right_text=$tm_nav_right_text." <i class='fa fa-caret-right wpsm_test_carousal_icon'></i>";
								break;
								case(6):
									$nav_left_text= "<i class='fa fa-long-arrow-left wpsm_test_carousal_icon'></i> ".$tm_nav_left_text;
									$nav_right_text=$tm_nav_right_text." <i class='fa fa-long-arrow-right wpsm_test_carousal_icon'></i>";
								break;
							}
					break;
				}
				
			}
		}

}
		include('designs/design-'.$templates.'/style.php');
		?>
		
		<div class="wpsm_team_pro_row" id="wpsm_team_pro_row_<?php echo $post_id; ?>">
			<div class="wpsm_team_pro_row_overlay_<?php echo $post_id; ?>" >
			<?php 
			$TotalCount;
			if($TotalCount>0) 
			{
				$i=1;
				switch($tm_layout)
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
						default:
							$cnrow=1;
						break;
					}
				
				
			?>
			
				<?php if($tm_display_sec_title=="yes")
				{
				?>
				<div class="wpsm_sec-title"><h3><?php echo $wpsm_section_title;?></h3></div><?php 
			} ?>
				<?php
				/*
				<div class='<?php echo $tm_wrapper_cls;?>' id='<?php echo $tm_wrapper_id;?>'>
				*/
				?>
				
				<?php
				require('designs/design-'.$templates.'/index.php');?>

				<?php 
						if($tm_pop_style=="no_popup")
		{

		}
		else
		{
				if(($templates_presets=="grider") || ($templates_presets=="table"))
				{

				}
				else
				{
				if($tm_pop_style=="modal")
				{
					require('modal-content.php');
				}
				else if($tm_pop_style=="slide")
				{
					require('slide-content.php');
				}	
				else if($tm_pop_style=="folding")
				{
					require('folding-content.php');
				}	
				}	
				}					
				?>
				<?php
				/*
				</div>
				*/
				?>	
					
<?php 		}
			else{
				echo "<h3>No Testimonial Found </h3>";
			}
			?>	
			</div>
		</div>
		<?php
		if($templates_presets=="carousel"){
	if($templates==75)
			{

			}
			else
			{
			?>

<script>
		jQuery(document).ready(function(){
			//jQuery(".wpsm_testi_box_carousel_<?php echo $post_id;?>").testiCarousel({
			jQuery(".wpsm_testi_box_carousel_<?php echo $post_id;?>").owlCarousel({
				<?php
				if(($templates==23) || ($templates==20) || ($templates==11))
				{
				?>	
				stagePadding: 20,	
				<?php
				}
				?>
				margin:30,
				responsiveClass:true,
				navigation:true,
				<?php
				if($tm_btn_type=="Text")
				{
				?>
				navText: ["<?php echo $tm_nav_left_text;?>","<?php echo $tm_nav_right_text;?>"],
				<?php	
				}
				if($tm_btn_type=="Icon")
				{
				?>
				navText: ["<?php echo $nav_left_text;?>","<?php echo $nav_right_text;?>"],
				<?php	
				}
				?>
				rewindNav : false,
			    nav:<?php echo $carousel_nav_type;?>,				
				dots:<?php echo $carousel_dotm_type;?>,
				autoplay:true,   
				autoplayTimeout: 5000,
                autoplaySpeed: 500,
                loop:true,
				responsive: {
				  0: {
					items: 1
				  },
				  500: {
					items: 2
				  },
				  767: {
					items: 2
				  },
				  992: {
					items: 3
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
		
		<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
		<script type="text/javascript">
		  WebFont.load({
			google: {
			  families: ['<?php echo $font_family; ?>'] 
			}
		  });
		</script>
	<?php
		
	endwhile; 

?>
<?php
if($templates_presets=="filter")
{
?>
<style type="text/css">
#wpsm_team_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $tm_filter_title_clr;?> !important;
    background-color: <?php echo $tm_filter_bg_clr;?> !important;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $tm_filter_activebg_clr;?> !important;
    color:<?php echo $tm_filter_active_title_clr;?> !important;
}	
</style>

<script type="text/javascript">
jQuery(window).load(function(){
    var $container = jQuery('#wpsm_team_pro_row_<?php echo $post_id; ?> .portfolioContainer');
    $container.isotope({
        filter: '*',
         itemSelector: '.wpsm_grid_item',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    jQuery('#wpsm_team_pro_row_<?php echo $post_id; ?>  .portfolioFilter a').click(function(){
        jQuery('#wpsm_team_pro_row_<?php echo $post_id; ?>  .portfolioFilter .current').removeClass('current');
        jQuery(this).addClass('current');
 
        var selector = jQuery(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            itemSelector: '.wpsm_grid_item',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});

</script> 
<?php
}
?>

<!-- Model and slide js code-->
<?php 
		if($tm_pop_style=="no_popup")
		{

		}
		else
		{
if(($templates_presets=="grider") || ($templates_presets=="table"))
{

}
else
{
if(($tm_pop_style=="modal") || ($tm_pop_style=="slide"))
{
?>
<script type="text/javascript">
 var WpsmModel<?php echo $post_id; ?> = (function () {

  var $teamList = jQuery(".wpsm-team-popup-grid<?php echo $post_id; ?>"),
    $teamItems = jQuery(".wpsm-team-popup-items"),
    $teamItem = jQuery(".wpsm-popup-detail-box<?php echo $post_id; ?>"),
    $modal = jQuery('.wpsm-modal<?php echo $post_id; ?>'),
    init = function () {
      myActions();
    },

    myActions = function () {
      $teamItems.on("click", ".wpsm-popup-close<?php echo $post_id; ?>", PopupClose<?php echo $post_id; ?>);
      $teamList.on("click", ".wpsm-popup-trigger<?php echo $post_id; ?>", Modalopen<?php echo $post_id; ?>);
      $teamItems.on("click", ".wpsm-nav-item", Wpsmslider<?php echo $post_id; ?>);
      jQuery(document).on("click", ".wpsm-team-popup-items", bgclick<?php echo $post_id; ?>);     
      jQuery(document).keyup(keyBinding);
    },
    bgclick<?php echo $post_id; ?> = function (e) {
      if (e.target != this) return;
      PopupClose<?php echo $post_id; ?>(e);
    }
  Modalopen<?php echo $post_id; ?> = function (e) {
    e.preventDefault();
    $modal = jQuery(this).parents(".wpsm-modal<?php echo $post_id; ?>");
    var popItem = jQuery(this).attr('href');
    jQuery(popItem).parents('.wpsm-team-popup-items').addClass('wpsm-popup-on');
    jQuery(popItem).addClass('wpsm-popup-open<?php echo $post_id; ?>');
    jQuery('html').addClass('wpsm-popup-on');
    jQuery(".wpsm-scroll .wpsm-popup-content").mCustomScrollbar({
      theme:"dark",
      scrollInertia:400
    });
  },
    PopupClose<?php echo $post_id; ?> = function (e) {
      e.preventDefault();
      $teamItems.removeClass('wpsm-popup-on');
      $teamItem.removeClass('wpsm-popup-open<?php echo $post_id; ?>');
      jQuery('html').removeClass('wpsm-popup-on');
    },
    Wpsmslider<?php echo $post_id; ?> = function (e) {
      e.preventDefault();
      var direction = 'forward';
      if (jQuery(this).hasClass('wpsm-nav-left')) {
        direction = 'rewind';
      }
      PopupPlay<?php echo $post_id; ?>(direction);
    },
    keyBinding = function (e) {
      switch (e.keyCode) {
        case 27:
          PopupClose(e);
          break;
        case 39:
          PopupPlay('forward');
          break;
        case 37:
          PopupPlay('rewind');
          break;
      }
    },
    PopupPlay<?php echo $post_id; ?> = function (direction) {
      var $curentOpen = $modal.find('.wpsm-popup-open<?php echo $post_id; ?>'),
        $curenItem = $modal.find('.wpsm-popup-detail-box<?php echo $post_id; ?>'),
        $slideritem = $curentOpen.prev('.wpsm-popup-detail-box<?php echo $post_id; ?>'),
        $circleslide = $curenItem.last('.wpsm-popup-detail-box<?php echo $post_id; ?>');
      if (direction == 'forward') {
        $slideritem = $curentOpen.next('.wpsm-popup-detail-box<?php echo $post_id; ?>');
        $circleslide = $curenItem.first('.wpsm-popup-detail-box<?php echo $post_id; ?>');
      }
      if ($slideritem.length == 0) {
        $curentOpen.removeClass('wpsm-popup-open<?php echo $post_id; ?>');
        $circleslide.addClass('wpsm-popup-open<?php echo $post_id; ?>');
      } else {
        $curentOpen.removeClass('wpsm-popup-open<?php echo $post_id; ?>');
        $slideritem.addClass('wpsm-popup-open<?php echo $post_id; ?>');
      }
    };
  return {
    init: init
  }

})();
WpsmModel<?php echo $post_id; ?>.init();   
</script>   

<!-- End Modal and slide js code-->

<!--3D Folding Js-->
<?php
} 
else if($tm_pop_style=="folding")
{
?>
<script type="text/javascript">
 (function($) {

    $(".case-tab<?php echo $post_id; ?>").on("click", function(e) {
        e.preventDefault();

      var tab_id = $(this).attr("data-tab");

      $('.team-deatil-popup<?php echo $post_id; ?>').addClass('is-open');
      $(this).removeClass('is-open');

      $(".case-tab<?php echo $post_id; ?>").removeClass("active");
      $(".wpsm-team-popup").removeClass("active");

      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });

    $(".wpsm-popup-close").on("click", function(e) {
        e.preventDefault();
      $('.team-deatil-popup<?php echo $post_id; ?>').removeClass('is-open');
      $(".wpsm-team-popup").removeClass("active");
    });
  $(".wpsm-team-popup").mCustomScrollbar({
    theme:"dark",
    scrollInertia:400
  });
  
})(jQuery);   
</script>
<?php
}
}
}
?>
<!--End 3D Folding JS-->
