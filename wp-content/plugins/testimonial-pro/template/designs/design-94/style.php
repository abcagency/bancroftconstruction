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
	margin: 0 auto 50px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic{
	width: 85px;
	height: 85px;
		    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	margin: 0 auto 20px;
	border: 4px solid <?php echo $ts_img_border_clr;?>;
	overflow: hidden;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic img{
		    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	    margin: 0;
	width: 100%;
	height: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
	    margin: 10px 0;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
	line-height:<?php echo $ts_content_line;?>px !important;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-prof{
	display: inline;
	text-align: left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title{
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
	margin-top: 20px;
}
<?php if($ts_display_position=="yes"){?>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title:after{
	content: "";
	margin-left: 10px;
    margin-right: 10px;
	border-right: 2px solid <?php echo $ts_img_border_clr;?>;
}<?php }?>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi{
	display: inline-block;
	margin-top: 12px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-email{
	
	margin-top: 2px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px; 
	   margin-top: 5px;
	   font-weight: 500;
	text-align:center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-webname a{

	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;   
	 margin-top: 5px;
	 font-weight: 500;
	text-align:center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-webname a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-top: 10px;
	text-align: center;
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