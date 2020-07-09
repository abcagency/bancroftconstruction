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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial{
  margin-bottom: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial blockquote {
  position: relative;
  display: block;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  margin-top: 20px;
  padding: 25px;
  font-size: 18px;
  border-left: 0;
 margin-bottom: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial blockquote .author-img {
  position: absolute;
  left: 25px;
  top: -12px;
  z-index: 9;
  display: inline-block;
  width: 66px;
  height: 66px;
  padding: 3px;
  background-color: <?php echo $ts_img_border_clr;?>;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  overflow: hidden;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial blockquote .author-img img {
  border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial blockquote p {
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  font-style: normal;
  margin-top: 35px;
line-height:<?php echo $ts_content_line;?>px !important;
  margin-bottom:10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial blockquote cite {
  display: block;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  line-height: 36px;
  background-color: #e3e3e3;
  padding-left: 100px;
  padding-right: 25px;
  color: #141414;
  font-style: normal;
  text-transform: uppercase;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  transition: all .3s ease;
  background-color: <?php echo $ts_quote_clr;?>;
 font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial blockquote:hover cite {
  background-color: <?php echo $ts_link_hvr_clr;?>;
  color: <?php echo $ts_name_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .author-position {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .email {
 font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .website {
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{  
  margin-top: 5px; 
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