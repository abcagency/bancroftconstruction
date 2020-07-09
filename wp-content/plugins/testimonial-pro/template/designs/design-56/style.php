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

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote {
	margin-bottom: 20px;
     position: relative;
     padding: 30px;
     border: 0;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote:after,
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote:before {
  top: 100%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote:after {
  border-top-color: rgb(<?php echo $HoverColorRGB; ?>);
  <?php if($ts_box_opacity<="9"){ ?>
  border-top-color: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
  else { ?>
  border-top-color: rgba(<?php echo $HoverColorRGB; ?>,1); 
  <?php }?>


  border-width: 15px 10px 10px 20px;
  right: 60px;
  margin-left: -10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote:before {
  border-top-color: rgba( 0, 0, 0, 0.01);
  border-width: 11px;
  left: 65%;
  margin-left: -11px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote span {
 line-height:<?php echo $ts_content_line;?>px !important;
  font-style: italic;
  display: block;
  margin: 10px auto;
  text-indent: 50px;
font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial blockquote span:before {
  content: '\201C';
  font-style: normal;
  font-weight: 700;
  position: absolute;
  font-size: 100px;
  top: 20px;
  left: -55px;
  color: <?php echo $ts_quote_clr;?>;
  text-shadow: 7px 14px 10px rgba(0, 0, 0, 0.1);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial .testi-content {
  text-align: right;
  padding: 10px 90px 20px 20px;
  position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial .testi-thumb {
  display: block;
  width: 55px;
  height: 55px;
  position: absolute;
  top: 0px;
  right: 1px;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5) inset, 0 1px 1px rgba(0, 0, 0, 0.6);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial .testi-author {
  margin: 0;
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial cite {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .wpsm_testimonial cite:hover {
  color: #E5B840;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-nav {
  position: absolute;
  top:0;
  right:0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-next,
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-prev {
  width: 28px !important;
  height: 28px !important;
  opacity: 1;
  line-height: 1;
  border: none;margin-left: 2px;
  border-radius: 0;
  padding: 5px !important;
  -webkit-transition: none;
  -moz-transition: none;
  transition: none;
  text-align: center;
  font-size: 20px;
  background-color: #E5B840;
  display: inline-block;
  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .owl-next:hover,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev:hover {
  background-color: #fff;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .rating{
  font-size: 12px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .email{
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: bold;
    margin-bottom: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: bold;
    margin-bottom: 10px;
}	
#wpsm_testi_pro_row_<?php echo $post_id; ?>.wpsm_testimonial  .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

<?php echo $custom_css;

 ?>
</style>