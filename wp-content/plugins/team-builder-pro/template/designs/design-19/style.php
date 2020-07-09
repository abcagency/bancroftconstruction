<?php 
$RGB = wpsm_hex2rgb_team_pro($tm_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
  margin: 20px auto;
  text-align: center;
  overflow: hidden;
  position: relative;
  background: #42a2dc;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  z-index: 10;
  -webkit-transition: -webkit-transform 0.4s;
  -moz-transition: -moz-transform 0.4s;
  transition: transform 0.4s;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar img {
  -webkit-transform: translateY(-70px) scale(0.5);
  -moz-transform: translateY(-70px) scale(0.5);
  -ms-transform: translateY(-70px) scale(0.5);
  transform: translateY(-70px) scale(0.5);
  border-radius: 500px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  height: 100%;
  width: 100%;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  padding: 20px;
background: <?php echo $tm_content_bg_clr;?>;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  margin-top:65%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  margin-bottom:7px;
  display: block;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  list-style: none;
  padding: 0;
  margin-top: 15px;
  transition: all .3s ease .2s;
  transform: scaleX(0);
  position: relative;
  text-align: center;
  z-index: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social::after{
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background-color: <?php echo $tm_sihbg_clr;?>;
  z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  transform: scaleX(1)  
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
  font-size: 15px;
  color: <?php echo $tm_si_clr;?>;
  transition: all 0.3s ease-out 0s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover {
  color: <?php echo $tm_sih_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>