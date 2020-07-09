<div class='<?php echo $tm_wrapper_cls;?>' id='<?php echo $tm_wrapper_id;?>'>
<div id="<?php echo get_the_ID(); ?>" class="row gridder">
<?php 
$inc=1;
foreach($All_data as $single_data)
{
$cs_photo = $single_data['cs_photo'];
$cs_name = $single_data['cs_name'];
$cs_email = $single_data['cs_email'];
$cs_webname = $single_data['cs_webname'];
$cs_posi = $single_data['cs_posi'];
$cs_website = $single_data['cs_website'];
$cs_desc = $single_data['cs_desc'];

$cs_id = $single_data['cs_id'];
$crop_size = wp_get_attachment_image_src($cs_id,'wpsm_team_pro_small3');
if($cs_id==0){
$img_url = $cs_photo;
}
else{
$img_url = $crop_size[0];
}

$fb_url=$single_data['fb_url'];
$tw_url = $single_data['tw_url'];
$yt_url = $single_data['yt_url'];
$gplus_url = $single_data['gplus_url'];
$lkd_url = $single_data['lkd_url'];
$tumb_url=$single_data['tumb_url'];
$ins_url = $single_data['ins_url'];
$pin_url = $single_data['pin_url'];
$sky_url = $single_data['sky_url'];
$red_url = $single_data['red_url'];
$vmo_url=$single_data['vmo_url'];
$be_url = $single_data['be_url'];
$drib_url = $single_data['drib_url'];
$flic_url = $single_data['flic_url'];
$whastapp_url = $single_data['whastapp_url'];
$snap_url=$single_data['snap_url'];
$tele_url = $single_data['tele_url'];
$wechat_url = $single_data['wechat_url'];
$imo_url = $single_data['imo_url'];
$baidoo_url = $single_data['baidoo_url'];
               
$grid_clear_both="";
if($templates_presets=="grid"){$grid_clear_both= "<div style='clear:both'></div>";}
?>      
<div class="<?php echo $tm_Layout_Cls;?> col-lg-3 col-sm-6 col-xs-12 gridder-list" data-griddercontent="#gridder-content-<?php echo get_the_ID() .'-'. $inc;?>">
 <div class="team-item">
    <div class="overlay">
    <?php if ($tm_display_image == "yes")
        { 
        ?>
        <div class="team-avatar">
            <img src="<?php echo $img_url;?>" alt="team">
        </div>
    <?php
        }
        ?>
<?php if ($tm_display_rating == "yes")
                { ?>
                    <ul class="social">
                     <?php
                      //FB LINK
                        if(($fb_url=="") || ($fb_url=="#")) {} else{?>
                        <li>
                         <a href="<?php echo $fb_url;?>" <?php if($tm_rd_link=="yes")
                         {?> target="_blank"<?php }?>>
                        <span class="fa fa-facebook"></span>
                        </a>
                        </li>
                    <?php
                    }
                     ?>

                    <?php
                    //tWITTER LINK
                        if(($tw_url=="") || ($tw_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $tw_url;?>" <?php if($tm_rd_link=="yes")
                         {?> target="_blank"<?php }?>>
                        <span class="fa fa-twitter"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
        
                    <?php
                    //YOUTUBE LINK
                        if(($yt_url=="") || ($yt_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $yt_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-youtube"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
            
                    <?php
                    //G+ LINK
                        if(($gplus_url=="") || ($gplus_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $gplus_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-google"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
       
                    <?php
                    //Linked LINK
                        if(($lkd_url=="") || ($lkd_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $lkd_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-linkedin"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>
         
                    <?php
                    //Tumbler LINK
                        if(($tumb_url=="") || ($tumb_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $tumb_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-tumblr"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>  
                
                    <?php
                    //Instagram LINK
                        if(($ins_url=="") || ($ins_url=="#")) {} else{?>
                        <li>
                         <a href="<?php echo $ins_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-instagram"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>  
        
                <?php
                //Pin LINK
                    if(($pin_url=="") || ($pin_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $pin_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-pinterest-p"></span>
                    </a>
                    </li>
                <?php
                }
                ?> 
        
                <?php
                //Skype LINK
                    if(($sky_url=="") || ($sky_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $sky_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-skype"></span>
                    </a>
                    </li>
                <?php
                }
                ?>

                <?php
                //Reddit LINK
                    if(($red_url=="") || ($red_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $red_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-reddit-alien"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Vmo LINK
                    if(($vmo_url=="") || ($vmo_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $vmo_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-vimeo"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Behance LINK
                    if(($be_url=="") || ($be_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $be_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-behance"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
                
                <?php
                //Dribble LINK
                    if(($drib_url=="") || ($drib_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $drib_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-dribbble"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
         
                <?php
                //Flickr LINK
                    if(($flic_url=="") || ($flic_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $flic_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-flickr"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Whatsapp LINK
                    if(($whastapp_url=="") || ($whastapp_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $whastapp_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-whatsapp"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Snapchat LINK
                    if(($snap_url=="") || ($snap_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $snap_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-snapchat-ghost"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                 //Telegrame LINK
                    if(($tele_url=="") || ($tele_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $tele_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-telegram"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
       
                 <?php
                //Wechat LINK
                     if(($wechat_url=="") || ($wechat_url=="#")) {} else{?>
                    <li>
                     <a href="<?php echo $wechat_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-wechat"></span>
                    </a>
                    </li>
                <?php
                 }
                 ?>
        
                <?php
                //VK LINK
                     if(($imo_url=="") || ($imo_url=="#")) {} else{?>
                     <li>
                     <a href="<?php echo $imo_url;?>" <?php if($tm_rd_link=="yes")
                     {?> target="_blank"<?php }?>>
                     <span class="fa fa-vk"></span>
                     </a>
                     </li>
                <?php
                 }
                ?>
         
                <?php
                //Baidoo LINK
                    if(($baidoo_url=="") || ($baidoo_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $baidoo_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-stack-overflow"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        </ul>
        <?php
          }
        ?>
    </div>
    <div class="team-member">
        <?php if ($tm_display_name == "yes")
            {
            ?>
                <h3>
                <?php 
                if(($tm_pop_style=="modal") || ($tm_pop_style=="slide"))
                {
                ?>
                <a href="#p<?php echo $post_id; ?><?php echo $inc;?>" class="team-name wpsm-popup-trigger<?php echo $post_id; ?>">  

                    <?php echo $cs_name;?></a>
                <?php
                }
                ?>
                <?php 
                if($tm_pop_style=="folding")
                {
                ?>
                <a href="#" class="team-name case-tab<?php echo $post_id; ?>" data-tab="case<?php echo $post_id; ?><?php echo $inc;?>">
                <?php echo $cs_name;?></a>
                <?php
                }
                ?>
                </h3>
        <?php
            }
            ?>
         <?php if ($tm_display_position == "yes")
         { ?>
                <h4 class="team-position"><?php echo $cs_posi;?></h4>
         <?php
         }?>
    </div>
</div> 
                    </div>
<?php if($i%$cnrow==0)  
echo $grid_clear_both;
$i++;
$inc++;
}

?>                    
</div>
<div class="drawer-wrapper"> 
<?php 
$inc=1;
foreach($All_data as $single_data)
{
$cs_photo = $single_data['cs_photo'];
$cs_name = $single_data['cs_name'];
$cs_email = $single_data['cs_email'];
$cs_webname = $single_data['cs_webname'];
$cs_posi = $single_data['cs_posi'];
$cs_website = $single_data['cs_website'];
$cs_desc = $single_data['cs_desc'];
$cs_phone = $single_data['cs_phone'];
$cs_add = $single_data['cs_add'];
$cs_id = $single_data['cs_id'];
$crop_size = wp_get_attachment_image_src($cs_id,'wpsm_team_pro_small3');
if($cs_id==0){
$img_url = $cs_photo;
}
else{
$img_url = $crop_size[0];
}

$fb_url=$single_data['fb_url'];
$tw_url = $single_data['tw_url'];
$yt_url = $single_data['yt_url'];
$gplus_url = $single_data['gplus_url'];
$lkd_url = $single_data['lkd_url'];
$tumb_url=$single_data['tumb_url'];
$ins_url = $single_data['ins_url'];
$pin_url = $single_data['pin_url'];
$sky_url = $single_data['sky_url'];
$red_url = $single_data['red_url'];
$vmo_url=$single_data['vmo_url'];
$be_url = $single_data['be_url'];
$drib_url = $single_data['drib_url'];
$flic_url = $single_data['flic_url'];
$whastapp_url = $single_data['whastapp_url'];
$snap_url=$single_data['snap_url'];
$tele_url = $single_data['tele_url'];
$wechat_url = $single_data['wechat_url'];
$imo_url = $single_data['imo_url'];
$baidoo_url = $single_data['baidoo_url'];
               
$grid_clear_both="";
if($templates_presets=="grid"){$grid_clear_both= "<div style='clear:both'></div>";}
?>
<div id="gridder-content-<?php echo get_the_ID() .'-'. $inc;?>" class="gridder-content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="team-popup-img">
                                     <?php if ($tm_display_image == "yes")
        { 
        ?>
                                    <img src="<?php echo $img_url;?>" alt="team">
                                        <?php
        }
        ?>
                                </div>
                                <ul class="team-popup-contact">
                                    <?php if ($cs_phone != "") { ?>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <span><?php echo $cs_phone;?></span>
                                    </li>
                                    <?php } ?>
                                    <?php if ($cs_email != "") { ?>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <span><?php echo $cs_email;?></span>
                                    </li>
                                    <?php } ?>
                                    <?php if ($cs_add != "") { ?>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                         <span><?php echo $cs_add;?></span>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-sm-8">
                                     <?php if ($tm_display_name == "yes")
            {
            ?>
                                <h2 class="team-popup-name"><?php echo $cs_name;?></h2>
                                        <?php
            }
            ?>
                 <?php if ($tm_display_position == "yes")
         { ?>
                                <h3 class="team-popup-position"><?php echo $cs_posi;?></h3>
                                                                       <?php
            }
            ?>
             <?php if ($tm_display_content == "yes")
         { ?>
                                <div class="team-popup-content">
                                    <p><?php echo $cs_desc; ?></p>
                                </div>
                                 <?php
            }
            ?>
                                <div class="team-popup-social">
                                    <h5>follow me on</h5>
                                    <?php if ($tm_display_rating == "yes")
                { ?>
                    <ul>
                     <?php
                      //FB LINK
                        if(($fb_url=="") || ($fb_url=="#")) {} else{?>
                        <li>
                         <a href="<?php echo $fb_url;?>" <?php if($tm_rd_link=="yes")
                         {?> target="_blank"<?php }?>>
                        <span class="fa fa-facebook"></span>
                        </a>
                        </li>
                    <?php
                    }
                     ?>

                    <?php
                    //tWITTER LINK
                        if(($tw_url=="") || ($tw_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $tw_url;?>" <?php if($tm_rd_link=="yes")
                         {?> target="_blank"<?php }?>>
                        <span class="fa fa-twitter"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
        
                    <?php
                    //YOUTUBE LINK
                        if(($yt_url=="") || ($yt_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $yt_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-youtube"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
            
                    <?php
                    //G+ LINK
                        if(($gplus_url=="") || ($gplus_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $gplus_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-google"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
       
                    <?php
                    //Linked LINK
                        if(($lkd_url=="") || ($lkd_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $lkd_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-linkedin"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>
         
                    <?php
                    //Tumbler LINK
                        if(($tumb_url=="") || ($tumb_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $tumb_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-tumblr"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>  
                
                    <?php
                    //Instagram LINK
                        if(($ins_url=="") || ($ins_url=="#")) {} else{?>
                        <li>
                         <a href="<?php echo $ins_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-instagram"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>  
        
                <?php
                //Pin LINK
                    if(($pin_url=="") || ($pin_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $pin_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-pinterest-p"></span>
                    </a>
                    </li>
                <?php
                }
                ?> 
        
                <?php
                //Skype LINK
                    if(($sky_url=="") || ($sky_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $sky_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-skype"></span>
                    </a>
                    </li>
                <?php
                }
                ?>

                <?php
                //Reddit LINK
                    if(($red_url=="") || ($red_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $red_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-reddit-alien"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Vmo LINK
                    if(($vmo_url=="") || ($vmo_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $vmo_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-vimeo"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Behance LINK
                    if(($be_url=="") || ($be_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $be_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-behance"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
                
                <?php
                //Dribble LINK
                    if(($drib_url=="") || ($drib_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $drib_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-dribbble"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
         
                <?php
                //Flickr LINK
                    if(($flic_url=="") || ($flic_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $flic_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-flickr"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Whatsapp LINK
                    if(($whastapp_url=="") || ($whastapp_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $whastapp_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-whatsapp"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Snapchat LINK
                    if(($snap_url=="") || ($snap_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $snap_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-snapchat-ghost"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                 //Telegrame LINK
                    if(($tele_url=="") || ($tele_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $tele_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-telegram"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
       
                 <?php
                //Wechat LINK
                     if(($wechat_url=="") || ($wechat_url=="#")) {} else{?>
                    <li>
                     <a href="<?php echo $wechat_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-wechat"></span>
                    </a>
                    </li>
                <?php
                 }
                 ?>
        
                <?php
                //VK LINK
                     if(($imo_url=="") || ($imo_url=="#")) {} else{?>
                     <li>
                     <a href="<?php echo $imo_url;?>" <?php if($tm_rd_link=="yes")
                     {?> target="_blank"<?php }?>>
                     <span class="fa fa-vk"></span>
                     </a>
                     </li>
                <?php
                 }
                ?>
         
                <?php
                //Baidoo LINK
                    if(($baidoo_url=="") || ($baidoo_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $baidoo_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-stack-overflow"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        </ul>
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
$inc++;
}

?>
</div>
</div>
<script type="text/javascript">
(function($) {

  $(function() {
    // Call Gridder
    $("#<?php echo get_the_ID(); ?>").gridderExpander({
        scrollOffset: 60,
        scrollTo: "panel", 
        animationSpeed:700,
        animationEasing: "easeInOutExpo",
        showNav: true,    // Show Navigation
        nextText: "<i class='fa fa-angle-right'></i>",   // Next button text
        prevText: "<i class='fa fa-angle-left'></i>",    // Previous button text
        closeText: "",    // Close button text
        onContent: function(object) {
             $(object).find('.wpsm-expanded-content').mCustomScrollbar({
                 theme:"dark",
                 scrollInertia:400
             });
         },
    });
});

})(jQuery);
    
</script>