jQuery(document).ready(function ($) {
  var height_way_item__wrapper = 0;
  $('.way-item__wrapper').each(function () {
    if ($(this).height() > height_way_item__wrapper) {
      height_way_item__wrapper = $(this).height();
    }
  });
  $('.way-item__wrapper').height(height_way_item__wrapper);
  $('.programm-slider').slick({
    dots: true,
	adaptiveHeight: true
  });
  $(".accommodation-item__photo-wrapper").slick({
    autoplay: true,
    autoplaySpeed: 6000,
  });
  $('.main-slider').slick({
    dots: true,
	autoplay: true,
	autoplaySpeed: 5500,
  });
  $('.hamburger').click(function() {
    if($(this).hasClass('active')) {
      $(this).removeClass('active');
      // $(this).next().removeClass('active');
      $(this).next().slideUp();
    } else {
      $(this).addClass('active');
      // $(this).next().addClass('active');
      $(this).next().slideDown();
    }
  });
  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $('.popup-modal').click(function(e) {
    e.preventDefault();
    var formid = $(this).data('formid');
    var mailmsg = $(this).data('mailmsg');
	
    var hmsg = $(this).data('winmsg');
    
	if (hmsg == "") hmsg = "Обратный звонок";
	
	$('#order-modal .section-title').html(hmsg);
	
    $('#order-modal .uniSendBtn').attr('data-formid', formid);
    $('#order-modal .uniSendBtn').attr('data-mailmsg', mailmsg);
    $('#order-modal').arcticmodal();
  });

  $('.popup-modal-2').click(function(e) {
    if($(window).width() > 500) {
      e.preventDefault();
      var formid = $(this).data('formid');
      var mailmsg = $(this).data('mailmsg');
    
      var hmsg = $(this).data('winmsg');
      
      if (hmsg == "") hmsg = "Обратный звонок";
      
      $('#order-modal-2 .section-title').html(hmsg);
      
      $('#order-modal-2 .uniSendBtn').attr('data-formid', formid);
      $('#order-modal-2 .uniSendBtn').attr('data-mailmsg', mailmsg);
      $('#order-modal-2').arcticmodal();
    }
  });

  jQuery(".uniSendBtn").click(function(){ 
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = jQuery(this).siblings('input[type=tel]').val();
      var name = jQuery(this).siblings('input[name=name]').val();
      var email = jQuery(this).siblings('input[type=email]').val();
      
      if ((phone == "")||(phone.indexOf("_")>0)) {
        jQuery(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else if (!$(this).next().children('input[type=checkbox]').prop('checked')) {
        $(this).next().children('label').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            msg: message,
            name: name,
            tel: phone,
            email: email
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          jQuery('#order-modal').arcticmodal('close');
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });

  jQuery(".uniSendBtn-2").click(function(){ 
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = jQuery(this).siblings('input[type=tel]').val();
      var name = jQuery(this).siblings('input[name=name]').val();
      var email = jQuery(this).siblings('input[type=email]').val();
      
      if ((phone == "")||(phone.indexOf("_")>0)) {
        jQuery(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else if (!$(this).next().children('input[type=checkbox]').prop('checked')) {
        $(this).next().children('label').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send_2',    
            nonce: allAjax.nonce,
            msg: message,
            name: name,
            tel: phone,
            email: email
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          jQuery('#order-modal-2').arcticmodal('close');
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });
});
