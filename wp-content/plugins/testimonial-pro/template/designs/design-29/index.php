<?php
if($templates_presets=="carousel")
{
  ?>
        <div class="container">


            <div class="testimonial-slider<?php echo $post_id; ?>">
              <?php
            }
            ?>
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
                <!-- testimonial  -->
                <div class="testimonial item-left">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="testimony-profile">
                                <?php if($ts_display_image=="yes"){?>
                         <img src=" <?php echo $cs_photo;?>" alt="">       
                                     <?php }?>
                              <?php if($ts_display_name=="yes"){?>  <h5 class="author-name"><?php echo $cs_name;?></h5><?php }?>
                               <?php if($ts_display_position=="yes"){?>  <span class="author-position"> <?php echo $cs_posi;?></span><?php }?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimony-text">
                               <?php if($ts_display_content=="yes"){?>
                                 <p class="description"><?php echo $cs_desc;?></p>
                                  <?php }?>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <?php if($ts_display_email=="yes"){?> <p class="email"><?php echo $cs_email;?></p><?php }?>
                                       <?php if($ts_display_website=="yes"){?> <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p><?php }?>
                                    </div>
                                    <div class="col-xs-4">
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
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            else
            {
            ?>
                <!-- testimonial ends  -->
                <!-- testimonial  -->
                <div class="testimonial item-right">
                    <div class="row">
                        <div class="col-md-3 col-md-push-6 col-md-offset-3">
                            <div class="testimony-profile">
                              <?php if($ts_display_image=="yes"){?>
                               <img src=" <?php echo $cs_photo;?>" alt="">
                            <?php }?>
                              <?php if($ts_display_name=="yes"){?>
                               <h5 class="author-name"><?php echo $cs_name;?></h5>
                                 <?php }?>
                              <?php if($ts_display_position=="yes"){?>
                                <span class="author-position"><?php echo $cs_posi;?></span>
                                 <?php }?>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-3">
                            <div class="testimony-text">
                             <?php if($ts_display_content=="yes"){?>
                                <p class="description"><?php echo $cs_desc;?> </p>
                                 <?php }?>
                            <div class="row">
                                <div class="col-xs-8">
                                   <?php if($ts_display_email=="yes"){?> 
                                   <p class="email"><?php echo $cs_email;?></p>
                                 <?php }?>
                                  <?php if($ts_display_website=="yes"){?>  
                                  <p class="website"> <a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p>
                         <?php }?>
                                </div>
                                <div class="col-xs-4">
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
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial ends  -->
                <!-- testimonial  -->
             
                <!-- testimonial ends  -->
<?php
}
$check_evenodd++;
                 }
                 ?>

                 <?php
if($templates_presets=="carousel")
{
  ?>
            </div>

            <div class="testimonial-navs<?php echo $post_id; ?>">

            </div>
        </div>
  
    <script type="text/javascript">
      jQuery('.testimonial-slider<?php echo $post_id; ?>').slick({
        dots: false, infinite: true,
        speed: 300,
        autoplay:true,
        slidesToShow: 2,
        slidesToScroll: 1,
        accessibility:false,
        vertical: true,
        dots:true,
        verticalSwiping:true,
		adaptiveHeight:true,
        appendArrows: jQuery(".testimonial-navs<?php echo $post_id; ?>")
               
    });   
    </script>
    <?php
  }
  ?>