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
  margin:0 auto 50px;
  position: relative;
  border-radius: 500px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
  overflow:hidden ;
  border-radius:500px;
  z-index: 11;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  -webkit-transform: scale(1) translateY(0);
  -moz-transform: scale(1) translateY(0);
  -ms-transform: scale(1) translateY(0);
  -o-transform: scale(1) translateY(0);
  transform: scale(1) translateY(0);
  pointer-events: none
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar {
  -webkit-transform: scale(0.4) translateY(100%);
  -moz-transform: scale(0.4) translateY(100%);
  -ms-transform: scale(0.4) translateY(100%);
  -o-transform: scale(0.4) translateY(100%);
  transform: scale(0.4) translateY(100%);
  pointer-events: none
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  border-radius: 50%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
background: <?php echo $tm_content_bg_clr;?>;
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  -webkit-transform: translateY(-100%);
  -moz-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -o-transform: translateY(-100%);
  transform: translateY(-100%);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  pointer-events: none;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  text-align:center;
  padding: 20px;
  pointer-events: all;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  pointer-events: none
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top: 10px;
  opacity: 0;
  -webkit-transition: all 0. 5s ease .4s;
  -moz-transition: all 0.5s ease .4s;
  transition: all 0.5s ease .4s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
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
  margin-bottom:7px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
    font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm_team_pro_row_overlay_<?php echo $post_id; ?>{
  overflow:visible !important;
  }
<?php echo $custom_css; ?>
</style>