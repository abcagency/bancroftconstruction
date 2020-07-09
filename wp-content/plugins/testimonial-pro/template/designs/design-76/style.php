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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_left {
  width: 31%;
  float: left;
  position: relative;
  margin-bottom: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .container {
  margin-bottom: 22px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> cite {
  background: #ffffff;
  font-size: 16px;
  color: #000000;
  font-weight: bold;
  letter-spacing: 1px;
  margin: 0px;
  padding: 10px 15px;
  position: absolute;
  text-transform: uppercase;
  bottom: 10px;
  line-height: 1.5;
  left: 10px;
  right: auto;
  z-index: 1;
  display: inline-block;
  font-style: normal;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> cite:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  height: calc(100% + 20px);
  width: calc(100% + 20px);
  border: 10px solid rgba(255, 255, 255, 0.65);
  left: -10px;
  top: -10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> cite small {
  text-transform: capitalize;
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
  display: block;
  clear: both;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
  width: 69%;
  padding: 0px 20px 0px 0px;
  float: right;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> blockquote {
  padding: 40px 0px 40px 50px;
  border: 0;
  position: relative;
  text-align: left;
  margin: 0 auto 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> blockquote q {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  line-height: 32px;
  border: 0;
  font-style: italic;
  line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> blockquote q::after {
  content: '"' !important;
  color: <?php echo $ts_quote_clr ;?> !important;
  position: absolute !important;
  font-size: 70px !important;
  font-style: normal !important;
  bottom: 0 !important;
  line-height: 0 !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> blockquote q::before {
  content: '"' !important;
  color: <?php echo $ts_quote_clr ;?> !important;
  position: absolute !important;
  font-size: 70px !important;
  top: 0 !important;
  font-style: normal !important;
  line-height: 1.2 !important;
  left: 5px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
  padding-left: 50px;
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin: 0 auto 4px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
  padding-left: 50px;
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
margin: 0 auto 4px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  padding-left: 50px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .imgwidth{
  width: 100%;
}
@media (max-width: 767px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_left {
    width: 100%;
    float: none;
    position: relative;
    max-width: 350px;
    margin: 10px auto;
  }

  #wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
    width: 100%;
  }
}

<?php echo $custom_css;

 ?>
</style>