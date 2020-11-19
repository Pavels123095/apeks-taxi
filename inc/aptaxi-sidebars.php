<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


class AptaxiSidebars {
    public function __construct()
    {
        add_action( 'widgets_init', array( $this, 'aptaxi_register_sidebars' ));
    }

    function aptaxi_register_sidebars() {
 
        /* В боковой колонке - первый сайдбар */
        register_sidebar(
            array(
                'id' => 'header_sidebar', // уникальный id
                'name' => 'Шапка', // название сайдбара
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
                'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
                'after_widget' => '</div>',
                'before_title' => '<div class="aptaxi-widget-header"><h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
                'after_title' => '</h3></div>'
            )
        );
     
        /* В подвале - второй сайдбар */
        register_sidebar(
            array(
                'id' => 'footer_sidebar',
                'name' => 'Подвал',
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
                'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="aptaxi-widget-header"><h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
                'after_title' => '</h3></div>'
            )
        );
        register_sidebar(
            array(
                'id' => 'main_sidebar',
                'name' => 'Главный сайдбар',
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в главный сайдбар.',
                'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="aptaxi-widget-header"><h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
                'after_title' => '</h3></div>'
            )
        );
        register_sidebar(
            array(
                'id' => 'yandex_sidebar',
                'name' => 'Страница яндекс (сайдбар)',
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в главный сайдбар.',
                'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="aptaxi-widget-header"><h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
                'after_title' => '</h3></div>'
            )
        );
        register_sidebar(
            array(
                'id' => 'citymobil_sidebar',
                'name' => 'Страница СитиМобил (сайдбар)',
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в главный сайдбар.',
                'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="aptaxi-widget-header"><h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
                'after_title' => '</h3></div>'
            )
        );
    }

}