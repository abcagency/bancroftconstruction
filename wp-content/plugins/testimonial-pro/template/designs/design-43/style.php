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
    letter-spacing: unset;
    margin-bottom:30px;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block {
  position: relative;
  margin-top: 60px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .inner-box {
  position: relative;
  padding: 0px 30px 30px;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  box-shadow: 0px 0px 30px rgba(226, 220, 220, 0.6);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .inner-box .image {
  position: relative;
  width: 100px;
  height: 100px;
  overflow: hidden;
  margin-top: -50px;
  border-radius: 50%;
  display: inline-block;
  border: 2px solid <?php echo $ts_img_border_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .inner-box .text {
  position: relative;
  margin-top: 30px;
  line-height: 1.9em;
  margin-bottom: 15px;
  font-size:<?php echo $ts_content_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .inner-box .text p {
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .inner-box .author {
  position: relative;
  line-height: 1.4em;
  text-align: right;
  margin: 0;
  font-size:<?php echo $ts_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_name_clr;?>;
  font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .inner-box .designation {
  position: relative;
  text-align: right;
  font-size:<?php echo $ts_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_position_clr;?>;
  font-weight:<?php echo $ts_position_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .email{
margin: 0 auto 5px;
font-weight: 600;
text-align: right;
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .website{
margin: 0 auto 5px;
font-weight: 600;
text-align: right;
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
text-align: right;
display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
 color:<?php echo $ts_link_hvr_clr;?>;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .rating
{
  text-align: right;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .rating i.fa-star {
  font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
   -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-block .rating i.fa-star-o {
 font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;
}
</style>