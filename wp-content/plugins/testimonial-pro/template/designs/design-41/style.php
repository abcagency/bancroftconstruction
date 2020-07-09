<style>
<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
#wpsm_testi_pro_row_<?php echo $post_id;?> .testimonial {
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id;?> .description {
  font-size:<?php echo $ts_content_size;?>px;
  font-family:'<?php echo $font_family;?>';
  line-height:<?php echo $ts_content_line;?>px !important;
  color:<?php echo $ts_content_clr;?>;
  width: 80%;
  margin: 30px auto 0 auto;
font-weight:<?php echo $ts_content_weight  ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .author-name {
  font-size:<?php echo $ts_name_size;?>px;
   text-transform: uppercase;
   margin: 20px 0 12px 0;
  font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;

}



#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating {
    padding: 15px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id;?> .author-name a {
    color: #454545;
    text-decoration: none;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .author-position {
font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;

}

#wpsm_testi_pro_row_<?php echo $post_id;?> .author-email {
    font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin: 0 auto 8px;
   
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .author-website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;   
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-dot {
    width: 50px;
    margin: 4px 10px;
    display: inline-block;
    -webkit-transition: all 300ms linear 0ms;
    -khtml-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;
    height: 50px;
    position: relative;
    z-index: 0;
    border: 2px solid #fff;
     -webkit-border-radius: 50%;
     -khtml-border-radius: 50%;
     -moz-border-radius: 50%;
     -ms-border-radius: 50%;
     -o-border-radius: 50%;
     border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-dot img {
    width: 50px;
    height: 50px;
    
    overflow: hidden;
    -webkit-border-radius: 50%;
    -khtml-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-dot img {
    width: 100%;
    height: 100%;
    background-color: #fff;
    position: relative;
    z-index: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-dot:hover,
#wpsm_testi_pro_row_<?php echo $post_id;?> .active.owl-dot {
   border-color:<?php echo $ts_img_border_clr;?>;
}



#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-nav {
      position: absolute;
      top: 50px;
      left: 50%;
      width: 100%;
      max-width: 300px;
      transform: translateX(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-next,
#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-prev {
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

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-next:hover,
#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-prev:hover {
    
    color: #48cfe6;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-next i,
#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-prev i {
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-prev {
    left: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-next {
    right: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .carousel-thumbs {
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id;?> .testimonial-container {
    position: relative;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    border-radius: 5px;
    padding: 40px 0 50px 0;
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.09);
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.09);
    margin-top: 35px;
    text-align: center;
    z-index: 99;
    position: relative;
    z-index: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id;?> .testimonial-container::before {
    content: "";
    position: absolute;
    width: 90%;
    top: 0;
    bottom: 0;
    left: 5%;
        background: rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    background: rgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
    -webkit-box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.02);
    box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.02);
    border-radius: 5px;
    z-index: -1;
    -webkit-transform: rotate(-3deg);
    transform: rotate(-3deg);
    
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .testimonial .profile {
    height: 150px;
    width: 150px;
        -webkit-border-radius: 50%;
        -khtml-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        margin:0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id;?> .testimonial .profile img {
     -webkit-border-radius: 50%;
     -khtml-border-radius: 50%;
     -moz-border-radius: 50%;
     -ms-border-radius: 50%;
     -o-border-radius: 50%;
     border-radius: 50%;
}
@media (max-width:767px){
    
#wpsm_testi_pro_row_<?php echo $post_id;?> .owl-dot {
    width: 50px;
    margin: 5px;
}

<?php echo $custom_css;

 ?>
</style>