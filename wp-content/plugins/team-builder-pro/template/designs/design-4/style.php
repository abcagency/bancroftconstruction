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
  position: relative;
  overflow: hidden;
  -webkit-perspective: 900px;
  -moz-perspective: 900px;
  perspective: 900px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
  -webkit-transition: all 0.35s linear;
  -moz-transition: all 0.35s linear;
  transition: all 0.35s linear;
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  -ms-transform-origin: 50% 0;
  -o-transform-origin: 50% 0;
  transform-origin: 50% 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar {
  opacity: 0;
  -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
  -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
  -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
  -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
  transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  border-radius: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  text-align:center;
  padding: 20px;
  pointer-events: all;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info-wrap{
  visibility: hidden;
  border-radius: 0;
  width: 100%;
  height: 100%;
 background: <?php echo $tm_content_bg_clr;?>;
  -webkit-transition: all 0.35s linear;
  -moz-transition: all 0.35s linear;
  transition: all 0.35s linear;
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  -ms-transform-origin: 50% 0;
  -o-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
  -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
  -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
  -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
  transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info-wrap {
 opacity: 1;
  visibility: visible;
  -webkit-transform: rotate3d(1, 0, 0, 0deg);
  -moz-transform: rotate3d(1, 0, 0, 0deg);
  -ms-transform: rotate3d(1, 0, 0, 0deg);
  -o-transform: rotate3d(1, 0, 0, 0deg);
  transform: rotate3d(1, 0, 0, 0deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top: 15px;
  opacity: 0;
  padding: 5px;
  transform: translateY(20px);
  -webkit-transition: all 0.4s ease .3s;
  -moz-transition: all 0.4s ease .3s;
  transition: all 0.4s ease .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  transform: translateY(0);
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  margin: 2px 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
  color: <?php echo $tm_si_clr;?>;
  font-size: 15px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  text-align: center;
  font-size: 15px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color:<?php echo $tm_sih_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  text-transform: capitalize;
  margin-bottom:8px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform:uppercase;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
<?php echo $custom_css;

 ?>
</style>