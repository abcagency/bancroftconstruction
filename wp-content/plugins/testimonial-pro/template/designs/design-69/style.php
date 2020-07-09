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
    margin-bottom:30px;
    text-align: center;
} 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    background-size: cover
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item{
padding:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-content{
	    font-size:<?php echo $ts_content_size;?>px;
   font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
   font-weight:<?php echo $ts_content_weight  ;?>;
   line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .shadow-lite {
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .owl-pagination {
    text-align: center;
    width: 100%;
    padding-top: 20px
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item {
    display: inline-block;
    width: 100%
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .testimonial-inner {
    padding: 40px
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author {
    display: inline-block;
    color: #fff;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author img {
    border-radius: 50%;
    height: 80px;
    width: 80px;
    float: left;
    margin-left: 30px;
    margin-right: 20px;
    margin-top: -32px;
    position: relative;
    padding: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer {
    display: inline-block;
    margin-top: -30px
}
/*
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer span{
   // opacity: .7;
}
*/
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .name {
   font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    letter-spacing: .3px;
    display: inline-block;
    text-transform: uppercase;
    margin-right: 10px;
    margin-top: 42px;
    margin-bottom: 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .desi {
font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    display: block;
    margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .email {
    font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    display: block;
    margin: 0 auto 5px;
    font-weight: bold;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    display: block;
    margin: 0 auto 5px;
    font-weight: bold;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .rating {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    display: block;
    margin: 0 auto 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item p {
    font-style: italic;
    letter-spacing: .3px;
    line-height: 27px;
    text-align: center
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .testimonial-bottom {
    margin-top: 20px
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .testimonial-bottom span {
    font-size: 16px
}


@media(max-width:600px) {
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author img {
        margin-left: auto;
        margin-right: auto;
        float: none;
    }
 #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author {
        display: block;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .quote-author .quote-footer .name {
        display: block;
        text-align: center;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-item .testimonial-inner {
        padding: 20px;
    }
}	

<?php echo $custom_css;

 ?>
</style>