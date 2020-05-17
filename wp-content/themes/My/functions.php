<?php
add_action( 'wp_enqueue_scripts', 'StyleCss' );
add_action( 'wp_footer', 'Script' );
add_action( 'after_setup_theme', 'Top_Menu' );
function StyleCss() {
	// подключаем файл стилей темы
    wp_enqueue_style( 'st', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style( 'slick_min', get_template_directory_uri() . '/assets/slick/slick-theme.css');
}

function Script(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/slick/slick.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() .'/assets/js/wow.min.js', array(), '1.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0', true );
}

function Top_Menu(){
    register_nav_menu( 'top', 'Меню Шапки' );
    register_nav_menu( 'bottom', 'Меню Подвала' );
}
?>