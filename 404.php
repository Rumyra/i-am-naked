<?php get_header()?>
	<section role="main">
		<article class="post">
			<header>
				<h1><?php _e('Page not found','building-blocks')?></h1>
			</header>
			<div class="post-content">
				<p><?php _e('The page you are looking for does not exist.','building-blocks')?></p>
				<p><a href="<?php echo site_url()?>">« <?php _e('Return to the home page','building-blocks')?></a></p>
			</div>
		</article>
	</section>
	<?php get_sidebar()?>
<?php get_footer()?>