	<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style type="text/css">
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:<?php echo $ts_sec_title_clr ;?>;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
	    margin-bottom:30px;
    text-align: center;
	padding-left: 15px;
    padding-right: 15px;
}	
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
} 
#wpsm_testi_box_carousel_<?php echo $post_id; ?> 
{
	padding-left: 15px;
    padding-right: 15px;
}  
#wpsm_testi_pro_row_<?php echo $post_id; ?> .my-section {
    background-color: whitesmoke;
    background-size: cover;
    padding: 50px 0;
    position: relative;
    z-index: 0;
       color: #3f3f3f;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 30px ;
    display: -webkit-flex;
    display: flex;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  margin-bottom: 30px;
   ?>


}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .pic-holder {
    margin-right: 20px;
 min-width: 80px
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-item img,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .pic-holder img {
    border-radius: 50%;
    height: 80px;
    width: 80px;
    -o-object-position: center center;
    object-position: center center;
    -o-object-fit: cover;
    object-fit: cover;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
    margin-top:7px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
    margin: 0 auto 5px;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-position {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;    
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
font-stretch: normal;
    font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
    margin-top: 10px;
}

@media (max-width: 400px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
        display: block;
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-item img,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .pic-holder img {
        margin: 10px auto;
    }
}
<?php echo $custom_css;

 ?>
</style>