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


#wpsm_testi_pro_row_<?php echo $post_id; ?> #testimonial-slider<?php echo $post_id; ?> {
    background: #fff;
    max-width: 920px;
    -moz-box-shadow: 0px 3px 10px #ededed;
    -webkit-box-shadow: 0px 3px 10px #ededed;
    box-shadow: 0px 3px 10px #ededed;
    padding: 30px 20px 30px 100px;
    margin-left: auto;
    top: -20px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> #testimonial-slider<?php echo $post_id; ?>::after {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 40px;
    content: "\f10e";
    font-family: FontAwesome;
    font-size: 40px;
    line-height: 40px;
    color: <?php echo $ts_quote_clr ;?>;
    transform: translateY(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  line-height:<?php echo $ts_content_line;?>px;
  margin: 0;
  width: 80%;
  display: inline-block;
 padding: 0px 20px 0 0;
 border-right: 2px solid #f2f2f2;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-profile {
    display: inline-block;
    width: 19%;
    vertical-align: top;
    text-align: center;
    padding-top: 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
    margin: 0 0 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-position {
    font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
    margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?> {
    margin: 0 30px 0 0;
    display: inline-block;
    width:25%;
    cursor: pointer;
    -webkit-transition: all 300ms linear 0ms;
    -khtml-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;
    position: relative;
    z-index: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-dot<?php echo $post_id; ?>:last-child {
    margin: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-dot<?php echo $post_id; ?> img {
    overflow: hidden;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-dot<?php echo $post_id; ?> img {
    width: 100%;
    background-color: #fff;
    position: relative;
    z-index: 1;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .active.owl-dot<?php echo $post_id; ?> .thumb-overlay {
    height: 100%;
    width: 100%;
    background-color: #000;
    opacity: .8;
    top: 0;
    position: absolute;
    left: 0;
    z-index: 99;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
    position: absolute;
    top: 50px;
    left: -130px;
    width: 100%;
    max-width: 105px;
    transform: translateX(0);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev {
    color: #848484;
    transition: .5s ease;
    display: inline-block;
    border: 1px solid <?php echo $ts_img_border_clr;?>;
    width: 50px !important;
    height: 50px !important;
    border-radius: 50%;
    text-align: center;
    font-size: 30px;
    color: #555;
    line-height: 46px;
    position: absolute;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-next:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-prev:hover {
    color: #47588f;
    border-color: <?php echo $ts_img_border_clr;?>;
    transition: .5s ease;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next i,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev i {
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev {
    left: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next {
    right: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .carousel-thumbs {
    display: -webkit-flex;
    display: flex;
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .animated {
    -webkit-animation-duration: 1000 ms;
    animation-duration: 1000 ms;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-animated-out {
    z-index: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-animated-in {
    z-index: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .fadeOut {
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

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .fadeIn {
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

@media (max-width:1200px) {
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-nav {
        position: relative;
        max-width: 100%;
        text-align: center;
        max-width: 150px;
        margin: 0 auto;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> #testimonial-slider<?php echo $post_id; ?> {
        top: 0;
    }
}

@media(max-width:650px) {
#wpsm_testi_pro_row_<?php echo $post_id; ?>  #testimonial-slider<?php echo $post_id; ?> {
        padding: 100px 10px 10px;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?>  #testimonial-slider<?php echo $post_id; ?>::after {
        top: 40px;
        left: 50%;
        transform: translateX(-50%);
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
        display: block;
        border: 0;
        width: 100%;
        text-align: center;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .testi-profile {
        display: block;
        width: 100%;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?>{
        margin:0 0 0 0;
    }
}

<?php echo $custom_css;

 ?>
</style>