<?php 

function personal_portfolio(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script('proper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/7716d8d7b9.js"');
    wp_enqueue_script( 'script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);

}

add_action('wp_enqueue_scripts', 'personal_portfolio');

?>