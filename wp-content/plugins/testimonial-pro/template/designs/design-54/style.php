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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial{   

	margin-bottom:50px;
	margin-top: 20px; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .testimonial-content{
	    margin: 20px 0 30px 0;
	position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .testimonial-content:after{
	content: "";
	width: 20px;
	height: 20px;
	border-top: 20px solid rgb(<?php echo $HoverColorRGB; ?>);
	<?php if($ts_box_opacity<="9"){ ?>
	border-top: 20px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php }
	else { ?>
	border-top:20px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
	<?php }?>
	border-left: 20px solid transparent;
	border-right: 20px solid transparent;
	margin: 0 auto;
	position: absolute;
	bottom: -20px;
	left: 0;
	right: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
	padding: 25px 35px;
	margin: 0;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
	border-radius: 15px;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight;?>;
	line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:after{
	font-family: 'FontAwesome';
	width: 35px;
	height: 35px;
	line-height: 35px;
	border-radius: 8px;
	text-align: center;
	background:<?php echo $ts_content_bg_clr; ?>;
	position: absolute;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:before{
	content: "\f10d";
	top: -18px;
	left: 25px;
	color:<?php echo $ts_quote_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:after{
	content: "\f10e";
	bottom: -18px;
	right: 25px;
	color:<?php echo $ts_quote_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-profile{
	min-height: 130px;
	display: table;
	padding: 15px 15px 15px 120px;
	border: 1px solid <?php echo $ts_img_border_clr;?>;
	border-radius: 20px;
	margin: 0 auto;
	position: relative;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic{
	margin: 0;
	width: 80px;
	height: 80px;
		    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	border: 1px solid <?php echo $ts_img_border_clr;?>;
	float: left;
	margin-right: 10px;
	overflow: hidden;
	position:absolute;
	top:20px;
	left:20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic img{
	margin: 0;
	width: 100%;
	height: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title{
	<?php if($ts_display_image=="yes"){?>
	display: block;<?php } else {?>
	margin-left:100px;<?php }?>
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
	line-height: 18px;
	margin-top: 18px;

	text-align:left;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title:before {
    content: "";
    width: 1px;
    height: 70px;
    background: <?php echo $ts_name_clr;?>;
    position: absolute;
    left: 106px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi{
	display: block;
	margin-top: 2px;
	line-height: 16px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
	text-align:left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-email{
	line-height: 18px;
	margin-top: 2px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
	text-align:left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-profile a{
	line-height: 18px;
	margin-top: 2px;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
	text-align:left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-profile a:hover{
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial-webname a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial-webname a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
<?php echo $custom_css;

 ?>
</style>