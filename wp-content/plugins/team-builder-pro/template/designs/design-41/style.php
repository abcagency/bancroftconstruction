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
  margin: 20px auto;
  position: relative;
  overflow: hidden;
  text-align: center; 
  -webkit-transition: all 0.4s ease 0s; 
  -o-transition: all 0.4s ease 0s; 
  transition: all 0.4s ease 0s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  width: 100%;
background: <?php echo $tm_content_bg_clr;?>;
  color: #fff;
  padding: 15px 0 20px 0;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 0;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  padding-bottom:60px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  content: "";
  width:100%;
  height:170px;
background: <?php echo $tm_content_bg_clr;?>;
  position: absolute;
  top: -18px;
  -webkit-transform: skewY(15deg);
      -ms-transform: skewY(15deg);
          transform: skewY(15deg);
  z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:before {
  left: -3%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  right: -3%;
  -webkit-transform: skewY(-15deg);
      -ms-transform: skewY(-15deg);
          transform: skewY(-15deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
    width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  list-style: none;
  padding: 15px 0;
  margin: 0;
  position: absolute;
  bottom: -40px;
  right: 0;
  left: 0;
  -webkit-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social {
  bottom:0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
  color: <?php echo $tm_si_clr;?>;
  font-size: 15px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  margin-bottom:5px;
  display: block;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
<?php echo $custom_css;

 ?>
</style>