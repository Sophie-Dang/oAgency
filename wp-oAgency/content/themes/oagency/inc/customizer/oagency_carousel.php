<?php

function oagency_carousel($wp_customize) 
{
    // Carousel visibility
    $wp_customize->add_setting (
        'oagency_carousel_active',
        [
            'default' => true
        ]
    );

    $wp_customize->add_control(
        'oagency_carousel_active',
        [
            'type' => 'checkbox',
            'label' => 'Activate carousel',
            'section' => 'oagency_carousel',
            'priority' => 1,
        ]
    );

    /*-----------------------------------------------*/
    // Slide #1
    $wp_customize->add_setting (
        'oagency_carousel_slide1',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_slide1',
        [
            'type' => 'dropdown-pages',
            'label' => 'Slide #1',
            'description' => 'Select a page for the slide #1 ',
            'section' => 'oagency_carousel',
            'priority' => 2,
        ]
    );

    /*-----------------------------------------------*/
    // Slide #2 
    $wp_customize->add_setting (
        'oagency_carousel_slide2',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_slide2',
        [
            'type' => 'dropdown-pages',
            'label' => 'Slide #2',
            'description' => 'Select a page for the slide #2 ',
            'section' => 'oagency_carousel',
            'priority' => 3,
        ]
    );

    /*-----------------------------------------------*/
    // Slide #3   
    $wp_customize->add_setting (
        'oagency_carousel_slide3',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_slide3',
        [
            'type' => 'dropdown-pages',
            'label' => 'Slide #3',
            'description' => 'Select a page for the slide #3 ',
            'section' => 'oagency_carousel',
            'priority' => 4,
        ]
    );

    /*-----------------------------------------------*/
    // Interval
        // Slide #3   
        $wp_customize->add_setting (
            'oagency_carousel_interval',
            [
                'default' => 4000
            ]
        );
    
        $wp_customize->add_control(
            'oagency_carousel_interval',
            [
                'type' => 'number',
                'input_attrs' => 
                [
                    'min' => 0,
                    'step' => 100
                ],
                'label' => 'Interval between 2 slides (ms)',
                'section' => 'oagency_carousel',
                'priority' => 5,
            ]
        );
}