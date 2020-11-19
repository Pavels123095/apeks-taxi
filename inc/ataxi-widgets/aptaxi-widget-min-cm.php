<?php

class AptaxiWidgetCityMobilMinify extends WP_Widget {
    // Запускаем родительский класс
    function __construct() {
        parent::__construct(
            'widget_citymobil_minify_taxi', // ID виджета, если не указать (оставить ''), то ID будет равен названию класса в нижнем регистре: my_widget
            'Виджет мини-формы СитиМобил',
            array('description' => 'Виджет мини-формы заявки для СитиМобил')
        );

        // стили скрипты виджета, только если он активен
        if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
            //add_action('wp_enqueue_scripts', array( $this, 'aptaxi_widget_yandex_scripts' ));
            add_action('wp_head', array( $this, 'aptaxi_widget_citymobil_minify_style' ) );
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

        echo '<div class="aptaxi-form-widget-minify-citymobil-wrapper">';
            echo '<form class="aptaxi-minify-form-citymobil">';
                echo '<label class="aptaxi-widget-form-label">Оставьте заявку на подключение к</label>';
                echo '<legend>'.$title.'</legend>';
                echo '<a href="http://taxi.planer-studio.ru/?page_id=41" class="aptaxi-widget-mini-citymobil-btn aptaxi-layout-btn">Подробнее</a>';
            echo '</form>';
        echo '</div>';

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
		function aptaxi_widget_citymobil_minify_style() {
			// фильтр чтобы можно было отключить стили
			if( ! apply_filters( 'show_aptaxi_widget_citymobil_scripts', true, $this->id_base ) )
				return;
            ?>
            <style type="text/css">
                .aptaxi-form-widget-minify-citymobil-wrapper {
                    width: 100%;
					position: relative;
                }
                .aptaxi-form-widget-minify-citymobil-wrapper  .aptaxi-minify-form-citymobil {
                    border: 1px solid #777;
                    margin: 0 auto;
                    border-radius: 25px;
                    background: #000;
                    width: 100%;
                    height: 145px;
                    padding: 10px;
                    margin-top: 20px;
                    text-align: center;
                }
                .aptaxi-form-widget-minify-citymobil-wrapper  .aptaxi-minify-form-citymobil .aptaxi-widget-form-label {
                    font-size: 18px;
					font-family: "Segoe UI";
					font-weight: 500;
					line-height: 18px;
					color: #999999;
                }
                .aptaxi-form-widget-minify-citymobil-wrapper  .aptaxi-minify-form-citymobil legend {
                    font-size: 30px;
					font-family: "Segoe UI Bold";
					color: #e26703;
                }
				.aptaxi-form-widget-minify-citymobil-wrapper .aptaxi-minify-form-citymobil .aptaxi-widget-mini-citymobil-btn {
					border: none;
                    padding: 15px 50px;
					display: inline-block;
					font-size: 15px;
					font-family: "Segoe UI";
                    font-weight: 500;
                    text-transform: uppercase;
					background-color: #e26703;
					color: #fff;
					margin-top: 10px;
				}
				.aptaxi-form-widget-minify-citymobil-wrapper .aptaxi-minify-form-citymobil .aptaxi-widget-mini-citymobil-btn:hover {
                    background-color: #fff;
                    color: #000;
                }
                .aptaxi-form-widget-minify-citymobil-wrapper {
                    max-width: 273px;
                }
                @media only screen and (max-width:480px) {
                    .aptaxi-form-widget-minify-citymobil-wrapper {
                        margin: 0 auto;
                    }
                }
                @media (min-width: 769px) and (max-width: 991px) {
                    .aptaxi-form-widget-minify-citymobil-wrapper {
                        width: 270px;
                        margin: 0 5px;
                    }
                }
            </style>
            
        <?php }

}
    // регистрация Foo_Widget в WordPress
    function register_aptaxi_widget_min_cm() {
        register_widget( 'AptaxiWidgetCityMobilMinify' );
    }
    add_action( 'widgets_init', 'register_aptaxi_widget_min_cm' );