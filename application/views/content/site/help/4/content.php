<form id='content' method='post' data-prev='<?php echo base_url ('help', $step - 1);?>' data-next='<?php echo base_url ('help', $step + 1);?>'>
  <input type='hidden' name='nickname' value='<?php echo $nickname;?>' />
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

  <input type='hidden' id='hour' name='hour' value='<?php echo $hour;?>' />
  <input type='hidden' id='min' name='min' value='<?php echo $min;?>' />

  <input type='hidden' id='lat' name='lat' value='<?php echo $lat ? $lat : 25.04;?>' />
  <input type='hidden' id='lng' name='lng' value='<?php echo $lng ? $lng : 121.55;?>' />

  <h1>挑選一下地點</h1>
  <h2>選擇地點讓系統知道！</h2>
  <h2 class='mobile'>選擇地點讓系統知道！</h2>

  <div class='maps'>
    <i></i><i></i><i></i><i></i>
    <div id='map'></div>
    <div id='view'>s</div>
    <input type='text' id='search' value='' placeholder='依照地址搜尋..' />
    <button type='button' id='show_view'></button>
  </div>

  <div class='steps'>
    <button type='submit' class=''>上一步</button>
    <button type='submit' class=''>下一步</button>
  </div>
</form>
