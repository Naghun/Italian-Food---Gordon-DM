<?php


###################################################################
#############   Registering styles and scripts      ###############
###################################################################


function italian_food_files() {
    #activating jquery
    wp_enqueue_script('jquery');
    
    #registering bootstrap
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );

    #registering font-awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );

    #custom css styles
    
    wp_enqueue_style('navigation-styles', get_template_directory_uri() . '/css/navbar.css');
    wp_enqueue_style('footer-styles', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('placeholder-styles', get_template_directory_uri() . '/css/placeholder-template.css');

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
    wp_enqueue_script('navbar-logic', get_stylesheet_directory_uri() . '/js/navbar-logic.js', array(), '1.0', true);

    if (is_front_page() || is_page_template('page-templates/home-page-template.php')) {
        wp_enqueue_script('subscriber-logic', get_stylesheet_directory_uri() . '/js/subscriber-logic.js', array(), '1.0', true);
        wp_localize_script('subscriber-logic', 'form_subscriber_data', array(
			'site_url' => 'http://cyber-security-summit.local/',
			'nonce' => wp_create_nonce('wp_subscriber'),
			'ajax_url' => admin_url('admin-ajax.php')
		));
    }
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
#############        Hide WordPress Admin Menu      ###############
###################################################################

add_filter('show_admin_bar', '__return_false'); 

###################################################################
#############             Required Files            ###############
###################################################################

require get_theme_file_path('inc-php/subscriber-ajax.php');

?>


