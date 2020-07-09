<style type="text/css">
#wpsm_team_shortcode
{
        margin-bottom: 20px;
}  
.wpsm_team_effects
{
     background-color: #1f2bbf !important;   
}  
</style>
<div class="wpsm_site_sidebar_widget_title" id="wpsm_team_shortcode">
        <h4>Add Shortcode</h4>
    </div>        
  <input readonly="readonly" class="form-control" type="text" value="<?php echo "[WPSM_TEAMPRO id=".get_the_ID()."]"; ?>">
        <br/>
<?php if( ! defined( 'ABSPATH' )) exit;?>
    <?php
      
    $i=0;
    $All_data = unserialize(get_post_meta( $post->ID, 'wpsm_team_pro_data', true));
    $TotalCount =  get_post_meta( $post->ID, 'wpsm_team_pro_count', true );
    $wpsm_team_pro_section_title =  get_post_meta( $post->ID, 'wpsm_team_pro_section_title', true );
  $drp_des=unserialize(get_post_meta(get_the_ID(),'filter_category_info',true));
    ?>
    <input type="hidden" name="team_pro_save_data_action" value="team_pro_save_data_action" />
    <div style=" overflow: hidden;padding: 10px;">
    <div class="wpsm_site_sidebar_widget_title">
        <h4>Add TeamBuilder</h2>
    </div>
    <div class="col-sm-12 wpsm-team-custom-title">
   <input type="text" name="Team_pro_section_name" placeholder="Enter Your Team Section name" style="padding: 10px;width: 100%;" value="<?php echo $wpsm_team_pro_section_title;?>" />
    </div>
    <div id="wpsm-team">
        <div class="wpsm-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                    <?php
                    //When $totalcount exist into database
                    if($TotalCount)
                    {
                    ?>
                    <ul id="wpsm-team-list" class="wpsm-nav ui-sortable">
                        <?php
                        $i=0;
                         foreach($All_data as $single_data)
                        {
                        $cs_name = $single_data['cs_name'];
                        ?>    
                        <li onclick="show_team_box(<?php echo $i;?>)" class="wpsm-nav-item" id="wpsm_team_list_<?php echo $i;?>">
                        <input type="hidden" name="team_position[]" value="<?php echo $i; ?>" />
                        <div class="wpsm-flexbox">
                        <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                            <i class="wpsm-js-handle wpsm-icon wpsm-icon-draghandle wpsm-margin-right-sm wpsm-cursor-move ui-sortable-handle" title="Reorder"></i>
                        </div>
                        <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                            <div class="wpsm-thumb wpsm-thumb-sm wpsm-margin-right-lg">
                            </div>
                        </div>
                        <div class="wpsm-flex-cell wpsm-vertical-middle" id="wpsm_list_name<?php echo $i;?>">
                            <?php echo $cs_name;?>
                        </div>
                        <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                            <a  href="#" id="<?php echo $i;?>" class="glyphicon glyphicon-trash text-danger wpsm-js-delete" title="Delete"></a>
                        </div>
                        </div>
                        </li>
                         <?php
                         $i++;
                         }
                         ?>   
                           </ul>
                          <?php  
                         
                        }
                        else
                        {
                        ?>
                        <ul id="wpsm-team-list" class="wpsm-nav ui-sortable">
                        <?php
                        for($i=0;$i<3;$i++)
                        {
                        ?>    
                        <li onclick="show_team_box(<?php echo $i;?>)" class="wpsm-nav-item" id="wpsm_team_list_<?php echo $i;?>">
                        <input type="hidden" name="team_position[]" value="<?php echo $i; ?>" />
                        <div class="wpsm-flexbox">
                            <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                                <i class="wpsm-js-handle wpsm-icon wpsm-icon-draghandle wpsm-margin-right-sm wpsm-cursor-move ui-sortable-handle" title="Reorder"></i>
                            </div>
                           <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                                <div class="wpsm-thumb wpsm-thumb-sm wpsm-margin-right-lg">
                                </div>
                           </div>
                            <div class="wpsm-flex-cell wpsm-vertical-middle" id="wpsm_list_name<?php echo $i;?>">Team Member</div>
                            <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                                <a href="#" id="<?php echo $i;?>" class="glyphicon glyphicon-trash text-danger wpsm-js-delete" title="Delete"></a>
                            </div>
                                </div>
                            </li>
                         <?php
                         }
                         ?>   
                        </ul>
                        <?php
                           }
                         ?>
                        <div class="form-group wpsm_add_team_button_class">
                            <button id="wpsm-team-member-add" type="button" class="btn btn-xlg btn-block btn-success-outline" data-original-title=""
                                title="">
                                <i class="dashicons dashicons-plus-alt"></i>
                                New Team Member </button>

                            <div class="popover-container">
                                <div id="myForm" class="hide">
                                    <form id="popForm" method="get">
                                        <div>
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control form-control-custom input-md">
                                            <hr>
                                            <div class="text-right">
                                                <a onclick="wpsm_add_team()" class="btn btn-success">
                                                    Save </a>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="md-card">
                            <div class="md-card-header">
                                <div class="card-text">
                                    <h4 class="title">All Settings
                                        <span class="glyphicon glyphicon-cog"></span>
                                    </h4>
                                    <p class="category">Find All Settings related to Team</p>
                                </div>
                            </div>
                            <div class="md-card-content">
                                    <div class="row"><div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn" id="design-toggle">
                                                    Color Setting
                                                    <i class="glyphicon glyphicon-picture"></i>
                                                </button>
                                       </div>
                                       <div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn" id="social-toggle">
                                                   Social
                                                    <i class="glyphicon glyphicon-asterisk"></i>
                                                </button>
                                       </div></div> 
                                       <div class="row"><div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn" id="fontset-toggle">
                                           Font Size and Style
                                                    <i class="glyphicon glyphicon-bookmark"></i>
                                                </button>
                                       </div><div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn" id="displayset-toggle">
                                                     Display Settings
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </button>
                                       </div>
                                       <div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn" id="layoutset-toggle">
                                                     Layout Settings
                                                    <i class="glyphicon glyphicon-th"></i>
                                                </button>
                                       </div>
                                       <div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn wpsm_team_effects" id="carousel-toggle">
                                                     Carousel Settings
                                                    <i class="glyphicon glyphicon-th"></i>
                                                </button>
                                       </div>
                                       <div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn wpsm_team_effects" id="background-toggle">
                                                     Popup Settings
                                                    <i class="glyphicon glyphicon-th"></i>
                                                </button>
                                       </div>
                                       <div class="col-xs-12">
                                            <button type="button" class="btn orange side-toggle-btn wpsm_team_effects" id="filter-toggle">
                                                   Filter Setting
                                                    <i class="glyphicon glyphicon-th"></i>
                                                </button>
                                       </div>
                                   </div>

                            </div>
                        </div>
                        
                    </div>
                    <?php
                    if($TotalCount) 
                    {
                    $j=0;
                    foreach($All_data as $single_data) { 

                         $cs_photo = $single_data['cs_photo'];
                         $cs_id = $single_data['cs_id'];
                         $cs_name = $single_data['cs_name'];
                         $cs_email = $single_data['cs_email'];
                         $cs_webname = $single_data['cs_webname'];
                         $cs_posi = $single_data['cs_posi'];
                         $cs_website = $single_data['cs_website'];
                         $cs_phone = $single_data['cs_phone'];
                         $cs_desc = $single_data['cs_desc'];
                         $cs_add = $single_data['cs_add'];
                         $fb_url = $single_data['fb_url'];
                         $tw_url = $single_data['tw_url'];
                         $yt_url = $single_data['yt_url'];
                         $gplus_url = $single_data['gplus_url'];
                         $lkd_url = $single_data['lkd_url'];
                         $tumb_url = $single_data['tumb_url'];
                         $ins_url = $single_data['ins_url'];
                         $pin_url = $single_data['pin_url'];
                         $sky_url = $single_data['sky_url'];
                         $red_url = $single_data['red_url'];
                         $vmo_url = $single_data['vmo_url'];
                         $be_url = $single_data['be_url'];
                         $drib_url = $single_data['drib_url'];
                         $flic_url = $single_data['flic_url'];
                         $whastapp_url = $single_data['whastapp_url'];
                         $snap_url = $single_data['snap_url'];
                         $tele_url = $single_data['tele_url'];
                         $wechat_url = $single_data['wechat_url'];
                         $imo_url = $single_data['imo_url'];
                         $baidoo_url = $single_data['baidoo_url'];
                         $cs_desc = $single_data['cs_desc'];   
                         $cs_fcategory=$single_data['filter_category']; ?>
                    <div  class="col-sm-8 wpsm_add_team" <?php if($j==0) { } else { ?>style="display:none;"<?php } ?> >
                        <div id="wpsm_team_info_container_<?php echo $j;?>" class="panel panel-default wpsm-main wpsm_add_team_hide">
                            <div class="panel-body">
                                <div class="wpsm-flexbox">
                                    <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">
                                        <img class="pro-pic-wrapper"src="<?php echo $cs_photo;?>" alt="">
                                            <input style="color:#ffffff;" type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload btn-block"  onclick="wpsm_media_upload(this)"/>
                            <input style="display:block;width:100%" type="hidden"  name="cs_photo[]" class="wpsm_tm_label_text"  value="<?php echo $cs_photo; ?>"  readonly="readonly" placeholder="No Media Selected" />
                            <input style="display:block;width:100%" type="hidden"  name="cs_id[]" class="wpsm_tm_label_text"  value="<?php echo $cs_id;?>"  readonly="readonly" placeholder="No Media Selected" />                                            
                                    </div>
                                    <div class="wpsm-flex-cell wpsm-vertical-top">
                                        <h3 id="display_wpsm_team_name<?php echo $j;?>"><?php echo $cs_name;?></h3>
                                    </div>
                                </div>                            
                                <ul class="nav nav-tabs nav-justified clearfix wpsm-nav-justified">
                                    <li class="active">
                                        <a id="wpsm-details-tab" href="#details<?php echo $j;?>" data-toggle="tab" aria-expanded="true">
                                            <i class="glyphicon glyphicon-info-sign"></i>
                                            <span class="wpsm-nav-tabs-title">Details</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a id="wpsm-social-tab" href="#socialtab<?php echo $j;?>" data-toggle="tab" aria-expanded="false">
                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                            <span class="wpsm-nav-tabs-title">Social</span>
                                        </a>
                                    </li>
                                     <li class="wpsm_filter_view" style="<?php if($templates_presets=='filter'){echo  "display:none";}?> ">
                                        <a id="wpsm-social-tab" href="#filterstab<?php echo $j;?>" data-toggle="tab" aria-expanded="false">
                                            <i class="glyphicon glyphicon-search"></i>
                                            <span class="wpsm-nav-tabs-title">Filter Category</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="details<?php echo $j;?>">
                                        <div id="wpsm-details-container">
                                            <div class="form-group">
                                                <label for="wpsm-full-name">Full name</label>
                                                <input type="text" class="form-control wpsm_team_member_fullname" id="wpsmfullname_<?php echo $j;?>" name="cs_name[]" value="<?php echo $cs_name;?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-email">Email</label>
                                                        <input class="form-control" id="wpsm-email" name="cs_email[]" value="<?php echo $cs_email;?>" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-phone">Phone</label>
                                                        <input class="form-control" id="wpsm-phone" name="cs_phone[]" value="<?php echo $cs_phone;?>" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-email">Website ( If available in design demo )</label>
                                                        <input class="form-control" id="wpsm-website" name="cs_webname[]" value="<?php echo $cs_webname;?>" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-phone">Website URL ( If available in design demo )</label>
                                                        <input class="form-control" id="wpsm-address" name="cs_website[]" value="<?php echo $cs_website;?>" type="text">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="wpsm-info">Position</label>
                                                <input class="form-control" id="wpsm-position" name="cs_posi[]" value="<?php echo $cs_posi;?>" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="wpsm-info">Address</label>
                                                <textarea id="wpsm-details" name="cs_add[]" rows="3" class="form-control"><?php echo $cs_add;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="wpsm-info">Details</label>
                                                <textarea id="wpsm-details" name="cs_desc[]" rows="5" class="form-control"><?php echo $cs_desc;?></textarea>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="socialtab<?php echo $j;?>">
                                      
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Facebook Profile URL</label>
                                                        <input type="text" class="form-control" id="wpsm-facebook" name="fb_url[]" value="<?php echo $fb_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Twitter URL</label>
                                                        <input type="text" class="form-control" id="wpsm-twitter" name="tw_url[]" value="<?php echo $tw_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Youtube URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="yt_url[]" value="<?php echo $yt_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Google Plus URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="gplus_url[]" value="<?php echo $gplus_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Linkedin URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="lkd_url[]" value="<?php echo $lkd_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Tumbler URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="tumb_url[]" value="<?php echo $tumb_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Instagram URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="ins_url[]" value="<?php echo $ins_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Pinterest URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="pin_url[]" value="<?php echo $pin_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Skype URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="sky_url[]" value="<?php echo $sky_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Reddit URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="red_url[]" value="<?php echo $red_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Vimeo URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="vmo_url[]" value="<?php echo $vmo_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Behance URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="be_url[]" value="<?php echo $be_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Dribbble URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="drib_url[]" value="<?php echo $drib_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">flickr URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="flic_url[]" value="<?php echo $flic_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Whatsapp URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="whastapp_url[]" value="<?php echo $whastapp_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Snapchat URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="snap_url[]" value="<?php echo $snap_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Telegram URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="tele_url[]" value="<?php echo $tele_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">We Chat URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="wechat_url[]" value="<?php echo $wechat_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">VK URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="imo_url[]" value="<?php echo $imo_url;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Stackover Flow URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="baidoo_url[]" value="<?php echo $baidoo_url;?>">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!--filter tab-->
                                    <div class="tab-pane fade" id="filterstab<?php echo $j;?>">
                                        <div id="wpsm-details-container">
                                        <div class="form-group">
                                                    <label for="wpsm-info">Add Filter Category</label>
                                                    <select class="append_filter_categoy wpsm_tm_label_text" name="cs_categoryfilter<?php echo $j;?>[]" multiple>
                                                    <option value="">Select Designation</option>
                                                    <?php
                                                    $m=1;
                                                    foreach ($drp_des as $option) 
                                                    {
                                                    $exp=explode("_",strtolower($cs_fcategory));
                                                    if(in_array(strtolower($option['filter_category']),$exp))
                                                    {
                                                    ?>
                                                    <option class="option_id<?php echo $m;?>" value="<?php echo $option['filter_category'];?>" selected><?php echo $option['filter_category'];?></option>
                                                    <?php
                                                    }
                                                else
                                                    {
                                                    ?>
                                                    <option class="option_id<?php echo $m;?>" value="<?php echo $option['filter_category'];?>"><?php echo $option['filter_category'];?></option>
                                                <?php
                                                } 
                                                $m++;
                                                }
                                                ?>
                                                </select>
                                                </div>
                                    </div>
                                    </div>
                                    <!--end filter tab-->
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                            $j++;
                        }
                        
            }
            else
            {
                for($j=0;$j<3;$j++) {
                        ?> 
                    <div  class="col-sm-8 wpsm_add_team" <?php if(($j==1) || ($j==2)){?>style="display:none;"<?php } ?>>
                        <div id="wpsm_team_info_container_<?php echo $j;?>" class="panel panel-default wpsm-main wpsm_add_team_hide">
                            <div class="panel-body">
                                <div class="wpsm-flexbox">
                                    <div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%"> 
                                            <img class="pro-pic-wrapper"src="<?php echo wpshopmart_team_pro_directory_url."assets/images/user-pic.png";?>" alt="">
                                            <input style="color:#ffffff;" type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload btn-block"  onclick="wpsm_media_upload(this)"/>
                                            <input style="display:block;width:100%" type="hidden"  name="cs_photo[]" class="wpsm_tm_label_text"  value="<?php echo wpshopmart_team_pro_directory_url.'assets/images/user-pic.png'; ?>"  readonly="readonly" placeholder="No Media Selected" />
                                            <input style="display:block;width:100%" type="hidden"  name="cs_id[]" class="wpsm_tm_label_text"  value="0"  readonly="readonly" placeholder="No Media Selected" />                                      
                                    </div>
                                    <div class="wpsm-flex-cell wpsm-vertical-top">
                                        <h3 id="display_wpsm_team_name<?php echo $j;?>">Team Member</h3>
                                    </div>
                                </div>
                             
                                <ul class="nav nav-tabs nav-justified clearfix wpsm-nav-justified">
                                    <li class="active">
                                        <a id="wpsm-details-tab" href="#details<?php echo $j;?>" data-toggle="tab" aria-expanded="true">
                                            <i class="glyphicon glyphicon-info-sign"></i>
                                            <span class="wpsm-nav-tabs-title">Details</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a id="wpsm-social-tab" href="#socialtab<?php echo $j;?>" data-toggle="tab" aria-expanded="false">
                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                            <span class="wpsm-nav-tabs-title">Social</span>
                                        </a>
                                    </li>
                                    <li class="wpsm_filter_view" style="<?php if($templates_presets=='filter'){echo  "display:none";}?>">
                                        <a id="wpsm-social-tab" href="#filterstab<?php echo $j;?>" data-toggle="tab" aria-expanded="false">
                                            <i class="glyphicon glyphicon-search"></i>
                                            <span class="wpsm-nav-tabs-title">Filter Category</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="details<?php echo $j;?>">
                                        <div id="wpsm-details-container">
                                       
                                                <div class="form-group">
                                                    <label for="wpsm-full-name">Full name</label>
                                                    <input type="text" class="form-control wpsm_team_member_fullname" id="wpsmfullname_<?php echo $j;?>" name="cs_name[]" value="Team Member">
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="wpsm-email">Email</label>
                                                            <input class="form-control" id="wpsm-email" name="cs_email[]" value="nick.knight@example.com" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="wpsm-phone">Phone</label>
                                                            <input class="form-control" id="wpsm-phone" name="cs_phone[]" value="+91-89898989898" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="wpsm-email">Website</label>
                                                            <input class="form-control" id="wpsm-website" name="cs_webname[]" value="website name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="wpsm-phone">Website URL</label>
                                                            <input class="form-control" id="wpsm-address" name="cs_website[]" value="address" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wpsm-info">Position</label>
                                                    <input class="form-control" id="wpsm-position" name="cs_posi[]" value="position" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="wpsm-info">Address</label>
                                                    <textarea id="wpsm-details" name="cs_add[]" rows="3" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wpsm-info">Details</label>
                                                    <textarea id="wpsm-details" name="cs_desc[]" rows="5" class="form-control"></textarea>
                                                </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="socialtab<?php echo $j;?>">
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Facebook Profile URL</label>
                                                        <input type="text" class="form-control" id="wpsm-facebook" name="fb_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Twitter URL</label>
                                                        <input type="text" class="form-control" id="wpsm-twitter" name="tw_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Youtube URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="yt_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Google Plus URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="gplus_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Linkedin URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="lkd_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Tumbler URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="tumb_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Instagram URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="ins_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Pinterest URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="pin_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Skype URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="sky_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Reddit URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="red_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Vimeo URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="vmo_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Behance URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="be_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Dribbble URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="drib_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">flickr URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="flic_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Whatsapp URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="whastapp_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Snapchat URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="snap_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Telegram URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="tele_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">We Chat URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="wechat_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">VK URL</label>
                                                        <input type="text" class="form-control" id="wpsm-youtube" name="imo_url[]" value="#">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wpsm-full-name">Stackover Flow URL</label>
                                                        <input type="text" class="form-control" id="wpsm-gplus" name="baidoo_url[]" value="#">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="filterstab<?php echo $j;?>">
                                        <div id="wpsm-details-container">
                                              <div class="form-group">
                                                    <label for="wpsm-info">Add Filter Category</label>
                                                    <select class="append_filter_categoy wpsm_tm_label_text" name="cs_categoryfilter<?php echo $j-1;?>[]" multiple="">
                                                    <option value="">Select Filter Category</option>
                                                    </select>
                                                </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
                ?>
                <!-- Here Team Info will be append using JS-->
                <div class="wpsm_team_append"></div>
                </div>
            </div>
        </div>
    </div>
</div>
            
<input type="hidden" value="<?php echo $i;?>" id="total_team_count"/>
    <?php
    $Def_Settings = unserialize(get_option('wpsm_teambuilder_pro_default_settings'));
    
    $PostId=$post->ID;
    $testi_Meta_Settings = unserialize(get_post_meta( $PostId, 'wpsm_teampro_Meta_Settings' ,true));
    
    $testi_form_Settings = unserialize(get_post_meta( $PostId, 'team_user_form_Settings' ,true));
    $option_names = array(
        //BOX COLOR SETTINGS
        'templates_presets'     => isset( $Def_Settings['templates_presets'] ) ? $Def_Settings['templates_presets'] : '',
        'templates'             => isset( $Def_Settings['templates'] ) ? $Def_Settings['templates'] : '',
        //  'tm_ind_clr_display'  => isset( $Def_Settings['tm_ind_clr_display'] ) ? $Def_Settings['tm_ind_clr_display'] : '',
        'tm_sec_title_clr'      => isset( $Def_Settings['tm_sec_title_clr'] ) ? $Def_Settings['tm_sec_title_clr'] : '',
        'tm_name_clr'           => isset( $Def_Settings['tm_name_clr'] ) ? $Def_Settings['tm_name_clr'] : '',
        'tm_name_hover_clr'     => isset( $Def_Settings['tm_name_hover_clr'] ) ? $Def_Settings['tm_name_hover_clr'] : '',
        'tm_email_clr'          => isset( $Def_Settings['tm_email_clr'] ) ? $Def_Settings['tm_email_clr'] : '',
        'tm_web_name_clr'       => isset( $Def_Settings['tm_web_name_clr'] ) ? $Def_Settings['tm_web_name_clr'] : '',
        'tm_link_hvr_clr'       => isset( $Def_Settings['tm_link_hvr_clr'] ) ? $Def_Settings['tm_link_hvr_clr'] : '',
        'tm_position_clr'       => isset( $Def_Settings['tm_position_clr'] ) ? $Def_Settings['tm_position_clr'] : '',
        'tm_position_hover_clr' => isset( $Def_Settings['tm_position_hover_clr'] ) ? $Def_Settings['tm_position_hover_clr'] : '',
        'tm_content_clr'         => isset( $Def_Settings['tm_content_clr'] ) ? $Def_Settings['tm_content_clr'] : '',

        'tm_content_bg_clr'      => isset( $Def_Settings['tm_content_bg_clr'] ) ? $Def_Settings['tm_content_bg_clr'] : '',
        'tm_box_opacity'         => isset( $Def_Settings['tm_box_opacity'] ) ? $Def_Settings['tm_box_opacity'] : '',

        'tm_bg_content_hover_clr'         => isset( $Def_Settings['tm_bg_content_hover_clr'] ) ? $Def_Settings['tm_bg_content_hover_clr'] : '',
        'tm_pop_bg_clr'         => isset( $Def_Settings['tm_pop_bg_clr'] ) ? $Def_Settings['tm_pop_bg_clr'] : '',
        'tm_img_hover_clr'         => isset( $Def_Settings['tm_img_hover_clr'] ) ? $Def_Settings['tm_img_hover_clr'] : '',
        'tm_img_hover_opcity'         => isset( $Def_Settings['tm_img_hover_opcity'] ) ? $Def_Settings['tm_img_hover_opcity'] : '',
        'tm_img_border_clr'      => isset( $Def_Settings['tm_img_border_clr'] ) ? $Def_Settings['tm_img_border_clr'] : '',
        'tm_quote_clr'           => isset( $Def_Settings['tm_quote_clr'] ) ? $Def_Settings['tm_quote_clr'] : '',
        'tm_sibg_clr'        => isset( $Def_Settings['tm_sibg_clr'] ) ? $Def_Settings['tm_sibg_clr'] : '',

        'tm_sihbg_clr'     => isset( $Def_Settings['tm_sihbg_clr'] ) ? $Def_Settings['tm_sihbg_clr'] : '',
        'tm_si_clr'         => isset( $Def_Settings['tm_si_clr'] ) ? $Def_Settings['tm_si_clr'] : '',
        'tm_rd_link'        => isset( $Def_Settings['tm_rd_link'] ) ? $Def_Settings['tm_rd_link'] : '',
        'tm_sih_clr'         => isset( $Def_Settings['tm_sih_clr'] ) ? $Def_Settings['tm_sih_clr'] : '' ,
        'tm_sib_clr'         => isset( $Def_Settings['tm_sib_clr'] ) ? $Def_Settings['tm_sib_clr'] : '',
        'tm_sibh_clr'        => isset( $Def_Settings['tm_sibh_clr'] ) ? $Def_Settings['tm_sibh_clr'] : '',
        'team_social_icon_size'           => isset( $Def_Settings['team_social_icon_size'] ) ? $Def_Settings['team_social_icon_size'] : '',

        'tm_filter_bg_clr'           => isset( $Def_Settings['tm_filter_bg_clr'] ) ? $Def_Settings['tm_filter_bg_clr'] : '',
        'tm_filter_activebg_clr'     => isset( $Def_Settings['tm_filter_activebg_clr'] ) ? $Def_Settings['tm_filter_activebg_clr'] : '',
        'tm_filter_title_clr'         => isset( $Def_Settings['tm_filter_title_clr'] ) ? $Def_Settings['tm_filter_title_clr'] : '',
        'tm_filter_active_title_clr'   => isset( $Def_Settings['tm_filter_active_title_clr'] ) ? $Def_Settings['tm_filter_active_title_clr'] : '',

        // BOX FONT FAMILY & SIZE SETTINGS

        'tm_sec_title_size'      => isset( $Def_Settings['tm_sec_title_size'] ) ? $Def_Settings['tm_sec_title_size'] : '',
        'tm_name_size'           => isset( $Def_Settings['tm_name_size'] ) ? $Def_Settings['tm_name_size'] : '',
        'tm_email_size'          => isset( $Def_Settings['tm_email_size'] ) ? $Def_Settings['tm_email_size'] : '',
        'tm_website_size'        => isset( $Def_Settings['tm_website_size'] ) ? $Def_Settings['tm_website_size'] : '',
        'tm_position_size'       => isset( $Def_Settings['tm_position_size'] ) ? $Def_Settings['tm_position_size'] : '',
        'tm_content_size'        => isset( $Def_Settings['tm_content_size'] ) ? $Def_Settings['tm_content_size'] : '',
        'tm_sec_title_weight'    => isset( $Def_Settings['tm_sec_title_weight'] ) ? $Def_Settings['tm_sec_title_weight'] : '',
        'tm_name_weight'         => isset( $Def_Settings['tm_name_weight'] ) ? $Def_Settings['tm_name_weight'] : '',


        'tm_position_weight'     => isset( $Def_Settings['tm_position_weight'] ) ? $Def_Settings['tm_position_weight'] : '',
        'tm_content_weight'      => isset( $Def_Settings['tm_content_weight'] ) ? $Def_Settings['tm_content_weight'] : '',
        'tm_content_line'    => isset( $Def_Settings['tm_content_line'] ) ? $Def_Settings['tm_content_line'] : '',
        'font_family'            => isset( $Def_Settings['font_family'] ) ? $Def_Settings['font_family'] : '',
        // TITLE & ICON  DISPLAY SETTINGS

        'tm_display_sec_title'   => isset( $Def_Settings['tm_display_sec_title'] ) ? $Def_Settings['tm_display_sec_title'] : '',
        'tm_display_name'        => isset( $Def_Settings['tm_display_name'] ) ? $Def_Settings['tm_display_name'] : '',
        'tm_display_image'       => isset( $Def_Settings['tm_display_image'] ) ? $Def_Settings['tm_display_image'] : '',
        'tm_display_email'       => isset( $Def_Settings['tm_display_email'] ) ? $Def_Settings['tm_display_email'] : '',
        'tm_display_website'     => isset( $Def_Settings['tm_display_website'] ) ? $Def_Settings['tm_display_website'] : '',
        'tm_display_position'    => isset( $Def_Settings['tm_display_position'] ) ? $Def_Settings['tm_display_position'] : '',
        'tm_display_rating'      => isset( $Def_Settings['tm_display_rating'] ) ? $Def_Settings['tm_display_rating'] : '',
        'tm_display_content'     => isset( $Def_Settings['tm_display_content'] ) ? $Def_Settings['tm_display_content'] : '',


        //Navigation Settings 

        'tm_nav_type'            => isset( $Def_Settings['tm_nav_type'] ) ? $Def_Settings['tm_nav_type'] : '',
        'tm_btn_type'            => isset( $Def_Settings['tm_btn_type'] ) ? $Def_Settings['tm_btn_type'] : '',
        'tm_nav_right_text'      => isset( $Def_Settings['tm_nav_right_text'] ) ? $Def_Settings['tm_nav_right_text'] : '',
        'tm_nav_left_text'       => isset( $Def_Settings['tm_nav_left_text'] ) ? $Def_Settings['tm_nav_left_text'] : '',
        'tm_nav_btn_icon'        => isset( $Def_Settings['tm_nav_btn_icon'] ) ? $Def_Settings['tm_nav_btn_icon'] : '',
        'tm_nav_btn_size'        => isset( $Def_Settings['tm_nav_btn_size'] ) ? $Def_Settings['tm_nav_btn_size'] : '',
        'tm_nav_btn_position'    => isset( $Def_Settings['tm_nav_btn_position'] ) ? $Def_Settings['tm_nav_btn_position'] : '',
        'tm_nav_btn_font_clr'    => isset( $Def_Settings['tm_nav_btn_font_clr'] ) ? $Def_Settings['tm_nav_btn_font_clr'] : '',

        'tm_nav_btn_font_hvr_clr' => isset( $Def_Settings['tm_nav_btn_font_hvr_clr'] ) ? $Def_Settings['tm_nav_btn_font_hvr_clr'] : '',
        'tm_nav_btn_bg_clr'      => isset( $Def_Settings['tm_nav_btn_bg_clr'] ) ? $Def_Settings['tm_nav_btn_bg_clr'] : '',
        'tm_nav_btn_hvr_clr'     => isset( $Def_Settings['tm_nav_btn_hvr_clr'] ) ? $Def_Settings['tm_nav_btn_hvr_clr'] : '',
        'tm_nav_dot_size'        => isset( $Def_Settings['tm_nav_dot_size'] ) ? $Def_Settings['tm_nav_dot_size'] : '',
        'tm_nav_dot_shape'       => isset( $Def_Settings['tm_nav_dot_shape'] ) ? $Def_Settings['tm_nav_dot_shape'] : '',
        'tm_nav_dot_bg_clr'      => isset( $Def_Settings['tm_nav_dot_bg_clr'] ) ? $Def_Settings['tm_nav_dot_bg_clr'] : '',
        'tm_nav_dot_hvr_clr'     => isset( $Def_Settings['tm_nav_dot_hvr_clr'] ) ? $Def_Settings['tm_nav_dot_hvr_clr'] : '',

        //layout and Background SETTINGS

        'tm_layout'              => isset( $Def_Settings['tm_layout'] ) ? $Def_Settings['tm_layout'] : '',
        'tm_pop_style'              => isset( $Def_Settings['tm_pop_style'] ) ? $Def_Settings['tm_pop_style'] : '',
        'tm_pop_color'              => isset( $Def_Settings['tm_pop_color'] ) ? $Def_Settings['tm_pop_color'] : '',
        'tm_slide_left_right'       => isset( $Def_Settings['tm_slide_left_right'] ) ? $Def_Settings['tm_slide_left_right'] : '',
        'tm_image_bg'            => isset( $Def_Settings['tm_image_bg'] ) ? $Def_Settings['tm_image_bg'] : '',
        'team_bg_clr'           => isset( $Def_Settings['team_bg_clr'] ) ? $Def_Settings['team_bg_clr'] : '',
        'team_favicon'          => isset( $Def_Settings['team_favicon'] ) ? $Def_Settings['team_favicon'] : '',
        'tm_bg_size'             => isset( $Def_Settings['tm_bg_size'] ) ? $Def_Settings['tm_bg_size'] : '',
        'tm_bg_repeat'           => isset( $Def_Settings['tm_bg_repeat'] ) ? $Def_Settings['tm_bg_repeat'] : '',
        'tm_bg_position'         => isset( $Def_Settings['tm_bg_position'] ) ? $Def_Settings['tm_bg_position'] : '',
        'tm_show_img_overlay'    => isset( $Def_Settings['tm_show_img_overlay'] ) ? $Def_Settings['tm_show_img_overlay'] : '',
        'tm_img_overlay_clr'     => isset( $Def_Settings['tm_img_overlay_clr'] ) ? $Def_Settings['tm_img_overlay_clr'] : '',
        'tm_img_bg_opacity'      => isset( $Def_Settings['tm_img_bg_opacity'] ) ? $Def_Settings['tm_img_bg_opacity'] : '',
        'tm_show_prlex'          => isset( $Def_Settings['tm_show_prlex'] ) ? $Def_Settings['tm_show_prlex'] : '',
        'tm_padding_LR'          => isset( $Def_Settings['tm_padding_LR'] ) ? $Def_Settings['tm_padding_LR'] : '',
        'tm_padding_TB'          => isset( $Def_Settings['tm_padding_TB'] ) ? $Def_Settings['tm_padding_TB'] : '',
        'tm_link_hvr_clr'        => isset( $Def_Settings['tm_link_hvr_clr'] ) ? $Def_Settings['tm_link_hvr_clr'] : '',
        'tm_quote_clr'           => isset( $Def_Settings['tm_quote_clr'] ) ? $Def_Settings['tm_quote_clr'] : '',
        'custom_css'             => isset( $Def_Settings['custom_css'] ) ? $Def_Settings['custom_css'] : '',

    );  
    foreach($option_names as $option_name => $default_value) {
        if(isset($testi_Meta_Settings[$option_name])) 
            ${"" . $option_name}  = $testi_Meta_Settings[$option_name];
        else
            ${"" . $option_name}  = $default_value;
    } ?>
<script>
function updte_wpsm_counter_pro_default_settings(){
     jQuery.ajax({
        url: location.href,
        type: "POST",
        data : {
                'action_ac_pro':'updte_wpsm_ac_pro_default_settings',
                 },
                success : function(data){
                                    alert("Default Settings Updated");
                                    location.reload(true);
                }    
    });
    
}
</script>
<?php 
    if(isset($_POST['action_ac_pro']) == "updte_wpsm_ac_pro_default_settings")
    {
        $Settings_CN_Array = serialize( array(
                //BOX COLOR SETTINGS
                    'templates_presets'     => $templates_presets,
                    'templates'             => $templates,
                //  'tm_ind_clr_display'  => isset( $Def_Settings['tm_ind_clr_display'] ) ? $Def_Settings['tm_ind_clr_display'] : '',
                    'tm_sec_title_clr'      => $tm_sec_title_clr,
                    'tm_name_clr'           => $tm_name_clr,
                    'tm_name_hover_clr'      => $tm_name_hover_clr,
                    'tm_email_clr'          => $tm_email_clr,
                    'tm_web_name_clr'       => $tm_web_name_clr,
                    'tm_link_hvr_clr'       => $tm_link_hvr_clr,
                    'tm_position_clr'        => $tm_position_clr,
                    'tm_position_hover_clr'        => $tm_position_hover_clr,
                    'tm_content_clr'         => $tm_content_clr,
                    
                    'tm_content_bg_clr'      => $tm_content_bg_clr,
                    'tm_box_opacity'         => $tm_box_opacity,
                    'tm_box_opacity'         => $tm_pop_style,
                    'tm_pop_color'         => $tm_pop_color,
                    'tm_slide_left_right'         => $tm_slide_left_right,
                    'tm_bg_content_hover_clr'         => $tm_bg_content_hover_clr,
                    'tm_pop_bg_clr'         => $tm_pop_bg_clr,
                    'tm_img_hover_clr'         => $tm_img_hover_clr,
                    'tm_img_hover_opcity'         => $tm_img_hover_opcity,

                    'tm_img_border_clr'      => $tm_img_border_clr,
                    'tm_quote_clr'           => $tm_quote_clr,
                    'tm_sibg_clr'        => $tm_sibg_clr,

                    'tm_sihbg_clr'     => $tm_sihbg_clr,
                    'tm_si_clr'         => $tm_si_clr,
                    'tm_sih_clr'         => $tm_sih_clr,
                    'tm_sib_clr'         => $tm_sib_clr,
                    'tm_sibh_clr'        => $tm_sibh_clr,


                    'team_social_icon_size'           => $team_social_icon_size,

                    'tm_filter_bg_clr'         => $tm_filter_bg_clr,
                    'tm_filter_activebg_clr'   => $tm_filter_activebg_clr,
                    'tm_filter_title_clr'      => $tm_filter_title_clr,
                    'tm_filter_active_title_clr' => $tm_filter_active_title_clr,

                    // BOX FONT FAMILY & SIZE SETTINGS
                    
                    'tm_sec_title_size'      => $tm_sec_title_size,
                    'tm_name_size'           => $tm_name_size,
                    'tm_email_size'          => $tm_email_size,
                    'tm_website_size'        => $tm_website_size,
                    'tm_position_size'       => $tm_position_size,
                    'tm_content_size'        => $tm_content_size,
                    'tm_sec_title_weight'    => $tm_sec_title_weight,
                    'tm_name_weight'         => $tm_name_weight,
                    
                    
                    'tm_position_weight'     => $tm_position_weight,
                    'tm_content_weight'      => $tm_content_weight,
                    'tm_content_line'    => $tm_content_line,
                    'font_family'            => $font_family,
                    // TITLE & ICON  DISPLAY SETTINGS
                    
                    'tm_display_sec_title'   => $tm_display_sec_title,
                    'tm_display_name'        => $tm_display_name,
                    'tm_display_image'       => $tm_display_image,
                    'tm_display_email'       => $tm_display_email,
                    'tm_display_website'     => $tm_display_website,
                    'tm_display_position'    => $tm_display_position,
                    'tm_display_rating'      => $tm_display_rating,
                    'tm_display_content'     => $tm_display_content,
                    'tm_rd_link'     => $tm_rd_link,
                    
                    //Navigation Settings 
                    
                    'tm_nav_type'            => $tm_nav_type,
                    'tm_btn_type'            => $tm_btn_type,
                    'tm_nav_right_text'      => $tm_nav_right_text,
                    'tm_nav_left_text'       => $tm_nav_left_text,
                    'tm_nav_btn_icon'        => $tm_nav_btn_icon,
                    'tm_nav_btn_size'        => $tm_nav_btn_size,
                    'tm_nav_btn_position'    => $tm_nav_btn_position,
                    'tm_nav_btn_font_clr'    => $tm_nav_btn_font_clr,
                    
                    'tm_nav_btn_font_hvr_clr' => $tm_nav_btn_font_hvr_clr,
                    'tm_nav_btn_bg_clr'      => $tm_nav_btn_bg_clr,
                    'tm_nav_btn_hvr_clr'     => $tm_nav_btn_hvr_clr,
                    'tm_nav_dot_size'        => $tm_nav_dot_size,
                    'tm_nav_dot_shape'       => $tm_nav_dot_shape,
                    'tm_nav_dot_bg_clr'      => $tm_nav_dot_bg_clr,
                    'tm_nav_dot_hvr_clr'     => $tm_nav_dot_hvr_clr,
                    
                    //layout and Background SETTINGS
                
                    'tm_layout'              => isset( $Def_Settings['tm_layout'] ) ? $Def_Settings['tm_layout'] : '',
                    'tm_image_bg'            => isset( $Def_Settings['tm_image_bg'] ) ? $Def_Settings['tm_image_bg'] : '',
                    'team_bg_clr'           => isset( $Def_Settings['team_bg_clr'] ) ? $Def_Settings['team_bg_clr'] : '',
                    'team_favicon'          => isset( $Def_Settings['team_favicon'] ) ? $Def_Settings['team_favicon'] : '',
                    'tm_bg_size'             => isset( $Def_Settings['tm_bg_size'] ) ? $Def_Settings['tm_bg_size'] : '',
                    'tm_bg_repeat'           => isset( $Def_Settings['tm_bg_repeat'] ) ? $Def_Settings['tm_bg_repeat'] : '',
                    'tm_bg_position'         => isset( $Def_Settings['tm_bg_position'] ) ? $Def_Settings['tm_bg_position'] : '',
                    'tm_show_img_overlay'    => isset( $Def_Settings['tm_show_img_overlay'] ) ? $Def_Settings['tm_show_img_overlay'] : '',
                    'tm_img_overlay_clr'     => isset( $Def_Settings['tm_img_overlay_clr'] ) ? $Def_Settings['tm_img_overlay_clr'] : '',
                    'tm_img_bg_opacity'      => isset( $Def_Settings['tm_img_bg_opacity'] ) ? $Def_Settings['tm_img_bg_opacity'] : '',
                    'tm_show_prlex'          => isset( $Def_Settings['tm_show_prlex'] ) ? $Def_Settings['tm_show_prlex'] : '',
                    'tm_padding_LR'          => isset( $Def_Settings['tm_padding_LR'] ) ? $Def_Settings['tm_padding_LR'] : '',
                    'tm_padding_TB'          => isset( $Def_Settings['tm_padding_TB'] ) ? $Def_Settings['tm_padding_TB'] : '',
                    'tm_link_hvr_clr'        => isset( $Def_Settings['tm_link_hvr_clr'] ) ? $Def_Settings['tm_link_hvr_clr'] : '',
                    'tm_quote_clr'           => isset( $Def_Settings['tm_quote_clr'] ) ? $Def_Settings['tm_quote_clr'] : '',
                    'custom_css'             => isset( $Def_Settings['custom_css'] ) ? $Def_Settings['custom_css'] : '',
            ) );

            update_option('wpsm_teambuilder_pro_default_settings', $Settings_CN_Array);
}

 ?>
 <style>
 .wpsm_add_team_button_class
 {
      padding: 12px 0;
    background: #fb8c00;  
 }
 .wpsm_errorClass { border:  1px solid red; }
.wpsm_site_sidebar_widget_title2{
    margin-left: 9px;
    margin-right: 2px;
    background: #31a3dd;
    padding: 10px;
    font-size: 20px;
    text-transform: uppercase;
    text-align: center;
    border-bottom: 9px double #FFF;
    box-shadow: 8px 8px 15px rgba(0,0,0,.4);
    margin-bottom:10px;
}
.wpsm_site_sidebar_widget_title2 h5{
    color: #fff !important;
    margin: 0px !important;
}
.sel-icon-wrapper{
    
    -webkit-box-shadow: 1px 1px 11px rgba(0, 0, 0, 0.5);
    box-shadow: 1px 1px 11px rgba(0, 0, 0, 0.5);
    padding: 0px;
     overflow: hidden;
      cursor: pointer;
     display:block;
     margin-bottom:20px;
     border : 3px solid transparent;
}
.sel-icon-wrapper.active{
    border : 3px solid #35d0ba;
}
.sel-icon-wrapper:hover{
    border : 3px solid #35d0ba;
}
.sel-icon-wrapper .lefti{
    padding: 5px;
    display:block;
    font-weight:900;
    font-size: 19px;
    text-align: center;
}

.sel-icon-wrapper .checked {
    position: absolute;
    background: #35d0ba;
    color: #fff;
    top: -8px;
    right: 0px;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 24px;
    opacity:0;
}

.sel-icon-wrapper.active .checked{
    
    opacity:1;
}
.selected_label_color{
    color:#35d0ba;
}
.my-title-wpsm h4{
    width: 100%;
}
.my-title-wpsm h4:after{
    content: none;
}
.cd-panel-header h4
{
    font-weight: bold;
    color: #89ba2c;
    padding-left: 5%;
    line-height: 0;
    font-size: 18px;
}
</style>
 <!--color setting-->
 <input type="hidden" name="teambuilder_setting_pro_save_action" value="teambuilder_setting_pro_save_action" />
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-first">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Team Member Color Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-first">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                   
                 <table class="form-table tm_table">
                    <tbody>
                      <tr style="border-bottom:0px;">
                      </tr>
                      <tr><th>Team Section Title Color</th>
                <td>
                <input id="tm_sec_title_clr" name="tm_sec_title_clr" type="text" value="<?php echo $tm_sec_title_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                <!-- Tooltip -->                    
                </td>
            </tr>
            <tr><th>Team Member Name Color</th>
                <td>
                <input id="tm_name_clr" name="tm_name_clr" type="text" value="<?php echo $tm_name_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr><th>Team Member Name Hover Color</th>
                <td>
                <input id="tm_name_hover_clr" name="tm_name_hover_clr" type="text" value="<?php echo $tm_name_hover_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>            
            <tr>
                <th>Team Member Email Color </th>
                <td>
                <input id="tm_email_clr" name="tm_email_clr" type="text" value="<?php echo $tm_email_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Website Link Color</th>
                <td>
                <input id="tm_web_name_clr" name="tm_web_name_clr" type="text" value="<?php echo $tm_web_name_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Website Link Hover Color</th>
                <td>
                <input id="tm_link_hvr_clr" name="tm_link_hvr_clr" type="text" value="<?php echo $tm_link_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Designation Color</th>
                <td>
                <input id="tm_position_clr" name="tm_position_clr" type="text" value="<?php echo $tm_position_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Designation Hover Color</th>
                <td>
                <input id="tm_position_hover_clr" name="tm_position_hover_clr" type="text" value="<?php echo $tm_position_hover_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Content Color</th>
                <td>
                <input id="tm_content_clr" name="tm_content_clr" type="text" value="<?php echo $tm_content_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Content Background Color</th>
                <td>
                <input id="tm_content_bg_clr" name="tm_content_bg_clr" type="text" value="<?php echo $tm_content_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr class="setting_color">
                <th>Content background Opacity</th>
                <td>
                <div id="tm_box_opacity_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_box_opacity" name="tm_box_opacity" readonly="readonly">
                </td>
            </tr>
            <tr>
                <th>Background Content Hover Color</th>
                <td>
                <input id="tm_bg_content_hover_clr" name="tm_bg_content_hover_clr" type="text" value="<?php echo $tm_bg_content_hover_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Pop Up Background Color</th>
                <td>
                <input id="tm_pop_bg_clr" name="tm_pop_bg_clr" type="text" value="<?php echo $tm_pop_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Image Hover Color</th>
                <td>
                <input id="tm_img_hover_clr" name="tm_img_hover_clr" type="text" value="<?php echo $tm_img_hover_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr class="setting_color">
                <th>Image Hover Opacity</th>
                <td>
                <div id="tm_img_hover_opcity_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_img_hover_opcity" name="tm_img_hover_opcity" readonly="readonly">
                </td>
            </tr>
            <tr>
                <th>Border Color </th>
                <td>
                <input id="tm_img_border_clr" name="tm_img_border_clr" type="text" value="<?php echo $tm_img_border_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Quote Icon Color</th>
                <td>
                <input id="tm_quote_clr" name="tm_quote_clr" type="text" value="<?php echo $tm_quote_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
        </tbody>
    </table>
</div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div>   
  <!--end color setting-->
  <!--start social setting-->
  <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-social">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Social Icon Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-social">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                   
                 <table class="form-table tm_table">
                    <tbody>
                        <tr style="border-bottom:0px;">
                        </tr>
                        <tr>
                <th>Social Icon Background Color</th>
                <td>
                <input id="tm_sibg_clr" name="tm_sibg_clr" type="text" value="<?php echo $tm_sibg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
             <tr>
                <th>Socail Icon Hover Background Color </th>
                <td>
                <input id="tm_sihbg_clr" name="tm_sihbg_clr" type="text" value="<?php echo $tm_sihbg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Socail Icon Color</th>
                <td>
                <input id="tm_si_clr" name="tm_si_clr" type="text" value="<?php echo $tm_si_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Socail Icon Hover Color</th>
                <td>
                <input id="tm_sih_clr" name="tm_sih_clr" type="text" value="<?php echo $tm_sih_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Socail Icon Border Color</th>
                <td>
                <input id="tm_sib_clr" name="tm_sib_clr" type="text" value="<?php echo $tm_sib_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr>
                <th>Socail Icon Border Hover Color</th>
                <td>
                <input id="tm_sibh_clr" name="tm_sibh_clr" type="text" value="<?php echo $tm_sibh_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr class="setting_color">
                <th>Social Icon Font Size</th>
                <td>
                <div id="my_social_icon_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="team_social_icon_size" name="team_social_icon_size" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Social Icon External Link</th>
                <td>
                 <div class="switch">
                        <input type="radio" class="switch-input" name="tm_rd_link" value="yes"  id="enable_rd_link" <?php if($tm_rd_link == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_rd_link" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_rd_link" value="no" id="disable_rd_link"  <?php if($tm_rd_link == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_rd_link" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

                               </div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div> 
  <!--end social setting-->     

 <!--Font Size and font style setting-->
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-fontset">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Font Size and Style Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-fontset">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                
                                <table class="form-table tm_table">
                        <tbody>
                        <tr style="border-bottom:0px;">
                        </tr>
                        <tr class="setting_color">
                <th>Section Title Font Size</th>
                <td>
                <div id="tm_sec_title_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_sec_title_size" name="tm_sec_title_size" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Name Font Size</th>
                <td>
                <div id="tm_name_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_name_size" name="tm_name_size" readonly="readonly">
                </td>
            </tr>
            
            <tr class="setting_color">
                <th>Email Font Size</th>
                <td>
                <div id="tm_email_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_email_size" name="tm_email_size" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Website Font Size</th>
                <td>
                <div id="tm_website_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_website_size" name="tm_website_size" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Designation Font Size</th>
                <td>
                <div id="tm_position_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_position_size" name="tm_position_size" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Content Font Size</th>
                <td>
                <div id="tm_content_size_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_content_size" name="tm_content_size" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Section Title Font Weight</th>
                <td>
                <div id="tm_sec_title_weight_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_sec_title_weight" name="tm_sec_title_weight" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Name Font Weight</th>
                <td>
                <div id="tm_name_weight_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_name_weight" name="tm_name_weight" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Designation Font Weight</th>
                <td>
                <div id="tm_position_weight_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_position_weight" name="tm_position_weight" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Content Font Weight</th>
                <td>
                <div id="tm_content_weight_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_content_weight" name="tm_content_weight" readonly="readonly">
                </td>
            </tr>
            <tr class="setting_color">
                <th>Content Line Height</th>
                <td>
                <div id="tm_content_line_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_content_line" name="tm_content_line" readonly="readonly">
                </td>
            </tr>
            <tr>
                <th scope="row"><label><?php _e('Enable Font Family',wpshopmart_team_pro_text_domain); ?></label></th>
                <td>
                    <?php 
                    require_once("font-family.php");
                    ?>  
                    <input type="hidden" name="font_family_group" id="font_family_group" value="<?php echo $font_family; ?>" />
                </td>
            </tr>
                        </tbody>
                    </table>
                               </div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div> 
 <!--end Font Size and Font style setting-->  



<!--Start Display Setting-->
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-displayset">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Display Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-displayset">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                <table class="form-table tm_table">
                    <tbody>
                            <tr style="border-bottom:0px;">
                            </tr>
                            <tr>
                <th>Display Section Title</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_sec_title" value="yes"  id="enable_display_sec_title" <?php if($tm_display_sec_title == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_sec_title" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_sec_title" value="no" id="disable_display_sec_title"  <?php if($tm_display_sec_title == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_sec_title" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Name</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_name" value="yes"  id="enable_display_name" <?php if($tm_display_name == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_name" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_name" value="no" id="disable_display_name"  <?php if($tm_display_name == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_name" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Image</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_image" value="yes"  id="enable_display_image" <?php if($tm_display_image == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_image" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_image" value="no" id="disable_display_image"  <?php if($tm_display_image == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_image" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Email</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_email" value="yes"  id="enable_display_email" <?php if($tm_display_email == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_email" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_email" value="no" id="disable_display_email"  <?php if($tm_display_email == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_email" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Website Details</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_website" value="yes"  id="enable_display_website" <?php if($tm_display_website == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_website" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_website" value="no" id="disable_display_website"  <?php if($tm_display_website == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_website" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Designation</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_position" value="yes"  id="enable_display_position" <?php if($tm_display_position == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_position" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_position" value="no" id="disable_display_position"  <?php if($tm_display_position == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_position" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Socail Icons</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_rating" value="yes"  id="enable_display_rating" <?php if($tm_display_rating == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_rating" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_rating" value="no" id="disable_display_rating"  <?php if($tm_display_rating == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_rating" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Display Testimonial Content</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_display_content" value="yes"  id="enable_display_content" <?php if($tm_display_content == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_display_content" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_display_content" value="no" id="disable_display_content"  <?php if($tm_display_content == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_display_content" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
                    </tbody>
                </table>

                               </div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div>
<!--End Display Setting-->




<!--start Layout Setting-->
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-layoutset">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Column Layout Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-layoutset">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                
                                <table class="form-table tm_table">
                    <tbody>
                            <tr style="border-bottom:0px;">
                            </tr>
                            <tr>
                <th>Display Column Layout</th>
                <td>
                    <select name="tm_layout" id="tm_layout" class="standard-dropdown" style="width:100%" >
                        <option value="12"  <?php if($tm_layout == '12') { echo "selected"; } ?>>One Column Layout</option>
                        <option value="6"  <?php if($tm_layout == '6') { echo "selected"; } ?>>Two Column Layout</option>
                        <option value="4"  <?php if($tm_layout == '4') { echo "selected"; } ?>>Three Column Layout</option>
                        <option value="3"  <?php if($tm_layout == '3') { echo "selected"; } ?>>Four Column Layout</option>                  
                    </select>
                </td>
            </tr>
                    </tbody>
                </table>
                               </div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div>
<!--end  Layout Setting-->

<!--Start Carousel Setting-->
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-carousel">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Carousel Navigation Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-carousel">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                <table class="form-table tm_table">
                    <tbody>
                            <tr style="border-bottom:0px;">
                            </tr>
                            <?php if($tm_nav_type==''){ $tm_nav_btn_icon=2;}?>
            <tr class="cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>">
                <th>Select Navigation Type</th>
                <td>
                    <div class="widget">
                        <input type="radio" name="tm_nav_type" id="nav-1" value="1" checked onchange="ts_nav_select()" <?php if($tm_nav_type == '1' ) { echo "checked"; } ?>>
                        <label for="nav-1">Buttons</label>
                        <br/></br>
                        <input type="radio" name="tm_nav_type" id="nav-2" <?php if($tm_nav_type == '2' ) { echo "checked"; } ?>  value="2" onchange="ts_nav_select()" <?php if($tm_nav_type == '2' ) { echo "checked"; } ?>>
                        <label for="nav-2">Dots</label>
                        </br></br>
                        <input type="radio" name="tm_nav_type" id="nav-3"  <?php if($tm_nav_type == '3' ) { echo "checked"; } ?> value="3" onchange="ts_nav_select()" <?php if($tm_nav_type == '3' ) { echo "checked"; } ?> >
                        <label for="nav-3">Both Button and Dots</label>
                    </div>
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid' || $tm_nav_type=='2'){echo  "display:none";}?>" >
                <th>Navigation Button Type:</th>
                <td>
                  <div class="widget">
                        <input type="radio" name="tm_btn_type" id="button-1" checked value="Text" onchange="ts_btn_select()" <?php if($tm_btn_type == 'Text' ) { echo "checked"; } ?>>
                        <label for="button-1">Only Text</label>
                        <br/></br>
                        <input type="radio" name="tm_btn_type" id="button-2" <?php if($tm_btn_type == 'Icon' ) { echo "checked"; } ?>  value="Icon" onchange="ts_btn_select()" <?php if($tm_nav_type == 'Icon' ) { echo "checked"; } ?>>
                        <label for="button-2">Only Icon</label>
                        </br></br>
                        <input style="display: none;" type="radio" name="tm_btn_type" id="button-3"  <?php if($tm_nav_type == 'Both' ) { echo "checked"; } ?> value="Both" onchange="ts_btn_select()" <?php if($tm_nav_type == 'Both' ) { echo "checked"; } ?> >
                        <label  style="display: none;" for="button-3">Both Text and Icon</label>
                    </div>
                </td>
            </tr>
            <tr style="display: none;" class="ts_btn_group ts_text_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>"  style="<?php if($tm_nav_type == '2' || $tm_nav_type == 'Icon'){echo  "display:none";}?>" >
                <th scope="row"><label><?php _e('Navigation Button Left Text'); ?></label>
                  </th>
                <td>
                    <div class="">
                        <input type="text" class="form-control" name="tm_nav_left_text" value="<?php if($tm_nav_left_text) { echo $tm_nav_left_text; } ?>" id="tm_nav_left_text">
                    </div>
                </td>
            </tr>
            <tr class="ts_btn_group ts_text_group cn_ind_clr_enable_class" style="<?php if($tm_nav_type == '2' || $tm_nav_type == 'Icon'){echo  "display:none";}?>" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>"" >
                <th scope="row"><label><?php _e('Navigation Button Right Text'); ?></label>
                    </th>
                <td>
                    <div class="">
                        <input type="text" class="form-control" name="tm_nav_right_text" value="<?php if($tm_nav_right_text) { echo $tm_nav_right_text; } ?>" id="tm_nav_right_text">
                    </div>
                </td>
            </tr>
            <?php if($tm_nav_btn_icon==''){ $tm_nav_btn_icon=4;}?>
            <tr class="ts_btn_group ts_icon_group cn_ind_clr_enable_class" style="<?php if($tm_nav_type == '2' || $tm_nav_type == 'Text'){echo  "display:none";}?>" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" >
                <th scope="row"><label><?php _e('Carousel Navigation Button Icon Type'); ?></label>
                </th>
                <td>
                    <div class="col-md-6 col-sm-6 op_cl_icon_box">
                        <div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($tm_nav_btn_icon == '1' ) { echo "active"; } ?>" id="ts_btn_icon_1" onclick="select_btn_icon(1)">
                            <div class="checked"><i class="fa fa-check"></i></div>
                            <div class="lefti"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-angle-double-right"></i></div>
                            <input type="radio" name="tm_nav_btn_icon" id="tm_nav_btn_icon1" value="1"  <?php if($tm_nav_btn_icon == '1' ) { echo "checked"; } ?> style="display:none;"   />
                        </div>  
                    </div>
                    <div class="col-md-6 col-sm-6 op_cl_icon_box">
                        <div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($tm_nav_btn_icon == '2' ) { echo "active"; } ?>" id="ts_btn_icon_2" onclick="select_btn_icon(2)">
                            <div class="checked"><i class="fa fa-check"></i></div>
                            <div class="lefti"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-arrow-right"></i></div>
                            <input type="radio" name="tm_nav_btn_icon" id="tm_nav_btn_icon2" value="2"  <?php if($tm_nav_btn_icon == '2' ) { echo "checked"; } ?> style="display:none;"   />
                        </div>  
                    </div>
                    <div class="col-md-6 col-sm-6 op_cl_icon_box">
                        <div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($tm_nav_btn_icon == '3' ) { echo "active"; } ?>" id="ts_btn_icon_3" onclick="select_btn_icon(3)">
                            <div class="checked"><i class="fa fa-check"></i></div>
                            <div class="lefti"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-angle-right"></i></div>
                            <input type="radio" name="tm_nav_btn_icon" id="tm_nav_btn_icon3" value="3"  <?php if($tm_nav_btn_icon == '3' ) { echo "checked"; } ?> style="display:none;"   />
                        </div>  
                    </div>
                    <div class="col-md-6 col-sm-6 op_cl_icon_box">
                        <div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($tm_nav_btn_icon == '4') { echo "active"; } ?>" id="ts_btn_icon_4" onclick="select_btn_icon(4)">
                            <div class="checked"><i class="fa fa-check"></i></div>
                            <div class="lefti"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-chevron-right"></i></div>
                            <input type="radio" name="tm_nav_btn_icon" checked id="tm_nav_btn_icon4" value="4"  <?php if($tm_nav_btn_icon == '4' ) { echo "checked"; } ?> style="display:none;"   />
                        </div>  
                    </div>
                    <div class="col-md-6 col-sm-6 op_cl_icon_box">
                        <div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($tm_nav_btn_icon == '5' ) { echo "active"; } ?>" id="ts_btn_icon_5" onclick="select_btn_icon(5)">
                            <div class="checked"><i class="fa fa-check"></i></div>
                            <div class="lefti"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-caret-right"></i></div>
                            <input type="radio" name="tm_nav_btn_icon" id="tm_nav_btn_icon5" value="5"  <?php if($tm_nav_btn_icon == '5' ) { echo "checked"; } ?> style="display:none;"   />
                        </div>  
                    </div>
                    <div class="col-md-6 col-sm-6 op_cl_icon_box">
                        <div class="ts_btn_icon_wrapper sel-icon-wrapper <?php if($tm_nav_btn_icon == '6') { echo "active"; } ?>" id="ts_btn_icon_6" onclick="select_btn_icon(6)">
                            <div class="checked"><i class="fa fa-check"></i></div>
                            <div class="lefti"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-long-arrow-right"></i></div>
                            <input type="radio" name="tm_nav_btn_icon" id="tm_nav_btn_icon6" value="6"  <?php if($tm_nav_btn_icon == '6' ) { echo "checked"; } ?> style="display:none;"   />
                        </div>  
                    </div>
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($tm_nav_type == '2'){echo  "display:none";}?>" >
                <th>Select Navigation Button Size</th>
                <td>
                    <select name="tm_nav_btn_size" id="tm_nav_btn_size" class="standard-dropdown" style="width:100%" >
                        <option value="Small"  <?php if($tm_nav_btn_size == 'Small') { echo "selected"; } ?>>Small</option>
                        <option value="Medium"  <?php if($tm_nav_btn_size == 'Medium') { echo "selected"; } ?>>Medium</option>
                        <option value="Large"  <?php if($tm_nav_btn_size == 'Large') { echo "selected"; } ?>>Large</option>
                    </select>
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='2'){echo  "display:none";}?>">
                <th>Select Navigation Button Position</th>
                <td>
                    <select name="tm_nav_btn_position" id="tm_nav_btn_position" class="standard-dropdown" style="width:100%" >
                        <option value="top_left"  <?php if($tm_nav_btn_position == 'top_left') { echo "selected"; } ?>>top-left</option>
                        <option value="top_center"  <?php if($tm_nav_btn_position == 'top_center') { echo "selected"; } ?>>top-center</option>
                        <option value="top_right"  <?php if($tm_nav_btn_position == 'top_right') { echo "selected"; } ?>>top-right</option>
                        <option value="botttom_left"  <?php if($tm_nav_btn_position == 'botttom_left') { echo "selected"; } ?>>bottom-left</option>
                        <option value="botttom_center"  <?php if($tm_nav_btn_position == 'botttom_center') { echo "selected"; } ?>>bottom-center</option>
                        <option value="botttom_right"  <?php if($tm_nav_btn_position == 'botttom_right') { echo "selected"; } ?>>bottom-right</option>
                        <option value="on_content"  <?php if($tm_nav_btn_position == 'on_content') { echo "selected"; } ?>>on-content</option>                  
                    </select>
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='2'){echo  "display:none";}?>">
                <th>Navigation Button Font Color</th>
                <td>
                <input id="tm_nav_btn_font_clr" name="tm_nav_btn_font_clr" type="text" value="<?php echo $tm_nav_btn_font_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='2'){echo  "display:none";}?>">
                <th>Navigation Button Font Hover Color</th>
                <td>
                <input id="tm_nav_btn_font_hvr_clr" name="tm_nav_btn_font_hvr_clr" type="text" value="<?php echo $tm_nav_btn_font_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='2'){echo  "display:none";}?>">
                <th>Navigation Button Background Color</th>
                <td>
                <input id="tm_nav_btn_bg_clr" name="tm_nav_btn_bg_clr" type="text" value="<?php echo $tm_nav_btn_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr class="ts_btn_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='2'){echo  "display:none";}?>">
                <th>Navigation Button Background Hover Color</th>
                <td>
                <input id="tm_nav_btn_hvr_clr" name="tm_nav_btn_hvr_clr" type="text" value="<?php echo $tm_nav_btn_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />               
                </td>
            </tr>
            <tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='1'){echo  "display:none";}?>" style="<?php if($templates_presets='grid'){echo  "display:none";}?>">
                <th>Select Navigation Dots Size</th>
                <td>
                    <select name="tm_nav_dot_size" id="tm_nav_dot_size" class="standard-dropdown" style="width:100%" >
                        <option value="Small"  <?php if($tm_nav_dot_size == 'Small') { echo "selected"; } ?>>Small</option>
                        <option value="Medium"  <?php if($tm_nav_dot_size == 'Medium') { echo "selected"; } ?>>Medium</option>
                        <option value="Large"  <?php if($tm_nav_dot_size == 'Large') { echo "selected"; } ?>>Large</option>
                    </select>
                </td>
            </tr>
            <tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='1'){echo  "display:none";}?>" style="<?php if($templates_presets='grid'){echo  "display:none";}?>">
                <th>Select Navigation Dots Shape</th>
                <td>
                    <select name="tm_nav_dot_shape" id="tm_nav_dot_shape" class="standard-dropdown" style="width:100%" >
                        <option value="Circle"  <?php if($tm_nav_dot_shape == 'Circle') { echo "selected"; } ?>>Circle</option>
                        <option value="Rectangle"  <?php if($tm_nav_dot_shape == 'Rectangle') { echo "selected"; } ?>>Rectangle</option>
                        <option value="Square"  <?php if($tm_nav_dot_shape == 'Square') { echo "selected"; } ?>>Square</option>
                        <option value="Oval"  <?php if($tm_nav_dot_shape == 'Oval') { echo "selected"; } ?>>Oval</option>
                    </select>
                </td>
            </tr>
            <tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type ='1'){echo  "display:none";}?>">
                <th>Navigation Dots Background Color</th>
                <td>
                <input id="tm_nav_dot_bg_clr" name="tm_nav_dot_bg_clr" type="text" value="<?php echo $tm_nav_dot_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr class="ts_dot_group cn_ind_clr_enable_class" style="<?php if($templates_presets=='grid'){echo  "display:none";}?>" style="<?php if($tm_nav_type =='1'){echo  "display:none";}?>">
                <th>Navigation Dots Background Hover Color</th>
                <td>
                <input id="tm_nav_dot_hvr_clr" name="tm_nav_dot_hvr_clr" type="text" value="<?php echo $tm_nav_dot_hvr_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
                    </tbody>
                </table>

                               </div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div>
