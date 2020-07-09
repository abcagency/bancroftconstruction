<?php
/**
 * Plugin Name: Team Builder Pro
 * Version: 5.4
 * Description:  Team Builder Pro Plugin is most flexible WordPress plugin available to Add and manage your Team page with Multiple Presets under developemnt. 
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://www.wpshopmart.com/team-pro
 */
/**
 * DEFINE PATHS
 */

if (!defined('ABSPATH'))
exit;
define("wpshopmart_team_pro_directory_url", plugin_dir_url(__FILE__));
define("wpshopmart_team_pro_text_domain", "wpsm_team_pro");
//Plugin Slug
define('WPSM_TEAM_PLUGIN_SLUG', 'team_builder_pro');

require_once("ink/install.php");

add_image_size('wpsm_team_pro_small', 100, 100, true);
add_image_size('wpsm_team_pro_small3', 250, 250, true);
add_image_size('wpsm_team_pro_small4', 320, 320, true);
if (!function_exists('wpsm_hex2rgb_team_pro')) {
    function wpsm_hex2rgb_team_pro($hex)
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
function wpsm_team_pro_default_data()
{
    //$default_url =  wpshopmart_team_pro_directory_url.'assets/img/bg.jpg'; 
    
    $Settings_CN_Array = serialize(array(    
        "templates_presets" => "carousel",
        "templates" => "1",
        "tm_ind_clr_display" => "yes",
        "tm_sec_title_clr" => "#ffffff",
        "tm_name_clr" => "#ffffff",
        "tm_name_hover_clr" => "#ffffff",
        "tm_email_clr" => "#ffffff",
        "tm_web_name_clr" => "#ffffff",
        "tm_link_hvr_clr" => "#1e73be",
        "tm_position_clr" => "#000000",
        "tm_position_hover_clr" => "#000000",
        "tm_content_clr" => "#000000",
        
        "tm_content_bg_clr" => "#01becc",
        "tm_box_opacity" => "10",
        "tm_img_border_clr" => "#cccccc",
        "tm_quote_clr" => "#cccccc",
        "tm_sibg_clr" => "#ffffff",
        "tm_bg_content_hover_clr" => "#ff0000",
        "tm_pop_bg_clr" => "#ffffff",
        "tm_img_hover_clr" => "#ff9800",
        "tm_img_hover_opcity" =>"5",
        "tm_rd_link"=> "yes",
        
        "tm_sihbg_clr" => "#000000",
        "tm_si_clr" => "#000000",
        "tm_sih_clr"=> "#ffffff",
        "tm_sib_clr"=> "#ff0000",
        "tm_sibh_clr"=> "#e7e7e7",
        "tm_filter_bg_clr" => "#f4f4f4",
        "tm_filter_activebg_clr"=> "#000000",
        "tm_filter_title_clr"=> "#cccccc",
        "tm_filter_active_title_clr"=> "#ffffff",

        "team_social_icon_size" => "16",
        
        //BOX FONT FAMILY & SIZE SETTINGS
        
        "tm_sec_title_size" => "25",
        "tm_name_size" => "20",
        "tm_email_size" => "14",
        "tm_website_size" => "14",
        "tm_position_size" => "15",
        "tm_content_size" => "15",
        "tm_sec_title_weight" => "600",
        "tm_name_weight" => "600",
        
        
        "tm_position_weight" => "600",
        "tm_content_weight" => "500",
        "tm_content_line" => "24",
        "font_family" => "Open Sans",
        "tm_slide_left_right" => "left",
        
        //TITLE & ICON  DISPLAY SETTINGS
        
        "tm_display_sec_title" => "yes",
        "tm_display_name" => "yes",
        "tm_display_image" => "yes",
        "tm_display_email" => "yes",
        "tm_display_website" => "yes",
        "tm_display_position" => "yes",
        "tm_display_rating" => "yes",
        "tm_display_content" => "yes",
        
        
        //Navigation Settings 
        
        "tm_nav_type" => "2",
        "tm_btn_type" => "Text",
        "tm_nav_right_text" => "Next",
        "tm_nav_left_text" => "Prev",
        "tm_nav_btn_icon" => "fa fa-chevron-left",
        "tm_nav_btn_size" => "botttom_center",
        "tm_nav_btn_position" => "Small",
        "tm_nav_btn_font_clr" => "#000000",
        
        "tm_nav_btn_font_hvr_clr" => "#cccccc",
        "tm_nav_btn_bg_clr" => "#cccccc",
        "tm_nav_btn_hvr_clr" => "#000000",
        "tm_nav_dot_size" => "Small",
        "tm_nav_dot_shape" => "Circle",
        "tm_nav_dot_bg_clr" => "#000000",
        "tm_nav_dot_hvr_clr" => "#cccccc",
        "tm_pop_color" => "dark",
        //layout and Background SETTINGS
        
        "tm_layout" => "4",
        "tm_pop_style" => "modal",
        "tm_image_bg" => "Image",
        "team_bg_clr" => "#ffffff",
        "team_favicon" => '',
        "tm_bg_size" => "Cover",
        "tm_bg_repeat" => "No-repeat",
        "tm_bg_position" => "center center",
        "tm_show_img_overlay" => "yes",
        "tm_img_overlay_clr" => "#000000",
        "tm_img_bg_opacity" => "6",
        "tm_show_prlex" => "yes",
        "tm_padding_LR" => "50",
        "tm_padding_TB" => "50",
        "custom_css" => ""
    ));
    add_option('wpsm_teambuilder_pro_default_settings', $Settings_CN_Array);
}
register_activation_hook(__FILE__, 'wpsm_team_pro_default_data');
/**
 * PLUGIN Install
 */
require_once("ink/install/installation.php");

/**
 * CPT CLASS
 */

require_once("ink/admin/menu.php");



/**
 * SHORTCODE
 */
require_once("template/shortcode.php");
 /**
WIDGET
*/
 require_once("ink/widget/widget.php");
?>