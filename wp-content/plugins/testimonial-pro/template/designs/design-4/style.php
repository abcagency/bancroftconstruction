<style type="text/css">
.mywpsm-container{
    max-width: 1170px;
    margin:0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:<?php echo $ts_sec_title_clr ;?>;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
	margin-bottom:30px;
	text-align: center;
    padding-top: 30px;
}	
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
     text-align: center;
     position: relative;
     padding-top: 40px;
     max-width: 770px;
     margin: 0  auto ;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
 line-height:<?php echo $ts_content_line;?>px;
     margin-bottom: 25px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
    letter-spacing: 2px;
    line-height: 1.2;
    margin: 0 0 8px;
font-style: italic;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position {
    font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
margin: 0 0 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
   font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
 margin: 0 0 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
   font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
 margin: 0 0 8px;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
    margin: 0 0 8px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
    display: inline-block;
        transition: all 0.2s ease;
    display: inline-block;
    opacity: 0.6;
    margin: 0 8px;
    position: relative;
    transform: translateY(0);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot img {
    width: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;  
    border-radius: 4px;
    max-width: 75px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active {
    opacity: 1;
    transform: translateY(20px);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot.active img{
    
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