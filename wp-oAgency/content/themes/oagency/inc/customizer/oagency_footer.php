<?php

function oagency_footer($wp_customize) 
{
    // Footer Visibility
    $wp_customize->add_setting(
        'oagency_footer_active',
        [
            'default' => true
        ]
    );

    $wp_customize->add_control(
        'oagency_footer_active',
        [
            'type' => 'checkbox',
            'section' => 'oagency_footer',
            'label' => 'Activate Footer',
            'priority' => 1,
        ]
    );

    // Footer copyright
    $wp_customize->add_setting(
        'oagency_footer_copyright',
        [
            'default' => 'oAgency - 2017'
        ]
    );

    $wp_customize->add_control(
        'oagency_footer_copyright',
        [
            'type' => 'text',
            'section' => 'oagency_footer',
            'label' => 'Copyright',
            'priority' => 2,
        ]
    );

}