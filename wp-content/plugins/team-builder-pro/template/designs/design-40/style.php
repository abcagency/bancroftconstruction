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
  text-align: center; 
  -webkit-transition: all 0.4s ease 0s; 
  -o-transition: all 0.4s ease 0s; 
  transition: all 0.4s ease 0s;
  overflow: hidden;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: relative;
  z-index: 5;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{

  margin-right: 50px;
border: 6px solid <?php echo $tm_content_bg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
  text-align: center;
  padding: 40px 0;
  position: relative;
background: <?php echo $tm_content_bg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member::after {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  width:15%;
  height: 6px;
  background-color: <?php echo $tm_img_border_clr;?>;
  -webkit-transition: all 0.6s linear;
  -o-transition: all 0.6s linear;
  transition: all 0.6s linear;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member::after {
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  text-transform: uppercase;
  margin-top:15px;
  display: block;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  position: absolute;
  height: 90%;
  width: 50px;
  right: 0;
  top: 10%;
  z-index: 4;
background: <?php echo $tm_content_bg_clr;?>;
  padding:5px;  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:nth-child(odd){
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
  -webkit-transform: translateX(50px);
      -ms-transform: translateX(50px);
          transform: translateX(50px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:nth-child(even){
  -webkit-transition: all 0.4s ease .2s;
  -o-transition: all 0.4s ease .2s;
  transition: all 0.4s ease .2s;
  -webkit-transform: translateX(50px);
      -ms-transform: translateX(50px);
          transform: translateX(50px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social li{
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a{
  height:50px;
  text-align: center;
  line-height: 50px;
  font-size: 18px;
  color: <?php echo $tm_si_clr;?>;
  display: block;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  color:<?php echo $tm_sih_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>