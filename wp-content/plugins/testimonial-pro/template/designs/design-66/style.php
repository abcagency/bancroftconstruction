<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .item{
    padding-bottom: 0;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial i.fa-quote-left {
    color: <?php echo $ts_quote_clr ;?>;
    position: absolute;
    left: 50px;
    top: 18px;
    font-size: 50px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
    height: 80px;
    width: 80px;
    margin-left: auto;
    border-radius: 50%;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic img {
    height: 80px;
    width: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center center;
    object-position: center center;
    border-radius: 50%;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
	margin: 0 auto;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
	margin: 0 auto;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .name {
    padding-top: 20px;
    text-transform: uppercase;
           	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .head-part .part {
    width: 50%;
    float: left;
    padding: 0 10px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .jobtitle {
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
    text-align: center;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description {
    padding: 10px 0;
    position: relative;
    max-width: 800px;
    text-align: center;
    margin: 0 auto;
    z-index: 0;
   font-size:<?php echo $ts_content_size;?>px;
   font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
   font-weight:<?php echo $ts_content_weight  ;?>;
   line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .description::before {
    content: "\f10d";
    font-family: FontAwesome;
    color: <?php echo $ts_quote_clr ;?>;
    font-size: 30px;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-website {
   font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
        margin: 0 auto 5px;
        font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .author-email {
       font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
        margin: 0 auto 5px;
        font-weight: 600;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin: 0;
    padding: 20px 30px 30px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-next ,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-prev{
    line-height: 1.6;
}
@media(max-width:500px){
    
#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-pic {
    
    margin-left: auto;
    margin-right:auto;
}
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .head-part .part {
    width: 100%;
    float: left;
    padding: 0 10px;
    text-align:center;
}
}

<?php echo $custom_css;

 ?>
</style>