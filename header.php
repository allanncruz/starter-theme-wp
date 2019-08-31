<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header class="header sticky-top">
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark" role="navigation">
        <div class="container">

            <a class="navbar-brand position-absolute" href="<?php bloginfo("url") ?>">
                <img class="position-relative w-75" src="<?php bloginfo("template_url") ?>/dist/img/image/logo.png">
            </a>

            <button class="navbar-toggler text-right w-100 outline border-0"
                    type="button"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

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