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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .box {
    margin-left: 30px;
    color: #343434;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-head {
    font-weight: bold;
    padding-bottom: 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
    display: flex;
    flex-wrap: wrap;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?> {
    width: 30%;
    float: left;
    margin: 0 5px 5px 0;
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?> img {
    width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?>.active {
    border: 5px solid <?php echo $ts_img_border_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_box {
    -webkit-box-shadow: 0px 0px 5px 0px rgba(181, 181, 181, 0.75);
    -moz-box-shadow: 0px 0px 5px 0px rgba(181, 181, 181, 0.75);
    box-shadow: 0px 0px 5px 0px rgba(181, 181, 181, 0.75);
    padding: 15px;
    margin-bottom:5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_head {
   font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
    padding-left: 0;
    position: relative;
    border-bottom: 1px solid <?php echo $ts_img_border_clr;?>;
    padding-bottom: 8px;
    margin-left: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_head::before {
    content: "\f10d";
    color: <?php echo $ts_quote_clr ;?>;
    position: absolute;
    top: 0;
    left: -28px;
    font-family: FontAwesome;
    font-size: 20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    padding: 10px 0;
     font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  margin: 0 auto 8px;
  line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-email {
    font-weight: bold;
    font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-position {
    font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website {
    font-weight: bold;
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    top: 0;
    right: 0;
    width: 50px;
    text-align:right;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next {
    display: inline-block;
    height: 20px !important;
    background: transparent;
    width: 25px !important;
    color:<?php echo $ts_nav_btn_font_clr; ?>;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next:hover {
  background: transparent;
    color:<?php echo $ts_nav_btn_font_hvr_clr; ?>;
}

.mywpsm-container{
    max-width: 1170px;
    margin: 0 auto;
}
<?php echo $custom_css;

 ?>
</style>