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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    position: relative;
    background-color: #292921;
    display: flex;
    padding: 20px 30px;
    margin: 20px auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
    min-width: 150px;
    width: 150px;
    margin-right: 20px;
    position: relative;
        height: 150px;
    overflow: hidden;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic::after {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: url(<?php echo wpshopmart_testi_pro_directory_url.'assets/images/pic_overlay.png' ;?>);
    top: 0;
    left: 0;
    background-size: contain;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic img {
    border-radius: 50%;
    margin: 0 auto;
    display: block;
    max-width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .description {
    text-align: center;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    margin: 15px auto 0px;
    line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .name {
    font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    margin: 0;
    text-align: right;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
        font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    text-align: right;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
        font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    text-align: right;
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
    text-align: right;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    text-align: right;
    
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?>l .rating  .fa-star{
    text-align: right;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    text-align: right;
    color:<?php echo $ts_empstar_clr;?>;}


@media(max-width:700px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
        display: block;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
        margin: 10px auto;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .content,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .name,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .position,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .website,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .email,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
        text-align: center;
    }




}

<?php echo $custom_css;

 ?>
</style>