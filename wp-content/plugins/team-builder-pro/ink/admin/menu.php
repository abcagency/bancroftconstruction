<?php
if ( ! defined( 'ABSPATH' ) ) exit;
class wpsm_team_pro {
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
		add_action('admin_enqueue_scripts', array(&$this, 'teambuilder_pro_scripts'));
        if (is_admin()) 
		{
			
			add_action( 'show_user_profile', 'add_multiple_choice_dropdown ' );
			add_action( 'edit_user_profile', 'add_multiple_choice_dropdown ' );
			add_action( 'personal_options_update', 'save_multiple_choices' );
			add_action( 'edit_user_profile_update', 'save_multiple_choices' );


			add_action('init', array(&$this, 'teambuilder_pro_register_cpt'), 1);
			//add_action('init', array(&$this, 'teambuilder_pro_register_cpt2'), 1);

			
			register_activation_hook( __FILE__, 'psp_add_project_management_role' );

			add_action('add_meta_boxes', array(&$this, 'team_pro_meta_boxes_group'),1);
			add_action('admin_init', array(&$this, 'team_pro_meta_boxes_group'), 1);

			//add_action('save_post', array(&$this, 'add_team_pro_meta_box_form_save'), 9, 1);
			add_action('save_post', array(&$this, 'add_team_pro_meta_box_save'), 9, 1);
			add_action('save_post', array(&$this, 'add_team_pro_meta_box_settings_save'), 9, 1);
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
	public function teambuilder_pro_scripts(){
		if(get_post_type()=="team_builder_pro"){
			require_once('script.php');
		}
		
	}
	
	public function teambuilder_pro_register_cpt()
	{
		require_once('cpt-reg.php');
		add_filter( 'manage_team_builder_pro_posts_columns', array(&$this, 'wpsm_team_pro_columns' )) ;
		add_action( 'manage_team_builder_pro_posts_custom_column', array(&$this, 'wpsm_team_pro_manage_columns' ), 10, 2 );
	}
	
	function wpsm_team_pro_columns($columns ){
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __( 'TeamBuilder Pro' ),
            'shortcode' => __( 'TeamBuilder Shortcode' ),
            'date' => __( 'Date' )
        );
        return $columns;
    }

	function wpsm_team_pro_manage_columns( $column, $post_id ){
        //global $post;
        switch( $column ) {
          case 'shortcode' :
            echo '<input style="width:225px" type="text" value="[WPSM_TEAMPRO id='.$post_id.']" readonly="readonly" />';
            break;
          default :
            break;
        }
    }
  

	public function team_pro_meta_boxes_group(){
		
		add_meta_box('team_pro_designs', __('Team Plugin Presets And Designs Design', wpshopmart_team_pro_text_domain), array(&$this, 'team_pro_select_design'), 'team_builder_pro', 'normal', 'low' );

		add_meta_box('team_pro_add', __('Add Your Team Members', wpshopmart_team_pro_text_domain), array(&$this, 'add_team_box_callback_function'), 'team_builder_pro', 'normal', 'low' );

		add_meta_box('team_pro_shortcode', __('TeamBuilder Shortcode', wpshopmart_team_pro_text_domain), array(&$this, 'wpsm_pic_team_pro_shortcode'), 'team_builder_pro', 'normal', 'low');

		
		
	}

	public function team_pro_select_design()
	{
		require('designs.php');
	}
	
	public function add_team_box_callback_function($post)
	{
		require('add-team.php');
	}
	public function add_team_pro_meta_box_save($PostID)
	{
		require('data-post/team-save-data.php');
	}
	public function add_team_pro_meta_box_settings_save($PostID)
	{
		require('data-post/team-save-data-settings.php');
	}
	public function team_pro_Settings_callback_function($post)
	{
		require('settings.php');
	}

	public function wpsm_pic_team_pro_shortcode()
	{?>
	<style>
			#team_pro_shortcode{
			padding-top: 20px;
			background: transparent !important;
			box-shadow: 0 0 20px rgba(0,0,0,.2);
			}
			#categorydiv
			{
				display:none;
			}

			#team_pro_shortcode .hndle , #team_pro_shortcode .handlediv{
			display:none;
			}
			#team_pro_shortcode p{
			color:#000;
			font-size:15px;
			padding-bottom: 30px;
			}
			#team_pro_shortcode input {
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
		$team_Meta_Settings = unserialize(get_post_meta( $PostId, 'wpsm_teampro_Meta_Settings', true));
		if(isset($team_Meta_Settings['custom_css'])){    
		     $custom_css   = $team_Meta_Settings['custom_css'];
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

		<?php  if(isset($team_Meta_Settings['custom_css'])){  ?> 
		
		<div class="wpsm_site_sidebar_widget_title teambuilder-space">
			<h4>TeamBuilder Pro Default Settings Option</h2>
		</div>
		<h3>Add This TeamBuilder pro settings as default setting for new teambuilder</h3>
		<div class="" style="margin-top:35px;">
			<a  class="button button-primary button-hero teambuilder-dsetting" name="updte_wpsm_teambuilder_pro_default_settings" id="updte_wpsm_teambuilder_pro_default_settings" onclick="updte_wpsm_counter_pro_default_settings()">Update Default Settings</a>
		</div>	
		<?php
		 } 
		
	}
	
	
}
global $wpsm_team_pro;
$wpsm_team_pro = wpsm_team_pro::forge();
	

?>
