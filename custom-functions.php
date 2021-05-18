<?php
/* Custom functions for plugin.
* containts defination of constants, file include and enqueue
*
* @package Menu Builder
*/

/* Constants */
define('HSC_MENU_BUILDER_URI', plugins_url('menu-builder'));
define('HSC_MENU_BUILDER_JS_URI', plugins_url('menu-builder') . '/vendor/js');
define('HSC_MENU_BUILDER_CSS_URI', plugins_url('menu-builder') . '/css');

// echo HSC_MENU_BUILDER_CSS_URI;

// enqueue styles and scripts

if (!function_exists('hsc_menu_builder_scripts')) {

    function hsc_menu_builder_scripts()
    {
        wp_enqueue_style('hsc_menu_builder_styles', HSC_MENU_BUILDER_CSS_URI . '/style.css');
        wp_enqueue_scripts('hsc_menu_builder_main_js', HSC_MENU_BUILDER_JS_URI . 'main.js', array('jquery'), '', true);
    }

    add_action('wp_enqueue_scripts', 'hsc_menu_builder_scripts');
}
