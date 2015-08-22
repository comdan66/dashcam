/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var $container = $('#container');
  var $leftOption = $('nav .left .option');
  var $rightOption = $('nav .right .option');
  var $wrapperCover = $container.find ('.cover');
  var overflow = $('body').css ('overflow');

  // $('#action').hide ();

  $leftOption.click (function () {
    if ($container.hasClass ('show')) {
      $container.removeClass ('show');
      $('body').css ('overflow', overflow);
    } else {
      $container.addClass ('show');
      $('body').css ('overflow', 'hidden');
    }
  });
  $wrapperCover.click (function () {
    $container.removeClass ('show');
    $('body').css ('overflow', overflow);
  });
  $rightOption.click (function () {
    $(this).toggleClass ('show');
  });

  window.OAprompt = function (title, placeholder, ok, no) {
    window.$OAprompt = $('.OAprompt');

    if (window.$OAprompt.length < 1) {
      var close = function () {
        window.$OAprompt.removeClass ('show_animation').addClass ('hide_animation');
        if (!window.$OAprompt.timer)
          window.$OAprompt.timer = setTimeout (function () {
            window.$OAprompt.attr ('class', 'OAprompt');
            $OAprompt.find ('input').val ('');
          }, 500);
      };

      var $title = $('<div />').addClass ('title');
      var $input = $('<input />').attr ('type', 'text').attr ('id', 'dialog_input_input').keyup (function (e) {
        if ($(this).val ().length > 0) $(this).addClass ('val');
        else $(this).removeClass ('val');

        if ((e.keyCode == '13') && !window.$OAprompt.ok) {
          if (ok)
            ok ($(this));
          window.$OAprompt.ok = true;
          close ();
        }
        if ((e.keyCode == '27')) {
           if (no)
            no ();
          close ();
        }
      });

      window.$OAprompt = $('<div />').addClass ('OAprompt').append ($('<div />').addClass ('cover').click (close)).append ($('<div />').addClass ('wrapper').append ($title).append (
          $('<div />').addClass ('content').append ($input).append ($('<label />').attr ('id', 'dialog_input_input'))
        ).append (
          $('<div />').addClass ('btns').append ($('<a />').text ('確定').click (ok ? ok.bind ($(this), $input) : ok)).append ($('<a />').text ('取消').click (no))
        ));
      window.$OAprompt.find ('.btns a').click (close);
      $('body').append (window.$OAprompt);
    }
    window.$OAprompt.find ('.title').text (title);
    window.$OAprompt.find ('label').text (placeholder);
    window.$OAprompt.addClass ('show').addClass ('show_animation').find ('input').focus ();
  };
});