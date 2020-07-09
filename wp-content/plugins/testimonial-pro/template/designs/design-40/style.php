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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption {
    width: 950px;
    margin: 0 auto;
    max-width: 100%;
    min-height: 280px;
    padding: 40px;
    text-align: center;
    position: relative;
    border-top: 1px solid <?php echo $ts_img_border_clr;?>;
    border-bottom: 1px solid <?php echo $ts_img_border_clr;?>;
    <?php
    if($templates_presets!="carousel")
    {
    ?>
        margin-bottom: 35px;
    <?php
    }
    ?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_author {
    margin-top: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption:before {
    left: 10px;
    width: 1px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption:after {
    right: 10px;
    width: 1px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption:before, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption:after {
    content: '';
    position: absolute;
    top: -10px;
    bottom: -10px;
    background: <?php echo $ts_img_border_clr;?>;
    -webkit-transition: 0.2s ease-in-out;
    -moz-transition: 0.2s ease-in-out;
    -o-transition: 0.2s ease-in-out;
    -ms-transition: 0.2s ease-in-out;
    transition: 0.2s ease-in-out;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption:before {
    left: 10px;
    width: 1px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption-text i {
    color: <?php echo $ts_quote_clr ;?>;
    font-size: 40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption-text h4 {
    line-height:<?php echo $ts_content_line;?>px !important;
    margin-top: 22px;
  	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_author {
    margin-top: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_author h4
{
 display: inline-block;
    margin: 0;
    	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .testimonial_author hr
{
	 display: inline-block;
    margin: 0;
    height: 1px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_author .custom_rating_stars {
    display: inline-block;
    margin: 0;
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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_author hr {
    display: inline-block;
    margin: 0 10px;
    width: 290px;
    vertical-align: middle;
    background: #cccccc;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .position{
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
   text-transform: uppercase;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
   padding:20px;
   margin: 0;
   display: inline-block;
   	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
    font-weight: 600;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
   padding:20px;
   margin: 0;
   display: inline-block;
 	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
@media (max-width:1200px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-caption {
    width:700px;
    padding: 20px 34px;
}
}
@media (max-width: 991px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-theme .owl-nav {
    top: auto;
    position: relative;
    bottom: -10%;
}
}
@media (max-width:768px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial_author hr {
    width: 100px;
    clear: both;
    display: table;
    margin: 10px auto;
}
}

<?php echo $custom_css;

 ?></style>