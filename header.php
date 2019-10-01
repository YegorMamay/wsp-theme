<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">


<div class="wrapper">
    <header class="page-header">
        <div class="cont-wrap">

        <?php get_default_logo_link([
            'name'    => 'logo.svg',
            'options' => [
                'class'  => 'logo-img',
                'width'  => 200,
                'height' => 50,
                ],
            ])
        ?>
        
        <?php echo do_shortcode('[bw-phone]');?>

        <?php
            $address = get_theme_mod('bw_additional_address');
            if (!empty($address)) { ?>
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    <?php echo esc_html($address); ?>
                </span>
        <?php } ?>

        <?php
            $email = get_theme_mod('bw_additional_email');
            if (!empty($email)) { ?>
            <a class="mail" href="mailto:<?php echo esc_attr($email); ?>">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <?php echo esc_html($email); ?>
            </a>
        <?php } ?>

        
        <button type="button" class="btn btn-secondary <?php the_lang_class('js-call-back'); ?>">
            <?php _e('Call back', 'brainworks'); ?>
        </button>
           
        </div>
    </header>

    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu">
               <div class="cont-wrap">

           <div class="menu-cont">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false,
                'menu_class' => 'menu-container',
                'menu_id' => '',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 3
            )); ?>
            </div>
            
            <div class="items-cont">
            <?php echo do_shortcode('[bw-social]'); ?>
            
            <?php if (function_exists('pll_the_languages')) { ?>
            <ul class="lang">
                <?php pll_the_languages(array(
                    'show_flags' => 0,
                    'show_names' => 1,
                    'hide_if_empty' => 0,
                    'display_names_as' => 'name'
                )); ?>
            </ul>
            <?php } ?>
            
            </div>
          </div>
        </nav>
    <?php } ?>

    <div class="container js-container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <ul class="lang">
                <?php pll_the_languages(array(
                    'show_flags' => 0,
                    'show_names' => 1,
                    'hide_if_empty' => 0,
                    'display_names_as' => 'name'
                )); ?>
            </ul>
        </div>
