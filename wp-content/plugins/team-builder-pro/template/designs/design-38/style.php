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
  margin-bottom: 30px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-overlay{
  -webkit-transform: translateY(120px);
      -ms-transform: translateY(120px);
          transform: translateY(120px);
  opacity: 0;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-overlay{
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  -webkit-transition-delay: .2s;
       -o-transition-delay: .2s;
          transition-delay: .2s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: absolute;
  text-align: center;
  top:5px;
  left:5px;
  right: 5px;
  padding: 35px 20px;
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.6s ease 0s;
  -o-transition: all 0.6s ease 0s;
  transition: all 0.6s ease 0s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  overflow: hidden;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
  visibility: visible;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
  margin: 20px 0 18px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  margin-top: 10px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin:2px 8px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  font-size: 17px;
  color: <?php echo $tm_si_clr;?>;
  text-align: center;
  display: inline-block;
  -webkit-transition:all 0.3s ease;
  -o-transition:all 0.3s ease;
  transition:all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover {
  border-color: transparent;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
  position: absolute;
  bottom:10px;
  right: 0;
  text-align: center;
  padding:12px 30px;
  background-color:<?php echo $tm_img_hover_clr;?>;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
  -moz-transition: all 0.6s ease;
  -ms-transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member{
   transform: translateX(100%) translateX(60px);
   -webkit-transform: translateX(100%) translateX(60px);
   -moz-transform: translateX(100%) translateX(60px);
   -ms-transform: translateX(100%) translateX(60px);
   -o-transform: translateX(100%) translateX(60px);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member:after{
  position: absolute;
  content: "";
  left: -17px;
  top: 0;
  height: 100%;
  width: 30px;
  background-color:<?php echo $tm_img_hover_clr;?>;
  -webkit-transform: skewX(-27deg);
      -ms-transform: skewX(-27deg);
          transform: skewX(-27deg);
  z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  display: block;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name2 {
  display: block;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_hover_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  margin-top:8px;
}

<?php echo $custom_css;

 ?>
</style>