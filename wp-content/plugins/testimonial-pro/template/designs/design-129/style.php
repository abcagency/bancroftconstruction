<style type="text/css">
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	display: block;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slideshow {
  margin-bottom: 30px;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .photo {
  position: absolute;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .photo img {
  border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text {
  padding-left: 180px;
  padding-top: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-slideshow img {
  width: 116px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-frame {
  border-color: #d6d6d6;
  text-align: center;
  padding: 2px;
  border: 1px dashed #d6d6d6;
  border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .round {
  padding: 26px;
  background-color: <?php echo $ts_img_border_clr;?>;
  display: block;
  border-radius: 50%;
  transition: all 0.3s ease;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slideshow:hover .round {
  background-color: <?php echo $ts_link_hvr_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
   font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  margin-bottom: 12px;
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
  font-family: "Leckerli One", cursive;
  font-size:<?php echo $ts_name_size;?>px;
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
  text-transform: capitalize;
  display: inline-block;
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 span {
  font-size:<?php echo $ts_position_size ;?>px;
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>
  padding-top: 5px;
  padding-bottom: 10px;
  display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  display: inline-block;
  float: right;
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
	  display: block;
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
  display: block;
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
  margin: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
@media (max-width: 600px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .photo {
    margin: 0 auto;
    position: relative;
    display: block;
    max-width:150px;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text {
    padding-left: 10px;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?>  .rating{
    float:none;   
     display: block;
  }
}
<?php echo $custom_css;

 ?>
</style>