<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style>
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testi_box_carousel {
    max-width: 900px;
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    line-height:<?php echo $ts_content_line;?>px;
    position: relative;
    margin-top: 45px;
    margin-bottom: 20px;
    padding: 0 40px;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description::before {
    position: absolute;
    top: 0;
    left: 0;
    content: '\f10d';
    font-family: fontawesome;
 color:<?php echo $ts_quote_clr; ?>;
  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description::after {
    position: absolute;
    bottom: 0;
    right: 0;
    content: '\f10e';
    font-family: fontawesome;
     color:<?php echo $ts_quote_clr; ?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
    font-style: normal;
    font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    margin:0 auto 8px;
    
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating {
    margin:0 auto 8px;
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
    margin:0 auto 8px;
    font-style: italic;
    font-weight: 300;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-email {
    font-size:<?php echo $ts_email_size ;?>px;
     font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin:0 auto 8px;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website { 
   font-size:<?php echo $ts_website_size  ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    margin:0 auto 8px;
  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testi_thumb_carousel<?php echo $post_id; ?> {
    max-width: 250px;
    position: relative;
    left: calc(50% - 100px);
    min-height: 150px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testi_thumb_carousel<?php echo $post_id; ?> .slick-list {
    overflow: visible !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .thumb {
    overflow: hidden;
    position: relative;
    -moz-transform: translate(0, 10px);
    -webkit-transform: translate(0, 10px);
    -ms-transform: translate(0, 10px);
    -o-transform: translate(0, 10px);
    transform: translate(0, 10px);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    cursor: pointer;
    transition: .3s all;
    height: 90px;
    width: 90px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .thumb img {
    -webkit-border-radius: 50%;
    -khtml-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    height: 90px;
    width: 90px;
    opacity: .5;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-current img {
    height: 90px;
    width: 90px;
    opacity: 1;
}

<?php echo $custom_css;

 ?>
</style>