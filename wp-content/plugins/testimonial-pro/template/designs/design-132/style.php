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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonail {
  padding: 40px 30px;
  position: relative;
  text-align: center;
  margin: 50px 0;
  border: 2px solid <?php echo $ts_img_border_clr; ?>;
  font-size: 16px;
  font-weight: 300;
  line-height: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .authorimg {
  width: auto;
  min-width: 100px;
  max-width: 100px;
  border-radius: 50%;
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .avatar {
  position: absolute;
  width: 100px;
  left: 50%;
  top: -50px;
  margin-left: -50px;
  z-index: 1;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .avatar:after {
  content: "\f10d";
  font-family: FontAwesome;
  font-style: normal;
  font-size: 14px;
  color: <?php echo $ts_quote_clr ;?>;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 30px;
  height: 30px;
  background-color: #ffffff;
  border-radius: 50%;
  line-height: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
  font-style: normal;
  text-transform: uppercase;
  display: block;
  width: 100%;
  margin-top: 20px;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
  margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .job {
  border-color: #323232;
  font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
  text-transform: uppercase;
  font-style: normal;
  display: block;
  margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{  
  margin-bottom: 10px; 
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para{
  font-style: italic;
  margin-top: 10px;
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	 margin: 0;
  line-height: 1.4;
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
  margin: 0;
  line-height: 1.4;
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
<?php echo $custom_css;

 ?>
</style>