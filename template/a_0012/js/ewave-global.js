 //                    模板馆专业苹果cms模板下载  www.iqmbg.com                         
 // 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 
var eWave = {
  'Copy': {
    'Init': function () {
      $(".ewave-copy-link").each(function () {
        var $that = $(this);
        var links = $that.attr("data-url");
        eWave.Copy.Set(this, links);
      });
      $(".ewave-copy").each(function () {
        var $that = $(this);
        var text = $that.attr("data-text");
        eWave.Copy.Set(this, text);
      });
      $(".ewave-copy-html").each(function () {
        var $that = $(this);
        var html = $that.parent().find(".content").html();
        eWave.Copy.Set(this, html);
      });
    },
    'Set': function (id, content) {
      var clipboard = new ClipboardJS(id, {
        text: function () {
          return content;
        }
      });
      clipboard.on('success', function (e) {
        layer.msg('Đã sao chép thành công');
      });
      clipboard.on("error", function (e) {
        eWave.Layer.Error('Sao chép không thành công, vui lòng sao chép thủ công');
      });
    }
  },
  'Fav': function (u, s) {
    try {
      window.external.addFavorite(u, s);
    } catch (e) {
      try {
        window.sidebar.addPanel(s, u, "");
      } catch (e) {
        eWave.Layer.Error('Lỗi thêm vào mục yêu thích, vui lòng sử dụng bàn phím Ctrl+D để thêm');
      }
    }
  },
  'Ajax': function (url, type, dataType, data, sfun, efun, bfun, cfun) {
    type = type || 'get';
    dataType = dataType || 'json';
    data = data || '';
    efun = efun || '';
    bfun = bfun || '';
    cfun = cfun || '';

    $.ajax({
      url: url,
      type: type,
      dataType: dataType,
      data: data,
      timeout: 5000,
      beforeSend: function () {
        if (bfun) bfun();
      },
      error: function (XHR, textStatus, errorThrown) {
        if (efun) efun(XHR, textStatus, errorThrown);
      },
      success: function (data) {
        sfun(data);
      },
      complete: function (XHR, TS) {
        if (cfun) cfun(XHR, TS);
      }
    })
  },
  'Layer': {
    'Error': function (text, time) {
      time = time || '';
      layer.msg(text, {
        time: time ? time : 1500,
        anim: 6,
      });
    },
    'Img': function (title, src, text) {
      layer.open({
        type: 1,
        title: title,
        skin: 'layui-layer-rim',
        content: '<p><img src="' + src + '" width="240" /></p><p class="text-center">' + text + '</p>'
      });
    },
    'Html': function (title, html, end_fun) {
      end_fun = end_fun || '';
      layer.open({
        type: 1,
        closeBtn: 2,
        title: title,
        skin: 'layui-layer-rim',
        content: html,
        success: function (layero, index) {
          if (end_fun) end_fun();
        }
      });
    },
    'Div': function (id) {
      layer.open({
        type: 1,
        title: false,
        skin: 'layui-layer-rim',
        content: $(id)
      });
    },
    'Notice': function (name, title, html, day, wide, high) {
      var noticed = MAC.Cookie.Get(name);
      var html = $(html).html();
      if (!noticed) {
        layer.open({
          type: 1,
          title: title,
          skin: 'layui-layer-rim',
          content: html,
          area: [wide + 'px', high + 'px'],
          cancel: function () {
            MAC.Cookie.Set(name, 1, day);
          }
        });
      }
    }
  },
  'Image': {
    'Init': function () {
      eWave.Image.Lazyload.Show();
      eWave.Image.Verify.Init();
      eWave.Image.Qrcode.Init();
    },
    'Lazyload': {
      'Show': function () {
        $(".lazyload").lazyload({
          effect: "fadeIn",
          threshold: 200,
          failurelimit: 50,
          skip_invisible: false
        });
      },
      'Box': function ($id) {
        $($id).find(".lazyload").lazyload({
          effect: "fadeIn",
          threshold: 200,
          failurelimit: 50,
          skip_invisible: false
        });
      }
    },
    'Verify': {
      'Init': function () {
        $("body").on('click', '.ewave-verify-img', function () {
          eWave.Image.Verify.Refresh($(this));
        });
      },
      'Refresh': function (obj) {
        obj.attr('src', maccms.path + '/index.php/verify/index.html?r=' + Math.random());
      }
    },
    'Qrcode': {
      'Init': function () {
        $('.ewave-qrcode').each(function () {
          var $that = $(this);
          $that.qrcode({
            text: $that.attr("data-url") || location.href, //设置二维码内容，必须  
            render: "canvas", //设置渲染方式 （有两种方式 table和canvas，默认是canvas）   
            width: $that.attr("data-width") || 120, //设置宽度    
            height: $that.attr("data-height") || 120, //设置高度    
            typeNumber: -1, //计算模式    
            correctLevel: 0, //纠错等级    
            background: "#ffffff", //背景颜色    
            foreground: "#000000" //前景颜色   
          });
        });
      }
    },
  },
  'Swiper': {
    'Init': function () {
      if ($('.ewave-swiper').length == 0) {
        return false;
      }
      if ($('.ewave-swiper-nav').length) {
        var navSwiper = new Array();
        $('.ewave-swiper-nav').each(function (index) {
          var $that = $(this);
          var $index = index;
          if ($that.find(".swiper-slide").length) {
            navSwiper.push = new Swiper($that.get(0), {
              freeMode: true,
              slidesPerView: 'auto',
              roundLengths: true,
              lazy: {
                loadPrevNext: true,
                loadPrevNextAmount: 8,
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              on: {
                'init': function () {
                  if (this.$el.find(".active").length) {
                    this.slideTo(this.$el.find(".active").index() - 2);
                  }
                },
                'slideChangeTransitionEnd': function () {
                  if (this.$el.find(".active").length) {
                    this.translateTo(this.translate - $(this.slides).eq(this.$el.find(".active").index() - 2).outerWidth(true) / 2, 300, this.off('slideChangeTransitionEnd'), true);
                  }
                }
              }
            });
          }
        });
      }
      if ($('.ewave-swiper-image').length) {
        var imageSwiper = new Array();
        $('.ewave-swiper-image').each(function () {
          var $that = $(this);
          if ($that.find(".swiper-slide").length) {
            imageSwiper.push = new Swiper($that.get(0), {
              initialSlide: $that.find(".active").index(),
              lazy: {
                elementClass: $that.attr("data-lazy-class") || 'swiper-lazy',
                loadPrevNext: true,
                loadPrevNextAmount: 8,
              },
              loop: $that.attr("data-loop") == 'false' ? false : true,
              centeredSlides: $that.attr("data-center") == 'false' ? false : true,
              centeredSlidesBounds: true,
              autoplay: {
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
              },
              effect: $that.attr("data-effect") || 'slide',
              fadeEffect: {
                crossFade: true,
              },
              slidesPerView: 'auto',
              pagination: {
                el: $that.attr("data-pagination") || '.swiper-pagination',
                clickable: true,
                bulletClass: $that.attr("data-pagination-class") || 'swiper-pagination-bullet',
                bulletActiveClass: $that.attr("data-pagination-active-class") || 'swiper-pagination-bullet-active',
                renderBullet: function (index, className) {
                  if ($that.find(".swiper-pagination-html")) {
                    return '<span class="' + className + '">' + $(this.slides).eq(index).find(".swiper-pagination-html").html() + '</span>';
                  }
                },
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          }
        });
      }
    }
  },
  'Star': {
    'Static': 0, //判断页面是否为静态
    'Obj': '.ewave-star',
    'Init': function () {
      if ($(eWave.Star.Obj).length == 0) {
        return;
      }
      if (eWave.Star.Static == 0) {
        eWave.Star.View();
      } else {
        eWave.Star.Get();
      }
    },
    'Get': function () {
      MAC.Ajax(maccms.path + '/index.php/ajax/score?mid=' + $(eWave.Star.Obj).attr('data-mid') + '&id=' + $(eWave.Star.Obj).attr('data-id'), 'get', 'json', '', function (e) {
        $(eWave.Star.Obj).attr({
          'score': e.data.score,
          'data-star': Math.ceil(e.data.score / 2),
          'data-score-num': e.data.score_num
        });
        $(".ewave-star-num").text(e.data.score);
        $(".ewave-star-count").text(e.data.score_num);
        eWave.Star.View();
      });
    },
    'View': function () {
      $(eWave.Star.Obj).raty({
        starType: 'li',
        number: 5,
        numberMax: 5,
        space: false,
        score: function () {
          $(".ewave-star-num").text($(eWave.Star.Obj).attr('score'));
          return $(eWave.Star.Obj).attr('data-star');
        },
        hints: ['Rất tệ', 'Tệ quá', 'Tạm được', 'Hay', 'Tuyệt vời'],
        starOff: 'ewave-star-item fa fa-star-o',
        starOn: 'ewave-star-item fa fa-star',
        target: $(".ewave-star-text"),
        targetKeep: $(eWave.Star.Obj).attr('data-score-num') > 0 ? true : false,
        targetText: 'Chưa có',
        click: function (score, evt) {
          MAC.Ajax(maccms.path + '/index.php/ajax/score?mid=' + $(eWave.Star.Obj).attr('data-mid') + '&id=' + $(eWave.Star.Obj).attr('data-id') + '&score=' + (score * 2), 'get', 'json', '', function (r) {
            if (r.code == 1) {
              $(eWave.Star.Obj).attr({
                'score': r.data.score,
                'data-star': Math.ceil(r.data.score / 2),
                'data-score-num': r.data.score_num
              });
              $(".ewave-star-num").text(r.data.score);
              $(".ewave-star-count").text(r.data.score_num);
              $(eWave.Star.Obj).raty('set', {
                'score': Math.ceil(r.data.score / 2),
              });
              layer.msg('Đánh giá thành công');
            } else {
              $(eWave.Star.Obj).raty('score', $(eWave.Star.Obj).attr('data-star'));
              layer.msg(r.msg);
            }
          }, function () {
            $(eWave.Star.Obj).raty('score', $(eWave.Star.Obj).attr('data-star'));
            layer.msg('Mạng bất thường');
          });
        }
      });
    }
  },
  'Digg': {
    'Init': function () {
      $('body').on('click', '.ewave-digg,.ewave-digg-link', function (e) {
        var $that = $(this);
        if ($that.attr("data-id")) {
          MAC.Ajax(maccms.path + '/index.php/ajax/digg.html?mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&type=' + $that.attr("data-type"), 'get', 'json', '', function (r) {
            if (r.code == 1) {
              if ($that.attr("data-type") == 'up') {
                $that.find('.ewave-digg-num').html(r.data.up);
              } else {
                $that.find('.ewave-digg-num').html(r.data.down);
              }
            } else {
              eWave.Layer.Error(r.msg);
            }
          }, function () {
            eWave.Layer.Error('Lỗi mạng, vui lòng thử lại sau');
          });
        }
      });
    }
  },
  'Player': {
    'Offset': 0,
    'Init': function () {
      if ($(".ewave-player").length == 0) {
        return false;
      }
      if ($(".ewave-player-fixed").length) {
        eWave.Player.Offset = $(".ewave-player-fixed").offset().top + $(".ewave-player-fixed").height();
        eWave.Player.Fixed();
        $(window).resize(function () {
          eWave.Player.Offset = $(".ewave-player-fixed").offset().top + $(".ewave-player-fixed").height();
          eWave.Player.Fixed();
        });
        $(window).scroll(eWave.Player.Fixed);
      }
      if ($(".ewave-player-full").length) {
        eWave.Player.Full();
      }
    },
    'Fixed': function () {
      if ($(window).scrollTop() >= eWave.Player.Offset) {
        $(".ewave-player-fixed").addClass("active");
      } else {
        $(".ewave-player-fixed").removeClass("active");
      }
      $('body').on('click', '.ewave-player-fixed-close', function () {
        $(".ewave-player-fixed").removeClass("active ewave-player-fixed");
      });
    },
    'Full': function () {
      $('.ewave-player-full-toggle').click(function () {
        $('.ewave-player-full').toggleClass("active");
        eWave.Player.Offset = $(".ewave-player-fixed").offset().top + $(".ewave-player-fixed").height();
      });
    }
  },
  'Xunlei': {
    'Init': function () {
      if ($(".ewave-downlist-tools").length) {
        $(".ewave-downlist-tools .ewave-downlist-copyall").click(function (e) {
          e.preventDefault();
          if (MAC.CheckBox.Count($(this).attr("data-target")) == 0) {
            eWave.Layer.Error("Vui lòng chọn ít nhất một dữ liệu");
            return false;
          }
          var copylist = new Array;
          $(".ewave-downlist-checkbox[name='" + $(this).attr("data-target") + "']").each(function () {
            if (this.checked) {
              copylist.push(this.value);
            }
          });
          eWave.Copy.Set(".ewave-downlist-copyall", copylist.join('\n\r'));
        });
      }
      if ($(".ewave-xunlei-item").length) {
        eWave.Ajax('//open.thunderurl.com/thunder-link.js', 'get', 'script', '', function () {
          $(".ewave-downlist-btns .ewave-downlist-download").click(function () {
            thunderLink.newTask({
              tasks: [{
                url: $(this).attr("data-url")
              }]
            });
          });
          $(".ewave-downlist-tools .ewave-downlist-download").click(function () {
            if (MAC.CheckBox.Count($(this).attr("data-target")) == 0) {
              eWave.Layer.Error("Vui lòng chọn ít nhất một dữ liệu");
              return false;
            }
            var downlist = new Array;
            $(".ewave-downlist-checkbox[name='" + $(this).attr("data-target") + "']").each(function () {
              if (this.checked) {
                downlist.push('{url:"' + this.value + '"}');
              }
            });
            var downlist_str = '[' + downlist.join(',') + ']'
            thunderLink.newTask({
              tasks: eval(downlist_str)
            });
          });
        }, function () {
          console.log('Lỗi tải thành phần Thunder');
        });
        $(".ewave-downlist-url input").click(function () {
          $(this).select();
        });
      }
    }
  },
  'CountDown': {
    'Init': function () {
      if ($(".ewave-countdown").length == 0) {
        return false;
      }
      $(".ewave-countdown").each(function () {
        var $that = $(this);
        eWave.CountDown.Jump($that);
      });
    },
    'Jump': function (obj) {
      var $that = obj;
      var countdown = $that.attr('data-time') ? $that.attr('data-time') : $that.text();
      eWave.CountDown.Run($that, countdown, function () {
        if ($that.attr("data-time")) {
          $that.attr("data-time", countdown--);
        }
        $that.text(countdown--);
        eWave.Check.Jump($that);
      }, function () {
        if ($that.attr("data-time")) {
          $that.attr("data-time", countdown--);
        }
        $that.text(countdown--);
      });
    },
    'Run': function (obj, time, end_fun, loop_fun) {
      end_fun = end_fun || '';
      loop_fun = loop_fun || '';
      if (time <= 0) {
        if (end_fun) end_fun();
        return true;
      } else {
        if (loop_fun) loop_fun();
      }
      time--;
      setTimeout(function () {
        eWave.CountDown.Run(obj, time, end_fun, loop_fun);
      }, 1000);
    }
  },
  'Check': {
    'Form': function (obj, callback) {
      var $that = obj;
      var form_config = {};
      form_config.action = $that.attr('data-action') || $that.attr('action');
      if ($that.parents("form").length && (form_config.action == '' || form_config.action == undefined)) {
        form_config.action = $that.parents("form").eq(0).attr('data-action') || $that.parents("form").eq(0).attr('action');
      }
      if (form_config.action == '' || form_config.action == undefined) {
        eWave.Layer.Error('Biểu mẫu không cấu hình các mục hành động');
        return false;
      }
      form_config.method = $that.attr('data-method') || $that.attr('method') || 'post';
      form_config.type = $that.attr('data-type') || 'json';
      if ($that.hasClass("ewave-form")) {
        var empty_input = 0;
        $that.find("input,textarea,select").each(function () {
          if ($(this).val() == '' && !$(this).hasClass("empty-allowed")) {
            empty_input++;
            if ($(this).parents(".form-group").length) {
              $(this).focus().parents(".form-group").addClass("has-error");
            } else {
              $(this).focus().parent().addClass("has-error");
            }
            if ($(this).attr("data-tip")) {
              eWave.Layer.Error($(this).attr("data-tip"));
              return false;
            } else if ($(this).attr("data-label")) {
              eWave.Layer.Error("Vui lòng nhập" + $(this).attr("data-label"));
              return false;
            } else if ($(this).attr("placeholder")) {
              eWave.Layer.Error($(this).attr("placeholder"));
              return false;
            } else {
              eWave.Layer.Error("Vui lòng nhập các trường bắt buộc" + $(this).attr("name"));
              return false;
            }
          }
        });
        if (empty_input > 0) return false;
      }
      if ($that.hasClass("ewave-send-code")) {
        var ac = $that.parents("form").find('input[name="ac"]').val();
        var to = $that.parents("form").find('.ewave-to').val();
        if (ac == 'email') {
          var pattern = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
          var ex = pattern.test(to);
          if (!ex) {
            eWave.Layer.Error('Định dạng email không chính xác');
            return false;
          }
        } else if (ac == 'phone') {
          var pattern = /^[1][0-9]{10}$/;
          var ex = pattern.test(to);
          if (!ex) {
            eWave.Layer.Error('Định dạng số điện thoại không chính xác');
            return false;
          }
        } else {
          eWave.Layer.Error('lỗi tham số');
          return false;
        }
      }
      if ($that.hasClass("ewave-confirm")) {
        if (!$that.attr("data-tip")) {
          eWave.Layer.Error('Mục mẹo dữ liệu của biểu mẫu chưa được định cấu hình');
          return false;
        }
      }
      callback(form_config);
    },
    'Jump': function (obj, data) {
      var $that = obj;
      var r = data || '';
      var refresh;
      if (self != top) {
        refresh = top.location;
      } else {
        refresh = location;
      }
      if (!$that.attr("data-jump")) {
        setTimeout(function () {
          refresh.reload();
        }, 1000);
      } else if ($that.attr("data-jump") == 'refresh') {
        refresh.reload();
      } else if ($that.attr("data-jump") == 'refresh-wait') {
        setTimeout(function () {
          refresh.reload();
        }, 1000);
      } else if ($that.attr("data-jump") == 'function') {
        let jump_func = new Function('return ' + $that.attr("data-function"));
        jump_func();
      } else if ($that.attr("data-jump") == 'stop') {
        return false;
      } else if ($that.attr("data-jump") == 'switch-to-login') {
        $(".ewave-login-switch").click();
      } else if ($that.attr("data-jump") == 'switch-to-reg') {
        $(".ewave-reg-switch").click();
      } else if ($that.attr("data-jump").indexOf('?order_code=') > -1) {
        refresh.href = $that.attr("data-jump") + r.data.order_code;
      } else if ($that.attr("data-jump")) {
        refresh.href = $that.attr("data-jump");
      }
    },
  },
  'Form': {
    'Init': function () {
      $("body").on('input propertychange', '.ewave-form input,.ewave-form textarea,.ewave-form select', function () {
        $(".has-success,.has-warning,.has-error").removeClass("has-success has-warning has-error");
      });
      $("body").on('submit', '.ewave-form', function (event) {
        event.preventDefault();
        eWave.Form.Submit($(this));
      });
      $("body").on('click', '.ewave-send-code', function (event) {
        event.preventDefault();
        eWave.Form.SendCode($(this));
      });
      $("body").on('click', '.ewave-confirm', function (event) {
        event.preventDefault();
        eWave.Form.Confirm($(this));
      });
      $("body").on('click', '.member-delete,.member-delete-one,.member-clear', function () {
        if (!$(this).hasClass("member-delete-one") && parseInt($(this).attr("data-all")) == 0 && MAC.CheckBox.Ids('ids[]') == '') {
          eWave.Layer.Error("Vui lòng chọn ít nhất một dữ liệu");
          return false;
        }
        var mydata = {
          type: $(this).parents("form").eq("0").find("input[name='type']").val(),
          all: parseInt($(this).attr("data-all")),
          ids: $(this).hasClass("member-delete-one") ? $(this).attr("data-id") : MAC.CheckBox.Ids('ids[]'),
        };
        eWave.Form.Confirm($(this), mydata);
      });
    },
    'Submit': function (obj) {
      var $that = obj;
      eWave.Check.Form($that, function (data) {
        eWave.Ajax(data.action, data.method, data.type, $that.serialize(), function (r) {
          layer.closeAll('loading');
          if (r.code == 1) {
            layer.msg(r.msg);
            eWave.Check.Jump($that, r);
          } else {
            eWave.Layer.Error(r.msg);
            eWave.Image.Verify.Refresh($that.find(".ewave-verify-img"));
          }
        }, function (XHR, textStatus, errorThrown) {
          layer.closeAll('loading');
          eWave.Layer.Error('Gửi không thành công, vui lòng thử lại sau');
          console.log(XHR.responseText);
        }, function () {
          layer.load();
          setTimeout(function () {
            layer.closeAll('loading');
          }, 5000);
        });
      });
    },
    'Confirm': function (obj, config) {
      var $that = obj;
      var confirm_data = config || $that.attr("data-data");
      eWave.Check.Form($that, function (data) {
        layer.confirm($that.attr("data-tip"), function () {
          eWave.Ajax(data.action, data.method, data.type, confirm_data, function (r) {
            if (r.code == 1) {
              layer.msg(r.msg);
              eWave.Check.Jump($that, r);
            } else {
              eWave.Layer.Error(r.msg);
            }
          }, function () {
            eWave.Layer.Error('Thao tác không thành công, vui lòng thử lại sau');
          });
        }, function () {

        });
      });
    },
    'SendCode': function (obj) {
      var $that = obj;
      eWave.Check.Form($that, function (data) {
        eWave.Ajax(data.action, data.method, data.type, $that.parents("form").eq(0).serialize(), function (r) {
          layer.closeAll('loading');
          if (r.code == 1) {
            layer.msg(r.msg);
            var countdown = 60;
            eWave.CountDown.Run($that, countdown, function () {
              $that.val("Lấy mã xác minh").removeAttr("disabled");
            }, function () {
              $that.prop("disabled", true).val("Gửi lại(" + countdown + ")");
              countdown--;
            });
          } else {
            eWave.Layer.Error(r.msg);
          }
        }, function (r) {
          layer.closeAll('loading');
          eWave.Layer.Error('Gửi không thành công, vui lòng thử lại sau.');
        }, function () {
          layer.load();
          setTimeout(function () {
            layer.closeAll('loading');
          }, 5000);
        });
      });
    },
  },
  'Gbook': {
    'Login': 0,
    'Init': function () {
      if ($(".ewave-gbook-remaining").length) {
        $('body').on('keyup', '.ewave-gbook-content', function (e) {
          MAC.Remaining($(this), 200, '.ewave-gbook-remaining')
        });
      }
      $('body').on('focus', '.ewave-gbook-content', function (e) {
        if (eWave.Gbook.Login == 1 && eWave.User.IsLogin != 1) {
          $(".ewave-gbook-content").blur();
          eWave.User.Login();
        }
      });
      $('body').on('click', '.ewave-gbook-report', function () {
        if ($(this).attr("data-id")) {
          if (eWave.Gbook.Login == 1 && eWave.User.IsLogin != 1) {
            $(".ewave-gbook-content").blur();
            eWave.User.Login();
          } else {
            eWave.Gbook.Report('Số seri【' + $(this).attr("data-id") + '】  Tên【' + $(this).attr("data-name") + '】  Địa chỉ trang' + location.href + '  Phim này không thể xem được. Vui lòng kiểm tra để khắc phục.', $(this).attr("data-id"));
          }
        }
      });
    },
    'Report': function (name, id) {
      MAC.Ajax(maccms.path + '/index.php/gbook/report.html?id=' + id + '&name=' + encodeURIComponent(name), 'post', 'json', '', function (r) {
        eWave.Layer.Html('Lỗi dữ liệu', r, function () {
          $(".ewave-gbook-content").focus();
          eWave.Image.Verify.Refresh($(".ewave-verify-img-report"));
        });
      }, function (XHR, textStatus, errorThrown) {
        eWave.Layer.Html('Lỗi dữ liệu', XHR.responseText, function () {
          $(".ewave-gbook-content").focus();
          eWave.Image.Verify.Refresh($(".ewave-verify-img-report"));
        });
      });
    }
  },
  'History': {
    'BoxShow': 0,
    'Limit': 10,
    'Days': 7,
    'Json': '',
    'Init': function () {
      if ($('.ewave-history').length == 0) {
        return false;
      }
      $("body").on('click', '.ewave-history-clear', function () {
        eWave.History.Clear();
      });
      var jsondata = [];
      if (this.Json) {
        jsondata = this.Json;
      } else {
        var jsonstr = MAC.Cookie.Get('ewave_history');
        if (jsonstr != undefined) {
          jsondata = eval(jsonstr);
        }
      }
      var history_html = '<div class="ewave-dropdown ewave-history-dropdown">';
      history_html += '<a class="ewave-history-text" href="javascript:;"><i class="fa fa-history"></i><span>Lịch sử</span></a>';
      history_html += '<div class="ewave-dropdown-box ewave-history-box">';
      if (jsondata.length > 0) {
        history_html += '<ul class="ewave-history-list">';
        history_html += '<li class="ewave-history-item ewave-history-head"><a><strong><i class="fa fa-history"></i>Lịch sử xem phim của tôi</strong></a></li>';
        for ($i = 0; $i < jsondata.length; $i++) {
          history_html += '<li class="ewave-history-item"><a class="text-overflow" href="' + jsondata[$i].playlink + '" title="' + jsondata[$i].name + '"><small class="pull-right text-muted">' + jsondata[$i].playname + '</small><span class="ewave-history-name">' + jsondata[$i].name + '</span></a></li>';
        }
        history_html += '<li class="ewave-history-item ewave-history-foot"><a class="ewave-history-clear" href="javascript:;">Xóa lịch sử</a></li>';
        history_html += '</ul>';
      } else {
        history_html += '<div class="ewave-history-empty"><i class="fa fa-minus-circle"></i>&nbsp;Không có lịch sử</div>';
      }
      history_html += '</div>';
      history_html += '</div>';
      $('.ewave-history').html(history_html);
      if ($(".ewave-history-set").attr('data-name')) {
        var $that = $(".ewave-history-set");
        eWave.History.Set($that.attr('data-id'), $that.attr('data-name'), $that.attr('data-playname'), $that.attr('data-link'), $that.attr('data-playlink'));
      }
    },
    'Set': function (id, name, playname, link, playlink) {
      if (!playlink) {
        playlink = document.URL;
      }
      var jsondata = MAC.Cookie.Get('ewave_history');
      if (jsondata != undefined) {
        this.Json = eval(jsondata);
        for ($i = 0; $i < this.Json.length; $i++) {
          if (this.Json[$i].playlink == playlink) {
            return false;
          }
        }
        jsonstr = '{log:[{"id":"' + id + '","name":"' + name + '","playname":"' + playname + '","link":"' + link + '","playlink":"' + playlink + '"},';
        for ($i = 0; $i < this.Json.length; $i++) {
          if ($i <= this.Limit && this.Json[$i]) {
            if (this.Json[$i].id != id) {
              jsonstr += '{"id":"' + this.Json[$i].id + '","name":"' + this.Json[$i].name + '","playname":"' + this.Json[$i].playname + '","link":"' + this.Json[$i].link + '","playlink":"' + this.Json[$i].playlink + '"},';
            } else {
              continue;
            }
          } else {
            break;
          }
        }
        jsonstr = jsonstr.substring(0, jsonstr.lastIndexOf(','));
        jsonstr += "]}";
      } else {
        jsonstr = '{log:[{"id":"' + id + '","name":"' + name + '","playname":"' + playname + '","link":"' + link + '","playlink":"' + playlink + '"}]}';
      }
      this.Json = eval(jsonstr);
      MAC.Cookie.Set('ewave_history', jsonstr, this.Days);
    },
    'Clear': function () {
      MAC.Cookie.Del('ewave_history');
      $('.ewave-history-box').html('<div class="ewave-history-empty"><i class="fa fa-minus-circle"></i>&nbsp;Đã xóa lịch sử xem</div>');
    },
  },
  'Ulog': {
    'Init': function () {
      eWave.Ulog.Set();
      eWave.Ulog.Click();
      eWave.Ulog.Get();
    },
    'Get': function () {
      if ($(".ewave-ulog-get").length && MAC.Cookie.Get('user_id') != undefined && MAC.Cookie.Get('user_id') != '') {
        MAC.Ajax(maccms.path + '/index.php/user/ajax_ulog/?ac=list&limit=2000&type=2', 'get', 'json', '', function (r) {
          if (r.code == 1) {
            $.each(r['list'], function (index, row) {
              if (row.ulog_type == 2) {
                $(".ewave-ulog-get-" + row.data.id).addClass("active").html('<i class="fa fa-heart"></i>&nbsp;Đã yêu thích');
              }
            });
          } else {

          }
        });
      }
    },
    'Set': function () {
      if ($(".ewave-ulog-set").attr('data-mid')) {
        var $that = $(".ewave-ulog-set");
        $.get(maccms.path + '/index.php/user/ajax_ulog/?ac=set&mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&sid=' + $that.attr("data-sid") + '&nid=' + $that.attr("data-nid") + '&type=' + $that.attr("data-type"));
      }
    },
    'Click': function () {
      $('body').on('click', '.ewave-ulog', function (e) {
        //是否需要验证登录
        if (eWave.User.IsLogin == 0) {
          eWave.User.Login();
          return;
        }
        var $that = $(this);
        if ($that.attr("data-id")) {
          MAC.Ajax(maccms.path + '/index.php/user/ajax_ulog/?ac=set&mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&type=' + $that.attr("data-type"), 'get', 'json', '', function (r) {
            if (r.code == 1) {
              layer.msg(r.msg);
              if ($that.hasClass("ewave-ulog-get")) {
                $that.addClass("active").html('<i class="fa fa-heart"></i>&nbsp;Đã yêu thích');
              }
            } else {
              eWave.Layer.Error(r.msg);
            }
          });
        }
      });
    }
  },
  'User': {
    'BoxShow': 0,
    'IsLogin': 0,
    'UserId': '',
    'UserName': '',
    'GroupId': '',
    'GroupName': '',
    'Portrait': '',
    'Init': function () {
      $('body').on('click', '.ewave-login', function (e) {
        eWave.User.Login();
      });
      $('body').on('click', '.ewave-logout', function (e) {
        eWave.User.Logout();
      });
      if (MAC.Cookie.Get('user_id') != undefined && MAC.Cookie.Get('user_id') != '') {
        eWave.User.UserId = MAC.Cookie.Get('user_id');
        eWave.User.UserName = MAC.Cookie.Get('user_name');
        eWave.User.GroupId = MAC.Cookie.Get('group_id');
        eWave.User.GroupName = MAC.Cookie.Get('group_name');
        eWave.User.Portrait = MAC.Cookie.Get('user_portrait');
        eWave.User.IsLogin = 1;
        if ($('.ewave-user').length > 0) {
          var html = '<div class="ewave-dropdown ewave-user-dropdown">';
          html += '<a class="ewave-user-info" href="javascript:;"><img class="ewave-user-avatar" src="' + eWave.User.Portrait + '"><span class="ewave-user-name"><i class="fa fa-user-o"></i><span>' + eWave.User.UserName + '</span></span></a>';
          html += '<div class="ewave-dropdown-box">';
          html += '<ul>';
          html += '<li><a href="' + maccms.path + '/index.php/user/index.html"><i class="fa fa-user-o"></i><span>Trung tâm người dùng</span></a></li>';
          html += '<li><a href="' + maccms.path + '/index.php/user/info.html"><i class="fa fa-id-card-o"></i><span>Hồ sơ của tôi</span></a></li>';
          html += '<li><a href="' + maccms.path + '/index.php/user/upgrade.html"><i class="fa fa-vimeo"></i><span>' + ((eWave.User.GroupId < 3) ? 'Nâng cấp ' : 'VIP') + 'thành viên</span></a></li>';
          html += '<li><a class="ewave-logout" href="javascript:;"><i class="fa fa-sign-out fa-rotate-180"></i><span>Đăng xuất</span></a></li>';
          html += '</ul>';
          html += '</div>';
          html += '</div>';
          $('.ewave-user').html(html);
        }
      } else {
        $(".ewave-user").html('<a class="ewave-login" href="javascript:;"><i class="fa fa-user-o"></i><span>Đăng nhập</span></a>');
      }
    },
    'CheckLogin': function () {
      if (eWave.User.IsLogin == 0) {
        eWave.User.Login();
      }
    },
    'Login': function () {
      var ac = 'ajax_login';
      var ac_text = 'Đăng nhập người dùng';
      if (MAC.Cookie.Get('user_id') != undefined && MAC.Cookie.Get('user_id') != '') {
        ac = 'ajax_info';
        ac_text = 'Thông tin người dùng';
      }
      eWave.Ajax(maccms.path + '/index.php/user/' + ac, 'post', 'json', '', function (r) {
        eWave.Layer.Html(ac_text, r, function () {
          $(".ewave-login-form").attr("data-jump", 'refresh');
        });
      });
    },
    'Logout': function () {
      eWave.Ajax(maccms.path + '/index.php/user/logout', 'post', 'json', '', function (r) {
        if (r.code == 1) {
          layer.msg(r.msg);
          eWave.Check.Jump($(".ewave-logout"));
        } else {
          eWave.Layer.Error(r.msg);
        }
      });
    },
    'PopedomCallBack': function (trysee, h) {
      window.setTimeout(function () {
        $(window.frames["player_if"].document).find(".MacPlayer").html(h);
      }, 1000 * 10 * trysee);
    },
    'BuyPopedom': function (o) {
      var $that = $(o);
      layer.confirm('Bạn có chắc chắn mua quyền truy cập dữ liệu này không?', function () {
        MAC.Ajax(maccms.path + '/index.php/user/ajax_buy_popedom.html?id=' + $that.attr("data-id") + '&mid=' + $that.attr("data-mid") + '&sid=' + $that.attr("data-sid") + '&nid=' + $that.attr("data-nid") + '&type=' + $that.attr("data-type"), 'get', 'json', '', function (r) {
          $that.addClass('disabled').prop("disabled", true);
          if (r.code == 1) {
            layer.msg(r.msg);
            setTimeout(function () {
              top.location.reload();
            }, 1000);
          } else {
            $that.removeClass('disabled').removeAttr("disabled");
            eWave.Layer.Error(r.msg, 3000);
          }
        }, function () {
          eWave.Layer.Error('Lỗi mạng, vui lòng thử lại sau');
        });
      });
    }
  },
  'Comment': {
    'Login': 0,
    'Verify': 0,
    'Init': function () {
      if ($(".ewave-comment").length == 0) {
        return false;
      }
      console.log(1);
      eWave.Comment.Show(1);
      $('body').on('click', '.ewave-comment-face-box img', function (e) {
        var obj = $(this).parent().parent().parent().find('.ewave-comment-content');
        MAC.AddEm(obj, $(this).attr('data-id'));
      });
      $('body').on('click', '.ewave-comment-face-panel', function (e) {
        $(this).parent().find('.ewave-comment-face-box').toggle();
      });
      if ($('.ewave-comment-remaining').length) {
        $('body').on('keyup', '.ewave-comment-content', function (e) {
          var obj = $(this).parent().parent().parent().parent().find('.ewave-comment-remaining');
          MAC.Remaining($(this), 200, obj)
        });
      }
      $('body').on('focus', '.ewave-comment-content', function (e) {
        if (eWave.Comment.Login == 1 && eWave.User.IsLogin != 1) {
          eWave.User.Login();
        }
      });
      $("body").on("click", ".ewave-comment-reply-switch", function () {
        $($(this).attr("data-target")).slideToggle("fast");
        $(".ewave-comment-reply-form").not($(this).attr("data-target")).slideUp("fast");
      });
      $('body').on('click', '.ewave-comment-report', function (e) {
        if ($(this).attr("data-id")) {
          MAC.Ajax(maccms.path + '/index.php/comment/report.html?id=' + $that.attr("data-id"), 'get', 'json', '', function (r) {
            $(this).addClass('disabled');
            if (r.code == 1) {
              layer.msg(r.msg);
            } else {
              eWave.Layer.Error(r.msg);
            }
          });
        }
      });
      $('body').on('click', '.ewave-comment-submit', function (e) {
        eWave.Form.Submit($(this).parents("form"));
      });
    },
    'Show': function ($page) {
      if ($(".ewave-comment").length > 0) {
        MAC.Ajax(maccms.path + '/index.php/comment/ajax.html?rid=' + $('.ewave-comment').attr('data-id') + '&mid=' + $('.ewave-comment').attr('data-mid') + '&page=' + $page, 'get', 'json', '', function (r) {
          $(".ewave-comment").html(r);
        }, function () {
          $(".ewave-comment").html('<div class="text-center ewave-empty" onClick="eWave.Comment.Show(' + $page + ')"><i class="fa fa-warning"></i>&nbsp;Tải bình luận không thành công, nhấp vào đây để làm mới...</div>');
        });
      }
    },
  },
  'Headroom': {
    'Init': function () {
      if ($(".ewave-headroom").length == 0) {
        return false;
      }
      var headroom = new Array;
      $(".ewave-headroom").each(function (index) {
        var $that = $(this);
        headroom[index] = new Headroom($that.get(0), {
          tolerance: 5,
          offset: $that.attr("data-offset") || 280,
          classes: {
            initial: "ewave-headroom",
            pinned: "ewave-headroom-pinned",
            unpinned: "ewave-headroom-unpinned"
          }
        });
        headroom[index].init();
      });
    },
  },
  'Skin': {
    'Init': function () {
      if ($("link[name='skin']").length == 0) {
        return false;
      }
      var skinnum = 0,
        act;
      var lengths = $("link[name='skin']").length;
      $('.btnskin').click(function () {
        skinnum += 1;
        if (skinnum == lengths) {
          skinnum = 0;
        }
        var skin = $("link[name='skin']").eq(skinnum).attr("href");
        layer.msg("Đang đổi giao diện, vui lòng đợi...", {
          anim: 5,
          time: 2000
        }, function () {
          $("link[name='default']").attr({
            href: skin
          });
        });
        MAC.Cookie.Set('skinColor', skin, 365);
      });
      var color = MAC.Cookie.Get('skinColor');
      if (color) {
        $("link[name='default']").attr({
          href: color
        });
      }
    },
  },
  'Sort': {
    'Init': function () {
      $("body").on("click", ".ewave-sort", function (e) {
        e.preventDefault();
        var $that = $(this);
        var $target = $($that.attr("data-target"));
        $that.find(".fa").toggleClass("fa-sort-amount-asc fa-sort-amount-desc");
        $target.html($target.children().get().reverse());
      });
    },
  },
  'Tab': {
    'Init': function () {
      $("body").on("click", ".ewave-tab", function () {
        var $that = $(this);
        if (!$that.hasClass('active')) {
          $that.addClass('active').siblings(".ewave-tab").removeClass('active');
          $($that.attr("data-target")).fadeIn("fast").siblings(".ewave-tab-content").hide();
          eWave.Image.Lazyload.Box($that.attr("data-target"));
        }
      });
    },
  },
  'OffCanvas': {
    'Init': function () {
      $("body").on("click", ".ewave-offcanvas", function () {
        var $that = $(this);
        $($that.attr("data-target")).toggleClass("active");
        $(".ewave-offcanvas-modal").toggleClass("active");
        eWave.Image.Lazyload.Box($that.attr("data-target"));
      });
      $("body").on("click", ".ewave-offcanvas-modal", function () {
        var $that = $(this);
        $(".ewave-offcanvas-content").removeClass("active");
      });
      $("body").on("click", function (e) {
        if ($(e.target).closest(".ewave-offcanvas,.ewave-offcanvas-content").length == 0) {
          $(".ewave-offcanvas-content,.ewave-offcanvas-modal").removeClass("active");
        }
      });
    },
  },
  'Scrolltop': {
    'Init': function () {
      eWave.Scrolltop.View();
      eWave.Scrolltop.Scroll();
      eWave.Scrolltop.Click();
    },
    'View': function () {
      300 < $(window).scrollTop() ? $(".ewave-backtop").css("display", "") : $(".ewave-backtop").css("display", "none");
    },
    'Scroll': function () {
      $(window).scroll(function () {
        eWave.Scrolltop.View();
      });
    },
    'Click': function () {
      $(".ewave-backtop").on("click", function () {
        $("html, body").animate({
          scrollTop: 0
        }, 400);
        return true;
      });
    },
  },
  'Sticky': {
    'Init': function () {
      if ($('.ewave-sticky').length == 0 || ewave_config.sticky == 0) {
        return false;
      }
      $('.ewave-sticky').each(function () {
        var $that = $(this);
        $that.theiaStickySidebar({
          additionalMarginTop: $that.attr("data-top") ? $that.attr("data-top") : 0,
        });
      });
    },
  },
  'Search': {
    'Init': function () {
      if (ewave_config.autocomplete == 1) {
        MAC.Suggest.Init('.ewave-wd', 1, '');
      }
      $(".ewave-search-dropdown .ewave-dropdown-box li").click(function () {
        $(".ewave-search-dropdown-text").text($(this).text());
        $(this).parents("form").eq(0).attr("action", $(this).attr("data-action"));
      });

    },
  },
  'Others': function () {
    $(".member-nav-toggle").click(function () {
      $("body").toggleClass("member-nav-open");
    });
    $(".member-nav-open-bg").click(function () {
      $("body").removeClass("member-nav-open");
    });
    $('body').on('click', '.ewave-msg', function () {
      if ($(this).attr("data-tip")) {
        eWave.Layer.Error($(this).attr("data-tip"));
      }
    });
    $('body').on('click', '.ewave-click-dropdown', function () {
      $(this).children(".ewave-dropdown-box").toggleClass("active");
    });
    $('body').on('click', '.ewave-collapse-toggle', function () {
      $(this).parents(".ewave-collapse").eq(0).find(".ewave-collapse-content").toggleClass("active");
      $(this).find(".fa").toggleClass("fa-angle-up fa-angle-down");
    });
    $('body').on('click', '.ewave-downlist-checkall', function () {
      MAC.CheckBox.All($(this).attr("data-target"));
    });
    $("body").click(function (e) {
      if ($(e.target).closest(".ewave-click-dropdown").length == 0) {
        $(".ewave-click-dropdown .ewave-dropdown-box").removeClass("active");
      }
      if ($(e.target).closest(".ewave-offcanvas,.ewave-offcanvas-content").length == 0) {
        $(".ewave-offcanvas-content").removeClass("active");
      }
    });
    $('body').on('click', '.ewave-banner-close', function () {
      $(this).parents(".ewave-banner-box").eq(0).remove();
    });
    $(".ewave-remove-box").each(function () {
      if ($(this).find(".ewave-remove-list").children().length == 0) {
        $(this).remove();
      }
    });
  }
}
$(function () {
  eWave.Image.Init();
  eWave.User.Init();
  eWave.Copy.Init();
  eWave.CountDown.Init();
  eWave.Headroom.Init();
  eWave.Digg.Init();
  eWave.Star.Init();
  eWave.History.Init();
  eWave.Ulog.Init();
  eWave.Swiper.Init();
  eWave.Player.Init();
  eWave.Xunlei.Init();
  eWave.Skin.Init();
  eWave.Sort.Init();
  eWave.Tab.Init();
  eWave.OffCanvas.Init();
  eWave.Scrolltop.Init();
  eWave.Sticky.Init();
  eWave.Search.Init();
  eWave.Form.Init();
  eWave.Gbook.Init();
  eWave.Comment.Init();
  eWave.Others();
});
