<?php

function oagency_callToAction($wp_customize) 
{
    // Call to action visbility
    $wp_customize->add_setting(
        'oagency_callToAction_active',
        [
            'default' => true
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_active',
        [
            'type' => 'checkbox',
            'label' => 'Activate Call to action',
            'section' => 'oagency_callToAction',
            'priority' => 1,
        ]
    );

    /*-----------------------------------------------*/
    // Title
    $wp_customize->add_setting(
        'oagency_callToAction_title',
        [
            'default' => 'Hello'
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_title',
        [
            'type' => 'text',
            'label' => 'Title',
            'section' => 'oagency_callToAction',
            'priority' => 2,
        ]
    );

    /*-----------------------------------------------*/
    // Content
    $wp_customize->add_setting(
        'oagency_callToAction_content',
        [
            'default' => 'Call to action - Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_content',
        [
            'type' => 'textarea',
            'label' => 'Content',
            'section' => 'oagency_callToAction',
            'priority' => 3,
        ]
    );

    /*-----------------------------------------------*/
    // Text btn #1
    $wp_customize->add_setting(
        'oagency_callToAction_btn1',
        [
            'default' => 'button click'
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_btn1',
        [
            'type' => 'text',
            'label' => 'Text btn #1',
            'section' => 'oagency_callToAction',
            'priority' => 4,
        ]
    );

    /*-----------------------------------------------*/
    // Link btn #1
    $wp_customize->add_setting(
        'oagency_callToAction_btnLink1',
        [
            'default' => '#'
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_btnLink1',
        [
            'type' => 'url',
            'label' => 'Link btn #1',
            'section' => 'oagency_callToAction',
            'priority' => 5,
        ]
    );

    /*-----------------------------------------------*/
    // Text btn #2
    $wp_customize->add_setting(
        'oagency_callToAction_btn2',
        [
            'default' => 'Another button'
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_btn2',
        [
            'type' => 'text',
            'label' => 'Text btn #2',
            'section' => 'oagency_callToAction',
            'priority' => 6,
        ]
    );

    /*-----------------------------------------------*/
    // Link btn #2
    $wp_customize->add_setting(
        'oagency_callToAction_btnLink2',
        [
            'default' => '#'
        ]
    );

    $wp_customize->add_control(
        'oagency_callToAction_btnLink2',
        [
            'type' => 'url',
            'label' => 'Link btn #2',
            'section' => 'oagency_callToAction',
            'priority' => 7,
        ]
    );

    /*-----------------------------------------------*/
    // Background
    $wp_customize->add_setting(
        'oagency_callToAction_bgImg',
        [
            'default' => 'https://source.unsplash.com/user/blakepnw/Ok2-7hSwYro/1200x400/'
        ]
    );

    $bg_img = new WP_Customize_Media_Control ( 
		$wp_customize, 
		'oagency_callToAction_bgImg',	
        [			
            'label'    => 'Upload a background',
			'section'  => 'oagency_callToAction',
			'priority' => 8,
            'mime_type' => 'image'
        ]
		
    );
    
    $wp_customize->add_control($bg_img);
}