<!--End Carouset Setting-->



<!--Background Setting-->
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-background">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Popup Section Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-background">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                <table class="form-table tm_table">
                    <tbody>
                            <tr style="border-bottom:0px;">
                            </tr>
                            <tr>
                <th>Select Pop Up Effects:</th>
                <td>
                    <div class="widget">
                        <input onclick="return slide_left_right_hide();" type="radio" name="tm_pop_style" id="tm_pop_style-1"  value="modal"  <?php if($tm_pop_style == 'modal' ) { echo "checked"; } ?>>
                        <label for="radio-1">Modal</label>
                        <br/></br>
                         <input onclick="return slide_left_right_hide();" type="radio" name="tm_pop_style" id="tm_pop_style-2"  value="folding" <?php if($tm_pop_style == 'folding' ) { echo "checked"; } ?>>
                        <label for="radio-1">3D Folding</label>
                        <br/></br>
                         <input onclick="return slide_left_right();" type="radio" name="tm_pop_style" id="tm_pop_style-3" value="slide" <?php if($tm_pop_style == 'slide' ) { echo "checked"; } ?>>
                        <label for="radio-1">Slide</label>
                        <br/></br>
                        <!--slide letf right-->
                        <?php if($tm_pop_style == 'slide' )
                        {
                        ?>
                        <div id="tm_slide_left">
                        <?php
                        }
                        else
                        {
                        ?>
                        <div style="display: none;" id="tm_slide_left">
                        <?php    
                        }
                        ?>
                         &nbsp;&nbsp;&nbsp;<input  type="radio" name="tm_slide_left_right" id="tm_slide_left" value="left" <?php if($tm_slide_left_right == 'left' ) { echo "checked"; } ?>> Slide To Left 
                          <br/></br>
                     </div>
                     <?php if($tm_pop_style == 'slide' )
                        {
                        ?>
                        <div id="tm_slide_right">
                        <?php
                        }
                        else
                        {
                        ?>
                        <div style="display: none;" id="tm_slide_right">
                        <?php    
                        }
                        ?>
                          &nbsp;&nbsp;&nbsp;<input  type="radio" name="tm_slide_left_right" id="tm_slide_right" value="right" <?php if($tm_slide_left_right == 'right' ) { echo "checked"; } ?>> Slide To Right
                           <br/></br>
                      </div>
                          <!--end slide left right-->
                          
                        <input onclick="return slide_left_right_hide();" type="radio" name="tm_pop_style" id="tm_pop_style-4" value="no_popup" <?php if($tm_pop_style == 'no_popup' ) { echo "checked"; } ?>>
                        <label for="radio-1">None Of These</label>
                        <br/></br>
                    </div>
                </td>
            </tr>
            <tr>
                 <th>Select Pop Up Color Effects:</th>
                <td>
                    <div class="widget">
                        <?php
                        if(empty($tm_pop_color))
                        {
                        ?>
                        <input type="radio" name="tm_pop_color" id="tm_pop_color_dark"  value="dark" checked>
                        <?php
                        }
                        else
                        {
                         ?>
                         <input type="radio" name="tm_pop_color" id="tm_pop_color_dark"  value="dark"  <?php if($tm_pop_color == 'dark' ) { echo "checked"; } ?>>
                         <?php   
                        }
                        ?>
                        <label for="radio-1">Dark</label>
                        <br/></br>
                        <input type="radio" name="tm_pop_color" id="tm_pop_color_light"  value="light"  <?php if($tm_pop_color == 'light' ) { echo "checked"; } ?>>
                        <label for="radio-1">Light</label>
                        <br/></br>
                    </div>
                </td>
            </tr>
            <tr>
                <th style="display: none;">Select Section Background:</th>
                <td style="display: none;">
                    <div class="widget">
                        <input type="radio" name="tm_image_bg" id="radio-1" checked value="Transparent" onchange="ts_img_bg_select()" <?php if($tm_image_bg == 'Transparent' ) { echo "checked"; } ?>>
                        <label for="radio-1">Transparent</label>
                        <br/></br>
                        <input type="radio" name="tm_image_bg" id="radio-2" <?php if($tm_image_bg == 'Color' ) { echo "checked"; } ?>  value="Color" onchange="ts_img_bg_select()"<?php if($tm_image_bg == 'Color' ) { echo "checked"; } ?>>
                        <label for="radio-2">Color</label>
                        </br></br>
                        <input type="radio" name="tm_image_bg" id="radio-3"  <?php if($tm_image_bg == 'Image' ) { echo "checked"; } ?> value="Image" onchange="ts_img_bg_select()" <?php if($tm_image_bg == 'Image' ) { echo "checked"; } ?> >
                        <label for="radio-3">Image</label>
                    </div>
                    
                </td>
            </tr>
            
            <tr style="display: none;" class="ts_clr_bg_group" style="<?php if($tm_image_bg!='Color'){echo  "display:none";}?>">
                <th scope="row"><label><?php _e('Background Color',wpshopmart_team_pro_text_domain); ?></label></th>
                <td>
                <input id="team_bg_clr" name="team_bg_clr" type="text" value="<?php echo $team_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo  "display:none";}?>">
                <th scope="row"><label><?php _e('Background Image',wpshopmart_team_pro_text_domain); ?></label></th>
                <td>
                    <img src="<?php echo $team_favicon; ?>" style="width:200px; " class="csw-admin-img" />
                    <input type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload"  onclick="wpsm_media_upload(this)"/>

                    <input type="hidden" id="team_favicon" name="team_favicon" class="rcsp_label_text"  value="<?php echo $team_favicon; ?>"  readonly="readonly" placeholder="No Media Selected" />
                </td>
            </tr>
            
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo  "display:none";}?>">
                <th scope="row"><label><?php _e('Background Size',wpshopmart_team_pro_text_domain); ?></label></th>                    
                <td>
                    <select name="tm_bg_size" id="tm_bg_size" class="standard-dropdown" onchange="dropdown_select()" style="width:100%" >
                        <optgroup label="Default Size">
                            <option value="Cover" <?php if($tm_bg_size == 'Cover' ) { echo "selected"; } ?>>Cover</option>
                            <option value="Auto" <?php if($tm_bg_size == 'Auto' ) { echo "selected"; } ?>>Auto</option>
                            <option value="Contain" <?php if($tm_bg_size == 'Contain' ) { echo "selected"; } ?>>Contain</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo  "display:none";}?>">
                <th>Background Repeat</th>
                <td>
                    <?php if(!isset($tm_bg_repeat)) $tm_bg_repeat = "no-repeat";?>  
                    <select name="tm_bg_repeat" id="tm_bg_repeat" class="standard-dropdown" style="width:100%" >
                        <optgroup label="Default Repeat">
                        <option class="dropdown_group" value="inherit" <?php if($tm_bg_repeat == 'inherit' ) { echo "selected"; } ?>>inherit</option>
                        <option class="dropdown_group" value="repeat"  <?php if($tm_bg_repeat == 'repeat' ) { echo "selected"; } ?>>repeat</option>
                        <option class="dropdown_group" value="repeat-x" <?php if($tm_bg_repeat == 'repeat-x' ) { echo "selected"; } ?>>repeat-x</option>
                        <option class="dropdown_group" value="repeat-y" <?php if($tm_bg_repeat == 'repeat-y' ) { echo "selected"; } ?>>repeat-y</option>
                        <option class="dropdown_class" value="No-repeat" <?php if($tm_bg_repeat == 'No-repeat' ) { echo "selected"; } ?>>No-repeat</option>                 
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo  "display:none";}?>" >
                <th>Background Position</th>
                <td>
                    <?php if(!isset($tm_bg_position)) $tm_bg_position = "center center";?>  
                    <select name="tm_bg_position" id="tm_bg_position" class="standard-dropdown" style="width:100%" >
                        <optgroup label="Default Position">
                        <option value="left top" <?php if($tm_bg_position == 'left top' ) { echo "selected"; } ?>>left-top</option>
                        <option value="left center"   <?php if($tm_bg_position == 'left center' ) { echo "selected"; } ?>>left-center</option>
                        <option value="left bottom"    <?php if($tm_bg_position == 'left bottom' ) { echo "selected"; } ?>>left-bottom</option>
                        <option value="right top" <?php if(tm_bg_position) { echo "selected"; } ?>>right-top</option>
                        <option value="right center" <?php if($tm_bg_position == 'right center' ) { echo "selected"; } ?>>right-center</option>                 
                        <option value="right bottom" <?php if($tm_bg_position == 'right bottom' ) { echo "selected"; } ?>>right-bottom</option>
                        <option value="center top" <?php if($tm_bg_position == 'center top' ) { echo "selected"; } ?>>center-top</option>
                        <option value="center center" <?php if($tm_bg_position == 'center center' ) { echo "selected"; } ?>>center-center</option>
                        <option value="center bottom" <?php if($tm_bg_position == 'center bottom' ) { echo "selected"; } ?>>center-bottom</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo  "display:none";}?>">
                <th>Display Image Overlay
                </th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="tm_show_img_overlay" value="yes" id="enable_img_overlay" <?php if($tm_show_img_overlay == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_img_overlay" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="tm_show_img_overlay" value="no" id="disable_img_overlay"  <?php if($tm_show_img_overlay == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_img_overlay" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo "display:none";}?>">
                <th scope="row"><label><?php _e('Image Overlay Color',wpshopmart_team_pro_text_domain); ?></label></th>
                <td>
                <input id="tm_img_overlay_clr" name="tm_img_overlay_clr" type="text" value="<?php echo $tm_img_overlay_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr style="display: none;" class="setting_color ts_img_bg_group " style="<?php if($tm_image_bg!='Image'){echo "display:none";}?>" >
                <th>Background Overlay Opacity</th>
                <td>
                <div id="tm_img_bg_opacity_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_img_bg_opacity" name="tm_img_bg_opacity" readonly="readonly">
                </td>
            </tr>
            <tr style="display: none;" class="ts_img_bg_group" style="<?php if($tm_image_bg!='Image'){echo  "display:none";}?>">
                <th>Display Parallax Effect</th>
                <td>
                    <div class="switch">
                        <input type="radio" class="switch-input" name="
