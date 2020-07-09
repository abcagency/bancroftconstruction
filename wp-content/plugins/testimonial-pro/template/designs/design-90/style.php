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
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial{
	margin-top:40px;
	text-align:left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description{
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight;?>;
	position: relative;
	padding: 10px 0;
	margin-bottom: 15px;
	z-index: 1;
	padding: 25px 25px 25px 25px;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description p{
		line-height:<?php echo $ts_content_line;?>px !important;
	}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description:before{
	content: "\f10d";
	font-family: 'FontAwesome';
	color:<?php echo $ts_quote_clr;?>;
	position: absolute;
	top:2%;
	left: 10px;
	opacity:0.3;
	font-size: 70px;
	z-index: -1;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-pic {
	float: left;
	width: 80px;
	height: 80px;
	margin-right: 20px;	-webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	border: 2px solid <?php echo $ts_img_border_clr;?>;
	    margin-top: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-pic img{
	    margin: 0;
	width: 100%;
	height: auto;
	-webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review{
	text-align: left;
	margin-left: 100px;
	    margin-top: 10px;
	    min-height: 100px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial-title{
	line-height: 1.2;
	
	margin-top: 0px;
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	padding-top: 5px;
	    display: inline-block;
	text-align:left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-desi{
	margin-bottom: 5px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-webname{
	margin-top:5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-email{
	
	margin-bottom: 5px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review a{
	
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
		margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-review a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}
 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-bottom: 5px;
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