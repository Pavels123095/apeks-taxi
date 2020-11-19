<article class="aptaxi-category-post aptaxi-post-<?php the_ID(); ?> aptaxi-layout-column">
    <div class="aptaxi-category-loop-post-content">
        <h4 class="aptaxi-cat-title"><?php the_title(); ?></h4>
        <time><?php echo get_the_date('d.m.Y'); ?></time>
        <div class="aptaxi-cat-loop-excerpt aptaxi-loop-excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a class="aptaxi-news-btn-read" href="<?php the_permalink(); ?>">Подробнее</a>
    </div>
</article>