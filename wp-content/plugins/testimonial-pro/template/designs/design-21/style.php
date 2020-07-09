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
    line-height:<?php echo $ts_content_line;?>px;
}	

#wpsm_testi_pro_row_<?php echo $post_id; ?> .my-title {
    font-family: <?php echo $font_family;?>;
    font-size: 25px;
    margin-bottom: 25px;
    font-weight: 600;
    color: #fff;
    padding-left: 50px;
    margin-top: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-slider {
    margin-bottom: 20px;
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image {
    float: right;
    padding-right: 38px;
    margin-top: 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image::before {
    content: '';
    border-right: 1px solid <?php echo $ts_img_border_clr;?>;
    position: absolute;
    right: 0;
    height: 100px;
    top: 10px;
    bottom: 0;
    left: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image::after {
    content: '';
    border-right: 1px solid <?php echo $ts_img_border_clr;?>;
    position: absolute;
    right: 0;
    height: 100px;
    top: 10px;
    bottom: 0;
    left: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial img {

    width: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .wp-post-image {
	border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .test-right {
    margin-left: 38px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .description {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
    margin-left: 0;
    font-family: 'Lato', sans-serif;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .icon {
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    margin-top: 25px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .author-name {
    float: right;
   font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
    font-style: italic;
    margin-top: -40px;
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

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
         font-weight: 600;
         margin: 0 auto 8px;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
            font-weight: 600;
            margin: 0 auto 8px;
    }
    
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    margin-top: 10px;
    position: absolute;
    top: -95px;
    right: 0;
    margin-top: 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-] {
    color: <?php echo $ts_nav_btn_font_clr; ?>;
    font-size: 20px;
    margin: 5px;
    padding: 6px 7px;
    background: transparent;
    display: inline-block;
    cursor: pointer;
    border-radius: 0;
    border: 2px solid <?php echo $ts_nav_btn_font_clr; ?>;
    width: 45px !important;
    text-align: center;
    height: 45px !important;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-]:hover{
      color: <?php echo $ts_nav_btn_font_hvr_clr; ?>;
       border: 2px solid <?php echo $ts_nav_btn_font_hvr_clr; ?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-dots {
    position: relative;
   text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-dots .owl-dot {
    height: 10px;
    width:10px;
    border-radius:50%;
    background-color: <?php echo $ts_nav_dot_bg_clr; ?>;
    display: inline-block;
    margin-right:5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-dots .owl-dot.active {
    background-color: <?php echo $ts_nav_dot_hvr_clr; ?>;
}
@media (max-width:767px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .test-right {
        margin-left: 0;
        margin-top: 20px;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial img {
        margin: 0 auto;

    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image {
        float: none;
        padding-right: 0;
        margin-top: 5px;
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial p {
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image::before {
        border-right: 0;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .image::after {
        border-right: 0;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .author-name {
        float: none;
        margin-top: 20px;
        text-align: center;
        margin-bottom: 10px;

    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
        position: relative;
        top: 0;
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .my-title {
        text-align: center;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .rating,
      #wpsm_testi_pro_row_<?php echo $post_id; ?> .email,
          #wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
        text-align: center;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-testimonial .icon{
    display: none;
}

}

<?php echo $custom_css;

 ?>
</style>