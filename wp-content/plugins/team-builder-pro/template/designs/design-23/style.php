<?php 
$RGB = wpsm_hex2rgb_team_pro($tm_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
  text-align: center;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  position: relative;
  margin: 20px auto;
  border: 4px solid <?php echo $tm_img_border_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  text-align: center;
  z-index: 0;
  padding: 30px;
  opacity: 0;
  -webkit-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  z-index: 2;
      width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::before {
  content: "";
  <?php if($tm_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_content_bg_clr;?>;
    <?php }?>
  position: absolute;
  top: 10px;
  right:10px;
  left: 10px;
  bottom: 10px;
  z-index: 1;
  transform: skew(45deg) scaleX(0);
  transition: all 400ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::before {
  opacity: 1;
  visibility: visible;
  transform: skew(0) scaleX(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  transform: scale(1.1);
  transition: transform .5s linear 0s;  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar img{
  transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  transform: translateY(100px) scale(0);
  transition:all .3s linear .1s;  
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  transform: translateY(0) scale(1);
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: <?php echo $tm_sibg_clr;?>;
  border-radius: 50%;
  display: block;
  color: <?php echo $tm_si_clr;?>;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-description{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a:hover{
  color: <?php echo $tm_sih_clr;?>;
  background-color: <?php echo $tm_sihbg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  padding: 20px 0;
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
<?php echo $custom_css;

 ?>
</style>