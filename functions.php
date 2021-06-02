<?php

add_action( 'wp_enqueue_scripts', 'main_styles' );

function main_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'main', '/wp-content/themes/yppgroup/assets/js/main.js' );
}

function wp_dd() {

    foreach (func_get_args() as $x) {
        var_dump($x);
    }
    die;
    
}
