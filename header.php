<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/javascripts/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </a>
                <div id="navbar" class="navbar">
                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
                        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                </div><!-- #navbar -->
            </header><!-- #masthead -->

            <div id="main" class="site-main">