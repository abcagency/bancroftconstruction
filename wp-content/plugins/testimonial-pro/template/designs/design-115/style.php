<style type="text/css">
<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    text-align: center;
    -webkit-box-shadow: 0px 0px 34px -5px rgba(0, 0, 0, 0.17);
    -moz-box-shadow: 0px 0px 34px -5px rgba(0, 0, 0, 0.17);
    box-shadow: 0px 0px 34px -5px rgba(0, 0, 0, 0.17);
    margin: 30px 0px 50px;
    padding: 20px;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial i.fa-quote-left{
    color: <?php echo $ts_quote_clr ;?>;
    position: absolute;
    left: 50px;
    top: 18px;
    font-size: 50px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic{
    height: 80px;
    width: 80px;
    margin: -60px auto 0 !important;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic img{
    height: 80px;
    width: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center center;
    object-position: center center;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
    margin: 0 auto;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    margin: 0 auto;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .user .name{
       font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    padding-top: 10px;
    margin-bottom: 5px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .user .jobtitle{
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description{
    padding: 10px 0;
        font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-website {
      font-size:<?php echo $ts_website_size  ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    margin-bottom: 5px;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-email {
       font-size:<?php echo $ts_email_size ;?>px;
     font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin-bottom: 5px;
}
<?php echo $custom_css;

 ?>
</style>