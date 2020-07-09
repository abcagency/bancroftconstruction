<style type="text/css">
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    line-height:<?php echo $ts_content_line;?>px; 
    width: 80%;
    margin: 30px 0;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
    text-transform: uppercase;
    margin: 20px 0 12px 0;
   font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating {
    margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-position {
   font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    margin-bottom: 20px;
    font-variant: small-caps;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-email {
   font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    font-weight: 500;
  margin:0 auto 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    font-weight: 500;
    margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
    color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    
color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    margin: 4px 10px;
    overflow: hidden;
    display: inline-block;
    -webkit-transition: all 300ms linear 0ms;
    -khtml-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;
    position: relative;
    z-index: 0;
    border: 2px solid #e9e9e9;
    -webkit-border-radius: 50%;
    -khtml-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000;
    opacity: .5;
    z-index: 2;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active::before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot:hover::before {
    z-index: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot img {
	
    overflow: hidden;
    -webkit-border-radius: 50%;
    -khtml-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot img {
    height:150px;
	width:150px;
    background-color: #fff;
    position: relative;
    z-index: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    border: 5px solid transparent;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .active.owl-dot {
    border: 5px solid <?php echo $ts_img_border_clr; ?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    top: 50px;
    left: 50%;
    width: 100%;
    max-width: 300px;
    transform: translateX(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev {
    width: 48px;
    height: 48px;
    line-height: 48px;
    position: absolute;
    color: #9b9b9b;
    background-color: transparent;
    font-size: 20px;
    top: 0;
    text-align: center;
    -webkit-border-radius: 50%;
    -khtml-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    filter: alpha(opacity=100);
    -ms-filter: "alpha(opacity=100)";
    -webkit-opacity: 1;
    -khtml-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1;
    -webkit-transition: all 300ms linear 0ms;
    -khtml-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev:hover {
    color: #48cfe6;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next i,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev i {
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev {
    left: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next {
    right: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .carousel-thumbs {
    text-align: left;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-container {
    position: relative;
    border-radius: 5px;
    padding: 40px 0 50px 0;
    margin-top: 35px;
    z-index: 99;
    position: relative;
    z-index: 0;
}	
<?php echo $custom_css;

 ?>
</style>