<?php
if($templates_presets=="carousel")
{
    ?>
<div id="wpsm_testi_testimonials_<?php echo $post_id; ?>">
<div class="testimonial-section">
<div id="testimonial_slider<?php echo $post_id; ?>" class="owl-carousel">
<?php
 }
 ?>
                    
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
    <?php if($ts_display_image=="yes"){?>
<div class="img-profile">
    <img src="<?php echo $img_url;?>" alt=""/>
    </div>
    <?php }?>
    <?php if($ts_display_content=="yes"){?>  <p class="description"><?php echo $cs_desc;?> </p>
    <?php }?>
    <?php if($ts_display_name=="yes"){?>     
    <div class="testi_footer"><?php echo $cs_name;?></div>
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



<?php
if($templates_presets=="carousel")
{
    ?>  
                </div>
            
        </div>
    </div>
    <script type="text/javascript">
    jQuery(document).ready(function(){
      var time = 7; // time in seconds

        var $progressBar,
            $bar,
            $elem,
            isPause,
            tick,
            percentTime;

        // Init the carousel
        jQuery('#testimonial_slider<?php echo $post_id; ?>').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            items: 1, animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            onInitialized: progressBar,
            onTranslate: moved,mouseDrag: false,
            onDrag: pauseOnDragging
        });

        // Init progressBar where elem is $("#owl-demo")
        function progressBar() {
            // build progress bar elements
            buildProgressBar();

            // start counting
            start();
        }

        // create div#progressBar and div#bar then prepend to $("#owl-demo")
        function buildProgressBar() {
            $progressBar = jQuery("<div>", {
                id: "progressBar"
            });

            $bar = jQuery("<div>", {
                id: "bar"
            });

            $progressBar.append($bar).prependTo(jQuery("#wpsm_testi_testimonials_<?php echo $post_id; ?>"));
        }

        function start() {
            // reset timer
            percentTime = 0;
            isPause = false;

            // run interval every 0.01 second
            tick = setInterval(interval, 10);
        };

        function interval() {
            if (isPause === false) {
                percentTime += 1 / time;

                $bar.css({
                    width: percentTime + "%"
                });

                // if percentTime is equal or greater than 100
                if (percentTime >= 100) {
                    // slide to next item 
                    jQuery("#testimonial_slider<?php echo $post_id; ?>").trigger("next.owl.carousel");
                    percentTime = 0; // give the carousel at least the animation time ;)
                }
            }
        }

        // pause while dragging 
        function pauseOnDragging() {
            isPause = true;
        }

        // moved callback
        function moved() {
            // clear interval
            clearTimeout(tick);

            // start again
            start();
        }
   
    }); 
    </script>
    <?php
}
?>