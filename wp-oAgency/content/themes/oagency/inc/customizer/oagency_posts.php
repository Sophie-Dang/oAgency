<?php

function oagency_posts($wp_customize)
{
    // Posts Visibility
    $wp_customize->add_setting(
        'oagency_posts_active',
        [
            'default' => true
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_active',
        [
            'type' => 'checkbox',
            'section' => 'oagency_posts',
            'label' => 'Activate Posts Section',
            'priority' => 1,
        ]
    );

    /*-----------------------------------------------*/
    // Intro title
    $wp_customize->add_setting(
        'oagency_posts_intro_title',
        [
            'default' => 'Nos actualités'
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_intro_title',
        [
            'type' => 'text',
            'label' => 'Title',
            'priority' => 2,
            'section' => 'oagency_posts',
        ]
    );

    /*-----------------------------------------------*/
    // Intro content
    $wp_customize->add_setting(
        'oagency_posts_intro_content',
        [
            'default' => 'Découvrez nos dernières actualités lorem ipsum dolor sit amet'
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_intro_content',
        [
            'type' => 'textarea',
            'label' => 'Content',
            'priority' => 3,
            'section' => 'oagency_posts',
        ]
    );

    /*-----------------------------------------------*/
    // Select Category
    $wp_customize->add_setting(
        'oagency_posts_category',
        [
            'default' => 'actualites'
        ]
    );

    $posts_category = get_categories();

    foreach($posts_category as $post_category) {
        $choices[$post_category->slug] = $post_category->name;
    }

    $wp_customize->add_control(
        'oagency_posts_category',
        [
            'type' => 'select',
            'label' => 'Select Category',
            'priority' => 4,
            'choices' => $choices,
            'section' => 'oagency_posts',
        ]
    );

    /*-----------------------------------------------*/
    // Posts number
    $wp_customize->add_setting(
        'oagency_posts_number',
        [
            'default' => 6
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_number',
        [
            'type' => 'number',
            'input_attrs' => [
                'min' => 1,
                'max' => 10,
            ],
            'label' => 'Num',
            'priority' => 5,
            'section' => 'oagency_posts',
        ]
    );
}