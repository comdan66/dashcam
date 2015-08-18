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

        </div>
        <div class='right'>
          
          
          
          <div class='option icon-more white' onClick='this.classList.toggle("show");' onmouseleave='this.classList.remove("show");'>
            <div class='cover'></div>
            <div class='menu i4'>
              <a onClick=''>asd</a>
              <a>asd</a>
              <a>asd</a>
              <a class='top_line'>asd</a>
            </div>
          </div>

        </div>
      </div>
    </nav>

    <div class='main_ball'>+</div>

    <div id='container'>
      <div class='wrapper'>
        <div class='wrapper_left '>
          <div class='logo'>Logo</div>

          <div class='title'>主選單</div>
          <div class='group'>
            <a href='' class='icon-link-external'>首頁</a>
            <a href='' class='icon-link'>搜尋</a>
            <a href='' class='icon-eye'>選單</a>
            <a href='' class='icon-facebook-square'>首頁</a>
            <a href='' class='icon-chevron-right'>搜尋</a>
            <a href='' class='icon-chevron-left'>選單</a>
          </div>


          <div class='title'>主選單</div>
          <div class='group'>
            <a href='' class='icon-location'>首頁</a>
            <a href='' class='icon-heart'>搜尋</a>
            <a href='' class='icon-arrow-right'>選單</a>
            <a href='' class='icon-sign-out'>首頁</a>
            <a href='' class='icon-uniE610'>搜尋</a>
            <a href='' class='icon-uniE611'>選單</a>
          </div>


          <div class='title'>主選單</div>
          <div class='group'>
            <a href='' class='icon-check-circle-o'>首頁</a>
            <a href='' class='icon-eye2'>搜尋</a>
            <a href='' class='icon-street-view'>選單</a>
          </div>


        </div>
        <div class='cover'></div>
        <div class='wrapper_right'>
          ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br/>ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br/>ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br/>ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br/>ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br/>ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br/>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="l"></div>
      <div class="c"><div>ERD © 2015</div><div>如有相關問題歡迎與<a href="https://www.facebook.com/comdan66" target="_blank">作者</a>討論。</div></div>
      <div class="r"></div>
    </div>
    <!-- <?php echo isset ($content) ? $content : ''; ?> -->
  </body>
</html>