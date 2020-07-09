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

#wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item{
    background-color: #ffffff;
    overflow: hidden;
    margin-bottom: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  width: 100%;
  position: relative;
  overflow: hidden;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay{
  position: absolute;
  <?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  opacity: 0;
  visibility: hidden;
  z-index: 3;
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
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay {
 opacity: 1;
 visibility: visible;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member h3{
  color: #111;
  font-size: 18px;
  font-weight: 700;
  padding-bottom: 8px;
  text-transform: capitalize;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member h4{
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  text-transform: capitalize;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-bottom {
background: <?php echo $tm_content_bg_clr;?>;
    border: 1px solid <?php echo $tm_img_border_clr;?>;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member {
  padding:20px;
  width: calc(100% - 60px);
  position: relative;
  text-align:left;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-icon {
  width: 60px;
  height: 100%;
background: <?php echo $tm_img_border_clr;?>;
  position: absolute;
  right: 0;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-icon i{
  font-size: 30px;
  color: #fff;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  width: 100%;
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 0 7px;
  -webkit-filter: blur(10px);
  filter: blur(10px);
  -webkit-transition: all .6s ease 0s;
  transition: all .6s ease 0s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social li{
  opacity: 1;
  -webkit-filter: blur(0);
  filter: blur(0);
  -webkit-transition-delay: .1s;
          transition-delay: .1s
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social li:nth-child(even){
  -webkit-transition-delay: .3s;
          transition-delay: .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a {
  background-color: <?php echo $tm_sibg_clr;?>;
  color: <?php echo $tm_si_clr;?>;
  font-size: 15px;
  display: inline-block;
  height: 36px;
  width: 36px;
  border: 1px solid <?php echo $tm_sib_clr;?>;
  line-height: 36px;
  text-decoration: none;
  text-align: center;
  transition: all .3s ease;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  }
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  background-color: <?php echo $tm_sihbg_clr;?>;
  color: <?php echo $tm_sih_clr;?>;
}





<?php echo $custom_css;

 ?>
</style>