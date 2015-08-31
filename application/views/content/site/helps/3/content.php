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
  <input type='hidden' name='year' value='<?php echo $year;?>' />
  <input type='hidden' name='month' value='<?php echo $month;?>' />
  <input type='hidden' name='day' value='<?php echo $day;?>' />

  <input type='hidden' id='hour' name='hour' value='<?php echo $hour ? $hour : date ('H');?>' />
  <input type='hidden' id='min' name='min' value='<?php echo $min ? $min : date ('i');?>' />

  <input type='hidden' id='lat' name='lat' value='<?php echo $lat;?>' />
  <input type='hidden' id='lng' name='lng' value='<?php echo $lng;?>' />

  <h1>選擇時間</h1>
  <h2>選擇一個大約的時間點。</h2>
  <h2 class='mobile'>選擇一個大約的時間點。</h2>

  <div class='time'>
    <div class='arrows t'>
      <a class='h icon-chevron-right'></a>
      <a class='m icon-chevron-right'></a>
    </div>

    <div class='leafs'>
      <div class='hour'>
  <?php for ($i = 0; $i < 24; $i++) { ?>
          <div><?php echo sprintf ('%02d', ($i + 1));?><span>時</span></div>
  <?php } ?>
      </div>
      <div class='min'>
  <?php for ($i = 0; $i < 60; $i++) { ?>
          <div><?php echo sprintf ('%02d', $i + 1);?><span>分</span></div>
  <?php } ?>
      </div>
    </div>

    <div class='arrows b'>
      <a class='h icon-chevron-right'></a>
      <a class='m icon-chevron-right'></a>
    </div>

  </div>

  <div class='steps'>
    <button type='submit' class=''>上一步</button>
    <button type='submit' class=''>下一步</button>
  </div>
</form>
