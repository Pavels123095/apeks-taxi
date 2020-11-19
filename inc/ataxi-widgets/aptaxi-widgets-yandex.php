<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


class AptaxiWidgetYandex extends WP_Widget {
			// Запускаем родительский класс
		function __construct() {
			parent::__construct(
				'widget_yandex_taxi', // ID виджета, если не указать (оставить ''), то ID будет равен названию класса в нижнем регистре: my_widget
				'Виджет формы яндекс.такси',
				array('description' => 'Виджет формы заявки для яндекс.такси')
			);
	
			// стили скрипты виджета, только если он активен
			if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
				//add_action('wp_enqueue_scripts', array( $this, 'aptaxi_widget_yandex_scripts' ));
				add_action('wp_head', array( $this, 'aptaxi_widget_yandex_style' ) );
			}
		}


	/**
	 * Вывод виджета во Фронт-энде
	 *
	 * @param array $args     аргументы виджета.
	 * @param array $instance сохраненные данные из настроек
	 */
	function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$widget_text = $instance['text'];

		echo $args['before_widget'];

			echo '<div class="aptaxi-form-widget-yandex-wrapper">';
            echo '<form class="aptaxi-form-widget-yandex aptaxi-widgets-form">';
                echo '<img src="'.get_template_directory_uri().'/assets/img/mainslide1.png" class="aptaxi-form-widget-img" alt="'.$title.'" >';
				echo '<label class="aptaxi-widget-form-label">Оставьте заявку на подключение к</label>';
				echo '<legend>'.$title.'</legend>';
				echo '<input id="aptaxi_values" type="hidden" name="taxi_value" value="Яндекс.Такси">';
				echo '<a href="javascript:void(0);" onclick="" class="aptaxi-widget-yandex-btn aptaxi-layout-btn">Отправить</a>';
			echo '</form></div>';

		echo $args['after_widget'];
	}

	/**
	 * Админ-часть виджета
	 *
	 * @param array $instance сохраненные данные из настроек
	 */
	function form( $instance ) {
		$title = @ $instance['title'] ?: 'Заголовок по умолчанию';
		$widget_text = @ $instance['text'] ?: ' ';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label style="width: 100%;" for="<?php echo $this->get_field_id('text'); ?>" ><?php _e('Текст формы:');?></label>
			<textarea style="width: 100%;" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" value="<?php esc_attr($widget_text); ?>"></textarea>
		</p>
		<?php 
	}

	/**
	 * Сохранение настроек виджета. Здесь данные должны быть очищены и возвращены для сохранения их в базу данных.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance новые настройки
	 * @param array $old_instance предыдущие настройки
	 *
	 * @return array данные которые будут сохранены
	 */
	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';

		return $instance;
	}

		// скрипт виджета
		// function aptaxi_widget_yandex_scripts() {
		// 	// фильтр чтобы можно было отключить скрипты
		// 	if( ! apply_filters( 'show_aptaxi_widget_yandex_scripts', true, $this->id_base ) )
		// 		return;
	
		// 	$theme_url = get_stylesheet_directory_uri();
	
		// 	wp_enqueue_script('aptaxi_widget_yandex_scripts', $theme_url .'/aptaxi_widget_yandex_scripts.js' );
		// }
	
		// стили виджета
		function aptaxi_widget_yandex_style() {
			// фильтр чтобы можно было отключить стили
			if( ! apply_filters( 'show_aptaxi_widget_yandex_scripts', true, $this->id_base ) )
				return;
			?>
			<style type="text/css">
				.aptaxi-form-widget-yandex-wrapper {
					width: 100%;
                    position: relative;
                    height: auto;
                    padding-top: 130px;
				}
				.aptaxi-form-widget-yandex-wrapper .aptaxi-form-widget-yandex img {
					position: absolute;
					width: 100%;
					height: 225px;
					z-index: 999;
                    top: -115px;
                    margin: 0 auto;
                    left: -2%;
				}
				.aptaxi-form-widget-yandex-wrapper .aptaxi-form-widget-yandex {
					border: 1px solid #777;
					margin: 0 auto;
					border-radius: 10%;
					background: #000;
                    bottom: 0;
					position: relative;
					z-index: 99;
					width: 100%;
					height: auto;
					padding: 10px;
                    padding-top: 120px;
					text-align: center;
				}
				.aptaxi-form-widget-yandex-wrapper .aptaxi-form-widget-yandex .aptaxi-widget-form-label {
					font-size: 18px;
					font-family: "Segoe UI";
					font-weight: 500;
					line-height: 18px;
					color: #999999;
				}
				.aptaxi-form-widget-yandex-wrapper .aptaxi-form-widget-yandex legend {
					font-size: 30px;
					font-family: "Segoe UI Bold";
					color: #ffd135;
				}
				.aptaxi-form-widget-yandex-wrapper .aptaxi-form-widget-yandex .aptaxi-widget-yandex-btn {
					border: none;
					display: inline-block;
                    padding: 15px 50px;
					font-size: 15px;
                    background-color: #ffd135;
                    text-transform: uppercase;
					color: #000;
					margin-top: 10px;
				}
				.aptaxi-form-widget-yandex-wrapper .aptaxi-form-widget-yandex .aptaxi-widget-yandex-btn:hover {
					background-color: #fff;
                }
                .aptaxi-form-widget-yandex-wrapper {
                    max-width: 273px;
                }
                @media only screen and (max-width:480px) {
                    .aptaxi-form-widget-yandex-wrapper {
                        margin: 0 auto;
                    }
                }
                @media (min-width: 769px) and (max-width: 991px) {
                    .aptaxi-form-widget-yandex-wrapper {
                        width: 45%;
                    }
                }
			</style>
			<?php
		}
}

// регистрация Foo_Widget в WordPress
function register_aptaxi_widget() {
	register_widget( 'AptaxiWidgetYandex' );
}
add_action( 'widgets_init', 'register_aptaxi_widget' );