<style>
<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	text-align: center;
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:<?php echo $ts_sec_title_clr ;?>;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
	margin-bottom:30px;
}	
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {

  position: relative;
  padding-top: 80px;
 border:1px solid <?php echo $ts_img_border_clr;?>;
  padding: 20px;
margin-bottom: 30px;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-thumb {
  float: left;
  max-width: 70px;
  margin-right: 10px;
  padding: 5px;
  margin-bottom: 5px;
  -webkit-box-shadow:0px 0px 1px 0px rgba(0, 0, 0, 0.34);
  -moz-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.34);
  box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.34);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
line-height:<?php echo $ts_content_line;?>px !important;
  font-style: italic;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description .fa-quote-left {
  margin-right: 5px;
  color:<?php echo $ts_quote_clr ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description .fa-quote-right {
  margin-left: 5px;
  color:<?php echo $ts_quote_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
  text-align: right;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
  font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
  text-align: right;
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;}
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    text-align: right;
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
      text-align: right;
      margin-top:7px;
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
<?php echo $custom_css;

 ?>
</style>