tm_show_prlex" value="yes" id="enable_show_prlex" <?php if($tm_show_prlex == 'yes' ) { echo "checked"; } ?>   >
                        <label for="enable_show_prlex" class="switch-label switch-label-off"><?php _e('Yes',wpshopmart_team_pro_text_domain); ?></label>
                        <input type="radio" class="switch-input" name="
tm_show_prlex" value="no" id="disable_show_prlex"  <?php if($tm_show_prlex == 'no' ) { echo "checked"; } ?> >
                        <label for="disable_show_prlex" class="switch-label switch-label-on"><?php _e('No',wpshopmart_team_pro_text_domain); ?></label>
                        <span class="switch-selection"></span>
                    </div>
                </td>
            </tr>
            <tr style="display: none;" class="setting_color">
                <th>Section Padding Left/Right</th>
                <td>
                <div id="tm_padding_LR_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_padding_LR" name="tm_padding_LR" readonly="readonly">
                </td>
            </tr>
            <tr style="display: none;" class="setting_color">
                <th>Section Padding Top/Bottom</th>
                <td>
                <div id="tm_padding_TB_id" class="size-slider" ></div>
                <input type="text" class="slider-text" id="tm_padding_TB" name="tm_padding_TB" readonly="readonly">
                </td>
            </tr>
                    </tbody>
                </table>

                               </div>
                                <!-- cd-panel-content -->
                            </div>
                            <!-- cd-panel-container -->
                        </div>
