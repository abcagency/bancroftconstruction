<div id="wpsm_testi_pro_row_12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-small-image-slider<?php echo $post_id; ?> text-center">
                            <!--run slider for thumb image-->
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
       <div class="testimonial-image">
                                <div class="author-image-carousel">
                                    <img width="300" height="300" src="<?php echo $img_url;?>"  sizes="(max-width: 300px) 85vw, 300px" /> <i class="fa fa-quote-left"></i>
                                </div>
                            </div>   
                            <?php }?>  
<?php
   }
   }
?>
                            
                           <!-- end slider-->
                            
                           
                            
                            
                        </div>
                        <div class="testimonial-small-text-slider<?php echo $post_id; ?> text-center">
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
       <div class="testimonial-text">
        <?php if($ts_display_name=="yes"){?> 
                                <h2><?php echo $cs_name;?></h2> 
                                <?php }?>
                                <?php if($ts_display_position=="yes"){?>
                                <p class="designation"><?php echo $cs_posi;?></p>
                                <?php }?>
                                <?php if($ts_display_email=="yes"){?>
                                <p class="email"><?php echo $cs_email;?></p>
                                <?php }?>
                                <?php if($ts_display_website=="yes"){?>
                                <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p>
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
                                <?php if($ts_display_content=="yes"){?> 
                                <p class="text"><?php echo $cs_desc;?></p>
                            </div> 
                            <?php }?>      
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
    jQuery('.testimonial-small-text-slider<?php echo $post_id; ?>').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay:true,
        draggable: false,
        fade: true,
        asNavFor: '.testimonial-small-image-slider<?php echo $post_id; ?>'
    });
    
      jQuery('.testimonial-small-image-slider<?php echo $post_id; ?>').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.testimonial-small-text-slider<?php echo $post_id; ?>',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: false,
                    slidesToShow: 3,
                    centerPadding: '0px',
                }
            },
            {
                breakpoint: 420,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]
    });    
    });    
    </script>