<?php

function contact_emails_customize_register($wp_customize)
{
    $wp_customize->add_section('contact_emails_section', array(
        'title'      => __('Contatos Destinatários', 'text_domain'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('recipient_contact', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'recipient_contact', array(
        'label'      => __('Formulário de contato', 'text_domain'),
        'section'    => 'contact_emails_section',
        'settings'   => 'recipient_contact',
    )));
}
add_action('customize_register', 'contact_emails_customize_register');