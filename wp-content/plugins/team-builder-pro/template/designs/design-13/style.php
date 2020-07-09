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

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-section {
  padding: 0 15px;
}


#wpsm_team_pro_row_<?php echo $post_id; ?> ul, #wpsm_team_pro_row_<?php echo $post_id; ?> li {
  list-style: none;
  margin: 0;
  padding: 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
  margin: 30px auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
 background: <?php echo $tm_content_bg_clr;?>;
  padding: 15px 0;
  transition: all .3s ease;
  text-align: center;
  position: relative;
  margin-top: 40px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member {
  background: <?php echo $tm_img_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name
{
 color:<?php echo $tm_name_hover_clr;?>; 
   font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  font-weight:<?php echo $tm_name_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position{
  color:<?php echo $tm_position_hover_clr;?>;
     font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  font-weight:<?php echo $tm_position_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  transition: all .3s ease;
  display: block;
  margin-bottom: 8px;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
  transition: all .3s ease;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  z-index: 0;
  position: relative;
  text-align: center;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::before {
  content: "";
  background: <?php echo $tm_img_hover_clr;?>;
  position: absolute;
  left: 15px;
  top: 15px;
  right: 15px;
  bottom:15px;
  opacity: 0;
  border-radius: 500px;
  -webkit-border-radius: 500px;
  transform: scale(0.6);
  -webkit-transition: -webkit-transform 0.4s, opacity 0.2s;
  -moz-transition: -moz-transform 0.4s, opacity 0.2s;
  transition: transform 0.4s, opacity 0.2s;
  z-index: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::before  {
  opacity: .7;
  transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{  
  border-radius: 500px;
  -webkit-border-radius: 500px;
  overflow: hidden;
  border: 6px solid <?php echo $tm_img_border_clr;?>;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar{ 
  border-color: <?php echo $tm_img_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top:20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  z-index: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition: all .3s ease;
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay{
  opacity: 1;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  transition-delay: .3s
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  padding: 10px 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a{  
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  font-size: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{  
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member::after{
  position: absolute;
  content: "";
  left: 50%;
  top: -45px;
  border: 30px solid transparent;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  border: 22px solid transparent;
 border-bottom:25px solid <?php echo $tm_content_bg_clr;?>;
  z-index: 0;
  opacity:1;
  visibility:visible;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member::after{
  border-bottom-color: <?php echo $tm_img_hover_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>