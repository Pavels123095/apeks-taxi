<?php 
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo( 'title' ); ?></title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?> >
    <header class="aptaxi-header">
        <div class="aptaxi-header-wrapper aptaxi-layout-container">
            <div class="aptaxi-header-content aptaxi-layout-row">
                <div class="aptaxi-header-logo aptaxi-layout-column">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="aptaxi-header-description aptaxi-layout-column">
                    <span><?php bloginfo( 'description' ); ?></span>
                </div>
                <div class="aptaxi-header-widget aptaxi-layout-column">
                    <?php dynamic_sidebar( 'header_sidebar' ); ?>
                </div>
            </div>
        </div>
    </header>