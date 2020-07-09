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
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial {
  position: relative;
  padding: 30px;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  transition: .5s ease;
  margin-bottom: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial:before {
  height: 50px;
  pointer-events: none;
  position: absolute;
  content: '';
  bottom: 0;
  right: 0;
  background: white;
  background: linear-gradient(315deg, #222 45%, #333 50%, #333333 56%, #333 80%);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: width, height;
  transition-property: width, height;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial .quote {
  position: absolute;
  font-size: 20px;
  left: 50%;
  top:30px;
color:<?php echo $ts_quote_clr ;?>;
  transition: .5s ease;
  transform: translateX(-50%);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-foot-part {
  text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm-foot-part .tst-img {
  display: inline-block;
  padding: 15px 5px 0 0;
  max-width:100px;
  vertical-align: top;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .tst-img img {
  max-width: 100%;
  border-radius: 50%;
  display: inline-block;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
  text-transform: uppercase;
  margin-bottom: 3px;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .tst-profile {
display: inline-block;
  vertical-align: top;
  padding-top: 20px;
  padding-left: 5px;
  text-align: left;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .tst-profile .author-position {
  padding:0;
 font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>
  padding-bottom: 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .tst-profile .website {
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .tst-profile .email {
 font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
  margin-top:5px;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-description {
    margin-top: 30px;
    padding: 0;
    text-align: center;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
padding-top: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-description p{
  line-height:<?php echo $ts_content_line;?>px !important;
}
<?php echo $custom_css;

 ?>
</style>