<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:<?php echo $ts_sec_title_clr ;?>;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
	margin-bottom:30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> {
    position: relative;
    text-align: center;
    z-index: 0;
    text-align: center;   
    overflow: hidden;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .slick-slide {
    outline: 0;
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .slick-dots li button {
    padding: 0;
    font-size: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-slide .testi-avtar {
    position: relative;
    width: 100px;
    height: 100px;
    transform: scale(.8);
    padding: 0px;
    margin: 0 auto;
    opacity: .5;
    bottom: 0;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-slide .testi-avtar img {
    width: 100%;
    position: absolute;
    bottom: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-center .testi-avtar {
    padding: 5px;
    margin: 0 auto;
    transform: scale(1);
    border-radius: 50%;
    opacity: 1;
    bottom: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> #thumb_slider<?php echo $post_id; ?> {
    padding: 35px 0 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .description {
    max-width: 800px;
    font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
    line-height:<?php echo $ts_content_line;?>px !important;
    margin: 0 auto 30px;
    padding: 10px 50px 30px;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .description::after {
    content: "";
    height: 2px;
    width:50px;
    background-color: <?php echo $ts_img_border_clr;?>;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .description::before {
    content: "\f10d";
    color:<?php echo $ts_quote_clr ;?>;
    position: absolute;
    top:0;
    left: 0;
    font-family: FontAwesome;
    font-size: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .author-name {
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
    text-transform: capitalize;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content .author-name small{
    display: block;
    padding-top: 0;
    	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
 	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
    margin: 0 auto 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .email {
  	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
    margin: 0 auto 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots {
    position: relative;
    bottom: 0px;
    width: 100%;
    height: 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li {
    width: 12px;
    display: inline-block;
    height: 12px;
    border-radius: 50%;
    margin-right:5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .thumbs-slider {
    max-width: 700px;
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button:before {
    content: "";
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button {
    background-color: <?php echo $ts_nav_dot_bg_clr; ?>;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    margin: 0 5px;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li.slick-active button {
    background-color: <?php echo $ts_nav_dot_hvr_clr; ?>;
}

.slick-arrow<?php echo $post_id; ?> {
    position: absolute;
    font-size: 25px;
    top: 0%;
    z-index: 99;
    cursor: pointer;
    transform: translateY(-50%);
}

.slick-arrow.slick-left<?php echo $post_id; ?> {
    left: 0;
}

.slick-arrow.slick-right<?php echo $post_id; ?> {
    right: 0;
}

<?php echo $custom_css;

 ?>
</style>