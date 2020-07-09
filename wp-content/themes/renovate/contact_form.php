<?php
//contact form
function re_theme_contact_form_shortcode($atts)
{
	extract(shortcode_atts(array(
		"id" => "contact_form",
		"top_margin" => "none",
		"el_class" => ""
	), $atts));
	
	$output = "";
	$output .= '<form class="contact-form ' . ($top_margin!="none" ? $top_margin : '') . ($el_class!="" ? ' ' . $el_class : '') . '" id="' . $id . '" method="post" action="#">
		<div class="vc_row wpb_row vc_inner">
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
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<p>' . __("We will contact you within one business day.", 'renovate') . '</p>
			</fieldset>
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container align-right">
				<input type="hidden" name="action" value="theme_contact_form">
				<input type="hidden" name="id" value="' . $id . '">
				<input type="submit" name="submit" value="' . __("SEND MESSAGE", 'renovate') . '" class="more">
			</fieldset>
		</div>
	</form>';
	return $output;
}
add_shortcode("re_contact_form", "re_theme_contact_form_shortcode");

//visual composer
function re_theme_contact_form_vc_init()
{
	vc_map( array(
		"name" => __("Contact form", 'renovate'),
		"base" => "re_contact_form",
		"class" => "",
		"controls" => "full",
		"show_settings_on_create" => true,
		"icon" => "icon-wpb-layer-contact-form",
		"category" => __('Renovate', 'renovate'),
		"params" => array(
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Id", 'renovate'),
				"param_name" => "id",
				"value" => "contact_form",
				"description" => __("Please provide unique id for each contact form on the same page/post", 'renovate')
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Top margin", 'renovate'),
				"param_name" => "top_margin",
				"value" => array(__("None", 'renovate') => "none", __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section")
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'js_composer' ),
				'param_name' => 'el_class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
			)
		)
	));
}
add_action("init", "re_theme_contact_form_vc_init");

//contact form submit
function re_theme_contact_form()
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
		$body = str_replace("[form_data]", "", $body);

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
add_action("wp_ajax_theme_contact_form", "re_theme_contact_form");
add_action("wp_ajax_nopriv_theme_contact_form", "re_theme_contact_form");
?>