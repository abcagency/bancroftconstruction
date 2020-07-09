<style type="text/css">
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial {
  padding: 25px;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.08);
  -moz-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.08);
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.08);
  border-radius: 4px;
  perspective: 1000px;
  -webkit-perspective: 1000px;
  margin-bottom: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial img {
  border-radius: 50%;
      max-width: 100px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-link {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote {
  color: #767676 !important;
  font-size: 16px;
  line-height:1.8;
  margin-bottom: 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial h6 {
  font-size: 16px;
  line-height: 1;
  text-transform: capitalize;
  padding-top: 20px;
  display: inline-block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .profile-img {
  max-width: 120px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    margin-top: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
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
  margin-top : 10px;
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
@media(max-width:600px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial{
    text-align:center;
  }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .profile-img{
  margin:0 auto;
}
}
<?php echo $custom_css;

 ?>
</style>