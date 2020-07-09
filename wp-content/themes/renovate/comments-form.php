<?php 
if(comments_open())
{
	?>
<div class="vc_row wpb_row vc_inner<?php echo ($top_margin!='none' ? ' ' . $top_margin : ''); ?>">
	<h3 class="box-header">
		<?php _e("LEAVE A COMMENT", 'renovate'); ?>
	</h3>
	<?php
	if(get_option('comment_registration') && !is_user_logged_in())
	{
	?>
	<p><?php echo sprintf(__("You must be <a href='%s'>logged in</a> to post a comment."), wp_login_url(get_permalink())); ?></p>
	<?php
	}
	else
	{
	?>
	<form class="comment-form margin-top-40" id="comment-form" method="post" action="#">
		<div class="vc_row wpb_row vc_inner">
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<div class="block">
					<input class="text_input" name="name" type="text" value="<?php echo __('Your Name *', 'renovate'); ?>" placeholder="<?php echo __('Your Name *', 'renovate'); ?>">
				</div>
				<div class="block">
					<input class="text_input" name="email" type="text" value="<?php echo __('Your Email *', 'renovate'); ?>" placeholder="<?php echo __('Your Email *', 'renovate'); ?>">
				</div>
				<div class="block">
					<input class="text_input" name="website" type="text" value="<?php echo __('Your Website', 'renovate'); ?>" placeholder="<?php echo __('Your Website', 'renovate'); ?>">
				</div>
			</fieldset>
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<div class="block">
					<textarea name="message" placeholder="<?php echo __('Comment *', 'renovate'); ?>"><?php echo __('Comment *', 'renovate'); ?></textarea>
				</div>
			</fieldset>
		</div>
		<div class="vc_row wpb_row vc_inner margin-top-30">
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<p><?php _e("You comment will be published within 24 hours.", 'renovate'); ?></p>
			</fieldset>
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container align-right">
				<a href="#cancel" id="cancel-comment" title="<?php echo __('Cancel reply', 'renovate'); ?>"><?php echo __('Cancel reply', 'renovate'); ?></a>
				<input type="submit" value="<?php echo __('POST COMMENT', 'renovate'); ?>" class="more" name="submit">
				<input type="hidden" name="action" value="theme_comment_form">
				<input type="hidden" name="comment_parent_id" value="0">
				<input type="hidden" name="paged" value="1">
				<input type="hidden" name="prevent_scroll" value="0">
			</fieldset>
		</div>
	<?php
	}
	global $post;
	?>
		<fieldset>
			<input type="hidden" name="post_id" value="<?php echo esc_attr(get_the_ID()); ?>">
			<input type="hidden" name="post_type" value="<?php echo esc_attr($post->post_type); ?>">
		</fieldset>
	</form>
</div>
<?php
}
?>