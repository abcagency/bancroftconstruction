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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap p.description,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap figure {
    float: left;
    width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap p.description:before {
    content: '';
    position: absolute;
    left: 70px;
    bottom: -14px;
    border-left: 9px solid transparent;
    border-right: 9px solid transparent;
    border-top: 14px solid #222845;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap p.description {
    background-color: #222845;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap p.description {
font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    padding: 41px 50px 46px 50px;
    margin-bottom: 26px;
   line-height:<?php echo $ts_content_line;?>px !important;
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap figure {
    margin-bottom: 0px;
    padding: 0px 38px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-thumb {
    float: left;
    width: 77px;
    margin: 0px 16px 0px 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider {
    position: relative;
    margin-bottom: 40px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-thumb img {
    border-radius: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap figure figcaption {
    padding: 12px 0px 0px 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap:nth-child(even) {
    margin: 21px 33px 0px -33px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap:nth-child(even) p.description {
    background-color: rgba(185, 150, 99, 0.8);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap:nth-child(even) figure figcaption {
    text-align: right;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap figure figcaption h5 {
    margin-bottom: 0px;
    line-height: 22px;
    font-weight: normal;
    font-style: normal;
             font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .designation {
   font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap figure figcaption a {
    text-decoration: none;
    font-size: 18px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap p:before {
    border-top-color: #222845;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap:nth-child(even) p.description:before {
    border-top-color: #ceb591;
    left: auto;
    right: 70px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap:nth-child(even) .testimonial-thumb {
    float: right;
    margin: 0px 0px 0px 16px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider .slick-arrow {
    font-size: 16px;
    top: 50%;
    position: absolute;
    height: 30px;
    color: <?php echo $ts_nav_btn_font_hvr_clr; ?>;
    width: 30px;
    margin-top: -60px;
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider .slick-arrow:hover {
    color:<?php echo $ts_nav_btn_font_clr; ?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider .slick-arrow.slick-arrow-left {
    left: -50px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider .slick-arrow.slick-arrow-right {
    right: -50px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-arrow {
    position: relative;
    width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev {
    position: absolute;
    left: -20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots {
    margin: 0;
    padding: 0;
    text-align: center;
    width: 100%;
    position: absolute;
    bottom: -20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li {
    display: inline-block;
    height: 10px;
    width: 10px;
    border: 1px solid #000;
    border-radius: 50%;
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button {
    display: none;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li.slick-active {
    background-color: black;
}

@media(max-width:600px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider-wrap:nth-child(even) {
        margin: 0;
    }

}

<?php echo $custom_css;

 ?>
</style>