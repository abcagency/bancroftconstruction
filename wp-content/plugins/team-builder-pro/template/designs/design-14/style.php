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

#wpsm_team_pro_row_<?php echo $post_id; ?> ul, #wpsm_team_pro_row_<?php echo $post_id; ?> li {
  list-style: none;
  margin: 0;
  padding: 0;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> a, 
#wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, 
#wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p,
#wpsm_team_pro_row_<?php echo $post_id; ?> h3, 
#wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar {
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  z-index: 9;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name {
  background: <?php echo $tm_img_border_clr;?>;
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  position: absolute;
  bottom:55px;
  margin-bottom:12px;
  padding: 10px 20px;
  display: inline-block;
  min-width: 150px;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position{
  position: absolute;
  bottom:20px;
   background: <?php echo $tm_content_bg_clr;?>;
     font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  padding: 10px 20px;
  display: inline-block;
  min-width: 150px;
  margin-top: 5px;
  -webkit-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-detail {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 10%;
  left: 0;
  text-align: center;
  z-index:0;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-detail:before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.8);
  z-index: -1;
  -webkit-transition: .25s opacity ease;
  -o-transition: .25s opacity ease;
  transition: .25s opacity ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-border::before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-border::after {
  position: absolute;
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  content: '';
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, -webkit-transform 0.35s;
  -o-transition: opacity 0.35s, transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  transition: opacity 0.35s, transform 0.35s, -webkit-transform 0.35s;
  z-index: -1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-border::before {
  border-top: 5px solid <?php echo $tm_img_border_clr;?>;
  border-bottom: 5px solid <?php echo $tm_img_border_clr;?>;
  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
      transform: scale(0, 1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-border::after {
  border-right: 5px solid <?php echo $tm_img_border_clr;?>;
  border-left: 5px solid <?php echo $tm_img_border_clr;?>;
  -webkit-transform: scale(1, 0);
  -ms-transform: scale(1, 0);
      transform: scale(1, 0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-member {
  opacity: 0;
  visibility: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-detail {
  opacity: 1;
  top: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay {
  position: absolute;
  top: 10%;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  -webkit-transition: all 0.3s ease-in;
  -o-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
  opacity: 0;
  visibility: hidden;
  z-index: 3;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay-border:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay-border:after{
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
      transform: scale(1);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-name2 {
    font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_hover_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
  display: block;
  font-size: 24px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position2 {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_hover_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
  padding-bottom: 12px;
  position: relative;
  margin-bottom: 10px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-position2:after {
  position: absolute;
  left: 50%;
  bottom: 0;
  width: 50px;
  height: 2px;
  background: #fbc02d;
  content: "";
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p {
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
  margin: 20px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  position: relative;
  margin-top: 15px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin:0 2px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: <?php echo $tm_sibg_clr; ?>;
  border-radius: 50%;
  display: block;
  color: <?php echo $tm_si_clr; ?>;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a:hover{
  background-color: <?php echo $tm_sihbg_clr; ?>;
  color: <?php echo $tm_sih_clr; ?>;
}

<?php echo $custom_css;

 ?>
</style>