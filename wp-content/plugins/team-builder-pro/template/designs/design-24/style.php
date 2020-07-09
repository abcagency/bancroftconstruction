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
  background: #000;
  text-align: center;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  position: relative;
  margin:20px auto;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar {
  position: relative;
  z-index: 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar::before {
  content: "";
 <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 11;
  opacity: 0;
  transition: all 0.55s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar::before {
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  padding: 5px 10px 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  opacity: 0;
  transform: rotate(45deg) translate(-50%, -50%);
  transform-origin: 0 0;
  transition: all 0.55s ease 0s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:before, #wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  content: "";
  width: 500px;
  height: 2px;
  background: <?php echo $tm_img_border_clr;?>;
  position: absolute;
  top: 0;
  left: 10px;
  transform: translateX(100%);
  transition: all 0.55s ease 0s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  top: auto;
  left: auto;
  bottom: 0;
  right: 10px;
  transform: translateX(-100%);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info:after {
  transform: translate(0, 0);
  transition-delay: 0.15s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:after {
  content: "";
  width: 2px;
  height: 500px;
  background: <?php echo $tm_img_border_clr;?>;
  position: absolute;
  top: 10px;
  right: 0;
  transform: translateY(100%);
  transition: all 0.55s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:after {
  top: auto;
  right: auto;
  bottom: 10px;
  left: 0;
  transform: translateY(-100%);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay:after {
  transform: translate(0, 0);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  text-transform: uppercase;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
  padding: 5px 10px;
  background: <?php echo $tm_img_border_clr;?>;
    font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
  margin: 5px 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  display: block;
  color: <?php echo $tm_si_clr;?>;
  font-size: 15px;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
} 
<?php echo $custom_css;

 ?>
</style>