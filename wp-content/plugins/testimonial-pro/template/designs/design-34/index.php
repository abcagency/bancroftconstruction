
        <div class="testimonial testi-2 section-padding">
         

                <div class="testi-designation-slider" id="main_slider<?php echo $post_id; ?>">
                    
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
           <div class="item">
                        <div class="content">
                          <?php if($ts_display_content=="yes"){?>                      
                             <p class="description">
                               <?php echo $cs_desc;?> 
                            </p><?php }?>
                            <h4 class="author-name">
                                <?php if($ts_display_name=="yes"){?>        
                                 <?php echo $cs_name;?>
                                <?php }?> 
                                <?php if($ts_display_position=="yes"){?>
                                <small class="position"><?php echo $cs_posi;?></small>
                                 <?php }?>
                            </h4>
                            <?php if($ts_display_email=="yes"){?>
                           <p class="email"><?php echo $cs_email;?></p> <?php }?>
                            <?php if($ts_display_website=="yes"){?>
                           <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p> <?php }?>
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
                <div class="thumbs-slider">
                    <div id="thumb_slider<?php echo $post_id; ?>">
                      
                       
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
            <div class="item">
                            <div class="testi-avtar">
                           <?php if($ts_display_image=="yes"){?>
                <img src="<?php echo $img_url;?>" alt=""/>
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
  

    <script type="text/javascript">
        jQuery(document).ready(function(){
        jQuery('#thumb_slider<?php echo $post_id; ?>').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#main_slider<?php echo $post_id; ?>',
            dots: false,
            arrows: false,
            autoplay: true,
            centerMode: true, infinite: true,
            focusOnSelect: true,
            centerPadding: '5px',
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        jQuery('#main_slider<?php echo $post_id; ?>').slick({
            slidesToShow: 1,
            arrows: false, infinite: true,
            slidesToScroll: 1, prevArrow: "<span class='slick-left'> <i class='fa fa-arrow-left'></i></span>",
            nextArrow: "<span class='slick-right'><i class='fa fa-arrow-right'></i></span>", responsive: [
                {
                    breakpoint: 767,
                    settings: {
                     arrows:false
                    }
                }
            ],
        
            /*fade: true,*/
            cssEase: 'linear',
            dots: true,
            asNavFor: '#thumb_slider<?php echo $post_id; ?>'
        });
    
        });
    </script>