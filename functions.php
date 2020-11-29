<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/* class css loader */
require_once TEMPLATEPATH .'/inc/aptaxi-assets.php';
new ApTaxiAssetsLoad();

/* class Theme options */
require_once TEMPLATEPATH . '/inc/aptaxi-theme-option.php';
new ApTaxiThemeOptions();

function aptaxi_home_loop() {
	require TEMPLATEPATH . '/templates/home-loop/post.php';
}

// the_post_thumbnails is first the content
function aptaxi_minify_thumbnail($post = 0, $default_src = '/assets/img/logo_taxi.png') {

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

/* class sidebars */
require_once TEMPLATEPATH . '/inc/aptaxi-sidebars.php';
new ApTaxiSidebars();


/* class Breadcrumbs */
require_once TEMPLATEPATH . '/inc/aptaxi-breakcrumbs.php';


/* class customizer */
require_once TEMPLATEPATH . '/inc/aptaxi-customizer.php';
new AptaxiCustomizer();

require_once TEMPLATEPATH . '/inc/ataxi-widgets/aptaxi-widgets-yandex.php';
require_once TEMPLATEPATH . '/inc/ataxi-widgets/aptaxi-widget-citymobil.php';
require_once TEMPLATEPATH . '/inc/ataxi-widgets/aptaxi-widget-min-cm.php';
require_once TEMPLATEPATH . '/inc/ataxi-widgets/aptaxi-widget-yandex-mini.php';
// require_once TEMPLATEPATH . '/inc/aptaxi-navbar-class.php';


require_once TEMPLATEPATH .'/inc/aptaxi-form-callback.php';
new AptaxiFormCallback();



function aptaxi_front_page( $query ) {
	if ($query->is_front_page()) {
        $query->set('post_type' , 'page');
        $query->set('posts_per_page', 2);
	}
}
add_action('pre_get_posts', 'aptaxi_front_page');

add_action( 'after_setup_theme','aptaxi_nav_menus');
function aptaxi_nav_menus() {
    register_nav_menu('Main_nav','main_navbar');
}

function get_navbar() {
    require_once TEMPLATEPATH .'/navbar.php';
}


function navbar_callback() { 
	$Path = $_SERVER['REQUEST_URI'];
    $current_url = 'http://taxi.planer-studio.ru'.$Path;
    $home = home_url();
     ?>
    <ul id="aptaxi_main_menu" class="aptaxi-main-menu aptaxi-navbar-content">
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == $home) {echo 'current-menu-item';}?>">
            <a class="aptaxi-menu-link" href="<?php echo esc_html(home_url()); ?>">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/home.png'; ?>" alt="">
                <span>Главная</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=70') {echo 'current-menu-item';}?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=70">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/key.png'; ?>" alt="">
                <span>Аренда Автомобиля</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=72') { echo 'current-menu-item'; }?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=72">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/yan.png'; ?>" alt="">
                <span>Подключение к Яндекс.Такси</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=74') { echo 'current-menu-item'; }?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=74">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/baks.png'; ?>" alt="">
                <span>Выплаты</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=76') { echo 'current-menu-item'; }?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=76">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/referal.png'; ?>" alt="">
                <span>Реферальная программа</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=78') { echo 'current-menu-item'; }?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=78">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/video-play.png'; ?>" alt="">
                <span>Видео Инструкции</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?cat=13') {echo 'current-menu-item';}?>">
            <a class="aptaxi-menu-link" href="<?php echo get_category_link( 13 ); ?>">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/news.png'; ?>" alt="">
                <span>Новости</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=80') { echo 'current-menu-item'; }?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=80">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/info-about.png'; ?>" alt="">
                <span>О нас</span>
            </a>
        </li>
        <li class="aptaxi-menu-item menu-item <?php if ($current_url == 'http://taxi.planer-studio.ru/?page_id=82') { echo 'current-menu-item'; }?>">
            <a class="aptaxi-menu-link" href="http://taxi.planer-studio.ru/?page_id=82">
                <img src="<?php echo get_template_directory_uri() .'/assets/img/navbar-icon/call-contact.png'; ?>" alt="">
                <span>Контакты</span>
            </a>
        </li>
	</ul>
<?php }

add_filter('excerpt_more', function($more) {
	return '.';
});
function new_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_action('wp_ajax_loadposts', 'form_cat_loadposts_callback' );
add_action('wp_ajax_nopriv_loadposts', 'form_cat_loadposts_callback');
function form_cat_loadposts_callback() { 
        if (isset($_POST['btn-cat-yandex']) === TRUE) {
            $cat_names = 'Яндекс.Такси';
        } else if (isset($_POST['btn-cat-citymobil']) === TRUE) {
            $cat_names = 'СитиМобил';
        }
        ?>
        <div class="aptaxi-loop-categories aptaxi-categories-content aptaxi-layout-grid">
            <?php
                $cat_news_args = array(
                    'cat' => $cat_names,
                    'posts_per_page' => 5,
                ); 
                $news_query = new WP_Query($cat_news_args);
                if ($news_query->have_posts()):
                    while ($news_query->have_posts()):
                        require TEMPLATEPATH . '/templates/categpry/post.php';
                    endwhile; endif; wp_reset_postdata();
            ?>
        </div>
            
<?php }

