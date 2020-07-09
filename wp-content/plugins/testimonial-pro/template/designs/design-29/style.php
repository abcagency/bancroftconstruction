<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style>
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial{
    margin-top:24px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.item-left {
    margin-left: 12px;
    margin-right: 12px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.item-left .testimony-profile {
    text-align: right;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.testimony-profile img {
    width: 72px;
    height: 72px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center top;
    object-position: center top;
    display: inline-block !important;
    border-radius: 3px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-profile h5 {
    margin-top: 9px;
    margin-bottom: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-name {
    font-style: normal;
    font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-position {
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-profile img {
    width: 72px;
    height: 72px;
    display: inline-block !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-text {
    padding: 24px;
    position: relative;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    min-height: 120px;
    border: none;
    border-left: 6px solid <?php echo $ts_img_border_clr;?>;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);


  
 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-text:before {
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    top: 24px;
    left: -18px;
    border-style: solid;
    border-width: 0 15px 15px 0;
    border-color: transparent <?php echo $ts_img_border_clr;?> transparent transparent;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-text .description {
   line-height:<?php echo $ts_content_line;?>px;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimony-text .rating{
    text-align: right;
  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimony-text .rating i.fa-star {
  font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimony-text .rating i.fa-star-o {
  font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.item-right .testimony-text {
    border: none;
    border-right: 6px solid <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.item-right .testimony-text:before {
    left: auto;
    right: -18px;
    border-width: 15px 15px 0 0;
    border-color: <?php echo $ts_img_border_clr;?> transparent transparent transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-navs<?php echo $post_id; ?> {
      max-width: 110px;
      margin: 20px auto;
      position: relative;
      height: 50px;
text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next {
        color: <?php echo $ts_nav_btn_font_clr; ?>;
        background-color:<?php echo $ts_nav_btn_bg_clr; ?>;
      
        border-color: #161f28;
        font-size: 0;
         font-weight: 500;
         text-align: center;
         text-transform: uppercase;
         vertical-align: middle;
         touch-action: manipulation;
         cursor: pointer;
         background-image: none;
         border: 1px solid transparent;
         white-space: nowrap;
         padding: 11px 15px;
         height: 48px;
         width:48px;
         display: inline-block;
         line-height: 1.7142857143;
         outline: 0;
         border-radius: 3px;
         position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next:hover {
      background-color: <?php echo $ts_nav_btn_hvr_clr; ?>;
      color:<?php echo $ts_nav_btn_font_hvr_clr; ?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev::after {
    content: "\f104";
    font-family: FontAwesome;
    font-size: 20px;
    color: inherit;
    font-size: 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next::after {
    content: "\f105";
    font-family: FontAwesome;
    font-size: 20px;
    color: inherit;
    font-size: 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots{
    list-style: none;
    margin:0;
    padding:10px 0;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li{
    display: inline-block;
    margin-right: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button {
    height: 15px;
    width: 15px;
    font-size: 0;
    border-radius: 50%;
    padding: 0;
    background: <?php echo $ts_nav_dot_bg_clr; ?>;
    box-shadow: none;
    outline: none;
    border: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots .slick-active button{
          background-color:<?php echo $ts_nav_dot_hvr_clr; ?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .email {
 
    font-weight: bold;
        font-size:<?php echo $ts_email_size ;?>px;
     font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .col-md-3 , 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .col-md-6{
      padding-right: 15px;
    padding-left: 15px;
  }
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .website {
  
    font-weight: bold;
     font-size:<?php echo $ts_website_size  ;?>px;
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
@media (min-width: 992px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .col-md-offset-3 {
    margin-left: 25%;
  }
}
@media(max-width:991px){
   #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.item-left .testimony-profile,
   #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-profile {
        text-align: center;
    }
   #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial.item-right .testimony-text,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-text {
        border:0;
        border-top:6px solid #43D3B1;
    }

   #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimony-text:before {
        content: none;
    }
}
@media(max-width:500px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimony-text .col-xs-8,
     #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimony-text .col-xs-4 {
width:100%;
text-align: center;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimony-text .rating {
        text-align: center;
    }
}

<?php echo $custom_css;

 ?>
</style>