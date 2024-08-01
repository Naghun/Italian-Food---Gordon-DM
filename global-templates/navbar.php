<div class="navigation-wrapper">
    <div class="container navigation">
        <div class="row navigation-row">
            <div class="col-12 d-flex justify-content-start align-items-center p-0 m-0 navigation-container">
                <div class="logo-container d-flex justify-content-center align-items-center">
                    <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="logo"></a>
                </div>
                <div class="main-menu-container col-5 d-none d-lg-flex justify-content-center align-items-center" id="main-menu-body">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'primary-menu col-12 d-flex justify-content-center align-items-center p-0 m-0',
                        'menu_class' => 'menu col-12 d-flex justify-content-start align-items-center',
                        'echo' => true,
                    ));
                    ?>
                </div><!-- main-menu-container -->
                <div class="nav-right col-3 d-lg-none d-flex justify-content-center align-items-center p-0 m-0" id="navigation-button-container">
                    <button class="col-4 hamburger-container d-flex justify-content-center align-items-center" id="navigation-button">
                        <i class="fa fa-bars hamburger"></i>
                    </button>
                </div>
                <div class="navigation-popup justify-content-start align-items-center flex-column" id="popup-container">
                    <div class="close-button-container d-flex justify-content-end align-items-center col-12 p-4">
						<i class="fa fa-xmark close-navigation-button" id="close-navigation-button"></i>
					</div>
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu(
							array(
                                'theme_location' => 'primary',
                                'container' => 'nav',
                                'container_class' => 'primary-menu col-12 d-flex justify-content-center align-items-center p-0 m-0',
                                'menu_class' => 'menu col-12 d-flex flex-column justify-content-start align-items-center',
                                'echo' => true,
							)
						);
					}
					?>
				</div>
            </div><!-- navigation-container -->
        </div><!-- navigation-row -->
    </div><!-- container navigation -->
</div><!-- navigation-wrapper -->
