<div class="aptaxi-sidebar-content aptaxi-widgets-area">
    <?php $id_post = get_the_ID();
        if ($id_post == '' or $id_post == 'none' or $id_post == 0) {
            $id_post = '';
        }
        if(is_page( 'Яндекс Такси' ) OR is_category(12) OR is_category(13) OR in_category( 12, $id_post ) OR in_category( 13, $id_post )) :
            if (is_active_sidebar( 'yandex_sidebar' )):
                dynamic_sidebar( 'yandex_sidebar' );
            endif;
        elseif (is_page('СитиМобил') OR is_category(14) OR is_category(15) OR in_category( 14, $id_post ) OR in_category( 15, $id_post )) : 
            if (is_active_sidebar( 'citymobil_sidebar' )):
                dynamic_sidebar( 'citymobil_sidebar' ); 
            endif;
        else:
            dynamic_sidebar( 'main_sidebar' );
        endif; 
    ?>
</div>