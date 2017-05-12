<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/main.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body class="{{ body_class }}">

    <header class="page-head u-clearfix">
        <div class="u-constrict u-clearfix">
            <div class="logo" role="banner">
                <a href="<?php bloginfo( 'url' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_class' => 'site-menu',
            ));
            ?>
            </ul>
        </div>
    </header>

    <main role="main" class="u-constrict u-clearfix">
