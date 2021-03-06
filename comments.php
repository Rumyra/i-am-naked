<?php
// Do not delete these lines, Wordpress requires them
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Eum.');

	if ( post_password_required() ) { ?>
		<p><?php _e("This post is password-protected.",'i-am-naked')?></p>
	<?php
		return;
	}
?>


<section class="comments" role="note">
	<?php if ( have_comments() ) : ?>
		<ol>
			<?php wp_list_comments()?>
		</ol>
	 <?php else : // this is displayed if there are no comments so far ?>
		<?php if (!comments_open() && !get_option('boilerplate_hide_comments_disabled',false)) : ?>
			<p><?php _e("Comments are disabled for this post.",'i-am-naked')?></p>
		<?php endif; ?>
	<?php endif?>
	<?php paginate_comments_links() ?>
	
	<?php comment_form(); ?>
</section>