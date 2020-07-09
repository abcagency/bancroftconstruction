<div class="testimonial-section">
        

                <div class="mywpsm-container">
                    <div class="row">
                        <div class="col-md-3 col-sm-5 col-sm-offset-1 col-md-offset-3">
                            <h4 class="wpsm-head">
                                
                            </h4>

                            <div id='carousel-custom-thumbs<?php echo $post_id; ?>' class="owl-dots carousel-thumbs clearfix">
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
                                    <img src="<?php echo $img_url;?>">
                                </div>     
                                <?php }?> 
<?php
   }
   }
?>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5">
                            <h4 class="wpsm-head">
                              
                            </h4>
                            <div class="testimonial_box">

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
    <div class="testimonial">
                                        <div class="box">
                                            <?php if($ts_display_name=="yes"){?> 
                                            <div class="testi_head"><?php echo $cs_name;?></div>
                                            <?php }?>
                                            <?php if($ts_display_content=="yes"){?>
                                            <p class="description">
                                                <?php echo $cs_desc;?>  
                                            </p>
                                            <?php }?>
                                            <?php if($ts_display_position=="yes"){?>
                                            <p class="author-position"><?php echo $cs_posi;?></p>
                                             <?php }?>
                                             <?php if($ts_display_email=="yes"){?>
                                            <p class="author-email"><?php echo $cs_email;?></p>
                                             <?php }?>
                                             <?php if($ts_display_website=="yes"){?>
                                            <p class="author-website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p>
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
                                    </div>
                                            
<?php
   }
   }
?>
                                    
                                    
                                   
                                    
                                    
                                
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
         
        
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
                   var owl_testi = jQuery("#testimonial-slider<?php echo $post_id; ?>");
        owl_testi.owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            items: 1,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dotsContainer: '#carousel-custom-thumbs<?php echo $post_id; ?>',


        });

        jQuery('.owl-dot<?php echo $post_id; ?>').click(function () {
            owl_testi.trigger('to.owl.carousel', [jQuery(this).index(), 300]);
        });
        });
    </script>