<!--Background Setting-->
<!--filter setting-->
 <div class="cd-panel from-right cn_ind_clr_enable_class " id="cd-panel-filter">
                            <header class="cd-panel-header team-heading-setting">
                                <h4>Filter Setting</h4>
                                <a href="#0" class="cd-panel-close" id="cd-panel-close-filter">Close</a>
                            </header>

                            <div class="cd-panel-container team-color-setting">
                               <div class="cd-panel-content">
                                <table class="form-table tm_table">
    <tbody>
            <tr style="border-bottom:0px;">
            </tr>

            <tr><th>Filter Background Color</th>
                <td>
                <input id="tm_filter_bg_clr" name="tm_filter_bg_clr" type="text" value="<?php echo $tm_filter_bg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
               </td>
            </tr>
            <tr><th>Filter Active Background Color</th>
                <td>
                <input id="tm_filter_activebg_clr" name="tm_filter_activebg_clr" type="text" value="<?php echo $tm_filter_activebg_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr><th>Filter Title Color</th>
                <td>
                <input id="tm_filter_title_clr" name="tm_filter_title_clr" type="text" value="<?php echo $tm_filter_title_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
               </td>
            </tr>
            <tr><th>Filter Active Title Color</th>
                <td>
                <input id="tm_filter_active_title_clr" name="tm_filter_active_title_clr" type="text" value="<?php echo $tm_filter_active_title_clr;?>" class="my-color-field" data-default-color="#e8e8e8" />
                </td>
            </tr>
            <tr style="border-bottom: 0;">
            
                <td class="myscrolldestination">
                <!--filter codes start-->
    <tr><th>Filter Category</th>
    <td>
        <?php
    $design_exit=get_post_meta(get_the_ID(),'filter_category_counts',true);

    if((!empty($design_exit) && (is_numeric($design_exit))))
    {
    $table_designation=unserialize(get_post_meta(get_the_ID(),'filter_category_info',true));

    $iteration=1;
    foreach($table_designation as $des_val)
    {
     ?>
    <input style="margin: 5px; width:80%;" type="text" class="filter_category_class" name="filter_category[]" value="<?php echo $des_val['filter_category'];?>" id="idfiltercategory_<?php echo $iteration;?>"  onchange="adding_dynamic_gm_designation(<?php echo $iteration;?>)"/>
        <a href="#" id="gm_dy_rm_class<?php echo $iteration;?>" class="append_des_rm_class" onclick="return rm_append_des(<?php echo $iteration;?>)"><span class="fa fa-trash-o" ></span></a>
        <?php
        $iteration++;
    }
}
?>
    <input type="hidden" value="<?php if(isset($iteration)) { if($iteration!="") {echo $iteration-1;}} ?>" id="iteration">          
    <span id="apnd_fcategory"></span>       
    <button type="button" id="add_fcategory" class="btn btn-primary">Add Category</button>  
    </td>
    </tr>
    <!-- filter code end-->
                </td>
            </tr>
    </tbody>
