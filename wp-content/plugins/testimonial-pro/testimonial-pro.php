<?php
/**
 * Plugin Name: Testimonial Pro
 * Version: 5.2
 * Description:  Testimonial Builder is most flexible WordPress plugin available to Add and manage your Testimonial page with drag and drop feature. 
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://www.wpshopmart.com
 */
/**
 * DEFINE PATHS
 */

if (!defined('ABSPATH'))
    exit;
define("wpshopmart_testi_pro_directory_url", plugin_dir_url(__FILE__));
define("wpshopmart_testi_pro_text_domain", "wpsm_testi_pro");
//Plugin Slug
define('WPSM_PLUGIN_SLUG', 'testi_builder_pro');

require_once("ink/install.php");

add_image_size('wpsm_testi_pro_small', 100, 100, true);
add_image_size('wpsm_testi_pro_small2', 140, 140, true);
if (!function_exists('wpsm_hex2rgb_testi_pro')) {
    function wpsm_hex2rgb_testi_pro($hex)
    {
        $hex = str_replace("#", "", $hex);
        
        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = array(
            $r,
            $g,
            $b
        );
        return $rgb; // returns an array with the rgb values
    }
}

//default settings added
function wpsm_testi_pro_default_data()
{
    //$default_url =  wpshopmart_testi_pro_directory_url.'assets/img/bg.jpg'; 
    
    $Settings_CN_Array = serialize(array(
        
        "templates_presets" => "carousel",
        "templates" => "1",
        "ts_ind_clr_display" => "yes",
        "ts_sec_title_clr" => "#ffffff",
        "ts_name_clr" => "#ffffff",
        "ts_email_clr" => "#ffffff",
        "ts_web_name_clr" => "#ffffff",
        "ts_link_hvr_clr" => "#1e73be",
        "ts_position_clr" => "#ec005f",
        "ts_content_clr" => "#ffffff",
        
        "ts_content_bg_clr" => "#ec005f",
        "ts_box_opacity" => "10",
        "ts_img_border_clr" => "#cccccc",
        "ts_quote_clr" => "#cccccc",
        "ts_fillstar_clr" => "#ec005f",
        
        "ts_filstr_bord_clr" => "#ec005f",
        "ts_empstar_clr" => "#ffffff",
        "ts_filter_bg_clr" => "#f4f4f4",
        "ts_filter_activebg_clr"=> "#000000",
        "ts_filter_title_clr"=> "#cccccc",
        "ts_filter_active_title_clr"=> "#ffffff",

        "my_star_size" => "16",
        
        //BOX FONT FAMILY & SIZE SETTINGS
        
        "ts_sec_title_size" => "25",
        "ts_name_size" => "13",
        "ts_email_size" => "14",
        "ts_website_size" => "14",
        "ts_position_size" => "13",
        "ts_content_size" => "15",
        "ts_sec_title_weight" => "600",
        "ts_name_weight" => "400",
        
        
        "ts_position_weight" => "200",
        "ts_content_weight" => "100",
        "ts_content_line" => "24",
        "font_family" => "Open Sans",
        
        //TITLE & ICON  DISPLAY SETTINGS
        
        "ts_display_sec_title" => "yes",
        "ts_display_name" => "yes",
        "ts_display_image" => "yes",
        "ts_display_email" => "yes",
        "ts_display_website" => "yes",
        "ts_display_position" => "yes",
        "ts_display_rating" => "yes",
        "ts_display_content" => "yes",
        
        
        //Navigation Settings 
        
        "ts_nav_type" => "2",
        "ts_btn_type" => "Text",
        "ts_nav_right_text" => "Next",
        "ts_nav_left_text" => "Prev",
        "ts_nav_btn_icon" => "fa fa-chevron-left",
        "ts_nav_btn_size" => "botttom_center",
        "ts_nav_btn_position" => "Small",
        "ts_nav_btn_font_clr" => "#000000",
        
        "ts_nav_btn_font_hvr_clr" => "#cccccc",
        "ts_nav_btn_bg_clr" => "#cccccc",
        "ts_nav_btn_hvr_clr" => "#000000",
        "ts_nav_dot_size" => "Small",
        "ts_nav_dot_shape" => "Circle",
        "ts_nav_dot_bg_clr" => "#000000",
        "ts_nav_dot_hvr_clr" => "#cccccc",
        
        //layout and Background SETTINGS
        
        "ts_layout" => "4",
        "ts_image_bg" => "Image",
        "testi_bg_clr" => "#ffffff",
        "testi_favicon" => wpshopmart_testi_pro_directory_url . 'assets/images/testimonals_main_bg.jpg',
        "ts_bg_size" => "Cover",
        "ts_bg_repeat" => "No-repeat",
        "ts_bg_position" => "center center",
        "ts_show_img_overlay" => "yes",
        "ts_img_overlay_clr" => "#000000",
        "ts_img_bg_opacity" => "6",
        "ts_show_prlex" => "yes",
        "ts_padding_LR" => "50",
        "ts_padding_TB" => "50",
        "custom_css" => ""
    ));
    update_option('wpsm_testimonial_pro_default_settings', $Settings_CN_Array);
}
register_activation_hook(__FILE__, 'wpsm_testi_pro_default_data');
/**
 * PLUGIN Install
 */
