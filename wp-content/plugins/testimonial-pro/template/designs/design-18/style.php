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
#wpsm_testi_pro_row_<?php echo $post_id; ?>{
    position:relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $ts_sec_title_size;?>px;
    color:<?php echo $ts_sec_title_clr ;?>;
    font-weight:<?php echo $ts_sec_title_weight ;?>;
    letter-spacing: unset;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-container{
    position: relative;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    display: -webkit-flex;
    display: flex;
    padding: 5px 10px;
  
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-content {
    padding-left: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-content .description{
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
    margin: 0 0 20px;

}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wrapper-content .description p{
     line-height:<?php echo $ts_content_line;?>px;
    }
#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexagon {
    overflow: hidden;
    visibility: hidden;
    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    transform: rotate(120deg);
    cursor: pointer;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexagon-in1 {
    overflow: hidden;
    width: 100%;
    height: 100%;
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    transform: rotate(-60deg);
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexagon-in2 {
    width: 100%;
    background-position: center center;
    height: 100%;
    background-repeat: no-repeat;
    background-position: 50%;
    visibility: visible;
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    transform: rotate(-60deg);
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .hexagon2 {
    width: 100px;
    height: 200px;
    margin: -40px 0 0 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .profile{
    display: -webkit-flex;
    display: flex;
    justify-content:space-between;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .name {
    font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;   
     margin: 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-stage-outer{
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-stage-outer::after {
content: "";
position: absolute;
height: 300px;
width: 0;
border-right: 2px dashed #fff;
background-color: #13b494;
top: 0;
left: 50%;
transform: translate(-50%,-50%);


}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .position {
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    text-transform: uppercase;
        margin: 0 0 10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating
{
        margin: 0 0 10px;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
   font-size:<?php echo $ts_website_size  ;?>px;
    font-family:'<?php echo $font_family;?>';
    font-weight: 600;
    color:<?php echo $ts_web_name_clr;?>;
        margin: 0 0 5px;
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
        margin: 0 0 10px;
}

@media(max-width:380px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
      
        display: block;
        text-align: center;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .profile {
        display: block;
    }

    #wpsm_testi_pro_row_<?php echo $post_id; ?> .hexagon2 {
        margin: -40px auto 10px;
            width: 80px;
            height: 175px;
    }
      #wpsm_testi_pro_row_<?php echo $post_id; ?>  .img-wrapper {
            overflow: hidden;
            height: 100px;
    }
}

@media(max-width:1000px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?>::after{
        content: none;
    }
    }


<?php echo $custom_css;

 ?>
</style>