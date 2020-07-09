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
	margin-bottom:30px;
	margin-top:30px;
}
 #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic{
	display: block;
	width: 100px;
	height: 100px;
	margin: 0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_pic img{
	width: 100%;
	height: auto;
		    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	    margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-title {
	//display: block;
	text-align: center;
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	line-height: 18px;
	margin-top: 20px;
	text-transform: capitalize;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-desi{
	margin-top: 15px;
	line-height: 18px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	text-align:center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-email{
	line-height: 10px;
	margin-top: 10px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	text-align:center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-webname a {
	margin-top: 5px;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	text-align:center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-webname a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-rating{
	margin-top: 10px;
	line-height: 15px;
	text-align:center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review{
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
	border-radius: 10px;
	padding: 25px;
	margin-top:0;
	position: relative;
	margin-top: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review:before{
	content: "";
	border-bottom: 20px solid rgb(<?php echo $HoverColorRGB; ?>);
	<?php if($ts_box_opacity<="9"){ ?>
	border-bottom: 20px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php }
	else { ?>
	border-bottom:20px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
	<?php }?>
	border-left: 20px solid transparent;
	border-right: 20px solid transparent;
	position: absolute;
	top: -20px;
	left: 45%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review > p{
	margin: 0;
	    margin-bottom: 0;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
	line-height:<?php echo $ts_content_line;?>px !important;
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

<?php echo $custom_css; ?>
</style>