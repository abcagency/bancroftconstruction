<?php
if ( ! defined( 'ABSPATH' ) ) exit;
class wpsm_testi_pro {
	private static $instance;
    public static function forge() {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
	private function __construct() 
	{
		add_action('admin_enqueue_scripts', array(&$this, 'testimonial_pro_scripts'));
        if (is_admin()) 
		{
			
			add_action( 'show_user_profile', 'add_multiple_choice_dropdown ' );
			add_action( 'edit_user_profile', 'add_multiple_choice_dropdown ' );
			add_action( 'personal_options_update', 'save_multiple_choices' );
			add_action( 'edit_user_profile_update', 'save_multiple_choices' );


			add_action('init', array(&$this, 'testimonial_pro_register_cpt'), 1);
			//add_action('init', array(&$this, 'testimonial_pro_register_cpt2'), 1);

			
			register_activation_hook( __FILE__, 'psp_add_project_management_role' );

			add_action('add_meta_boxes', array(&$this, 'testi_pro_meta_boxes_group'),1);
			add_action('admin_init', array(&$this, 'testi_pro_meta_boxes_group'), 1);

			//add_action('save_post', array(&$this, 'add_testi_pro_meta_box_form_save'), 9, 1);
			add_action('save_post', array(&$this, 'add_testi_pro_meta_box_save'), 9, 1);
			add_action('save_post', array(&$this, 'add_testi_pro_meta_box_settings_save'), 9, 1);
			register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
			register_activation_hook( __FILE__, 'activate_plugin_name' );
		}

    }
	function activate_plugin_name() {
 if (!current_user_can('edit_post', $post_id))
			return $post_id;
    $role = get_role( 'editor' );
    $role->add_cap( 'manage_options' ); // capability
}
// Register our activation hook

function deactivate_plugin_name() {
 
    $role = get_role( 'editor' );
    $role->remove_cap( 'manage_options' ); // capability
}
 
 // admin scripts
	public function testimonial_pro_scripts(){
		if(get_post_type()=="testi_builder_pro"){
			require_once('script.php');
		}
		
	}
	
	public function testimonial_pro_register_cpt()
	{
		require_once('cpt-reg.php');
		add_filter( 'manage_testi_builder_pro_posts_columns', array(&$this, 'wpsm_testi_pro_columns' )) ;
		add_action( 'manage_testi_builder_pro_posts_custom_column', array(&$this, 'wpsm_testi_pro_manage_columns' ), 10, 2 );
	}
	
	function wpsm_testi_pro_columns($columns ){
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __( 'Testimonial Pro' ),
            'shortcode' => __( 'Testimonial Shortcode' ),
            'date' => __( 'Date' )
        );
        return $columns;
    }

	function wpsm_testi_pro_manage_columns( $column, $post_id ){
        //global $post;
        switch( $column ) {
          case 'shortcode' :
            echo '<input style="width:225px" type="text" value="[TESTIMONIAL_PRO id='.$post_id.']" readonly="readonly" />';
            break;
          default :
            break;
        }
    }
  

	public function testi_pro_meta_boxes_group(){
		
		add_meta_box('testi_pro_designs', __('testimonial Design', wpshopmart_testi_pro_text_domain), array(&$this, 'testi_pro_select_design'), 'testi_builder_pro', 'normal', 'low' );

		add_meta_box('testi_pro_add', __('Add testimonial Box', wpshopmart_testi_pro_text_domain), array(&$this, 'add_testi_box_callback_function'), 'testi_builder_pro', 'normal', 'low' );

		add_meta_box('testi_pro_shortcode', __('Testimonial Shortcode', wpshopmart_testi_pro_text_domain), array(&$this, 'wpsm_pic_testi_pro_shortcode'), 'testi_builder_pro', 'normal', 'low');

		
		add_meta_box('testi_pro_settings', __('testimonial Settings', wpshopmart_testi_pro_text_domain), array(&$this, 'Testi_pro_Settings_callback_function'), 'testi_builder_pro', 'side', 'low' );
	}

	public function testi_pro_select_design()
	{
		require('designs.php');
	}
	
	public function add_testi_box_callback_function($post)
	{
		require('add-testi.php');
	}
	public function add_testi_pro_meta_box_save($PostID)
	{
		require('data-post/testi-save-data.php');
	}
	public function add_testi_pro_meta_box_settings_save($PostID)
	{
		require('data-post/testi-save-data-settings.php');
	}
	public function Testi_pro_Settings_callback_function($post)
	{
		require('settings.php');
	}
	public function wpsm_pic_testi_pro_shortcode()
	{?>
	<style>
			#testi_pro_shortcode{
			background:#fff!important;
			box-shadow: 0 0 20px rgba(0,0,0,.2);
			}
			#categorydiv
			{
				display:none;
			}

			#testi_pro_shortcode .hndle , #testi_pro_shortcode .handlediv{
			display:none;
			}
			#testi_pro_shortcode p{
			color:#000;
			font-size:15px;
			padding-bottom: 30px;
			}
			#testi_pro_shortcode input {
			font-size: 20px;
			padding: 8px 10px;
			font-family: 'Roboto', sans-serif;
			width:100%;
			}
			.customcss-title{
				background: #000;
				padding: 10px;
				margin: 0px;
				color: #fff;
				font-size: 18px;
			}
		</style>
		
<div class="wpsm_site_sidebar_widget_title">
			<h4>Write Your Custom CSS</h4>
		</div>
		<?php
		 $PostId = get_the_ID();
		$testi_Meta_Settings = unserialize(get_post_meta( $PostId, 'testi_Meta_Settings', true));
		if(isset($testi_Meta_Settings['custom_css'])){    
		     $custom_css   = $testi_Meta_Settings['custom_css'];
		}
		else{
		$custom_css="";
		}		
		?>
		<h3 class="customcss-title">Custom Css</h3>
		<textarea name="custom_css" id="custom_css"  style="width:100% !important ;height:300px;background:#ECECEC;" ><?php echo $custom_css ; ?></textarea>
		<p>Enter Css without <strong>&lt;style&gt; &lt;/style&gt; </strong> tag</p>
		<br>
		<script>
		  var editor = CodeMirror.fromTextArea(document.getElementById("custom_css"), {
		   lineNumbers: true,
		   styleActiveLine: true,
			matchBrackets: true,
			hint:true,
			theme : 'ambiance',
			extraKeys: {"Ctrl-Space": "autocomplete"},
		  });
		</script>

		<?php  if(isset($testi_Meta_Settings['custom_css'])){  ?> 
		
		<div class="wpsm_site_sidebar_widget_title testimonail-space">
			<h4>Testimonial Pro Default Settings Option</h2>
		</div>
		<h3>Add This Testimonial pro settings as default setting for new testimonial</h3>
		<div class="" style="margin-top:35px;">
			<a  class="button button-primary button-hero testimoial-dsetting" name="updte_wpsm_testimonial_pro_default_settings" id="updte_wpsm_testimonial_pro_default_settings" onclick="updte_wpsm_counter_pro_default_settings()">Update Default Settings</a>
		</div>	
		<?php
		 } 
		
	}
	
	
}
global $wpsm_testi_pro;
$wpsm_testi_pro = wpsm_testi_pro::forge();
	

?>
