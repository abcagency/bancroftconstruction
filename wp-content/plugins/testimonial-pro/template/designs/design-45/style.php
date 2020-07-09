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
	text-align: center;
    margin:40px 15px 15px;
    padding: 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic{
    height: 80px;
    width: 80px;
    margin: 0 auto 20px !important;
    border-radius: 50%;
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic img{
    height: 80px;
    width: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center center;
    object-position: center center;
    border-radius: 50%;
    border:2px solid <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    margin: 0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
  font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
  font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic .name {
        position: absolute;
           background-color: rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    background-color: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    background-color: rgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
       	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
        padding: 5px 15px;
        font-weight: 600;
        border-radius: 6px;
        box-shadow: 1px 1px 1px 1px #0000004a;
           transform: translateX(100%);
        top: 10px;
        white-space: nowrap;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic .name:after {
       content: "";
       display: block;
       position: absolute;
       width: 0;
       height: 0;
       top: 0;
       left: -17px;
       bottom: -10px;
       border-left: 24px solid transparent;
       border-top: 5px solid transparent;
      border-bottom: 10px solid rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    border-bottom: 10px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
   border-bottom: 10px solid vrgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description{
    padding: 10px 0;
    max-width: 750px;
    margin:0 auto;
       font-size:<?php echo $ts_content_size;?>px;
   font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
   font-weight:<?php echo $ts_content_weight  ;?>;
   line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .jobtitle{
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>; 
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-website {
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-email {
       font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin: 0 auto 8px;
}

@media (max-width:620px){
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic .name {
        position: relative;
        transform: translateX(0%);
        top: 10px;
        white-space: nowrap;
}

	#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic .name::after{
    content: "";
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    top: -10px;
    left: 50%;
    bottom: 0;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    border-bottom: 12px solid #fcf7ea;
    transform: translateX(-50%);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic{
    height: auto;
    width: auto;
}#wpsm_testi_pro_row_243 .author-pic img{
    margin:0 auto;
}


}


<?php echo $custom_css;

 ?>
</style>