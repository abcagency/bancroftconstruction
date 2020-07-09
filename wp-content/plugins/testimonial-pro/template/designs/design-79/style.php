<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style>
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi{
  text-align: center;
  position: relative;
  border: 0;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  padding: 60px 50px;
  margin: 15px;
  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  z-index: 2;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email
{  display: inline-block;
  padding: 0 15px;
  margin:0 0 10px 0;
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
font-weight: 600;
color:<?php echo $ts_email_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
  display: inline-block;
  padding: 0 15px;
  margin:0 0 10px 0;
  word-wrap: break-word;
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
font-weight: 600;
color:<?php echo $ts_web_name_clr;?>;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi img {
  max-width: 75px;
  height: auto;
  margin: 0 auto
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .name {
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
  margin: 10px auto 0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .subheader {
  font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  margin: 20px 0 ;
  font-size: 16px;
  line-height:<?php echo $ts_content_line;?>px !important;
  font-weight: 600;
  display: block;
  z-index: 2;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span.fa {
  color: <?php echo $ts_quote_clr ;?>;
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  font-size: 120px;
  z-index: 1;
  display: block;
  position: absolute;
  top: -10px;
  left: 0;
  right: 0;
  text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text
{
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;	
 z-index: 2;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .descr {
  z-index: 2;
  position: relative;
}
@media (max-width:400px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .testi{

  padding: 20px 10px;}
}

<?php echo $custom_css;

 ?>
</style>