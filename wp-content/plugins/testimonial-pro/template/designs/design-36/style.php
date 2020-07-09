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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonialss {
     text-align: center;
     position: relative;
     padding-top: 50px;
     margin-top: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonialss::before {
    content: "\f10e";
    font-family: "FontAwesome";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    color: <?php echo $ts_quote_clr ;?>;
    font-size: 34px;
    line-height: 1;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
line-height:<?php echo $ts_content_line;?>px !important;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  margin:0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
   font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
    letter-spacing: 2px;
    line-height: 1.2;
    margin: 0 0 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
   font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    margin: 10px auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    margin: 10px auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots<?php echo $post_id; ?> {
    text-align: center;
    margin-bottom: 20px;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?> {
    display: inline-block;
    transition: all 0.6s ease 0s;
    display: inline-block;
    opacity: 0.5;
    filter: alpha(opacity=50);
    position: relative;
    transform: translateY(0);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?> img {
    width: 100%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?>.active {
    opacity: 1;
    filter: alpha(opacity=100);
    transform: translateY(20px);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .animated {
    -webkit-animation-duration: 1000 ms;
    animation-duration: 1000 ms;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    transition: opacity .15s linear;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-animated-out {
    z-index: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-animated-in {
    z-index: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

<?php echo $custom_css;

 ?>
</style>