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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="header position-fixed w-100 shadow">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        
                        if(has_custom_logo()) {
                            echo '<img src="'. esc_url($logo[0]). '" class="navbar-brand__img" alt="'. get_bloginfo('name'). '" title="'. get_bloginfo('name'). '">';
                        }else {
                            echo '<p class="m-0 text-white">'. get_bloginfo('name'). '</p>';
                        }
                    ?>
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
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu_class'     => 'nav navbar-nav ml-auto',
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                    </div>
                </div>
            </nav>
        </header><!-- #masthead -->
