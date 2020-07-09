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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testim-item{
    max-width:550px;
    margin: 0 auto 25px;
    margin-bottom: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-stage-outer{
    margin-bottom: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-item {
    cursor: move;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-pic {
    float: left;
    position: relative;
    width: 245px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-pic img{
    width: 245px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-name {
    position: absolute;
    width: 100%;
    right: -113px;
    top: 113px;
    background: <?php echo $ts_img_border_clr;?>;
    font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-text {
    float: left;
    width: calc(100% - 280px);
    margin-left: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> p {
    padding: 20px 0 5px;
    font-style: italic;
      	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
    margin:0 auto 5px;
    line-height:<?php echo $ts_content_line;?>px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-text p i {
    font-size: 20px;
    margin: 0px 6px;
    color: <?php echo $ts_quote_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	  padding: 0;
     	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
    padding: 0;
    font-size: 15px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .position{
font-style: italic;
  	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
    text-transform: uppercase;
    margin:0 auto 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
    padding: 0;
    margin-top: 10px;
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

@media (min-width: 768px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-name {
    transform: rotate(90deg);
}
}
@media (max-width: 767px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-name {
    top: auto;
    width: 100%;
    right: 0px;
    bottom: 0;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-text {
    width: 100%;
    margin: 0px;
    text-align:center;
}  #wpsm_testi_pro_row_<?php echo $post_id; ?> .client-pic {
    float: none;
    position: relative;
    width: 100%;
    margin: 0 auto;
    max-width: 245px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .client-pic img{
    width: 100%;
}
}

<?php echo $custom_css;

 ?>
</style>