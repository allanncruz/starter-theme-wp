<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Requered meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta <?php bloginfo('charset'); ?>>

    <title><?php bloginfo('title') ?></title>
    <?php wp_head(); ?>
</head>
<body class="bg-light">

<header class="header position-fixed w-100 shadow">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="<?php bloginfo("url") ?>">
            <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');


                    if(has_custom_logo()) {
                        echo '<img src="'. esc_url($logo[0]). '" class="img-fluid">';
                    }else {
                        echo '<h3>'. get_bloginfo('name'). '</h3>';
                    } 
                ?>
            </a>
            <button class="navbar-toggler border-0 collapsed rounded-0 p-1"
                    type="button"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="my-1 w-100 close">X</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </nav>
</header>