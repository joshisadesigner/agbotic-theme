<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agbotic
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'agb'); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="screen-reader-text"><?php esc_html_e('Primary Menu', 'agb'); ?></span>
            </button>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
        </nav><!-- #site-navigation -->

        <?php if ( is_front_page() || is_home() && is_page()) :

            if (get_header_image()) {
                echo '<div class="site-branding" style="background-image: url(' . get_header_image() . ')">';
            } else {
                echo '<div class="site-branding">';
            }

            if (get_theme_mod('themeslug_logo')) : ?>
                <div class='site-logo'>
                    <a href='<?php echo esc_url(home_url('/')); ?>'
                       title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'>
                        <img src='<?php echo esc_url(get_theme_mod('themeslug_logo')); ?>'
                             alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'>
                    </a>
                </div>
            <?php else : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            <?php endif;

            $description = get_bloginfo('description', 'display');

            if ($description || is_customize_preview()) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>

            </div><!-- .site-branding -->
        <?php endif; ?>

    </header><!-- #masthead -->

<div id = "content" class="site-content" >
