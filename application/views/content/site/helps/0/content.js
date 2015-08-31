/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  autosize ($('textarea.autosize'));
  $('.row input, .row textarea').keyup (function (e) {
    if ($(this).val ().length > 0)
      $(this).addClass ('val');
    else
      $(this).removeClass ('val');
  }).keyup ();
  
  $('.steps button').click (function () {
    window.showLoading ();
  });
  window.hideLoading ();
});