</table>

    </div>
   <!-- cd-panel-content -->
   </div>
    <!-- cd-panel-container -->
  </div>
<!--end filter setting-->
<script type="text/javascript">
function slide_left_right()
{
 jQuery("#tm_slide_left").show();
 jQuery("#tm_slide_right").show();   
} 
function slide_left_right_hide()
{
 jQuery("#tm_slide_left").hide();
 jQuery("#tm_slide_right").hide();   
} 


function wpsm_add_team() {

    if(jQuery("#name").val()=="") {
        jQuery("#name").css('border-color', 'red');
        return false;
    }  
    var re_filter_vals=jQuery("#filter_vals").val();  

    if(parseInt(re_filter_vals)==3) {
        var li_view='<li class="wpsm_filter_view">'; 

    } else {
     var li_view='<li class="wpsm_filter_view" style="display: none;">';   
    }

    total_team_counts=jQuery("#total_team_count").val(); 
    total_team_counts_val =1 + parseInt(total_team_counts);  
    jQuery("#total_team_count").val(total_team_counts_val); 
    jQuery(".popover").hide();    

    var team_member_name=jQuery("#name").val();    
    var more_team='<li onclick="show_team_box('+total_team_counts_val+')" class="wpsm-nav-item" id="wpsm_team_list_'+total_team_counts_val+'">'+
      '<input type="hidden" name="team_position[]" value="'+total_team_counts_val+'" />'+
      '<div class="wpsm-flexbox">'+
      '<div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">'+
       '<i class="wpsm-js-handle wpsm-icon wpsm-icon-draghandle wpsm-margin-right-sm wpsm-cursor-move ui-sortable-handle" title="Reorder"></i>'+
       '</div>'+
       '<div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">'+
        '<div class="wpsm-thumb wpsm-thumb-sm wpsm-margin-right-lg">'+
       '</div>'+
       '</div>'+
        '<div class="wpsm-flex-cell wpsm-vertical-middle" id="wpsm_list_name'+total_team_counts_val+'">'+team_member_name+'</div>'+
                '<div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">'+
                    '<a  href="#" id="'+total_team_counts_val+'" class="glyphicon glyphicon-trash text-danger wpsm-js-delete" title="Delete"></a>'+
                '</div>'+
            '</div>'+
        '</li>';

    var wpsm_js_add_team='<div  class="col-sm-8 wpsm_add_team">'+
                        '<div id="wpsm_team_info_container_'+total_team_counts_val+'" class="panel panel-default wpsm-main wpsm_add_team_hide">'+
                            '<div class="panel-body">'+
                            '<div class="wpsm-flexbox">'+
                            '<div class="wpsm-flex-cell wpsm-vertical-middle" style="width: 1%">'+
                            '<img class="pro-pic-wrapper"src="<?php echo wpshopmart_team_pro_directory_url."assets/images/user-pic.png";?>" alt="">'+
                            '<input style="color:#ffffff;" type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload btn-block"  onclick="wpsm_media_upload(this)"/>'+
                            '<input style="display:block;width:100%" type="hidden"  name="cs_photo[]" class="wpsm_tm_label_text"  value="<?php echo wpshopmart_team_pro_directory_url.'assets/images/user5.png'; ?>"  readonly="readonly" placeholder="No Media Selected" />'+
                            '<input style="display:block;width:100%" type="hidden"  name="cs_id[]" class="wpsm_tm_label_text"  value="0"  readonly="readonly" placeholder="No Media Selected" />'+

                                           
                                             
                            '</div>'+
                            '<div class="wpsm-flex-cell wpsm-vertical-top">'+
                            '<h3 id="display_wpsm_team_name'+total_team_counts_val+'">'+team_member_name+'</h3>'+
                            '</div>'+
                            '</div>'+
                                 
                            '<ul class="nav nav-tabs nav-justified clearfix wpsm-nav-justified">'+
                            '<li class="active">'+
                            '<a id="wpsm-details-tab" href="#details'+total_team_counts_val+'" data-toggle="tab" aria-expanded="true">'+
                            '<i class="glyphicon glyphicon-info-sign"></i>'+
                            '<span class="wpsm-nav-tabs-title">Details</span>'+
                            '</a>'+
                            '</li>'+
                            '<li class="">'+
                            '<a id="wpsm-social-tab" href="#socialtab'+total_team_counts_val+'" data-toggle="tab" aria-expanded="false">'+
                            '<i class="glyphicon glyphicon-ok-sign"></i>'+
                            '<span class="wpsm-nav-tabs-title">Social</span>'+
                            '</a>'+
                            '</li>'+
                            li_view+
                            '<a id="wpsm-social-tab" href="#filterstab'+total_team_counts_val+'" data-toggle="tab" aria-expanded="false">'+
                            '<i class="glyphicon glyphicon-search"></i>'+
                            '<span class="wpsm-nav-tabs-title">Filter Category</span>'+
                            '</a>'+
                            '</li>'+

                            '</ul>'+
                            '<div class="tab-content">'+
                            '<div class="tab-pane fade in active" id="details'+total_team_counts_val+'">'+
                                            '<div id="wpsm-details-container">'+
                                           
                                                    '<div class="form-group">'+
                                                        '<label for="wpsm-full-name">Full name</label>'+
                                                        '<input type="text" class="form-control wpsm_team_member_fullname" id="wpsmfullname_'+total_team_counts_val+'" name="cs_name[]" value="'+team_member_name+'">'+
                                                    '</div>'+

                                                    '<div class="row">'+
                                                        '<div class="col-sm-6">'+
                                                            '<div class="form-group">'+
                                                                '<label for="wpsm-email">Email</label>'+
                                                                '<input class="form-control" id="wpsm-email" name="cs_email[]" value="nick.knight@example.com" type="text">'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="col-sm-6">'+
                                                            '<div class="form-group">'+
                                                                '<label for="wpsm-phone">Phone</label>'+
                                                                '<input class="form-control" id="wpsm-phone" name="cs_phone[]" value="+91-89898989898" type="text">'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row">'+
                                                        '<div class="col-sm-6">'+
                                                            '<div class="form-group">'+
                                                                '<label for="wpsm-email">Website</label>'+
                                                                '<input class="form-control" id="wpsm-website" name="cs_webname[]" value="website name" type="text">'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="col-sm-6">'+
                                                            '<div class="form-group">'+
                                                                '<label for="wpsm-phone">Website URL</label>'+
                                                                '<input class="form-control" id="wpsm-address" name="cs_website[]" value="address" type="text">'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="form-group">'+
                                                        '<label for="wpsm-info">Position</label>'+
                                                        '<input class="form-control" id="wpsm-position" name="cs_posi[]" value="position" type="text">'+
                                                    '</div>'+
                                                    '<div class="form-group">'+
                                                        '<label for="wpsm-info">Address</label>'+
                                                        '<textarea id="wpsm-details" name="cs_add[]" rows="3" class="form-control"></textarea>'+
                                                    '</div>'+
                                                    '<div class="form-group">'+
                                                        '<label for="wpsm-info">Details</label>'+
                                                        '<textarea id="wpsm-details" name="cs_desc[]" rows="5" class="form-control"></textarea>'+
                                                    '</div>'+                                              
                                               
                                            '</div>'+
                                        '</div>'+
                                        '<div class="tab-pane fade" id="socialtab'+total_team_counts_val+'">'+
                                                '<div class="row clearfix">'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Facebook Profile URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-facebook" name="fb_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Twitter URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-twitter" name="tw_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Youtube URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="yt_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Google Plus URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="gplus_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Linkedin URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="lkd_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Tumbler URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="tumb_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Instagram URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="ins_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Pinterest URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="pin_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Skype URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="sky_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Reddit URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="red_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Vimeo URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="vmo_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Behance URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="be_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                     '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Dribbble URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="drib_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">flickr URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="flic_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Whatsapp URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="whastapp_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Snapchat URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="snap_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Telegram URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="tele_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">We Chat URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="wechat_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">VK URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-youtube" name="imo_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label for="wpsm-full-name">Stackover Flow URL</label>'+
                                                            '<input type="text" class="form-control" id="wpsm-gplus" name="baidoo_url[]" value="">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                       
                                        '</div>'+
                                        '<div class="tab-pane fade" id="filterstab'+total_team_counts_val+'">'+
                                            '<div id="wpsm-details-container">'+
                                                '<div class="form-group">'+
                                                      '<label for="wpsm-info">Add Filter Category</label>'+
                                                      '<select id="apended_option'+total_team_counts+'" class="append_filter_categoy wpsm_tm_label_text" name="cs_categoryfilter'+total_team_counts+'[]" multiple=""><option value="">Select Filter Category</option></select>'+
                                                    '</div>'+                                                                          
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                           '</div>' ;                           
    jQuery("#wpsm-team-list").append(more_team);
    jQuery(".wpsm_add_team_hide").hide('');
    jQuery(".wpsm_team_append").append(wpsm_js_add_team);

    jQuery('.filter_category_class').each(function() {
    var split_gm_designation_id=jQuery(this).attr('id').split("_");
    //console.log(split_gm_designation_id[1]);
    //alert(split_gm_designation_id[1]);

    jQuery("#apended_option"+total_team_counts).append('<option class="option_id'+split_gm_designation_id[1]+'" value="'+$(this).val()+'">'+$(this).val()+'</option>');
 
    }
    );

    jQuery(".wpsm_team_member_fullname").keyup(function(){
        var wpsm_name_id=jQuery(this).attr("id");
        var wpsm_name_split=wpsm_name_id.split("_");
        jQuery("#display_wpsm_team_name"+wpsm_name_split[1]).html(jQuery(this).val());
        jQuery("#wpsm_list_name"+wpsm_name_split[1]).html(jQuery(this).val());
    });

    jQuery("#wpsm-team-list li").each( function( index ) {

        var element_id = jQuery(this).attr("id");

        jQuery( "#" + element_id +'> input' ).val( index );

       
    });


} 




