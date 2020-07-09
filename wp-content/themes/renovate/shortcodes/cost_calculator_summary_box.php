<?php
function re_theme_cost_calculator_summary_box_shortcode($atts)
{
	extract(shortcode_atts(array(
		"id" => "cost",
		"formula" => "",
		"currency" => "$",
		"currency_position" => "before",
		"thousandth_separator" => ",",
		"decimal_separator" => ".",
		"description" => __("Approximate Project Cost", 'renovate'),
		"icon" => "none"
	), $atts));
	
	$output = '<div class="cost-calculator-box cost-calculator-sum clearfix' . (!empty($icon) && $icon!="none" ? ' sl-small-' . esc_attr($icon) : '') . '">
		<span class="cost-calculator-price" id="' . esc_attr($id) . '">' . ($currency_position=="before" ? $currency : '') . '0.00' . ($currency_position=="after" ? $currency : '') . '</span>';
	if(!empty($description))
		$output .= '<p>' . $description . '</p>
	<input type="hidden" id="' . esc_attr($id) . '-total" name="total_cost" value="' . ($currency_position=="before" ? $currency : '') . '0.00' . ($currency_position=="after" ? $currency : '') . '">
	</div>';
	$output .= '<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#' . esc_attr($id) . '").costCalculator({
			formula: "' . $formula . '",
			currency: "' . $currency . '",
			currencyPosition: "' . $currency_position . '",
			thousandthSeparator: "' . $thousandth_separator . '",
			decimalSeparator: "' . $decimal_separator . '",
			updateHidden: $("#' . esc_attr($id) . '-total")
		});
	});
	</script>';
	return $output;
}
add_shortcode("cost_calculator_summary_box", "re_theme_cost_calculator_summary_box_shortcode");
//visual composer
vc_map( array(
	"name" => __("Cost calculator summary box", 'renovate'),
	"base" => "cost_calculator_summary_box",
	"class" => "",
	"controls" => "full",
	"show_settings_on_create" => true,
	"icon" => "icon-wpb-layer-cost-calculator-summary-box",
	"category" => __('Renovate', 'renovate'),
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Id", 'renovate'),
			"param_name" => "id",
			"value" => "cost",
			"description" => __("Please provide unique id for each 'Cost calculator summary box' on your page.", 'renovate')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Summary formula", 'renovate'),
			"param_name" => "formula",
			"value" => "",
			"description" => __("Please put here the calculate formula for your form using the form elements ids. Available operators: + and *. Example: square-feet*walls+square-feet*floors", 'renovate')
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Icon", 'renovate'),
			"param_name" => "icon",
			"value" => array(
				__("none", 'renovate') => "none",
				__("bricks", 'renovate') => "bricks",
				__("briefcase", 'renovate') => "briefcase",
				__("brush-1", 'renovate') => "brush-1",
				__("brush-2", 'renovate') => "brush-2",
				__("bubble", 'renovate') => "bubble",
				__("bubble check", 'renovate') => "bubble-check",
				__("bucket", 'renovate') => "bucket",
				__("building", 'renovate') => "building",
				__("calculator", 'renovate') => "calculator",
				__("camera", 'renovate') => "camera",
				__("cart-1", 'renovate') => "cart-1",
				__("cart-2", 'renovate') => "cart-2",
				__("chat", 'renovate') => "chat",
				__("clock", 'renovate') => "clock",
				__("cone", 'renovate') => "cone",
				__("construction", 'renovate') => "construction",
				__("conversation", 'renovate') => "conversation",
				__("lab", 'renovate') => "documents",
				__("door", 'renovate') => "door",
				__("driller", 'renovate') => "driller",
				__("eco", 'renovate') => "eco",
				__("faq", 'renovate') => "faq",
				__("fax", 'renovate') => "fax",
				__("fence", 'renovate') => "fence",
				__("forklift", 'renovate') => "forklift",
				__("garage", 'renovate') => "garage",
				__("gears", 'renovate') => "gears",
				__("globe", 'renovate') => "globe",
				__("hammer", 'renovate') => "hammer",
				__("helmet", 'renovate') => "helmet",
				__("house-1", 'renovate') => "house-1",
				__("house-2", 'renovate') => "house-2",
				__("key", 'renovate') => "key",
				__("documents", 'renovate') => "lab",
				__("lightbulb", 'renovate') => "lightbulb",
				__("list", 'renovate') => "list",
				__("location", 'renovate') => "location",
				__("lock", 'renovate') => "lock",
				__("mail", 'renovate') => "mail",
				__("measure", 'renovate') => "measure",
				__("megaphone", 'renovate') => "megaphone",
				__("payment", 'renovate') => "payment",
				__("pencil", 'renovate') => "pencil",
				__("percent", 'renovate') => "percent",
				__("person", 'renovate') => "person",
				__("phone", 'renovate') => "phone",
				__("photo", 'renovate') => "photo",
				__("picture", 'renovate') => "picture",
				__("plan", 'renovate') => "plan",
				__("poster", 'renovate') => "poster",
				__("quote", 'renovate') => "quote",
				__("roller", 'renovate') => "roller",
				__("ruler", 'renovate') => "ruler",
				__("scissors", 'renovate') => "scissors",
				__("screwdriver", 'renovate') => "screwdriver",
				__("shield", 'renovate') => "shield",
				__("shovel", 'renovate') => "shovel",
				__("speaker", 'renovate') => "speaker",
				__("stationery", 'renovate') => "stationery",
				__("team", 'renovate') => "team",
				__("tick", 'renovate') => "tick",
				__("trolley", 'renovate') => "trolley",
				__("trophy", 'renovate') => "trophy",
				__("trowel", 'renovate') => "trowel",
				__("truck", 'renovate') => "truck",
				__("video", 'renovate') => "video",
				__("wallet", 'renovate') => "wallet",
				__("watering-can", 'renovate') => "watering-can",
				__("wrench", 'renovate') => "wrench",
				__("wrenches", 'renovate') => "wrenches")
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Currency", 'renovate'),
			"param_name" => "currency",
			"value" => "$"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Currency sign position", 'renovate'),
			"param_name" => "currency_position",
			"value" => array(__("before value", 'renovate') => 'before', __("after value", 'renovate') => 'after')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Thousandth separator", 'renovate'),
			"param_name" => "thousandth_separator",
			"value" => ","
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Decimal separator", 'renovate'),
			"param_name" => "decimal_separator",
			"value" => "."
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Description", 'renovate'),
			"param_name" => "description",
			"value" => __("Approximate Project Cost", 'renovate')
		)
	)
));
?>
