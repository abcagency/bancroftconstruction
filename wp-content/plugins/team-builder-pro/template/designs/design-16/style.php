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
  position: relative;
  overflow: hidden;
  margin: 20px auto 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  position: relative;
  text-align: center;
  opacity: 0;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
  margin: 20px auto 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  margin: 4px 2px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a{
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border: 1px solid <?php echo $tm_sib_clr;?>;
  border-radius: 50%;
  display: block;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  color: <?php echo $tm_sih_clr;?>;
  background-color: <?php echo $tm_sihbg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 0;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  <?php if($tm_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_content_bg_clr;?>;
    <?php }?>
  -ms-flex-pack: center;
  justify-content: center;
  -moz-transform: translateY(100%) translateY(-94px);
  -webkit-transform: translateY(100%) translateY(-94px);
  -o-transform: translateY(100%) translateY(-94px);
  -ms-transform: translateY(100%) translateY(-94px);
  transform: translateY(100%) translateY(-94px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
 background: <?php echo $tm_img_hover_clr;?>;
  -webkit-transform: translateY(0px) translateY(0px);
  -moz-transform: translateY(0px) translateY(0px);
  -ms-transform: translateY(0px) translateY(0px);
  transform: translateY(0px) translateY(0px);
  -o-transform: translateY(0px) translateY(0px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::after{
  position: absolute;
  content: "";
  top: -99.5px;
  left: 0;
  <?php if($tm_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_content_bg_clr;?>;
    <?php }?>
  width: 100%;
  height: 100px;
  -webkit-clip-path: polygon(100% 40%, 0 100%, 100% 100%);
  clip-path: polygon(100% 40%, 0 100%, 100% 100%);
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::after{
background: <?php echo $tm_img_hover_clr;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-overlay{
  width: 100%;
  padding:20px 20px 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  margin-bottom: 8px;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
  display: block;
  -moz-transition: 0.3s all ease-out;
  -ms-transition: 0.3s all ease-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name
{
  color:<?php echo $tm_name_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position{
  color:<?php echo $tm_position_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-icon{
  position: absolute;
  top: -72px;
  right: 20px;
  z-index: 2;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-icon::after{
  width: 40px;
  height: 40px;
  right: 0;
  line-height: 40px;
  text-align: center;
  background-color: #f53f7a;
  border-radius: 50%;
  display: block;
  color: #fff;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
  font-size: 22px;
  position: absolute;
  content: "\f106";
  font-family: fontAwesome;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-icon::after{
  content: "\f107";
}
<?php echo $custom_css;

 ?>
</style>