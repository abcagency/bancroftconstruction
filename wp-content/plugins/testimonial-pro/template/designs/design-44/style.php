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
} ;
#wpsm_testi_pro_row_<?php echo $post_id; ?> {
    padding: 100px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin-bottom:20px;
    display: -webkit-flex;
    display: flex;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial img{
    display: block;
    max-width: 100%;
}
/*
 * ==== hexagon
 */

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexa,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexa div {
    margin: 0 auto;
    transform-origin: 50% 50%;
    overflow: hidden;
    width: 120px;
    height: 120px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexa {
    width: 100px;
    height: 80px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexa div {
    width: 100%;
    height: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexa {
    transform: rotate(120deg);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hex1 {
    transform: rotate(-60deg);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hex2 {
    transform: rotate(-60deg);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-info .name {
 font-size:<?php echo $ts_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-info .position{
font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
  text-transform: uppercase;
}



#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;  
    font-weight: 600;
    margin: 0 auto 4px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
  font-size:<?php echo $ts_content_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  margin: 0 auto 10px;
  margin: 0 auto 4px;
  line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
    font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    font-weight: 600;
    margin: 0 auto 4px;

}

@media(max-width:380px) {}

@media(max-width:568px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin-bottom:20px;
    display:block;
}
}

<?php echo $custom_css;

 ?>
</style>