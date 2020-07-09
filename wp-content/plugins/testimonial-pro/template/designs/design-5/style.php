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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider {
    margin-bottom: 70px;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial {
   
    border: 2px solid <?php echo $ts_img_border_clr;?>;
    margin-top:80px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial-top{
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    text-align:center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image_holder {
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image_holder img {

    margin:0 auto;
    display: block;
    border-radius: 50%;
    width: 80px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .text-description {
    padding: 9px 24px 26px 24px;
    margin-top: -40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .description {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight;?>;
 line-height:<?php echo $ts_content_line;?>px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .wpsm-testimonial-bottom {
        border-top: 2px solid <?php echo $ts_img_border_clr;?>;
        display: table;
        table-layout: fixed;
        width: 100%;
        height: 100%;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .wpsm-testimonial_icon_holder {
	text-align: center;
    display: table-cell;
    height: 100%;
    vertical-align: middle;
    width: 15%;
    border-right: 2px solid <?php echo $ts_img_border_clr;?>;
    font-size: 40px;
    color: <?php echo $ts_quote_clr ;?>;
    box-sizing: border-box;
    }

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .wpsm-testimonial_author_name {
        width: 86%;
        box-sizing: border-box;
        text-align: left;
        padding-left: 20px;
        display: table-cell;
        height: 100%;
        vertical-align: middle;
        margin: 0 auto;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .wpsm-testimonial_author {
        line-height: 20px;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 5px 0 0;
    }

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star {
    font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star-o {
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
 font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: 600;
        margin: 0 auto 10px;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
        margin: 0 auto 10px;
    }
   #wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;}
   #wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
       position: relative;
       margin:10px auto;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
        display: inline-block;
        transition: all 0.2s ease;
        display: inline-block;
        height: 10px;
        width: 10px;
        opacity: 0.5;
        margin: 0 8px;
        position: relative;
        transform: translateY(0);
        background-color: #464646;
        border-radius: 50%;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot:hover,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active{
        background-color: #e5735c;
    }
    
<?php echo $custom_css;

 ?>
</style>