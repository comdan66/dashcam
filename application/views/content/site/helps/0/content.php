<form id='content' method='post' data-prev='<?php echo base_url ('helps', 'step', $step - 1);?>' data-next='<?php echo base_url ('helps', 'step', $step + 1);?>'>

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

  <h1>基本資料</h1>
  <h2>當有類似符合的影片，系統會寄信通知您。</h2>
  <h2 class='mobile'>當有類似符合的影片，系統會寄信通知您。</h2>

  <div class='datas'>
    
    <div class='row'>
      <input type='text' name='nickname' id='nickname' value='<?php echo isset($nickname) && $nickname ? $nickname : '1';?>' pattern='.{1,}' required title='請輸入一個簡單的暱稱!' autocomplete='off'/>
      <label for='nickname'>輸入暱稱</label>
    </div>

    <div class='row'>
      <input type='email' name='email' id='email' value='<?php echo isset($email) && $email ? $email : 'comdan66@gmail.com';?>' pattern='^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$' required title='請輸入正確的 E-mail 格式!' autocomplete='off'/>
      <label for='email' data-tip='，若有相似的影片新增，會 E-mail 到您的信箱！'>請輸入E-mail</label>
    </div>

    <div class='row'>
      <input type='text' name='title' id='title' value='<?php echo isset($title) && $title ? $title : '[徵求] 徵求台中行車紀錄器';?>' pattern='.{1,}' required title='請給予個明確的標題!' autocomplete='off'/>
      <label for='title' data-tip='，ex: 徵求 8/21 台南 xx路 行車記錄器'>輸入標題</label>
    </div>

    <div class='row'>
      <input type='text' name='address' id='address' value='<?php echo isset($address) && $address ? $address : '1';?>' pattern='.{1,}' required title='請給予個明確的地點!' autocomplete='off'/>
      <label for='address' data-tip='，ex: 台北市 中正區 xxx路 000號'>輸入地點</label>
    </div>

    <div class='row textarea'>
      <textarea class='autosize' name='desc' id='desc' pattern='.{1,}' required title='請稍微描述一下當天狀況以及需求!' autocomplete='off'><?php echo isset($desc) && $desc ? $desc : '我姐姐早上上班途中，雨天因前方兩輛車行駛不當，於路中未打方向燈轉彎造成後車突    
然緊停路中(正常行駛路段且綠燈)，後方來車無法緊急停剎而摔車嚴重骨折及韌帶錯位，  
因當下無法追停前方車輛，先緊急就醫，剛好該路段是監視攝影器死角無畫面，特請大家  
提供畫面找出該車判賠，找不到對方警察只能判自摔就無法賠償開刀費用...             
懇請拜託大家了，謝謝!                                                           
                                                                                
如果有人有PTT的帳號也拜託幫我轉發一下....我們毛腳印也才剛開業不久...尚未有客人  
的情況下收入也不穩定, 我姊卻遇到這樣的車禍開刀跟骨釘費用也很可怕....目前有請警  
方幫我們去附近店家查看有沒有監視器可以調閱, 也請大家幫忙轉發給有在附近工作的朋  
友詢問看看了~~T___T';?></textarea>
      <label for='desc'>請稍微描述一下當天狀況以及需求。</label>
    </div>

  </div>

  <div class='steps'>
    <button type='submit' class='hide'>上一步</button>
    <button type='submit' class=''>下一步</button>
  </div>
</form>
