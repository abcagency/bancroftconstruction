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
    width: auto;
    margin: 0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 20px;
    position: relative;
    margin-bottom: 40px;

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




#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    line-height:<?php echo $ts_content_line;?>px !important;
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
 padding: 30px;
 position: relative;
 margin-bottom: 40px;
 border-radius: 15px;
 border-bottom-left-radius: 0;
 -webkit-box-shadow: 0px 15px 30px -16px rgba(0, 0, 0, 0.75);
 -moz-box-shadow: 0px 15px 30px -16px rgba(0, 0, 0, 0.75);
 box-shadow: 0px 15px 30px -16px rgba(0, 0, 0, 0.75);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
   border-top: 20px solid rgb(<?php echo $HoverColorRGB; ?>);
  <?php if($ts_box_opacity<="9"){ ?>
  border-top: 20px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
  else { ?>
  border-top: 20px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
  <?php }?>
    border-right: 30px solid transparent;
    bottom: -20px;
    left: 0px;
    border-bottom-left-radius: 4px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs{
    display: -webkit-flex;
    display: flex;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs .author-pic {
    border-radius: 50%;
    margin-right:15px;
    max-width: 80px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
   font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs .author-pic img{
       border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs {
    color: #fff;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .job{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>
margin-bottom: 6px;
display: block;
}
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


@media(max-width:600px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs {
        display:block;
        text-align: center;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description{
    border-bottom-left-radius: 15px;
}
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .description:before{
        content:none;
    }#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs .author-pic {
        margin:0 auto;
    }
}

<?php echo $custom_css;

 ?>
</style>

