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

#wpsm_team_pro_row_<?php echo $post_id; ?> a, #wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, #wpsm_team_pro_row_<?php echo $post_id; ?> a:hover {
  text-decoration: none;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> p, #wpsm_team_pro_row_<?php echo $post_id; ?> h3, #wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item {
  margin: 20px auto;
  text-align: center;
  overflow: hidden;
  position: relative;
  padding-bottom: 25px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  bottom: 0;
  left: 0;
  padding: 20px;
  position: absolute;
  width: 86%;
  z-index: 9;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-transform: translateY(100%);
      -ms-transform: translateY(100%);
          transform: translateY(100%);
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info{
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .overlay-showing{
  bottom: 0;
  left: 0;
  padding:30px 20px 28px;
  position: absolute;
  width: 86%;
  z-index: 2;
  background-color: <?php echo $tm_content_bg_clr;?>;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .overlay-showing{
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::after{
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background-color: #fff;
  z-index: -1;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info .overlay{
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::after{
 background: <?php echo $tm_img_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description{
  margin:20px 0 10px;
  opacity: 0;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-description p{
        font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  margin-top: 15px;
  visibility: hidden;
  -webkit-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  visibility: visible;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  color: <?php echo $tm_si_clr;?>;
  height:30px;
  width:30px;
  line-height:30px;
  background-color: <?php echo $tm_sibg_clr;?>;
  border-radius:5px;
  display: block;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-description{
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> li a:hover{
  color: <?php echo $tm_sih_clr;?>;
  background-color: <?php echo $tm_sihbg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-member{
  margin-top: 20px;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-name
{
  color:<?php echo $tm_name_hover_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-position{
  color:<?php echo $tm_position_hover_clr;?>;
}
<?php echo $custom_css;

 ?>
</style>