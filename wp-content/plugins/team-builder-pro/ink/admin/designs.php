<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("major-publishing-actions");
var wpsm_sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > wpsm_sticky) {
    header.classList.add("wpsm_sticky");
  } else {
    header.classList.remove("wpsm_sticky");
  }
}
</script>
<style type="text/css">
.wpsm_sticky {
    position: fixed;
    top: 0;
    font-size: 20px;
    z-index: 99999;
    width: calc(100% - 160px);
    box-shadow: 0 0 20px rgba(0,0,0,.2);
    margin-left: -23px; 
}
.wpsm_support
{
	padding: 0 20px !important;
	margin-bottom: 5px;
}
.wpsm_support a
{
	text-decoration: none;
	font-size: 18px;
	color: #000;
	margin-bottom: 10px;
}
.wpsm_support a:focus
{
box-shadow:none;	
}
.wpshopmart-import-setting{
	font-size: 12px;
}	
.btn-warning{
	background-color:#333;
	border-color:#333;
}
.btn-warning:hover{
	background: #332;
	border-color:#332;
}
.btn-group  .btn{
	    font-size: 12px !important;
    border-radius: 4px !important;
	    margin-left: 3px;
}
.wpshomart-redirect
{
	color:#ffffff;
	text-decoration: none;
}
.wpshotmart-remove-box-shad
{
	box-shadow: none !important;
}
/*
#poststuff #post-body.columns-2
{
    margin-right: 0 !important;	
}
*/
#team_pro_designs
{
    background: transparent !important;	
}
#team_pro_add
{
	background: transparent !important;
}
#post-body.columns-2 #postbox-container-1
{
float:none !important;
padding-top: 70px;
width: 100% !important;	
}
#poststuff #post-body.columns-2
{
margin-right: 0 !important;	
}
#poststuff #post-body.columns-2 #side-sortables
{
	width: 100% !important;
}
#team_pro_designs .handlediv
{
	display: none;
}
#team_pro_designs .hndle
{
	display: none;
}
#team_pro_add .handlediv
{
	display: none;
}
#team_pro_add .hndle
{
	display: none;
}
</style>

<?php
$PostId = get_the_ID();

	$Def_Settings = unserialize(get_option('wpsm_teambuilder_pro_default_settings'));
	$fildiv=get_post_meta($PostId,'filter_category_counts',true);
	$team_Meta_Settings = unserialize(get_post_meta( $PostId, 'wpsm_teampro_Meta_Settings', true));

	if( $team_Meta_Settings['tm_name_clr'] &&  $team_Meta_Settings['tm_sec_title_clr'] && $team_Meta_Settings['tm_content_bg_clr']) 
	{
	$templates_presets  = $team_Meta_Settings['templates_presets'];
	$templates  = $team_Meta_Settings['templates'];
	}
	else
	{
	$templates_presets=$Def_Settings['templates_presets'];
	$templates=$Def_Settings['templates'];
	}

	if($templates_presets=="grid")
	{
		$filter_vals=1;
	}
	else if($templates_presets=="carousel")
	{
		$filter_vals=2;
	}
	else if($templates_presets=="filter")
	{
		$filter_vals=3;
	}
	else if($templates_presets=="table")
	{
		$filter_vals=4;
	}
	else if($templates_presets=="grider")
	{
		$filter_vals=5;
	}
?>

