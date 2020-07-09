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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 5px;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
    width: auto;
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image {
    max-width: 120px;
    display: block;
    margin: 0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image span{
    display: inline-block;
    position: relative;
    padding: 5px;
   border-radius: 10px;
    border:1px solid <?php echo $ts_img_border_clr;?>;
  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image img{
      border-radius: 10px;
      width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    display: block;
    margin: 0 auto 10px;
   font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>; 
    line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name {
       font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name small{
   opacity: .9;
   display: block;
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    margin: 0 auto 8px;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    padding-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;  
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
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