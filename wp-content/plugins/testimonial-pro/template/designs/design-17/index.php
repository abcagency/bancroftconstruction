<div  id="template<?php echo $post_id;?>">
            <div class="thumbs-slider">
            <div id="thumb_slider<?php echo $post_id;?>">
         <?php
            foreach($All_data as $single_data)
          {
            $cs_photo = $single_data['cs_photo'];
            ?>
             <?php if($ts_display_image=="yes"){?>
                <div class="item">
                    <div class="testi-avtar">
                        <img src="<?php echo $cs_photo;?>" alt=""/>
                    </div>
                </div>
                <?php }?>
           <?php
           }
           ?>    


            </div>
    </div>
            <div class="testi-designation-slider" id="main_slider<?php echo $post_id;?>">
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
                    <div class="content">
                        <?php if($ts_display_content=="yes"){?>
                        <p class="description">
                          <?php echo $cs_desc;?>
                        </p>
                        <?php
                    }
                    ?>
<h4 class="author-name">
     <?php if($ts_display_name=="yes"){?>
    <strong>  <?php echo $cs_name;?> </strong> 
    <?php }?>
    <?php if($ts_display_position=="yes"){?>
    <span class="seprator">||</span>
    <span> <?php echo $cs_posi;?></span>
     <?php }?>
</h4>
                        <?php if($ts_display_email=="yes"){?><p class="email"><?php echo $cs_email;?></p><?php }?>
                         <?php if($ts_display_website=="yes"){?><p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p><?php }?>
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
            ?>
                

           
            </div>
        </div>
   <script type="text/javascript">
   jQuery(document).ready(function(){
    if (jQuery("#template<?php echo $post_id; ?>").length > 0) {
        jQuery('#thumb_slider<?php echo $post_id;?>').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '#main_slider<?php echo $post_id;?>',
            dots: false,
            arrows: true, prevArrow: "<span class='slick-left'> <i class='fa fa-angle-left'></i></span>",
            nextArrow: "<span class='slick-right'><i class='fa fa-angle-right'></i></span>",
            autoplay: true,
            centerMode: true, infinite: true,
            focusOnSelect: true,
            centerPadding: '0px',
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        jQuery('#main_slider<?php echo $post_id;?>').slick({
            slidesToShow: 1,
            arrows: false, infinite: true,
            slidesToScroll: 1, responsive: [
                {
                    breakpoint: 767,
                    settings: {
             
                    }
                }
            ],
        
            /*fade: true,*/
            cssEase: 'linear',
            dots: true,
            asNavFor: '#thumb_slider<?php echo $post_id;?>'
        });
    }

   });    
   </script>     