<?php $RGB2 = wpsm_hex2rgb_team_pro($tm_img_overlay_clr);
$HoverColorRGB2 = implode(", ", $RGB2); 
//Sec-Background Settings//
?>
<style>
#wpsm_team_pro_row_<?php echo $post_id; ?>
{
<?php
/*	
<?php switch ($tm_image_bg) {
case "Color":
?> background:<?php echo $team_bg_clr;?>;
<?php
break;
case "Transparent":
?> background:transparent;
 <?php
break;
case "Image":
?> background-image:url("<?php echo $team_favicon;?>");
background-size:<?php echo $tm_bg_size;?>;
background-repeat:<?php echo $tm_bg_repeat;?>;
background-position:<?php echo $tm_bg_position;?>;
<?php if($tm_show_prlex=="yes"){?>
background-attachment: fixed;
<?php }?>
 <?php
break;
}?>
position:relative;
width:100%;
overflow:hidden;
text-align:left;
*/
?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsmtm-container {
max-width:1170px;
width:100%;
margin:0 auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm_team_pro_row_overlay_<?php echo $post_id; ?>{
/*padding-top:<?php echo $tm_padding_TB;?>px;
padding-left:<?php echo $tm_padding_LR;?>px;
padding-right:<?php echo $tm_padding_LR;?>px;
padding-bottom:<?php echo $tm_padding_TB;?>px;*/
overflow:hidden;
<?php /*if($tm_image_bg=="Image" && $tm_show_img_overlay=="yes"){ ?>
<?php if($tm_img_bg_opacity<="9"){ ?>
background: rgba(<?php echo $HoverColorRGB2; ?>, 0.<?php echo $tm_img_bg_opacity; ?>);
<?php } else{ ?>
background: rgb(<?php echo $HoverColorRGB2; ?>);<?php }?>
<?php }
*/
?>	
<?php
							//star color and size Settings                            
?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .rating-container .empty-stars {
	color:<?php echo $tm_empstar_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .rating-container .filled-stars{
	color:<?php echo $tm_fillstar_clr ;?>;
	-webkit-text-stroke: 1px <?php echo $tm_filstr_bord_clr;?>;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-rating
{
	font-size:<?php echo $my_star_size;?>px;
}
<?php
							//Another Settings                            
	?>
.wpsm_tm_wrapper_<?php echo $post_id;?>{
	display:block;
	/*overflow:hidden;*/
	width:100%;
}
@media only screen and (max-width:1300px)  {
	#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm_team_pro_row_overlay_<?php echo $post_id; ?>{
	padding:<?php echo $tm_padding_TB;?>px 20px <?php echo $tm_padding_TB;?>px 20px !important;
} }
@media only screen and (max-width:320px)  {
	#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm_team_pro_row_overlay_<?php echo $post_id; ?>{
	padding:<?php echo $tm_padding_TB;?>px 5px <?php echo $tm_padding_TB;?>px 5px !important;
}}
			
<?php
			
if($tm_nav_type=='1' || $tm_nav_type=='3') //for Buttons (button & both)
		{
			if($tm_nav_btn_position!="botttom_center")
			{ 
				switch($tm_nav_btn_position)
				{	
					case("botttom_left"):
						?>			
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav{text-align:left;}
						<?php
					break;
					case("botttom_right"):
						?>			
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav{text-align:right;}
						<?php
					break;
						case("top_center"): 
					?>			
					#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav{position:absolute;top:0;width:100%;margin:auto;}
					#wpsm_testi_box_carousel_<?php echo $post_id;?> .owl-stage-outer{margin-top:50px;}
					<?php
				break;
				case("top_left"):
					?>			
					#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav{position:absolute;top:0;}
					#wpsm_testi_box_carousel_<?php echo $post_id;?> .owl-stage-outer{margin-top:50px;}
					<?php
				break;
				case("top_right"):
					?>			
					#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav{position:absolute;top:0;right:0;}
					#wpsm_testi_box_carousel_<?php echo $post_id;?> .owl-stage-outer{margin-top:50px;}
					<?php
				break;
				case("on_content"):	
					?>
											
					#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav {position:absolute;width:100%;top:25%;}
					#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next{position:relative;float:right;vertical-align:middle;}
					#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev{position:relative;float:left;}
					<?php
								break;
							}//switch end
						}
												//navigation color Settings
						
							//Button Colors
						?>
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev{color:<?php echo $tm_nav_btn_font_clr;?>;background-color:<?php echo $tm_nav_btn_bg_clr;?>;}
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next{color:<?php echo $tm_nav_btn_font_clr;?>;background-color:<?php echo $tm_nav_btn_bg_clr;?>;}
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev:hover{color:<?php echo $tm_nav_btn_font_hvr_clr;?>;background-color:<?php echo $tm_nav_btn_hvr_clr;?>;}
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next:hover{color:<?php echo $tm_nav_btn_font_hvr_clr;?>;background-color:<?php echo $tm_nav_btn_hvr_clr;?>;}
						
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-prev,
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-nav .owl-next
						{	
							font-weight:700;
							<?php						//Btn Font Size
							switch($tm_nav_btn_size)
							{	
								case("Small"):
									?>
										font-size:14px;
									<?php
								break;
								case("Medium"): 
									?>
										font-size:16px;padding:6px 12px;
									<?php	
								break;
								case("Large"):
									?>
										font-size:18px;padding:8px 15px;
									<?php	
								break;
								
							}
							?>
						}
						
							<?php
				}
								//For dots (Dots and Both)	
	 
			if($tm_nav_type=='2' || $tm_nav_type=='3') 
				{
				switch($tm_nav_dot_size)		//dots Size And Shape Settings
					{	
					case("Small"): 
						switch($tm_nav_dot_shape)
						{	
							case("Rectangle"): 
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:25px;border-radius:0;}
								<?php	
							break;
							case("Square"): 
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{border-radius:0;}
								<?php	
							break;
							case("Oval"):  
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:25px;}
								<?php	
							break;
						}	
					break;
					case("Medium"):  
						switch($tm_nav_dot_shape)
						{	
							case("Circle"):  
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:22px;height:22px;}
								<?php	
							break;
							case("Rectangle"):  
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:22px;height:15px;border-radius:0;}
								<?php	
							break;
							case("Square"):  
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:20px;height:20px;border-radius:0;}
								<?php	
							break;
							case("Oval"):
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:22px;height:15px;}
								<?php	
							break;
						}	
					break;
					case("Large"): 
						switch($tm_nav_dot_shape)
						{	
							case("Circle"):
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:25px;height:25px;}
								<?php	
							break;
							case("Rectangle"):
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:28px;height:20px;border-radius:0;}
								<?php	
							break;
							case("Square"): 
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:25px;height:25px;border-radius:0;}
								<?php	
							break;
							case("Oval"): 
								?>
								#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-dots .owl-dot span{width:27px;height:20px;border-radius:12px;}
								<?php	
							break;
						}	
				break;
			
				}		//Dots colors
				?>
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-theme .owl-dots .owl-dot span{
							background-color:<?php echo $tm_nav_dot_bg_clr;?>;
						}
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-theme .owl-dots .owl-dot.active span, 
						#wpsm_team_pro_row_<?php echo $post_id; ?> .owl-theme .owl-dots .owl-dot:hover span{
							background-color:<?php echo $tm_nav_dot_hvr_clr;?>;
						}


                        #wpsm_team_pro_row_<?php echo $post_id; ?> .col-xs-12 {
                            box-sizing: border-box !important;
                        }


						<?php
	}			
?>	
		</style>