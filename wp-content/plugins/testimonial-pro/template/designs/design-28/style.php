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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
  border: 10px solid <?php echo $ts_img_border_clr;?>;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  padding: 40px 0 25px 0;
  margin: 50px;
  text-align: center;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testi-img {
  width: 100px;
  height: 100px;
  line-height: 100px;
  background: #fff;
  margin: 0 auto;
  font-size: 70px;
  font-weight: 900;
  color: #f1971f;
  position: absolute;
  top: -60px;
  left: 0;
  right: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testi-img img {
  display: block;
  max-width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .title {
  padding: 7px 0;
  margin: 0 -30px 20px;
  border: 7px solid #fff;
  background: #e8326f;
  letter-spacing: 1px;
  text-transform: uppercase;
  position: relative;
  font-size:<?php echo $ts_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_name_clr;?>;
  font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .title:before {
  content: "";
  border-top: 15px solid #662a66;
  border-left: 15px solid transparent;
  border-bottom: 15px solid transparent;
  position: absolute;
  bottom: -37px;
  left: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .title:after {
  content: "";
  border-top: 15px solid #662a66;
  border-right: 15px solid transparent;
  border-bottom: 15px solid transparent;
  position: absolute;
  bottom: -37px;
  right: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .post {
  display: inline-block;
  text-transform: capitalize;
  font-size:<?php echo $ts_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_position_clr;?>;
  font-weight:<?php echo $ts_position_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description {
  padding: 0 20px;
  letter-spacing: 1px;
  line-height:<?php echo $ts_content_line;?>px;
  font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .email{
margin: 0 auto 5px;
font-weight: 600;
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .website{
margin: 0 auto 5px;
font-weight: 600;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
  font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
  font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}



@media only screen and (max-width: 990px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin: 30px;
    margin-top:50px;
  }
}

<?php echo $custom_css;?>
</style>