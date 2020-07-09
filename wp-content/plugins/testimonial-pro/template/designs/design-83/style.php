<style>
<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
	//margin: 10px 15px;
	padding: 0 10px 20px 20px;
	position: relative;
	    margin-bottom: 15px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_pic{
	position: absolute;
	bottom: 0;
	left: 0;
	background: #0c0c0c;
	width: 80px;
	height: 80px;

	z-index: 2;
	border: 3px solid <?php echo $ts_img_border_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_pic img{
	width: 100%;
	margin: 0 auto;
	text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review{
	border: 3px solid <?php echo $ts_img_border_clr ;?>;
	font-size: 17.5px;
	margin: 0 0 20px;
	text-align:left;
	padding: 10px 20px 12px;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review p{
	    margin: 0;
	padding: 9px 0 0 49px; 
	position: relative;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
	line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review p:before{
	content: "\f10d";
	font-family: 'FontAwesome';
	position: absolute;
	left:0;
	top:10px;
	color:<?php echo $ts_quote_clr; ?>;
	font-size: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-title{
	padding: 0 0 0 48px;
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:5px;
	margin-top: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-desi{
	margin-top: 0;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:5px;
	padding: 0 0 0 48px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-email{
	text-align: left;
	margin-top: 0;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:5px;
	padding: 0 0 0 48px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review a{
	text-align: left;
    margin-top: 0;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:5px;
	padding: 0 0 0 48px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-review a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-rating{
	margin-bottom:  5px;
	padding: 0 0 0 48px;
}

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-bottom: 10px;
	    padding: 0 0 0 48px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial-webname a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial-webname a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
<?php echo $custom_css;?>
</style>