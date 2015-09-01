<form id='content' method='post' data-prev='<?php echo base_url ('helps', 'step', $step - 1);?>' data-next='<?php echo base_url ('helps', 'submit');?>'>
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

  <input type='hidden' id='hour' name='hour' value='<?php echo $hour;?>' />
  <input type='hidden' id='min' name='min' value='<?php echo $min;?>' />

  <input type='hidden' id='lat' name='lat' value='<?php echo $lat;?>' />
  <input type='hidden' id='lng' name='lng' value='<?php echo $lng;?>' />

  <h1>最後確認</h1>
  <h2>請確認以下內容，如果無誤，請按”確認“，當有符合的影片時，系統會發信通知您。</h2>
  <h2 class='mobile'>請確認以下內容，如果無誤，請按”確認“，當有符合的影片時，系統會發信通知您。</h2>


  <div class='row top_line'>
    <h3>暱稱：</h3>
    <div><?php echo $nickname;?></div>
  </div>
  <div class='row'>
    <h3>E-mail：<br/><span>(不會顯示)</span></h3>
    <div class='email'><?php echo $email;?></div>
  </div>
  <div class='row'>
    <h3>標題：</h3>
    <div><?php echo $title;?></div>
  </div>
  <div class='row'>
    <h3>地址：</h3>
    <div><?php echo $address;?></div>
  </div>
  <div class='row'>
    <h3>描述：</h3>
    <div class='desc'><?php echo nl2br($desc);?></div>
  </div>
  <div class='row'>
    <h3>分類：</h3>
    <div class='desc'>
      <div>das</div>
      <div>das</div>
      <div>das</div>
      <div>das</div>
      <div>das</div>
      <div>das</div>
      <div>das</div>
      <div>das</div>
      <div>das</div>
    </div>
  </div>
  <div class='row'>
    <h3>地圖：</h3>
    <div class='map'></div>
  </div>

  <div class='steps'>
    <button type='submit' class=''>修改</button>
    <button type='submit' class=''>確認</button>
  </div>
</form>
