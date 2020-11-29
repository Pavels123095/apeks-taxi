<?php


class AptaxiFormCallback {
    function __construct()
    {
        add_action('wp_footer', array( $this , 'aptaxi_form_views'), 30);
    }

    function aptaxi_form_views() { ?>
        <div  class="aptaxi-form-modal-wrapper">
            <div class="aptaxi-form-modal-content">
                <div class="aptaxi-form-close"><i class="fa fa-times"></i></div>
                <form id="aptaxi_form_call" class="aptaxi-form-modal-callback" action="" method="post">
                    <legend class="aptaxi-legend-modal">Оставить Заявку</legend>
                    <span>Заполните форму и мы вам перезвоним</span>
                    <div class="aptaxi-form-group">
                        <label for="aptaxi_fio_worker">Ф.И.О</label>
                        <input type="text" id="aptaxi_fio" class="aptaxi-modal-input" name="aptaxi_fio_worker" required="reqiured" >
                    </div>
                    <div class="aptaxi-form-group">
                        <label for="aptaxi_tel_worker">Телефон</label>
                        <input type="text" id="aptaxi_tel" data-mask="+7 (999) 999-99-99" class="aptaxi-modal-input" name="aptaxi_tel_worker" required="reqiured" >
                    </div>
                    <div class="aptaxi-form-group">
                        <label for="aptaxi_city_worker">Город</label>
                        <input type="text" id="aptaxi_city" class="aptaxi-modal-input" name="aptaxi_city_worker" required="reqiured">
                    </div>
                    <div class="aptaxi-form-group-radiobtn aptaxi-form-group">
                        <div class="aptaxi-form-radio-wrapper">
                            <input type="radio" class="aptaxi-modal-radiobtn" value="give_me_car" placeholder="Хочу взять в аренду" id="aptaxi_arenda" name="aptaxi_arenda_worker">
                            <label for="aptaxi_arenda_worker">Хочу взять в аренду</label>
                        </div>
                        <div class="aptaxi-form-radio-wrapper">
                            <input type="radio" class="aptaxi-modal-radiobtn" value="work_in_my_car" placeholder="Буду работать на своей" id="aptaxi_arenda" name="aptaxi_arenda_worker">
                            <label for="aptaxi_my_car_worker">Буду работать на своей</label>
                        </div>
                    </div>
                    <div class="aptaxi-form-check aptaxi-form-group">
                        <input type="checkbox" id="aptaxi_politic" name="aptaxi_politic_konf" class="sptaxi-modal-check-input" required="reqiured">
                        <label for="aptaxi_politic_konf">
                            Я принимаю условия Договора Оферты и даю свое согласие на обработку персональных данных,
                            в соответствии с Федеральным законом №152-ФЗ «О персональных данных», на условиях и для целей,
                            определённых Политикой конфиденциальности.
                        </label>
                    </div>
                    <div class="aptaxi-modal-btn-wrapper">
                        <button type="submit" name="aptaxi-modal-mail" class="aptaxi-modal-btn-success">
                            <i class="fab fa-telegram-plane"></i>
                            <span>Отправить</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="aptaxi-modal-reqired-wrapper">
            <div class="aptaxi-modal-reqired-content">
                <div class="aptaxi-btn-message-close"><i class="fa fa-times"></i></div>
                <span id="aptaxi-info-message"></span>
                <button class="aptaxi-btn-message">Ок</button>
            </div>
        </div>
    
    <?php
    }
}