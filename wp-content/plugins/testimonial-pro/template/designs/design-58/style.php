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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
  position: relative;
  padding-left: 45px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .para::after {
  content: "";
  position: absolute;
  bottom: -30px;
  left: 30px;
 border-top: 30px solid rgb(<?php echo $HoverColorRGB; ?>);
<?php if($ts_box_opacity<="9"){ ?>
 border-top: 30px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php }
else { ?>
 border-top:30px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
<?php }?>
  border-left: 30px solid transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-image {
  width: 80px;
  height: 80px;
  background: <?php echo $ts_img_border_clr;?>;
  padding: 5px;
  border-radius: 100%;
  position: absolute;
  left: -43px;
  top: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-content {
  overflow: visible;
  margin: auto;
  position: relative;
  color: #fff;
  border: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
  border-radius: 50%;
  width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  margin-bottom: 10px;
  padding: 50px 40px 60px 60px;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
 line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .job-describe {
  padding-left: 80px;
  color: #777;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
  text-transform: uppercase;
  margin: 0;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
  font-style: italic;
  padding-left: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  margin: 5px 0;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> p {
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin: 0 auto 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
margin: 0 auto 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
@media (max-width: 576px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
    padding: 25px;
    font-size: 17px;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-image {
    margin: 0 auto;
    position: relative;
    left: auto;
    top: 20px;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
    padding-left: 0;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .job-describe {
    padding-left: 15px;
  }
}

<?php echo $custom_css;

 ?>
</style>