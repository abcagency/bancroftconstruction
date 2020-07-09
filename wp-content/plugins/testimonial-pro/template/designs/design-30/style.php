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
    padding: 30px;
    font-size: 0;
    position: relative;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 3px 15px 20px 0 rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 3px 15px 20px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 3px 15px 20px 0 rgba(0, 0, 0, 0.05);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-wrapper {
    padding: 0;
    max-width: 100%;
    vertical-align: top;
    display: inline-block;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 0;
    width: 46px;
    height: 46px;
    position: static;
    font-size: 18px;
    -webkit-box-shadow: 5px 10px 20px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 5px 10px 20px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 5px 10px 20px 0 rgba(0, 0, 0, 0.15);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-wrapper img {
    width: 100%;
    height: 100%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-wrapper:after {
    content: '';
    width: 4px;
    position: absolute;
    bottom: 30px;
    top: 87px;
    background-color: <?php echo $ts_img_border_clr;?>;
    left: 51px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-content {
    font-size: 18px;
    padding-left: 15px;
    vertical-align: top;
    display: inline-block;
    width: -webkit-calc(100% - 52px);
    width: -moz-calc(100% - 52px);
    width: calc(100% - 52px);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-content p {
    line-height: 1.5;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .name {
    letter-spacing: .5px;
       font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
padding:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
    line-height:<?php echo $ts_content_line;?>px;   
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
    padding-top: 5px;
    padding-bottom: 10px;
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
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
    font-weight: 600;
        margin: 0 auto 5px;
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
        margin: 0 auto 5px;
}

@media(max-width:380px) {
   #wpsm_testi_pro_row_<?php echo $post_id; ?> .img-wrapper {
       display: block;
       margin: 0 auto;
   }

   #wpsm_testi_pro_row_<?php echo $post_id; ?> .img-wrapper::after {
       content: none;
   }

   #wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-content {
       display: block;
       width: 100%;
       text-align: center;
       
   }

}

@media(max-width:568px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
        padding: 20px;
    }
}

<?php echo $custom_css;

 ?>
</style>