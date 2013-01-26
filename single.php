<?php get_header()?>
	<section role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		<article <?php post_class()?>>
			<header>
				<h2><?php the_title()?></h2>
				<time><?php the_date()?></time>
			</header>
			<div class="post-content"><?php the_content()?></div>
			<?php if(has_tag()){the_tags( _e('Keywords','building-blocks') . ': ', ', ');}?>
			<?php wp_link_pages() //Page buttons for multi-page posts?>
		</article>
		<?php comments_template()?>
		<?php endwhile;endif;?>
	</section>
	<?php get_sidebar()?>
<?php get_footer()?>