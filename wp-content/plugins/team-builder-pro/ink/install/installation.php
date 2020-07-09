<?php
function wpsm_team_pro_front_script() {
    
		//font awesome css


		wp_enqueue_style('wpsm_team_pro-font-awesome-front', wpshopmart_team_pro_directory_url.'assets/css/font-awesome/css/font-awesome.css');
		wp_enqueue_style('wpsm_team_pro_carousel-theme-css', wpshopmart_team_pro_directory_url.'assets/css/owl.theme.default.css');
		wp_enqueue_style('wpsm_team_pro_isotope-css', wpshopmart_team_pro_directory_url.'assets/css/isotope-style.css');

		//Js
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'wpsm_team_pro-carousel-js', wpshopmart_team_pro_directory_url.'assets/js/owl.carousel.min.js');
		wp_enqueue_script('wpsm_team_pro-main-isotop-js', wpshopmart_team_pro_directory_url.'assets/js/jquery.isotope.js');
		wp_enqueue_script( 'wpsm_customscroll', wpshopmart_team_pro_directory_url.'assets/js/jquery.mCustomScrollbar.min.js', array(), '', false );
		wp_enqueue_script( 'wpsm_gridder', wpshopmart_team_pro_directory_url.'assets/js/jquery.gridder.js', array(), '', false );
		}

add_action( 'wp_enqueue_scripts', 'wpsm_team_pro_front_script' );
?>