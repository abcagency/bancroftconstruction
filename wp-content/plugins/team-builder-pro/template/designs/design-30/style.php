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
  z-index: 0;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:after {
  content: "";
  width: 130px;
  height: 130px;
  background: <?php echo $tm_img_border_clr; ?>;
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:before {
  bottom: 20px;
  left: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover:before {
  bottom:0;
  left: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:after {
  top: 20px;
  right:20px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover:after {
  top: 0;
  right: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  margin: 20px;
  position: relative;
  border: 2px solid <?php echo $tm_img_border_clr; ?>;
  -webkit-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar::after{
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color:<?php echo $tm_img_hover_clr; ?>;
  -webkit-transform: scale(0);
      -ms-transform: scale(0);
          transform: scale(0);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar::after {
  visibility: visible;
  opacity: .8;
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  text-align: center;
  z-index: 0;
  padding:10px;
  opacity: 0;
  -webkit-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  -webkit-transition: 0.3s all ease; 
  -webkit-transform: translateY(50px); 
      -ms-transform: translateY(50px); 
          transform: translateY(50px);  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 15px 5px;
  margin-right: 0;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: <?php echo $tm_sibg_clr; ?>;
  border-radius: 50%;
  display: block;
  color: <?php echo $tm_si_clr; ?>;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  background-color:<?php echo $tm_sihbg_clr; ?>;
  color: <?php echo $tm_sih_clr; ?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  -webkit-transform: translateY(-50px);
      -ms-transform: translateY(-50px);
          transform: translateY(-50px);
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
  text-align: center;
  margin-bottom: 10px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member{
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  display: block;
  margin-bottom:5px;
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