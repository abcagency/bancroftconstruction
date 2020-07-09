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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-section{
  padding: 0 15px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social, 
#wpsm_team_pro_row_<?php echo $post_id; ?> li {
  list-style: none;
  margin: 0;
  padding: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> a,
#wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, 
#wpsm_team_pro_row_<?php echo $post_id; ?> a:hover{
  text-decoration: none
}
#wpsm_team_pro_row_<?php echo $post_id; ?> p, 
#wpsm_team_pro_row_<?php echo $post_id; ?> h3,
#wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: relative;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar {
  position: relative;
  background-color: #eef1f8;
  z-index: 1;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0px;
  right: 0px;
  border: 2px solid <?php echo $tm_img_border_clr;?>;
  z-index: 0;
  -webkit-transition-duration: 0.35s;
  -moz-transition-duration: 0.35s;
  -o-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-property: top, right, bottom, left;
  -o-transition-property: top, right, bottom, left;
  -moz-transition-property: top, right, bottom, left;
  transition-property: top, right, bottom, left;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info .social {
  position: absolute;
  z-index: 1;
  top: 30px;
  right: 30px;
  -webkit-transform: scaleX(0);
  -moz-transform: scaleX(0);
  -ms-transform: scaleX(0);
  -o-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 100% 50%;
  -moz-transform-origin: 100% 50%;
  -ms-transform-origin: 100% 50%;
  -o-transform-origin: 100% 50%;
  transform-origin: 100% 50%;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social {
  -webkit-transform: scaleX(1);
  -moz-transform: scaleX(1);
  -ms-transform: scaleX(1);
  -o-transform: scaleX(1);
  transform: scaleX(1);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  width: 40px;
  height: 40px;
  border: 1px solid <?php echo $tm_sib_clr;?>;
  position: relative;
  margin-bottom: 10px;
  text-align: center;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li > a {
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-repeat: no-repeat;
  background-position: center;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
  color: <?php echo $tm_si_clr;?>;
  background: <?php echo $tm_sibg_clr;?>;
  font-size: 22px;
  padding-top: 5px;

}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
  margin: 30px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li > a:hover {
  background-color: <?php echo $tm_sihbg_clr;?>;
  color: <?php echo $tm_sih_clr;?>;

}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:hover{
  border: 1px solid <?php echo $tm_sibh_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info:after {
  top: -15px;
  right: -15px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
  padding-top:20px;
  text-align: center;
  line-height: 24px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  text-transform: uppercase;
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  margin-bottom: 10px;
  display: block;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}
<?php echo $custom_css; ?>
</style>