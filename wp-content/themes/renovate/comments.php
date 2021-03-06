<?php
if(comments_open())
{
if(have_comments()):
	$comments_count = get_comments_number();
	?>
	<h3 class="box-header"><?php echo $comments_count . " " . ($comments_count!=1 ? __("COMMENTS", 'renovate') : __("COMMENT", 'renovate')); ?></h3>
	<ul id="comments-list">
		<?php
		paginate_comments_links();
		wp_list_comments(array(
			'avatar_size' => 90,
			'page' => (isset($_GET["paged"]) ? (int)$_GET["paged"] : 1),
			'per_page' => '5',
			'callback' => 're_theme_comments_list'
		));
		?>
	<?php
	global $post;
	$query = $wpdb->prepare("SELECT COUNT(*) AS count FROM $wpdb->comments WHERE comment_approved = 1 AND comment_post_ID = %d AND comment_parent = 0", get_the_ID());
	$parents = $wpdb->get_row($query);
	if($parents->count>5)
		re_comments_pagination(2, ceil($parents->count/5));
	?>
	</ul>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$(".comments-list-container .reply-button").click(function(event){
			event.preventDefault();
			var offset = $("#comment-form").offset();
			$("html, body").animate({scrollTop: offset.top-10}, 400);
			$("#comment-form [name='comment_parent_id']").val($(this).attr("href").substr(1));
			$("#cancel-comment").css('display', 'inline');
		});
		$("#cancel-comment").click(function(event){
			event.preventDefault();
			$(this).css('display', 'none');
			$("#comment-form [name='comment_parent_id']").val(0);
		});
	});
	</script>
	<?php
endif;
}
function re_theme_comments_list($comment, $args, $depth)
{
	global $post;
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class('comment clearfix'); ?> id="comment-<?php comment_ID() ?>">
		<?php
		if((int)$comment->comment_parent>0)
		{
			echo '<a class="parent_arrow" href="#comment-' . (int)$comment->comment_parent . '" title="' . __('Show comment', 'renovate') . '"></a>';
		}
		?>
		<div class="comment-author-avatar">
			<?php echo get_avatar( $comment->comment_author_email, $args['avatar_size'] ); ?>
		</div>
		<div class="comment-details">
			<div class="posted-by clearfix">
				<h6>
				<?php 
				comment_author_link();
				if((int)$comment->comment_parent>0)
				{	
					$parent_author = get_comment_author((int)$comment->comment_parent);
					echo '<a href="#comment-' . (int)$comment->comment_parent . '" class="in-reply">@' . $parent_author . '</a>';
				}
				?>
				</h6>
				<abbr title="<?php printf(__(' %1$s, %2$s', 'renovate'), get_comment_date(),  get_comment_time()); ?>" class="timeago"><?php printf(__(' %1$s, %2$s', 'renovate'), get_comment_date(),  get_comment_time()); ?></abbr>
				<a class="more simple small reply-button" href="#<?php comment_ID(); ?>" title="<?php esc_attr_e('Reply', 'renovate'); ?>"><?php _e('REPLY', 'renovate'); ?></a>
			</div>
			<?php 
			comment_text(); 
			edit_comment_link(__('(Edit)', 'renovate'),'<br>','<br><br>'); 
			?>
		</div>
<?php
}
function re_comments_pagination($range, $pages)
{
	$paged = (!isset($_GET["paged"]) || (int)$_GET["paged"]==0 ? 1 : (int)$_GET["paged"]);
	$showitems = ($range * 2)+1;
	
	echo "<ul class='pagination page-margin-top'>";
	//if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='left'><a href='#page-1'></a></li>";
	if($paged > 1 && $showitems < $pages) echo "<li><a href='#page-" . ($paged-1) . "'>&lsaquo;</a></li>";

	for ($i=1; $i <= $pages; $i++)
	{
		if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		{
			echo "<li" . ($paged == $i ? " class='selected'" : "") . ">" . ($paged == $i ? "<span>".$i."</span>":"<a href='#page-" . $i . "'>".$i."</a>") . "</li>";
		}
	}

	if ($paged < $pages && $showitems < $pages) echo "<li><a href='#page-" . ($paged+1) . "'>&rsaquo;</a></li>";  
	//if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='#page-" . $pages . "' class='pagination_arrow'>&raquo;</a></li>";
	echo "</ul>";
}
?>