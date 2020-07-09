<?php 
$RGB = wpsm_hex2rgb_team_pro($tm_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);
$RGB2 = wpsm_hex2rgb_team_pro($tm_img_hover_clr);
$HoverColorRGB2 = implode(", ", $RGB2);
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');

#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
    position:relative;
    font-family:'<?php echo $font_family;?>';
    letter-spacing:2px;
    font-size:<?php echo $tm_sec_title_size;?>px;
    color:<?php echo $tm_sec_title_clr ;?>;
    font-weight:<?php echo $tm_sec_title_weight ;?>;
    margin-bottom:30px;
    text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-teamsocial-icons
{
 font: normal normal normal <?php echo $team_social_icon_size;?>px/1 FontAwesome !important; 
}

#wpsm_team_pro_row_<?php echo $post_id; ?> img {
    width: 100%;
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-section {
    padding: 0 15px;
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> .my-container {
    max-width: 1170px;
    margin: 0 auto;
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> ul, #wpsm_team_pro_row_<?php echo $post_id; ?> li {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
    text-decoration: none;
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
    margin: 0;
    padding: 0
  }
  
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
      text-align: center;
      margin-bottom: 30px;
    background: <?php echo $tm_content_bg_clr; ?>;
    -webkit-transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -o-transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover {
background: <?php echo $tm_bg_content_hover_clr;?>;
  }

  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
    position: relative;
    overflow: hidden;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .overley {
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
   <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
    top: 0;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -o-transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -webkit-transform: scale(0.8);
        -ms-transform: scale(0.8);
            transform: scale(0.8);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
  }
  

  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overley {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scale(1);
        -ms-transform: scale(1);
            transform: scale(1);
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-content {
    width: 100%;
}
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-description {
    position: relative;
       font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
    padding: 15px;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-description:before {
    position: absolute;
    top: -30px;
    left: 0;
    right: 0;
    content: "\f10d";
    font-family: fontawesome;
    color: <?php echo $tm_quote_clr;?>;
    font-size: 24px;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .social{
    margin: 0;
    padding: 0;
    list-style: none;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
    display: inline-block;
    margin-right: 10px;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
    display: block;
    -webkit-transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    -o-transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    width: 40px;
    height: 40px;
    border: 1px solid <?php echo $tm_sib_clr;?>;
    color: <?php echo $tm_si_clr;?>;
    line-height: 40px;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover {
    background: <?php echo $tm_sihbg_clr;?>;
    color:<?php echo $tm_sih_clr;?>;;
    border-color: <?php echo $tm_sibh_clr;?>;
  }

  #wpsm_team_pro_row_<?php echo $post_id; ?> .social li i {
    font-size: 16px;
    font-weight: 300;
    color: #ffffff;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
    padding: 30px;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
    margin-bottom: 9px;
   font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
    text-transform: uppercase;
    display: block;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
    text-transform: capitalize;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name 
{
 color:<?php echo $tm_name_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position {
 color:<?php echo $tm_position_hover_clr;?>;
}


<?php echo $custom_css;

 ?>
</style>