<div class="page-wrapper">
    <div class="container navigation">
        <div class="row navigation-row">
            <div class="col-12 navigation-container">
                <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="logo">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', // Lokacija menija koju smo registrovali
                    'container' => 'nav', // Tag koji će obuhvatiti meni, možeš koristiti 'div', 'nav', 'false' za ništa, itd.
                    'container_class' => 'primary-menu', // Klasa za kontejner
                    'menu_class' => 'menu', // Klasa za <ul>
                    'echo' => true, // Da li da prikaže meni ili da ga vrati kao string
                ));
                ?>
            </div>
        </div>
    </div>
</div>