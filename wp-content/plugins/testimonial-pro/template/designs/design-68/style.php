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


#wpsm_testi_pro_row_<?php echo $post_id; ?> .my-section {
    font-family: Roboto;
    background-color: #fff;
    background-size: cover;
    padding: 50px 0;
    position: relative;
    z-index: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial{
    <?php
    if($templates_presets!="carousel")
    {
    ?>
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 40px;
    <?php
    }

    ?>

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-header {
    background: <?php echo $ts_img_border_clr;?>;
    display: table;
    width: 100%;
    position: relative;
    margin-bottom: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-header:after {
    content: '';
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 17px 20px 0 0;
    border-color: <?php echo $ts_img_border_clr;?> transparent transparent;
    position: absolute;
    bottom: -17px;
    right: 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-image {
    display: table-cell;
    width: 81px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-meta {
    display: table-cell;
    padding: 0 20px;
    vertical-align: middle;
    text-align: left;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> span.testimonial-author {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
    display: block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> span.testimonial-job {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
    text-transform: uppercase;
    display: block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-quote {
padding: 0;
display: block;
margin: 10px 0;
padding-left: 0px;
border: none;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
min-height: 35px;
background:transparent;
position: relative;
padding-top: 20px;
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-quote::before{
    content: "\f10e";
    font-family: "FontAwesome";
    position: absolute;
    top: -20px;
    left: 0;
    width: 100%;
    color: <?php echo $ts_quote_clr ;?>;
    font-size: 34px;
    line-height: 1;
    text-align: right;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial p {
    color: #73848e;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-desc p {
    padding-left: 0px;
    color: #73848e;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating i.fa-star {
    font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating i.fa-star-o {
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-email {
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: bold;
    margin: 0 auto 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-website {
   font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: bold;
    margin: 0 auto 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

<?php echo $custom_css;

 ?>
</style>