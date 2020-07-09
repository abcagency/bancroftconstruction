<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Kalam|Playfair+Display:400,400i,700,700i,900,900i');

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

#wpsm_testi_pro_row_<?php echo $post_id; ?> {
 
    font-family: 'Playfair Display', 'Kalam', cursive;
   
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .designation{
        font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
   
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	margin: 0;
    display: inline-block;
    font-weight: 700;
    padding: 10px;
    font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
    margin: 0;
    display: inline-block;
    font-weight: 700;
    padding: 10px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star {
    font-size: <?php echo $my_star_size;?>px;
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star-o {
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev {
    left: -44px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next {
    right: -44px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0;
    color: rgba(0, 0, 0, 0);
    cursor: pointer;
    display: block;
    font-size: 0;
    height: 48px;
    opacity:0;
    filter: alpha(opacity=0);
    outline: medium none;
    padding: 0;
    position: absolute;
    text-align: center;
    top: 34.6%;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 48px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev:before, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next:before {
    color: <?php echo $ts_nav_btn_font_clr; ?>;
    border: 1px solid <?php echo $ts_nav_btn_font_clr; ?>;
    content: "\f104";
    font-family: fontawesome;
    font-size: 20px;
    height: 48px;
    left: 0;
    line-height: 46px;
    position: absolute;
    top: 0;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 48px;
    border-radius: 50%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-list {
    margin: 0 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-image {
    display: inline-block;
    margin-bottom: 11px;
    outline: medium none;
    display: block;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-wrapper:hover .slick-prev, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-wrapper:hover .slick-next {
    opacity: 1;
    filter: alpha(opacity=100);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> img {
    border-radius: 50%;
    cursor: pointer;
    display: inline-block !important;
    height: 80px;
    width: 80px;
    margin-bottom: 10px;
    margin-top: 36px;
    outline: 0 none;
    background: rgba(205, 205, 205, 0.5);
    border-radius: 100000px;
    padding: 8px;
    transition: .3s all ;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image-carousel .fa {
    display: block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    position: absolute;
    left: 30%;
    margin: 0 0 0 -13px;
    bottom: 15px;
    box-shadow: 0 2px 2px #ccc;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition-duration: 400ms;
    -moz-transition-duration: 400ms;
    -ms-transition-duration: 400ms;
    -o-transition-duration: 400ms;
    transition-duration: 400ms;
    background-color: <?php echo $ts_img_border_clr;?>;
    text-align: center;
    color: <?php echo $ts_quote_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-current img {
    border: 2px solid <?php echo $ts_img_border_clr;?>;
    height: 146px;
    margin-top: 0;
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    width: 146px;
    background: none;
    border-radius: 100000px;
    padding: 8px;
    transition: border-color .3s,background .3s;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text {
    outline: none;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> h2{
    font-family: 'Kalam', 'Playfair Display', sans-serif;
  font-size:<?php echo $ts_name_size;?>px;
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span {
   font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
    display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .text {
    margin-top: 22px;
    line-height:<?php echo $ts_content_line;?>px !important;
     font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev:hover:before, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next:hover:before {
    color: <?php echo $ts_nav_btn_font_hvr_clr; ?>;
    background:<?php echo  $ts_nav_btn_hvr_clr; ?>;
    border-color: <?php echo  $ts_nav_btn_hvr_clr; ?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next:before {
    right: 0;
    content: "\f105";
}
@media (max-width:991px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-prev {
        left: -15px;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-next {
        right: -15px;
    }
}

<?php echo $custom_css;

 ?>
</style>