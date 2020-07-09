<?php
add_shortcode('TESTIMONIAL_FORM','display_shortcode');
function display_shortcode( $Id ) {
  ob_start(); 
  if(!isset($Id['id'])) 
   {
    $WPSM_Team_ID = "";
   } 
  else 
  {
    $WPSM_Team_ID = $Id['id'];
  }

  if(get_post_status( $Id['id'] )=="publish")
  {
    $sucees=base64_encode("success");
    if(isset($_SERVER['QUERY_STRING']) && ($_SERVER['QUERY_STRING']=="success"))
    {
      echo "<h3 class='form-sucess'>Thanks for Rating Us! Your request is pending for approval</h3>";
    }
  ?>
<script type="text/javascript">
  function form_validation()
  {
  var uname=document.getElementById("user_member_name").value;  
  }
</script>
<?php
$postid=$Id['id'];
$disp_des=unserialize(get_post_meta($postid,'testi_user_form_Settings',true));

?>
<div class="form2">
    <div class="form-title">
          Submit your Testimonial
     </div>
      <p class="sub-title">We would love to hear your experience with our product. Please fill in the form below to submit your testimonial.</p>
    
    <form id="usp_form" method="post" enctype="multipart/form-data" action="" onsubmit="return form_validation();">
   <?php
       foreach ($disp_des as $dis_des) 
        {
          $ex=explode("-",$dis_des['display_formdata']);
          if($dis_des['display_formdata']=="show_name")
           {
          ?>
			<div class="form-row">
                <div class="form-label">Your Name: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                <input type="text" class="form-item" placeholder="Your Name" <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> autocomplete="off" name="user_member_name" id="user_member_name">
            </div>
    <?php
       }
    ?> 
	<?php
        if($dis_des['display_formdata']=="show_email")
        {
        ?>
      <div class="form-row">
           <div class="form-label">Your Email: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
            <input type="email" class="form-item" placeholder="Your Email" <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> autocomplete="off" name="user_member_email" id="user_designation">
      </div>
      <?php
        }
     ?>   
	<?php
		if($dis_des['display_formdata']=="show_img")
			{
	?>
		<div class="form-row">
                    <div class="form-label">Your Image: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                    <input <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?>  type="file" name="imagefile" id="imagefile" accept="image/*" class="form-item" placeholder="your image">
        </div>
	<?php
		}
    ?>    
	<?php
		if($dis_des['display_formdata']=="show_website")
			{
		?>
					<div class="form-row">
                        <div class="form-label">Your Website Name: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                        <input <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> type="text" class="form-item" placeholder="Website Name" autocomplete="off" name="user_member_wbsitename" id="user_designation">
                    </div>
		<?php
			}
		?>   
		<?php
			if($dis_des['display_formdata']=="show_url")
				{
			?>
			<div class="form-row">
                <div class="form-label">Your Website URL: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                <input <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> type="text" class="form-item" placeholder="Website URL" autocomplete="off" name="user_member_wbsiteurl" id="user_member_wbsiteurl">
            </div> 
		<?php
			}
		?>  
		<?php
			if($dis_des['display_formdata']=="show_desig")
				{
		?>
			<div class="form-row">
                 <div class="form-label">Your Position: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                 <input <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> type="text" class="form-item" placeholder="Your Position" autocomplete="off" name="user_member_position" id="user_member_position">
            </div>
		<?php
		}
		?>   
        <?php
			if($dis_des['display_formdata']=="show_rate")
				{
		?>
				<div class="form-row">
                    <div class="form-label">Your Rating: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                    <input <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> id="cs_rating" name="cs_rating" class="rating" value="0" data-stars="5" data-step="0.1" title=""/>
                </div>
		<?php
		}
			?>                   
		<?php
			if($dis_des['display_formdata']=="show_description")
				{
		?>
				<div class="form-row">
                    <div class="form-label">Testimonial Description: <?php if($dis_des['display_formreq']=="yes") { echo "*";} ?></div>
                    <textarea  <?php if($dis_des['display_formreq']=="yes") { echo "required";} ?> class="form-item" placeholder="Testimonial Description" name="user_description"></textarea>
                    <select style="display: none;" class="select-filter" name="user_category[]" multiple>
					<option>Add Filter Category</option>
					<?php
					$postid=$Id['id'];
					$dis_des=unserialize(get_post_meta($postid,'filter_category_info',true));
					foreach ($dis_des as $key)
						{
						echo "<option value='$key[filter_category]'>".$key['filter_category']."</option>"; 
						} 
					?>

					</select>
                </div>
			<?php
			}
			
			?>    
      <div class="form-row">                 
       <?php
      if($ex[0]=="gdpr_elink")
        {
    ?>
    <input type="checkbox" required="true">&nbsp;     
        <a href="<?php echo $ex[1];?>" target="_blank">Term and Condition</a>
    <?php
    }
    if($ex[0]=="gdpr_description")
    {
      echo "<input type='checkbox' required='true'>&nbsp; "  ;   
      echo $ex[1];
    }
   ?>
 </div>
   <?php
    }
   
      ?>  
                         
			<div class="form-row">
				<input type="hidden" name="user_post_id" value="<?php echo $Id['id'];?>">
				<input type="hidden" name="redirect_url" value="<?php echo get_permalink();?>"/>
				<?php  get_post_status( $Id['id'] ) ?>
				<p class="sbtn"><input class="subbtn frm-btn-submit" type="submit" name="user-submitted-post" value="Submit" />
				<?php wp_nonce_field('usp-nonce', 'usp-nonce', false); ?>

				</p>
                                <!--<button class="frm-btn-submit">Submit</button>-->
            </div>
                           
                            </form>
       </div>
     
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

  <?php 
  }
?>

<?php
}
?>
