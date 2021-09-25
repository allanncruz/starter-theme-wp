<?php
  /**
   * Twenty Nineteen functions and definitions
   *
   * @link https://developer.wordpress.org/themes/basics/theme-functions/
   *
   * @package Started theme wp
   */


//Import style and scripts
  function started_theme_scripts()
  {
    wp_enqueue_style('styles-theme', get_template_directory_uri() . '/dist/css/style.min.css');
    wp_enqueue_style('fontawesome',  'https://use.fontawesome.com/releases/v5.10.2/css/all.css');
    wp_enqueue_script('scripts-theme', get_template_directory_uri() . '/dist/js/all.js', ['jquery'], '3.5.1', true);
  }
  add_action('wp_enqueue_scripts', 'started_theme_scripts');


//Remove admin bar
  add_filter( 'show_admin_bar' , 'started_theme_admin_bar');
  function started_theme_admin_bar(){
    return false;
  }


//Custom logo
  if (!function_exists('started_theme_setup')) {
    function started_theme_setup()
    {
      
      // Adds theme support to logo
      add_theme_support(
        'custom-logo',
        array(
          'height'      => 80,
          'width'       => 220,
          'flex-width'  => true,
          'flex-height' => true,
        )
      );
    }
  }
  add_action('after_setup_theme', 'started_theme_setup');


//Add suporte post thumbnails and title tag
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );


//Register Wp Menu
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  
  register_nav_menus( array(
    'principal' => __('Menu Principal', 'bstwp')
  ));



// Post types
  require dirname(__FILE__) .  '/functions/post_types/vitrine_post_type.php';
  require dirname(__FILE__) .  '/functions/post_types/blog_post_type.php';


// ACF
  require dirname(__FILE__) . '/functions/acfFields/acf_fields.php';


// Settings
  require dirname(__FILE__) . '/functions/settings/contact_informations_settings.php';
  require dirname(__FILE__) . '/functions/settings/contact_emails.php';
  require dirname(__FILE__) . '/functions/settings/custom_login_logo.php';
  require dirname(__FILE__) . '/functions/settings/custom_google_analytics.php';


//Limited excerpt_length
  function custom_excerpt_length( $length ) {
    return 10;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//remove editor gutenberg enable editor classic
  add_filter('use_block_editor_for_post', '__return_false');
  
  /**
   * Disable the emoji's
   */
  function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    
    // Remove from TinyMCE
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  }
  add_action( 'init', 'disable_emojis' );
  
  /**
   * Filter out the tinymce emoji plugin.
   */
  function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
      return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
      return array();
    }
  }
