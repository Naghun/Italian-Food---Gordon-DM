<?php
/*
*   Template Name: HomePage Template
*
*   Template for displaying Home Page
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header();
?>
<div class="page-wrapper">
    <div class="container">
        <div class="row starter-row" id="starter-row">
            <div class="starter-container col-12 p-0 m-0">
                <div class="img-container col-12 p-0">
                    <img src="<?php echo get_theme_file_uri('/images/background-img.png'); ?>" alt="pozadina" class="background-img col-12 m-0 p-0">
                    <div class="details col-5 d-flex flex-column justify-content-start align-items-center">
                        <h1 class="header col-12 d-flex justify-content-start align-items-center">Best Pizza</h1>
                        <p class="text col-12 d-flex justify-content-start align-items-center">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Eligendi quia, modi eius nisi mollitia odit id nam fugiat perspiciatis dignissimos.
                        </p>
                        <div class="button-container col-12 d-flex justify-content-start align-items-center">
                            <button class="btn order-button col-6">Order Now</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of starter row -->
        <!-- product row -->
        <div class="row product-row">
            <div class="product-container col-12 p-0 m-0 d-flex flex-column justify-content-start align-items-center">
                <div class="img-container col-12">
                    <img src="<?php echo get_theme_file_uri('/images/product-bg.png'); ?>" alt="pozadina" class="background-img col-12 m-0 p-0">
                </div>
                <div class="details col-12 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="header col-12 d-flex flex-column justify-content-center align-items-center">Popular Menu</h1>
                    <p class="text col-6 d-flex flex-column justify-content-center align-items-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia saepe nihil officia aliquam?
                    </p>
                    <div class="products col-12 d-flex justify-content-center align-items-start">
                        <?php        
                            $args = array(
                                'post_type' => 'meal',
                                'posts_per_page' => 3
                            );

                            $meal_query = new WP_Query($args);
                            if ($meal_query->have_posts()) : 
                                while ($meal_query->have_posts()) : $meal_query->the_post();
                                    $image_url = get_field('image'); 
                                        if( $image_url ): ?>
                                        <a class="col-3 d-flex flex-column justify-content-start align-items-center product-link" href="<?php echo get_permalink(); ?>">
                                            <div class="col-12 d-flex flex-column justify-content-start align-items-center product">
                                                <div class="img-container col-10 d-flex justify-content-center align-items-center">
                                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                                </div>
                                                <div class="product-details col-12 justify-content-start align-items-center product">
                                                    <h3 class="col-10 product-header text-center"><?php echo the_title(); ?></h3>
                                                    <p class="col-12 product-desc text-center"><?php echo get_field('description'); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php endif;
                                endwhile;
                                wp_reset_postdata(); // Restore original Post Data
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div> <!-- end of product row -->
        <!-- delivery row -->
        <div class="row delivery-row">
            <div class="delivery-container col-12 p-0 m-0">
            <div class="img-container col-12 p-0">
                    <img src="<?php echo get_theme_file_uri('/images/delivery-bg.png'); ?>" alt="pozadina" class="background-img col-12 m-0 p-0">
                    <div class="details col-5 d-flex flex-column justify-content-start align-items-center">
                        <h1 class="header col-12 d-flex justify-content-start align-items-center">Free Delivery</h1>
                        <p class="text col-12 d-flex justify-content-start align-items-center">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Eligendi quia, modi eius nisi mollitia odit id nam fugiat perspiciatis dignissimos.
                        </p>
                        <div class="button-container col-12 d-flex justify-content-start align-items-center">
                            <button class="btn order-button col-6">Order Now</button> 
                        </div>
                    </div>
                </div>  
            </div>
        </div> <!-- end of delivery row -->
    </div>
</div>


<?php
get_footer();

?>