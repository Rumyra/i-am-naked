<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type')?>;charset=<?php bloginfo('charset'); ?>" />
	<meta name="language" content="<?php bloginfo('language')?>" />
	<meta http-equiv="content-language" content="en-english" />
	<meta name="robots" content="<?php if(!is_404()){echo "index,follow";}else{echo "noindex,follow";}?>" />
	<link rel="profile" href="http://microformats.org/profile/hcard" />

	<meta name="author" content="Ruth John aka Rumyra" />
	<meta name="keywords" content="<?php if (is_single() && get_tags()) { foreach(get_tags() as $tag){ echo $tag->name . ', '; }}?>" />
	<meta name="description" content="<?php make_description()?>" />
	<title><?php make_title()//Uses wp_title by default?></title>

	<link rel="stylesheet" href="/wp-content/themes/building-blocks/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/wp-content/themes/building-blocks/print.css" type="text/css" media="print" />
	<!--[if lte IE 8]>
    <link rel="stylesheet" href="/wp-content/themes/building-blocks/ie.css" type="text/css" media="screen"/>
    <![endif]-->
	<!--<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen"/>-->
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico"/>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico"/>

	<?php wp_head()?>
</head>
<body <?php body_class()?>>
	<div class="wrapper">
		<header role="banner">
			<h1><a href="<?php echo site_url()?>" rel="internal" title="Link back to the home of <?php bloginfo('name')?>"><?php bloginfo('name')?></a></h1>
					
			<?php $args = array(
				'theme_location'  => 'main-menu',
				'container'       => 'nav',
				'menu_class'      => 'menu', 
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'show_home'		=> true,
				'depth'           => 0 );
				wp_nav_menu( $args );
			?>
		</header>