function show_team_box(id)
{
jQuery(".wpsm_add_team").show();    
jQuery(".wpsm_add_team_hide").hide();
jQuery("#wpsm_team_info_container_"+id).show()
jQuery(".wpsm-nav-item").removeClass("active");
jQuery("#wpsm_team_list_"+id).addClass("active");

}



</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_box_opacity_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 10,
        min:0,
        slide: function( event, ui ) {
        jQuery( "#tm_box_opacity" ).val( ui.value );
      }
        });
        jQuery( "#tm_box_opacity_id" ).slider("value",<?php if(isset($tm_box_opacity)){ echo $tm_box_opacity; } else{ echo 5; } ?> );
        jQuery( "#tm_box_opacity" ).val( jQuery( "#tm_box_opacity_id" ).slider("value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_img_hover_opcity_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 10,
        min:0,
        slide: function( event, ui ) {
        jQuery( "#tm_img_hover_opcity" ).val( ui.value );
      }
        });
        jQuery( "#tm_img_hover_opcity_id" ).slider("value",<?php if(isset($tm_img_hover_opcity)){ echo $tm_img_hover_opcity; } else{ echo 5; } ?> );
        jQuery( "#tm_img_hover_opcity" ).val( jQuery( "#tm_img_hover_opcity_id" ).slider("value") );
    
  });
