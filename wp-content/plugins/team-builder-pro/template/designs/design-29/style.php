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
  margin: 20px auto;
  position: relative;
  overflow: hidden;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: relative;
  z-index: 0;
  -webkit-transform: translateY(-50px);
      -ms-transform: translateY(-50px);
          transform: translateY(-50px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::after{
  position: absolute;
  width: 101%;
  height: 100%;
  left: -2px;
  top: 0;
  content: "";
background: <?php echo $tm_content_bg_clr;?>;
  -webkit-transform: rotate(7deg) skew(7deg);
      -ms-transform: rotate(7deg) skew(7deg);
          transform: rotate(7deg) skew(7deg);
  z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  position: absolute;
  top:-40px;
  right: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 15px 5px;
  margin-right: 0;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  -webkit-transform: translateY(30px);
      -ms-transform: translateY(30px);
          transform: translateY(30px);
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover li{
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover li:nth-child(even){
  -webkit-transform: translateY(-15px);
      -ms-transform: translateY(-15px);
          transform: translateY(-15px);  
  -webkit-transition-delay: .1s;  
       -o-transition-delay: .1s;  
          transition-delay: .1s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
  width: 40px;
  height:40px;
  line-height:40px;
  background: <?php echo $tm_sibg_clr;?>;
  text-align: center;
  font-size: 15px;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  background-color: <?php echo $tm_sihbg_clr;?>;
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  background: transparent;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
  text-align: center;
  padding: 30px 0;
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