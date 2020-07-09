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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-section:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #000;
    opacity: .8;
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-section .testimonial .testimonial-content {
    padding: 40px;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    position: relative;
      font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-section .testimonial .testimonial-content  p{
    margin:0 0 10px 0;
    line-height:<?php echo $ts_content_line;?>px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-avatar {
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-avatar .author-name {
        font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    margin: 0;
    padding-bottom: 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-avatar .position {
   	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
    text-transform: uppercase;
    margin: 0;
   padding-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
    margin-right: 1px;
    margin-left: 1px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating  .fa-star-o{
    margin-right: 1px;
    margin-left: 1px;
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .website {
    font-weight: bold;
    text-align: right;
        font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .website a{
   color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .website a:hover{
 color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .email {
     font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    font-weight: bold;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-slide img {
    width: 100px;
    margin: 0 auto 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots {
    list-style: none;
    width: 100%;
    display: -webkit-flex;
    display: flex;
    padding: 0;
    margin-top: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li {
    flex-grow: 1;
    flex-basis: 0;
    border-bottom: 6px solid rgba(255, 255, 255, 0.3);
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li.slick-active {
    border-bottom: 6px solid #fff;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button {
    background: transparent;
    outline: 0;
    border: 0;
    color:#fff;
    font-weight: bold;
    font-size: 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button:before {
    content: "0";
    font-weight: bold;
    font-size: 20px;    color:#fff;
}
@media (max-width:991px) {
 #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-section .testimonial .testimonial-content{
        margin-top:20px;
    }
}
@media (max-width:767px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .website {
        text-align: left;
    }
   
}
<?php echo $custom_css; ?>
</style>