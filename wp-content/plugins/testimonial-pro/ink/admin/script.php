	 <?php
			wp_enqueue_media();
			wp_enqueue_script('jquery');
			
			//color-picker css n js
			wp_enqueue_style('wp-color-picker');
			wp_enqueue_script('wpsm_testimonial_color-pic',wpshopmart_testi_pro_directory_url.'assets/js/color-picker.js', array('wp-color-picker'), false ,true);
			wp_enqueue_style('wpsm_testi_pro-panel-style', wpshopmart_testi_pro_directory_url.'assets/css/panel-style.css');
			wp_enqueue_script('wpsm_testi_pro-media-uploads',wpshopmart_testi_pro_directory_url.'assets/js/media-upload-script.js',array('media-upload','thickbox','jquery'));
			wp_enqueue_style('wpsm_testi_pro-sidebar', wpshopmart_testi_pro_directory_url.'assets/css/sidebar.css');
			wp_enqueue_style('wpsm_testi_pro_star-css', wpshopmart_testi_pro_directory_url.'assets/css/star-rating.css');			
			
			//font awesome css
			
			wp_enqueue_style('wpsm_testi_pro_codemirror-css', wpshopmart_testi_pro_directory_url.'assets/codex/codemirror.css');			
			wp_enqueue_style('wpsm_testi_pro_ambiance', wpshopmart_testi_pro_directory_url.'assets/codex/ambiance.css');
			wp_enqueue_style('wpsm_testi_pro_show-hint-css', wpshopmart_testi_pro_directory_url.'assets/codex/show-hint.css');
			wp_enqueue_style('wpsm_testi_pro-jquery-ui2', wpshopmart_testi_pro_directory_url.'assets/css/jquery-ui.css');
			wp_enqueue_style('wpsm_testi-font-awesome', wpshopmart_testi_pro_directory_url.'assets/css/font-awesome/css/font-awesome.min.css');
			wp_enqueue_style('wpsm_testi_pro-bootstrap', wpshopmart_testi_pro_directory_url.'assets/css/bootstrap.css');
			
			// settings
			
			wp_enqueue_script('wpsm_testi_pro_codemirror-js',wpshopmart_testi_pro_directory_url.'assets/codex/codemirror.js',array('jquery'));	
			wp_enqueue_script( 'wpsm_testi_pro_bootstrap-js-front', wpshopmart_testi_pro_directory_url.'assets/js/bootstrap.js', array(), '', true );		
			wp_enqueue_script('wpsm_testi_pro_css-js',wpshopmart_testi_pro_directory_url.'assets/codex/css.js',array('jquery'));
			//wp_enqueue_script('wpsm_testi_pro_css-hint-js',wpshopmart_testi_pro_directory_url.'assets/codex/css-hint.js',array('jquery'));
			wp_enqueue_script( 'wpsm_testi_pro-acc-js2', wpshopmart_testi_pro_directory_url.'assets/js/jquery-ui.js');
			wp_enqueue_style('wpsm_testi_pro_settings-css', wpshopmart_testi_pro_directory_url.'assets/css/settings.css');
			wp_enqueue_script( 'wpsm_testi_pro-star-js', wpshopmart_testi_pro_directory_url.'assets/js/star-rating.js');
			//tooltip
			wp_enqueue_style('wpsm_testi_pro_admin_tooltip', wpshopmart_testi_pro_directory_url.'assets/tooltip/darktooltip.css');
			wp_enqueue_script( 'wpsm_testi_pro_admin_tooltip_js', wpshopmart_testi_pro_directory_url.'assets/tooltip/jquery.darktooltip.js',array('jquery'));
			?>