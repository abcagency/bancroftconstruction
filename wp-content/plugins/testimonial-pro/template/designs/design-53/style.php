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
  position: relative;
  padding-top: 80px;
  padding: 20px;
  margin: 10px auto;
  position: relative;
  display: table;
  table-layout: fixed;
  height: 100%;
  width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img {
  position: relative;
  display: table-cell;
  height: 100%;
  vertical-align: middle;
  width: 30%;
  text-align: left;
  line-height: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img img {
  border-radius: 50%;
      width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-content {
  position: relative;
  display: table-cell;
  height: 100%;
  vertical-align: middle;
  width: 70%;
  text-align: left;
  padding-left: 25px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-content p{
  margin: 0 0 10px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
  margin-bottom: 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
  margin-bottom: 20px;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position::before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .position::after {
  content: '"';
  position: relative;
  font-size: 30px;
  line-height: 1;
  vertical-align: middle;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
 font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
    margin: 0 auto 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: 600;
    margin: 0 auto 2px;
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








@media (max-width: 767px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    display: block;
    table-layout: unset;
    text-align: center;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-content {
    text-align: center;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img {
    display: block;
    max-width: 250px;
    margin: 5px auto;
    width: 100%;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-content {
    position: relative;
    display: block;
    padding-left: 0;
    width: 100%;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
    position: relative;
    left: 0;
    width: 100%;
    bottom: 30px;
    padding-left: 0px;
    text-align: center;
  }
}

<?php echo $custom_css;

 ?>
</style>