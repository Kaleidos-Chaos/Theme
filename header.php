<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/javascripts/vendor/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/vendor/colorbox.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="social-icons">
                    <a href="https://www.facebook.com/kaleidos.chaos" class="icon-facebook" title="Kaleidos Chaos bei Facebook"><span>Kaleidos Chaos bei Facebook</span></a>
                    <a href="http://www.youtube.com/user/KaleidosChaos" class="icon-youtube" title="Kaleidos Chaos bei YouTube"><span>Kaleidos Chaos bei YouTube</span></a>
                    <a href="https://github.com/Kaleidos-Chaos/" class="icon-github" title="Kaleidos Chaos bei GitHub"><span>Kaleidos Chaos bei GitHub</span></a>
                    <a href="https://soundcloud.com/kaleidos-chaos" class="icon-soundcloud" title="Kaleidos Chaos bei SoundCloud"><span>Kaleidos Chaos bei SoundCloud</span></a>
                </div>
                <a id="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <div id="navbar" class="navbar">
                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                    <hr>
                </div><!-- #navbar -->
            </header><!-- #masthead -->

            <div id="main" class="site-main">