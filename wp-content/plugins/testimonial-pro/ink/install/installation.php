<?php
function wpsm_testi_pro_front_script() {
    
		//font awesome css
		wp_enqueue_style('wpsm_testi_pro_bootstrap-front', wpshopmart_testi_pro_directory_url.'assets/css/bootstrap-front.css');
		wp_enqueue_style('wpsm_testi_pro-font-awesome-front', wpshopmart_testi_pro_directory_url.'assets/css/font-awesome/css/font-awesome.min.css');
	    wp_enqueue_style('wpsm_testi_pro_star-css-front', wpshopmart_testi_pro_directory_url.'assets/css/star-rating.css');
		wp_enqueue_style('wpsm_testi_pro_carousel-theme-css', wpshopmart_testi_pro_directory_url.'assets/css/owl.theme.default.css');
		wp_enqueue_style('wpsm_testi_pro_isotope-css', wpshopmart_testi_pro_directory_url.'assets/css/isotope-style.css');
		wp_enqueue_style('wpsm_testi_pro_slick-css', wpshopmart_testi_pro_directory_url.'assets/css/slick.css');
		//wp_enqueue_style('wpsm_testi_pro_bootstrap-mincss', wpshopmart_testi_pro_directory_url.'assets/css/bootstrap.css');
		//Js
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'wpsm_testi_pro-carousel-js', wpshopmart_testi_pro_directory_url.'assets/js/owl.carousel.min.js');
		wp_enqueue_script('wpsm_testi_pro-main-isotop-js', wpshopmart_testi_pro_directory_url.'assets/js/jquery.isotope.js');
		wp_enqueue_script( 'wpsm_testi_pro-star-front-js', wpshopmart_testi_pro_directory_url.'assets/js/star-rating.js');
		wp_enqueue_script( 'wpsm_count_pro_index-slickminjs', wpshopmart_testi_pro_directory_url.'assets/js/slick.min.js', array(), '', false );

		}

add_action( 'wp_enqueue_scripts', 'wpsm_testi_pro_front_script' );
?>