<?php
error_reporting(0);
if ( ! defined( 'ABSPATH' ) ) exit;
if(isset($PostID) && isset($_POST['testi_pro_save_data_action']) ) {
			$TotalCount = count($_POST['cs_name']);
			$All_data = array();
			$testimonial_pro_section_name=$_POST['Testimonial_pro_section_name'];
			if($TotalCount) {
				$filter_category='';
				for($i=0; $i < $TotalCount; $i++) {
					$cs_photo = sanitize_text_field($_POST['cs_photo'][$i]);
					$cs_name = stripslashes(sanitize_text_field($_POST['cs_name'][$i]));
				foreach ($_POST['cs_categoryfilter'.$i] as  $cs_categoryfilter) 
				{
					$filter_category.=$cs_categoryfilter."_";
				}
					$cs_email = stripslashes(sanitize_text_field($_POST['cs_email'][$i]));
					$cs_webname = stripslashes(sanitize_text_field($_POST['cs_webname'][$i]));
					$cs_posi = stripslashes(sanitize_text_field($_POST['cs_posi'][$i]));
					$cs_website = sanitize_text_field($_POST['cs_website'][$i]);
					$cs_rating = stripslashes($_POST['cs_rating'][$i]);
					$cs_desc = stripslashes($_POST['cs_desc'][$i]);
					$cs_id = sanitize_text_field($_POST['cs_id'][$i]);
					$cs_status = sanitize_text_field($_POST['cs_status'][$i]);
					//$ts_layout = sanitize_text_field($_POST['ts_layout'][$i]);
					//$value_hide = sanitize_text_field($_POST['value_hide'][$i]);
					//for($k=1;$k<=count($value_hide); $k++){
					//$filters = stripslashes(sanitize_text_field($_POST['filters'][$value_hide][$i]));
					//}
					$All_data[] = array(
						'cs_photo' => $cs_photo,
						'cs_name' => $cs_name,
						'filter_category' => $filter_category,
						'cs_email' => $cs_email,
						'cs_webname' => $cs_webname,
						'cs_posi' => $cs_posi,
						'cs_website' => $cs_website,
						'cs_rating' => $cs_rating,
						'cs_desc' => $cs_desc,
						'cs_id' => $cs_id,
						'cs_status'=>$cs_status,
						//'filters' => $filters,
						//'ts_layout' => $ts_layout,
						//'value_hide' => $value_hide,
					);
					$filter_category='';
				}
				update_post_meta($PostID, 'wpsm_testi_pro_data', serialize($All_data));
				update_post_meta($PostID, 'wpsm_testi_pro_count', $TotalCount);
				update_post_meta($PostID, 'wpsm_testi_pro_section_title', $testimonial_pro_section_name);
			}
		
			else {
				$TotalCount = -1;
				update_post_meta($PostID, 'wpsm_testi_pro_count', $TotalCount);
				$All_data = array();
				update_post_meta($PostID, 'wpsm_testi_pro_data', serialize($All_data));
				update_post_meta($PostID, 'wpsm_testi_pro_section_title', $testimonial_pro_section_name);
			}
		}
		
 ?>