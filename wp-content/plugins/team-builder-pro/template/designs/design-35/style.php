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
  display: block;
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
  padding:20px;
  z-index: 0;
}
.team-avatar{
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  top: 0;
  left: 0;
  padding: 20px 30px;
  height: 100%;
  width: 100%;
  opacity: 0;
  text-align: center;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, -webkit-transform 0.3s;
  -o-transition: transform 0.3s, opacity 0.3s;
  transition: transform 0.3s, opacity 0.3s;
  transition: transform 0.3s, opacity 0.3s, -webkit-transform 0.3s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align:left;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  z-index: 2;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item::after{
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  background-color:<?php echo $tm_img_border_clr; ?>;
  -webkit-clip-path: polygon(0 0, 0% 100%, 100% 100%);
  clip-path: polygon(0 0, 0% 100%, 100% 100%);
  top: 0;
  left: 0;
  z-index: -1;
  -webkit-transform:scale(0);
      -ms-transform:scale(0);
          transform:scale(0);
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover::after{  
  -webkit-transform:scale(1);  
      -ms-transform:scale(1);  
          transform:scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::after{
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  opacity: 0;
  z-index: -1;
  visibility: hidden;
  background-color:<?php echo $tm_img_hover_clr;?>;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::after{
  visibility: visible;
  opacity: 0.8;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
    width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description{
  margin:20px 0 10px;
  opacity: 0;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
  color: #fff;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  text-align: right;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
  margin-top: 15px;
  -webkit-transform: translateX(-100px);
      -ms-transform: translateX(-100px);
          transform: translateX(-100px)
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  color: <?php echo $tm_si_clr;?>;
  border-radius:5px;
  font-size: 16px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-description{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color:  <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  margin-top: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  display: block;
  margin-bottom: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;

}
<?php echo $custom_css;

 ?>
</style>