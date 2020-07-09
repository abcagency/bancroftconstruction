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

#wpsm_team_pro_row_<?php echo $post_id; ?> .social, #wpsm_team_pro_row_<?php echo $post_id; ?> li {
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
  margin: 20px auto;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar {
  border-radius: 50%;
  overflow: hidden;
  border: 12px solid <?php echo $tm_img_border_clr;?>;
  width: 170px;
  margin: auto;
  position: relative;
  z-index: 10;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  padding: 60px 15px 20px;
  margin-top: -51px;
  text-align: center;
  position: relative;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  background: <?php echo $tm_content_bg_clr;?>;
  color: #868686;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  margin-top: 15px;
  text-transform: capitalize;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
  margin : 10px 0;
  text-transform:uppercase;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  padding: 0 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a{
  color: <?php echo $tm_si_clr;?>;
  font-size: 16px;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a:hover{
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description{
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .link{
  position: absolute;
  left: 50%;
  bottom: 0;
  width: 44px;
  height:44px;
  line-height:44px;
  font-size:18px;
  -webkit-transform: translateX(-50%) translateY(50%);
  -ms-transform: translateX(-50%) translateY(50%);
  transform: translateX(-50%) translateY(50%);
  border-radius: 50%;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  background: #22b3ed;
  color: #fff;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .link:hover{
  background-color: #fff;
  color: #22b3ed;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name
{
  color:<?php echo $tm_name_hover_clr;?>;	
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position{
  color:<?php echo $tm_position_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
background: <?php echo $tm_img_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
    font-size: 15px;
    opacity: 0;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    padding-top: 10px;
    transform: translateY(10px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  opacity: 1;
    transform: translateY(0);
}
<?php echo $custom_css;

 ?>
</style>