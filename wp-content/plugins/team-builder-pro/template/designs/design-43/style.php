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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
  margin:0 auto;
  position: relative;
  overflow: hidden;
      margin-bottom: 50px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar {
  border: 15px solid <?php echo $tm_img_border_clr;?>;
  border-radius:500px;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  height: 100%;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  z-index: 2;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::after{
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
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
  z-index: -1;
  visibility: hidden;
  -webkit-transform: scale(0);
      -ms-transform: scale(0);
          transform: scale(0);
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  border-radius: 500px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::after{
  opacity: 1;
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
  visibility: visible;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img {
  width: 100%;
  border-radius:500px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  overflow: hidden;
  width: 100%;
  margin: 20px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-transform: scaleX(0);
  -ms-transform: scaleX(0);
      transform: scaleX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  -webkit-transform: scaleX(1);
      -ms-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transition-delay: .3s;
       -o-transition-delay: .3s;
          transition-delay: .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  margin:10px;
  display: inline-block;
  outline: none;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a{
  font-size: 22px;
  overflow: hidden;
  text-align: center;
  border-radius: 4px;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all ease .3s;
  -o-transition: all ease .3s;
  transition: all ease .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  text-align: center;
  margin-top: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  text-transform: capitalize;
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