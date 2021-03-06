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

    <?php echo render_cell ('site_cell', 'nav');?>


    <div id='container'>
      <div class='wrapper'>
        <div class='wrapper_left '>
          <?php echo render_cell ('site_cell', 'wrapper_left');?>
        </div>
        <div class='cover'></div>
        <div class='wrapper_right'>
          <?php echo isset ($content) ? $content : ''; ?>
        </div>
      </div>
    </div>

    <div id='action' class='icon-plus'></div>

    <?php echo render_cell ('site_cell', 'loading');?>

    <?php echo render_cell ('site_cell', 'footer');?>

  </body>
</html>