<!--custom style-->
<style type="text/css">
	<?php
	$main_color = (isset($_COOKIE['re_main_color']) ? $_COOKIE['re_main_color'] : $theme_options['main_color']);
	if($theme_options["site_background_color"]!=""): ?>
	body
	{
		background-color: #<?php echo $theme_options["site_background_color"]; ?>;
	}
	<?php endif;
	if($main_color!=""): ?>
	p a,
	table a,
	blockquote:before,
	.header h1,
	.header h1 a,
	.sf-menu li:hover a, .sf-menu li:hover a:visited,
	.sf-menu a:hover,
	.sf-menu a:visited:hover,
	.sf-menu li.current-menu-item a,
	.sf-menu li.current-menu-parent a,
	.sf-menu li.current-menu-ancestor a,
	.menu-container .sf-menu li ul li.current-menu-item a,
	.menu-container .sf-menu li ul li.current-menu-parent a,
	.menu-container .sf-menu li ul li.current-menu-ancestor a,
	.menu-container .sf-menu li.menu-item-has-children ul li a:hover,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li.current-menu-item a,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li.current-menu-parent a,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li.current-menu-ancestor a,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li.current-menu-item ul li a:hover,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li.current-menu-parent ul li a:hover,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li.current-menu-ancestor ul li a:hover,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li ul li.current-menu-item a,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li ul li.current-menu-parent a,
	.menu-container .sf-menu li.menu-item-has-children:hover ul li ul li.current-menu-ancestor a,
	.menu-container .sf-menu li:hover ul li.sfHover>a,
	.feature-item:before,
	.contact-details-box:before,
	.blog .post-details .date h2,
	.blog .post-details li:before,
	.re-action-button:before,
	.announcement .vertical-align-cell:before,
	.call-to-action:before,
	#cancel-comment,
	.list li a,
	li.template-bullet:before,
	.ui-tabs-nav a:before,
	.accordion  .ui-accordion-header .ui-accordion-header-icon,
	.cost-calculator-box:before,
	.cost-calculator-price,
	.ui-selectmenu-button.ui-corner-top .ui-icon,
	.ui-selectmenu-button:hover .ui-icon,
	.ui-selectmenu-menu .ui-menu li.ui-state-focus,
	.services-list li .service-icon::before,
	.type-small .testimonials-list .ornament::before
	<?php
	if(is_plugin_active('woocommerce/woocommerce.php')):
	?>
	,
	.woocommerce .posted_in a,
	.woocommerce-message a,
	.woocommerce-info a,
	.woocommerce-error a,
	.woocommerce-review-link,
	.woocommerce-checkout #payment .payment_method_paypal .about_paypal
	<?php
	endif;
	?>
	{
		color: #<?php echo $main_color; ?>;
	}
	<?php
	if(is_plugin_active('woocommerce/woocommerce.php')):
	?>
	.woocommerce a.remove
	{
		color: #<?php echo $main_color; ?> !important;
	}
	<?php
	endif;
	?>
	.re-carousel-pagination a.selected,
	.re-carousel-pagination a:hover,
	.slider-control:hover,
	.widget_categories a:hover,
	.widget_archive a:hover,
	.widget_tag_cloud a:hover,
	.taxonomies a:hover,
	.pagination li a:hover,
	.pagination li.selected a,
	.pagination li.selected span,
	.pagination.post-pagination span,
	.pagination.post-pagination a:hover span,
	.accordion .ui-accordion-header.ui-state-active,
	.social-icons.yellow li,
	.cost-calculator-box label,
	.more,
	.more[type="submit"],
	.more.simple:hover,
	.slider-content-box h2
	<?php
	if(is_plugin_active('woocommerce/woocommerce.php')):
	?>
	,
	.woocommerce .product-categories li a:hover,
	.woocommerce .woocommerce-pagination ul.page-numbers li a:hover,
	.woocommerce .woocommerce-pagination ul.page-numbers li a.current,
	.woocommerce .woocommerce-pagination ul.page-numbers li span.current,
	.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
	.woocommerce div.product .woocommerce-tabs ul.tabs li a.selected,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.altm,
	.woocommerce .widget_product_search form input[type='submit'],
	.woocommerce .cart .coupon input.button,
	.woocommerce #payment #place_order,
	.woocommerce .button.add_to_cart_button.loading:hover,
	.woocommerce .woocommerce-error, .woocommerce .woocommerce-info, .woocommerce .woocommerce-message,
	.woocommerce .quantity .plus:hover,
	.woocommerce .quantity .minus:hover,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle
	<?php
	endif;
	?>
	{
		border-color: #<?php echo $main_color; ?>;
	}
	.ui-tabs-nav li.ui-tabs-active:after,
	.ui-slider-handle .cost-slider-tooltip .arrow:before
	<?php
	if(is_plugin_active('woocommerce/woocommerce.php')):
	?>
	,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active span
	<?php
	endif;
	?>
	{
		border-color: #<?php echo $main_color; ?> transparent;
	}
	.timeline-item .label-triangle
	{
		border-color: transparent transparent transparent #<?php echo $main_color; ?>;
	}
	.rtl .timeline-item .label-triangle
	{
		border-color: transparent #<?php echo $main_color; ?> transparent transparent;
	}
	h2.widgettitle:after,
	.box-header:after,
	.mobile-menu li.current-menu-item>a,
	.mobile-menu li.current-menu-ancestor ul li.current-menu-item a,
	.mobile-menu li.current-menu-ancestor ul li.current-menu-parent ul li.current-menu-item a,
	.mobile-menu li.current-menu-ancestor a,
	.mobile-menu li.current-menu-ancestor ul li.current-menu-parent a,
	.mobile-menu li.current-menu-ancestor ul li.current-menu-parent ul li.current-menu-parent a,
	.mobile-menu-switch:hover .line,
	.vertical-menu li.current-menu-item a,
	.vertical-menu li:hover a,
	.site-container .vc_row.yellow,
	.testimonials-list p:after,
	.re-carousel-pagination a.selected,
	.re-carousel-pagination a:hover,
	.slider-control:hover,
	span.number:after, 
	span.odometer.number:after,
	.widget_categories a:hover,
	.widget_archive a:hover,
	.widget_tag_cloud a:hover,
	.taxonomies a:hover,
	a.re-action-button.selected,
	a.re-action-button:hover,
	.pagination li a:hover,
	.pagination li.selected a,
	.pagination li.selected span,
	.pagination.post-pagination span,
	.pagination.post-pagination a:hover span,
	.ui-tabs-nav li a:hover,
	.ui-tabs-nav li a.selected,
	.ui-tabs-nav li.ui-tabs-active a,
	.small.gray .ui-tabs-nav li a:hover,
	.small.gray .ui-tabs-nav li a.selected,
	.small.gray .ui-tabs-nav li.ui-tabs-active a,
	.accordion .ui-accordion-header.ui-state-active,
	.social-icons.yellow li,
	.ui-slider-handle:after,
	.ui-slider-handle .cost-slider-tooltip .value,
	.ui-slider-range-min,
	.more,
	.more[type="submit"],
	.more.simple:hover,
	.scroll-top:hover,
	body .vc_progress_bar .vc_single_bar .vc_bar
	<?php
	if(is_plugin_active('woocommerce/woocommerce.php')):
	?>
	,
	.woocommerce .product-categories li a:hover,
	.woocommerce .woocommerce-pagination ul.page-numbers li a:hover,
	.woocommerce .woocommerce-pagination ul.page-numbers li a.current,
	.woocommerce .woocommerce-pagination ul.page-numbers li span.current,
	.woocommerce #respond input#submit, 
	.woocommerce a.button, 
	.woocommerce button.button, 
	.woocommerce input.button,
	.woocommerce #respond input#submit.alt, 
	.woocommerce a.button.alt, 
	.woocommerce button.button.alt, 
	.woocommerce input.button.altm,
	.woocommerce .widget_product_search form input[type='submit'],
	.woocommerce .cart .coupon input.button,
	.woocommerce #payment #place_order,
	.woocommerce .button.add_to_cart_button.loading:hover,
	.woocommerce span.onsale,
	.woocommerce .comment-reply-title::after,
	.woocommerce .related.products h2::after,
	.woocommerce-account .woocommerce h2::after,
	.woocommerce-checkout .woocommerce h2::after,
	.upsells.products h2::after,
	.woocommerce-account .title h3::after,
	.woocommerce-checkout .title h3::after,
	.woocommerce mark,
	.woocommerce .quantity .plus:hover,
	.woocommerce .quantity .minus:hover,
	.woocommerce a.remove:hover,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
	.cart-items-number,
	.team-box ul.social-icons li:hover,
	.timeline-item label,
	.timeline-item .label-container .timeline-circle::after
	<?php
	endif;
	?>
	{
		background-color: #<?php echo $main_color; ?>;
	}
	<?php endif;
	if($theme_options["primary_font_custom"]!="" || $theme_options["primary_font"]!=""):
		if($theme_options["primary_font_custom"]!="")
			$primary_font = $theme_options["primary_font_custom"];
		else
		{
			$primary_font_explode = explode(":", $theme_options["primary_font"]);
			$primary_font = $primary_font_explode[0];
		}
	?>
	p,
	blockquote,
	label,
	input, textarea,
	table td, table th,
	h1, h2, h3, h4, h5, h6,
	.bread-crumb-container label,
	.bread-crumb li,
	.bread-crumb li a,
	.sf-menu li a, .sf-menu li a:visited,
	.mobile-menu li a,
	.vertical-menu li a,
	.services-list li p,
	.feature-item p,
	.testimonials-list p,
	.testimonials-list .author,
	.testimonials-list .author-details,
	.contact-details-box p,
	span.number, 
	span.odometer.number,
	.blog .post-details,
	.blog .post-content-details li,
	.blog.small .post-content a,
	.widget_categories a,
	.widget_archive a,
	.widget_tag_cloud a,
	.taxonomies a,
	.re-action-button,
	.posted-by abbr,
	#comments-list .comment-details p,
	.pagination li,
	.list li,
	.ui-tabs-nav li a,
	.tabs .ui-tabs-panel p,
	.accordion .ui-accordion-header,
	.contact-details li,
	.cost-calculator-box label,
	.cost-calculator-price,
	.ui-slider-handle .cost-slider-tooltip .value,
	.ui-selectmenu-button,
	.ui-selectmenu-menu .ui-menu li,
	.more,
	.more[type="submit"],
	.copyright,
	.slider-content-box p
	<?php
	if(is_plugin_active('woocommerce/woocommerce.php')):
	?>
	,
	.woocommerce .product-categories li a,
	.woocommerce .woocommerce-pagination ul.page-numbers li,
	.woocommerce div.product .woocommerce-tabs ul.tabs li a,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.altm,
	.woocommerce .widget_product_search form input[type='submit'],
	.woocommerce .cart .coupon input.button,
	.woocommerce #payment #place_order,
	.woocommerce .button.add_to_cart_button.loading:hover,
	.woocommerce ul.products li.product .price,
	.woocommerce div.product p.price, 
	.woocommerce div.product span.price,
	.woocommerce .widget_top_rated_products .amount,
	.woocommerce .woocommerce-error, .woocommerce .woocommerce-info, .woocommerce .woocommerce-message,
	.woocommerce table.shop_table th,
	.woocommerce-cart .cart-collaterals .cart_totals table th,
	.woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a
	<?php
	endif;
	?>
	{
		font-family: '<?php echo $primary_font; ?>';
	}
	<?php endif;
	?>
</style>