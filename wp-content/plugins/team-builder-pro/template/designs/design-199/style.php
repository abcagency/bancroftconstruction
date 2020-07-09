<style>
<?php 
$RGB = wpsm_hex2rgb_team_pro($tm_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .fa
{
 font: normal normal normal <?php echo $team_social_icon_size;?>px/1 FontAwesome !important; 
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

#wpsm_team_pro_row_<?php echo $post_id; ?> ul,
#wpsm_team_pro_row_<?php echo $post_id; ?> li {
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table{
  display: table;
  width: 100%;
  color: #111;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table-row {
  display: table-row;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table-cell {
  display: table-cell;
  padding:20px 10px;
  vertical-align: middle;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-name {
  font-size:<?php echo $tm_name_size;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_name_clr;?>;
  font-weight:<?php echo $tm_name_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-designation {
   font-size:<?php echo $tm_position_size ;?>px;
  font-family:'<?php echo $font_family;?>';
  color:<?php echo $tm_position_clr;?>;
  font-weight:<?php echo $tm_position_weight ;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-description {
      font-size:<?php echo $tm_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $tm_content_clr;?>;
    font-weight:<?php echo $tm_content_weight;?>;
    line-height:<?php echo $tm_content_line;?>px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-head .wpsm-table-cell p{
  text-transform:capitalize;
  font-size: 15px;
  color: #000;
  font-weight: 600;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-2 .wpsm-table-row:nth-child(2n+1) {
  background-color: #f9f9f9;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-2 .table-head.wpsm-table-row{
  background-color:#eee;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table .wpsm-img-holder {
  max-width: 75px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-cell-inner{
  max-width: 400px;
  font-size: 15px;
  text-transform: capitalize;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .table-description .wpsm-cell-inner {
  min-width: 240px;
  text-transform: unset;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-social-icons {
  list-style: none;
  padding: 0;
  margin: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-social-icons li {
  display: inline-block;
  padding: 0 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-social-icons a {
  display: block;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  -o-transition: transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  color: <?php echo $tm_si_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-social-icons a:hover {
  -webkit-transform: translateY(4px);
  -ms-transform: translateY(4px);
      transform: translateY(4px);
}
@media screen and (max-width: 768px){
  #wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table-row.table-head {
    display: none
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table {
    display:block;
   }
   #wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table-row {
    display:block;
   }

   #wpsm_team_pro_row_<?php echo $post_id; ?> .table-2 .wpsm-table-row {
    padding: 20px 15px;
 }
   #wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table .wpsm-table-cell {
    padding: 0;
    display:block;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table .wpsm-img-holder {
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .table-designation, 
  #wpsm_team_pro_row_<?php echo $post_id; ?> .table-name {
    overflow: hidden;
}
  #wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-table .table-description{
    clear: both;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .table-description .wpsm-cell-inner{
    max-width: none;
  }
  #wpsm_team_pro_row_<?php echo $post_id; ?> .table-description .wpsm-cell-inner p{
   margin: 15px 0;
  }
}
<?php echo $custom_css;

 ?>
</style>