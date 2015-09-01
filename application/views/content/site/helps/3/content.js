/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var $hour = $('#hour');
  var $min = $('#min');

  var $hourDiv = $('.leafs .hour').attr ('data-val', parseInt ($hour.val (), 10));
  var $minDiv = $('.leafs .min').attr ('data-val', parseInt ($min.val (), 10));

  $('.arrows.t .h').click (function () {
    $hourDiv.attr ('data-val', parseInt ($hourDiv.attr ('data-val'), 10) % 23 + 1);
  });
  $('.arrows.b .h').click (function () {
    $hourDiv.attr ('data-val', (parseInt ($hourDiv.attr ('data-val'), 10) + 21) % 23 + 1);
  });
  $('.arrows.t .m').click (function () {
    $minDiv.attr ('data-val', (parseInt ($minDiv.attr ('data-val'), 10) + 1) % 60);
  });
  $('.arrows.b .m').click (function () {
    $minDiv.attr ('data-val', (parseInt ($minDiv.attr ('data-val'), 10) + 59) % 60);
  });

  $('.steps button').click (function () {
    window.showLoading ();
    $hour.val ($hourDiv.data ('val'));
    $min.val ($minDiv.data ('val'));
  });

  window.hideLoading ();
});