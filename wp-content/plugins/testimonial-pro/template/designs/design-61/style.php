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
    position: relative;
    <?php
    if($templates_presets!="carousel")
    {
echo "margin-bottom: 40px;";
    }
    ?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .content {
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    padding: 50px;
    position: absolute;
    width: calc(100% - 190px);
    top: 50%;
    margin-left: 190px;
    transform: translateY(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .content .description {
     font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
    letter-spacing: 1px;
    line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .name{
	font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .position{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
    position: relative;
    height: 100%;
    max-width: 250px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .authpic{
	min-width: 250px;
	max-width: 250px;
	min-height: 331px;
	max-height: 331px;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    font-weight: bold;
    font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    margin: 0 0 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
    font-weight: bold;
    font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin: 0 0 8px;
}
@media(max-width:767px) {


    #wpsm_testi_pro_row_<?php echo $post_id; ?>  .content {
        background-color: #fff;
        padding: 20px;
        position: relative;
        width: 100%;
        top: 0%;
        margin-left: 0px;
        transform: translateY(0%);
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
        position: relative;
        height: 100%;
        max-width: 250px;
        margin: 0 auto -15px;
        z-index: 999;
    }
}	

<?php echo $custom_css;

 ?>
</style>