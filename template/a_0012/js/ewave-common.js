 //                    模板馆专业苹果cms模板下载  www.iqmbg.com                         
 // 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 
$(function () {
  $(".js-search").click(function () {
    $(".header").toggleClass("search-open");
  });
  $('.jheader-search-input').focus(function () {
    $('.hot-list').show();
  });
  if ($('#index-box').length > 0) {
    $('.fixedbar-fixed-bar .type').show();
  }
  $('.fixedbar-anchor-text').removeClass('active');
  $('.fixedbar-anchor-text').each(function () {
    var _id = $(this).data('id');
    if ($(_id).length > 0) {
      var top = $(_id).offset().top - 200;
      if ($(window).scrollTop() > top) {
        $('.fixedbar-anchor-text').removeClass('active');
        $(this).addClass('active');
      }
    }
  });
  $(".skin-switch a").click(function () {
    if (localStorage.theme == 0) {
      localStorage.theme = 1;
    } else {
      localStorage.theme = 0;
    }
    $("html").attr("data-theme", localStorage.theme);
  });
  if ($(window).scrollTop() > 100) {
    $(".fixedbar-fixed-bar .ant-back-top").fadeIn(200);
    $('.header').addClass('bg');
  } else {
    $(".fixedbar-fixed-bar .ant-back-top").fadeOut(200);
    $('.header').removeClass('bg');
  }
  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $(".fixedbar-fixed-bar .ant-back-top").fadeIn(200);
      $('.header').addClass('bg');
    } else {
      $(".fixedbar-fixed-bar .ant-back-top").fadeOut(200);
      $('.header').removeClass('bg');
    }
    $('.fixedbar-anchor-text').each(function () {
      var _id = $(this).data('id');
      if ($(_id).length > 0) {
        var top = $(_id).offset().top - 200;
        if ($(window).scrollTop() > top) {
          $('.fixedbar-anchor-text').removeClass('active');
          $(this).addClass('active');
        }
      }
    });
  });
  $('.fixedbar-anchor-text').click(function () {
    var _id = $(this).data('id');
    if ($(_id).length > 0) {
      var top = $(_id).offset().top - 100;
      $('body,html').animate({
        scrollTop: top
      }, 300);
      return false;
    }
  });
  $(".fixedbar-top-link").click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300);
    return false;
  });
  $(document).on("click", function (e) {
    var target = $(e.target);
    if (target.closest(".js-search,.header").length == 0) { //点击id为parentId之外的地方触发
      $(".header").removeClass("search-open");
      $(".head-placeholder").height($(".head-wrapper").height());
    }
    if (target.closest(".ewave-history-text,.ewave-history-box").length == 0) {
      $(".ewave-history-box").removeClass("active");
    }
    if (target.closest(".jheader-search-input,.hot-list").length == 0) {
      $('.hot-list').hide();
    }
  });
});
 //                    模板馆专业苹果cms模板下载  www.iqmbg.com                         
 // 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 