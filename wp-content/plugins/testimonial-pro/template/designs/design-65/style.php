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
}   
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
  position: relative;
  max-width: 600px;
  margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-img-block i {
  background: <?php echo $ts_img_border_clr;?>;
  border-radius: 100%;
  line-height: 49px;
  text-align: center;
  width: 49px;
  height: 49px;
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  transform: translate(0%, -50%);
  -webkit-transform: translate(0%, -50%);
  -moz-transform: translate(0%, -50%);
  -ms-transform: translate(0%, -50%);
  margin: 0 auto;
  color: <?php echo $ts_quote_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .authimg{
        max-width: 296px;
    max-height: 183px;
    -o-object-fit: cover;
      object-fit: cover;
          -o-object-position:  center top;
    object-position:  center top;
    width: 100%;

}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .no-padding {
  padding: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
    font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
  margin: 0 0 10px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 {
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
  display: inline-block;
  line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .designation{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
  display: inline-block;
  line-height: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  margin: 5px 0;
  font-size: 12px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  padding:0 0 10px;
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
}

@media(max-width:600px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .col-xs-6{
    width:100% !important;
  }
}

<?php echo $custom_css;

 ?>

                        </style>