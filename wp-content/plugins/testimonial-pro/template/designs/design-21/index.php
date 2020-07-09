 <div class="testimonial-section">
        <div class="my-section">
    
<div class="row">

    <div class="col-md-12">
                <div class="testimonial-container">



                    <div id="testimonial-slider<?php echo $post_id; ?>" class="testimonial-slider owl-carousel">



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

    <div class="col-md-4 col-sm-4">
        <?php if($ts_display_image=="yes"){?>
        <div class="image">
            <img width="95" height="95" src="<?php echo $img_url;?>" class="attachment-full size-full wp-post-image" alt="">
        </div>
        <?php }?>
    </div>
    <div class="col-md-8 col-sm-8">
        <div class="test-right">
            <?php if($ts_display_content=="yes"){?>  
            <p class="description"><?php echo $cs_desc;?></p>
                <?php }?>
                <?php if($ts_display_email=="yes"){?>
                <div class="email"><?php echo $cs_email;?></div>
                <?php }?>
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
            <div class="icon">
                <img src="<?php echo wpshopmart_testi_pro_directory_url.'assets/images/quote.png';?>" alt="">
            </div>
            <?php if($ts_display_name=="yes"){?>  
            <h4 class="author-name">-<?php echo $cs_name;?></h4>
            <?php }?>
        </div>
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
            margin: 20,
            responsiveClass: true,
            dots:true,
            items: 1,
            autoplay:true,
            nav: true,
            dots:true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
               
                    nav: true,
                    items:1
                },
                1000: {
                    nav: true,
                    items:1
                }
            }


        });
});   
</script>