<?php
require 'customizer/oagency_carousel.php';
require 'customizer/oagency_posts.php';
require 'customizer/oagency_call-to-action.php';
require 'customizer/oagency_colors.php';
require 'customizer/oagency_footer.php';


if(!function_exists('oagency_customize_register')) {

    function oagency_customize_register($wp_customize) {

        // PANEL
        $wp_customize->add_panel(
            'oagency_theme_panel', 
            [
                'title' => 'oAgency',
                'description' => 'Gestion du thème oAgency',
                'priority' => 1
            ]);

        /*----------------------------------------*/
        /* - SECTIONS -*/
        
        // Carousel
        $wp_customize->add_section(
            'oagency_carousel', 
            [
                'title' => 'Carousel',
                'panel' => 'oagency_theme_panel',
                'description' => 'Gestion du carousel d\'image',
                'priority' => 1,
            ]
        );

        // Posts
        $wp_customize->add_section(
            'oagency_posts', 
            [
                'title' => 'Posts',
                'panel' => 'oagency_theme_panel',
                'description' => 'Gestion des articles',
                'priority' => 2,
            ]
        );

        // Call to action
        $wp_customize->add_section(
            'oagency_callToAction', 
            [
                'title' => 'Call to action',
                'panel' => 'oagency_theme_panel',
                'description' => 'Gestion de la bannière de mise en avant',
                'priority' => 3,
            ]
        );

        // Colors
        $wp_customize->add_section(
            'oagency_colors', 
            [
                'title' => 'Couleurs',
                'panel' => 'oagency_theme_panel',
                'description' => 'Gestion des couleurs',
                'priority' => 4,
            ]
        );

        // Footer
        $wp_customize->add_section(
            'oagency_footer', 
            [
                'title' => 'Footer',
                'panel' => 'oagency_theme_panel',
                'description' => 'Gestion du Footer (pied de page)',
                'priority' => 5,
            ]
        );

        /*----------------------------------------*/
        oagency_posts($wp_customize);
        oagency_footer($wp_customize);
        oagency_callToAction($wp_customize);
        oagency_carousel($wp_customize);
        oagency_colors($wp_customize);

    }
}
add_action('customize_register', 'oagency_customize_register');