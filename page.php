
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
                    <!-- <div class="aptaxi-btn-page-content-wrapper">
                        <button></button>
                        <button></button>
                    </div> -->
                    <div class="aptaxi-loop-page-post aptaxi-post-content">
                        <div class="aptaxi-title-page-wrapper">
                            <h3 class="aptaxi-title-page">Мы предлагаем услуги:</h3>
                        </div>
                        <div class="aptaxi-page-loop-post-content loop-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="aptaxi-page-forms-about-us">
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
                        <div class="aptaxi-page-form-autoregistration">
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