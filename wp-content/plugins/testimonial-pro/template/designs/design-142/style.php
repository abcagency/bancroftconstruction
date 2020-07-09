<style type="text/css">
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .item{
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .btm_marging
{
 margin-bottom: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote{
  position: absolute;
  color: <?php echo $ts_quote_clr ;?>;
  font-size: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text-box{
  margin: 0 0 30px;
  padding: 35px 20px ;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  -webkit-box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
  display: table;
  position: relative
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
  width: auto;
  border-radius: 50%;
      max-width: 60px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para{
  padding-left: 45px;
  vertical-align: top;
line-height:<?php echo $ts_content_line;?>px !important;
  font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .text-box:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  bottom: -25px;
  left: 69px;
  
border-top: 25px solid rgb(<?php echo $HoverColorRGB; ?>);
<?php if($ts_box_opacity<="9"){ ?>
 border-top: 25px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php }
else { ?>
 border-top:25px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
<?php }?>
  border-right: 25px solid transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author{
  position: relative;
  min-height: 60px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .image{
  position: absolute;
  left: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content{
  padding-left: 100px;
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
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
  margin: 5px 0;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> h4{
  margin: 0;
  text-transform: uppercase;
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .job{
  text-transform: capitalize;
  font-style: italic;
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
}	
<?php echo $custom_css;

 ?>
</style>