<?php get_header()?>
	<section role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
			<article <?php post_class()?>>
				<header>
					<h2 class="title"><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title()?></a></h2>
					<time><?php the_date()?></time>
				</header>
				<div class="page-content"><?php the_content()?></div>
			</article>
			<?php posts_nav_link() //Previous and Next page buttons?>
		<?php endwhile; else: //When there are no posts to list (do not confuse with 404.php)?>
			<article class="post no-posts">
				<header>
					<h1 class="title"><?php _e('No posts found','building-blocks')?></h1>
				</header>
				<div class="page-content"><p><?php _e('There are no posts to display here.','building-blocks')?></p></div>
			</article>
		<?php endif; ?>
	</section>
	<?php get_sidebar()?>
<?php get_footer()?>