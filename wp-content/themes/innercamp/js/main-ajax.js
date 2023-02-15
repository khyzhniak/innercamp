document.addEventListener('DOMContentLoaded', function(){
    jQuery(document).ready( function($){
        let ajax_url = php_vars.ajax_url;
        let nonce = php_vars.nonce;
        let idpages = php_vars.idpages;
      
      
        console.log('13');
      
       $("[name=apply_coupon]").click(function() {

            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea');
            var send_btn = btn.closest('form').find('[name=apply_coupon]');

          
                if (!(error == 1)) {
                    $(send_btn).each(function() {
                        $(this).attr('disabled', true);
                    });
                    $(document).each(function() {
                        var form = $(this).closest('form'),
                            name = form.find('.name').val();
                        if ($(this).val() == '') {
                            $.ajax({
                                type: 'POST',
                                url : ajax_url,
                                data: msg,
                                success: function(response, data) {
                                  
                                  window.location.reload();

//                                    console.log(success);


                                },
                                error: function(xhr, str) {
                                    alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                                }
                            });

                    };
                 });
                return false;
            };

        });
      


      $("[name=add]").click(function() {
            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea'); 
            var send_btn = btn.closest('form').find('[name=add]');

                if (!(error == 1)) {
                    $(send_btn).each(function() {
                        $(this).attr('disabled', true);
                    });
                    $(document).each(function() {
                        var form = $(this).closest('form'),
                            name = form.find('.name').val();
                        if ($(this).val() == '') {
                            $.ajax({
                                type: 'POST',
                                url : ajax_url,
                                data: msg,
                                success: function(response, data) {
      
////                                      $("#box_car_list").html(response);
//                                    $("#box_car_list").html(response.code);
//                                                                       
//                                     $("#box_car_list").addClass('open');
//                                    
////                                     $( "#box_car_list" ).scroll();
//                                    
//                                 
//                                       $('html, body').animate({scrollTop: $( "header.header" ).offset().top}, 1000);
//                                    
//                                         $(".box__menu>ul.list__").load(location.href + " .box__menu>ul.list__");
//                                    
//                                   
//                                $( '.box__menu .box__all .info__ li .price__all>span>bdi' ).text(response.total);
//                                $( '.box__all .info__>li:nth-child(1) .all__' ).text(response.total);
//                                $( '.box__all .info__>li:nth-child(2) .all__' ).text(response.notsale);
//                                  
//                                  
//                                  
//                                    setTimeout(function(){
//                                      $("#box_car_list").addClass("animation");
//                                    }, 3000);
//                                  
//                                     setTimeout(function(){
//                                       $("#box_car_list").removeClass("animation");
//                                      $("#box_car_list").removeClass("open");
//                                 
                                       
//                                    console.log(success);

                                  console.log('success add');
                                    
                                  window.location.reload(function(){
                                       setTimeout(function(){ 
                                      $( '.checkout__menu' ).addClass('open');
                                            }, 2000);
                                  });
                                
                                  
                                  
                                },
                                error: function(xhr, str) {
                                    alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                                }
                            });


                    };
                 });
                return false;
            };

        });     
      
      
        $("[name=delete]").click(function(){
          
          //em.preventDefault();

          let deleteitemmm = $(this).data('delete');;
            
            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea');
            var send_btn = btn.closest('form').find('.qty__actions>.qty__btn');

          
                if (!(error == 1)) {
//                    $(send_btn).each(function() {
//                        $(this).attr('disabled', true);
//                    });
                    $(document).each(function() {
                        var form = $(this).closest('form'),
                            name = form.find('.name').val();
                        if ($(this).val() == '') {
                            $.ajax({
                                type: 'POST',
                                url : ajax_url,
                                data: msg,
                                success: function(response, data) {

//                                $( '.car__button>span' ).text(response.quantity);
//                                $( '.box__menu .box__all .info__ li .price__all>span>bdi' ).text(response.total);
//                                    
//                                $('.list__>#'+ deleteitemmm ).remove();
//                                $( '.car__button>span' ).text(response.quantity);
//                                $( '.box__menu .box__all .info__ li .price__all>span>bdi' ).text(response.total);
//                                $( '.box__all .info__>li:nth-child(1) .all__' ).text(response.total);
//                                $( '.box__all .info__>li:nth-child(2) .all__' ).text(response.notsale);
                              console.log('success delete');
                                    
                                window.location.reload();
                                  $( '.checkout__menu' ).addClass('open');
                                  
                                },
                                error: function(xhr, str) {
                                    alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                                }
                            });

                    };
                 });
                return false;
            };


          });     
      
      

    })
})

