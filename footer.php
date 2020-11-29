<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

        <footer class="aptaxi-footer">
            <div class="aptaxi-footer-social-section aptaxi-footer-section aptaxi-layout-section">
                <div class="aptaxi-footer-social-wrapper aptaxi-layout-container">
                    <div class="aptaxi-footer-social-content aptaxi-layout-row">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-vk"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="aptaxi-footer-top-section aptaxi-footer-section aptaxi-layout-section">
                    <div class="aptaxi-footer-top-wrapper aptaxi-layout-container">
                        <div class="aptaxi-footer-top-content aptaxi-layout-row">
                            <div class="aptaxi-footer-top-logo aptaxi-layout-column">
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class="aptaxi-footer-top-description aptaxi-layout-column">
                                <?php bloginfo( 'description' ); ?>
                            </div>
                            <div class="aptaxi-footer-top-widget aptaxi-layout-column">
                                <?php dynamic_sidebar( 'footer_sidebar' ); ?>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="aptaxi-footer-form-section aptaxi-footer-section aptaxi-layout-section">
                <div class="aptaxi-footer-form-wrapper aptaxi-layout-container">
                    <form action="" method="post" class="aptaxi-footer-form-content aptaxi-layout-row">
                        <input type="text" id="aptaxi_footer_fio" name="aptaxi_fio_worker" class="aptaxi-footer-input" placeholder="Ф.И.О" require="required">
                        <input type="text" id="aptaxi_footer_mail" name="aptaxi_mail_worker" class="aptaxi-footer-input" placeholder="E-mail" require="required">
                        <input type="text" id="aptaxi_footer_tel" name="aptaxi_tel_worker" data-mask="+7 (999) 999-99-99" class="aptaxi-footer-input" placeholder="Телефон" require="required">
                        <button type="submit" class="aptaxi-footer-form-button aptaxi-layout-btn">Подать заявку</button>
                    </form>
                </div>
            </div>
            <div class="aptaxi-footer-copyrights-section aptaxi-footer-section aptaxi-layout-section">
                <div class="aptaxi-footer-copyrights-wrapper aptaxi-layout-container">
                    <div class="aptaxi-footer-copyrights-content aptaxi-layout-row">
                        <div class="aptaxi-footer-link-pages aptaxi-layout-column">
                            <a href="">Договор Оферты</a> <span> | </span><a href=""> Политика конфиденциальности</a>
                        </div>
                        <div class="aptaxi-footer-hr aptaxi-layout-column"><hr></div>
                        <div class="aptaxi-footer-copyright-text aptaxi-layout-column">
                            <span><?php echo get_theme_mod('aptaxi_copyright_text'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>