require_once("ink/install/installation.php");

/**
 * CPT CLASS
 */

require_once("ink/admin/menu.php");


//front end form start
add_action('parse_request', 'save_myform');

function save_myform()
{
    $is_submitted = (isset($_POST['user-submitted-post']) && !empty($_POST['user-submitted-post'])) ? true : false;
    $nonce        = (isset($_POST['usp-nonce']) && wp_verify_nonce($_POST['usp-nonce'], 'usp-nonce')) ? true : false;
    
    if ($is_submitted && $nonce) {
        
        //getting image code
        if (!function_exists('wp_generate_attachment_metadata')) {
            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
            require_once(ABSPATH . "wp-admin" . '/includes/file.php');
            require_once(ABSPATH . "wp-admin" . '/includes/media.php');
        }
        if ($_FILES['imagefile']['name'] != "") {
            
            if ($_FILES) {
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                        return "upload error : " . $_FILES[$file]['error'];
                    } //If upload error
                    $attach_id = media_handle_upload($file, $new_post);
                    $gm_photo  = wp_get_attachment_url($attach_id); //upload file URL
                }
            }
        } else {
            $gm_photo = "";
        }
        
        //submit fromend value
        $filter                 = '';
        $id                     = $_POST['user_post_id'];
        $db_user_val            = unserialize(get_post_meta($id, 'wpsm_testi_pro_data', true));
        $gm_user_counts         = get_post_meta($id, 'wpsm_testi_pro_count', true);
        $total_counts           = $gm_user_counts + 1;
        $user_member_name       = $_POST['user_member_name'];
        $user_member_email      = $_POST['user_member_email'];
        $user_member_wbsitename = $_POST['user_member_wbsitename'];
        $user_member_wbsiteurl  = $_POST['user_member_wbsiteurl'];
        $user_member_position   = $_POST['user_member_position'];
        $user_description       = $_POST['user_description'];
        $cs_rating              = $_POST['cs_rating'];
        $redirect_url           = $_POST['redirect_url'];
        foreach ($_POST['user_category'] as $mb_pos_value) {
            $filter .= $mb_pos_value . "_";
        }
        
        $db_user_val[] = array(
            'cs_photo' => $gm_photo,
            'cs_name' => $user_member_name,
            'filter_category' => $filter,
            'cs_email' => $user_member_email,
            'cs_webname' => $user_member_wbsitename,
            'cs_posi' => $user_member_position,
            'cs_website' => $user_member_wbsiteurl,
            'cs_rating' => $cs_rating,
            'cs_desc' => $user_description,
            'cs_id' => '',
            'cs_status' => 1
        );
        
        update_post_meta($id, 'wpsm_testi_pro_data', serialize($db_user_val));
        update_post_meta($id, 'wpsm_testi_pro_count', $total_counts);
        
        //$decode=base64_decode("success");
        header("Location: $redirect_url?success");
        $user_member_name  = '';
        $user_member_email = '';
        echo "Form Successfulyly Submited";
        exit;
        
    }
}

/**
 * SHORTCODE
 */
require_once("template/shortcode.php");
require_once("template/formshortcode.php");
 /**
WIDGET
*/
 require_once("ink/widget/widget.php");
?>