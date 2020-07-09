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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  text-align: center;
  padding: 0 15px 15px;
  border-width: 1px 1px 3px;
  border-style: solid;
  border-color: #dfdfdf #dfdfdf <?php echo $ts_img_border_clr;?>;
  margin-top: 50px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic {
  background: #fff;
  width: 100px;
  height: 100px;
  position: relative;
  display: inline-block;
  border: 5px solid #fff;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -webkit-box-shadow: 2px 3px 6px -3px rgba(0, 0, 0, 0.35);
  -moz-box-shadow: 2px 3px 6px -3px rgba(0, 0, 0, 0.35);
  box-shadow: 2px 3px 6px -3px rgba(0, 0, 0, 0.35);
  margin: -50px auto 0;
  display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic img {
  border-radius: 100%;
      width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic.radius img {
  width: 100%;
  height: 100;
  border-radius: 100%;
  -webkit-border-radius: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text {
  padding: 15px 10px;
  position: relative;
   font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text p {
  line-height:<?php echo $ts_content_line;?>px !important;
  }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text p:last-child {
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator-outer {
  overflow: hidden;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator {
  display: inline-block;
  height: 3px;
  width: 80px;
  margin-bottom: 10px;
  position: relative;
  background-color: #1bbce8;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator.style-liner {
  width: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator[class*="style-"]:after,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator[class*="style-"]:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 40px;
  width: 70px;
  height: 2px;
  background: #eee;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator[class*="style-"]:before {
  left: auto;
  right: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator-outer {
  overflow: hidden;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .separator[class*="style-"]:before {
  left: auto;
  right: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-detail {
  padding: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-name {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-name,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-position {
  display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-position{
    font-style: italic;
    font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	  margin: 5px 0;
	  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
font-weight: 600;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  margin-top: 20px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav {
  width: 100%;
  top: 50%;
  position: absolute;
  transform: translateY(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav [class*="owl-"] {
  background-color: <?php echo $ts_nav_btn_bg_clr; ?>;
  color: <?php echo $ts_nav_btn_font_clr; ?>;
  padding: 9px 12px;
  margin: 0;
  font-size: 13px;
  display: inline-block;
  cursor: pointer;
  border-radius: 0;
  border-width: 0px;
  border-style: solid;
  border-radius: 0;
  transition: all .3s ease;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav [class*="owl-"]:hover{
    background-color:<?php echo $ts_nav_btn_hvr_clr; ?>;
    color:<?php echo $ts_nav_btn_font_hvr_clr; ?>;
}
<?php
if($templates_presets=="carousel")
{
	?>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav .owl-prev {
  position: absolute;
  left: 0px;
  width: 37px !important;
    height: auto !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav .owl-next {
  right: 0px;
  position: absolute;
    width: 37px !important;
    height: auto !important;
}
<?php
}
?>

<?php echo $custom_css;

 ?>
</style>