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
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.20);
  -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.20);
  -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.20);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  position: relative;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay::before {
  position: absolute;
  top: 0;
  right: 0;
  width:0;
  height: 100%;
 <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  content: "";
  opacity: 0;
  z-index: 6;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay::before {
  opacity: 1;
  width: 100%;
  visibility: visible;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  background: <?php echo $tm_sibg_clr;?>;
  display: inline-block;
  position: absolute;
  top: 10px;
  left: 0;
  padding: 5px 20px;
  border-radius: 300px;
  z-index: 44;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  opacity: 0;
  visibility: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
  transition-delay: .2s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a{
  color: <?php echo $tm_si_clr;?>;
  display: block;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-description{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a:hover{
  color: <?php echo $tm_sih_clr;?>;
  /*background-color: <?php echo $tm_sihbg_clr;?>;*/
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  background: #fff;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  text-align: center;
  padding: 20px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member{
background: <?php echo $tm_content_bg_clr;?>;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position
{
color:<?php echo $tm_position_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name{
  color:<?php echo $tm_name_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>