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

#wpsm_team_pro_row_<?php echo $post_id; ?> .social, #wpsm_team_pro_row_<?php echo $post_id; ?> li {
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
#wpsm_team_pro_row_<?php echo $post_id; ?> img{
  width: 100%;
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  position: relative;
  z-index:0;
  text-align: center;
  margin-bottom: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  -webkit-filter: blur(10px);
          filter: blur(10px);
  opacity: 0;
  visibility: hidden;
  z-index: 3;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay {
  top: 0;
  opacity: 1;
  visibility: visible;
  -webkit-filter: blur(0);
          filter: blur(0);
  -webkit-transition: all 0.3s ease-in .3s;
  -o-transition: all 0.3s ease-in .3s;
  transition: all 0.3s ease-in .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  border-radius: 50%;
  color: <?php echo $tm_si_clr;?>;
  text-align: center;
  margin: 5px 11px;
  -webkit-transition: .3s;
  -o-transition: .3s;
  transition: .3s;
  display: block;
  padding-top: 3px;
  font-size: 22px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: relative;
  border-radius: 500px;
  overflow: hidden;
  border: 5px solid <?php echo $tm_img_border_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  content: '';
  position: absolute;
  top:6px;
  right:6px;
  left:6px;
  bottom:6px;
  z-index: 1;
  opacity: 0;
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: scale(0.1,0.1);
  -ms-transform: scale(0.1,0.1);
      transform: scale(0.1,0.1);
  border-radius: 500px
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info:after {
  opacity:.8;
  -webkit-transform: scale(1,1);
  -ms-transform: scale(1,1);
      transform: scale(1,1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  margin-top: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  margin-bottom: 8px;
  text-transform: uppercase;
  letter-spacing: 2px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}


<?php echo $custom_css;

 ?>
</style>