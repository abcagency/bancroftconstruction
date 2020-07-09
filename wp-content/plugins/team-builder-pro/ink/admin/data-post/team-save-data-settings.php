<?php

	if(isset($PostID) && isset($_POST['teambuilder_setting_pro_save_action'])) {	

			$templates_presets       = $_POST['templates_presets'];
			$templates   		     = $_POST['templates'];
			
			//Color settings
			$tm_ind_clr_display      = $_POST['tm_ind_clr_display'];
			$tm_sec_title_clr        = $_POST['tm_sec_title_clr'];
			$tm_name_clr   			 = $_POST['tm_name_clr'];
			$tm_name_hover_clr   	= $_POST['tm_name_hover_clr'];
			$tm_email_clr  			 = $_POST['tm_email_clr'];
			$tm_web_name_clr  		 = $_POST['tm_web_name_clr'];
			$tm_link_hvr_clr         = $_POST['tm_link_hvr_clr'];
			$tm_position_clr  		 = $_POST['tm_position_clr'];
			$tm_position_hover_clr   = $_POST['tm_position_hover_clr'];
			$tm_star_clr  			 = $_POST['tm_star_clr'];
			$tm_content_clr  		 = $_POST['tm_content_clr'];
			$tm_content_bg_clr  	 = $_POST['tm_content_bg_clr'];
			$tm_box_opacity 	 	 = $_POST['tm_box_opacity'];



			$tm_bg_content_hover_clr 	 	 = $_POST['tm_bg_content_hover_clr'];
			$tm_pop_bg_clr 	 	 = $_POST['tm_pop_bg_clr'];
			$tm_img_hover_clr 	 	 = $_POST['tm_img_hover_clr'];
			$tm_img_hover_opcity 	 	 = $_POST['tm_img_hover_opcity'];








			$tm_img_border_clr  	 = $_POST['tm_img_border_clr'];
			$tm_quote_clr            = $_POST['tm_quote_clr'];
			$tm_filter_bg_clr		 =$_POST['tm_filter_bg_clr'];
			$tm_filter_activebg_clr  =$_POST['tm_filter_activebg_clr'];
			$tm_filter_title_clr     =$_POST['tm_filter_title_clr'];
			$tm_filter_active_title_clr=$_POST['tm_filter_active_title_clr'];
			//Star Settings
			
			$tm_sibg_clr  		 	= $_POST['tm_sibg_clr'];
			$tm_sihbg_clr      		= $_POST['tm_sihbg_clr'];
			$tm_si_clr  		 	= $_POST['tm_si_clr'];




			$tm_sih_clr  		 = $_POST['tm_sih_clr'];
			$tm_sib_clr  		 = $_POST['tm_sib_clr'];
			$tm_sibh_clr  		 = $_POST['tm_sibh_clr'];
			$team_social_icon_size  		 = $_POST['team_social_icon_size'];
			$tm_rd_link  		 = $_POST['tm_rd_link'];
			if($my_star_size=='') { $my_star_size=1; }
			$my_star_size  			 = $_POST['my_star_size'];
			
			//Font-size,Font-weight and Style Settings
			
			$tm_sec_title_size  	 = $_POST['tm_sec_title_size'];
			$tm_name_size  			 = $_POST['tm_name_size'];
			$tm_email_size  		 = $_POST['tm_email_size'];
			$tm_website_size  		 = $_POST['tm_website_size'];
			$tm_position_size  		 = $_POST['tm_position_size'];
			$tm_content_size  		 = $_POST['tm_content_size'];
			$tm_sec_title_weight  	 = $_POST['tm_sec_title_weight'];
			$tm_name_weight  		 = $_POST['tm_name_weight'];
			$tm_position_weight  	 = $_POST['tm_position_weight'];
			$tm_content_weight  	 = $_POST['tm_content_weight'];
			$tm_content_line  	 = $_POST['tm_content_line'];
			$font_family  			 = $_POST['font_family'];			
							
			
			//Display Settings
			
			$tm_display_sec_title   = $_POST['tm_display_sec_title'];
			$tm_display_name        = $_POST['tm_display_name'];
			$tm_display_image       = $_POST['tm_display_image'];
			$tm_display_email       = $_POST['tm_display_email'];
			$tm_display_website     = $_POST['tm_display_website'];
			$tm_display_position    = $_POST['tm_display_position'];
			$tm_display_rating      = $_POST['tm_display_rating'];
			$tm_display_content     = $_POST['tm_display_content'];
			
			//Navigation Settings
			
			$tm_nav_type     			 = $_POST['tm_nav_type'];
			$tm_btn_type       			 = $_POST['tm_btn_type'];
			$tm_nav_right_text      	 = $_POST['tm_nav_right_text'];
			$tm_nav_left_text       	 = $_POST['tm_nav_left_text'];
			$tm_nav_btn_icon   		     = $_POST['tm_nav_btn_icon'];
			$tm_nav_btn_size    	 	 = $_POST['tm_nav_btn_size'];
			$tm_nav_btn_position    	 = $_POST['tm_nav_btn_position'];
			$tm_nav_btn_font_clr    	 = $_POST['tm_nav_btn_font_clr'];
			$tm_nav_btn_font_hvr_clr     = $_POST['tm_nav_btn_font_hvr_clr'];
			$tm_nav_btn_bg_clr     		 = $_POST['tm_nav_btn_bg_clr'];
			$tm_nav_btn_hvr_clr          = $_POST['tm_nav_btn_hvr_clr'];
			$tm_nav_dot_size     	     = $_POST['tm_nav_dot_size'];
			$tm_nav_dot_shape            = $_POST['tm_nav_dot_shape'];
			$tm_nav_dot_bg_clr    		 = $_POST['tm_nav_dot_bg_clr'];
			$tm_nav_dot_hvr_clr   		 = $_POST['tm_nav_dot_hvr_clr'];
			
			//Background And Layout Settings
			
			$tm_layout   		   = $_POST['tm_layout'];
			$tm_pop_style   		   = $_POST['tm_pop_style'];
			$tm_slide_left_right   		   = $_POST['tm_slide_left_right'];
			$tm_pop_color   		   = $_POST['tm_pop_color'];
			$tm_image_bg  	       = $_POST['tm_image_bg'];
			$team_bg_clr  		   = $_POST['team_bg_clr'];			
			$team_favicon         = $_POST['team_favicon'];
			$tm_bg_size            = $_POST['tm_bg_size'];
			$tm_bg_repeat  		   = $_POST['tm_bg_repeat'];
			$tm_bg_position  	   = $_POST['tm_bg_position'];
			$tm_show_img_overlay   = $_POST['tm_show_img_overlay'];			
			$tm_img_overlay_clr    = $_POST['tm_img_overlay_clr'];		
			$tm_img_bg_opacity     = $_POST['tm_img_bg_opacity'];			
			$tm_show_prlex         = $_POST['tm_show_prlex'];
			$tm_padding_LR    	   = $_POST['tm_padding_LR'];
			$tm_padding_TB   	   = $_POST['tm_padding_TB'];
			$tm_link_hvr_clr       = $_POST['tm_link_hvr_clr'];
			$tm_bg_repeat  		   = $_POST['tm_bg_repeat'];
			$tm_bg_position  	   = $_POST['tm_bg_position'];
			$custom_css  	       = $_POST['custom_css'];
			 

		
			
			
			$Settings_MyArray = serialize( array(

			
			'templates_presets'    => $templates_presets,
			'templates' 	       => $templates,
			
			//Color settings
			'mytext'   			   => $mytext,
			'tm_ind_clr_display'   => $tm_ind_clr_display,
			'tm_sec_title_clr' 	   => $tm_sec_title_clr,
			'tm_name_clr' 	   	   => $tm_name_clr,
			'tm_name_hover_clr'    => $tm_name_hover_clr,
			'tm_email_clr' 	   	   => $tm_email_clr,
			'tm_web_name_clr' 	   => $tm_web_name_clr,
			'tm_link_hvr_clr'      => $tm_link_hvr_clr,
			'tm_position_clr' 	   => $tm_position_clr,
			'tm_position_hover_clr' => $tm_position_hover_clr,
			'tm_star_clr' 	       => $tm_star_clr,
			'tm_content_clr' 	   => $tm_content_clr,
			'tm_content_bg_clr'    => $tm_content_bg_clr,
			'tm_box_opacity' 	   => $tm_box_opacity,


			'tm_bg_content_hover_clr' 	   => $tm_bg_content_hover_clr,
			'tm_pop_bg_clr' 	   => $tm_pop_bg_clr,
			'tm_img_hover_clr' 	   => $tm_img_hover_clr,
			'tm_img_hover_opcity' 	   => $tm_img_hover_opcity,



			'tm_img_border_clr'    => $tm_img_border_clr,
			'tm_quote_clr'     	   => $tm_quote_clr,
			
			//star settings
			
			'tm_sibg_clr' 	   => $tm_sibg_clr,
			'tm_sihbg_clr'   => $tm_sihbg_clr,
			'tm_si_clr' 	   => $tm_si_clr,	


			'tm_sih_clr' 	   => $tm_sih_clr,
			'tm_sib_clr' 	   => $tm_sib_clr,
			'tm_sibh_clr' 	   => $tm_sibh_clr,
			'team_social_icon_size' 	   => $team_social_icon_size,
			'tm_rd_link' 	   => $tm_rd_link,






			'my_star_size' 	  	   => $my_star_size,
			
			//Font-size,Font-weight and Style Settings
		
			'tm_sec_title_size'    => $tm_sec_title_size,
			'tm_name_size' 	   	   => $tm_name_size,
			'tm_email_size' 	   => $tm_email_size,
			'tm_website_size' 	   => $tm_website_size,
			'tm_position_size' 	   => $tm_position_size,
			'tm_content_size' 	   => $tm_content_size,
			'tm_sec_title_weight'  => $tm_sec_title_weight,
			'tm_name_weight' 	   => $tm_name_weight,
			'tm_position_weight'   => $tm_position_weight,
			'tm_content_weight'    => $tm_content_weight,
			'tm_content_line'    => $tm_content_line,
			'font_family' 	   	   => $font_family,
			
			
			//Display Settings
			
			'tm_display_sec_title'  => $tm_display_sec_title,
			'tm_display_name'       => $tm_display_name,
			'tm_display_image' 	    => $tm_display_image,
			'tm_display_email' 	    => $tm_display_email,
			'tm_display_website'    => $tm_display_website,
			'tm_display_position'   => $tm_display_position,
			'tm_display_rating'     => $tm_display_rating,
			'tm_display_content'    => $tm_display_content,
			
			//Navigation Settings
			
			'tm_nav_type'   			=> $tm_nav_type,
			'tm_btn_type'       		=> $tm_btn_type,
			'tm_nav_right_text' 	    => $tm_nav_right_text,
			'tm_nav_left_text' 	   	 	=> $tm_nav_left_text,
			'tm_nav_btn_icon'       	=> $tm_nav_btn_icon,
			'tm_nav_btn_size'       	=> $tm_nav_btn_size,
			'tm_nav_btn_position'       => $tm_nav_btn_position,
			'tm_nav_btn_font_clr'   	=> $tm_nav_btn_font_clr,
			'tm_nav_btn_font_hvr_clr'   => $tm_nav_btn_font_hvr_clr,
			'tm_nav_btn_bg_clr'    		=> $tm_nav_btn_bg_clr,
			'tm_nav_btn_hvr_clr' 	    => $tm_nav_btn_hvr_clr,
			'tm_nav_dot_size' 	    	=> $tm_nav_dot_size,
			'tm_nav_dot_shape'    		=> $tm_nav_dot_shape,
			'tm_nav_dot_bg_clr'   		=> $tm_nav_dot_bg_clr,
			'tm_nav_dot_hvr_clr'        => $tm_nav_dot_hvr_clr,

			//Background And Layout Settings
	
			'tm_layout' 	   		=> $tm_layout,
			'tm_pop_style' 	   		=> $tm_pop_style,
			'tm_slide_left_right' 	   		=> $tm_slide_left_right,
			'tm_pop_color' 	   		=> $tm_pop_color,
			'tm_image_bg' 	   		=> $tm_image_bg,	
			'team_bg_clr' 	   		=> $team_bg_clr,
			'team_favicon' 	    => $team_favicon,				
			'tm_bg_size' 	        => $tm_bg_size,
			'tm_bg_repeat' 	   		=> $tm_bg_repeat,
			'tm_bg_position' 	    => $tm_bg_position,
			'tm_show_img_overlay'   => $tm_show_img_overlay,
			'tm_img_overlay_clr'    => $tm_img_overlay_clr,
			'tm_img_bg_opacity'     => $tm_img_bg_opacity,
			'tm_show_prlex' 	    => $tm_show_prlex,
			'tm_padding_LR' 	   	=> $tm_padding_LR,
			'tm_padding_TB' 	   	=> $tm_padding_TB,
			
			'tm_link_hvr_clr' 	=> $tm_link_hvr_clr,
			'custom_css'    	=> $custom_css,

			//filter color setting
			'tm_filter_bg_clr' 	=> $tm_filter_bg_clr,
			'tm_filter_activebg_clr' 	=> $tm_filter_activebg_clr,
			'tm_filter_title_clr' 	=> $tm_filter_title_clr,
			'tm_filter_active_title_clr' 	=> $tm_filter_active_title_clr,
			
		));
		update_post_meta($PostID, 'wpsm_teampro_Meta_Settings', $Settings_MyArray);
		

		$total=count( !empty( $_POST['filter_category'] ) ? $_POST['filter_category']  : 0 );
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