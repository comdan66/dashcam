<!DOCTYPE html>
<html lang="zh">
  <head>
    <?php echo isset ($meta_list) ? $meta_list : ''; ?>

    <title><?php echo isset ($title) ? $title : ''; ?></title>

<?php echo isset ($css_list) ? $css_list : ''; ?>

<?php echo isset ($js_list) ? $js_list : ''; ?>

  </head>
  <body lang="zh-tw">
    <?php echo isset ($hidden_list) ? $hidden_list : ''; ?>

    <nav>
      <div class='container'>
        <div class='logo'>LOGO</div>
        <div class='left'>
          <div class='option icon-menu'></div>
          <div class='title'>標題 Title</div>
        </div>
        <div class='right'>


          <div class='option icon-more white'>
            <div class='cover'></div>
            <div class='menu i4'>
              <a onClick=''>item 1</a>
              <a>item 2</a>
              <a>item 3</a>
              <a class='top_line'>item 4</a>
            </div>
          </div>

          <div class='icon-search'></div>

        </div>
      </div>
    </nav>


    <div id='container'>
      <div class='wrapper'>
        <div class='wrapper_left '>
          <div class='logo'>Logo</div>

          <div class='title'>主選單</div>
          <div class='group'>
            <a href='' class='icon-home'>首頁</a>
            <a href='' class='icon-binoculars2'>尋找</a>
            <a href='' class='icon-location'>地圖</a>
            <a href='' class='icon-play2'>影片</a>
            <a href='' class='icon-sign-out'>登出</a>
          </div>


          <div class='title'>次選單</div>
          <div class='group'>
            <a href='' class='icon-home'>首頁</a>
            <a href='' class='icon-binoculars2'>尋找</a>
            <a href='' class='icon-location'>地圖</a>
            <a href='' class='icon-play2'>影片</a>
            <a href='' class='icon-sign-out'>登出</a>
          </div>


        </div>
        <div class='cover'></div>
        <div class='wrapper_right'>
          content
        </div>
      </div>
    </div>

    <div id='action' class='icon-plus'></div>

    <div id="footer">
      <div class="l"></div>
      <div class="c"><div>ERD © 2015</div><div>如有相關問題歡迎與<a href="https://www.facebook.com/comdan66" target="_blank">作者</a>討論。</div></div>
      <div class="r"></div>
    </div>

    <div id='loading'>
      <svg class="svg" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
         <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
    <!-- <?php echo isset ($content) ? $content : ''; ?> -->
  </body>
</html>