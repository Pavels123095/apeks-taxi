<navbar class="aptaxi-sidebar-nav-menu aptaxi-navbar">
    <?php
        $args_menu = array(
                    'theme_location'  => 'Main_nav',
                    'fallback_cb' => 'navbar_callback'
                    );
        // wp_nav_menu($args_menu);
        wp_nav_menu(
            $args_menu
        );
    ?>
</navbar>                                                                                                                                                                                                                                                                                                                                                                                                    