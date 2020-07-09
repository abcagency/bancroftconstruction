

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
                            <div class="head-part clearfix">
<div class="part">
    <div class="author-pic">
         <?php if($ts_display_image=="yes"){?>             
        <img src="<?php echo $cs_photo;?>" alt="thumb images">
        <?php }?>
    </div>
</div>
<div class="part">
    <?php if($ts_display_name=="yes"){?>        
      <div class="name"><?php echo $cs_name;?></div>
      <?php }?>
      <?php if($ts_display_position=="yes"){?>
       <div class="jobtitle">( <?php echo $cs_posi;?>)</div><?php }?>
</div>
                            </div>
                           

                            <div class="content">
                              <?php if($ts_display_content=="yes"){?>                      
                                <p class="description">
                                    <?php echo $cs_desc;?>
                                </p>
                                <?php }?>
                                <?php if($ts_display_email=="yes"){?>
                                 <p class="author-email"><?php echo $cs_email;?></p> <?php }?>
                                <?php if($ts_display_website=="yes"){?><p class="author-website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p> <?php }?>
<div class="user">
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

                        </div>  

             </div>
                <?php if($i%$cnrow==0)  
                        echo $grid_clear_both;
             $i++;
            }
        }
            ?>                      