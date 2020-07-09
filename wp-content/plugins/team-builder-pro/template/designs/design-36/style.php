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
  text-align: center;
  position: relative;
  background: <?php echo $tm_content_bg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar::after{
  position: absolute;
  content: "";
  bottom:-1px;
  right: -1px;
 background: <?php echo $tm_content_bg_clr;?>;
  width: 101%;
  height: 80px;
  -webkit-clip-path: polygon(100% 40%, 0 100%, 100% 100%);
  clip-path: polygon(100% 40%, 0 100%, 100% 100%);
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
  z-index: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar::after{
  -webkit-transform: translateY(40px);
      -ms-transform: translateY(40px);
          transform: translateY(40px);
  opacity: 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height:0;
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
  z-index: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
  visibility: visible;
  height: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  z-index: 4;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:nth-child(odd) {
  -webkit-transform: translateY(50px);
      -ms-transform: translateY(50px);
          transform: translateY(50px)
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social li{
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0)
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
  -webkit-transition: all 0.3s ease .2s;
  -o-transition: all 0.3s ease .2s;
  transition: all 0.3s ease .2s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 2px;
  border: 1px solid <?php echo $tm_sib_clr;?>;
  text-align: center;
  font-size: 16px;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color:<?php echo $tm_sih_clr;?>;
  border-color: <?php echo $tm_sibh_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  text-align: center;
  padding: 20px 0;
  border-bottom: 2px solid <?php echo $tm_img_border_clr;?>;
  z-index: 5;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  margin-bottom:8px;
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