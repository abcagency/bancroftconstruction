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
	    margin: 20px 0px 30px;
	position: relative;
	text-align:left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic{
	padding: 5px;
	border: 1px solid <?php echo $ts_img_border_clr;?>;
	position: absolute;
	top: -20px;
	left: 5px;
	z-index: 1;
	    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic > img{
	    margin: 0;
	width:60px;
	height:60px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
	margin: 0;
	    padding: 30px 20px 30px 60px;
	margin-left: 34px;
	border: 1px solid <?php echo $ts_img_border_clr;?>;
	    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
	position: relative;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
	border-right-width:0;
	line-height:<?php echo $ts_content_line;?>px !important;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:before {
    content: "";
    width: 35px;
    height: 102%;
   <?php
    if($ts_image_bg=="Transparent")
    {
    ?>
     background: #ffffff;
    border-left: 1px solid <?php echo $ts_img_border_clr;?>;
    <?php	
    }
    ?>
    <?php
    if($ts_image_bg=="Color")
    {
    ?>
     background: <?php echo $testi_bg_clr;?>;
    border-left: 1px solid <?php echo $ts_img_border_clr;?>;
    <?php	
    }
    ?>
    position: absolute;
    top: -1px;
    right: -18px;
    -webkit-transform: skewX(-12deg);
    -ms-transform: skewX(-12deg);
    transform: skewX(-12deg);



		
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-content{
	margin: 10px 0 0 34px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title{
	text-align: left;
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	margin-top: 10px;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi{
	text-align: left;
	margin-bottom: 5px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-email{
	text-align: left;
	margin-top: 0;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	font-weight: 500;
	margin-bottom:5px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-content a{
	text-align: left;
	margin-top: 0;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	font-weight: 500;
	margin-bottom:5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-content a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-rating{
	text-align: left;
	margin-bottom: 8px;
}



@media (max-width:700px){
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:before {
    content: none;
   
}
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
		
		border-right-width:1px;
	}}
<?php echo $custom_css; ?>

<?php
if($ts_Layout_Cls=="col-md-4" || $ts_Layout_Cls=="col-md-3" || $ts_Layout_Cls=="wpsm_col-md-5 wpsm_col-lg-5" || $ts_Layout_Cls=="col-md-2")
{
?>
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description:before {
    content: none;
   
}

	#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
		
		border-right-width:1px;
	}

<?php
}
?>

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-bottom:10px;
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
<?php echo $custom_css; ?>
</style>