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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonail {
     <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  padding: 25px;
  margin: 30px 0;
  -webkit-box-shadow: 0 0 40px 0 rgba(41,44,58,.06);
  box-shadow: 0 0 40px 0 rgba(41,44,58,.06);
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonail-info {
  margin-bottom: 25px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
  padding: 0;
  margin: 0;
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
  padding: 0;
  margin: 0;
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .webname a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .webname a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
  margin-top: 10px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  font-style: italic;
  line-height:<?php echo $ts_content_line;?>px !important;
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  padding-bottom: 30px;
  margin-bottom: 20px;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para:after {
  content: "";
  width: 40px;
  position: absolute;
  height: 2px;
  background-color: <?php echo $ts_img_border_clr;?>;
  bottom: 0;
  left: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3{
 font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
  text-transform: uppercase;
  margin: 0
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
  display: block;
  margin-bottom: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonail-image {
  width: 60px;
  height: 60px;
  overflow: hidden;
  position: absolute;
  bottom: -30px;
  border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonail-image img{
  width:100%;
}
<?php echo $custom_css;

 ?>
</style>