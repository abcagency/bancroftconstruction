<div class="search-container">
	<a class="template-search" href="#" title="Search"></a>
	<form class="search-form" action="<?php echo get_home_url(); ?>">
		<input name="s" class="search-input hint" type="text" value="<?php esc_attr_e('Search...', 'renovate'); ?>" placeholder="<?php esc_attr_e('Search...', 'renovate'); ?>">
		<fieldset class="search-submit-container">
			<span class="template-search"></span>
			<input type="submit" class="search-submit" value="">
		</fieldset>
	</form>
</div>