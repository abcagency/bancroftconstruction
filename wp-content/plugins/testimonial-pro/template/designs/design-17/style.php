<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .slick-slide {
    outline: 0;
   padding: 35px 0;
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .slick-dots li button {
    padding: 0;
    font-size: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-slide .testi-avtar {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0;
    border-radius: 50%;
    bottom: 0;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-slide .testi-avtar img {
    -o-object-fit: cover;
 object-fit: cover;
    -o-object-position: center center;
 object-position: center center; border:5px solid <?php echo $ts_img_border_clr;?>;
   width: 80px;
    height: 80px;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-center .testi-avtar {
  transform: scale(1.8);
    margin: 0 auto;
    border-radius: 50%;
    bottom: 0;
    z-index: 1;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> #thumb_slider {
    padding: 35px 0 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .description {
    max-width: 660px;
    margin:0 auto 10px;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    text-align: center;
    line-height:<?php echo $ts_content_line;?>px;
    
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .author-name {
    text-align: center;
    text-transform: capitalize;
    margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .author-name strong{
   
       font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    margin:0 auto 8px;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .author-name span{
   
     font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .rating {
    text-align: center;
    margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
    text-align: center;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;
text-align: center;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .boxs {
    color: #fff;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    text-align: center;
     font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
   margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
    text-align: center;
   font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin:0 auto 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 10px;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li {
    //width: 12px;
    display: inline-block;
    //height: 12px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .thumbs-slider {
    max-width: 250px;
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button:before {
    content: "";
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button {
    background-color: <?php echo $ts_nav_dot_bg_clr; ?>;;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    margin: 0 5px;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li.slick-active button {
    background-color: <?php echo $ts_nav_dot_hvr_clr; ?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-arrow {
    position: absolute;
    font-size: 30px;
    top: 60%;
    z-index: 99;
    cursor: pointer;
    color:<?php echo $ts_nav_btn_font_clr; ?>;
    transform: translateY(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-arrow:hover{
    color:<?php echo $ts_nav_btn_font_hvr_clr; ?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-arrow.slick-left {
    left: -50px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-arrow.slick-right {
    right:-50px;
}
 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
    margin-top:10px;
}    
     #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star {
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star-o {
   color:<?php echo $ts_empstar_clr;?>;
}

<?php echo $custom_css;

 ?>
</style>