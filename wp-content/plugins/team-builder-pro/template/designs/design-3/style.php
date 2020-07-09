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
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .avatar-wrap{
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .avatar-wrap{
  -webkit-transform: scale(0.5);
  -moz-transform: scale(0.5);
  -ms-transform: scale(0.5);
  -o-transform: scale(0.5);
  transform: scale(0.5);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
  border-radius: 50%;
  opacity: 1;
    -webkit-transition: all 0.3s ease-in-out 0.3s;
    -moz-transition: all 0.3s ease-in-out 0.3s;
    transition: all 0.3s ease-in-out 0.3s;
    webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  border-radius: 50%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar {
  opacity: 0;
  pointer-events: none;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  transform: translateX(-100%);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar:before {
  position: absolute;
  display: block;
  content: '';
  width: 100%;
  height: 100%;
  border-radius: 50%;
  box-shadow: inset 0 0 0 10px rgba(255, 255, 255, 0.6), 0 1px 2px rgba(0, 0, 0, 0.3);
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  border-radius: 50%;
  opacity: 0;
  -webkit-transition: all 0.3s ease-in-out 0.3s;
  -moz-transition: all 0.3s ease-in-out 0.3s;
  transition: all 0.3s ease-in-out 0.3s;
  -webkit-transform: translateX(100%);
  -moz-transform: translateX(100%);
  -ms-transform: translateX(100%);
  -o-transform: translateX(100%);
  transform: translateX(100%);
  pointer-events: none;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  text-align:center;
  padding: 20px;
  pointer-events: all;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info-wrap{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  border-radius: 50%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  width: 100%;
  height: 100%;
background: <?php echo $tm_content_bg_clr;?>;
  -webkit-transform: scale(0.5);
  -moz-transform: scale(0.5);
  -ms-transform: scale(0.5);
  -o-transform: scale(0.5);
  transform: scale(0.5);
  -webkit-transition: all 0.35s ease-in-out 0.4s;
  -moz-transition: all 0.35s ease-in-out 0.4s;
  transition: all 0.35s ease-in-out 0.4s;
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
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top:25px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  margin: 2px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
  color: <?php echo $tm_si_clr;?>;
  font-size: 15px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  height: 23px;
  width: 23px;
  line-height: 23px;
  background: <?php echo $tm_sibg_clr;?>;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color:<?php echo $tm_sih_clr;?>;
  transition: all 0.3s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  display: block;
  margin-bottom:10px;
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
<?php echo $custom_css; ?>
</style>