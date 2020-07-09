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

#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
    height: 78px;
    width: 78px;    `    
    object-fit: cover; 
    -o-object-fit: cover;  
    object-position: top;
    -o-object-position: top;
    width: auto;
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    border: 1px solid <?php echo $ts_img_border_clr;?>;
    padding: 20px;
    text-align: center;
    font-size:<?php echo $ts_content_size;?>px;
   font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
   font-weight:<?php echo $ts_content_weight  ;?>;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}

<?php
if($templates_presets!="carousel")
{
    ?>
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
padding:10px;
}
    <?php
}
?>


#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name {
    font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    margin: 10px auto;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {  
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
    
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating {
    padding: 10px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website {
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
    font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin: 0 auto 8px;
}
/*
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot span {
    display: block;
    width: 13px;
    height: 13px;
    margin: 5px 7px;
    filter: Alpha(Opacity=50);
    border: 1px solid #81be18;
    border-radius: 50px;
    float: left;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    margin-top: 30px;
    display: inline-block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
    width: 100%;
    margin: auto;
    position: relative;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active span {
    background: #81be18;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    text-align: center;
    font-size: 20px;
    width: 100%;
    bottom: -40px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next {
    display: inline-block;
    height: 40px;
    color: #fff;
    width: 40px;
    background-color: #9acb46;
    line-height: 40px;
    margin-right: 5px;
}
*/

<?php echo $custom_css;

 ?>
</style>