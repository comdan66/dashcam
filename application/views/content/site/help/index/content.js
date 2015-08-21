/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  $('.tags .add').click (function () {

    OAprompt ('新增分類', '請輸入分類名稱', function ($input) {
console.error ($input.val ());

    });
  });

  window.closeLoading ();
});