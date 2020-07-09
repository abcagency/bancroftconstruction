<?php 
$values=$team_social_icon_size+9;
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
  border-radius: 500px;
  -webkit-perspective: 900px;
  -moz-perspective: 900px;
  perspective: 900px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
  opacity: 1;
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  -webkit-transform: translateZ(0) rotateX(0);
  -moz-transform: translateZ(0) rotateX(0);
  -ms-transform: translateZ(0) rotateX(0);
  -o-transform: translateZ(0) rotateX(0);
  transform: translateZ(0) rotateX(0);
  border-radius: 500px
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar {
  -webkit-transform: translateZ(-1000px) rotateX(90deg);
  -moz-transform: translateZ(-1000px) rotateX(90deg);
  -ms-transform: translateZ(-1000px) rotateX(90deg);
  -o-transform: translateZ(-1000px) rotateX(90deg);
  transform: translateZ(-1000px) rotateX(90deg);
  opacity: 0;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  border-radius: 500px;
  width: 100%;
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
  -webkit-transition: all 0.35s ease 0.2s;
  -moz-transition: all 0.35s ease 0.2s;
  transition: all 0.35s ease 0.2s;
  -webkit-transform: translateZ(-1000px) rotateX(-90deg);
  -moz-transform: translateZ(-1000px) rotateX(-90deg);
  -ms-transform: translateZ(-1000px) rotateX(-90deg);
  -o-transform: translateZ(-1000px) rotateX(-90deg);
  transform: translateZ(-1000px) rotateX(-90deg);
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  text-align:center;
  padding: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateZ(0) rotateX(0);
  -moz-transform: translateZ(0) rotateX(0);
  -ms-transform: translateZ(0) rotateX(0);
  -o-transform: translateZ(0) rotateX(0);
  transform: translateZ(0) rotateX(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top:10px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  margin: 2px 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  display: block;
height: <?php echo $values;?>px;
  width: <?php echo $values;?>px;
  line-height: <?php echo $values;?>px;
  border: 1px solid <?php echo $tm_si_clr;?>;
  border-radius: 100px;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
  border-color: <?php echo $tm_sih_clr;?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  text-transform: capitalize;
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
  position: relative;
  text-transform: capitalize;
  padding-bottom: 10px;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position::after{
  content: "";
  position: absolute;
  height:1px;
  width: 40px;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  background-color: #fff;
}

<?php echo $custom_css;

 ?>
</style>