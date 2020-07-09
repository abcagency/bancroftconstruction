<?php 
 if($templates_presets=="filter")
    {
        error_reporting(0);
    ?>
    <div class="portfolioFilter">
    <a href="#" data-filter="*" class="current">All Categories</a>
    <?php
    $all_desig=unserialize(get_post_meta(get_the_ID(),'filter_category_info',true));
    foreach($all_desig as $get_all_des)
    {
    ?>    
    <a href="#" data-filter=".<?php echo $get_all_des['filter_category_isotope'];?>"><?php echo $get_all_des['filter_category'];?></a>
    <?php
    }
    ?>
    </div>


    <div class="wpsm_row portfolioContainer"> 
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
                         $mb_pos = $single_data['filter_category'];
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
            <?php
                $coma=str_replace("_",",", strtolower($mb_pos));
                $under=str_replace(" ","_",$coma);
                $remove_come=str_replace(",", " ", $under);
                ?>
            <div class="<?php echo strtolower($remove_come);?> <?php echo $ts_Layout_Cls;?>">
               <div class="slideshow">
    <?php if($ts_display_image=="yes"){?>
                        <div class="photo">
                            <div class="img-frame">
                                <span class="round">
                                   <img src="<?php echo $img_url;?>" alt=""/>
                                </span>
                            </div>
                        </div>
                        <?php }?>

                        <div class="testimonial-text">
                            <?php if($ts_display_content=="yes"){?>
                            <p class="para"><?php echo $cs_desc;?>  </p>
                                <?php }?>

                            <h3>
                                <?php if($ts_display_name=="yes"){?>     
<?php echo $cs_name;?>
<?php }?>
<?php if($ts_display_position=="yes"){?>
                                <span><?php echo $cs_posi;?></span>
                                <?php }?>
                            </h3>
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
<?php if($ts_display_email=="yes"){?>
                            <p class="email"><?php echo $cs_email;?></p>
                            <?php }?>
                            <?php if($ts_display_website=="yes"){?>
                            <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p>
                            <?php }?>
                        </div>
                    </div> 
             </div>
<?php if($i%$cnrow==0)  
            echo $grid_clear_both;
             $i++;
            }
        }
        ?>
    </div>
    
<script type="text/javascript">

jQuery(window).load(function(){
    var $container = jQuery('#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    jQuery('#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a').click(function(){
        jQuery('#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter .current').removeClass('current');
        jQuery(this).addClass('current');
 
        var selector = jQuery(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});
</script>    
<?php    
}
else
{
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
   <div class="slideshow">
    <?php if($ts_display_image=="yes"){?>
                        <div class="photo">
                            <div class="img-frame">
                                <span class="round">
                                   <img src="<?php echo $img_url;?>" alt=""/>
                                </span>
                            </div>
                        </div>
                        <?php }?>

                        <div class="testimonial-text">
                            <?php if($ts_display_content=="yes"){?>
                            <p class="para"><?php echo $cs_desc;?>  </p>
                                <?php }?>

                            <h3>
                                <?php if($ts_display_name=="yes"){?>     
<?php echo $cs_name;?>
<?php }?>
<?php if($ts_display_position=="yes"){?>
                                <span><?php echo $cs_posi;?></span>
                                <?php }?>
                            </h3>
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
<?php if($ts_display_email=="yes"){?>
                            <p class="email"><?php echo $cs_email;?></p>
                            <?php }?>
                            <?php if($ts_display_website=="yes"){?>
                            <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p>
                            <?php }?>
                        </div>
                    </div>            

</div>
<?php if($i%$cnrow==0)  
echo $grid_clear_both;
$i++;
}
}
}
?>                    