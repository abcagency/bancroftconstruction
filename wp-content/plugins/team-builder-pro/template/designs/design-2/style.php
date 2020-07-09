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
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  margin: 20px auto;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
  border-radius: 0;
  z-index: 11;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  -webkit-transform-origin: 95% 50%;
  -moz-transform-origin: 95% 50%;
  -ms-transform-origin: 95% 50%;
  -o-transform-origin: 95% 50%;
  transform-origin: 95% 50%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar {
  -webkit-transform: rotate(-120deg);
  -moz-transform: rotate(-120deg);
  -ms-transform: rotate(-120deg);
  -o-transform: rotate(-120deg);
  transform: rotate(-120deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar:before {
  position: absolute;
  display: block;
  content: '';
  width: 100%;
  height: 100%;
  border-radius: 0;
  box-shadow: inset 0 0 0 10px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar:after {
  content: '';
  width: 8px;
  height: 8px;
  position: absolute;
  border-radius: 0;
  top: 50%;
  left: 95%;
  margin: -4px 0 0 -4px;
  background: rgba(0, 0, 0, 0.8);
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
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
background: <?php echo $tm_content_bg_clr;?>;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;

}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  text-align: left;
  padding: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top: 15px;
  max-width: 150px;
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
  height: <?php echo $team_social_icon_size+9;?>px;
  width: <?php echo $team_social_icon_size+9;?>px;
  line-height: <?php echo $team_social_icon_size+9;?>px;
  background: <?php echo $tm_sibg_clr;?>;
  text-align: center;
  border-radius: 50%;
  font-size: 13px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color:<?php echo $tm_sih_clr;?>;
  transition: all 0.3s ease 0s;
  background: <?php echo $tm_sihbg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  display: block;
  text-transform: capitalize;
  margin-bottom:8px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
  text-transform:uppercase;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
} 

#wpsm_team_pro_row_<?php echo $post_id; ?> div, .wpsm_team_pro_row div {
    box-sizing: border-box !important;
}

<?php echo $custom_css; ?>
</style>