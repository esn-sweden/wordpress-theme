<?php
function enqueue_custom_styles() {
    wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . '/css/kelson-sans.css');

    add_editor_style('/var/www/wordpress/wp-content/themes/esnsweden/css/editor-styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
