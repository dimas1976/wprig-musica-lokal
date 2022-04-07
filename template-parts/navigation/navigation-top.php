<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 02.05.2018
 * Time: 12:48
 */
?>
<nav class="navbar navbar-expand-md navbar-light mb-4" data-aos="fade-down" role="navigation"
     aria-label="<?php esc_attr_e('Top Menu', 'musica'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span>MENU</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top',
                        'menu_class' => 'navbar-nav',
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</nav>