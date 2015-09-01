/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var $map = $('.map');
  var $lat = $('#lat');
  var $lng = $('#lng');
  var _map = null;
  var _marker = null;

  function initialize () {

    var position = new google.maps.LatLng ($lat.val (), $lng.val ());

    _map = new google.maps.Map ($map.get (0), {
        zoom: 15,
        draggable: true,
        zoomControl: true,
        scrollwheel: true,
        scaleControl: false,
        mapTypeControl: false,
        navigationControl: false,
        center: position,
        disableDoubleClickZoom: true,
      });

    _marker = new google.maps.Marker ({
        map: _map,
        draggable: false,
        position: position
      });

    $('.steps button').click (function () {
      window.showLoading ();
    });
    window.hideLoading ();
  }

  google.maps.event.addDomListener (window, 'load', initialize);

});