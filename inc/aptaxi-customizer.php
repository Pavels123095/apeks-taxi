<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


class AptaxiCustomizer {
    
    public function __construct()
    {
        add_action( 'customize_register', array( $this, 'custom_control_register' ), 10 );
        add_action('wp_head',array( $this, 'aptaxi_customizer_css'));
		// add_action( 'customize_register', array( $this, 'customizer_register' ), 10 );
    }

    public function custom_control_register($wp_customize) {

        $wp_customize->add_panel(
            'aptaxi-about-us-panel',
            array(
                'title' => 'Настройки Секции "О нас"',
                'priority' => 200,
            )
        );
        $wp_customize->add_section(
            'aptaxi_section_option_about_us',
            array(
                'title' => 'Настройка Текста',
                'panel' => 'aptaxi-about-us-panel'
            )
        );
        $wp_customize->add_setting('aptaxi_text_about_us_first', 
            array(
                'default' => '',
                'transport' => 'refresh',
            )
        );
        $wp_customize->add_control( 
            'aptaxi_text_about_us_first', 
            array(
                'label' => 'Текст в секции о нас первый абзац',
                'section' => 'aptaxi_section_option_about_us',
                'setting' => 'aptaxi_text_about_us',
                'type' => 'textarea'
            )
        );
        $wp_customize->add_setting('aptaxi_text_about_us_second', 
            array(
                'default' => '',
                'transport' => 'refresh',
            )
        );
        $wp_customize->add_control( 
            'aptaxi_text_about_us_second', 
            array(
                'label' => 'Текст в секции о нас второй абзац',
                'section' => 'aptaxi_section_option_about_us',
                'setting' => 'aptaxi_text_about_us',
                'type' => 'textarea'
            )
        );
        $wp_customize->add_setting('aptaxi_text_about_us_three', 
            array(
                'default' => '',
                'transport' => 'refresh',
            )
        );
        $wp_customize->add_control( 
            'aptaxi_text_about_us_three', 
            array(
                'label' => 'Текст в секции о нас третий абзац',
                'section' => 'aptaxi_section_option_about_us',
                'setting' => 'aptaxi_text_about_us',
                'type' => 'textarea'
            )
        );
        $wp_customize->add_setting('aptaxi-font-about-us',
            array(
                'default' => 'Oswald Regular',
                'transport' => 'postMessage',
            )
        );
        $wp_customize->add_control(
            'aptaxi-font-about-us',
            array(
                'label' => 'Шрифт текcта о нас',
                'section' => 'aptaxi_section_option_about_us',
                'setting' => 'aptaxi-font-about-us',
                'description' => 'Выберите шрифт для текста',
                'type' => 'select',
                'choices' => array(
                    'value1' => __('Oswald Regular'),
                    'value2' => __('Oswald SemiBold'),
                    'value3' => __('Oswald Black'),
                    'value4' => __('Segoe UI'),
                )
            )
        );
        $wp_customize->add_setting(
            'aptaxi-font-size_about_us',
            array(
                'default' => '18px',
                'transport' => 'postMessage',
            )
        );
        $wp_customize->add_control(
            'aptaxi-font-size_about_us',
            array(
                'label' => 'Размер Текста',
                'section' => 'aptaxi_section_option_about_us',
                'setting' => 'aptaxi-font-size_about_us',
                'description' => 'Выберите размер шрифта (в пикселях) для текста',
                'type' => 'select',
                'choices' => array(
                    'value1' => __('14px'),
                    'value2' => __('15px'),
                    'value3' => __('16px'),
                    'value4' => __('17px'),
                    'value5' => __('18px'),
                    'value6' => __('19px'),
                    'value7' => __('20px'),
                )
            )
        );

        $wp_customize->add_setting('aptaxi_title_section_font_family',
            array(
                'default' => 'Oswald Regular',
                'transport' => 'postMessage',
            )
        );
        $wp_customize->add_control(
            'aptaxi_title_section_font_family',
            array(
                'label' => 'Шрифт Текста для заголовков секций',
                'section' => 'static_front_page',
                'setting' => 'aptaxi_title_section_font_family',
                'type' => 'select',
                'choices' => array(
                    'value1' => __('Oswald Regular'),
                    'value2' => __('Oswald SemiBold'),
                    'value3' => __('Oswald Black'),
                    'value4' => __('Oswald Bold'),
                    'value5' => __('Segoe UI'),
                )
            )
        );
        $wp_customize->add_setting('aptaxi_title_section_font_size',
            array(
                'default' => '20px',
                'transport' => 'postMessage',
            )
        );
        $wp_customize->add_control(
            'aptaxi_title_section_font_size',
            array(
                'label' => 'Размер Текста для заголовков секций',
                'section' => 'static_front_page',
                'setting' => 'aptaxi_title_section_font_size',
                'description' => 'Выберите размер шрифта (в пикселях) для текста',
                'type' => 'select',
                'choices' => array(
                    'value1' => __('20px'),
                    'value2' => __('21px'),
                    'value3' => __('22px'),
                    'value4' => __('23px'),
                    'value5' => __('24px'),
                    'value6' => ('25px'),
                )
            )
        );
        $wp_customize->add_setting(
            'aptaxi_prefix_section_title',
            array(
                'default' => 'Апекс',
                'transport' => 'postMessage',
            )
        );
        $wp_customize->add_control(
            'aptaxi_prefix_section_title',
            array(
                'label' => 'Текст после заголовка',
                'section' => 'static_front_page',
                'setting' => 'aptaxi_prefix_section_title',
                'description' => 'Напишите слово , которое будет добавляться к концу заголовка секциию',
                'type' => 'text'
            )
        );
        $wp_customize->add_panel('aptaxi_setting_footer',
            array(
                'priority' => 210, 
                'title' => 'Настройки Подвала',
            )
        );
        $wp_customize->add_section(
            'aptaxi_copyrights',
            array(
                'panel' => 'aptaxi_setting_footer',
                'title' => 'Нижняя секция (copyright)'
            )
        );
        $wp_customize->add_setting('aptaxi_copyright_text',
            array(
                'default' => '',
                'transport' => 'refresh'
            )
        );
        $wp_customize->add_control('aptaxi_copyright_text',
            array(
                'label' => 'Текст копирайтинг',
                'section' => 'aptaxi_copyrights',
                'setting' => 'aptaxi_copyright_text',
                'type' => 'textarea'
            )
        );
    }

