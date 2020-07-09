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
    letter-spacing: unset;
        margin-bottom:30px;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    display: -webkit-flex;
    display: flex;
    margin-top: 30px;
    padding: 20px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial img{
     width: 100%;
    display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .profile {
    width: 30%;
    float: left;
    background-color: #fff;
    text-align: center;
    position: relative;
    top: -30px;
    z-index: 999;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .content {
    width: 70%;
    float: left;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    align-items: center;
    left: -20px;
    position: relative;
    justify-content: center;
    padding: 0 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .profile .user {
    position: absolute;
    padding: 10px 0;
    bottom: 0;
    left: 0;
    z-index: 999;
    width: 100%;
    background-color: #fff;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .profile .user .name {
         font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .profile .user .position {
	font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description {
     	font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    max-width: 600px;
   line-height:<?php echo $ts_content_line;?>px !important;
    font-weight: <?php echo $ts_content_weight; ?>;
    text-align: center;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
    margin:0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
             font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
    margin:0 auto 8px;
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
    font-weight: 600;
    margin:0 auto 8px;
}

@media (max-width: 600px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
        display: block;
        margin: 0 auto;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .content,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .profile {
        display: block;
        float: none;
        width: 100%;
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .profile {
        max-width: 250px;
        margin: 10px auto;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .content {
        padding: 20px;
        left: 0;
    }
}

<?php echo $custom_css;

 ?></style>