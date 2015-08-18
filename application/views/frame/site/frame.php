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
        <div class='search'>
          <div class='bar'>
            <input type='text' name='main_search' id='main_search' value='' placeholder='搜尋！' />
            <label for='main_search' class='icon-search'></label>
          </div>
        </div>
        <div class='option icon-more' onClick='this.classList.toggle("show");' onmouseleave='this.classList.remove("show");'>
          <div class='cover'></div>
          <div class='menu i4'>
            <a onClick='console.error (12);'>asd</a>
            <a>asd</a>
            <a>asd</a>
            <a class='top_line'>asd</a>
          </div>
        </div>
      </div>
    </nav>

    <div class='main_ball'>+</div>

    <div id='container'>
      <div class='wrapper'>
        <div class='wrapper_left'>

          <div class='title'>主選單</div>
          <div class='group'>
            <a href='' class='icon-home'>首頁</a>
            <a href='' class='icon-search'>搜尋</a>
            <a href='' class='icon-menu'>選單</a>
            <a href='' class='icon-home'>首頁</a>
            <a href='' class='icon-search'>搜尋</a>
            <a href='' class='icon-menu'>選單</a>
          </div>

          <div class='title'>次選單</div>
          <div class='group'>
            <a href='' class='icon-home'>首頁</a>
            <a href='' class='icon-search'>搜尋</a>
            <a href='' class='icon-menu'>選單</a>
            <a href='' class='icon-menu'>選單</a>
          </div>

        </div>
        <div class='wrapper_right'>s</div>
      </div>
    </div>

    <!-- <?php echo isset ($content) ? $content : ''; ?> -->
  </body>
</html>