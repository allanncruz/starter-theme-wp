<?php

function google_analytics_customize_register($wp_customize)
{
    $wp_customize->add_section('analytics_informations_section', array(
        'title'      => __('ID Google Analytics', 'text_domain'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('id_analytics', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'id_analytics', array(
        'label'      => __('ID Google Analytics', 'text_domain'),
        'section'    => 'analytics_informations_section',
        'settings'   => 'id_analytics',
    )));
}
add_action('customize_register', 'google_analytics_customize_register');