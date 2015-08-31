/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var _year = null, _month = null, _day = null;
  var $months = $('.datepicker .calendar .months');
  var $calendarTitle = $('.datepicker .calendar .year_months .title');
  var $infoYear = $('.datepicker .info .year .title');
  var $infoMonth = $('.datepicker .info .date .month');
  var $infoDay = $('.datepicker .info .date .day');
  var $infoWeek = $('.datepicker .info .date .week');

  var $year = $('#year');
  var $month = $('#month');
  var $day = $('#day');

  function monthDayCount (y, m) {
    return (m == 1) ? ((y % 4) === 0) && ((y % 100) !== 0) || ((y % 400) === 0) ? 29 : 28 : [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][m];
  }
  function createMonth (y, m) {
    var f = new Date(y, --m, 1).getDay ();
    var mc = monthDayCount(y, m);
    var wc = parseInt ((f + mc) / 7, 10) + (((f + mc) % 7) ? 1 : 0);

    return $('<div />').addClass ('month').append (Array.apply (null, Array (wc)).map (function (_, i) {
      return $('<div />').addClass ('week').append (Array.apply (null, Array (7)).map (function (_, j) {
        var d = i * 7 + j;
        d = (d < f) || d - f >= mc ? '' : d - f + 1;
        return $('<div />').addClass ('day').attr ('data-year', y).attr ('data-month', m + 1).attr ('data-day', d).text (d).click (function () {
          var mn = ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'][_month - 1];
          _year = y;
          _month = m + 1;
          _day = d;

          $months.find ('.month .day').removeClass ('active');
          $(this).addClass ('active');
          $calendarTitle.text (_year + '年 · ' + mn);
          $infoYear.text (_year + ' 年');
          $infoMonth.text (mn);
          $infoDay.text (_day < 10 ? '0' + _day : _day);
          $infoWeek.text (['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'][$(this).index ()]);
        });
      }));
    }));
  }

  function initMonth (y, m, d) {
    _year = y ? parseInt (y, 10) : _year;
    _month = m ? parseInt (m, 10) : _month;
    _day = d ? parseInt (d, 10) : _day;

    $months.empty ()
           .append (createMonth (_month == 1 ? _year - 1 : _year, _month == 1 ? 12 : _month - 1))
           .append (createMonth (_year, _month))
           .append (createMonth (_month == 12 ? _year + 1 : _year, _month == 12 ? 1 : _month + 1));

    $months.find ('.month .day[data-year="' + _year + '"][data-month="' + _month + '"][data-day="' + _day + '"]').click ();
  }

  $('.datepicker .info .year').click (function () {
    $(this).toggleClass ('show');
  }).find ('.years').append (Array.apply (null, Array (20)).map (function (_, i) {
    return $('<div />').data ('year', new Date ().getFullYear () - i).text (new Date ().getFullYear () - i + '年');
  })).mouseleave (function () {
    $(this).parent ().removeClass ('show');
  }).find ('div').click (function () {
    initMonth ($(this).data ('year'));
  });

  initMonth ($year.val (), $month.val (), $day.val ());

  $('.icon-chevron-right').click (function () {
    var d = monthDayCount (_year, _month);
    _day = _day > d ? d : _day;
    _year += (_month = _month % 12 + 1) == 1 ? 1 : 0;
    createMonth (_month == 12 ? _year + 1 : _year, _month == 12 ? 1 : _month + 1).appendTo ('.months');

    $months.find ('.month').first ().remove ();
    $months.find ('.month .day[data-year="' + _year + '"][data-month="' + _month + '"][data-day="' + _day + '"]').click ();
  });
  $('.icon-chevron-left').click (function () {
    var d = monthDayCount (_year, _month);
    _day = _day > d ? d : _day;
    _year -= (_month = !(_month = _month - 1) ? 12 : _month) == 12 ? 1 : 0;
    createMonth (_month == 1 ? _year - 1 : _year, _month == 1 ? 12 : _month - 1).prependTo ('.months');

    $months.find ('.month').last ().remove ();
    $months.find ('.month .day[data-year="' + _year + '"][data-month="' + _month + '"][data-day="' + _day + '"]').click ();
  });

  $('.datepicker .calendar > .week').append (['日', '一', '二', '三', '四', '五', '六'].map (function (t) {
    return $('<div />').addClass ('day').text (t);
  }));

  $('#action').hide ();
  $('.steps button').click (function () {
    window.showLoading ();
    $year.val (_year);
    $month.val (_month);
    $day.val (_day);
  });

  window.hideLoading ();
});