<div class="tabs_pro_admin_wrapper">
	<div class="wpsm_site_sidebar_widget_title">
		<h4>Select Presets</h2>
			
	</div>
	<input type="hidden" id="filter_vals" value="<?php if(empty($templates_presets)) { echo 1;} else { echo $filter_vals;}?>">
	<!--Grid-->
	<div class="col-md-2 col-sm-4 col-xs-12">
		<div class="demoftr">	
			<span class="checked_temp_preset checked_temp_radio" id="checked_temp_preset_1" <?php if($templates_presets!='grid') { ?>  style="display:none" <?php } ?>><i class="fa fa-check"></i></span>
			<div class="wpsm_home_portfolio_showcase">
				<img class="wpsm_img_responsive ftr_img"  src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/g2.jpg'?>">
			</div>
			<div class="wpsm_home_portfolio_links">
				<h3 class="text-center pull-left">Grid</h3>
				<button type="hidden" <?php if($templates_presets=='grid') { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn_preset design_select_btn" id="templates_btn_preset_1" onclick="select_preset('1')"><?php if($templates_presets=='grid'){  echo "Selected"; } else { echo "Select"; } ?></button>
				<input type="radio" onchange="hide_color_setting()" name="templates_presets" id="templates_presets_1" value="grid" <?php if($templates_presets=='grid'){  echo "checked"; } ?>  style="display:none">
		
			</div>	
		</div>	
	</div>
	<!--Carouse-->
	<div class="col-md-2 col-sm-4 col-xs-12">
		<div class="demoftr">	
			<span class="checked_temp_preset checked_temp_radio" id="checked_temp_preset_2" <?php if($templates_presets!='carousel') { ?>  style="display:none" <?php } ?>><i class="fa fa-check"></i></span>
			<div class="wpsm_home_portfolio_showcase">
				<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/c2.png'?>">
			</div>
			<div class="wpsm_home_portfolio_links">
			<h3 class="text-center pull-left">Carousel</h3>
			<button type="button" <?php if($templates_presets=='carousel') { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn_preset design_select_btn" id="templates_btn_preset_2" onclick="select_preset('2')"><?php if($templates_presets=='carousel'){  echo "Selected"; } else { echo "Select"; } ?></button>
			<input type="radio" onchange="hide_color_setting()" name="templates_presets" id="templates_presets_2" value="carousel" <?php if($templates_presets=='carousel'){  echo "checked"; } ?> style="display:none" >
			</div>	
		</div>	
	</div>
	<!--filter-->
		<div class="col-md-2 col-sm-4 col-xs-12" id="flt_div">
		<div class="demoftr">	
			<span class="checked_temp_preset checked_temp_radio" id="checked_temp_preset_3" <?php if($templates_presets!='filter') { ?>  style="display:none" <?php } ?>><i class="fa fa-check"></i></span>
			<div class="wpsm_home_portfolio_showcase">
				<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/filter.png'?>">
			</div>
			<div class="wpsm_home_portfolio_links">
			<h3 class="text-center pull-left">Filter</h3>
			<button type="button" <?php if($templates_presets=='filter') { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn_preset design_select_btn" id="templates_btn_preset_3" onclick="select_preset('3')"><?php if($templates_presets=='filter'){  echo "Selected"; } else { echo "Select"; } ?></button>
			<input type="radio" onchange="hide_color_setting()" name="templates_presets" id="templates_presets_3" value="filter" <?php if($templates_presets=='filter'){  echo "checked"; } ?> style="display:none" >
			</div>	
		</div>	
	</div>
	<!--Table-->
	<div class="col-md-2 col-sm-4 col-xs-12" id="tbl_div">
		<div class="demoftr">	
			<span class="checked_temp_preset checked_temp_radio" id="checked_temp_preset_4" <?php if($templates_presets!='table') { ?>  style="display:none" <?php } ?>><i class="fa fa-check"></i></span>
			<div class="wpsm_home_portfolio_showcase">
				<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/table.jpg'?>">
			</div>
			<div class="wpsm_home_portfolio_links">
			<h3 class="text-center pull-left">Table</h3>
			<button type="button" <?php if($templates_presets=='table') { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn_preset design_select_btn" id="templates_btn_preset_4" onclick="select_preset('4')"><?php if($templates_presets=='table'){  echo "Selected"; } else { echo "Select"; } ?></button>
			<input type="radio" onchange="hide_color_setting()" name="templates_presets" id="templates_presets_4" value="table" <?php if($templates_presets=='table'){  echo "checked"; } ?> style="display:none" >
			</div>	
		</div>	
	</div>
		<!--Grider-->
	<div class="col-md-2 col-sm-4 col-xs-12" id="grider_div">
		<div class="demoftr">	
			<span class="checked_temp_preset checked_temp_radio" id="checked_temp_preset_5" <?php if($templates_presets!='grider') { ?>  style="display:none" <?php } ?>><i class="fa fa-check"></i></span>
			<div class="wpsm_home_portfolio_showcase">
				<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/gridder.jpg'?>">
			</div>
			<div class="wpsm_home_portfolio_links">
			<h3 class="text-center pull-left">Gridder</h3>
			<button type="button" <?php if($templates_presets=='grider') { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn_preset design_select_btn" id="templates_btn_preset_5" onclick="select_preset('5')"><?php if($templates_presets=='grider'){  echo "Selected"; } else { echo "Select"; } ?></button>
			<input type="radio" onchange="hide_color_setting()" name="templates_presets" id="templates_presets_5" value="grider" <?php if($templates_presets=='grider'){  echo "checked"; } ?> style="display:none" >
			</div>	
		</div>	
	</div>
</div>
<div class="tabs_pro_admin_wrapper">
	<div class="wpsm_site_sidebar_widget_title">
		<h4>Select Your Designs Templates</h2>
	</div>
	<?php
	//This if condition will work after page will be publish
	if(get_post_status( $PostId )=="publish")
	{
		if($templates_presets=="grid")
		{
		?>
	<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1">	
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>		
	   </a>
	 <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	 <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	    <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	       <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
	if($templates_presets=="filter")
		{
		?>
	<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	 <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" >
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
		if($templates_presets=="carousel")
		{
		?>
		<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" >
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	    <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	    <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
				
	   </a>
		<?php
		}
		if($templates_presets=="table")
		{
		?>
		<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	    <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	    <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
				
	   </a>
		<?php
		}
		if($templates_presets=="grider")
		{
		?>
		<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	    <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	    <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" >
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
				
	   </a>
		<?php
		}
	}
//This if Condition will work After Import Setting
	if(get_post_status( $PostId )=="draft")
	{
		if($templates_presets=="grid")
		{
		?>
	<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1">
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
		if($templates_presets=="filter")
		{
		?>
	<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" >
		
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	     <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
		if($templates_presets=="carousel")
		{
		?>
		<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" >
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   	   <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
		if($templates_presets=="table")
		{
		?>
		<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" >
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	  <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
		if($templates_presets=="grider")
		{
		?>
		<a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	  <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
		<?php
		}
	}
//This Else condition will work before page Publish and Import Setting
	if(get_post_status( $PostId )=="auto-draft")
		{?>
	   <a href="#0" id="cd-btn-h" class="btn-select-design-button btn-select-design-button-1" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/grid_img.jpg"/>
						</div>
					</div>	
				
	   </a>
	      <a href="#0" id="cd-btn-c" class="btn-select-design-button btn-select-design-button-2" >
			<!--<div class="clearfix">-->
				<!--<div class="col-md-8 col-sm-8">-->
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/carousel.jpg"/>
						</div>
					</div>	
				
	   </a>
	   <a href="#0" id="cd-btn-f" class="btn-select-design-button btn-select-design-button-3" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/filter_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	   <a href="#0" id="cd-btn-t" class="btn-select-design-button btn-select-design-button-4" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/tabular_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	    <a href="#0" id="cd-btn-gd" class="btn-select-design-button btn-select-design-button-5" style="display: none;">
			
					<div class="demoftr wpshotmart-remove-box-shad">	
						<div class="wpsm_home_portfolio">
						<img src="<?php echo wpshopmart_team_pro_directory_url;?>/assets/images/gridder_img.jpg"/>
						</div>
					</div>	
			
	   </a>
	  <?php
	  }
	  ?> 
		<!-- your content here -->

	<div class="cd-panel from-right cn_ind_clr_enable_class" id="cd-panel-h">
		<header class="cd-panel-header">
			<h1>Select Designs</h1>
			<a href="#0" class="cd-panel-close" id="cd-panel-close-h">Close</a>
		</header>

		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<?php 
				$m=1;
				for($i=1;$i<=50;$i++){ 
					$gridimg=50+$m;
				 ?>
					<div class="col-md-6">
						<div class="demoftr">	
							<span class="checked_temp_radio"  id="checked_temp_radio_<?php echo $i; ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i class="fa fa-check"></i></span>
							<div class="wpsm_home_portfolio_showcase">
								<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/design/design-'.$gridimg.'.png'?>">
								<span style="position: absolute;
									bottom: 0px;
									width: 30%;
									overflow: hidden;
									text-align: center;
									background: rgba(0,0,0,0.8);
									padding-top: 5px;
									padding-bottom: 5px;
									color: #fff;
									border-top-left-radius: 15px;
									font-size: 13px;
									right: 0;"><a class="wpshomart-redirect" target="_blank" href="http://demo.wpshopmart.com/team-pro-demo/grid-<?php echo $i;?>">Demo</a></span>
							</div>
							<div class="wpsm_home_portfolio_links">
								<h3 class="text-center pull-left">Design <?php echo $m; ?></h3>

								<div class="btn-group pull-right">
								<button gridattr="grid" type="button" <?php if($templates==$i) { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn" id="templates_btn<?php echo $i; ?>" onclick="select_template('<?php echo $i; ?>')"><?php if($templates==$i){  echo "Selected"; } else { echo "Select"; } ?></button>
								
							</div>
								<input type="radio" name="templates" id="design<?php echo $i; ?>" value="<?php echo $i; ?>" <?php if($templates==$i){  echo "checked"; } ?> style="display:none">
							</div>		
						</div>		
					</div>
				<?php 
				$m++;
			} ?>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->


<!--select design for owl carousel-->
<div class="cd-panel from-right cn_ind_clr_enable_class" id="cd-panel-c">
		<header class="cd-panel-header">
			<h1>Select Designs</h1>
			<a href="#0" class="cd-panel-close" id="cd-panel-close-c">Close</a>
		</header>

		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<?php for($i=1;$i<=50;$i++){ ?>
					<div class="col-md-6">
						<div class="demoftr">	
							<span class="checked_temp_radio"  id="checked_temp_radios_<?php echo $i; ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i class="fa fa-check"></i></span>
							<div class="wpsm_home_portfolio_showcase">
								<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/design/design-'.$i.'.png'?>">
								<span style="position: absolute;
									bottom: 0px;
									width: 30%;
									overflow: hidden;
									text-align: center;
									background: rgba(0,0,0,0.8);
									padding-top: 5px;
									padding-bottom: 5px;
									color: #fff;
									border-top-left-radius: 15px;
									font-size: 13px;
									right: 0;"><a class="wpshomart-redirect" target="_blank" href="http://demo.wpshopmart.com/team-pro-demo/slider-<?php echo $i;?>">Demo</a></span>
							</div>
							<div class="wpsm_home_portfolio_links">
								<h3 class="text-center pull-left">Design <?php echo $i; ?></h3>&nbsp;
								<div class="btn-group pull-right">
								<button gridattr="slide" type="button" <?php if($templates==$i) { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn" id="templates_btns<?php echo $i; ?>" onclick="select_template('<?php echo $i; ?>')"><?php if($templates==$i){  echo "Selected"; } else { echo "Select"; } ?></button>
							
							</div>		
							<input type="radio" name="templates" id="designs<?php echo $i; ?>" value="<?php echo $i; ?>" <?php if($templates==$i){  echo "checked"; } ?> style="display:none">
						</div>		
					</div></div>	
				<?php } ?>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> 
<!-- end select design for wol carousel-->

<!--select design for filter-->
<div class="cd-panel from-right cn_ind_clr_enable_class" id="cd-panel-f">
		<header class="cd-panel-header">
			<h1>Select Designs</h1>
			<a href="#0" class="cd-panel-close" id="cd-panel-close-f">Close</a>
		</header>

		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<?php 
				$m=1;
				for($i=1;$i<=50;$i++){ 
					$gridimg=50+$i;
				 ?>
					<div class="col-md-6">
						<div class="demoftr">	
							<span class="checked_temp_radio"  id="checked_temp_radiof_<?php echo $i; ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i class="fa fa-check"></i></span>
							<div class="wpsm_home_portfolio_showcase">
								<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/design/design-'.$gridimg.'.png'?>">
								<span style="position: absolute;
									bottom: 0px;
									width: 30%;
									overflow: hidden;
									text-align: center;
									background: rgba(0,0,0,0.8);
									padding-top: 5px;
									padding-bottom: 5px;
									color: #fff;
									border-top-left-radius: 15px;
									font-size: 13px;
									right: 0;"><a class="wpshomart-redirect" target="_blank" href="http://demo.wpshopmart.com/team-pro-demo/filter">Demo</a></span>
							</div>
							<div class="wpsm_home_portfolio_links">
								<h3 class="text-center pull-left">Design <?php echo $m; ?></h3>
								<div class="btn-group pull-right">
								<button gridattr="filter" type="button" <?php if($templates==$i) { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn" id="templates_btnf<?php echo $i; ?>" onclick="select_template('<?php echo $i; ?>')"><?php if($templates==$i){  echo "Selected"; } else { echo "Select"; } ?></button>

							</div>		
								<input type="radio" name="templates" id="designf<?php echo $i; ?>" value="<?php echo $i; ?>" <?php if($templates==$i){  echo "checked"; } ?> style="display:none">
						</div>	</div>		
					</div>
				<?php 
				$m++;
			} ?>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel -->




	<!--This will work for tabular format-->
	<div class="cd-panel from-right cn_ind_clr_enable_class" id="cd-panel-t">
		<header class="cd-panel-header">
			<h1>Select Designs</h1>
			<a href="#0" class="cd-panel-close" id="cd-panel-close-t">Close</a>
		</header>

		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<?php 
				$m=1;
				for($i=200;$i>=199;$i--){ 
					$gridimg=100+143;
				 ?>
					<div class="col-md-6">
						<div class="demoftr">
							<span class="checked_temp_radio"  id="checked_temp_radiot_<?php echo $i; ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i class="fa fa-check"></i></span>
							<div class="wpsm_home_portfolio_showcase">
								<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/design/design-'.$i.'.png'?>">
								<span style="position: absolute;
									bottom: 0px;
									width: 30%;
									overflow: hidden;
									text-align: center;
									background: rgba(0,0,0,0.8);
									padding-top: 5px;
									padding-bottom: 5px;
									color: #fff;
									border-top-left-radius: 15px;
									font-size: 13px;
									right: 0;"><a class="wpshomart-redirect" target="_blank" href="http://demo.wpshopmart.com/team-pro-demo/tabular/">Demo</a></span>
							</div>
							<div class="wpsm_home_portfolio_links">
								<h3 class="text-center pull-left">Design <?php echo $m; ?></h3>
								<div class="btn-group pull-right">
								<button gridattr="tabular" type="button" <?php if($templates==$i) { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn" id="templates_btntb<?php echo $i; ?>" onclick="select_template('<?php echo $i; ?>')"><?php if($templates==$i){  echo "Selected"; } else { echo "Select"; } ?></button>

							</div>		
								<input type="radio" name="templates" id="designtb<?php echo $i; ?>" value="<?php echo $i; ?>" <?php if($templates==$i){  echo "checked"; } ?> style="display:none">
						</div>	</div>		
					</div>
				<?php 
				$m++;
			} ?>
			</div> 
		</div> 
	</div>
	<!--End This will work for tabular format-->

	<!-- It will be work for Gridder -->
	<div class="cd-panel from-right cn_ind_clr_enable_class" id="cd-panel-gd">
		<header class="cd-panel-header">
			<h1>Select Designs</h1>
			<a href="#0" class="cd-panel-close" id="cd-panel-close-gd">Close</a>
		</header>

		<div class="cd-panel-container">
			<div class="cd-panel-content">
				<?php 
				$m=1;
				for($i=101;$i<=104;$i++){ 
				 ?>
					<div class="col-md-6">
						<div class="demoftr">	
							<span class="checked_temp_radio"  id="checked_temp_radiogdr_<?php echo $i; ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i class="fa fa-check"></i></span>
							<div class="wpsm_home_portfolio_showcase">
								<img class="wpsm_img_responsive ftr_img" src="<?php echo wpshopmart_team_pro_directory_url.'assets/images/design/design-'.$i.'.png'?>">
								<span style="position: absolute;
									bottom: 0px;
									width: 30%;
									overflow: hidden;
									text-align: center;
									background: rgba(0,0,0,0.8);
									padding-top: 5px;
									padding-bottom: 5px;
									color: #fff;
									border-top-left-radius: 15px;
									font-size: 13px;
									right: 0;"><a class="wpshomart-redirect" target="_blank" href="http://demo.wpshopmart.com/team-pro-demo/gridder-<?php echo $m;?>/">Demo</a></span>
							</div>
							<div class="wpsm_home_portfolio_links">
								<h3 class="text-center pull-left">Design <?php echo $m; ?></h3>
								<div class="btn-group pull-right">
								<button gridattr="gridder" type="button" <?php if($templates==$i) { ?> disabled="disabled" <?php } ?> class="pull-right btn btn-primary design_btn" id="templates_btngrdr<?php echo $i; ?>" onclick="select_template('<?php echo $i; ?>')"><?php if($templates==$i){  echo "Selected"; } else { echo "Select"; } ?></button>

							</div>		
								<input type="radio" name="templates" id="designgrdr<?php echo $i; ?>" value="<?php echo $i; ?>" <?php if($templates==$i){  echo "checked"; } ?> style="display:none">
						</div>	</div>		
					</div>
				<?php 
				$m++;
			} ?>
			</div> 
		</div> 
	</div>
	<!-- It will be work for Gridder End-->
		<!-- your content here -->


	<script>
			jQuery(document).ready(function($){
	if("<?php echo $templates_presets;?>"=="grid")
	{
	 jQuery("#carousel-toggle").hide();
	  jQuery("#filter-toggle").hide();
	  jQuery("#background-toggle").show();
	}
	if("<?php echo $templates_presets;?>"=="carousel")
	{
 	 jQuery("#carousel-toggle").show();
	 jQuery("#filter-toggle").hide();
	 jQuery("#background-toggle").show();
	}
	if("<?php echo $templates_presets;?>"=="filter")
	{
	jQuery("#carousel-toggle").hide();
	jQuery("#filter-toggle").show();
	jQuery("#background-toggle").show();
	}
	if("<?php echo $templates_presets;?>"=="table")
	{

	jQuery("#carousel-toggle").hide();
	  jQuery("#filter-toggle").hide();
	   jQuery("#background-toggle").hide();
	}
	if("<?php echo $templates_presets;?>"=="grider")
	{

	jQuery("#carousel-toggle").hide();
	  jQuery("#filter-toggle").hide();
	   jQuery("#background-toggle").hide();
	}
			//open the lateral panel
			$('#cd-btn-h').on('click', function(event){
				event.preventDefault();
				$('#cd-panel-h').addClass('is-visible');
			});
			//clode the lateral panel
			$('#cd-panel-h').on('click', function(event){
				if( $(event.target).is('#cd-panel-h') || $(event.target).is('#cd-panel-close-h') ) { 
					$('#cd-panel-h').removeClass('is-visible');
					event.preventDefault();
				}
			});

			//open owl carousel slider
			$('#cd-btn-c').on('click', function(event){
				event.preventDefault();
				$('#cd-panel-c').addClass('is-visible');
			});
			//clode the lateral panel
			$('#cd-panel-c').on('click', function(event){
				if( $(event.target).is('#cd-panel-c') || $(event.target).is('#cd-panel-close-c') ) { 
					$('#cd-panel-c').removeClass('is-visible');
					event.preventDefault();
				}
			});

				//open owl carousel slider
			$('#cd-btn-f').on('click', function(event){
				event.preventDefault();
				$('#cd-panel-f').addClass('is-visible');
			});
			//clode the lateral panel
			$('#cd-panel-f').on('click', function(event){
				if( $(event.target).is('#cd-panel-f') || $(event.target).is('#cd-panel-close-f') ) { 
					$('#cd-panel-f').removeClass('is-visible');
					event.preventDefault();
				}
			});

				//open Tabular Format
			$('#cd-btn-t').on('click', function(event){
				event.preventDefault();
				$('#cd-panel-t').addClass('is-visible');
			});
			//clode the lateral panel
			$('#cd-panel-t').on('click', function(event){
				if( $(event.target).is('#cd-panel-t') || $(event.target).is('#cd-panel-close-t') ) { 
					$('#cd-panel-t').removeClass('is-visible');
					event.preventDefault();
				}
			});

			//open Gridder Format
						$('#cd-btn-gd').on('click', function(event){
				event.preventDefault();
				$('#cd-panel-gd').addClass('is-visible');
			});
			//clode the lateral panel
			$('#cd-panel-gd').on('click', function(event){
				if( $(event.target).is('#cd-panel-gd') || $(event.target).is('#cd-panel-close-gd') ) { 
					$('#cd-panel-gd').removeClass('is-visible');
					event.preventDefault();
				}
			});
		});
	</script>
</div>

<script>
function hide_color_setting(id){
			 value = jQuery("input[name=templates_presets]:checked").val();		 
			 if(value=="carousel"){
				jQuery(".cn_ind_clr_enable_class").show(500);
				jQuery(".cn_ind_clr_select").hide(500);
				
			}else{
				
				jQuery(".cn_ind_clr_enable_class").hide(500);
				jQuery(".cn_ind_clr_select").show(500);
			}
		}
</script>
<script>
function select_template(id)
{
	if(jQuery("#templates_btn"+id).attr("gridattr")=="grid")
	{
	//jQuery(".all_import_hide").hide();
	jQuery("#grid_"+id).show();
	}
	if(jQuery("#templates_btns"+id).attr("gridattr")=="slide")
	{
	//jQuery(".all_import_hide").hide();
	jQuery("#slide_"+id).show();	
	}
	if(jQuery("#templates_btnf"+id).attr("gridattr")=="filter")
	{
	//jQuery(".all_import_hide").hide();
	jQuery("#filter_"+id).show();	
	}
	if(jQuery("#templates_btnf"+id).attr("gridattr")=="tabular")
	{
	//jQuery(".all_import_hide").hide();
	jQuery("#filter_"+id).show();	
	}
		if(jQuery("#templates_btnf"+id).attr("gridattr")=="gridder")
	{
	//jQuery(".all_import_hide").hide();
	jQuery("#filter_"+id).show();	
	}

	jQuery(".design_btn").attr('style','');
	jQuery(".design_btn").prop("disabled", false);
	jQuery(".design_btn").text("Select");
	jQuery(".checked_temp_radio").hide();
	jQuery("#checked_temp_radio_"+id).show();
	jQuery("#checked_temp_radios_"+id).show();
	jQuery("#checked_temp_radiof_"+id).show();
	jQuery("#checked_temp_radiot_"+id).show();
	jQuery("#templates_btn"+id).attr('disabled','disabled');
	jQuery("#templates_btn"+id).attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btn"+id).text("Selected");
	 jQuery("#design"+id).prop( "checked", true );

	jQuery("#templates_btns"+id).attr('disabled','disabled');
	jQuery("#templates_btns"+id).attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btns"+id).text("Selected");
	 jQuery("#designs"+id).prop( "checked", true );

	jQuery("#templates_btnf"+id).attr('disabled','disabled');
	jQuery("#templates_btnf"+id).attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btnf"+id).text("Selected");
	jQuery("#designf"+id).prop( "checked", true );

	jQuery("#templates_btntb"+id).attr('disabled','disabled');
	jQuery("#templates_btntb"+id).attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btntb"+id).text("Selected");
	jQuery("#designtb"+id).prop( "checked", true );

	jQuery("#templates_btngrdr"+id).attr('disabled','disabled');
	jQuery("#templates_btngrdr"+id).attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btngrdr"+id).text("Selected");
	jQuery("#designgrdr"+id).prop( "checked", true );
	}
</script>

<script>
function select_preset(id)
{
	if(id==1)
	{
	jQuery("#filter_vals").val(id);	
	jQuery(".checked_temp_radio").hide();	
	jQuery("#checked_temp_radio_1").show();
	jQuery("#templates_btn1").attr('disabled','disabled');
	jQuery("#templates_btn1").attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btn1").text("Selected");
	jQuery("#design1").prop( "checked", true );
	jQuery("#carousel-toggle").hide();
	jQuery("#filter-toggle").hide();
	jQuery("#background-toggle").show();
	jQuery(".wpsm_filter_view").hide();
	}
		if(id==2)
	{
	jQuery("#filter_vals").val(id);		
	jQuery(".wpsm_filter_view").hide();	
	jQuery(".checked_temp_radio").hide();	
	jQuery("#checked_temp_radios_1").show();
	jQuery("#templates_btns1").attr('disabled','disabled');
	jQuery("#templates_btns1").attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btns1").text("Selected");
	jQuery("#designs1").prop( "checked", true );
	jQuery("#carousel-toggle").show();
	jQuery("#filter-toggle").hide();
	jQuery("#background-toggle").show();
	}
		if(id==3)
	{
	jQuery("#filter_vals").val(id);		
	jQuery(".wpsm_filter_view").show();	
	jQuery(".checked_temp_radio").hide();	
	jQuery("#checked_temp_radiof_1").show();
	jQuery("#templates_btnf1").attr('disabled','disabled');
	jQuery("#templates_btnf1").attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btnf1").text("Selected");
	jQuery("#designf1").prop( "checked", true );
	jQuery("#carousel-toggle").hide();
	jQuery("#filter-toggle").show();
	jQuery("#background-toggle").show();
	}
	if(id==4)
	{
	jQuery("#filter_vals").val(id);		
	jQuery(".wpsm_filter_view").hide();	
	jQuery(".checked_temp_radio").hide();	
	jQuery("#checked_temp_radiot_200").show();
	jQuery("#checked_temp_radiot_200").show();	
	jQuery("#templates_btntb200").attr('disabled','disabled');
	jQuery("#templates_btntb200").attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btntb200").text("Selected");
	jQuery("#designtb200").prop( "checked", true );
		 jQuery("#carousel-toggle").hide();
	  jQuery("#filter-toggle").hide();
	   jQuery("#background-toggle").hide();
	}
	if(id==5)
	{
	jQuery("#filter_vals").val(id);		
	jQuery(".wpsm_filter_view").hide();	
	jQuery(".checked_temp_radio").hide();	
	jQuery("#checked_temp_radiogdr_101").show();	
	jQuery("#templates_btngrdr101").attr('disabled','disabled');
	jQuery("#templates_btngrdr101").attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btngrdr101").text("Selected");
	jQuery("#designgrdr101").prop( "checked", true );
			 jQuery("#carousel-toggle").hide();
	  jQuery("#filter-toggle").hide();
	  jQuery("#background-toggle").hide();
	}

	if((id==1) || (id==3))
	{
	jQuery("#testimonail_slider_div").hide();	
	}
	else
	{
	jQuery("#testimonail_slider_div").show();	
	}
	jQuery(".design_btn_preset").attr('style','');
	jQuery(".design_btn_preset").prop("disabled", false);
	jQuery(".design_btn_preset").text("Select");
	
	jQuery(".checked_temp_preset").hide();
	jQuery("#checked_temp_preset_"+id).show();
	
	jQuery(".checked_temp_preset").hide();
	jQuery("#checked_temp_preset_"+id).show();
	
	jQuery(".btn-select-design-button").hide();
	
	jQuery(".btn-select-design-button-"+id).show();
	
	jQuery("#templates_btn_preset_"+id).attr('disabled','disabled');
	jQuery("#templates_btn_preset_"+id).attr('style','background:#F50000;border-color:#F50000;');
	jQuery("#templates_btn_preset_"+id).text("Selected");
	jQuery("#templates_presets_"+id).prop( "checked", true );
	
	 value = jQuery("input[name=templates_presets]:checked").val();
			 
			 if(value=="carousel"){
				jQuery(".cn_ind_clr_enable_class").show(500);
				//jQuery(".cn_ind_clr_select").hide(500);	
			}
			if(value=="grid"){	
				jQuery(".cn_ind_clr_enable_class").show(500);
				//jQuery(".cn_ind_clr_select").show(500);
			}
			if(value=="filter"){
				jQuery(".cn_ind_clr_enable_class").show(500);
			}
			if(value=="table"){
				jQuery(".cn_ind_clr_enable_class").show(500);
			}	
			if(value=="grider"){
				jQuery(".cn_ind_clr_enable_class").show(500);
			}	
}
</script>
<div class="wpsm_support"><a href="https://wpshopmart.com/support" target="_blank">Click Here For Support</a></div>
<div class="wpsm_support"><a href="https://wpshopmart.com/docs/plugins/team-pro/" target="_blank">Click Here Team Builder To Read Documentation</a></div>