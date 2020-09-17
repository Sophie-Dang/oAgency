<?php

if (!function_exists('oagency_register_widgets')) {

    function oagency_register_widgets() {

        register_sidebar([
            'id'            => 'footer-sidebar-1',
            'name'          => __( 'Footer oAgency' ),
            'description'   => __( ' Navigation en pied de page du site' ),
            'class'         => 'sidebar-class',
            'before_widget' => '<div id="%1$s" class="footer-archive-item widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="footer-archive-item__title">',
            'after_title'   => '</h5>',
        ]);

        register_sidebar([
            'id'            => 'sidebar-sidebar-1',
            'name'          => __( 'Sidebar oAgency' ),
            'description'   => __( ' Navigation sur le côté droit du site' ),
            'class'         => 'sidebar-class',
            'before_widget' => '<div id="%1$s" class="footer-archive-item widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="footer-archive-item__title">',
            'after_title'   => '</h5>',
        ]);
    }
}
add_action('widgets_init', 'oagency_register_widgets');