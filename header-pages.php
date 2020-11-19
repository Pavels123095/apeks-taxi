<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo( 'title' ); ?></title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?> >
    <header class="aptaxi-header aptaxi-header-pages">
        <div class="aptaxi-header-social-section aptaxi-header-section aptaxi-layout-section">
            <div class="aptaxi-header-social-wrapper aptaxi-layout-container">
                <div class="aptaxi-header-social-content aptaxi-layout-row">
                    <div class="aptaxi-header-social-icon aptaxi-layout-column">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-vk"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </div>
                    <hr>
                    <div class="aptaxi-header-widget aptaxi-layout-column">
                        <?php dynamic_sidebar( 'header_sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="aptaxi-header-website-description-section aptaxi-header-section aptaxi-layout-section">
            <div class="aptaxi-header-website-description-wrapper aptaxi-header-wrapper aptaxi-layout-container">
                <div class="aptaxi-header-website-description-content aptaxi-header-content aptaxi-layout-row">
                    <div class="aptaxi-header-logo aptaxi-layout-column">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="aptaxi-header-description aptaxi-layout-column">
                        <strong>Аренда, выкуп автомобилей</strong>
                        <span>подключение водителей к сервисам по заказу такси</span>
                    </div>
                </div>
            </div>
        </div>
    </header>