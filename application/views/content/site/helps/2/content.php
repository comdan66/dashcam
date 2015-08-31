<form id='content' method='post' data-prev='<?php echo base_url ('helps', 'step', $step - 1);?>' data-next='<?php echo base_url ('helps', 'step', $step + 1);?>'>
  <input type='hidden' name='nickname' value='<?php echo $nickname;?>' />
  <input type='hidden' name='email' value='<?php echo $email;?>' />
  <input type='hidden' name='title' value='<?php echo $title;?>' />
  <input type='hidden' name='address' value='<?php echo $address;?>' />
  <input type='hidden' name='desc' value='<?php echo $desc;?>' />
  <?php
    foreach ($tags as $tag) { ?>
      <input type='hidden' name='tags[]' value='<?php echo $tag;?>' />
  <?php
    } ?>

  <input type='hidden' name='year' id='year' value='<?php echo $year ? $year : date ('Y');?>' />
  <input type='hidden' name='month' id='month' value='<?php echo $month ? $month : date ('m');?>' />
  <input type='hidden' name='day' id='day' value='<?php echo $day ? $day : date ('d');?>' />

  <input type='hidden' id='hour' name='hour' value='<?php echo $hour;?>' />
  <input type='hidden' id='min' name='min' value='<?php echo $min;?>' />

  <input type='hidden' id='lat' name='lat' value='<?php echo $lat;?>' />
  <input type='hidden' id='lng' name='lng' value='<?php echo $lng;?>' />

  <h1>選擇日期</h1>

  <div class='datepicker'>

    <div class='info'>
      <div class='year'>
        <div class='title'></div>
        <div class='years'></div>
      </div>
      <div class='date'>
        <div class='month'></div>
        <div class='day'></div>
        <div class='week'></div>
      </div>
    </div>

    <div class='calendar'>
      <div class='year_months'>
        <a class='icon-chevron-left'></a>
        <div class='title'></div>
        <a class='icon-chevron-right'></a>
      </div>
      <div class='week'></div>
      <div class='months'></div>
    </div>

  </div>

  <div class='steps'>
    <button type='submit' class=''>上一步</button>
    <button type='submit' class=''>下一步</button>
  </div>
</form>