</script>

<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#my_social_icon_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 30,
        min:8,
        slide: function( event, ui ) {
        jQuery( "#team_social_icon_size" ).val( ui.value );
      }
        });
        jQuery( "#my_social_icon_size_id" ).slider("value",<?php if(isset($team_social_icon_size)){ echo $team_social_icon_size; } else{ echo 20; } ?> );
        jQuery( "#team_social_icon_size" ).val( jQuery( "#my_social_icon_size_id" ).slider("value") );
    
  });
</script>
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_sec_title_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 80,
        min:10,
        slide: function( event, ui ) {
        jQuery( "#tm_sec_title_size" ).val( ui.value );
      }
        });
        
        jQuery( "#tm_sec_title_size_id" ).slider("value",<?php if(isset($tm_sec_title_size)){ echo $tm_sec_title_size; } else{ echo 36; } ?> );
        jQuery( "#tm_sec_title_size" ).val( jQuery( "#tm_sec_title_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_name_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 40,
        min:8,
        slide: function( event, ui ) {
        jQuery( "#tm_name_size" ).val( ui.value );
      }
        });
        jQuery( "#tm_name_size_id" ).slider("value",<?php if(isset($tm_name_size)){ echo $tm_name_size; } else{ echo 20; } ?> );
        jQuery( "#tm_name_size" ).val( jQuery( "#tm_name_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_email_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max:18,
        min:5,
        slide: function( event, ui ) {
        jQuery( "#tm_email_size" ).val( ui.value );
      }
        });
        jQuery( "#tm_email_size_id" ).slider("value",<?php if(isset($tm_email_size)){ echo $tm_email_size; } else{ echo 12; } ?> );
        jQuery( "#tm_email_size" ).val( jQuery( "#tm_email_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_website_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 18,
        min:5,
        slide: function( event, ui ) {
        jQuery( "#tm_website_size" ).val( ui.value );
      }
        });
        jQuery( "#tm_website_size_id" ).slider("value",<?php if(isset($tm_website_size)){ echo $tm_website_size; } else{ echo 12; } ?> );
        jQuery( "#tm_website_size" ).val( jQuery( "#tm_website_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_position_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 20,
        min:8,
        slide: function( event, ui ) {
        jQuery( "#tm_position_size" ).val( ui.value );
      }
        });
        jQuery( "#tm_position_size_id" ).slider("value",<?php if(isset($tm_position_size)){ echo $tm_position_size; } else{ echo 13; } ?> );
        jQuery( "#tm_position_size" ).val( jQuery( "#tm_position_size_id" ).slider( "value") );
    
  });
