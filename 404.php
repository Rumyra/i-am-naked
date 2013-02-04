<?php get_header()?>
	<section role="main">
		<article class="post">
			<header>
				<h1><?php _e('Page not found','i-am-naked')?></h1>
			</header>
			<div class="post-content">
				<p><?php _e('The page you are looking for does not exist.','i-am-naked')?></p>
				<p><a href="<?php echo site_url()?>">« <?php _e('Return to the home page','i-am-naked')?></a></p>
			</div>
		</article>
	</section>
	<?php get_sidebar()?>
<?php get_footer()?>