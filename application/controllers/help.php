<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Help extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  public function index () {
    $this->add_css (base_url ('application', 'views', 'content', 'site', 'help', 'step.css'), false);

    $this->add_js (base_url ('resource', 'javascript', 'jquery_v1.10.2', 'jquery-1.10.2.min.js'))
         ->add_js ('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=zh-TW&libraries=places');
         
    $this->set_method ('0')
         ->load_view (null);
  }
}
