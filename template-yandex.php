<?php
/*
Template Name: Шаблон Яндекс.Такси
*/
?>

<?php get_header('pages'); the_post(); ?>
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
                        <a href="http://taxi.planer-studio.ru/yandex-taxi/" class="aptaxi-category-btn btn-page-yandex <?php if ($current_url == 'http://taxi.planer-studio.ru/yandex-taxi/') {
                          echo ' aptaxi-cat-active';} ?>">
                            <?php echo get_cat_name( 12 ); ?>
                        </a>
                        <a href="http://taxi.planer-studio.ru/citymobil/" class="aptaxi-category-btn btn-page-citymobil <?php if ($current_url == 'http://taxi.planer-studio.ru/citymobil/') {
                            echo 'aptaxi-cat-active'; 
                        } ?>">
                        <?php echo get_cat_name( 14 ); ?>
                        </a>
                    </div>
                    <div class="aptaxi-loop-page-post aptaxi-post-content">
                        <div class="aptaxi-title-page-wrapper">
                            <h3 class="aptaxi-title-page">Мы предлагаем услуги:</h3>
                        </div>
                        <div class="aptaxi-page-loop-post-content loop-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="aptaxi-advantage-yandex-wrapper">
                            <div class="aptaxi-title-page-wrapper">
                                <h3 class="aptaxi-title-page">Преимущества Яндекс.Такси:</h3>
                            </div>
                            <div class="aptaxi-advantage-yandex-content aptaxi-layout-grid">
                                <div class="aptaxi-advantage-yandex-left aptaxi-layout-column">
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                            <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexbaby.png'; ?>" alt="">
                                            <span>
                                                    Новые автомобили с брендингом
                                                    и детским креслом в аренду
                                                    для работы в такси
                                            </span>
                                        </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexdriver.png'; ?>" alt="">
                                            <span>Подключение водителей с личным автомобилем</span>
                                        </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandex5precent.png'; ?>" alt="">
                                            <span>
                                                Комиссия <br> парка 5%
                                            </span>
                                        </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                        <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandex0precent.png'; ?>" alt="">
                                            <span>
                                                    Работа без комиссия парка
                                                    и агрегатора при покупке смены
                                            </span>
                                        </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                            <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/everydaypay.png'; ?>" alt="">
                                            <span>
                                                Ежедневные выплаты,
                                                комиссия 2%
                                            </span>
                                        </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                            <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexpay.png'; ?>" alt="">
                                            <span>
                                                Моментальные выплаты без
                                                комиссии на карты банков
                                                Тинькофф и МТС, на остальные 
                                                карты банков РФ 1,49%, мин. 27,50р.
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="aptaxi-advantage-yandex-right aptaxi-layout-column">
                                    <div class="aptaxi-advantage-page-yandex-item">
                                        <a class="aptaxi-advant-loop-link" href="">
                                            <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/refyandex.png'; ?>" alt="">
                                            <span>
                                                Реферальная программа,
                                                получайте 20% от дохода
                                                за приведенного друга
                                            </span>
                                        </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                            <a class="aptaxi-advant-loop-link" href="">
                                                <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexturbo.png'; ?>" alt="">
                                                <span>
                                                    Заправка с баланса «Яндекс.Про(Таксометр)»
                                                </span>
                                            </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                            <a class="aptaxi-advant-loop-link" href="">
                                                <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexoperator.png'; ?>" alt="">
                                                <span>
                                                    Регистрация водителей
                                                    круглосуточно через колл-центр
                                                </span>
                                            </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                            <a class="aptaxi-advant-loop-link" href="">
                                                <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexapp.png'; ?>" alt="">
                                                <span>
                                                    Авторегистрация водителей
                                                    через приложение
                                                </span>
                                            </a>
                                    </div>
                                    <div class="aptaxi-advantage-page-yandex-item">
                                            <a class="aptaxi-advant-loop-link" href="">
                                                <img src="<?php echo get_template_directory_uri() .'/assets/img/icon/yandex-icon/yandexlicence.png'; ?>" alt="">
                                                <span>
                                                    Оформление разрешений
                                                    (лицензий) такси
                                                </span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aptaxi-yandex-about-us aptaxi-page-forms-about-us">
                            <img class="aptaxi-thumbnail-people" src="<?php echo get_template_directory_uri() . '/assets/img/people-partners.png'; ?>" alt="">
                            <form class="aptaxi-page-form-call-me" method="POST" action="">
                                <div class="aptaxi-page-form-thumbnail">
                                    <img src="<?php echo get_template_directory_uri() .'/assets/img/taxi_width_page_form.png';?>" alt="">
                                </div>
                                <div class="aptaxi-page-form-description">
                                    <legend>Хотите работать с нами?</legend>
                                    <p>
                                        <span>приезжайте к нам по адресу:</span>
                                        <strong>г.Ростов-на-Дону, ул. Доватора, 160/1</strong>
                                    </p>
                                    <p>
                                        <span>или звоните нам по телефону:</span>
                                        <strong><a href="tel:+79281405578">+7 (928)-140-55-78</a></strong>
                                    </p>
                                    <a class="aptaxi_page_call_me" href=""><i class="fas fa-phone-alt"></i> <span>обратный звонок</span></a>
                                </div>
                            </form>
                        </div>
                        <div class="aptaxi-yandex-registration aptaxi-page-form-autoregistration">
                            <div class="aptaxi-form-autoregistration-left-column">
                                <h3>Авторегистрация водителей</h3>
                                <span>
                                    в Яндекс.Такси с личным или
                                    арендованным автомобилем
                                    круглосуточно через приложение
                                </span>
                                <div class="aptaxi-form-link-register-wrapper">
                                    <a class="aptaxi-form-link-regist" href="">
                                        <span><i class="far fa-user-circle"></i></span>
                                        <span class="aptaxi-link-text">Зарегистрироваться</span>
                                    </a>
                                </div>
                            </div>
                            <div class="aptaxi-form-autoregistration-right-column">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/hand_this_phone.png' ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>