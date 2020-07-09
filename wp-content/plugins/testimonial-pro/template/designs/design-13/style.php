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
    margin: 0 auto;
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
    top: -16px;
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
    background-color: <?php echo $ts_img_border_clr;?>;
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
    display: block;
    padding-top: 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a:before {
    border-bottom-color: <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote-image .intro-icon.a:after {
    border-top-color: <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    display: block;
 margin:0 auto 10px;
font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    padding: 20px 0;
    line-height:<?php echo $ts_content_line;?>px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 20px;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    padding-bottom: 5px;    margin: 0 auto 8px;
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
    padding: 0; 
       text-transform: uppercase;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
   font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>; 
       font-weight: 600; margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
    color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .designation {
    font-size:<?php echo $ts_position_size ;?>px;
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
 margin:0 auto 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
      font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
            font-weight: 600;
             margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev, #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next{
    color: <?php echo $ts_nav_btn_font_clr; ?>;
    background-color: transparent;
    border:2px solid <?php echo $ts_nav_btn_bg_clr;?>;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev:hover, #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next:hover{
    color: <?php echo $ts_nav_btn_font_hvr_clr; ?>;
    background-color: transparent;
       border:2px solid <?php echo $ts_nav_btn_font_hvr_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>