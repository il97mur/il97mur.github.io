window.onload = function() {
  
  
    // SLIDE

  $(function() {
    $("#carousel_Limary").carousel({
      interval: 10000,
      keyboard: false,
      pause: "hover",
      ride: "carousel",
      wrap: false
    });
  });
    
  // BUTTON TOP OF THE PAGE

  $(function() {
    // при нажатии на кнопку scrollup
    $('.scrollup').click(function() {
      // переместиться в верхнюю часть страницы
      $("html, body").animate({
        scrollTop:0
      },1000);
    })
  })
  // при прокрутке окна (window)
  $(window).scroll(function() {
    // если пользователь прокрутил страницу более чем на 400px
    if ($(this).scrollTop()>400) {
      // то сделать кнопку scrollup видимой
      $('.scrollup').fadeIn();
    }
    // иначе скрыть кнопку scrollup
    else {
      $('.scrollup').fadeOut();
    }
  });

        
  //WHEN RESIZE BLOCKS (DEBUGGING)
    
  window.onresize = function(event) {
    $(".offer").removeClass("h-100");
    $(".offer").addClass("h-100");
  };
 
};

