<?php
error_reporting(0);
	if(isset($PostID) && isset($_POST['testimonial_setting_pro_save_action'])) {	
		
			$templates_presets       = $_POST['templates_presets'];
			$templates   		     = $_POST['templates'];
			
			//Color settings
			
			$ts_ind_clr_display      = $_POST['ts_ind_clr_display'];
			$ts_sec_title_clr        = $_POST['ts_sec_title_clr'];
			$ts_name_clr   			 = $_POST['ts_name_clr'];
			$ts_email_clr  			 = $_POST['ts_email_clr'];
			$ts_web_name_clr  		 = $_POST['ts_web_name_clr'];
			$ts_link_hvr_clr         = $_POST['ts_link_hvr_clr'];
			$ts_position_clr  		 = $_POST['ts_position_clr'];
			$ts_star_clr  			 = $_POST['ts_star_clr'];
			$ts_content_clr  		 = $_POST['ts_content_clr'];
			$ts_content_bg_clr  	 = $_POST['ts_content_bg_clr'];
			$ts_box_opacity 	 	 = $_POST['ts_box_opacity'];
			$ts_img_border_clr  	 = $_POST['ts_img_border_clr'];
			$ts_quote_clr            = $_POST['ts_quote_clr'];
			$ts_filter_bg_clr		 =$_POST['ts_filter_bg_clr'];
			$ts_filter_activebg_clr  =$_POST['ts_filter_activebg_clr'];
			$ts_filter_title_clr     =$_POST['ts_filter_title_clr'];
			$ts_filter_active_title_clr=$_POST['ts_filter_active_title_clr'];
			//Star Settings
			
			$ts_fillstar_clr  		 = $_POST['ts_fillstar_clr'];
			$ts_filstr_bord_clr      = $_POST['ts_filstr_bord_clr'];
			$ts_empstar_clr  		 = $_POST['ts_empstar_clr'];
			if($my_star_size=='') { $my_star_size=1; }
			$my_star_size  			 = $_POST['my_star_size'];
			
			//Font-size,Font-weight and Style Settings
			
			$ts_sec_title_size  	 = $_POST['ts_sec_title_size'];
			$ts_name_size  			 = $_POST['ts_name_size'];
			$ts_email_size  		 = $_POST['ts_email_size'];
			$ts_website_size  		 = $_POST['ts_website_size'];
			$ts_position_size  		 = $_POST['ts_position_size'];
			$ts_content_size  		 = $_POST['ts_content_size'];
			$ts_sec_title_weight  	 = $_POST['ts_sec_title_weight'];
			$ts_name_weight  		 = $_POST['ts_name_weight'];
			$ts_position_weight  	 = $_POST['ts_position_weight'];
			$ts_content_weight  	 = $_POST['ts_content_weight'];
			$ts_content_line  	 = $_POST['ts_content_line'];
			$font_family  			 = $_POST['font_family'];			
							
			
			//Display Settings
			
			$ts_display_sec_title   = $_POST['ts_display_sec_title'];
			$ts_display_name        = $_POST['ts_display_name'];
			$ts_display_image       = $_POST['ts_display_image'];
			$ts_display_email       = $_POST['ts_display_email'];
			$ts_display_website     = $_POST['ts_display_website'];
			$ts_display_position    = $_POST['ts_display_position'];
			$ts_display_rating      = $_POST['ts_display_rating'];
			$ts_display_content     = $_POST['ts_display_content'];
			
			//Navigation Settings
			
			$ts_nav_type     			 = $_POST['ts_nav_type'];
			$ts_btn_type       			 = $_POST['ts_btn_type'];
			$ts_nav_right_text      	 = $_POST['ts_nav_right_text'];
			$ts_nav_left_text       	 = $_POST['ts_nav_left_text'];
			$ts_nav_btn_icon   		     = $_POST['ts_nav_btn_icon'];
			$ts_nav_btn_size    	 	 = $_POST['ts_nav_btn_size'];
			$ts_nav_btn_position    	 = $_POST['ts_nav_btn_position'];
			$ts_nav_btn_font_clr    	 = $_POST['ts_nav_btn_font_clr'];
			$ts_nav_btn_font_hvr_clr     = $_POST['ts_nav_btn_font_hvr_clr'];
			$ts_nav_btn_bg_clr     		 = $_POST['ts_nav_btn_bg_clr'];
			$ts_nav_btn_hvr_clr          = $_POST['ts_nav_btn_hvr_clr'];
			$ts_nav_dot_size     	     = $_POST['ts_nav_dot_size'];
			$ts_nav_dot_shape            = $_POST['ts_nav_dot_shape'];
			$ts_nav_dot_bg_clr    		 = $_POST['ts_nav_dot_bg_clr'];
			$ts_nav_dot_hvr_clr   		 = $_POST['ts_nav_dot_hvr_clr'];
			
			//Background And Layout Settings
			
			$ts_layout   		   = $_POST['ts_layout'];
			$ts_image_bg  	       = $_POST['ts_image_bg'];
			$testi_bg_clr  		   = $_POST['testi_bg_clr'];			
			$testi_favicon         = $_POST['testi_favicon'];
			$ts_bg_size            = $_POST['ts_bg_size'];
			$ts_bg_repeat  		   = $_POST['ts_bg_repeat'];
			$ts_bg_position  	   = $_POST['ts_bg_position'];
			$ts_show_img_overlay   = $_POST['ts_show_img_overlay'];			
			$ts_img_overlay_clr    = $_POST['ts_img_overlay_clr'];		
			$ts_img_bg_opacity     = $_POST['ts_img_bg_opacity'];			
			$ts_show_prlex         = $_POST['ts_show_prlex'];
			$ts_padding_LR    	   = $_POST['ts_padding_LR'];
			$ts_padding_TB   	   = $_POST['ts_padding_TB'];
			$ts_link_hvr_clr       = $_POST['ts_link_hvr_clr'];
			$ts_bg_repeat  		   = $_POST['ts_bg_repeat'];
			$ts_bg_position  	   = $_POST['ts_bg_position'];
			$custom_css  	       = $_POST['custom_css'];
			 

		//Frontent Testimonial Form Setting
			$All_dataas = array();
			$TotalCounts = count($_POST['array_name']);
			for($i=0; $i < $TotalCounts; $i++) {
				$array_name = sanitize_text_field($_POST['array_name'][$i]);
				$array_req = stripslashes(sanitize_text_field($_POST['array_req'][$i]));
				if($array_name=="gdpr_description")
				{
				$array_name=$array_name."-".$_POST['gdpr_external_content'];
				}
				if($array_name=="gdpr_elink")
				{
				$array_name=$array_name."-".$_POST['gdpr_external_link'];
				}
				$All_dataas[] = array(
						'display_formdata' => $array_name,
						'display_formreq' => $array_req,

					);
			}
			
			
			$Settings_MyArray = serialize( array(

			
			'templates_presets'    => $templates_presets,
			'templates' 	       => $templates,
			
			//Color settings
			'mytext'   			   => $mytext,
			'ts_ind_clr_display'   => $ts_ind_clr_display,
			'ts_sec_title_clr' 	   => $ts_sec_title_clr,
			'ts_name_clr' 	   	   => $ts_name_clr,
			'ts_email_clr' 	   	   => $ts_email_clr,
			'ts_web_name_clr' 	   => $ts_web_name_clr,
			'ts_link_hvr_clr'      => $ts_link_hvr_clr,
			'ts_position_clr' 	   => $ts_position_clr,
			'ts_star_clr' 	       => $ts_star_clr,
			'ts_content_clr' 	   => $ts_content_clr,
			'ts_content_bg_clr'    => $ts_content_bg_clr,
			'ts_box_opacity' 	   => $ts_box_opacity,
			'ts_img_border_clr'    => $ts_img_border_clr,
			'ts_quote_clr'     	   => $ts_quote_clr,
			
			//star settings
			
			'ts_fillstar_clr' 	   => $ts_fillstar_clr,
			'ts_filstr_bord_clr'   => $ts_filstr_bord_clr,
			'ts_empstar_clr' 	   => $ts_empstar_clr,	
			'my_star_size' 	  	   => $my_star_size,
			
			//Font-size,Font-weight and Style Settings
		
			'ts_sec_title_size'    => $ts_sec_title_size,
			'ts_name_size' 	   	   => $ts_name_size,
			'ts_email_size' 	   => $ts_email_size,
			'ts_website_size' 	   => $ts_website_size,
			'ts_position_size' 	   => $ts_position_size,
			'ts_content_size' 	   => $ts_content_size,
			'ts_sec_title_weight'  => $ts_sec_title_weight,
			'ts_name_weight' 	   => $ts_name_weight,
			'ts_position_weight'   => $ts_position_weight,
			'ts_content_weight'    => $ts_content_weight,
			'ts_content_line'    => $ts_content_line,
			'font_family' 	   	   => $font_family,
			
			
			//Display Settings
			
			'ts_display_sec_title'  => $ts_display_sec_title,
			'ts_display_name'       => $ts_display_name,
			'ts_display_image' 	    => $ts_display_image,
			'ts_display_email' 	    => $ts_display_email,
			'ts_display_website'    => $ts_display_website,
			'ts_display_position'   => $ts_display_position,
			'ts_display_rating'     => $ts_display_rating,
			'ts_display_content'    => $ts_display_content,
			
			//Navigation Settings
			
			'ts_nav_type'   			=> $ts_nav_type,
			'ts_btn_type'       		=> $ts_btn_type,
			'ts_nav_right_text' 	    => $ts_nav_right_text,
			'ts_nav_left_text' 	   	 	=> $ts_nav_left_text,
			'ts_nav_btn_icon'       	=> $ts_nav_btn_icon,
			'ts_nav_btn_size'       	=> $ts_nav_btn_size,
			'ts_nav_btn_position'       => $ts_nav_btn_position,
			'ts_nav_btn_font_clr'   	=> $ts_nav_btn_font_clr,
			'ts_nav_btn_font_hvr_clr'   => $ts_nav_btn_font_hvr_clr,
			'ts_nav_btn_bg_clr'    		=> $ts_nav_btn_bg_clr,
			'ts_nav_btn_hvr_clr' 	    => $ts_nav_btn_hvr_clr,
			'ts_nav_dot_size' 	    	=> $ts_nav_dot_size,
			'ts_nav_dot_shape'    		=> $ts_nav_dot_shape,
			'ts_nav_dot_bg_clr'   		=> $ts_nav_dot_bg_clr,
			'ts_nav_dot_hvr_clr'        => $ts_nav_dot_hvr_clr,

			//Background And Layout Settings
	
			'ts_layout' 	   		=> $ts_layout,
			'ts_image_bg' 	   		=> $ts_image_bg,	
			'testi_bg_clr' 	   		=> $testi_bg_clr,
			'testi_favicon' 	    => $testi_favicon,				
			'ts_bg_size' 	        => $ts_bg_size,
			'ts_bg_repeat' 	   		=> $ts_bg_repeat,
			'ts_bg_position' 	    => $ts_bg_position,
			'ts_show_img_overlay'   => $ts_show_img_overlay,
			'ts_img_overlay_clr'    => $ts_img_overlay_clr,
			'ts_img_bg_opacity'     => $ts_img_bg_opacity,
			'ts_show_prlex' 	    => $ts_show_prlex,
			'ts_padding_LR' 	   	=> $ts_padding_LR,
			'ts_padding_TB' 	   	=> $ts_padding_TB,
			
			'ts_link_hvr_clr' 	=> $ts_link_hvr_clr,
			'custom_css'    	=> $custom_css,

			//filter color setting
			'ts_filter_bg_clr' 	=> $ts_filter_bg_clr,
			'ts_filter_activebg_clr' 	=> $ts_filter_activebg_clr,
			'ts_filter_title_clr' 	=> $ts_filter_title_clr,
			'ts_filter_active_title_clr' 	=> $ts_filter_active_title_clr,
			
		));
		update_post_meta($PostID, 'testi_Meta_Settings', $Settings_MyArray);
		update_post_meta($PostID, 'testi_user_form_Settings', serialize($All_dataas));

		//filter category code
		$total=count($_POST['filter_category']);
	$All_data = array();
	if($total)
	{
		for($i=0; $i<$total; $i++)
		{
			if($_POST['filter_category'][$i]!="")
			{
			$filter_category=$_POST['filter_category'][$i];
			$filter_category_isotope=strtolower(str_replace(' ', '_', $_POST['filter_category'][$i]));
			$All_data[]=array(
			'filter_category'=>$filter_category,
			'filter_category_isotope'=>$filter_category_isotope,
			);
			}
		}
		update_post_meta(get_the_ID(),'filter_category_info',serialize($All_data));
		update_post_meta(get_the_ID(),'filter_category_counts',$total);
	}			
	}
	
?>