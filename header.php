<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language')?>"> <!--<![endif]-->
<head>	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type')?>;charset=<?php bloginfo('charset'); ?>" />
	<meta name="robots" content="<?php if(!is_404()){echo "index,follow";}else{echo "noindex,follow";}?>" />
	<!--device/browser shizzle-->  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <!--meta content-->
	<meta name="author" content="Ruth John aka Rumyra" />
	<meta name="copyright" content="Built by Ruth John, United Kingdom, 2012">
	<meta name="keywords" content="<?php if (is_single() && get_tags()) { foreach(get_tags() as $tag){ echo $tag->name . ', '; }}?>" />
	<meta name="description" content="<?php make_description()?>" />
	<title><?php make_title()//Uses wp_title by default?></title>

	<link rel="stylesheet" href="/wp-content/themes/i-am-naked/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/wp-content/themes/i-am-naked/print.css" type="text/css" media="print" />
	<!--[if lte IE 9]>
    <link rel="stylesheet" href="normalize-ie.css" type="text/css" media="screen"/>
    <![endif]-->
	<!--<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen"/>-->
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico"/>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico"/>

	<?php wp_head()?>
</head>
<body <?php body_class()?>>
	<div>
		<header role="banner">
			<h1><a href="<?php echo site_url()?>" rel="internal" title="Link back to the home of <?php bloginfo('name')?>"><?php bloginfo('name')?></a></h1>

			<?php $args = array(
				'theme_location'  => 'main-menu',
				'container'       => 'nav',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'show_home'		=> true,
				'depth'           => 0 );
				wp_nav_menu( $args );
			?>
		</header>