$(function() {
  function initGlobal() {
    $(".slideme").slick({
      dots: true,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  
    $(".slideme-2").slick({
      dots: false,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
    });
    
    $(".btn-scroll-down").click(function() {
      $(document).scrollTop($(document).height());
    });
  
    $('select:not(.ignore)').niceSelect();
    FastClick.attach(document.body);

    $( document ).bind( 'gform_post_render', '.gform_wrapper form', function( event ) {
      setTimeout(() => {
        stopWaitMe('body');
        if($("#gform_confirmation_message_3 .message-popup").length) {
          $("#gform_confirmation_message_3 .message-popup").addClass("in-view");
        }
      }, 500);
    });

    $(document).on('submit', '.gform_wrapper form', function(e) {
      $(this).find('.gform_ajax_spinner').hide();
      startWaiteMe('body');
    });

    $(document).on('click', '.message-popup .btn-popup-close', function(e) {
      $(this).closest('.message-popup').remove();
    });
  }

  function fadeIn(selector, callTime = 100){

    //window and animation items
    var animation_elements = $.find(selector);
    var web_window = $(window);

    //check to see if any animation containers are currently in view
    function check_if_in_view() {
      //get current window information
      var window_height = web_window.height();
      var window_top_position = web_window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      //iterate through elements to see if its in view
      $.each(animation_elements, function() {

        //get the element sinformation
        var element = $(this);
        var element_height = $(element).outerHeight();
        var element_top_position = $(element).offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
          setTimeout(function() {
            element.addClass('in-view');
          }, callTime);
        } else {
          // element.removeClass('in-view');
        }
      });

    }

    //on or scroll, detect elements in view
    $(window).on('scroll resize', function() {
        check_if_in_view()
      })
      //trigger our scroll event on initial load
    $(window).trigger('scroll');
  }

  function fadeCountMe(selector, delay, second) {
    //window and animation items
    var animation_elements = $.find(selector);
    var web_window = $(window);

    //check to see if any animation containers are currently in view
    function check_if_count() {
      //get current window information
      var window_height = web_window.height();
      var window_top_position = web_window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      //iterate through elements to see if its in view
      $.each(animation_elements, function() {

        //get the element sinformation
        var element = $(this);
        var element_height = $(element).outerHeight();
        var element_top_position = $(element).offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
          if(!element.hasClass('counted')) {
            element.find('.countme').countMe(delay, second);
            element.addClass('counted');
          }
        }
      });
    }

    //on or scroll, detect elements in view
    $(window).on('scroll resize', function() {
        check_if_count()
      })
      //trigger our scroll event on initial load
    $(window).trigger('scroll');
  }

  function startWaiteMe(selector) {
    $(selector).waitMe({
      effect : 'bounce',
      text : '',
      bg : 'rgba(255,255,255,0.7)',
      color : '#000',
      maxSize : '',
      waitTime : -1,
      textPos : 'vertical',
      fontSize : '',
      source : '',
      onClose : function() {}
      });
  }

  function stopWaitMe(selector) {
    $(selector).waitMe('hide');
  }

  function initCaseStudies() {
    $('#case_studies .btn-load-more').on('click', function() {
      startWaiteMe('#case_studies .case-studies-gallery');
      let action = $(this).attr('data-action');
      let paged = parseInt($(this).attr('data-paged')) + 1;
      let category_id = $(this).attr('data-category-id');
      let rest_posts_count = parseInt($(this).attr('data-rest-posts-count'));
      let _this = $(this);
  
      $.ajax(ajaxurl, {
          dataType: 'text', // type of response data
          timeout: 5000,     // timeout milliseconds,
          type: 'post',
          data: {
            'action': action,
            'paged': paged,
            'category_id': category_id,
          },
          success: function (data,status,xhr) {   // success callback function
            var row_selector = '#case_studies .case-studies-gallery .case-studies-inner .gallery .row';
            let old_count = $(`${row_selector} > .col`).length;
            let new_count = $(`<div>${data}</div>`).find('.gallery-item').length;
            $(row_selector).append(data);
            for(let i=0; i<new_count; i++) {
              let selector = `${row_selector} > .col:nth-child(${old_count + i + 1}) .fadeInBottom-${i % 4 + 1}`;
              fadeIn(selector);
            }
  
            $(_this).attr('data-paged', paged);
            $(_this).attr('data-rest-posts-count', rest_posts_count - new_count);
  
            if(rest_posts_count - new_count <= 0) {
              $(_this).addClass('d-none');
            }
            stopWaitMe('#case_studies .case-studies-gallery');
          },
          error: function (jqXhr, textStatus, errorMessage) { // error callback 
            console.log(errorMessage);
            stopWaitMe('#case_studies .case-studies-gallery');
          }
      });
    });
  }

  function initBlogHome() {
    function loadBlogs(category_id, paged, callback = null) {
      startWaiteMe('#blog_home #post_gallery');
      let action = $('#blog_home .btn-load-more').attr('data-action');
      $.ajax(ajaxurl, {
        dataType: 'text', // type of response data
        timeout: 5000,     // timeout milliseconds,
        type: 'post',
        data: {
          'action': action,
          'paged': paged,
          'category_id': category_id,
        },
        success: function (data, status, xhr) {   // success callback function
          if(callback !== null) callback();

          let param = data.match(/<param (.*?) \/>/);
          let param_html = param == null ? '' : param[0];
          data = data.replace(/<param (.*?) \/>/, '');
          let total = parseInt($(param_html).attr('total') == undefined ? 0 : $(param_html).attr('total'));
          let posts_per_page = parseInt($(param_html).attr('posts_per_page') == undefined ? 0 : $(param_html).attr('posts_per_page'));

          let row_selector = '#blog_home #post_gallery .post-list';
          let _this = $('#blog_home .btn-load-more');
          $(row_selector).append(data);
          $(_this).attr('data-paged', paged);
          $(_this).attr('data-category-id', category_id);

          if(total <= posts_per_page * paged) {
            $(_this).addClass('d-none');
          } else {
            $(_this).removeClass('d-none');
          }
          stopWaitMe('#blog_home #post_gallery');
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback 
          alert(errorMessage);
          stopWaitMe('#blog_home #post_gallery');
        }
      });
    }

    $('#blog_home .category-list .category-button').on('click', function() {
      let category_id = $(this).attr('data-category-id');
      let paged = 1;
      
      if(category_id == -2) return;

      $('#blog_home .category-list .category-button').removeClass('active');
      $(this).addClass('active');

      loadBlogs(category_id, paged, function() {
        $(`#blog_home #post_gallery .post-list .post-item`).remove();
      });
    });


    $('#blog_home .btn-load-more').on('click', function() {
      let paged = parseInt($(this).attr('data-paged')) + 1;
      let category_id = $(this).attr('data-category-id');
      loadBlogs(category_id, paged);
    });

    $("#blog_home #post_gallery .category-list .category-list-inner.mobile").slick({
      dots: false,
      arrows: false,
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 2,
      variableWidth: true,
    });
  }

  function initVideoPlayer() {
    let videos = $('.video');
    for(let i=0; i<videos.length; i++) {
      let player = $(videos[i]).find(".video-hover-layout");
      let url = $(player).find('.btn-video-play').attr('src');

      $(player).modalVideo({
        youtube:{
          controls:0,
          nocookie: true,
        },
        allowFullScreen:true,
        animationSpeed: 300,
        classNames: {
          modalVideo:'modal-video',
          modalVideoClose:'modal-video-close',
          modalVideoBody:'modal-video-body',
          modalVideoInner:'modal-video-inner',
          modalVideoIframeWrap:'modal-video-movie-wrap',
          modalVideoCloseBtn:'modal-video-close-btn'
        },
        aria: {
          openMessage:'You just openned the modal video',
          dismissBtnMessage:'Close the modal by clicking here'
        },
        url: url,
        allowAutoplay: true,
      });
    }
  }

  function initCROWinners() {
    function loadBlogs(category_id, paged, _page_type, _industry, _metric, callback = null) {
      let action = $('#cro_winners_gallery .btn-load-more').attr('data-action');
      startWaiteMe('#cro_winners #cro_winners_gallery');
      $.ajax(ajaxurl, {
        dataType: 'text', // type of response data
        timeout: 5000,     // timeout milliseconds,
        type: 'post',
        data: {
          'action': action,
          'paged': paged,
          'category_id': category_id,
          '_page_type': _page_type,
          '_industry': _industry,
          '_metric': _metric,
        },
        success: function (data, status, xhr) {   // success callback function
          if(callback !== null) callback();
          current_page_type = _page_type;
          current_industry = _industry;
          current_metric = _metric;

          let param = data.match(/<param (.*?) \/>/);
          let param_html = param == null ? '' : param[0];
          data = data.replace(/<param (.*?) \/>/, '');
          let total = parseInt($(param_html).attr('total') == undefined ? 0 : $(param_html).attr('total'));
          let posts_per_page = parseInt($(param_html).attr('posts_per_page') == undefined ? 0 : $(param_html).attr('posts_per_page'));
          let posts_count = parseInt($(param_html).attr('posts_count') == undefined ? 0 : $(param_html).attr('posts_count'));

          var row_selector = '#cro_winners #cro_winners_gallery .cro-winners-list .row';
          let _this = $('#cro_winners_gallery .btn-load-more');
          $(row_selector).append(data);
          $(_this).attr('data-paged', paged);

          if(total <= posts_per_page * paged) {
            $(_this).addClass('d-none');
          } else {
            $(_this).removeClass('d-none');
          }
          $('#cro_winners #cro_winners_gallery .cro-winners-gallery-inner .page-info span').text(`${posts_per_page * (paged - 1) + posts_count}/${total}`);
          stopWaitMe('#cro_winners #cro_winners_gallery');
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback 
          stopWaitMe('#cro_winners #cro_winners_gallery');
          alert(errorMessage);
        }
      });
    }

    function claerBlogs() {
      $(`#cro_winners #cro_winners_gallery .cro-winners-list .row .col`).remove();
    }

    function menuClose(_target) {
      $(_target).closest('.mobile-land-menu').removeClass('show');
      $('body').removeClass('scroll-disabled');
    }
    
    $('#cro_winners_gallery .btn-load-more').on('click', function() {
      let paged = parseInt($(this).attr('data-paged')) + 1;
      loadBlogs(current_category_id, paged, current_page_type, current_industry, current_metric);
    });

    $('#cro_winners #cro_winners_gallery .filters .filter-btn').on('click', function() {
      let filterItem = $(this).parent();
      let mobileMenu = $(filterItem).find('.mobile-land-menu');
      $(mobileMenu).addClass('show');
      $('body').addClass('scroll-disabled');
    });

    $('#cro_winners #cro_winners_gallery .mobile-land-menu .menu-close img').on('click', function() {
      menuClose(this);
    });

    $('.select-page-type').on('change', function() {
      let page_ype = $(this).val();
      loadBlogs(current_category_id, 1, page_ype, current_industry, current_metric, claerBlogs);
    });

    $('.select-industry').on('change', function() {
      let industry = $(this).val();
      loadBlogs(current_category_id, 1, current_page_type, industry, current_metric, claerBlogs);
    });

    $('.select-metric').on('change', function() {
      let industry = $(this).val();
      loadBlogs(current_category_id, 1, current_page_type, current_industry, industry, claerBlogs);
    });

    $('#cro_winners #cro_winners_gallery .mobile-land-menu .btn-page-type').on('click', function() {
      let page_type = $(this).attr('data-page-type');
      loadBlogs(current_category_id, 1, page_type, current_industry, current_metric, claerBlogs);
      menuClose(this);
      let text = $(this).text() == 'All' ? 'PAGE TYPE' : $(this).text();
      $(this).closest('.filter-item').find('.filter-btn').text(text);
    });

    $('#cro_winners #cro_winners_gallery .mobile-land-menu .btn-industry').on('click', function() {
      let industry = $(this).attr('data-industry');
      loadBlogs(current_category_id, 1, current_page_type, industry, current_metric, claerBlogs);
      menuClose(this);
      let text = $(this).text() == 'All' ? 'INDUSTRY' : $(this).text();
      $(this).closest('.filter-item').find('.filter-btn').text(text);
    });

    $('#cro_winners #cro_winners_gallery .mobile-land-menu .btn-metric').on('click', function() {
      let metric = $(this).attr('data-metric');
      loadBlogs(current_category_id, 1, current_page_type, current_industry, metric, claerBlogs);
      menuClose(this);
      let text = $(this).text() == 'All' ? 'METRIC' : $(this).text();
      $(this).closest('.filter-item').find('.filter-btn').text(text);
    });
  }

  function initNewsletterLanding() {
    $('#conversion_newsletter #share_conversion_tacties .btn-sign-up').on('click', function() {
      $(document).scrollTop($('#newsletter_form').offset().top - $('.header-section').height() - 30);
    });
  }

  function initSlideme3() {
    let slidemes = $(".slideme-3");
    let refreshSlicks = [];

    for(let i=0; i<slidemes.length; i++) {
      let slideme = slidemes[i];
      let itemMaxWidth = $(slideme).attr("slide-max-width");
      let slidesToShow = $(slideme).attr("slide-to-show");
      let dynamicSlidesToShow = 0;
      if(slidesToShow == undefined) {
        let parentWidth = $(slideme).parent().width();
        let showCount = parentWidth / (parseInt(itemMaxWidth) + 15);
        dynamicSlidesToShow = Math.max(1, showCount);
      }

      console.log($(slideme).parent().width());
      var slick = $(slideme).slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: slidesToShow === undefined ? dynamicSlidesToShow : parseFloat(slidesToShow),
        slidesToScroll: 1,
      });

      if(slidesToShow === undefined) {
        slick[0].slick.parentDoc = $(slideme).parent();
        slick[0].slick.itemMaxWidth = itemMaxWidth;
        slick[0].slick.oldWindowWidth = $(window).width();
        refreshSlicks.push(slick[0].slick);
      }
    }

    $(window).on('resize', function(e) {
      for(let i=0; i<refreshSlicks.length; i++) {
        let slick = refreshSlicks[i];
        if(Math.abs(slick.oldWindowWidth - $(window).width()) <= 50) continue;

        let parentWidth = $(slick.parentDoc).width();
        let showCount = parentWidth / (parseInt(slick.itemMaxWidth) + 15);
        slick.options.slidesToShow = Math.max(showCount, 1);
        slick.refresh();
        slick.oldWindowWidth = $(window).width();
      }
    });
  }

  initGlobal();
  initSlideme3();
  fadeIn('.fadeInTop');
  fadeIn('.fadeInBottom');
  fadeIn('.fadeInBottom-1');
  fadeIn('.fadeInBottom-2', 400);
  fadeIn('.fadeInBottom-3', 700);
  fadeIn('.fadeInBottom-4', 1000);
  fadeIn('.fadeInOpacity');
  fadeCountMe('.fadeCount', 1000, 30);
  initCaseStudies();
  initVideoPlayer();
  initBlogHome();
  initCROWinners();
  initNewsletterLanding();
});
