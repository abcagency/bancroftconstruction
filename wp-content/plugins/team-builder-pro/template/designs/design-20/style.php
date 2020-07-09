<?php 
$RGB = wpsm_hex2rgb_team_pro($tm_img_hover_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info{
  position: relative;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::after{
  position: absolute;
  content: "";
  border:30px solid #fff; 
  top: 0;
  right:0;
  border-left-color: transparent;
  border-bottom-color: transparent;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-info::before{
  position: absolute;
  content: "\f067";
  font-family: fontAwesome;
  color: <?php echo $tm_img_hover_clr;?>;
  right: 10px;
  top: 8px;
  z-index: 1;
  font-size: 16px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-info::before{
  content: "\f068";
  color:<?php echo $tm_sibg_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social{
  position: absolute;
  bottom:10px;
  right:-30px;
  -webkit-transition: all 0.6s ease;
  -moz-transition: all 0.6s ease;
  -ms-transition: all 0.6s ease;
  -o-transition: all 0.6s ease;
  transition: all 0.6s ease;
  visibility: hidden;
  z-index:2;
  opacity: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .social{
  visibility: visible;
  right:20px;
  opacity: 1;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar{
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-avatar::after{
  position: absolute;
  content: "";
  width: 0;
  height: 100%;
  left: 0;
  top:0;
<?php if($tm_img_hover_opcity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $tm_img_hover_opcity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $tm_img_hover_clr;?>;
    <?php }?>
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover .team-avatar::after{
  visibility: visible;
  opacity: .8;
  width: 100%;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .social li {
  display: block;
  margin: 15px 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .social li a{
  color: <?php echo $tm_si_clr;?>;
  height:30px;
  width:30px;
  line-height:30px;
  background-color: <?php echo $tm_sibg_clr;?>;
  border-radius: 100px;
  display: block;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-item:hover li a{
  transform: rotate(360deg);
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

#wpsm_team_pro_row_<?php echo $post_id; ?> div, .wpsm_team_pro_row div {
    box-sizing: border-box !important;
}

<?php echo $custom_css;

 ?>
</style>