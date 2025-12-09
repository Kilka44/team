<?php
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

function add_scripts_and_styles() {

    // Подключение CSS
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

    // Подключение JS
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        null,
        true
    );
}

// Поддержка темы
function portfolio_theme_setup() {
    // Поддержка тега title
    add_theme_support('title-tag');

    // Поддержка миниатюр для постов (featured image)
    add_theme_support('post-thumbnails');

    // Регистрация меню
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'portfolio')
    ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');
?>
