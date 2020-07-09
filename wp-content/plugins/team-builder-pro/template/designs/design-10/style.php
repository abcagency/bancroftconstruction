<?php 
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

#wpsm_team_pro_row_<?php echo $post_id; ?> ul, 
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

/*3.4 Whos Speaking Area*/

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
  border: 1px solid #dee2e6;
  margin: 20px auto;
}


#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: relative;
}


#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info img {
  width: 100%;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
  content: '';
  position: absolute;
 <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  top:0;
  left:0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: scaleY(0.1);
  -ms-transform: scaleY(0.1);
      transform: scaleY(0.1);
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
  z-index: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay {
  opacity:1;
  -webkit-transform: scaleY(1);
  -ms-transform: scaleY(1);
      transform: scaleY(1);
      z-index: 2;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social {
  -webkit-transition: opacity .3s ease .6s;
  -o-transition: opacity .3s ease .6s;
  transition: opacity .3s ease .6s;
  width: 100px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:before {
  position: absolute;
  top: 50%;
  left: 50%;
  width:110px;
  height:110px;
  content: '';
  opacity: 0;
  z-index:-1;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.7s;
  transition: opacity 0.35s, -webkit-transform 0.7s;
  -o-transition: opacity 0.35s, transform 0.7s;
  transition: opacity 0.35s, transform 0.7s;
  transition: opacity 0.35s, transform 0.7s, -webkit-transform 0.7s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
      transform-origin: 50%;
      border: 1px solid <?php echo $tm_sib_clr;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay:before {
  opacity: 1;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
  -webkit-transition-delay: .2s;
       -o-transition-delay: .2s;
  transition-delay: .2s;
}




#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 0 3px;
  -webkit-transition: all 0.5s ease 0.2s;
  -o-transition: all 0.5s ease 0.2s;
  transition: all 0.5s ease 0.2s;
  margin: 5px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  font-size: 18px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
  width: 25px;
  color: <?php echo $tm_si_clr;?>;
  height: 25px;
  display: block;
  text-align: center;
  -webkit-transform: rotate(-180deg) scale(0);
      -ms-transform: rotate(-180deg) scale(0);
          transform: rotate(-180deg) scale(0);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover {
  color: <?php echo $tm_sih_clr;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social a{
  -webkit-transform: rotate(0) scale(1) ;
      -ms-transform: rotate(0) scale(1) ;
          transform: rotate(0) scale(1) ;
  -webkit-transition-delay: .2s;
       -o-transition-delay: .2s;
          transition-delay: .2s;

}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social {
  opacity: 1;
  z-index: 9;
}


#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
  text-align: center;
  padding: 25px 0;
background: <?php echo $tm_content_bg_clr;?>;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
  text-transform: capitalize;
  display: block;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position {
  margin-top:7px;
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}

<?php echo $custom_css;

 ?>
</style>