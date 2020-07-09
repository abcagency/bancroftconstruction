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
  text-decoration: none
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
  position: relative;
  margin: 30px 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item .team-member {
  margin-top: 30px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
  display: block;
  margin-bottom: 10px;
  text-align: center;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
  text-transform: uppercase;
  display: block;
  text-align: center;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: relative;
  border-radius: 50%;
<?php if($tm_box_opacity<="9"){ ?>
    border: 50px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    border: 50px solid <?php echo $tm_content_bg_clr;?>;
    <?php }?>


  z-index: 1;
  margin: 0 auto;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  position: absolute;
  content: '';
  left: -10%;
  top: -10%;
  width: 120%;
  height: 120%;
  border-radius: 50%;
  border: 2px dashed #fff;
  z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info:after{
  -webkit-animation: rotation 2s infinite linear;
}

@-webkit-keyframes rotation {
  from {
      -webkit-transform: rotate(0deg);
  }
  to {
      -webkit-transform: rotate(359deg);
  }
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info img {
  border-radius: 500px;
  border: 3px solid <?php echo $tm_img_border_clr;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  position: absolute;
  left: 50%;
  bottom: -39px;
  -ms-transform: translate(-50%);
  -webkit-transform: translate(-50%);
  transform: translate(-50%);
  width: 100%;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  position: relative;
  display: inline-block;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  display: inline-block;
  width: 35px;
  height: 35px;
  background-color:<?php echo $tm_sibg_clr;?>;
  border-radius: 50%;
  text-align: center;
  line-height: 35px;
  color:<?php echo $tm_si_clr;?>;
  margin: 1px;
  -webkit-transition: all 0.5s ease-in;
  -o-transition: all 0.5s ease-in;
  transition: all 0.5s ease-in;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover {
  background-color: <?php echo $tm_sihbg_clr;?>;
  color: <?php echo $tm_sih_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>