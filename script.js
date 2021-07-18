const swiper = new Swiper('.swiper-container', {
  // Optional parameters
    loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-user',
    prevEl: '.swiper-button-prev-user',
  },
});
$(document).ready(function (){
      $('.button-open').click(function(){
        $('.popup-form').show();
        $('.overlay').show();
        centerPosition($('.popup-form'));
      });

      //$('.form-close').click(function(){
       // $('.popup-form').hide();
      //  $('.overlay').hide();
      //
      //$('.overlay').click(function(){
      //  $('.popup-form').hide();
      //  $('.overlay').hide();
      // });

      $('body').on('click', '.form-close, .overlay', function(){
        $('.popup-form').hide();
        $('.overlay').hide();
      });

      $('.mobile-menu-btn').click(function(){
        $('.nav').show();
        $(this).addClass('menu-open');
        $('.mobile-menu-close').addClass('menu-open');
      });

      $('.mobile-menu-close').click(function(){
        $('.nav').hide();
        $(this).removeClass('menu-open');
        $('.mobile-menu-btn').removeClass('menu-open');
      });


      var $page = $('html, body');
      $('a[href*="#"]').click(function() {
          $page.animate({
              scrollTop: $($.attr(this, 'href')).offset().top
          }, 400);
            if($(document).width() <= 800){
          $('.nav').hide();
          $('.mobile-menu-close, .mobile-menu-btn').removeClass('menu-open');
          }
          return false;
      });

      function centerPosition(object) {
        var top = ($(window).height() - object.height()) / 2;
        if (top < 0) {
          top = 20;
        }
        object.css('top', top + 'px');
        var left = ($(document).width() - object.width()) / 2;
        object.css('left', left + 'px');
      };

      $('.phone1').click(function(){
        $('input[name=price]').val('75000 руб');
      });
      $('.phone2').click(function(){
        $('input[name=price]').val('82000 руб');
      });
      $('.phone3').click(function(){
        $('input[name=price]').val('90000 руб');
      });


      $("#popup-form").submit(function(e){
        e.preventDefault(); //отмена действия по умолчанию
        let str = $(this).serialize();
          $.ajax({
            type: "POST",  // GET  или POST метод запроса
            url: "ajax.php",  // файл куда отправляются данные или путь до сайта
            data: str,         //данные для передачи
               success: function(response) {
                console.log(response);
             if(response == 'ok') {       //   ЕСЛИ ответ от запроса равен слову OK 
                       // в переменную result записываем сообщение об успехе
                       result = '<div class="success">Ваш заказ принят</div>';
            } else {    // ИНАЧЕ  (если ответ от запроса НЕ равен слову OK )
                       // в переменную result записываем то, что пришло в ответе от запроса
             result = response;
             }
              $("#popup-form").after(result);
             }
          });
        
      });

})

AOS.init();