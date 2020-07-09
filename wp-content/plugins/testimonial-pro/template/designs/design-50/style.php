<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-box {
    position: relative;
    padding: 35px 20px 0;
    float: left;
    width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-box::before {
        background-color: rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    background-color: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    background-color: rgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
    content: "";
    left: 0;
    right: 0;
    top: 0;
    bottom: 45px;
    display: inline-block;
    position: absolute;
        z-index: -1;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-box .para {
    font-style: italic;
    font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
    line-height:<?php echo $ts_content_line;?>px !important;
    margin-bottom: 35px;
    padding-right: 50px;
    padding-left: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-box {
    background-color: <?php echo $ts_quote_clr;?>;
    <?php if($ts_box_opacity<="9"){ ?>
        opacity: 0.<?php echo $ts_box_opacity; ?>;
        <?php } 
        else
{
    ?>
    opacity: 1;
    <?php
}
         ?>
    float: right;
    padding: 16px 60px 16px 107px;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-box img {
    position: absolute;
    left: 20px;
    top: 16px;
    border-radius: 100%;
    display: inline-block;
    width: auto;
    top: -13px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-box h4 {
 font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
    text-transform: uppercase;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 span {
    display: block;
    font-style: italic;
   font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
    margin-top: 5px;
    word-wrap: break-word;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .authimg{
min-width: 67px;
max-width: 67px;	
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-item img{
    width: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav.disabled+.owl-dots {
    margin-top:10px;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot.active{
    border-color: #ffffff;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	    margin: 0;
   font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
    margin: 0;
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
    margin-top: 10px;
    text-align: center;
    padding-top: 10px;
    border-top: 1px solid <?php echo $ts_img_border_clr;?>;
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


@media (max-width:500px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .author-box img {
        position: relative;
        left: auto;
        top: auto
    }
}	

<?php echo $custom_css;

 ?>
</style>