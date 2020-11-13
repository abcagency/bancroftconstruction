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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
  margin-bottom: 40px;
  padding: 20px;
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .media-left {
  position: relative;
  padding-right: 0;
  display: table-cell;
  vertical-align: top;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .media-left:before {
  content: "";
  border-style: solid;
  border-width: 10px 13px 10px 0;
  border-color: transparent #fff transparent transparent;


      border-color: transparent rgb(<?php echo $HoverColorRGB; ?>) transparent transparent;
    <?php if($ts_box_opacity<="9"){ ?>
    border-color: transparent rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>) transparent transparent;<?php } 
    else { ?>
    border-color: transparent rgba(<?php echo $HoverColorRGB; ?>,1) transparent transparent;
    <?php }?>


  position: absolute;
  right: 0;
  top: 19.2%;
  z-index: 12;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .contents {
  vertical-align: middle;
  padding: 0 30px;
  display: table-cell;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?>  .authimg {
      width: 170px;
  max-width: none !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
  line-height:<?php echo $ts_content_line;?>px;
  letter-spacing: 0.3px;
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h2{
  text-transform: uppercase;
  color: #000;
  padding-bottom:40px;
  font-size: 26px;
  font-weight: 700
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
  
  line-height: 26px;
  letter-spacing: 0.3px;
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
     font-style: italic;
  text-align: right;
  display: block;
  text-transform: capitalize;
  margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 span {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
  text-align: right;
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
	  margin: 0;
  text-align: right;
  font-weight: 400;
  font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
  margin: 0;
  text-align: right;
  font-weight: 400;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
  opacity: 1;
  position: absolute;
  right: 0;
  top: -60px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-] {
  background: <?php echo $ts_nav_btn_bg_clr; ?>;
  width: 33px !important;
  text-align: center !important;
  font-size: 15px;
  padding:0;
  padding-top:7px;
  height: 33px !important;
  color: #fff;
  margin: 5px;
  border-radius: 0;
  -webkit-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}
@media(max-width:500px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item img {
    width: 70px;
    margin:0 auto;
  }#wpsm_testi_pro_row_<?php echo $post_id; ?> .media-left{
    display: block;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .media-left:before{
    display:none;
  }
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
   vertical-align:unset;
    padding: 10px;
    display: block;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .contents {
  display: block;
  padding:5px;
}
}

<?php echo $custom_css;

 ?>
</style>