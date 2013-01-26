<?php get_header()?>
	<section role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		<article <?php post_class()?>>
			<header>
				<h2><?php the_title()?></h2>
				<time><?php the_date()?></time>
			</header>
			<div class="page-content"><?php the_content()?></div>
			<?php wp_link_pages() //Page buttons for multi-page posts?>
		</article>
		<?php comments_template()?>
		<?php endwhile;endif;?>
	</section>
	<?php get_sidebar()?>
<?php get_footer()?>