<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<script>

var j = 1000;

 function add_new_content(){
 	
 	var get_maxnumber=jQuery("#get_maxnumber").val();
 	
	
	var output = '<li class="wpsm_tm-panel single_color_box" >'+
					'<div class="col-md-8">'+
						'<div class="col-md-3">'+
							'<img style="margin-bottom:15px;" class="test-img-responsive" src="<?php echo wpshopmart_testi_pro_directory_url.'assets/images/user5.png'; ?>" />'+
							'<input style="margin-bottom:15px; max-width:110px;" type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload btn-block"  onclick="wpsm_media_upload(this)"/>'+
							'<input style="display:block;width:100%" type="hidden"  name="cs_photo[]" class="wpsm_tm_label_text"  value="<?php echo wpshopmart_testi_pro_directory_url.'assets/images/user5.png'; ?>"  readonly="readonly" placeholder="No Media Selected" />'+
							'<input style="display:block;width:100%" type="hidden"  name="cs_id[]" class="wpsm_tm_label_text"  value="0"  readonly="readonly" placeholder="No Media Selected" />'+
							'<div class="form-group">'
							+'<!--<label>Status</label>-->'+
							'<select name="cs_status[]">'+
					'<option value="1" selected>Approved</option>'+
					'<option value="0">Pending</option>'+	
					'</select>'+
						'</div>'+
						'</div>'+
						'<div class="col-md-9">'+
							'<span class="tm_label"><?php _e('Your Name',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<input type="text"  name="cs_name[]" value="Testimonial Name" placeholder="Enter Testimonial Name Here" class="wpsm_tm_label_text">'+
							
							'<span class="tm_label"><?php _e('Your Email',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<input type="email"  name="cs_email[]" value="testi@gmail.com" placeholder="Enter Your Email Here" class="wpsm_tm_label_text">'+
							
							
							
							 
							'<span class="tm_label"><?php _e('Your Ratings',wpshopmart_testi_pro_text_domain); ?></span>'+
							 '<input value="3" id="cs_rating[]" name="cs_rating[]" class="rating" data-stars="5" data-step="0.1" title=""/>'+

							'<span class="tm_label"><?php _e('Testimonial Content',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<textarea  name="cs_desc[]"  placeholder="Enter Testimonial Content Here" class="wpsm_tm_label_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel fermentum dui. Pellentesque vitae porttitor ex, euismod sodales magna. Nunc sed felis sed dui pellentesque sodales porta a magna. Donec dui augue</textarea>'+
														
								
						'</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					
							'<span class="tm_label"><?php _e('Your Website Name',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<input type="text"  name="cs_webname[]" value="Testimonial Website Name" placeholder="Enter Your Website Name Here" class="wpsm_tm_label_text">'+
							
							'<span class="tm_label"><?php _e('Your Website URL',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<input type="text"  name="cs_website[]" value="http://wpshopmart.com/"  placeholder="Enter website url" class="wpsm_tm_label_text">'+
							
							'<span class="tm_label"><?php _e('Your Designation',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<input type="text"  name="cs_posi[]" value="Your Designation" placeholder="Enter Your Designation Here" class="wpsm_tm_label_text">'+
							'<span class="show_flt_slt_opt">'+
							'<span class="tm_label"><?php _e('Add Filter Category',wpshopmart_testi_pro_text_domain); ?></span>'+
							'<select id="apended_option'+get_maxnumber+'" class="append_filter_categoy wpsm_tm_label_text" name="cs_categoryfilter'+get_maxnumber+'[]" multiple=""><option value="">Select Filter Category</option></select>'+
							'</span>'+
							'<a class="remove_button" href="#delete" id="remove_bt" ><i class="fa fa-trash-o"></i></a>'+
					'</div>'+
			   	'</li>';
	jQuery(output).hide().appendTo("#wpsm_test_panel").slideDown("slow");		   	
	 jQuery("#get_maxnumber").val(parseInt(get_maxnumber)+1);
	 jQuery('.filter_category_class').each(function() {
var split_gm_designation_id=jQuery(this).attr('id').split("_");
//console.log(split_gm_designation_id[1]);
   //alert(split_gm_designation_id[1]);

jQuery("#apended_option"+get_maxnumber).append('<option class="option_id'+split_gm_designation_id[1]+'" value="'+$(this).val()+'">'+$(this).val()+'</option>');
 
});	
	
	 
	var jQueryinput = jQuery('input.rating');
        if (jQueryinput.length) {
            jQueryinput.removeClass('rating-loading').addClass('rating-loading').rating();
        }

j++;
 }
jQuery(document).ready(function(){

	  jQuery('#wpsm_test_panel').sortable({
	  	    placeholder : "ui-state-highlight",
  update  : function(event, ui)
  {
   var page_id_array = new Array();
   $('#wpsm_test_panel').each(function(){
    page_id_array.push($(this).attr("id"));
   });
    var ID = -1;
$('.append_filter_categoy').each(function() {
    ID++;
    $(this).attr('name', 'cs_categoryfilter'+ID+'[]');
});

 
  }
	   //revert: true,
	     
	  });
	});
	
</script>

<script>
	jQuery(function(jQuery)
		{
			var colorbox = 
			{
				wpsm_test_panel: '',
				init: function() 
				{
					this.wpsm_test_panel = jQuery('#wpsm_test_panel');

					this.wpsm_test_panel.on('click', '.remove_button', function() {
					if (confirm('Are you sure you want to delete this?')) {
						jQuery(this).closest('li').slideUp(600, function() {
							jQuery(this).remove();
							   var page_id_array = new Array();
   $('#wpsm_test_panel').each(function(){
    page_id_array.push($(this).attr("id"));
   });
    var ID = -1;
$('.append_filter_categoy').each(function() {
    ID++;
    $(this).attr('name', 'cs_categoryfilter'+ID+'[]');
});
						});

					}
					return false;
					});
					 jQuery('#delete_all_colorbox').on('click', function() {
						if (confirm('Are you sure you want to delete all the Colorbox?')) {
							jQuery(".single_color_box").slideUp(600, function() {
								jQuery(".single_color_box").remove();
								jQuery("#get_maxnumber").val(0);
							});
							jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
							
						}
						return false;
					});
					
			   }
			};
		colorbox.init();
	});
</script>



