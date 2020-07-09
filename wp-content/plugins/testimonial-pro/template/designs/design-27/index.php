<!--<div class="testimonial-section">-->

<div class="wpsm_testi_box_carousel_<?php echo $post_id; ?>" id="slick<?php echo $post_id; ?>">
  <?php
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
  ?>
  <div class="testimonial">
  <?php if($ts_display_content=="yes"){?>
    <div class="description">
    <?php echo $cs_desc;?>
   </div>
  <?php }?>
  <?php if($ts_display_rating=="yes"){
  ?>
    <div class="rating">
 <?php
    if($cs_rating>0)
    {
       for($star=1;$star<=$cs_rating;$star++)
        {
        ?>
          <i class="fa fa-star"></i>
       <?php 
        } 
        for($star=1;$star<=5-$cs_rating;$star++)
          {
        ?>
        <i class="fa fa-star-o"></i>
         <?php  
          }  
           }
    else
    {
    ?>
                         
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
      <i class="fa fa-star-o"></i>
      <?php   
     }
     ?>
      </div>
                        
      <?php }?>
      <?php if($ts_display_name=="yes"){?>
      <h5 class="author-name">
      <?php echo $cs_name;?>
      </h5>
      <?php }?>
      <?php if($ts_display_position=="yes"){?>
                        <p class="author-position">
                           <?php echo $cs_posi;?>
                        </p>
                        <?php }?>
                        <?php if($ts_display_email=="yes"){?>
                        <p class="author-email">
                           <?php echo $cs_email;?>
                        </p>
                        <?php }?>
                        <?php if($ts_display_website=="yes"){?>
                         <p class="author-website">
                           <a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a>
                        </p>
                         <?php }?>

                    </div>
                   <?php
                 }
                 ?>
                    
                </div>


                <div class="wpsm_testi_thumb_carousel<?php echo $post_id; ?>">
                   
                         <?php
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
            ?>
                    <div class="item">
                        <div class="thumb">
                          <?php if($ts_display_image=="yes"){?>
                         
                            <img src=" <?php echo $cs_photo;?>" alt="">
                            <?php }?>
                        </div>
                    </div>
                   <?php
                 }
                 ?>
                
                </div>
           
  
  <!--  </div>-->



<script type="text/javascript">
      jQuery(document).ready(function(){
    jQuery('.wpsm_testi_box_carousel_<?php echo $post_id; ?>').slick({
        dots: false, infinite: false,
        speed: 300, arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1, fade: true,autoplay:true,
        accessibility:false,
        asNavFor: '.wpsm_testi_thumb_carousel<?php echo $post_id; ?>'
               
    });

     jQuery('.wpsm_testi_thumb_carousel<?php echo $post_id; ?>').slick({
         dots: false,
         infinite: false,
         speed: 300,
        arrows:false,
         slidesToShow: 1,
         slidesToScroll: 1,
        centerMode: true,
         accessibility: false,
          asNavFor: '.wpsm_testi_box_carousel_<?php echo $post_id; ?>',
           focusOnSelect: true,
           centerMode:true

     });




      //remove active class from all thumbnail slides
      jQuery('.wpsm_testi_thumb_carousel<?php echo $post_id; ?> .slick-slide').removeClass('slick-active');

      //set active class to first thumbnail slides
      jQuery('.wpsm_testi_thumb_carousel<?php echo $post_id; ?> .slick-slide').eq(0).addClass('slick-active');

      // On before slide change match active thumbnail to current slide
     jQuery('.wpsm_testi_box_carousel_<?php echo $post_id; ?>').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
          var mySlideNumber = nextSlide;
         jQuery('.wpsm_testi_thumb_carousel<?php echo $post_id; ?> .slick-slide').removeClass('slick-active');
          jQuery('.wpsm_testi_thumb_carousel<?php echo $post_id; ?> .slick-slide').eq(mySlideNumber).addClass('slick-active');
      });

      //UPDATED 

      jQuery('.wpsm_testi_box_carousel_<?php echo $post_id; ?>').on('afterChange', function (event, slick, currentSlide) {
         jQuery('.wpsm_testi_box_carousel_<?php echo $post_id; ?> .content').hide();
        jQuery('.wpsm_testi_box_carousel_<?php echo $post_id; ?> .content[data-id=' + (currentSlide + 1) + ']').show();
      });

})

    
                </script>