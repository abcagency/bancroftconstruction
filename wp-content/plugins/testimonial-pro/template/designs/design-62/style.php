<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
            margin-bottom:30px;
    text-align: center;
}
/*#wpsm_testi_pro_row_<?php echo $post_id; ?> .my-section {
    font-family: Roboto;
    //background: url(../images/testimonial-bg.jpg) no-repeat center center;
    background-size: cover;
    padding: 50px 0;
    position: relative;
    z-index: 0;
}
*/
/*#wpsm_testi_pro_row_<?php echo $post_id; ?> .my-section::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background-color: #000;
    opacity: .8;
    top: 0;
    left: 0;
    z-index: -1;
}
*/


#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial i.fa-quote-left {
    color: #e9e6dd;
    position: absolute;
    left: 50px;
    top: 18px;
    font-size: 50px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .head-part {
    text-align: center;
    margin-bottom: 25px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    display: inline-block;
    vertical-align: middle;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic img {
    height: 60px;
    width: 60px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center center;
    object-position: center center;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    margin: 0 auto;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .name {
         font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
    padding-top: 0px;
    display: inline-block;
    margin-left: 10px;
    vertical-align: middle;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .head-part .part {
    width: 50%;
    float: left;
    padding: 0 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .jobtitle {
   	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description {
    padding: 10px 0;
    position: relative;
    max-width: 800px;
    text-align: center;
    line-height:<?php echo $ts_content_line;?>px !important;
    margin: 0 auto;
    z-index: 0;
     font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-email {
      font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    font-weight: 600;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next {
    height: 40px;
    width: 40px;
    position: absolute;
    background: transparent !important;
    top: 0;
    line-height: 40px;
    z-index: 0;
        padding: 3px 15px !important;
    text-align: center;
    font-size: 20px;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev::before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next::before {
    content: "";
    position: absolute;
    height: 100%;
    background-color:<?php echo $ts_nav_btn_bg_clr; ?>;
    width: 100%;
    top: 0;
    color:<?php echo $ts_nav_btn_font_clr; ?>;
    left: 0;
    border-radius: 5px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev:hover::before,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next:hover::before {
    background-color:<?php echo $ts_nav_btn_hvr_clr; ?>;
    color:<?php echo $ts_nav_btn_font_hvr_clr; ?>;
}

<?php echo $custom_css;

 ?>
</style>