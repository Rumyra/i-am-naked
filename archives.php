<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<section role="main">
		<?php the_post(); ?>
		<article <?php post_class()?>>
			<h1 class="title"><?php the_title()?></h1>
			<p><?php the_date()?></p>
			<div class="post-content">
				<?php the_content()?>
				
				<?php get_search_form(); ?>
				
				<h2><?php _e('Archives by month','i-am-naked')?></h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				
				<h2><?php _e('Archives by category','i-am-naked')?></h2>
				<ul>
					 <?php wp_list_categories(); ?>
				</ul>
			</div>

		</article>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>