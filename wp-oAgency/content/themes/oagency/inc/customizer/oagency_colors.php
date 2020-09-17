<?php

function oagency_colors($wp_customize)
{
    // Links color
    $wp_customize->add_setting(
        'oagency_colors_links',
        [
            'default' => '#3A3A3A'
        ]
    );

    $links_color = new WP_Customize_Color_Control(
        $wp_customize,
        'oagency_colors_links',
        [
            'label' => 'Links color',
            'section' => 'oagency_colors',
            'priority' => 1
        ]
    );

    $wp_customize->add_control($links_color);

    /*-----------------------------------------------*/
    // Background color
    $wp_customize->add_setting(
        'oagency_colors_bg',
        [
            'default' => '#ffffff'
        ]
    );

    $bg_color = new WP_Customize_Color_Control(
        $wp_customize,
        'oagency_colors_bg',
        [
            'label' => 'Background color',
            'section' => 'oagency_colors',
            'priority' => 2
        ]
    );

    $wp_customize->add_control($bg_color);   
}