</script>
<script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_content_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max:50,
        min:8,
        slide: function( event, ui ) {
        jQuery( "#tm_content_size" ).val( ui.value );
      }
        });
        jQuery( "#tm_content_size_id" ).slider("value",<?php if(isset($tm_content_size)){ echo $tm_content_size; } else{ echo 36; } ?> );
        jQuery( "#tm_content_size" ).val( jQuery( "#tm_content_size_id" ).slider( "value") );
    
  });
</script>
<script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_sec_title_weight_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 900,
            min:100,
            step: 100,
            slide: function( event, ui ) {
            jQuery( "#tm_sec_title_weight" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_sec_title_weight_id" ).slider("value",<?php if(isset($tm_sec_title_weight)){ echo $tm_sec_title_weight; } else{ echo 500; }  ?>);
        jQuery( "#tm_sec_title_weight" ).val( jQuery( "#tm_sec_title_weight_id" ).slider( "value") );

    });
</script> 
<script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_name_weight_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 900,
            min:100,
            step: 100,
            slide: function( event, ui ) {
            jQuery( "#tm_name_weight" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_name_weight_id" ).slider("value",<?php if(isset($tm_name_weight)){ echo $tm_name_weight; } else{ echo 500; }  ?>);
        jQuery( "#tm_name_weight" ).val( jQuery( "#tm_name_weight_id" ).slider( "value") );

    });
</script> 
<script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_position_weight_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 900,
            min:100,
            step: 100,
            slide: function( event, ui ) {
            jQuery( "#tm_position_weight" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_position_weight_id" ).slider("value",<?php if(isset($tm_position_weight)){ echo $tm_position_weight; } else{ echo 500; }  ?>);
        jQuery( "#tm_position_weight" ).val( jQuery( "#tm_position_weight_id" ).slider( "value") );

    });
</script> 
<script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_content_weight_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 900,
            min:100,
            step: 100,
            slide: function( event, ui ) {
            jQuery( "#tm_content_weight" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_content_weight_id" ).slider("value",<?php if(isset($tm_content_weight)){ echo $tm_content_weight; } else{ echo 500; }  ?>);
        jQuery( "#tm_content_weight" ).val( jQuery( "#tm_content_weight_id" ).slider( "value") );

    });
</script> 
<script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_content_line_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 50,
            min:14,
            slide: function( event, ui ) {
            jQuery( "#tm_content_line" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_content_line_id" ).slider("value",<?php if(isset($tm_content_line)){ echo $tm_content_line; } else{ echo 24; }  ?>);
        jQuery( "#tm_content_line" ).val( jQuery( "#tm_content_line_id" ).slider( "value") );

    });
</script> 
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#ts_star_shdw_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 5,
        min:-5,
        slide: function( event, ui ) {
        jQuery( "#ts_star_shdw" ).val( ui.value );
      }
        });
        jQuery( "#ts_star_shdw_id" ).slider("value",<?php if(isset($ts_star_shdw)){ echo $ts_star_shdw; } else{ echo 1; } ?> );
        jQuery( "#ts_star_shdw" ).val( jQuery( "#ts_star_shdw_id" ).slider("value") );
    
  });
</script>
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#tm_img_bg_opacity_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 10,
        min:0,
        slide: function( event, ui ) {
        jQuery( "#tm_img_bg_opacity" ).val( ui.value );
      }
        });
        jQuery( "#tm_img_bg_opacity_id" ).slider("value",<?php if(isset($tm_img_bg_opacity)){ echo $tm_img_bg_opacity; } else{ echo 5; } ?> );
        jQuery( "#tm_img_bg_opacity" ).val( jQuery( "#tm_img_bg_opacity_id" ).slider( "value") );
    
  });
</script>
<Script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_padding_LR_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 400,
            min:1,
            slide: function( event, ui ) {
            jQuery( "#tm_padding_LR" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_padding_LR_id" ).slider("value",<?php if(isset($tm_padding_LR)){ echo $tm_padding_LR; } else{ echo 50; }  ?>);
        jQuery( "#tm_padding_LR" ).val( jQuery( "#tm_padding_LR_id" ).slider( "value") );

    });
</script> 
<Script>
    //font slider size script
    jQuery(function() {
        jQuery( "#tm_padding_TB_id" ).slider({
            orientation: "horizontal",
            range: "min",
            max: 400,
            min:1,
            slide: function( event, ui ) {
            jQuery( "#tm_padding_TB" ).val( ui.value );
          }
        });
        
        jQuery( "#tm_padding_TB_id" ).slider("value",<?php if(isset($tm_padding_TB)){ echo $tm_padding_TB; } else{ echo 50; }  ?>);
        jQuery( "#tm_padding_TB" ).val( jQuery( "#tm_padding_TB_id" ).slider( "value") );

    });
</script> 
<script>
function get_font_group(){
      
     var family_group = jQuery('#font_family option:selected').closest('optgroup').prop('label');
     jQuery("#font_family_group").val(family_group);
            
  }
</script>
<Script>
 //minimum flake size script
  jQuery(function() {
    jQuery( "#my_social_icon_size_id" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 30,
        min:8,
        slide: function( event, ui ) {
        jQuery( "#team_social_icon_size" ).val( ui.value );
      }
        });
        jQuery( "#my_social_icon_size_id" ).slider("value",<?php if(isset($team_social_icon_size)){ echo $team_social_icon_size; } else{ echo 20; } ?> );
        jQuery( "#team_social_icon_size" ).val( jQuery( "#my_social_icon_size_id" ).slider("value") );
    
  });
</script>
<script>
        function ts_img_bg_select(){
            
             value = jQuery("input[name=tm_image_bg]:checked").val();
             
             if(value=="Color"){
                jQuery(".ts_clr_bg_group").show(300);
                jQuery(".ts_img_bg_group").hide(300);
            }
            else if(value=="Image"){
                jQuery(".ts_img_bg_group").show(300);
                jQuery(".ts_clr_bg_group").hide(300);
            }
            else{
                jQuery(".ts_img_bg_group").hide(300);
                jQuery(".ts_clr_bg_group").hide(300);
                
            }
            
        }
</script>
<script>
        function ts_nav_select(){
            
             value = jQuery("input[name=tm_nav_type]:checked").val();
             
             if(value=="1"){
                jQuery(".ts_btn_group").show(300);
                jQuery(".ts_dot_group").hide(300);
            }
            else if(value=="2"){
                jQuery(".ts_dot_group").show(300);
                jQuery(".ts_btn_group").hide(300);
            }
            else{
                jQuery(".ts_dot_group").show(300);
                jQuery(".ts_btn_group").show(300);
                
            }
            
        }
</script>
<script>
        function ts_btn_select(){
            
             value = jQuery("input[name=tm_nav_type]:checked").val();
             
             if(value=="Text"){
                jQuery(".ts_text_group").show(300);
                jQuery(".ts_icon_group").hide(300);
            }
            else if(value=="Icon"){
                jQuery(".ts_icon_group").show(300);
                jQuery(".ts_text_group").hide(300);
            }
            else{
                jQuery(".ts_text_group").show(300);
                jQuery(".ts_icon_group").show(300);
                
            }
            
        }
</script>
<script>
//select navigation btn icon  type
function select_btn_icon(id){
    jQuery(".ts_btn_icon_wrapper").removeClass("active");
    jQuery("#ts_btn_icon_"+id).addClass("active");
    jQuery("#tm_nav_btn_icon"+id).prop( "checked", true );
}
</script>

<!-- filter category script-->
<script type="text/javascript">
jQuery(document).ready(function(){
var iteration=jQuery("#iteration").val();
    if(iteration=="")
    {
        var dycount=0;
        //console.log(dycount);
    }
    else
    {
        var dycount=iteration;
        //console.log(dycount);
    }   
jQuery("#add_fcategory").click(function(){
    //alert(dycount++);
   
    jQuery("#flt_div").show();
    //jQuery(".show_flt_slt_opt").show()
jQuery("#apnd_fcategory").append('<input style="margin: 5px;width: 90%;" type="text" class="filter_category_class" name="filter_category[]" id="idfiltercategory_'+dycount+'" onchange="append_filter_value('+dycount+')"/><a href="#" id="gm_dy_rm_class'+dycount+'" class="append_des_rm_class" onclick="return rm_append_des('+dycount+')"><span class="fa fa-trash-o"></span></a>');
});

})  
</script>

<!-- remove button box-->
<script type="text/javascript">
function rm_append_des(id)
{
jQuery("#idfiltercategory_"+id).remove();   
jQuery("#gm_dy_rm_class"+id).remove();  
jQuery(".option_id"+id).remove();
return false;
//console.log(id);
}  
</script>

<!-- adding select option to select box-->
<script type="text/javascript">
function append_filter_value(id)
{
var apnd_opt_val=jQuery(".option_id"+id).val();
if(typeof(apnd_opt_val)  === "undefined")
{
    //alert('ok');
    var txtbox_val=jQuery("#idfiltercategory_"+id).val();
    jQuery(".append_filter_categoy").append('<option class="option_id'+id+'" value="'+txtbox_val+'">'+txtbox_val+'</option');
}
else
{
    //alert('not ok');
    var txtbox_val=jQuery("#idfiltercategory_"+id).val();
    jQuery(".option_id"+id).html('<option class="option_id'+id+'" value="'+txtbox_val+'">'+txtbox_val+'</option');
}
}   
function adding_dynamic_gm_designation(id)
{
    var apnd_opt_val=jQuery("#idfiltercategory_"+id).val();
    jQuery(".option_id"+id).html('<option class="option_id'+id+'" value="'+apnd_opt_val+'">'+apnd_opt_val+'</option');
}   
</script>
<script>
    jQuery(function(jQuery) {
            var colorbox = 
            {
                wpsm_team_list: '',
                init: function() {
                    this.wpsm_team_list = jQuery('#wpsm-team-list');

                    this.wpsm_team_list.on('click', '.wpsm-js-delete', function() {
                        

                        var closest_li = jQuery(this).closest('.wpsm-nav-item').attr("id");
                        closest_li  = jQuery( '#' + closest_li ).next().attr("id") ;
                        var order =  jQuery(  '#' + closest_li + ' input'  ).val();




                        //
                    if ( confirm('Are you sure you want to delete this?') ) {

                        

                        //
                        var wpsm_team_removeid=jQuery(this).attr("id");
                        jQuery(  '#' + closest_li + ' input'  ).val(wpsm_team_removeid);
                        

                        jQuery(this).closest('li').slideUp(600, function() {
                            jQuery(this).closest('li').remove();

                            

                            jQuery("#wpsm_team_info_container_"+wpsm_team_removeid).remove();

                           

                            var next_team = 1 + parseInt(wpsm_team_removeid);
                            jQuery("#wpsm_team_info_container_"+next_team).show();



                            jQuery("#wpsm-team-list li").each( function( index ) {

                                var element_id = jQuery(this).attr("id");

                                jQuery( "#" + element_id +'> input' ).val( index );

                               

                            });
                        });    
                             
                    }
                    return false;
                    });
                    
                    
               }
            };
        colorbox.init();
    });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery(".wpsm_team_member_fullname").keyup(function(){
var wpsm_name_id=jQuery(this).attr("id");
var wpsm_name_split=wpsm_name_id.split("_");
jQuery("#display_wpsm_team_name"+wpsm_name_split[1]).html(jQuery(this).val());
jQuery("#wpsm_list_name"+wpsm_name_split[1]).html(jQuery(this).val());
});
});    
</script>