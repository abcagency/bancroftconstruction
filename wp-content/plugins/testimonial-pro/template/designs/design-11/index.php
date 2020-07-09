<div id="wpsm_testi_pro_row_<?php echo $post_id; ?>">
        <div class="testimonial-section">

                <div id='carousel-custom-thumbs<?php echo $post_id; ?>' class="owl-dots carousel-thumbs clearfix">
                    
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
 if($cs_status==1)
  {
  if($cs_id==0){
 $img_url = $cs_photo;
 }
  else{
  $img_url = $crop_size[0];
  }
  ?>    <?php if($ts_display_image=="yes"){?>
           <div class="owl-dot<?php echo $post_id; ?>">
                        <span class="thumb-overlay"> </span>
                        <img src="<?php echo  $cs_photo;?>" alt="">

                    </div>    
                    <?php }?> 
<?php
   }
   }
?>



                   
                </div>
                <div class="testimonial-container">



<div id="testimonial-slider<?php echo $post_id; ?>" class="owl-carousel">


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
 if($cs_status==1)
  {
  if($cs_id==0){
 $img_url = $cs_photo;
 }
  else{
  $img_url = $crop_size[0];
  }
  ?>
     <div class="wpsm-testimonial">
       <?php if($ts_display_content=="yes"){?> 
    <p class="description"><?php echo $cs_desc;?> </p>
        <?php }?>
    <div class="testi-profile">
        <?php if($ts_display_name=="yes"){?>
        <div class="author-name"><?php echo $cs_name;?></div>
         <?php }?>
         <?php if($ts_display_position=="yes"){?>
        <div class="author-position"><?php echo $cs_posi;?></div>
        <?php }?>
    </div>
</div>       
<?php
   }
   }
?>

                    </div>
                </div>
            </div>
     
    </div>
    <script type="text/javascript">
       jQuery(document).ready(function(){
      jQuery("#testimonial-slider<?php echo $post_id; ?>").owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            autoplay:true,
            items: 1, animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dotsContainer: '#carousel-custom-thumbs<?php echo $post_id; ?>'


        });

        jQuery('.owl-dot<?php echo $post_id; ?>').click(function () {
            jQuery("#testimonial-slider<?php echo $post_id; ?>").trigger('to.owl.carousel', [jQuery(this).index(), 300]);
        });
       }); 
    </script>