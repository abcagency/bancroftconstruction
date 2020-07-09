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
  margin: 30px auto;
  text-align: center;
  overflow: hidden;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar {
  border-radius: 500px;
  position: relative;
  margin:15px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img {
 border-radius:500px
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar:after {
  content: "";
  border-radius: 50%;
  border:15px solid transparent;
  position: absolute;
  top: -12px;
  left: -12px;
  bottom: -12px;
  right: -12px;
  border-color: <?php echo $tm_img_border_clr;?> transparent transparent <?php echo $tm_img_border_clr;?>;
  z-index: 1;
  -webkit-transform: rotate(-10deg);
      -ms-transform: rotate(-10deg);
          transform: rotate(-10deg);
  -webkit-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar:after {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg);
  border-color: <?php echo $tm_img_hover_clr;?> transparent transparent <?php echo $tm_img_hover_clr;?>;
}
.team-member{
  margin-top:25px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  padding-bottom: 10px;
  margin-bottom:15px;
  display: block;
  position: relative;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name:after {
  content: "";
  width: 30px;
  height: 2px;
  background: <?php echo $tm_sibg_clr;?>;
  margin: 0 auto;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
  display: block;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  font-style: italic;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  list-style: none;
  padding: 0;
  margin-top: 20px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  display: inline-block;
  width: 30px;
  height: 30px;
  line-height: 30px;
  border-radius: 50%;
  background: <?php echo $tm_sibg_clr;?>;
  font-size: 14px;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover {
  background: <?php echo $tm_sihbg_clr;?>;
  color: <?php echo $tm_sih_clr;?>;
}

<?php echo $custom_css;

 ?>
</style>