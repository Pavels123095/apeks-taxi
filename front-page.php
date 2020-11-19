<?php 
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<?php get_header(); ?>
        <div class="aptaxi-website-content">
                <section class="aptaxi-categories-section aptaxi-layout-section">
                        <div class="aptaxi-categories-wrapper aptaxi-layout-container">
                                <div class="aptaxi-categories-content aptaxi-layout-grid">
                                        <?php while (have_posts()): the_post(); ?>
                                        <?php aptaxi_home_loop(); ?>
                                        <?php endwhile; wp_reset_postdata(); ?>
                                </div>
                        </div>
                </section>
                <section class="aptaxi-advantage-section aptaxi-layout-section">
                        <div class="aptaxi-advantage-section-wrapper aptaxi-layout-container">
                                <div class="aptaxi-advantage-section-content aptaxi-layout-row">
                                        <div class="aptaxi-section-title-wrapper aptaxi-layout-column">
                                                <h1 class="aptaxi-section-title">
                                                        <span>Преимущества Автопарка </span> 
                                                        <strong><?php echo get_theme_mod('aptaxi_prefix_section_title'); ?></strong>
                                                </h1>
                                        </div>
                                        <div class="aptaxi-advantage-grid aptaxi-layout-grid aptaxi-layout-column">
                                                <div class="aptaxi-advant-loop aptaxi-advant aptaxi-layout-column">
                                                        <a class="aptaxi-advant-loop-link" href="">
                                                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/baby-kreslo.png'; ?>" alt="">
                                                                <span>
                                                                        Новые автомобили с брендингом
                                                                        и детским креслом в аренду
                                                                        для работы в такси
                                                                </span>
                                                        </a>  
                                                </div>
                                                <div class="aptaxi-advant-loop aptaxi-advant aptaxi-layout-column">
                                                        <a class="aptaxi-advant-loop-link" href="">
                                                                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/driver.png'; ?>" alt="">
                                                                <span>Подключение водителей с личным автомобилем</span>
                                                        </a>  
                                                </div>
                                                <div class="aptaxi-advant-loop aptaxi-advant aptaxi-layout-column">
                                                        <a class="aptaxi-advant-loop-link" href="">
                                                                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/0precent.png'; ?>" alt="">
                                                                <span>
                                                                        Работа без комиссия парка
                                                                        и агрегатора при покупке смены
                                                                </span>
                                                        </a>  
                                                </div>
                                        </div>
                                        <div class="aptaxi-advantage-grid aptaxi-layout-grid aptaxi-layout-column">
                                                <div class="aptaxi-advant-loop aptaxi-advant aptaxi-layout-column">
                                                        <a class="aptaxi-advant-loop-link" href="">
                                                                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/friends.png'; ?>" alt="">
                                                                <span>
                                                                        Реферальная программа,
                                                                        получайте 20% от дохода
                                                                        за приведенного друга
                                                                </span>
                                                        </a>  
                                                </div>
                                                <div class="aptaxi-advant-loop aptaxi-advant aptaxi-layout-column">
                                                        <a class="aptaxi-advant-loop-link" href="">
                                                                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/operator.png'; ?>" alt="">
                                                                <span>
                                                                        Регистрация водителей
                                                                        круглосуточно через колл-центр
                                                                </span>
                                                        </a>  
                                                </div>
                                                <div class="aptaxi-advant-loop aptaxi-advant aptaxi-layout-column">
                                                        <a class="aptaxi-advant-loop-link" href="">
                                                               <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/mobileapp.png'; ?>" alt="">
                                                                <span>
                                                                        Авторегистрация водителей
                                                                        через приложение
                                                                </span>
                                                        </a>  
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>
                <section class="aptaxi-about-us-section aptaxi-layout-section">
                        <div class="aptaxi-about-us-wrapper aptaxi-layout-container">
                                <div class="aptaxi-about-us-content aptaxi-layout-row">
                                        <div class="aptaxi-section-title-wrapper aptaxi-layout-column">
                                                <h1 class="aptaxi-section-title">
                                                        <span>О Автопарке </span> 
                                                        <strong><?php echo get_theme_mod('aptaxi_prefix_section_title'); ?></strong>
                                                </h1>
                                        </div>
                                        <div class="aptaxi-about-us-description aptaxi-layout-column">
                                                <p><?php echo get_theme_mod('aptaxi_text_about_us_first'); ?></p>
                                                <p><?php echo get_theme_mod('aptaxi_text_about_us_second'); ?></p>
                                                <p><?php echo get_theme_mod('aptaxi_text_about_us_three'); ?></p>
                                        </div>
                                </div>
                        </div>
                </section>
        </div>
<?php get_footer(); ?>