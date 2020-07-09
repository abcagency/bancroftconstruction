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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item {
  position: relative;
  margin-bottom: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details {
  position: relative;
  padding: 30px;
  border: 2px solid #ffc000;
  border-radius: 8px;
  margin-bottom: 14px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(2) .testimonial-details {
  border: 2px solid #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(3) .testimonial-details {
  border: 2px solid #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(4) .testimonial-details {
  border: 2px solid #ffc000;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(5) .testimonial-details {
  border: 2px solid #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(6) .testimonial-details {
  border: 2px solid #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details:before {
  font-family: FontAwesome;
  content: "";
  position: absolute;
  top: -5px;
  left: -2px;
  font-size: 22px;
   background-color: <?php echo $testi_bg_clr;?>;
  color: #ffc000;
  line-height: 24px;
  padding-right: 10px;
  padding-bottom: 7px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(2) .testimonial-details:before {
  color: #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(3) .testimonial-details:before {
  color: #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(4) .testimonial-details:before {
  color: #ffc000;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(5) .testimonial-details:before {
  color: #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(6) .testimonial-details:before {
  color: #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details:after {
  font-family: FontAwesome;
  content: "";
  position: absolute;
  bottom: -5px;
  right: -2px;
  font-size: 22px;
  background-color: <?php echo $testi_bg_clr;?>;
  color: #ffc000;
  line-height: 24px;
  padding-left: 10px;
  padding-top: 7px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(2) .testimonial-details:after {
  color: #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(3) .testimonial-details:after {
  color: #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(4) .testimonial-details:after {
  color: #ffc000;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(5) .testimonial-details:after {
  color: #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(6) .testimonial-details:after {
  color: #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details .icon-holder {
  position: absolute;
  bottom: 0px;
  left: 30px;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  width: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details .icon-holder:after{
content: "";
    width: 39px;
    height: 2px;
    top: 0;
    left: 10px;
background-color: <?php echo $testi_bg_clr;?>;
position: absolute;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details p {
  margin-bottom: 5px;
       font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details h4 {
       font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-details h4 span {
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-image {
  height: 80px;
  width: 80px;
  border: 4px solid #ffc000;
  border-radius: 100%;
  overflow: hidden;
  -webkit-transform: translateX(70px);
  transform: translateX(70px);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(2) .testimonial-image {
  border: 4px solid #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(3) .testimonial-image {
  border: 4px solid #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(4) .testimonial-image {
  border: 4px solid #ffc000;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(5) .testimonial-image {
  border: 4px solid #e84b3a;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-item:nth-child(6) .testimonial-image {
  border: 4px solid #fc7f0c;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three {
  background-size: cover;
  background-position: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-item {
  text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-image {
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  display: inline-block;
  margin-bottom: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-details {
  border: none !important;
  text-align: center;
  padding: 0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-details span {
  font-size: 14px;
  font-weight: 400;
  font-style: normal;
  color: #707070;
  display: inline-block;
  margin-bottom: 15px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-details .icon {
  display: block;
  color: #e84b3a;
  font-size: 30px;
  line-height: 50px;
  display: none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-details p {
  max-width: 700px;
  margin: 0 auto;
  line-height: 28px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-details:before {
  display: none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-three .testimonial-details:after {
  display: none;
}
<?php echo $custom_css;

 ?>
</style>