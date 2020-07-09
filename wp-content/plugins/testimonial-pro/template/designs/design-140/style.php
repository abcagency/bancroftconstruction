<style>
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> {
    position: relative;
    z-index: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-initialized .slick-slide {
    display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid {
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
    position: relative;
    padding: 20px 15px;
    margin: 0 0px 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid p{
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid .t_thumb {
	width: 100px;
	height: 100px;
    display: inline-block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid .t_details {
    margin-top: 30px;
    font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;    
line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid h4 {
   	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
    margin-top: 20px;
    margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid h6 {
 	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
    margin-top: 0;
    margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-grid.slick-current.slick-center {
    background-color: #ffffff;
    -webkit-box-shadow: 0 5px 50px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 50px 0px rgba(0, 0, 0, 0.1);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots {
    position: absolute;
    bottom: -25px;
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;
    cursor: pointer;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button {
    font-size: 0;
    line-height: 0;
    display: block;
    width: 20px;
    height: 20px;
    padding: 5px;
    cursor: pointer;
    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li.slick-active button:before {
    opacity: .75;
    color: black;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-dots li button:before {
    font-family: 'slick';
    font-size: 34px;
    line-height: 20px;
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•';
    text-align: center;
    opacity: .25;
    color: black;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email
{	
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding: 0;
    margin: 0;
    margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
    padding: 0;
    margin: 0;
    	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
    margin-bottom: 5px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
margin-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    margin-top: 10px;
    margin-bottom: 5px;
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

<?php echo $custom_css;

 ?>
</style>