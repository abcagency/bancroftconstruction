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


#wpsm_testi_pro_row_<?php echo $post_id; ?> #testimonial-slider<?php echo $post_id; ?> {
    padding: 0 60px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    font-family: 'Courgette', cursive;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
 letter-spacing: 1px;
  line-height:<?php echo $ts_content_line;?>px;
    font-size:<?php echo $ts_content_size;?>px;
   font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
   font-weight:<?php echo $ts_content_weight  ;?>;
   margin: 0 auto 15px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
    
    margin: 0 0 12px;
    line-height: 1.5;
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
   font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin:0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    
   font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    margin:0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
    color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating {
  margin:10px auto;
  padding: 10px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name a {
    color: #454545;
    text-decoration: none;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-position {
   font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;    
    font-style: italic;
    padding-left: 15px;
    margin:0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    padding: 45px;
    width: 150px;
    display: inline-block;
    -webkit-transition: all 300ms linear 0ms;
    -khtml-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;
    height: 150px;
    position: relative;
    z-index: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot img {
    -webkit-border-radius: 50%;
    -khtml-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot img {
    width: 100%;
    height: 100%;
    background-color: #fff;
    position: relative;
    z-index: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .active.owl-dot {
    padding: 25px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    visibility: hidden;
    background: url(<?php echo wpshopmart_testi_pro_directory_url.'assets/images/baby-flower.png';?>) center center no-repeat;
    -webkit-transform: scale(0.5);
    -khtml-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    filter: alpha(opacity=0);
    -ms-filter: "alpha(opacity=0)";
    -webkit-opacity: 0;
    -khtml-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    -webkit-transition: all 300ms linear 0ms;
    -khtml-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot:hover:before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .active.owl-dot:before {
    visibility: visible;
    -webkit-transform: scale(1);
    -khtml-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    filter: alpha(opacity=100);
    -ms-filter: "alpha(opacity=100)";
    -webkit-opacity: 1;
    -khtml-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1;
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev {
    width: 48px !important;
    height: 48px !important;
    line-height: 48px;
    position: absolute;
    color: #9b9b9b;
    background-color: transparent;
    border: 2px solid rgba(204, 204, 204, 0.3);
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
    border:1px solid <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev:hover {
    border-color: <?php echo $ts_img_border_clr;?>;
    background-color: #48cfe6;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next i,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev i {
    font-size: 25px;
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
    text-align: center;
    margin-bottom: 20px;
}
@media (max-width: 500px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?> #testimonial-slider<?php echo $post_id; ?> {
    padding: 0 5px;
}
}
<?php echo $custom_css;

 ?>
</style>