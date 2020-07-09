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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .container-fluid {
  width: 94%;
  margin: 0 auto
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item {
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .people-box {
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
  position: relative;
  border: 1px solid #ccc;
  padding: 30px 30px 30px 95px;
  border-radius: 2px;
  overflow: hidden;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .quo.fa {
  position: absolute;
  right:15px;
  bottom: 10px;
  color: <?php echo $ts_quote_clr ;?>;
  font-size:40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .user-img {
  width: 110px;
  height: 110px;
  position: absolute;
  left: 43px;
  z-index:9;
  border: 8px solid <?php echo $ts_img_border_clr;?>;
  border-radius: 100%;
  overflow: hidden;
  box-shadow: 0 5px 9px rgba(0,0,0,.2);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
  width: 100%;
  height: auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .hp-text {
  padding: 30px 0 0;
  padding-left:75px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .people-box:after {
  position: absolute;
  left: 0;
  top: 0;
  width: 95px;
  height: 100%;
  background: <?php echo $ts_name_clr;?>;
  content: "";
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 {
 font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
margin: 10px auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .company {
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .quote {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  font-style: italic;
 line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
 font-size:inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{  
  margin: 15px 0; 
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> p{
  margin: 0
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
font-weight: 500;
margin: 0 auto 2px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
font-weight: 500;
margin: 0 auto 2px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #ccc;
  border-radius: 30px;
  bottom: 0;
  height: 45px;
  left: 0;
  margin: auto;
  position: relative;
  right: 0;
  text-align: center;
  width: 150px;
  padding: 5px 0 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-]{
  background:transparent;
  height: auto !important;
  padding: 0 18px;
  margin: 0;
  opacity: 1;
  font-size: 24px;
  border-radius: 0;
  color: #ccc;
  transition: all .3s ease;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-nav [class*=owl-]:hover{
  background:transparent;
  color: #8f1577

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav .owl-prev {
  border-right: 1px solid #ccc;
  width:50px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav .owl-next {
  width:50px !important;
}

@media (max-width: 767px){
  #wpsm_testi_pro_row_<?php echo $post_id; ?> .people-box {
    padding: 20px;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .people-box:after{
  display: none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .user-img {
  position: relative;
  left: 0;
  margin: 0 auto
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .hp-text{
  padding-left: 10px
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .container-fluid {
  width:100%;
}
}
	
<?php echo $custom_css;

 ?>
</style>