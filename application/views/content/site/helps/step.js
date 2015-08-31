/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  $('.steps button[type="submit"]').click (function () {
    var $form = $(this).parents ('form#content');

    $form.attr ('action', $(this).index () ? $form.data ('next') : $form.data ('prev'));
  });
});