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
        <div class="row starter-row">
            <div class="starter-container col-12 p-0 m-0">
                <div class="img-container col-12 p-0">
                    <img src="<?php echo get_theme_file_uri('/images/background-img.png'); ?>" alt="pozadina" class="background-img col-12 m-0 p-0">
                    <div class="overlay col-12"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();

?>