add_filter( 'wp_mail_content_type', function($content_type){
    $content_type = "text/html";
	return $content_type;
});

add_action('wp_ajax_aptaxi_form_views', 'aptaxi_form_views_callback' );
add_action('wp_ajax_nopriv_aptaxi_form_views', 'aptaxi_form_views_callback');
function aptaxi_form_views_callback() {
    // Массив ошибок
    $err_message = array();
        // Проверяем полей имени, если пустое, то пишем сообщение в массив ошибок
        if ( empty( $_POST['aptaxi_fio_worker'] ) ) {
            $err_message['aptaxi_fio_worker'] = 'Пожалуйста, введите ваше имя.';
        } else {
            $fio = trim( $_POST['aptaxi_fio_worker'] );
        }
        if ( empty( $_POST['aptaxi_tel_worker'] ) ) {
            $err_message['aptaxi_tel_worker'] = 'Пожалуйста, введите ваше имя.';
        } else {
            $tel = trim( $_POST['aptaxi_tel_worker'] );
        }

        if (empty($_POST['aptaxi_arenda_worker'])) {
            $arenda = '- Не указано';
        } else {
            if ($_POST['aptaxi_arenda_worker'] == 'give_me_car') {
                $arenda = 'на вашей машине';
            } else if ($_POST['aptaxi_arenda_worker'] == 'work_in_my_car') {
                $arenda = 'на своей машине';
            }
        }

        // Проверяем полей сообщения, если пустое, то пишем сообщение в массив ошибок
        if ( empty( $_POST['aptaxi_city_worker'] )) {
            $err_message['aptaxi_city_worker'] = 'Пожалуйста, введите ваш Город.';
        } else {
            $city_worker = trim( $_POST['aptaxi_city_worker'] );
        }
            
                $city_worker = $_POST['aptaxi_city_worker'];
                $tel = $_POST['aptaxi_tel_worker'];
                $fio = $_POST['aptaxi_fio_worker'];
                // Указываем адресата 
                $to = 'prizrak12309@yandex.ru';
                $subject = "Заявка";
                $body = 'Я , '. $fio.', Хочу устроиться к вам на работу '."<br />";
                $body .= 'Готов работать(машина)  '.$arenda."<br />";
                $body .= 'Мой город: '.$city_worker . "<br />";
                $body .= 'Вот мой номер: '. $tel ."<br />";
                $headers = 'From: '.$fio.' <webmaster@taxi.planer-studio.ru>';
                
                $mail_from = wp_mail( $to, $subject, $body, $headers);
                // Отправляем сообщение об успешной отправке
                $message_success = 'Собщение отправлено. В ближайшее время с вами свяжутся.';
            if ($mail_from === TRUE) {
                echo $message_success;
            } else {
                echo array_shift($err_message);
                wp_die();
            }

    wp_die();
}

add_action('wp_ajax_aptaxi_form_footer', 'aptaxi_form_footer_callback' );
add_action('wp_ajax_nopriv_aptaxi_form_footer', 'aptaxi_form_footer_callback');
function aptaxi_form_footer_callback() {
    // Массив ошибок
	$err_message = array();

    // Проверяем полей имени, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['aptaxi_fio_worker'] ) ) {
		$err_message['aptaxi_fio_worker'] = 'Пожалуйста, введите ваше имя.';
	} else {
		$fio = trim( $_POST['aptaxi_fio_worker'] );
    }
	if ( empty( $_POST['aptaxi_tel_worker'] ) ) {
		$err_message['aptaxi_tel_worker'] = 'Пожалуйста, введите ваш телефон.';
	} else {
		$tel = $_POST['aptaxi_tel_worker'];
    }
    // Проверяем полей емайла, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['aptaxi_mail_worker'] ) ) {
		$err_message['aptaxi_mail_worker'] = 'Пожалуйста, введите адрес вашей электронной почты.';
	} elseif ( ! preg_match( '/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i', $_POST['aptaxi_mail_worker'] ) ) {
		$err_message['aptaxi_mail_worker'] = 'Адрес электронной почты некорректный.';
	} else {
		$email_client = trim( $_POST['aptaxi_mail_worker'] );
    }
                // Указываем адресата 
                $to = 'prizrak12309@yandex.ru';
                $subject = "Заявка на обратный звонок";
                $body = 'Я , '. $fio.', Хочу устроиться к вам на работу '."<br />";
                $body .= 'Мой адрес электронной почты: '.$email_client . "<br />";
                $body .= 'Вот мой номер: '. $tel ."<br />";
                $headers = 'From: '.$fio.' <webmaster@taxi.planer-studio.ru>';
                
                $mail_from = wp_mail( $to, $subject, $body, $headers);
                // Отправляем сообщение об успешной отправке
                $message_success = 'Собщение отправлено. В ближайшее время с вами свяжутся.';
            if ($mail_from === TRUE) {
                echo $message_success;
                wp_die();
            } else {
                echo array_shift($err_message);
                wp_die();
            }

}

function aptaxi_pagination() {
    $args = array(
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
    );
    the_posts_pagination($args);
}

