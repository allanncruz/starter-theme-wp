<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Started theme wp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Requered meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>" >
  <meta name="description" content="<?php bloginfo('description '); ?>">
  
  
  <?php if(get_theme_mod('id_analytics')) { ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_theme_mod('id_analytics') ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo get_theme_mod('id_analytics') ?>');
    </script>
  <?php }
    wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header position-fixed w-100 shadow">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand text-white" href="<?php bloginfo("url") ?>">
        <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          
          
          if(has_custom_logo()) {
            echo '<img src="'. esc_url($logo[0]). '" class="navbar-brand__img">';
          }else {
            echo '<p class="m-0 text-white">'. get_bloginfo('name'). '</p>';
          }
        ?>
      </a>

      <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbar-collapse"
              aria-controls="navbar-collapse"
              aria-expanded="false"
              aria-label="Toggle navigation"
      >

        <i class="navbar-icon"></i>
        <i class="navbar-icon"></i>
        <i class="navbar-icon"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end py-md-0 py-5" id="navbar-collapse">
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'principal',
            'depth'             => 2,
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
      </div>
    </div>
  </nav>
</header>
