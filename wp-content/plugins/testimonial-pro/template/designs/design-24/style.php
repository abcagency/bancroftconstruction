<style type="text/css">
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
  position: relative;
  overflow: visible;
  z-index: 1;
  display: table;
}
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
  overflow: visible;
  z-index: 1;
  display: table;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  font-size: 15px;
  display: block;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
 display: inline-block;
  margin: 0;
  padding: 5px 20px;
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
  display: inline-block;
  margin: 0;
  padding: 5px 20px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img {
  height: 477px;
  float: left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img img {
  width: auto;
  border-radius: 0;
  position: absolute;
  left: 0;
  margin-bottom: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
   font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  font-style: italic;
  letter-spacing: 0.36px;
  line-height:<?php echo $ts_content_line;?>px;
  max-width: 800px;
  margin: 20px auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
  padding-left: 200px;
  text-align: center;
  display: table-cell;
  vertical-align: middle;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .coma {
  color: <?php echo $ts_quote_clr ;?>;
  font-size: 25px;
  display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
 
  line-height: 1.6;
  margin-bottom: 0;
  margin-top: 5px;
  text-transform: uppercase;
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h5 {
  letter-spacing: 0.56px;
  line-height: 26px;
  margin-bottom: 0;
  margin-top: 0;
    font-size:<?php echo $ts_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_position_clr;?>;
  font-weight:<?php echo $ts_position_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span {
  background: transparent;
  border: 1px solid #b6795f;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot.active span{
  background-color: #b6795f;
}

@media (max-width: 650px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
    padding-left:0;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img{
    display: none;
  }
}

<?php echo $custom_css;

 ?>
</style>