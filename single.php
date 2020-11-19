<?php
    $id_post = get_the_ID();
    get_header('pages'); ?>
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
                    <div class="aptaxi-loop-single-post aptaxi-post-content">
                        <div class="aptaxi-btn-archive-content-wrapper">
                            <a href="<?php echo get_category_link( 12 ); ?>" data-name="<?php echo get_cat_name( 12 ); ?>"
                            class="aptaxi-category-btn btn-cat-12 <?php 
                            if (in_category( 12, $id_post ) OR in_category( 13, $id_post )) {
                            echo ' aptaxi-cat-active';} else { echo '';} ?>">
                                <?php echo get_cat_name( 12 ); ?>
                            </a>
                            <a href="<?php echo get_category_link( 14 ); ?>" data-name="<?php echo get_cat_name( 14 ); ?>" 
                            class="aptaxi-category-btn btn-cat-14 <?php if (in_category( 14, $id_post ) OR in_category( 15, $id_post )) {
                                echo 'aptaxi-cat-active'; 
                            } else { echo '';} ?>">
                                <?php echo get_cat_name( 14 ); ?>
                            </a>
                        </div>
                        <div class="aptaxi-title-page-wrapper">
                            <h3 class="aptaxi-title-page"><?php the_title(); ?></h3>
                        </div>
                        <div class="aptaxi-single-page-content aptaxi-post-id-<?php echo $id_post; ?>">
                            <div class="aptaxi-single-date-publish">
                                <time><?php echo get_the_date('d.m.Y'); ?></time>
                            </div>
                            <div class="aptaxi-single-excerpt aptaxi-single-description">
                                <div class="aptaxi-single-thumbnail">
                                    <img src="<?php echo aptaxi_minify_thumbnail(); ?>" alt="<?php the_title(); ?>">
                                </div>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>