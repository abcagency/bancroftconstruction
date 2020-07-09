<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
  position:relative;
  font-family:'<?php echo $font_family;?>';
  letter-spacing:2px;
  font-size:<?php echo $ts_sec_title_size;?>px;
  color:<?php echo $ts_sec_title_clr ;?>;
  font-weight:<?php echo $ts_sec_title_weight ;?>;
  text-align: center;
} 

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
  position: relative;
  padding-top: 80px;
  text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial::before {
  content: '"';
  position: absolute;
  left: 50%;
  font-family: Georgia, "Times New Roman", Times, serif;
  top: 0px;
  transform: translateX(-50%);
  margin: auto;
  font-size: 100px;
  color: <?php echo $ts_quote_clr ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
  max-width: 150px;
  margin: 10px auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
  margin-top: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> q {
  font-style: italic;
  quotes: none;
 line-height:<?php echo $ts_content_line;?>px !important;
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> cite {
  clear: both;
  display: inline-block;
  width: 100%;
  margin-top: 25px;
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
  position: relative;
  z-index: 1;
  font-style: normal;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> cite small {
  clear: both;
  display: inline-block;
  width: 100%;
  text-transform: none;
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin: 0 auto 4px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
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