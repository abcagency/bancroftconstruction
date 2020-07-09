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

#wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> ul,
#wpsm_team_pro_row_<?php echo $post_id; ?> li{
  list-style: none;
  margin: 0;
  padding: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> p,
#wpsm_team_pro_row_<?php echo $post_id; ?> h3,
#wpsm_team_pro_row_<?php echo $post_id; ?> h4{
  margin: 0;
  padding: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> img{
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  position: relative;
  z-index:0;
  text-align: center;
  margin: 20px auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: relative;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
  content: '';
  position: absolute;
  top:0;
  left:0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
<?php if($tm_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_bg_content_hover_clr;?>;
    <?php }?>
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: scale(0.1,0.1);
  -ms-transform: scale(0.1,0.1);
      transform: scale(0.1,0.1);
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
  opacity:.85;
  -webkit-transform: scale(1,1);
  -ms-transform: scale(1,1);
      transform: scale(1,1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:after {
  position: absolute;
  top: 50%;
  left: 50%;
  width:130px;
  height:130px;
  content: '';
  opacity: 0;
  z-index:-1;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.7s;
  transition: opacity 0.35s, -webkit-transform 0.7s;
  -o-transition: opacity 0.35s, transform 0.7s;
  transition: opacity 0.35s, transform 0.7s;
  transition: opacity 0.35s, transform 0.7s, -webkit-transform 0.7s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
      transform-origin: 50%;
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay:after {
  opacity: 1;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);

}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  background: <?php echo $tm_content_bg_clr;?>;
  padding: 20px 0;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  margin-bottom: 6px;
  text-transform:capitalize;
  display: block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform:capitalize;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  -webkit-transition: opacity .3s ease .6s;
  -o-transition: opacity .3s ease .6s;
  transition: opacity .3s ease .6s;
  width: 100px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: <?php echo $tm_sibg_clr;?>;
  color: <?php echo $tm_si_clr;?>;
  text-align: center;
  margin-right: 5px;
  -webkit-transition: .3s;
  -o-transition: .3s;
  transition: .3s;
  display: block;
  padding-top: 3px;
  -webkit-box-shadow: 0px 0 6px 1px #ffa8d3;
          box-shadow: 0px 0 6px 1px #ffa8d3;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  background: <?php echo $tm_sihbg_clr;?>;
  color:<?php echo $tm_sih_clr;?>;  
}

<?php echo $custom_css;

 ?>
</style>