<?php
/*
  固定ページのデフォルトテンプレート
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://hpmeister.com/_assets/css/main.css">
  <link rel="icon" href="https://hpmeister.com/site.png" sizes="32x32" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="https://hpmeister.com/site.png">
  <?= wp_head()?>
</head>
<body>
  <div class="thecontent">
<?php
the_content();
?>
  </div>
</body>
</html>