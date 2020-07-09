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

#wpsm_team_pro_row_<?php echo $post_id; ?> ul, 
#wpsm_team_pro_row_<?php echo $post_id; ?> li {
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
    margin: 20px auto;
    overflow: hidden;
 }
 #wpsm_team_pro_row_<?php echo $post_id; ?> .team-info img {
  transition: all 0.5s linear 0s;
  -webkit-transform: scale(1.2);
  -moz-transform: scale(1.2);
  -ms-transform: scale(1.2);
  -o-transform: scale(1.2);
  transform: scale(1.2);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:hover img {
  transition: all 0.5s linear 0s;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  padding: 10px;
  text-align: center;
  margin-top: 10px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform:capitalize;
  margin-bottom:7px;
  display: block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: uppercase;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: relative;
  border:4px solid <?php echo $tm_img_border_clr;?>;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-overlay{
  position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
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
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
  opacity: 1;
  z-index:0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-overlay::after{
  position: absolute;
  content: "";
  <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  opacity: .85;
  height: 100%;
  width: 100%;
  z-index: -1;
  transform: scaleY(0);
  -webkit-transition: all 0.3s ease-in .1s;
  transition: all 0.3s ease-in .1s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:hover .team-overlay::after{
  transform: scaleY(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  width: 150px;
  -webkit-transition: all 0.3s ease .1s;
  transition: all 0.3s ease .1s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a{
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  display: block;
  border: 1px solid <?php echo $tm_sib_clr;?>;
  font-size: 18px;
  color: <?php echo $tm_si_clr;?>;
  transform:scale(0) rotate(90deg);
  transition: all .3s linear .2s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:hover .social a{
  transform:scale(1) rotate(0);
  border-radius: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  background-color: <?php echo $tm_sihbg_clr;?>;
  color: <?php echo $tm_sih_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>