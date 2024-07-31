<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title>
    <?php
    if (is_front_page() || is_home()) {

        echo 'Italian Food |';
    } else {
        wp_title('|', true, 'right');
    }
    ?>
    </title>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <header class="site-header" id="wrapper-navbar">
        <!-- Ovo je mesto gde možeš uključiti tvoj navbar -->
        <?php if ( function_exists( 'get_template_part' ) ) {
            get_template_part( 'global-templates/navbar' );
        } ?>
    </header><!-- #wrapper-navbar -->