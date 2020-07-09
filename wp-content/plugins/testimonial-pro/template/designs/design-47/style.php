<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
        margin-bottom:30px;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> {
 text-align: center;
-webkit-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testi_pro_row_overlay_<?php echo $post_id; ?>{

       position: relative;  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>::before {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    content: '';
    filter: alpha(opacity=70);
    background-color: #38b3b3;
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .item::after {
       content: "";
       position: absolute;
       background-image: url(<?php echo wpshopmart_testi_pro_directory_url.'assets/images/icon-quote.png';?>);
       bottom: 0;
       width: 30px;
       height: 32px;
       left: 50%;
       transform: translateX(-50%);
}
.wpsm_testi_pro_row .item {
    padding-bottom: 45px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description{
        margin: 0;
        font-size:<?php echo $ts_content_size;?>px;
        font-family:'<?php echo $font_family;?>';
        color:<?php echo $ts_content_clr;?>;
       font-weight:<?php echo $ts_content_weight  ;?>;
        position: relative;
        padding-bottom: 35px;
        line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .description::after{
        background: url(<?php echo wpshopmart_testi_pro_directory_url.'assets/images/separate.png';?>) center no-repeat;
        content: "";
        position: absolute;
        bottom: 0;
        left:50%;
        height: 16px;
        width: 100%;
        max-width: 550px;
        transform: translateX(-50%);

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .name{
font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>; 
       padding: 10px 0;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
font-size:<?php echo $ts_email_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_email_clr;?>;
margin-bottom: 10px;
 font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website{
font-size:<?php echo $ts_website_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_web_name_clr;?>;
margin-bottom: 10px;
 font-weight: 600;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .position{
font-size:<?php echo $ts_position_size ;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_position_clr;?>;
font-weight:<?php echo $ts_position_weight ;?>;  
margin-bottom: 10px;
  
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

@media(max-width:600px){
    #wpsm_testi_pro_row_<?php echo $post_id; ?>::after {

bottom: 15px;
}

<?php echo $custom_css;

 ?>
</style>
