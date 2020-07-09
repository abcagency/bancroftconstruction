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
#wpsm_testi_pro_row_<?php echo $post_id; ?>::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, .6);
    z-index: -1;
}
.testi-thumb.slick-current{
   position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-thumb {
    margin: 5px 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-thumb {
    display: block;
    height: auto;
    border: 1px solid transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-thumb {
    display: block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-thumb img {
    width: 70px;
    height: auto;
    border-radius: 40px;
    filter: opacity(0.5);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .slick-current img {
    filter: opacity(1);
}
.slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testi-thumb:after {
    display: block;
    content: '';
    width: 80px;
    height: 80px;
    position: absolute;
    top: -5px;
    left: -5px;
    border: 2px solid <?php echo $ts_img_border_clr; ?>;
    border-radius: 50%;
    z-index: 100;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .t-wrap{
    position: relative;
    text-align: center;
    margin-top: 100px;
    margin-bottom: 100px;
    color: #fff;
    font-size: 15px
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> span.fa {
    display: inline-block;
    margin-bottom: 30px;
    color: <?php echo $ts_quote_clr ;?>;
    font-size: 28px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .para {
 font-size:<?php echo $ts_content_size;?>px;
 font-family:'<?php echo $font_family;?>';
 color:<?php echo $ts_content_clr;?>;
  font-weight:<?php echo $ts_content_weight  ;?>;
 line-height:<?php echo $ts_content_line;?>px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
	font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
    font-weight: 400; 
    padding: 0 15px;
    display: inline-block;
    margin-bottom: 8px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{   
  font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
    font-weight: 400; 
    padding: 0 15px;
    display: inline-block;
    margin-bottom: 8px;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
    color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;

}
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
    
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name {
    position: relative;
    margin-top: 35px;
    text-transform: uppercase;
  font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
    margin-bottom: 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name::after {

    content: "";
    position: absolute;
    top: -20px;
    left: 50%;
    width: 30px;
    height: 2px;
    background:<?php echo $ts_img_border_clr; ?>;
    margin-left: -15px;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-name span {
    display: block;
    margin: 10px 0;
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>; 
}
.mywpsm-container{
    max-width: 1170px;
    margin:0 auto;
}

<?php echo $custom_css;?>
</style>