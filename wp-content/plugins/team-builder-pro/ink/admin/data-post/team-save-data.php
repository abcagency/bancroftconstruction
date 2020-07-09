<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if(isset($PostID) && isset($_POST['team_pro_save_data_action']) ) {
			$TotalCount = count($_POST['cs_name']);

			// print_r( $_POST );
			// die;

			$All_data = array();
			$Team_pro_section_name=$_POST['Team_pro_section_name'];
			if($TotalCount) {
				$filter_category='';
				for( $i=0; $i < $TotalCount; $i++ ) {

					$team_position = sanitize_text_field($_POST['team_position'][$i]);
					
					$j = intval( $team_position );
					// $j = $i ;
					$cs_photo = sanitize_text_field($_POST['cs_photo'][$j]);
					$cs_id = sanitize_text_field($_POST['cs_id'][$j]);
					
					$cs_name = stripslashes(sanitize_text_field($_POST['cs_name'][$j]));
					$cs_email = stripslashes(sanitize_text_field($_POST['cs_email'][$j]));
					$cs_phone = stripslashes(sanitize_text_field($_POST['cs_phone'][$j]));
					$cs_webname = stripslashes(sanitize_text_field($_POST['cs_webname'][$j]));
					$cs_website = sanitize_text_field($_POST['cs_website'][$j]);
					$cs_posi = stripslashes(sanitize_text_field($_POST['cs_posi'][$j]));
					$cs_add = stripslashes($_POST['cs_add'][$j]);
					$cs_desc = stripslashes($_POST['cs_desc'][$j]);
			
			
					if( isset($_POST['cs_categoryfilter'.$i]) ){						
						foreach ($_POST['cs_categoryfilter'.$i] as  $cs_categoryfilter) {
							$filter_category.=$cs_categoryfilter."_";
						}
					}
						

								
					$fb_url = sanitize_text_field($_POST['fb_url'][$j]);
					$tw_url = sanitize_text_field($_POST['tw_url'][$j]);
					$yt_url = sanitize_text_field($_POST['yt_url'][$j]);
					$gplus_url = sanitize_text_field($_POST['gplus_url'][$j]);
					$lkd_url = sanitize_text_field($_POST['lkd_url'][$j]);
					$tumb_url = sanitize_text_field($_POST['tumb_url'][$j]);
					$ins_url = sanitize_text_field($_POST['ins_url'][$j]);
					$pin_url = sanitize_text_field($_POST['pin_url'][$j]);
					$sky_url = sanitize_text_field($_POST['sky_url'][$j]);
					$red_url = sanitize_text_field($_POST['red_url'][$j]);
					$vmo_url = sanitize_text_field($_POST['vmo_url'][$j]);
					$be_url = sanitize_text_field($_POST['be_url'][$j]);
					$drib_url = sanitize_text_field($_POST['drib_url'][$j]);
					$flic_url = sanitize_text_field($_POST['flic_url'][$j]);
					$whastapp_url = sanitize_text_field($_POST['whastapp_url'][$j]);
					$snap_url = sanitize_text_field($_POST['snap_url'][$j]);
					$tele_url = sanitize_text_field($_POST['tele_url'][$j]);
					$wechat_url = sanitize_text_field($_POST['wechat_url'][$j]);
					$imo_url = sanitize_text_field($_POST['imo_url'][$j]);
					$baidoo_url = sanitize_text_field($_POST['baidoo_url'][$j]);
					

					$All_data[] = array(
						'cs_photo' => $cs_photo,
						'cs_id' => $cs_id,
						'cs_name' => $cs_name,
						'filter_category' => $filter_category,
						'cs_email' => $cs_email,
						'cs_webname' => $cs_webname,
						'cs_posi' => $cs_posi,
						'cs_website' => $cs_website,
						'cs_phone' => $cs_phone,
						'cs_desc' => $cs_desc,
						'cs_add'=> $cs_add,
						'fb_url'=> $fb_url,
						'tw_url'=> $tw_url,
						'yt_url'=> $yt_url,
						'gplus_url' => $gplus_url,
						'lkd_url' => $lkd_url,
						'tumb_url'=> $tumb_url,
						'ins_url'=> $ins_url,
						'pin_url'=> $pin_url,
						'sky_url'=> $sky_url,
						'red_url'=> $red_url,
						'vmo_url'=> $vmo_url,
						'be_url'=> $be_url,
						'drib_url'=> $drib_url,
						'flic_url'=> $flic_url,
						'whastapp_url'=> $whastapp_url,
						'snap_url'=> $snap_url,
						'tele_url'=> $tele_url,
						'wechat_url'=> $wechat_url,
						'imo_url'=> $imo_url,
						'baidoo_url'=> $baidoo_url,
						
					);
					$filter_category='';
				}


				update_post_meta($PostID, 'wpsm_team_pro_data', serialize($All_data));
				update_post_meta($PostID, 'wpsm_team_pro_count', $TotalCount);
				update_post_meta($PostID, 'wpsm_team_pro_section_title', $Team_pro_section_name);
			}
		
			else {
				// $TotalCount = -1;
				update_post_meta($PostID, 'wpsm_team_pro_count', $TotalCount);
				$All_data = array();
				update_post_meta($PostID, 'wpsm_team_pro_data', serialize($All_data));
				update_post_meta($PostID, 'wpsm_team_pro_section_title', $Team_pro_section_name);
			}
		}
		
 ?>