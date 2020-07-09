
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

   <div class="item">
                        <div class="item-wrap">
                            <div class="testimonial-wrapper">
                                <div class="testimonial type5 ">
                                    <?php if($ts_display_content=="yes"){?> 
                                    <div class="testimonial-quote">
                                        <blockquote>
                                            <q><?php echo $cs_desc;?>   </q>
                                        </blockquote>
                                    </div>
                                    <?php }?>
                                    <div class="testimonial-author">
                                        <?php if($ts_display_image=="yes"){?>
                                        <div class="a-img">
                                            <img src="<?php echo $img_url;?>" class="attachment-full" alt="">
                                        </div>
                                         <?php }?>
                                        <div class="t-text">
                                            <?php if($ts_display_name=="yes"){?> 
                                            <h3><?php echo $cs_name;?> </h3>
                                             <?php }?>
                                             <?php if($ts_display_position=="yes"){?>
                                            <span>
                                               <?php echo $cs_posi;?>
                                            </span>
                                            <?php }?>
                                            <?php if($ts_display_email=="yes"){?>
                                            <p class="email"><?php echo $cs_email;?></p>
                                            <?php }?>
                                            <?php if($ts_display_website=="yes"){?>
                                            <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a>
</p>
                                            <?php }?>
                                            <div class="custom_rating_stars">
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
                            </div>
                        </div>
                    </div>             


<?php if($i%$cnrow==0)  
echo $grid_clear_both;
$i++;
}
}
?>                
                   
