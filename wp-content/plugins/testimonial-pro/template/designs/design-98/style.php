<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:<?php echo $ts_sec_title_clr ;?>;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
	    margin-bottom:30px;
    text-align: center;
}	
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial {
	text-align: center;
	margin-bottom: 45px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description{
	margin: 0;
	margin-bottom: 30px;
	padding:0px 50px;
	position: relative;
	line-height:<?php echo $ts_content_line;?>px !important;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description:before{
	content: "\f10d";
	font-family: 'FontAwesome';
	display: inline-block;
	position: absolute;
	top: 8px;
	left: 2%;
	color:<?php echo $ts_quote_clr ;?>;
	font-size: 36px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description:after{
	content: "\f10e";
	font-family: 'FontAwesome';
	display: inline-block;
	position: absolute;
	top: 8px;
	right: 2%;
	color:<?php echo $ts_quote_clr ;?>;
	font-size: 36px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_pic{
	width: 94px;
	height: 94px;
	margin: 20px auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_pic img{
	margin: 0;
	width: 100%;
	height: auto;
	border-radius: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-title{
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	line-height: 18px;
	margin-top: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-desi{
	line-height: 18px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	display:inline-block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-email{
	line-height: 18px;
	margin-top:2px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review a{
	line-height: 18px;
	margin-top: 3px;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-review a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-top:10px;
}    
     #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star {
     	font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star-o {
	font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> a.wpsm_testimonial-webname {
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> a.wpsm_testimonial-webname:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
<?php echo $custom_css;

 ?>
</style>