<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
/*
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
*/

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
      /*   
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','blankslate-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
*/
// END ENQUEUE PARENT ACTION

function register_footer() {
    register_nav_menu( 'footer', 'Footer' );
}
add_action( 'after_setup_theme', 'register_footer' );

function custom_admin_link_menu_item($items, $args) {
    if (is_user_logged_in() && $args->theme_location !== 'footer') {
        $admin_link = '<li><a href="' . esc_url(admin_url())  . '"class="admin"' . '>Admin</a></li>';

        $insert_after_link_id = 'menu-item-12'; 
        $insert_before_link_id = 'menu-item-11';

        $menu_items = explode('</li>', $items);

        $insert_after_index = array_search($insert_after_link_id . '">', $menu_items);
        $insert_before_index = array_search($insert_before_link_id . '">', $menu_items);

        array_splice($menu_items, $insert_after_index + 1, 0, $admin_link);

        $items = implode('</li>', $menu_items);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'custom_admin_link_menu_item', 10, 2);




