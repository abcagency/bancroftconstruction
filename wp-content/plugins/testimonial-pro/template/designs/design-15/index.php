



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
                        
                        $grid_clear_both="";
                        if($templates_presets=="grid"){$grid_clear_both= "<div style='clear:both'></div>";}
        ?>
            <div class="<?php echo $ts_Layout_Cls;?>">
                <div class="testimonial">
                    <div class="testimonial-item ">
                        <div class="testimonial-details">
                             <?php if($ts_display_content=="yes"){?>
        <p class="description">
            <?php echo $cs_desc;?>
        </p>
          <?php }?>
                            <h4><?php if($ts_display_name=="yes"){?>  <?php echo $cs_name;?><?php }?> 
<?php if($ts_display_position=="yes"){?><span>(<?php echo $cs_posi;?>)</span> <?php }?>
                            </h4>          <div class="icon-holder">
                            <img src="<?php echo wpshopmart_testi_pro_directory_url.'assets/images/icons.png';?>" alt="testimonial icon" class="img-responsive">
                        </div>
                        </div>

                        <div class="testimonial-image">
                             <?php if($ts_display_image=="yes"){?>
                                <img src="<?php echo $cs_photo;?>" class="img-responsive"/>
                                <?php
                            }
                            ?>
                            
                        </div>
                      </div>
                </div>
             </div>
                <?php if($i%$cnrow==0)  
                        echo $grid_clear_both;
             $i++;
            }
        }
            ?>