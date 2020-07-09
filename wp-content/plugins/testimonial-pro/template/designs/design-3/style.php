<style>
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> {
     z-index: 0;
     position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>::before {
  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-profile{
    overflow: hidden;
    float: left;
    margin-right: 60px;
    background-color: #fff;
    border: 3px solid #ffffff;
    border-color: <?php echo $ts_img_border_clr;?>;
    max-width: 140px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description{
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  line-height:<?php echo $ts_content_line;?>px;
 font-style: italic;
  margin-bottom: 40px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_footer {
    text-align: right;
    vertical-align: bottom;
    margin: 0px;
    line-height: 1;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
    text-align: right;
    font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
font-weight: 400;
margin-top:8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    text-align: right;
    font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
font-weight: 400;
margin-top:8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    text-align: right;margin-top:8px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_footer::before {
        content: '― '
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> #bar {
    width: 0%;
    max-width: 100%;
    height: 4px;
    background: <?php echo $ts_img_border_clr ?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> #progressBar {
    width: 100%;
    background: #EDEDED;
    position: absolute;
    top:0;
    left:0;

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

@media(max-width:600px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-profile{
        float: none;
        margin:0 auto;
    }

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi_footer,#wpsm_testi_pro_row_<?php echo $post_id; ?> .email,#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
        text-align: center;
    }

   

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
        text-align: center;
        color: #eb5656;
    }
}

<?php echo $custom_css;

 ?>
</style>
