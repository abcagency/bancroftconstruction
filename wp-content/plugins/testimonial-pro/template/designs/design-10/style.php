<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style type="text/css">
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:#000;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
	margin-bottom:30px;
	text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> p{
    margin: 0
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text {
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    position: relative;
    border-radius: 5px;
    padding: 34px 20px 34px 70px;
    overflow: hidden;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text:before {
    content: '';
    width: 104px;
    height: 162px;
    background: <?php echo $ts_img_border_clr;?>;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    position: absolute;
    top: -83px;
    left: -31px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text span {
    position: absolute;
    top: 16px;
    left: 13px;
    padding: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .icon{
    position: absolute;
    top: 14px;
    left: 13px;
    border: 1px solid #9e9e9e;
    color: #9e9e9e;
    height: 29px;
    width: 29px;
    border-radius: 50%;
    text-align: center;
    padding-top: 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  line-height:<?php echo $ts_content_line;?>px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item.center .text {
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item.center .text:before {
    background: <?php echo $ts_img_border_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item.center .para{
    
    color:<?php echo $ts_content_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item.center .icon {
    color: <?php echo $ts_quote_clr ;?>;
    border: 1px solid <?php echo $ts_quote_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item.center .arrow {
    color: rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    color: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    color: rgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item {
    opacity: .4;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item.center {
    opacity:1;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
   margin-top: 10px
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
 font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
    color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .arrow {
    display: block;
    text-align: center;
    font-size:36px;
    color: #f7f7f7;
    margin-top: -20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author {
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author img {
    display: inline-block;
    width: 75px;
    height: 75px;
    border-radius: 50%;
    margin: 10px 0 14px 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-item img {
    display: block;
    width: auto;
    -webkit-transform-style: preserve-3d;
    margin: 0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h2{
   font-size: 40px;
   color: #000;
   margin-bottom:30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h5 {
 font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
padding-top:10px; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h5 span {
  font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots {
		text-align: right;
    position: absolute;
    top: -77px;
    right: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{
    width: 15px;
    height: 15px;
   background-color: transparent !important;
    border: 1px solid <?php echo $ts_nav_dot_bg_clr; ?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot {
	    margin-right: 5px !important;
	height: auto !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 2px;
    display: block;
    -webkit-backface-visibility: visible;
    -webkit-transition: opacity 200ms ease;
    -moz-transition: opacity 200ms ease;
    -ms-transition: opacity 200ms ease;
    -o-transition: opacity 200ms ease;
    transition: opacity 200ms ease;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot.active span, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot:hover span {
    background-color: <?php echo $ts_nav_dot_hvr_clr; ?> !important;
}
<?php echo $custom_css;
 ?>
</style>