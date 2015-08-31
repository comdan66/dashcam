<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Help extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  private function _check ($step, $nickname, $title, $address, $desc, $tags, $year, $month, $day, $hour, $min, $lat, $lng) {
    $bools = array (
        !($nickname && $title && $address && $desc),
        !(($tags !== null) && is_array ($tags) && ($step !== 1)),
        !($year && $month && $day),
        !($hour && $min),
        !($lat && $lng)
      );
    for ($i = 0; $i < $step; $i++)
      if ($bools[$i])
        return $i;

    return $step;
  }
  public function index ($step = 0) {

    $nickname = trim ($this->input_post ('nickname'));
    $title = trim ($this->input_post ('title'));
    $address = trim ($this->input_post ('address'));
    $desc = trim ($this->input_post ('desc'));

    $tags = ($tags = $this->input_post ('tags')) ? $tags : array ();

    $year = trim ($this->input_post ('year'));
    $month = trim ($this->input_post ('month'));
    $day = trim ($this->input_post ('day'));

    $hour = trim ($this->input_post ('hour'));
    $min = trim ($this->input_post ('min'));

    $lat = trim ($this->input_post ('lat'));
    $lng = trim ($this->input_post ('lng'));

    $step = $this->_check ($step, $nickname, $title, $address, $desc, $tags, $year, $month, $day, $hour, $min, $lat, $lng);

    $this->set_method ($step);

    if ($step == 1) {
      $tag_divs = array_unique (array_filter (array_merge ($tags, array ('123', '234'))));
      $this->add_param ('tag_divs', $tag_divs);
    }


    // switch ($step) {


    //   case '0':
    //   default:
    //     $this->set_method ('0');
    //     break;

    //   case '1':
    //     $nickname = $this->input_post ('nickname');
    //     $title = $this->input_post ('title');
    //     $desc = $this->input_post ('desc');

    //     if (!($nickname && $title && $desc))
    //       $step = 0;

    //     $this->set_method ($step)
    //          ->add_param ('nickname', $nickname)
    //          ->add_param ('title', $title)
    //          ->add_param ('desc', $desc);
    //     break;

    //   case '2':
    //     $this->set_method ('2');
    //     break;

    //   case '3':
    //     $this->set_method ('3');

    //     break;
    // }
    // if (!$step) {
    //   $step = 0;
    //   $this->set_method ('0');
    // }


    $this->add_css (base_url ('application', 'views', 'content', 'site', 'help', 'step.css'), false)
         ->add_js (base_url ('application', 'views', 'content', 'site', 'help', 'step.js'), false)
         ->add_js (base_url ('resource', 'javascript', 'jquery_v1.10.2', 'jquery-1.10.2.min.js'))
         ->add_js ('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=zh-TW&libraries=places')
         ->load_view (array (
            'step' => $step,
            'nickname' => $nickname,
            'title' => $title,
            'address' => $address,
            'desc' => $desc,
            'tags' => $tags,
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'hour' => $hour,
            'min' => $min,
            'lat' => $lat,
            'lng' => $lng,
          ));
  }
}
