<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php // force Internet Explorer to use the latest rendering engine available?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<?php // mobile meta (hooray!)?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<?php // drop Google Analytics Here?>
		<?php // end analytics?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="container" class="push">
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div id="inner-header" class="wrap">
					<a href="#responsive-menu" class="menu-link">&#9776;</a>
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_theme_file_uri('../theme-bones/library/images/Header.jpg'); ?>" alt="Batman slapping the Pull List logo out of Robin"></a>
					<?php get_sidebar('sidebar2'); ?>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" id="primary-menu">
						<?php wp_nav_menu(array(
                                 'container' => false,                           // remove nav container
                                 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                                 'menu' => __('The Main Menu', 'pulllisttheme'),  // nav name
                                 'menu_class' => 'nav top-nav cf',               // adding custom nav class
                                 'theme_location' => 'main-nav',                 // where it's located in the theme
                                 'before' => '',                                 // before the menu
                                   'after' => '',                                  // after the menu
                                   'link_before' => '',                            // before each link
                                   'link_after' => '',                             // after each link
                                   'depth' => 0,                                   // limit the depth of the nav
                                 'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
					</nav>
					<h1 id="site-tagline" class="h2"><?php echo get_bloginfo('description'); ?></h1>
				</div>
			</header>