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


    jQuery('.aptaxi-modal-btn-success').on('click', function (){
        var data = {
            action: 'aptaxi_form_views',
        };
        jQuery.post(aptaxiData.ajaxurl, data, function (responsive){
            jQuery('.aptaxi-modal-reqired-wrapper #aptaxi-info-message').text(responsive);
            jQuery('.aptaxi-modal-reqired-wrapper').fadeIn();
        });
    });

    jQuery('.aptaxi-footer-form-content').on('submit', function (){
        var data = {
            action: 'aptaxi_form_footer',
        };
        jQuery.post(aptaxiData.ajaxurl, data, function (responsive){
            jQuery('.aptaxi-modal-reqired-wrapper').fadeIn();
            jQuery('.aptaxi-modal-reqired-wrapper #aptaxi-info-message').text(responsive);
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