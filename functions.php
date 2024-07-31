<?php

function italian_food_files() {
    #activating jquery
    wp_enqueue_script('jquery');
    
    #registering bootstrap
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);

    #custom css styles
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/navbar.css');
    
    #custom js scripts
    wp_enqueue_script('js-logic', get_stylesheet_directory_uri() . '/js/logic.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'italian_food_files');

?>
