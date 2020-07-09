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
#wpsm_team_pro_row_<?php echo $post_id; ?> a{
  color: inherit;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  position: relative;
  z-index:0;
  text-align: center;
  margin: 20px auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
  position: absolute;
  top: 10%;
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
  -o-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
  opacity: 0;
  visibility: hidden;
  z-index: 3;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  margin-bottom: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
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
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  visibility: hidden;
  -webkit-transition: .3s;
  -o-transition: .3s;
  transition: .3s;
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay {
  top: 0;
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  visibility: visible;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info:after {
  visibility: visible;
  opacity: .8;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
  width: 90%;
  padding: 20px 0;
  text-align: center;
background: <?php echo $tm_content_bg_clr;?>;
  position: relative;
  margin: 0 auto;
  -webkit-transform: translateY(-30px);
      -ms-transform: translateY(-30px);
          transform: translateY(-30px);
  z-index: 2;
  -webkit-box-shadow: 0px 0px 50.76px 3.24px rgba(26, 26, 26, 0.25);
          box-shadow: 0px 0px 50.76px 3.24px rgba(26, 26, 26, 0.25);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item .team-member:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 2px;
  top: 0;
  left: 0;
  background-color: <?php echo $tm_img_border_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  text-transform: capitalize;
  margin-bottom: 8px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-des
{
	      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
    padding: 0 15px;
}
<?php echo $custom_css;

 ?>
</style>