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
  text-align: center;
  position: relative;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  z-index: 2;
  -webkit-transform-origin: top;
      -ms-transform-origin: top;
          transform-origin: top;
  position: relative;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  border-radius: 500px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar{
  -webkit-transform: rotateX(110deg);
  -ms-transform: rotateX(110deg);
  transform: rotateX(110deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  border-radius: 50%;
  -webkit-border-radius: 50%;
  z-index: 1;
  padding: 30px 20px;
background: <?php echo $tm_img_hover_clr;?>;
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transition: -webkit-transform 0.6s, opacity 0.1s;
  -webkit-transition: opacity 0.1s, -webkit-transform 0.6s;
  transition: opacity 0.1s, -webkit-transform 0.6s;
  -o-transition: transform 0.6s, opacity 0.1s;
  transition: transform 0.6s, opacity 0.1s;
  transition: transform 0.6s, opacity 0.1s, -webkit-transform 0.6s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display:inline-block;
  margin: 5px;
  text-align: center;
  -webkit-transition: all 0.6s ease .1s;
  -o-transition: all 0.6s ease .1s;
  transition: all 0.6s ease .1s;
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:nth-child(odd){
  -webkit-transform: translateY(120px);
      -ms-transform: translateY(120px);
          transform: translateY(120px)
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:nth-child(even){
  -webkit-transform: translateY(260px);
      -ms-transform: translateY(260px);
          transform: translateY(260px)
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover li{
  -webkit-transform: translateY(0)  ;
      -ms-transform: translateY(0)  ;
          transform: translateY(0)  ;
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a{
  color: <?php echo $tm_si_clr;?>;
  display: block;
  font-size: 16px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  margin: 0 auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a:hover{
  color:<?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
  margin: 20px 0 10px;
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  margin-bottom: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  display: block;
  max-width: 160px;
  margin: 0 auto 5px;
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