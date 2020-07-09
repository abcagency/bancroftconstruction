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
  margin: 20px auto;
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-box {
  position: absolute;
  left: 10px;
  bottom: 10px;
  right: 10px;
  text-align: center;
  -webkit-transition: all 900ms ease;
  -ms-transition: all 900ms ease;
  -o-transition: all 900ms ease;
  transition: all 900ms ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay-box {
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-box h3 a{
  position: relative;
  padding: 16px 15px;
  display: block;
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: uppercase;
  border-radius: 0px 0px 5px 5px;
<?php if($tm_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_content_bg_clr;?>;
    <?php }?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info {
  position: absolute;
  left: 15px;
  top: 15px;
  right: 15px;
  bottom: 15px;
  padding: 15px;
  display: block;
  opacity: 0;
  border-radius: 5px;
  text-align: center;
  <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  -webkit-transform: perspective(400px) rotateZ(-90deg);
  -moz-transform: perspective(400px) rotateZ(-90deg);
  -ms-transform: perspective(400px) rotateZ(-90deg);
  -o-transform: perspective(400px) rotateZ(-90deg);
  transform: perspective(400px) rotateZ(-90deg);
  -webkit-transform-origin: top;
  -moz-transform-origin: top;
  -ms-transform-origin: top;
  -o-transform-origin: top;
  transform-origin: top;
  -ms-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
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
  -webkit-transform: perspective(400px) rotateZ(0deg);
  -moz-transform: perspective(400px) rotateZ(0deg);
  -ms-transform: perspective(400px) rotateZ(0deg);
  -o-transform: perspective(400px) rotateZ(0deg);
  transform: perspective(400px) rotateZ(0deg);
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  width: 100%;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  text-transform: uppercase;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
  margin: 15px 0 10px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li{
  display: inline-block;
  transform: translateY(30px);
  -ms-transition: all .6s ease .3s;
  -moz-transition: all .6s ease .3s;
  -webkit-transition: all .6s ease .3s;
  -o-transition: all .6s ease .3s;
  transition: all .6s ease .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li:nth-child(odd){
  transition-delay: .4s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social li{
  transform: translateY(0);
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
  color:<?php echo $tm_sih_clr;?>;
}

<?php echo $custom_css;

 ?>
</style>