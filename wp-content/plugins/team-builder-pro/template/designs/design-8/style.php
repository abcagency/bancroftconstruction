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
  overflow: hidden;
  transform-style: preserve-3d;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .flip-front{
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  padding:50px 20px;
background: <?php echo $tm_content_bg_clr;?>;
  color: #000;
  moz-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  -o-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
  position: relative;
  -webkit-transition: -webkit-transform 0.6s, z-index 0.7s;
  -moz-transition: -moz-transform 0.6s, z-index 0.7s;
  transition: transform 0.6s, z-index 0.7s;
  z-index: 2;

}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .flip-front{
  -moz-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  transform: rotateY(180deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  border-radius: 500px;
  -webkit-border-radius: 500px;
  max-width: 160px;
  max-height: 160px;
  overflow: hidden;
  margin: 0 auto;
  display: block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
 background: <?php echo $tm_img_hover_clr;?>;
  border: 1px solid rgba(0, 0, 0, 0.1);
  color: #000;
  -webkit-transition: -webkit-transform 0.6s, z-index 0.7s;
  -moz-transition: -moz-transform 0.6s, z-index 0.7s;
  transition: transform 0.6s, z-index 0.7s;
  -moz-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  transform: rotateY(180deg);
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  moz-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  -o-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
  z-index: 3;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-box{
  margin-top: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  padding: 10px;
  transform: scaleX(0);
  text-align: center;
  transition: all .5s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay{
  transform: scaleX(1);
  transition-delay: .2s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-box a
{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
  display: block;
  margin-bottom: 5px;  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_hover_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
  display: block;
  margin-bottom: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  margin-bottom: 8px;
  text-transform: capitalize;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position2{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_hover_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  margin-bottom: 8px;
  text-transform: capitalize;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight ;?>;
    line-height:<?php echo $tm_content_line;?>px;
  margin: 25px 0 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social a{
  display: block;
  color: <?php echo $tm_si_clr;?>;
  margin: 5px;
  -ms-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  color: <?php echo $tm_sih_clr;?>;
}


<?php echo $custom_css;

 ?>
</style>