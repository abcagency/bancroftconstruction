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

#wpsm_team_pro_row_<?php echo $post_id; ?> a, 
#wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, 
#wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, 
#wpsm_team_pro_row_<?php echo $post_id; ?> h3, 
#wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  margin: 30px auto;
  text-align: center;
  overflow: hidden;
  position: relative;
}
.team-avatar{
  overflow: hidden;
  position: relative;
}
.team-avatar img{
  -webkit-transition: -webkit-transform 0.4s;
  transition: -webkit-transform 0.4s;
  -o-transition: transform 0.4s;
  transition: transform 0.4s;
  transition: transform 0.4s, -webkit-transform 0.4s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar img{
  webkit-transform: translateY(-50px);
    -ms-transform: translateY(-50px);
    -webkit-transform: translateY(-50px);
            transform: translateY(-50px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  top: 0;
  left: 0;
  padding: 20px;
  width: 100%;
  top: auto;
  bottom: 0;
  opacity: 0;
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
  -webkit-transition: opacity 0.1s 0.3s, -webkit-transform 0.4s;
  transition: opacity 0.1s 0.3s, -webkit-transform 0.4s;
  -o-transition: transform 0.4s, opacity 0.1s 0.3s;
  transition: transform 0.4s, opacity 0.1s 0.3s;
  transition: transform 0.4s, opacity 0.1s 0.3s, -webkit-transform 0.4s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
background: <?php echo $tm_img_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
  -webkit-transition: opacity 0.1s, -webkit-transform 0.4s;
  transition: opacity 0.1s, -webkit-transform 0.4s;
  -o-transition: transform 0.4s, opacity 0.1s;
  transition: transform 0.4s, opacity 0.1s;
  transition: transform 0.4s, opacity 0.1s, -webkit-transform 0.4s;
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
       font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
  -webkit-transform: translateY(20px);
      -ms-transform: translateY(20px);
          transform: translateY(20px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0); 
  -webkit-transition-delay: .3s; 
       -o-transition-delay: .3s; 
          transition-delay: .3s; 
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 15px 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  color: <?php echo $tm_si_clr;?>;
  height:30px;
  width:30px;
  line-height:30px;
  background-color: <?php echo $tm_sibg_clr;?>;
  border-radius:5px;
  display: block;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-description{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
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
  margin-bottom: 5px;
  display: block;
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