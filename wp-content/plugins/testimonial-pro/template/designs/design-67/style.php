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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 20px 15px 0;
    margin-bottom: 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description:after {
    content: ' ';
    position: absolute;
    width: 0;
    height: 0;
    left: 15px;
    right: auto;
    bottom: -28px;
    border: 20px solid;
      border-color: rgb(<?php echo $HoverColorRGB; ?>) rgb(<?php echo $HoverColorRGB; ?>) transparent transparent;
	<?php if($ts_box_opacity<="9"){ ?>
	border-color: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>) rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>) transparent transparent;
	<?php }
	else { ?>
	border-color: rgba(<?php echo $HoverColorRGB; ?>,1) rgba(<?php echo $HoverColorRGB; ?>,1) transparent transparent;
	<?php }?>

    margin-top: -42px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description {
        background: rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    background: rgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
    border-radius: 40px;
    box-shadow: 10px 0px 0px 0px rgba(153, 153, 153, 0.22);
    padding: 45px 35px;
    position: relative;
    font-size:<?php echo $ts_content_size;?>px;
   font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
   font-weight:<?php echo $ts_content_weight  ;?>;
   line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description:before {
    content: "\f10d";
    font-family: 'FontAwesome';
    position: absolute;
    top: -10px;
    font-size: 40px;
    color: <?php echo $ts_quote_clr ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-review {
    padding-top: 32px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-review img {
    float: left;
    max-width: 100px;
    margin-left: 25px;
    margin-right: 20px;
    border: 5px solid <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-review .testimonial-title {
    color: <?php echo $ts_name_clr;?>;
    font-size: 18px;
    font-weight: 600;
    margin-top: 15px;
    clear:inherit;
    float: left;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-title small {
    display: block;
   font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
    margin-top: 5px;
}


@media (max-width: 480px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-review img {
        margin-left: 0px;
    }}
    @media (max-width: 600px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-review img {
      margin:0 auto;
      float:none;
    }
    
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-review .testimonial-title {
  
    float: none;
    text-align:center;
}
    }
  
<?php echo $custom_css;

 ?>
</style>