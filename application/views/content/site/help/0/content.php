<form id='content' method='post' data-prev='<?php echo base_url ('help', $step - 1);?>' data-next='<?php echo base_url ('help', $step + 1);?>'>

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

  <h1>請填寫基本資料需求吧！</h1>
  <h2>系統會依據您的需求儘快的找出類似的結果。</h2>
  <h2 class='mobile'>系統會依據您的需求儘快的找出類似的結果。</h2>

  <div class='datas'>
    <div class='row'>
      <input type='text' name='nickname' id='nickname' value='<?php echo isset($nickname) && $nickname ? $nickname : '1';?>' pattern='.{1,}' required title='請輸入暱稱!'/>
      <label for='nickname'>輸入暱稱</label>
    </div>
    <div class='row'>
      <input type='text' name='title' id='title' value='<?php echo isset($title) && $title ? $title : '1';?>' pattern='.{1,}' required title='請給予個明確的標題!'/>
      <label for='title' data-tip='，ex: 徵求 8/21 台南 xx路 行車記錄器'>輸入標題</label>
    </div>
    <div class='row'>
      <input type='text' name='address' id='address' value='<?php echo isset($address) && $address ? $address : '1';?>' pattern='.{1,}' required title='請給予個明確的地點!'/>
      <label for='address' data-tip='，ex: 台北市 中正區 xxx路 000號'>輸入地點</label>
    </div>

    <div class='row textarea'>
      <textarea class='autosize' name='desc' id='desc' pattern='.{1,}' required title='請稍微描述一下當天狀況以及需求!'><?php echo isset($desc) && $desc ? $desc : '1';?></textarea>
      <label for='desc'>請稍微描述一下當天狀況以及需求。</label>
    </div>

  </div>

  <div class='steps'>
    <button type='submit' class='hide'>上一步</button>
    <button type='submit' class=''>下一步</button>
  </div>
</form>
