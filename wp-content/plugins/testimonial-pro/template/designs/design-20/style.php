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
	text-align: center;
	margin-bottom: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-content{
	padding: 30px 50px;
	    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
	border-radius: 100px 0;
	position: relative;
	margin: 0 10px 35px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-content:after{
	content: "";
	position: absolute;
	border-top: 12px solid rgb(<?php echo $HoverColorRGB; ?>);
	<?php if($ts_box_opacity<="9"){ ?>
	border-top: 12px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php }
	else { ?>
	border-top:12px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
	<?php }?>
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	bottom: -12px;
	left: 47%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
	    margin: 0;
	line-height:<?php echo $ts_content_line;?>px !important;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight;?>;;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic{
	width: 80px;
	height: 80px;
	margin: 0 auto 15px;
		    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	overflow: hidden;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic img{
	    margin: 0;
	width: 100%;
	height: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title{
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	line-height: 18px;
    text-transform: uppercase;
    margin: 0 0 7px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi{
	display: block;
	margin-top: 4px;
	line-height: 14px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-email{
	line-height: 14px;
	margin-top: 2px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi a{
	line-height: 25px;
	margin-top: 10px;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-rating {
	line-height: 18px;
	margin: 10px 0 10px 0;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> a.wpsm_testimonial-webname{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> a.wpsm_testimonial-webname:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
<?php echo $custom_css;

 ?>
</style>