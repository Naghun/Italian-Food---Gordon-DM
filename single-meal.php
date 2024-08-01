<?php
/*
 * Template Name: Single Meal
 * Template for displaying a single meal page.
 */

defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="page-wrapper">
    <div class="container">
        <div class="row meal-row">
            <div class="meal-container col-12 d-flex justify-content-center align-items-center">
                <?php

                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();

                            $discount = get_field('discount');
                            $price = get_field('price');
                            $image_url = get_field('image');
                            ?>
                            <article class="meal-details col-12 d-flex justify-content-center align-items-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="right col-5 d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="header col-12 d-flex justify-content-center align-items-center text-center"><?php echo the_title(); ?></h1>
                                    <p class="description col-8 d-flex justify-content-center align-items-center text-center">Description: <br><?php echo get_field('description'); ?></p>
                                    <p class="price col-12 d-flex justify-content-center align-items-center">Price: <?php echo $price ?>$</p>
                                    <p class="discount col-12 d-flex justify-content-center align-items-center">
                                        <?php 
                                        if ($discount > 0) {
                                            echo '<p>Discount: Yes</p>';
                                            $discounted_price = $price - ($price * $discount / 100);
                                            echo '<p>Discounted Price: ' . $discounted_price . '</p>';
                                        } else {
                                            echo '<p>No discount</p>';
                                        }
                                        ?>
                                    <p class="likes col-12 d-flex justify-content-center align-items-center">Likes: <?php echo get_field('likes'); ?></p>
                                    </p>
                                </div>
                                <div class="left col-5 d-flex justify-content-center align-items-center">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="col-6">
                                </div>
                            </article>

                            <?php
                        }
                    } else {
                        echo 'no Meals!';
                    }
                    

                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>