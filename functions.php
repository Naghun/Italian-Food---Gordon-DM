<?php


###################################################################
#############   Registering styles and scripts      ###############
###################################################################


function italian_food_files() {
    #activating jquery
    wp_enqueue_script('jquery');
    
    #registering bootstrap
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);

    #custom css styles
    
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/navbar.css');

    if (is_front_page() || is_page_template('page-templates/home-page-template.php')) {
        wp_enqueue_style('home-page-styles', get_stylesheet_directory_uri() . '/css/home-page.css', array());
    }
    if (is_page('Product') || is_page_template('page-templates/product-page-template.php')) {
        wp_enqueue_style('product-page-styles', get_stylesheet_directory_uri() . '/css/product-page.css', array());
    }
    if (is_page('About') || is_page_template('page-templates/about-page-template.php')) {
        wp_enqueue_style('about-page-styles', get_stylesheet_directory_uri() . '/css/about-page.css', array());
    }
    if (is_page('Contact') || is_page_template('page-templates/contact-page-template.php')) {
        wp_enqueue_style('contact-page-styles', get_stylesheet_directory_uri() . '/css/contact-page.css', array());
    }
    if (is_page('Promo') || is_page_template('page-templates/promo-page-template.php')) {
        wp_enqueue_style('promo-page-styles', get_stylesheet_directory_uri() . '/css/promo-page.css', array());
    }
    
    #custom js scripts
    wp_enqueue_script('js-logic', get_stylesheet_directory_uri() . '/js/logic.js', array(), '1.0', true);
}

###################################################################
#############         Registering menus             ###############
###################################################################

add_action('wp_enqueue_scripts', 'italian_food_files');

function custom_register_menus() {
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'italian-food-gordon-dm'),
        'footer'    => __('Footer Menu', 'italian-food-gordon-dm'),
    ));
}
add_action('init', 'custom_register_menus');


###################################################################
#############         nnnnnnnnnnnnnnnnnnnn          ###############
###################################################################




?>


