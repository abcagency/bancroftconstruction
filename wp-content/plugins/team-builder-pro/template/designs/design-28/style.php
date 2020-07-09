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
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover {
 background: <?php echo $tm_img_hover_clr;?>;
  color: #fff;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar img{
   transform:scale(1.1);
   -webkit-transform:scale(1.1);
   -moz-transform:scale(1.1);
   -ms-transform:scale(1.1);
   -o-transform:scale(1.1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  width: 20%;
  height: 100%;
background: <?php echo $tm_img_hover_clr;?>;
  padding: 20px 0;
  position: absolute;
  top: 0;
  left: -50%;
  opacity: 0;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  left:0;
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: block;
  margin: 15px auto;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
  margin: 0 auto;
   color: <?php echo $tm_si_clr;?>;
  -webkit-transition: -webkit-transform .6s ease .3s;
  transition: -webkit-transform .6s ease .3s;
  -o-transition: transform .6s ease .3s;
  transition: transform .6s ease .3s;
  transition: transform .6s ease .3s, -webkit-transform .6s ease .3s;
  font-size: 16px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover li a{

  -webkit-transform: rotateY(360deg);
          transform: rotateY(360deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item li a:hover{
    color:<?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  background: transparent;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
  text-align: center;
  padding: 20px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  margin-bottom: 5px;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position{
color:<?php echo $tm_position_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name{
color:<?php echo $tm_name_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>