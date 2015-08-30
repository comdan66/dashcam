/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  $('.tags .add').click (function () {

    OAprompt ('新增分類', '請輸入分類名稱', function ($input) {
      var name = $input.val ().trim ();
      var length = $('.tags label input + div').filter (function () {
        return $(this).text ().trim () == name;
      }).length;
      
      if (name && !length)
        $('<label />').append ($('<input />').attr ('type', 'checkbox').attr ('name', 'tags[]').prop ('checked', true)).append ($('<div />').text (name)).insertAfter ($(this));
    }.bind ($(this)));
  });

  window.closeLoading ();
});