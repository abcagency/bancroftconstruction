<style type="text/css">

#wpsm_team_pro_row_<?php echo $post_id; ?> img {
    width: 100%;
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> .gridder{
    font-size: 0;
    letter-spacing: 0;
    word-spacing: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder::after{
    display: table;
    content: "";
    clear: both;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-list {
    display: inline-block;
    vertical-align: top;
    float: none;
    font-size: 15px;
    cursor: pointer;
    word-spacing: normal;
    letter-spacing: normal;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-gridder-show {
    display: block;
    float: left;
    width: 100%;
    position: relative;
    font-size: 15px;
    padding: 0 15px;
    color: #666;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-gridder-padding{
    padding: 40px;
    background: <?php echo $tm_pop_bg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-gridder-navigation{
    padding:13px 0;
    margin-bottom:30px;
    border-bottom: 1px solid #ccc;
    position: relative;
    padding-top: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-content {
    display: none
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-close {
    color: #111;
    position: absolute;
    width: 30px;
    height: 30px;
    top: 0;
    right: 0;
    cursor: pointer;
    z-index: 9;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-close::before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-close::after {
    content: '';
    position: absolute;
    width: 100%;
    top: 50%;
    height:2px;
    background: #666;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
        transform: rotate(45deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-close::after {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-nav.prev,
#wpsm_team_pro_row_<?php echo $post_id; ?> .gridder-nav.next{
    font-size: 40px;
    line-height: 1;
    margin-right: 40px;
    color: #666 !important;
    opacity: 1;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .next.disabled,
#wpsm_team_pro_row_<?php echo $post_id; ?> .prev.disabled{
  opacity: .1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-expanded-content{
    height:280px;
    overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-expanded-content .team-popup-name{
    margin: 0;
    text-transform: capitalize;
    margin-bottom: 5px;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
          <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
  font-weight:<?php echo $tm_name_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-expanded-content .team-popup-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
          <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
  font-weight:<?php echo $tm_position_weight ;?>;
    text-transform: capitalize;
    margin-bottom: 25px !important;
    display: inline-block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-content{
    padding-bottom:10px;
    border-bottom:1px dashed #ccc;
    margin-bottom: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-content p{
    margin:15px 0 !important;
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
            <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-img{
    margin-bottom: 35px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-contact{
    padding-left: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-contact li{
   margin: 15px 0 !important;
   padding-left: 0;   
   display: -webkit-box;   
   display: -ms-flexbox;   
   display: flex;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-contact li i{
    height: 30px;
    width: 30px;
            <?php
    if($tm_pop_color=="light")
    {
    ?>
    background-color:#fff;
    color: #000;
    <?php  
    }
    else
    {
    ?>
    background-color:#000;
    color: #fff;
    <?php
    }
    ?>

    font-size: 15px;
    text-align: center;
    line-height: 30px;
    margin-right: 20px;
    position: absolute;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-contact li span{
    margin-left: 40px;
    padding: 2px 0 5px;    
           <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-social h5{
    font-size: 18px;
    font-weight:600;
            <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
    text-transform: uppercase;
    margin-bottom:12px;
}
.team-popup-social li{
    display: inline-block;
    margin: 5px !important;
    margin-left: 0 !important;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-social ul a{
    height: 35px;
    width: 35px;
    <?php
    if($tm_pop_color=="light")
    {
    ?>
    border: 1px solid #fff;
    color: #fff !important;
    <?php
    }
    else
    {
    ?>
    border: 1px solid #000;
    color: #000 !important;
    <?php
    }
    ?>

    font-size: 16px;
    display: block;
    text-align: center;
    line-height: 35px;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-social ul a:hover{

      <?php
    if($tm_pop_color=="light")
    {
    ?>
    background-color: #fff;
    color: #000 !important;
    <?php
    }
    else
    {
    ?>
    background-color: #000;
    color: #fff !important;
    <?php
    }
    ?>
}
@media(max-width:768px){
    #wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-contact{
        margin-bottom:40px;
    }
}	
</style>