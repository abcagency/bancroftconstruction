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
#wpsm_testi_pro_row_<?php echo $post_id; ?>:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: .8;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .sec-title {
    font-size: 50px;
    color: #fff;
    font-weight: 300;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .sec-con{
    color:#fff;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa-angle-left {
  color: #bdbdbd;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa-angle-left:hover {
  color: #fe6c3b;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa-angle-right {
  color: #bdbdbd;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .fa-angle-right:hover {
  color: #fe6c3b;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .sec-title::after {
    content: "\f107";
    position: absolute;
    font-family: FontAwesome;
    bottom: 0px;
    right: 50px;
    color: <?php echo $ts_img_border_clr;?>;
    font-size: 18px;
    line-height: 1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image {
    max-width: 125px;
    margin: 0 auto;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .sec-title::before {
    content: "";
    position: absolute;
    bottom: 8px;
    right: 55px;
    height: 46px;
    width: 2px;
    background-color: #fe6c3b;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .sec-title span {
    display: block;
    font-weight: bold;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image {
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author-image:after {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    border: 1px solid <?php echo $ts_img_border_clr;?>;
    top: 10px;
    left: 10px;
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name {
       font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name small {
    display: block;
       font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    padding-top: 10px;
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name small::after {
    content: "";
    position: absolute;
    height: 1px;
    width: 15px;
    border: 1px solid <?php echo $ts_img_border_clr;?>;;
    bottom: -5px;
    left: 0px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .description {
    padding-top: 15px;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    line-height:<?php echo $ts_content_line;?>px !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
      font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    font-weight: 600;
    margin-bottom: 8px;
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
    font-weight: 600;
    margin-bottom: 8px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
    padding: 5px 0 0 15px;
}















@media (max-width: 767px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .content {
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .author_name small::after {
        content: none;
    }
}


<?php echo $custom_css;

 ?>
</style>