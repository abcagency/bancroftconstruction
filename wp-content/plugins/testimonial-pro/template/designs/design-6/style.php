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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
  width: 100%;
  margin-right: 0;
  text-align: left;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .image {
  padding: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial:before {
  content: "\f10d";
  position: absolute;
  top: -12px;
  left: 201px;
  font-family: fontawesome;
  font-size: 60px;
  color: <?php echo $ts_quote_clr ;?>;
  display: block;
  width: 80px;
  height: 80px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-item img {
  border-radius: 150px;
  margin-bottom: 10px;
 width: 100%;
  position: relative;
  z-index: 999;
  max-width: 150px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .post {
  
  text-transform: uppercase;
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
margin: 0 auto 8px;
  display: block;
  line-height: 26px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .info{
  margin-bottom:30px;
  padding-bottom: 10px;
  border-bottom: 1px  solid   <?php echo $ts_img_border_clr; ?>;
  margin-right:80px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  padding-right: 160px;
 line-height:<?php echo $ts_content_line;?>px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .circle {
  width: 160px;
  height: 160px;
  border: 6px solid <?php echo $ts_img_border_clr; ?>;
  border-radius: 150px;
  position: absolute;
  clip: rect(0,80px,81px,0);
  z-index: 2;
  top: 0;
  left: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .left {
  -webkit-transform: rotate(-30deg);
  -ms-transform: rotate(-30deg);
  transform: rotate(-30deg);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .right{
  -webkit-transform: rotate(-115deg);
  -ms-transform: rotate(-115deg);
  transform: rotate(-115deg);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
 margin: 0 auto 8px;
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
	 margin: 0 auto 8px;
	 font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
 margin: 0 auto 8px;
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
  color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-] {
  color: <?php echo $ts_nav_btn_font_clr; ?>;
  font-size:60px;
  background: transparent;
  transition: all .3s ease;
  height: auto !important;
  width: auto !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-]:hover{
  background-color: transparent;
   color: <?php echo $ts_nav_btn_font_hvr_clr ?>;
}
@media(min-width:600px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
    padding-left:200px;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    margin-top: 0;
    position: absolute;
    transform: translateY(-50%);
    top: 50%;
    left: 0;
    opacity: 1;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-] {
    display: block;
    margin:0;
    line-height: 1;
    padding: 0;
     height: auto !important;
      width: auto !important;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .image {
    position: absolute;
    right: 0;
  }
}@media (max-width:599px){
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial:before{
		content:none;
	}
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav{
      position: relative;
    }
}

<?php echo $custom_css;

 ?>
</style>