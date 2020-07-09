
<div class="testimonial-slider" id="testimonial-slider<?php echo $post_id; ?>">
        
    <?php
     $check_evenodd=1;
     foreach($All_data as $single_data)
          {
            $cs_photo = $single_data['cs_photo'];
             $cs_name = $single_data['cs_name'];
             $cs_email = $single_data['cs_email'];
             $cs_webname = $single_data['cs_webname'];
             $cs_posi = $single_data['cs_posi'];
             $cs_website = $single_data['cs_website'];
             $cs_desc = $single_data['cs_desc'];
             $cs_rating = $single_data['cs_rating'];
             $cs_id = $single_data['cs_id'];
             $crop_size = wp_get_attachment_image_src($cs_id,'wpsm_testi_pro_small');
             $cs_status = $single_data['cs_status'];
                if($check_evenodd%2!=0)
            {
          ?>

                <div class="testimonial-slider-wrap">
                    <?php if($ts_display_content=="yes"){?>
                    <p class="description"><?php echo $cs_desc;?></p>
                        <?php }?>
                    <figure>
                        <a class="testimonial-thumb">
                            <?php if($ts_display_image=="yes"){?>
                            <img src="<?php echo $cs_photo;?>" alt=""/>
                            <?php }?>
                        </a>
                        <figcaption>
                             <?php if($ts_display_name=="yes"){?>
                            <h5>
                                <a><?php echo $cs_name;?></a>
                            </h5>
                            <?php }?>
                          <?php if($ts_display_position=="yes"){?>  <span class="designation"><?php echo $cs_posi;?></span><?php }?>
                           
                        </figcaption>
                    </figure>
                </div>
          <?php
            }
            else
            {
           ?>
           <div class="testimonial-slider-wrap">
            <?php if($ts_display_content=="yes"){?>
                    <p class="description"><?php echo $cs_desc;?>
                         <?php }?>
                    <figure>
                        <a class="testimonial-thumb">
                            <?php if($ts_display_image=="yes"){?>
                            <img src="<?php echo $cs_photo;?>" alt=""/>
                            <?php }?>
                        </a>
                        <figcaption>
                            <?php if($ts_display_name=="yes"){?>
                            <h5>
                                <a><?php echo $cs_name;?></a>
                            </h5>
                            <?php }?>
                           <?php if($ts_display_position=="yes"){?>  <span class="designation"><?php echo $cs_posi;?></span><?php }?>
                        </figcaption>
                    </figure>
                </div>
           <?php
            }
            $check_evenodd++;
                 }
                 ?>
           
  
</div>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                 jQuery('#testimonial-slider<?php echo $post_id; ?>').slick({
        dots: false, infinite: true,
        speed: 300,
        slidesToShow: 2,
        arrows:true,
        slidesToScroll: 2,
        autoplay:true,
        accessibility: false, adaptiveHeight: true,
          prevArrow: "<span class='slick-arrow-left'><i class='fa fa-chevron-left'></i></span>",
              nextArrow: "<span class='slick-arrow-right'><i class='fa fa-chevron-right'></i></span>",
               responsive: [{
                       breakpoint: 1024,
                       settings: {
                           slidesToShow: 2,
                           slidesToScroll: 2,
                           infinite: true,
                         
                       }
                   },
                   {
                       breakpoint: 600,
                       settings: {
                           slidesToShow: 1,
                           slidesToScroll: 1,
                           dots:true,
                            arrows: false,
                       }
                   
                   }
                   // You can unslick at a given breakpoint now by adding:
                   // settings: "unslick"
                   // instead of a settings object
               ]
               
    });
            });
        </script>