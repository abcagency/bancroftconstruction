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
  text-align: center;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
          box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  position: relative;
  margin: 20px auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  text-align: center;
  z-index: 0;
  padding: 30px;
  opacity: 0;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
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
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  z-index: 2;
      width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::before {
  content: "";
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  position: absolute;
  top: 10px;
  right:10px;
  left: 10px;
  bottom: 10px;
  z-index: 1;
  -webkit-transform: rotateY(180deg) scale(0.5);
  transform: rotateY(180deg) scale(0.5);
  -webkit-transition: all 0.45s ease-out 0s;
  -o-transition: all 0.45s ease-out 0s;
  transition: all 0.45s ease-out 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::before {
  opacity: 1;
  visibility: visible;
  -webkit-transform: rotateY(0deg) scale(1);
  transform: rotateY(0deg) scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar img{
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
  -webkit-transition: -webkit-transform .5s linear 0s;
  transition: -webkit-transform .5s linear 0s;
  -o-transition: transform .5s linear 0s;
  transition: transform .5s linear 0s;
  transition: transform .5s linear 0s, -webkit-transform .5s linear 0s;  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar img{
  -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
          transform: scale(1.2);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  -webkit-transform: translateX(-100px) scale(0);
      -ms-transform: translateX(-100px) scale(0);
          transform: translateX(-100px) scale(0);
  -webkit-transition:all .3s linear .1s;
  -o-transition:all .3s linear .1s;
  transition:all .3s linear .1s;  
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  -webkit-transform: translateX(0) scale(1);
      -ms-transform: translateX(0) scale(1);
          transform: translateX(0) scale(1);
  opacity: 1;
  -webkit-transition-delay: .2s;
       -o-transition-delay: .2s;
          transition-delay: .2s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: <?php echo $tm_sibg_clr;?>;
  border-radius: 50%;
  display: block;
  color: <?php echo $tm_si_clr;?>;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-description{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  color: <?php echo $tm_sih_clr;?>;
  background-color: <?php echo $tm_sihbg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  padding: 20px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name{
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  text-transform: capitalize;
  margin-bottom: 5px;
  display: block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
}

<?php echo $custom_css;

 ?>
</style>