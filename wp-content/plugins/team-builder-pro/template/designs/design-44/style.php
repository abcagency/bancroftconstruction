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

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-slider{
  padding-top: 50px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  overflow: hidden;
  position: relative;
  text-align: center;
  margin-bottom: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: left;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  opacity: 0;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition:all .5s cubic-bezier(0.28, -0.12, 0.40, 1.42);
  -o-transition: all .5s cubic-bezier(0.28, -0.12, 0.40, 1.42);
  transition: all .5s cubic-bezier(0.28, -0.12, 0.40, 1.42);
  z-index: 50;
  top:15px;
  bottom:15px;
  right:15px;
  left:15px;
  margin: auto;
  position: absolute;
  z-index: 2;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  color: black;
  display: block;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
  margin-bottom: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
  color: white;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: uppercase;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  padding-top:30px;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  padding: 0 10px;
  display: inline-block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a {
  color: <?php echo $tm_si_clr;?>;
  font-size: 18px;
  -webkit-transition: all 0.35s ease-in;
  -o-transition: all 0.35s ease-in;
  transition: all 0.35s ease-in;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  color: <?php echo $tm_sih_clr;?>;
}

<?php echo $custom_css;

 ?>
</style>