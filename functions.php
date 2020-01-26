<?php

    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    function my_function_admin_bar(){
        return false;
    }

    if (!function_exists('theme_setup')) {
        function theme_setup()
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

//custom admin login logo
function custom_login_logo() {
    echo '<style type="text/css">
           h1 a  
           { 
                background-image: url(' .get_bloginfo('template_directory').'/assets/images/logo.png) !important;
                width: 193px !important;
                height: 100px !important;
                background-size: 133px !important;
                background-position: center !important;
            }
           body.login  
           { 
            background: url(http://atle.mixinternet.com.br/wp-content/themes/atle/assets/images/statistic.jpg);
            background-size: cover;
            }
            .wp-core-ui .button-primary{
                background: #263441;
                border-color:#263441;
                float: none !important;
                width: 100%;
                margin-top: 22px;
                box-shadow:none !important;
                height: 55px;
                border-radius: 0;
            }
            .login form .input:focus{
                border-color: #213e58;
                box-shadow: 0 0 0 1px #213e58;
            }
            .dashicons-visibility:before{
                color: #737373;
            }
            .wp-core-ui .button-primary:hover,
            .wp-core-ui .button-primary:focus,
            .wp-core-ui .button-primary:active{
                background: #213e58;
                border-color: #213e58;
            }
          </style>';
}
add_action('login_head', 'custom_login_logo');


function contact_informations_customize_register($wp_customize)
{
    $wp_customize->add_section('contact_informations_section', array(
        'title'      => __('Informações de contato', 'text_domain'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('instagram_username', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram_username', array(
        'label'      => __('Instagram URL', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'instagram_username',
    )));

    $wp_customize->add_setting('facebook_username', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook_username', array(
        'label'      => __('Facebook URL', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'facebook_username',
    )));

    $wp_customize->add_setting('phone_number', array(
        'default'   => '(84) 0000-0000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_number', array(
        'label'      => __('Telefone', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'phone_number',
    )));


    $wp_customize->add_setting('whatsapp_number', array(
        'default'   => '(84) 00000-0000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'whatsapp_number', array(
        'label'      => __('WhatsApp', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'whatsapp_number',
    )));

    $wp_customize->add_setting('mail_address', array(
        'default'   => 'contato@site.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mail_address', array(
        'label'      => __('E-mail', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'mail_address',
    )));

    $wp_customize->add_setting('map_embed_url', array(
        'default'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.1676749505!2d-35.207500485643!3d-5.831971359114037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff8c57a4c5df%3A0x8931b48e399e1c59!2sMix%20Internet!5e0!3m2!1spt-BR!2sbr!4v1574291085586!5m2!1spt-BR!2sbr',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'map_embed_url', array(
        'label'     => __('URL para Embed do Mapa', 'text_domain'),
        'section'   => 'contact_informations_section',
        'settings'  => 'map_embed_url',
    )));
}
add_action('customize_register', 'contact_informations_customize_register');


add_action('after_setup_theme', 'theme_setup');


    add_theme_support( 'post-thumbnails' );

    add_action('wp_enqueue_scripts', 'theme_scripts', 'favicon');
    function theme_scripts()
    {
        wp_enqueue_style('styles-theme', get_template_directory_uri() . '/dist/css/style.min.css');
        wp_enqueue_style('fontawesome',  'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
        wp_enqueue_script('scripts-theme', get_template_directory_uri() . '/dist/js/all.js', ['jquery'], '1.0.0', true);
    }

    function menu_icons($icon){

        // Store your SVGs in an associative array
        $svgs = array(
                ''  => '',
        );

        // Return the chosen icon's SVG string
        return $svgs[$icon];
    }


    add_action('wp_head', 'add_your_stuff');
    function add_your_stuff() {
        ?>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo("template_url") ?>/dist/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo("template_url") ?>/dist/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <?php
    }


    function animacaoType()
    {
        $labels = array(
            'name'               => 'Animações',
            'singular_name'      => 'Animação',
            'menu_name'          => 'Animações',
            'name_admin_bar'     => 'Animações',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar novo item',
            'new_item'           => 'Novo Item',
            'edit_item'          => 'Editar Item',
            'view_item'          => 'Ver Item',
            'all_items'          => 'Todos os Itens',
            'search_items'       => 'Procurar Animações',
            'parent_item_colon'  => 'Parent Animações',
            'not_found'          => 'Nenhum item encontrado',
            'not_found_in_trash' => 'Nenhum item encontrado na lixeira'
        );

        $args = array(
            'labels'             => $labels,
            'description'        => 'Todos os itens',
            'public'             => true,
            'show_in_rest'       => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_icon'          => 'dashicons-format-image',
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'animacoes' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'rest_base'          => 'animacoes',
            'taxonomies' => array('category'),
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'supports'           => array( 'title', 'editor','thumbnail')
        );

        register_post_type( 'animacao', $args );

        flush_rewrite_rules();
    }
    add_action('init', 'animacaoType');
    
    
    

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
       'principal' => __('Menu Principal', 'bstwp')
    ));

?>
