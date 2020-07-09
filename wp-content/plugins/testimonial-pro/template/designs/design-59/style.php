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

#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-area .section-title h2,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-area .section-title p,
#wpsm_testi_pro_row_<?php echo $post_id; ?> .s-testimonial-text p {
    color: #fff;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial {
    padding: 20px 15px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial img {
    float: left;
    margin-right: 40px;
    max-width: 100%;
    width: auto !important;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .feedback-text {
    position: relative;
    border: 1px solid <?php echo $ts_img_border_clr;?>;
    padding: 20px;
    display: grid;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .feedback-text:before {
    content: "";
    width: 0px;
    height: 0px;
    position: absolute;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    <?php switch ($ts_image_bg) {
				case "Color":
				   ?> border-right:15px solid <?php echo $ts_img_border_clr;?>;
				   <?php
					break;
				case "Transparent":
				   ?> border-right:15px solid transparent;
				   <?php
					break;
				case "Image":
					 ?> 
					 
					 <?php
					break;
				}?>
    left: -16px;
    top: 6px;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .feedback-text:after {
    content: "";
    width: 0px;
    height: 0px;
    position: absolute;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
     <?php switch ($ts_image_bg) {
				case "Color":
				   ?> border-right: 15px solid <?php echo $testi_bg_clr;?>;
				   <?php
					break;
				case "Transparent":
				   ?> border-right:15px solid transparent;
				   <?php
					break;
				case "Image":
					 ?> 
				
					 <?php
					break;
				}?>
  
    left: -14px;
    top: 6px;
}


#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star{
    font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_fillstar_clr ;?>;
    margin-bottom: 20px;
    display: inline-block;
                -webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating  .fa-star-o{
    font-size: <?php echo $my_star_size;?>px;
	 margin-bottom: 20px;
    display: inline-block;
    color:<?php echo $ts_empstar_clr;?>;}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial p {
    line-height:<?php echo $ts_content_line;?>px !important;
    margin: 0;
     font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial h4 {
    margin-top: 15px;
    margin-bottom: 5px;
    text-transform: capitalize;
        font-size:<?php echo $ts_name_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_name_clr;?>;
    font-weight:<?php echo $ts_name_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> h4 span {
    font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .desg {
    font-size: 14px;
    line-height: 16px;
}




@media (max-width: 768px) {
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .featured_tes img {
        float: none;
        margin: 0 auto 10px;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .feedback-text {
        display: block;
    }
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .feedback-text:after,
    #wpsm_testi_pro_row_<?php echo $post_id; ?> .single-testimonial .feedback-text:before {
        content: none;
    }
}

<?php echo $custom_css;

 ?>
</style>