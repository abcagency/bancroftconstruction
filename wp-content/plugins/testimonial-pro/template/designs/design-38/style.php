<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style type="text/css">
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item {
  display: block;
  position: relative;
  margin-top:50px;
  margin-bottom: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item:hover .hexagon-user {
  top: -30px;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .hexagon-user {
  width: 93px;
  height: 106px;
  position: relative;
  background: url(<?php echo wpshopmart_testi_pro_directory_url.'assets/images/hexagon-user.png';?>) left top no-repeat;
  position: absolute;
  top: -10px;
  left: 25px;
  z-index: 3;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .hexagon-user .hexagon-user-img {
  overflow: hidden;
  visibility: hidden;
  -webkit-transform: rotate(120deg);
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -o-transform: rotate(120deg);
  transform: rotate(120deg);
  width: 77px;
  height: 88px;
  margin: 8px;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .hexagon-user .hexagon-user-img .hexagon-in1 {
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .hexagon-user .hexagon-user-img .hexagon-in1 .hexagon-in2 {
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
  background-position: 50%;
  visibility: visible;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .testimonials-content {
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  overflow: hidden;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  position: relative;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .testimonials-content:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 1;
  background-image: linear-gradient(135deg, #0FB4E5 0%, #743FE5 100%);
  opacity: 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .testimonials-content .user-name {
  display: block;
  margin-top: 20px;
  padding-left: 140px;
  margin-bottom: 5px;
  position: relative;
  z-index: 3;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .testimonials-content span {
  display: block;
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>
  letter-spacing: 0.6px;
  padding-left: 140px;
  padding-right: 25px;
  position: relative;
  margin-bottom: 5px;
  z-index: 3;


}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .testimonials-content .description {
  padding-left: 25px;
  padding-right: 25px;
  margin-bottom: 25px;
  margin-top: 40px;
  letter-spacing: 0.6px;
  line-height:<?php echo $ts_content_line;?>px !important;
  position: relative;
  z-index: 3;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>
  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .email{
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
padding-left: 140px;
margin: 0 auto 5px;
font-weight: 600;



}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
margin: 0 auto 5px;
font-weight: 600;
padding-left: 140px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
color:<?php echo $ts_link_hvr_clr;?>;  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .rating
{
padding-left: 140px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .rating i.fa-star {
  font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonials-item .rating i.fa-star-o {
font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}
<?php echo $custom_css; ?>
</style>