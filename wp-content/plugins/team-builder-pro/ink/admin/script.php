	 <?php
			wp_enqueue_media();
			wp_enqueue_script('jquery');
			
			//color-picker css n js
			wp_enqueue_style('wp-color-picker');
			wp_enqueue_script('wpsm_teambuilder_color-pic',wpshopmart_team_pro_directory_url.'assets/js/color-picker.js', array('wp-color-picker'), false ,true);
			wp_enqueue_style('wpsm_team_pro-panel-style', wpshopmart_team_pro_directory_url.'assets/css/panel-style.css');
			wp_enqueue_script('wpsm_team_pro-media-uploads',wpshopmart_team_pro_directory_url.'assets/js/media-upload-script.js',array('media-upload','thickbox','jquery'));
			
			//new style
			wp_enqueue_style('wpsm_team_pro_sidebarpanel-css', wpshopmart_team_pro_directory_url.'assets/css/sidebarpanel.css');
			wp_enqueue_style('wpsm_team_pro_panelstyle-css', wpshopmart_team_pro_directory_url.'assets/css/style.css');
			wp_enqueue_style('wpsm_team_pro_wpsmbs-css', wpshopmart_team_pro_directory_url.'assets/css/wpsm-bs.css');
			//font awesome css
			
			wp_enqueue_style('wpsm_team_pro_codemirror-css', wpshopmart_team_pro_directory_url.'assets/codex/codemirror.css');			
			wp_enqueue_style('wpsm_team_pro_ambiance', wpshopmart_team_pro_directory_url.'assets/codex/ambiance.css');
			wp_enqueue_style('wpsm_team_pro-jquery-ui2', wpshopmart_team_pro_directory_url.'assets/css/jquery-ui.css');
			wp_enqueue_style('wpsm_team-font-awesome', wpshopmart_team_pro_directory_url.'assets/css/font-awesome/css/font-awesome.css');
			wp_enqueue_style('wpsm_team_pro-bootstrap', wpshopmart_team_pro_directory_url.'assets/css/bootstrap.css');
			
			// settings
			
			wp_enqueue_script('wpsm_team_pro_codemirror-js',wpshopmart_team_pro_directory_url.'assets/codex/codemirror.js',array('jquery'));	
			wp_enqueue_script( 'wpsm_team_pro_bootstrap-js-front', wpshopmart_team_pro_directory_url.'assets/js/bootstrap.js', array(), '', true );		
			wp_enqueue_script('wpsm_team_pro_css-js',wpshopmart_team_pro_directory_url.'assets/codex/css.js',array('jquery'));
			wp_enqueue_style('wpsm_team_pro_settings-css', wpshopmart_team_pro_directory_url.'assets/css/settings.css');

			//new custom js
			wp_enqueue_script( 'wpsm_team_pro_admin_custom_js', wpshopmart_team_pro_directory_url.'assets/js/custom.js',array('jquery'));
			
			?>