<div id="wpsm_testi_templates_<?php echo $post_id; ?>">
<div class="testimonial-section">
        
           
        <div id='carousel-custom-thumbs<?php echo $post_id; ?>' class="owl-dots<?php echo $post_id; ?> carousel-thumbs clearfix">
         <?php
foreach($All_data as $single_data)
{
 $cs_photo = $single_data['cs_photo'];
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
            
<?php if($ts_display_image=="yes"){?>
            <div class="owl-dot<?php echo $post_id; ?>">
                <img src="<?php echo $img_url;?>" alt="">
        
            </div>
            <?php }?>
         <?php
   }
   }
?>
           
        </div>

        <div id="testimonial_slider<?php echo $post_id; ?>" class="owl-carousel">
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
  <div class="testimonialss">
    <?php if($ts_display_content=="yes"){?> 
    <p class="description">
    <?php echo $cs_desc;?>
    </p><?php }?>
    <?php if($ts_display_name=="yes"){?>        
    <div class="author-name"><?php echo $cs_name;?></div><?php }?>
   <?php if($ts_display_position=="yes"){?>
    <div class="position">
    <?php echo $cs_posi;?>
    </div>
    <?php }?>                
    <?php if($ts_display_email=="yes"){?>
    <div class="email"><?php echo $cs_email;?></div><?php }?>
    <?php if($ts_display_website=="yes"){?>


   <div class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></div>
   <?php }?>
          <?php if($ts_display_rating=="yes"){ ?>
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
<?php } }
else
{
?>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<?php }?>
</div>
<?php }?>
                
                </div>           
<?php
   }
   }
?>
               
                <!-- end loop-->
        </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function(){
           var owl_testi = jQuery("#testimonial_slider<?php echo $post_id; ?>");
        owl_testi.owlCarousel({
            loop: true,
            margin: 0, animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            responsiveClass: true,
            items: 1,
            autoplay:true,
            nav: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dotsContainer: '#carousel-custom-thumbs<?php echo $post_id; ?>',


        });

        jQuery('#wpsm_testi_templates_<?php echo $post_id; ?> .owl-dot<?php echo $post_id; ?>').click(function () {
            owl_testi.trigger('to.owl.carousel', [jQuery(this).index(), 300]);
        });  
            });
        </script>