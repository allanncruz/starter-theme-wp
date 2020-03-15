<?php

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
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_number', array(
        'label'      => __('Telefone', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'phone_number',
    )));


    $wp_customize->add_setting('whatsapp_number', array(
        'default'   => '',
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