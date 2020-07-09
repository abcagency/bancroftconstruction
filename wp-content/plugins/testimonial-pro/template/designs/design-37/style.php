<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
     text-align: center;
     position: relative;
   /* //padding-top: 50px;
   //  margin-top: 20px; */
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
  text-align: center;
  position:relative;
  font-family:'<?php echo $font_family;?>';
  letter-spacing:2px;
  font-size:<?php echo $ts_sec_title_size;?>px;
  color:<?php echo $ts_sec_title_clr ;?>;
  font-weight:<?php echo $ts_sec_title_weight ;?>;
  margin-bottom:30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_img{
        display: block;
        width: auto;
        float: left;
        max-width: 35%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_con{
    float: right;
    width: 100%;
    max-width: 55%;
    position: relative;
    margin-right: 0;
    text-align: center;
    margin-top: 80px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .name{
       font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
        margin: auto;
        text-align: center;
        padding-bottom: 15px;
        margin-top: 20px;
        margin-bottom: 15px;
        position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .name span {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .name::after {
    content: "";
    position: absolute;
    bottom: 0;
    left:50%;
    background-color: #31d093;
    width: 45px;
    height: 2px;
    border-radius: 2px;
    transform: translateX(-50%);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .email{
     font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin: 0 auto 8px;
font-weight: 600;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
margin: 0 auto 8px;
font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating i.fa-star {
  font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .rating i.fa-star-o {
  font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description{
          text-align: center;
          margin: 0 auto 28px;
          max-width: 600px;
          font-size: 14px;
          margin-top: 17px;
          font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
   line-height:<?php echo $ts_content_line;?>px !important;
 }


          @media(max-width:991px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_con {
    width: 100%;
    max-width: 50%;
  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_img {

    max-width: 50%;
}
          }
               @media(max-width:767px){

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_con {
              width: 100%;
              max-width: 100%;
          }

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_img {
             max-width: 100%;
              width:100%;
          }

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_img img {
              max-width: 350px;
              margin: 0 auto;

          }

          }
 
<?php echo $custom_css;

 ?>         
</style>
