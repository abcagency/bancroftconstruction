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
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .testimomial{
margin-bottom: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text-holder {
  position: relative;
  margin-bottom: 30px;
  margin-top: 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .text-inner {
  text-align: left;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  padding: 30px;
  box-shadow: 0 0 18px 0 rgba(0, 0, 0, 0.06);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 {
  margin-bottom: 14px;
  color: #333;
  font-size: 18px;
  font-weight: 700;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  line-height:<?php echo $ts_content_line;?>px !important;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  margin: 0;
  margin-bottom: 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text-holder::after {
  position: absolute;
  content: "";
  bottom:-30px;
  left: 0;
  width: 0;
  height: 0;
  border-left: 0 solid transparent;
      border-right: 27px solid rgb(<?php echo $HoverColorRGB; ?>);
    <?php if($ts_box_opacity<="9"){ ?>
    border-right: 27px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    border-right: 27px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
    <?php }?>
  border-bottom: 30px solid transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .bottom {
  display: table;
  width: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .image-holder {
  width: 70px;
  display: table-cell;
  vertical-align: middle;
  margin: 0;
  padding: 0 15px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .authimg {
max-width: 70px;
min-width: 70px;
border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author {
  display: table-cell;
  vertical-align: middle;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h5{
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
  margin: 0;
 margin-bottom: 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span{
  color: #888;margin: 0;
  margin-bottom: 2px;
  display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
  margin-top: 5px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .job{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
  margin: 0;
  margin-bottom: 2px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
  margin: 0
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
<?php echo $custom_css;

 ?>
</style>