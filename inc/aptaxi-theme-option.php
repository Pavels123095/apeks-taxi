<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

class ApTaxiThemeOptions {
    public function __construct()
    {
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' ); 
        // add_theme_support( 'menus' );
    }


    // the_post_thumbnails is first the content
    public function ymnews_minify_thumbnail($post = 0, $default_src = '/assets/img/logo_taxi.png') {
    
            if( ! $post || ! is_object($post) )
                $post = get_post($post);
        
            // если у записи есть миниатюра
            if( $thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true ) )
                if( $src = wp_get_attachment_url( $thumbnail_id ) )
                    return $src;
        
            // миниатюры нет, ищем в контенте
            preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post->post_content, $match );
        
            if( ! $match )
                return get_stylesheet_directory_uri().$default_src;
        
            return $match[1];
    }   

    public function aptaxi_home_loop() {
        global $post;
        require TEMPLATEPATH . '../templates/home-loop/post.php';
    }




}
?>