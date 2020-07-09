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
  line-height:<?php echo $ts_content_line;?>px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
     text-align: center;
     position: relative;
     padding-top: 70px;
   
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial::before {
    content:"\f10d";
    font-family: "FontAwesome";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    color: <?php echo $ts_quote_clr ;?>;
    font-size: 50px;
    line-height: 1;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
   line-height:<?php echo $ts_content_line;?>px;
   font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
    max-width: 800px;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
  
    line-height: 1.2;
  margin: 0 auto 8px;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
   font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
  font-weight: 600;
  margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
   font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
    margin: 0 auto 8px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
    text-align: center;
    margin-bottom: 20px;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    justify-content: center;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    display: inline-block;
    transition: all 0.6s ease 0s;
    display: inline-block;
    margin-right: 5px;
    opacity: 0.5;
    filter: alpha(opacity=50);
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot img {
    width: 100%;
    max-width:80px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active {
    opacity: 1;
    filter: alpha(opacity=100);
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .carousel-thumbs {
      margin-top: 20px;
}

<?php echo $custom_css;

 ?>
</style>