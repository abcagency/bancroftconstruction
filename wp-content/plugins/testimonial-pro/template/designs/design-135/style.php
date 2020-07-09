<style>
<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
	margin-bottom:30px;
  padding: 30px;
  position: relative;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .item:before {
  width: 50px;
  height: 50px;
  pointer-events: none;
  position: absolute;
  content: "";
  bottom: 0;
  right: 0;
  background: linear-gradient(
    315deg,
    <?php
    if($ts_image_bg=="Transparent")
    {
    ?>
    #fff 45%,
    <?php
   }
   if($ts_image_bg=="Color")
   {
   ?>
   <?php echo $testi_bg_clr;?> 45%,
   <?php 
   }
   ?>
    <?php echo $ts_img_border_clr;?> 50%,
    <?php echo $ts_img_border_clr;?> 56%,
    <?php echo $ts_img_border_clr;?> 80%
  );
 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote {
  position: absolute;
  font-size: 30px;
  right: 30px;
  top: 38px;
  color: <?php echo $ts_quote_clr ;?>;
  transition: 0.5s ease;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .authimg {
  width: auto;
  border-radius: 50%;
  max-width: 80px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-box {
  position: absolute;
  left: 0px;
  top: 0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author {
  position: relative;
  padding-left: 100px;
  margin-bottom:10px;
  min-height: 80px;
  padding-top: 6px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
  text-transform: capitalize;
  margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span {
 font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;
  text-transform: capitalize;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
   font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
line-height:<?php echo $ts_content_line;?>px !important;
 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
  margin: 10px 0
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
	 padding-bottom:5px;
  margin: 0;
 font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
  padding-bottom:5px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav [class*=owl-] {
  color: #999999;
  font-size: 20px;
  margin: 0 16px;
  background-color: transparent;
  display: inline-block;
  -webkit-transition: color .3s ease;
  transition: color .3s ease;
  width: 50px !important;
  height: 50px !important;
  padding-top:10px;
  border: 2px solid #5a5a5a;
  border-radius: 0;
  transition: .5s ease;
  float: none;
  vertical-align: middle;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav [class*=owl-]:hover{
  border-color: #48c7ec;
  background-color: transparent;
  color: #48c7ec;
}
@media(min-width:1299px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav .owl-prev{
    left: -94px;
    position: absolute;
  }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav .owl-next{
    right: -94px;
    position: absolute;
  }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav {
    margin-top: 0;
    position: absolute;
    top: 40%;
    width: 100%;
    transform: translateY(-50%)
  }
}
@media (max-width:1299px){
	#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-nav {
    position: relative;
    width: 170px;
   margin: 0 auto 10px;
}
}
@media (max-width:500px){
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .img-box{
	position: relative;
}
	#wpsm_testi_pro_row_<?php echo $post_id; ?> .author{
		padding-left: 0;
		margin:0 auto;
		display: block;
		position: relative;
	}
}
<?php echo $custom_css;

 ?>
</style>