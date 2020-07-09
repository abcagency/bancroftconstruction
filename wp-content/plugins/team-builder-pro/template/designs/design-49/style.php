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

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-section {
  padding: 0 15px;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .my-container {
  max-width: 1170px;
  margin: 0 auto;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social, #wpsm_team_pro_row_<?php echo $post_id; ?> li {
  list-style: none;
  margin: 0;
  padding: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> a{
  color: inherit;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info img{
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
	margin-bottom: 50px;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  position: absolute;
  width: 100%;
  bottom: 0;
  -webkit-transform: translateY(-100%);
      -ms-transform: translateY(-100%);
          transform: translateY(-100%);
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  padding: 40px 0;
  opacity: 0;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
  position: relative;
  margin: 20px auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay{
  opacity: 1;
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);  
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:after{
  position: absolute;
  content: '';
  opacity: 0;
  top: 50px;
  right: 30px;
  bottom: 50px;
  left: 30px;
  border-top: 1px solid <?php echo $tm_img_border_clr;?>;
  border-bottom: 1px solid <?php echo $tm_img_border_clr;?>;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
      transform: scale(0,1);
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
      transform-origin: 0 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, -webkit-transform 0.35s;
    -o-transition: opacity 0.35s, transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    transition: opacity 0.35s, transform 0.35s, -webkit-transform 0.35s;
    z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay:before{
  position: absolute;
  content: '';
  opacity: 0;
  top: 30px;
  right: 50px;
  bottom: 30px;
  left: 50px;
  border-right: 1px solid <?php echo $tm_img_border_clr;?>;
  border-left: 1px solid <?php echo $tm_img_border_clr;?>;
  -webkit-transform: scale(1,0);
  -ms-transform: scale(1,0);
      transform: scale(1,0);
  -webkit-transform-origin: 100% 0;
  -ms-transform-origin: 100% 0;
      transform-origin: 100% 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, -webkit-transform 0.35s;
    -o-transition: opacity 0.35s, transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    transition: opacity 0.35s, transform 0.35s, -webkit-transform 0.35s;
    z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay:before,
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay:after{
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
      transform: scale(1); 
  -webkit-transition-delay: 0.15s;
  -o-transition-delay: 0.15s;
     transition-delay: 0.15s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-wrapper{
  padding: 35px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
    text-align: center;
  margin-top: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
    text-align: center;
  display: inline-block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a {
  text-decoration: none;
  display: block;
  color: <?php echo $tm_si_clr;?>;
  padding:0 8px;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social a:hover{
  color:  <?php echo $tm_sih_clr;?>;;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  margin-bottom: 8px;
  text-transform: uppercase;
text-align: center;
}
<?php echo $custom_css;

 ?>
</style>