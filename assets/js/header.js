$(function() {
  function changeHeader(){
    var main_header = $('#main_header');
    var top_header = $('#top-header');
    var header_section = $('.header-section');
    var lastScrollTop = 0, delta = 5;

    $(window).scroll(function(e) {
      if ($(window).scrollTop() > 5){
        main_header.addClass('scrolled');
        top_header.addClass('scrolled');
      } else {
        main_header.removeClass('scrolled');
        top_header.removeClass('scrolled');
      }

      var nowScrollTop = $(this).scrollTop();
      if(Math.abs(lastScrollTop - nowScrollTop) >= delta) {
        if (nowScrollTop < lastScrollTop){
          header_section.removeClass('scrolled');
        } else {
          if ($(window).scrollTop() > 300){
            header_section.addClass('scrolled');
          } else {
            header_section.removeClass('scrolled');
          }
        }
      }
      lastScrollTop = $(this).scrollTop();
    });
  }
  changeHeader();

  $('.mobile-menu-toggle').on('click', function() {
    if($('.mobile-menu-toggle').hasClass('menu-oppend')) {
      $('.mobile-menu-toggle').removeClass('menu-oppend');
      $('.mobile-menu').removeClass('menu-oppend');
      $('body').removeClass('scroll-disabled');
    } else {
      $('.mobile-menu-toggle').addClass('menu-oppend');
      $('.mobile-menu').addClass('menu-oppend');
      $('body').addClass('scroll-disabled');
    }
  });

  $('#main_header .nav-item').on('mouseenter', function() {
    $('#main_header .nav-item').removeClass('show');
    $('#main_header .nav-item').removeClass('mouse-leave');
    $(this).addClass('show');
  });

  $('#main_header .nav-item').on('mouseleave', function() {
    $(this).addClass('mouse-leave');
    let _this = this;
    setTimeout(function() {
      if($(_this).hasClass('mouse-leave')) {
        $(_this).removeClass('show');
        $(_this).removeClass('mouse-leave');
      }
    }, 100);
  });
});
