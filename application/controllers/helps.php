<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Helps extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  private function _check ($step, $nickname, $email, $title, $address, $desc, $tags, $year, $month, $day, $hour, $min, $lat, $lng) {
    $bools = array (
        !($nickname && $email && $title && $address && $desc),
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
  public function submit () {

    $nickname = trim ($this->input_post ('nickname'));
    $email = trim ($this->input_post ('email'));
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

echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
var_dump ();
exit ();
  }
  public function step ($step = 0) {

    $nickname = trim ($this->input_post ('nickname'));
    $email = trim ($this->input_post ('email'));
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

    $step = $this->_check ($step, $nickname, $email, $title, $address, $desc, $tags, $year, $month, $day, $hour, $min, $lat, $lng);

    $this->set_method ($step);

    if ($step == 1) {
      $limit = 10;
      $this->load->library ('Scws');
      
      $scws_tags = Scws::explode ($title . $desc, 5);

      if (!($year && $month && $day))
        $tags = $scws_tags;

      $db_tags = column_array (Tag::find ('all', array (
          'select' => 'name',
          'order' => 'RAND()',
          'limit' => $limit
        )), 'name');

      $tag_divs = array_unique (array_filter (array_merge ($tags, $scws_tags, $db_tags)));
      $this->add_param ('tag_divs', $tag_divs);
    }

    if ($step == 4) {
      if (!($lat && $lng)) {
        $url = "https://maps.google.com/maps/api/geocode/json?sensor=false&address=" . urlencode ($address) . "&language=zh-TW";
        $resp_json = file_get_contents ($url);
        $result = json_decode ($resp_json, true);

        if (($result = json_decode ($resp_json, true)) && ($result['status'] == 'OK') && isset ($result['results'][0]['geometry']['location'])) {
          $lat = $result['results'][0]['geometry']['location']['lat'];
          $lng = $result['results'][0]['geometry']['location']['lng'];
        }
      }
      $this->add_js ('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=zh-TW&libraries=places');
    }
    $this->add_css (base_url ('application', 'views', 'content', 'site', 'helps', 'step.css'), false)
         ->add_js (base_url ('application', 'views', 'content', 'site', 'helps', 'step.js'), false)
         ->load_view (array (
            'step' => $step,
            'nickname' => $nickname,
            'email' => $email,
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
