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
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
    width: auto;
    margin: 0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image {
    display: block;
    width: 60px;
    height: 68px;
    margin: 0 auto 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon {
    width: 60px;
    height: 40px;
    position: relative;
    background: #ddd;
    display: inline-block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon:before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon:after {
    content: "";
    border-left: 30px solid transparent;
    border-right: 30px solid transparent;
    position: absolute;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon:before {
    top: -15px;
    border-bottom: 16px solid #ddd;
    left: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon:after {
    bottom: -15px;
    border-top: 16px solid #ddd;
    left: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon.a {
    background-color: #fff;
    -webkit-transform: scale(.98, .98);
    -moz-transform: scale(.98, .98);
    transform: scale(.98, .98);
    z-index: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .intro-icon.a:before {
    top: -15px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a {
    background-color:  <?php echo $ts_img_border_clr;?>;
    top: 15px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a:hover span i {
    -webkit-transform: none;
    -moz-transform: none;
    -o-transform: none;
    transform: none;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a span {
    font-size: 18px;
    color: <?php echo $ts_quote_clr ;?>;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a:before {
    border-bottom-color: <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a:after {
    border-top-color: <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    display: block;
    margin: 0 auto 8px;
font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 20px;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
   margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}



#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name {
         font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    margin: 0 auto 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
   font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
      font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin: 0 auto 8px;
}

<?php echo $custom_css;

 ?>
</style>