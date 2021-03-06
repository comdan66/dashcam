<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Site_cell extends Cell_Controller {

  /* render_cell ('site_cell', 'wrapper_left', var1, ..); */
  // public function _cache_wrapper_left () {
  //   return array ('time' => 60 * 60, 'key' => null);
  // }
  public function wrapper_left () {
    $class = $this->CI->get_class ();
    $method = $this->CI->get_method ();

    $item_lists = array (
      '主選單' => array (
          array ('name' => '首頁', 'href' => base_url (), 'icon' => 'icon-home', 'target' => '_self', 'visible' => true, 'active' => ($class == 'main') && ($method == 'index')),
          array ('name' => '徵求影片', 'href' => base_url ('helps', 'step'), 'icon' => 'icon-binoculars2', 'target' => '_self', 'visible' => true, 'active' => ($class == 'help')),
        ),
      '次選單' => array (
          array ('name' => '首頁', 'href' => base_url (), 'icon' => 'icon-home', 'target' => '_self', 'visible' => true, 'active' => false),
          array ('name' => '徵求影片', 'href' => base_url (), 'icon' => 'icon-binoculars2', 'target' => '_self', 'visible' => true, 'active' => false),
        )
    );
    return $this->load_view (array (
        'item_lists' => $item_lists
      ));
  }

  /* render_cell ('site_cell', 'nav', var1, ..); */
  // public function nav () {
  //   return array ('time' => 60 * 60, 'key' => null);
  // }
  public function nav () {
    return $this->load_view (array (
      ));
  }

  /* render_cell ('site_cell', 'loading', var1, ..); */
  // public function loading () {
  //   return array ('time' => 60 * 60, 'key' => null);
  // }
  public function loading () {
    return $this->load_view ();
  }

  /* render_cell ('site_cell', 'footer', var1, ..); */
  // public function footer () {
  //   return array ('time' => 60 * 60, 'key' => null);
  // }
  public function footer () {
    return $this->load_view (array (
      ));
  }
}