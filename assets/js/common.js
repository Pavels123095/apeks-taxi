const newLocal = 'document';
jQuery(newLocal).ready(function ($){
    
    jQuery('.aptaxi-menu-link').click(function (){
        jQuery(this).parent().toggleClass('current-menu-item');
    });

    // jQuery('.btn-cat-12').on('click', function (e){
    //     e.preventDefault();
    //     var data = {
    //         action: 'loadposts_callback',
    //         cat_names: 12
    //     };
    //     jQuery.post(aptaxiData.ajaxurl, data, function (responsive){
    //         jQuery('.aptaxi-categories-content').empty().append(responsive);
    //     });
    // });
    // jQuery('.btn-cat-14').on('click', function (e){
    //     e.preventDefault();
    //     var data = {
    //         action: 'loadposts_callback',
    //         cat_names: 14
    //     };
    //     jQuery.post(aptaxiData.ajaxurl, data, function (responsive){
    //         jQuery('.aptaxi-categories-content').empty().append(responsive);
    //     });
    // });


    jQuery('.aptaxi-widget-citymobil-btn').on('click',function (e){
        e.preventDefault();
        jQuery('.aptaxi-form-modal-wrapper').fadeIn();
    });
    jQuery('.aptaxi-widget-yandex-btn').on('click', function (e){
        e.preventDefault();
        jQuery('.aptaxi-form-modal-wrapper').fadeIn();
    });


    jQuery('.aptaxi-form-close').on('click', function (){
        jQuery('.aptaxi-form-modal-wrapper').fadeOut();
    });

    jQuery('.aptaxi-btn-message-close').on('click', function (){
        jQuery('.aptaxi-modal-reqired-wrapper').fadeOut();
    });

    jQuery('#aptaxi_tel').mask('+7 (999) 999-99-99');
    jQuery('#aptaxi_footer_tel').mask('+7 (999) 999-99-99');


    jQuery('.aptaxi-form-modal-callback').on('submit', function (e){
        e.preventDefault();
        var fio = jQuery('#aptaxi_fio').val();
        var tel = jQuery('#aptaxi_tel').val();
        var city = jQuery('#aptaxi_city').val();
        var arenda = jQuery('input[name="aptaxi_arenda_worker"]:checked').val();
        var data = {
            action: 'aptaxi_form_views',
            aptaxi_fio_worker: fio,
            aptaxi_tel_worker: tel,
            aptaxi_city_worker: city,
            aptaxi_arenda_worker: arenda,
        };
        jQuery.ajax({
            url: aptaxiData.ajaxurl,
            dataType: "post",
        });
        jQuery.post(aptaxiData.ajaxurl, data, function (responsive){
            jQuery('.aptaxi-form-modal-wrapper').fadeOut(500);
            jQuery('.aptaxi-modal-reqired-wrapper #aptaxi-info-message').text(responsive);
            jQuery('.aptaxi-modal-reqired-wrapper').fadeIn(500);
        });
    });

    jQuery('.aptaxi-footer-form-content').on('submit', function (e){
        e.preventDefault();
        var fio_footer = jQuery('#aptaxi_footer_fio').val();
        var tel_footer = jQuery('#aptaxi_footer_tel').val();
        var mail_footer = jQuery('#aptaxi_footer_mail').val();
        var data = {
            action: 'aptaxi_form_footer',
            aptaxi_tel_worker: tel_footer,
            aptaxi_mail_worker: mail_footer,
            aptaxi_fio_worker: fio_footer,
        };
        jQuery.ajax({
            url: aptaxiData.ajaxurl,
            dataType: "post",
        });
        jQuery.post(aptaxiData.ajaxurl, data, function (responsive){
            jQuery('.aptaxi-modal-reqired-wrapper #aptaxi-info-message').text(responsive);
            jQuery('.aptaxi-modal-reqired-wrapper').fadeIn(500);
            jQuery('#aptaxi_footer_fio').val('');
            jQuery('#aptaxi_footer_tel').val('');
            jQuery('#aptaxi_footer_mail').val('');
        });
    });

    jQuery('.aptaxi-form-link-regist').on('click', function (e){
        e.preventDefault();
        jQuery('.aptaxi-form-modal-wrapper').fadeIn();
    });
    jQuery('.aptaxi_page_call_me').on('click', function (e){
        e.preventDefault();
        jQuery('.aptaxi-form-modal-wrapper').fadeIn();
    });
    


    jQuery('.aptaxi-btn-message').on('click', function (){
        jQuery('.aptaxi-modal-reqired-wrapper').fadeOut();
    });
    // jQuery('.aptaxi-layout-btn').on('click', function (){
    //     var data = {
    //         taxi_val: ('input[name="taxi_value"]').val()
    //     }
    //     console.log(data['taxi_val']);
    //     jQuery.post(aptaxiData.ajaxurl, data, function (data){
    //         jQuery('.aptaxi-form-modal-callback').empty().append(data);
    //     });
    // });
    
});