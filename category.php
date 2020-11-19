<?php get_header('pages'); ?>
<div class="aptaxi-website-content">
    <div class="aptaxi-page-loop aptaxi-layout-container">
        <div class="aptaxi-page-loop-content aptaxi-layout-row">
            <aside class="aptaxi-left-columns aptaxi-layout-column">
                <?php get_navbar(); ?>
                <?php echo get_sidebar(); ?>
            </aside>
            <main class="aptaxi-loop-main aptaxi-layout-column">
                <div class="aptaxi-loop-main-content">
                <?php AptaxiBreadcrumbs(' / '); ?>
                    <div class="aptaxi-btn-archive-content-wrapper">
                        <?php
                            	$Path = $_SERVER['REQUEST_URI'];
                                $current_url = 'http://taxi.planer-studio.ru'.$Path;
                        ?>
                        <a href="<?php echo get_category_link( 12 ); ?>" data-name="<?php echo get_cat_name( 12 ); ?>"
                         class="aptaxi-category-btn btn-cat-12 <?php if ($current_url == 'http://taxi.planer-studio.ru/category/yandex-taxi/' OR $current_url == 'http://taxi.planer-studio.ru/?cat=13') {
                          echo ' aptaxi-cat-active';} ?>">
                            <?php echo get_cat_name( 12 ); ?>
                        </a>
                        <a href="<?php echo get_category_link( 14 ); ?>" data-name="<?php echo get_cat_name( 14 ); ?>" 
                        class="aptaxi-category-btn btn-cat-14 <?php if ($current_url == 'http://taxi.planer-studio.ru/category/city-mobil/' OR $current_url == 'http://taxi.planer-studio.ru/?cat=15') {
                            echo 'aptaxi-cat-active'; 
                        } ?>">
                            <?php echo get_cat_name( 14 ); ?>
                        </a>
                    </div>
                    <div class="aptaxi-loop-archive-post aptaxi-post-content">
                        <div class="aptaxi-title-page-wrapper">
                            <h3 class="aptaxi-title-page">Новости</h3>
                        </div>
                        <div class="aptaxi-loop-categories aptaxi-categories-content aptaxi-layout-grid">
                            <?php
                                    if(have_posts()):
                                    while (have_posts()): the_post();
                                        require TEMPLATEPATH . '/templates/category/post.php';
                                    endwhile; endif; wp_reset_postdata();
                                    aptaxi_pagination();
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>