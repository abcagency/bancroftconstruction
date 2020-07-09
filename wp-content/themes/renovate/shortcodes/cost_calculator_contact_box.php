<?php
function re_theme_cost_calculator_contact_box_shortcode($atts)
{
	extract(shortcode_atts(array(
		"label" => __("Contact Details", 'renovate'),
		"description" => __("We will contact you within one business day.", 'renovate'),
		"submit_label" => __("SUBMIT NOW", 'renovate'),
		"type" => __("Interior Renovation", 'renovate'),
		"el_class" => ""
	), $atts));
	
	$output = '<div class="cost-calculator-box cost-calculator-contact clearfix' . (!empty($el_class) ? ' ' . esc_attr($el_class) : '') . '">
		<div class="vc_row wpb_row vc_inner">
			<label>' . $label . '</label>
		</div>
		<div class="vc_row wpb_row vc_inner margin-top-20">
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<div class="block">
					<input class="text_input" name="name" type="text" value="' . __("Your Name *", 'renovate') . '" placeholder="' . __("Your Name *", 'renovate') . '">
				</div>
				<div class="block">
					<input class="text_input" name="email" type="text" value="' . __("Your Email *", 'renovate') . '" placeholder="' . __("Your Email *", 'renovate') . '">
				</div>
				<div class="block">
					<input class="text_input" name="phone" type="text" value="' . __("Your Phone", 'renovate') . '" placeholder="' . __("Your Phone", 'renovate') . '">
				</div>
			</fieldset>
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<div class="block">
					<textarea class="margin_top_10" name="message" placeholder="' . __("Message *", 'renovate') . '">' . __("Message *", 'renovate') . '</textarea>
				</div>
			</fieldset>
		</div>
		<div class="vc_row wpb_row vc_inner margin-top-30">
			<div class="vc_col-sm-6 wpb_column vc_column_container">
				<p>' . $description . '</p>
			</div>
			<div class="vc_col-sm-6 wpb_column vc_column_container align-right">
				<input type="hidden" name="action" value="theme_cost_calculator_form">
				<input type="hidden" name="type" value="' . esc_attr($type) . '">
				<input type="submit" name="submit" value="' . esc_attr($submit_label) . '" class="more">
			</div>
		</div>
	</div>';
	
	return $output;
}
add_shortcode("cost_calculator_contact_box", "re_theme_cost_calculator_contact_box_shortcode");
//visual composer
vc_map( array(
	"name" => __("Cost calculator contact box", 'renovate'),
	"base" => "cost_calculator_contact_box",
	"class" => "",
	"controls" => "full",
	"show_settings_on_create" => true,
	"icon" => "icon-wpb-layer-contact-form",
	"category" => __('Renovate', 'renovate'),
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Label", 'renovate'),
			"param_name" => "label",
			"value" => __("Contact Details", 'renovate')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Description", 'renovate'),
			"param_name" => "description",
			"value" => __("We will contact you within one business day.", 'renovate')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Submit label", 'renovate'),
			"param_name" => "submit_label",
			"value" => __("SUBMIT NOW", 'renovate')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Type", 'renovate'),
			"param_name" => "type",
			"value" => __("Interior Renovation", 'renovate')
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		)
	)
));

//cost calculator form submit
function re_theme_cost_calculator_form()
{
	ob_start();
	global $theme_options;

    $result = array();
	$result["isOk"] = true;
	
	if($_POST["name"]!="" && $_POST["name"]!=__("Your Name *", 'renovate') && $_POST["email"]!="" && $_POST["email"]!=__("Your Email *", 'renovate') && preg_match("#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,4})$#", $_POST["email"]) && $_POST["message"]!="" && $_POST["message"]!=__("Message *", 'renovate'))
	{
		$values = array(
			"name" => $_POST["name"],
			"phone" => ($_POST["phone"]!=__("Your Phone", 'renovate') ? $_POST["phone"] : ""),
			"email" => $_POST["email"],
			"message" => $_POST["message"]
		);
		if((bool)ini_get("magic_quotes_gpc")) 
			$values = array_map("stripslashes", $values);
		$values = array_map("htmlspecialchars", $values);
		
		$form_data = "";
		foreach($_POST as $key=>$value)
		{
			if(array_key_exists($key . "-label", $_POST))
			{
				if(array_key_exists($key . "-name", $_POST))
				{
					if(!empty($value))
						$form_data .= "<br>" . $_POST[$key . "-label"] . " " . $_POST[$key . "-name"] . " (" . $value . ")";
				}
				else
				{
					if(!empty($value))
						$form_data .= "<br>" . $_POST[$key . "-label"] . " " . $value;
				}
			}
		}
		if(!empty($_POST["total_cost"]))
			$form_data .= "<br>" . __("Total cost: ", 'renovate') . $_POST["total_cost"];
			
		$headers[] = 'Reply-To: ' . $values["name"] . ' <' . $values["email"] . '>' . "\r\n";
		$headers[] = 'From: ' . $theme_options["cf_admin_name"] . ' <' . $theme_options["cf_admin_email"] . '>' . "\r\n";
		$headers[] = 'Content-type: text/html';
		$subject = $theme_options["cf_email_subject"];
		$subject = str_replace("[name]", $values["name"], $subject);
		$subject = str_replace("[email]", $values["email"], $subject);
		$subject = str_replace("[phone]", $values["phone"], $subject);
		$subject = str_replace("[message]", $values["message"], $subject);
		$body = $theme_options["cf_template"];
		$body = str_replace("[name]", $values["name"], $body);
		$body = str_replace("[email]", $values["email"], $body);
		$body = str_replace("[phone]", $values["phone"], $body);
		$body = str_replace("[message]", $values["message"], $body);
		$body = str_replace("[form_data]", $form_data, $body);

		if(wp_mail($theme_options["cf_admin_name"] . ' <' . $theme_options["cf_admin_email"] . '>', $subject, $body, $headers))
			$result["submit_message"] = __("Thank you for contacting us", 'renovate');
		else
		{
			$result["isOk"] = false;
			$result["error_message"] = $GLOBALS['phpmailer']->ErrorInfo;
			$result["submit_message"] = __("Sorry, we can't send this message", 'renovate');
		}
	}
	else
	{
		$result["isOk"] = false;
		if($_POST["name"]=="" || $_POST["name"]==__("Your Name *", 'renovate'))
			$result["error_name"] = __("Please enter your name.", 'renovate');
		if($_POST["email"]=="" || $_POST["email"]==__("Your Email *", 'renovate') || !preg_match("#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,4})$#", $_POST["email"]))
			$result["error_email"] = __("Please enter valid e-mail.", 'renovate');
		if($_POST["message"]=="" || $_POST["message"]==__("Message *", 'renovate'))
			$result["error_message"] = __("Please enter your message.", 'renovate');
	}
	$system_message = ob_get_clean();
	$result["system_message"] = $system_message;
	echo @json_encode($result);
	exit();
}
add_action("wp_ajax_theme_cost_calculator_form", "re_theme_cost_calculator_form");
add_action("wp_ajax_nopriv_theme_cost_calculator_form", "re_theme_cost_calculator_form");
?>
