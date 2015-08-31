/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var $maps = $('.maps');
  var $map = $('#map');
  var $view = $('#view');
  var $search = $('#search');
  var $showView = $('#show_view');
  var $lat = $('#lat');
  var $lng = $('#lng');
  var _map = null;
  var _panorama = null;
  var _searchBox = null;
  var _marker = null;

  $('#action').hide ();

  function loadPlaces () {
    var places = _searchBox.getPlaces ();
    if (places.length === 0) return;

    if ($search.markers)
      $search.markers.forEach (function (m) { m.setMap (null); });

    $search.markers = [];

    var bounds = new google.maps.LatLngBounds ();

    places.forEach (function (place) {
      $search.markers.push (new google.maps.Marker ({
        map: _map,
        icon: {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        },
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) bounds.union(place.geometry.viewport);
      else bounds.extend(place.geometry.location);
    });
    _map.fitBounds(bounds);
  }

  function updateForm (position) {
    new google.maps.Geocoder ().geocode ({'latLng': position}, function (result, status) {
    });

    // _map.setCenter (position);
    $lat.val (position.lat ());
    $lng.val (position.lng ());

    _panorama.setPosition (position);
    new google.maps.StreetViewService ().getPanoramaByLocation (position, 100, function (data, status) {
      if (status != google.maps.StreetViewStatus.OK) {
        _panorama.setVisible (false);
        $showView.removeClass ('show');
      } else {
        _panorama.setVisible (true);
        $showView.addClass ('show');
      }
    });
  }
  function initialize () {

    var position = new google.maps.LatLng ($lat.val (), $lng.val ());

    _panorama = new google.maps.StreetViewPanorama ($view.get (0), {
      linksControl: true,
      addressControl: false,
      position: position,
      pov: {
        heading: 0,
        pitch: 0,
        zoom: 0
      }
    });

    _map = new google.maps.Map ($map.get (0), {
        zoom: 18,
        zoomControl: true,
        scrollwheel: true,
        scaleControl: true,
        streetView: _panorama,
        mapTypeControl: false,
        navigationControl: true,
        center: position,
        streetViewControl: false,
        disableDoubleClickZoom: true,
      });

    _marker = new google.maps.Marker ({
        map: _map,
        draggable: true,
        position: position
      });

    google.maps.event.addListener (_marker, 'dragend', function () {
      updateForm (_marker.position);
    });
    google.maps.event.addListener(_map, 'click', function (e) {
      _marker.setPosition (e.latLng);
      updateForm (_marker.position);
    });


    $showView.addClass ('show').click (function () { $maps.toggleClass ('view'); });

    // google.maps.event.addListener (_panorama, 'visible_changed', function () {
    //   if (this.getVisible ()) $showView.addClass ('show');
    //   else $showView.removeClass ('show');
    // });

    _searchBox = new google.maps.places.SearchBox($search.get (0));
    _searchBox.addListener('places_changed', loadPlaces);

    $('.steps button').click (function () {
      window.showLoading ();
    });
    window.hideLoading ();
  }

  google.maps.event.addDomListener (window, 'load', initialize);

});