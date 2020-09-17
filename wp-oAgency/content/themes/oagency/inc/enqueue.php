<?php 

if (!function_exists('oagency_enqueue')) {

    // STYLES
    function oagency_enqueue()
    {
        // CSS
        wp_enqueue_style(
            'main-style', 
            get_theme_file_uri('public/css/style.css'), 
            [], 
            '1.2', 
            'all' 
        );

        // JS
        wp_enqueue_script(
            'app', 
            get_theme_file_uri('public/js/app.js'),
            [], 
            '1.2', 
            true 
        );
    }
}
add_action('wp_enqueue_scripts', 'oagency_enqueue');