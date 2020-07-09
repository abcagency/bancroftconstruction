<style type="text/css">
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	display: block;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-wrapper {
  position: relative;
  margin-bottom: 60px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-quote {
  border-bottom: 0;
  position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-quote {
  padding: 0 0 30px;
  margin: 0 0 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-quote:before {
  position: absolute;
  right: 0;
  width: 89%;
  background: <?php echo $ts_img_border_clr;?>;
  bottom: 0;
  content: "";
  height: 4px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> blockquote {
   font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
  font-style: normal;
  line-height:<?php echo $ts_content_line;?>px !important;
  display: block;
  padding: 0;
  margin: 0;
  position: relative;
  border: 0;
  clear: left;
  padding-left: 65px;
  background: transparent !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> blockquote:before {
  content: "\201C";
  position: absolute;
  left: 0;
  top: 45px;
  text-align: center;
  font-size: 150px;
  font-family: Georgia,serif;
  color: <?php echo $ts_quote_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-quote:after {
  position: absolute;
  left: 0;
  bottom: 0;
  height: 4px;
  width: 40px;
  background: <?php echo $ts_img_border_clr;?>;
  content: "";
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> q::after {
  content: "";
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> q::before {
  content: "";
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-author img {
  border-radius: 50%;
  max-width: 100px;
  float: left;
  margin: 0 20px 0 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> h3 {
  margin-top:15px;
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
  line-height: 23px;
  font-style: normal;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding-right: 20px;
  position: relative;
  display: inline-block;  
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span{
  display: inline-block;
  font-style: italic;
  letter-spacing:1px;
  font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: 600;
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-author{
  position: relative;
  display: table;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .a-img{
  height: 100px;
  margin-top: 50px;
  margin-bottom: 5px;
  display: table-cell;
  vertical-align: middle;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .t-text{
  display: table-cell;
  vertical-align: middle;
}	
<?php echo $custom_css;

 ?>
</style>