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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
    width: auto;
    margin: 0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    padding: 0;
    position: relative;
    margin-bottom: 30px;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    margin-top: 10px;
    margin-bottom: 10px;
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
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .job{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
margin-bottom: 3px;
display: block;
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
    margin-bottom: 3px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs .author-pic img{
       border-radius: 50%;
       width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs {
    color: #fff;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
     font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    margin-bottom: 3px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
margin-bottom: 3px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
          font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin-bottom: 3px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot span {
    display: block;
    width: 13px;
    height: 13px;
    margin: 5px 7px;
    filter: Alpha(Opacity=50);
    border: 1px solid #000;
    border-radius: 50px;
    float: left;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    margin-top: 30px;
    display: inline-block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
    width: 100%;
    margin: auto;
    position: absolute;
    bottom: 0;
    left:0;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active span {
    background: #000;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    text-align: center;
    font-size: 20px;
    width: 100%;
   left:0;top:50%;   

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next {
  
    height: 40px;
    color: #fff;
    width: 40px;
    font-size: 50px;
    line-height: 40px;
    position: absolute;
    transition: .3s all;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev {
    left: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next {
    right: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next:hover {
    color: #000;
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