    /*
    * CSS для хука wp_head()
    */
    function aptaxi_customizer_css() { 
        echo '<style>';
        echo '.aptaxi-website-content .aptaxi-section-title-wrapper .aptaxi-section-title > * {';
            echo 'font-family: ';
           switch (get_theme_mod('aptaxi_title_section_font_family')):
                case 'value1':
                    echo '"Oswald Regular";';
                break;
                case 'value2':
                    echo '"Oswald SemiBold";'; 
                break;
                case 'value3':
                    echo '"Oswald Black" ;';
                break;
                case 'value4':
                    echo '"Oswald Bold";';
                break;
                default:
                    echo '"Oswald Regular";';
                break;
            endswitch;
        echo 'font-size: ';
        switch ( get_theme_mod('aptaxi_title_section_font_size')):
            case 'value1':
                echo '20px;';
            break;
            case 'value2':
                echo '21px;';
            break;
            case 'value3':
                echo '22px;';
            break;
            case 'value4':
                echo '23px;';
            break;
            case 'value5':
                echo '24px;';
            break;
            case 'value6':
                echo '25px;';
            break;
        endswitch;
        echo '}';
        echo ' ';
        echo '.aptaxi-about-us-wrapper .aptaxi-about-us-content .aptaxi-about-us-description p {';
            echo 'font-family: ';
            switch (get_theme_mod('aptaxi-font-about-us')):
                case 'value1':
                    echo '"Oswald Regular";';
                break;
                case 'value2':
                    echo '"Oswald SemiBold";'; 
                break;
                case 'value3':
                    echo '"Oswald Black" ;';
                break;
                case 'value4':
                    echo '"Segoe UI";';
                    echo 'font-weight: 500;';
                break;
                default:
                    echo '"Oswald Regular";';
                break;
            endswitch;
        echo 'font-size: ';
        switch (get_theme_mod('aptaxi-font-size_about_us')):
            case 'value1':
                echo '14px;';
            break;
            case 'value2':
                echo '15px;';
            break;
            case 'value3':
                echo '16px;';
            break;
            case 'value4':
                echo '17px;';
            break;
            case 'value5':
                echo '18px;';
            break;
            case 'value6':
                echo '19px;';
            break;
            case 'value7':
                echo '20px;';
            break;
        endswitch;
        echo '}';
        echo '</style>';
    }

}
