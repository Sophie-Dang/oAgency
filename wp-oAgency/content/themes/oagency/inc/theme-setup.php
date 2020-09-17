<?php

if (!function_exists('oagency_setup')) {

    function oagency_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'main' => 'Barre de menu principale, située en tête du site',
        ]);
    }
}
add_action('after_setup_theme', 'oagency_setup');

/***********************************************************/
// Modification Nav Class
if (!function_exists('oprofile_wpnavmenu')) {

    function oprofile_wpnavmenu($menu) {

        $menu = str_replace('menu', 'navbar-nav', $menu);
        $menu = str_replace('navbar-nav-item', 'nav-item', $menu);
        $menu = str_replace('href', 'class="nav-link" href ', $menu);

        return $menu;
    }

}
add_filter('wp_nav_menu', 'oprofile_wpnavmenu');