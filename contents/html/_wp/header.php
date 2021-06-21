<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ7RN5NQ82"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BJ7RN5NQ82');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@hpmeister">
  <meta property="og:type" content="article">
<?php if (is_single()) {
  echo '<meta name="description" content="hpmeisterの開発メモ（'.get_the_title().'）">'.PHP_EOL;
  echo '<meta property="og:title" content="'.get_the_title().' | hpmeister.com">'.PHP_EOL;
  echo '<meta property="og:description" content="hpmeisterの開発メモ（'.get_the_title().'）">'.PHP_EOL;
  echo '<meta property="og:url" content="'.get_permalink().'">'.PHP_EOL;
  
} elseif (is_404()) {
  echo '<meta name="description" content="hpmeisterの開発メモ">'.PHP_EOL;
  echo '<meta property="og:title" content="Not Found | hpmeister.com">'.PHP_EOL;
  echo '<meta property="og:description" content="hpmeisterの開発メモ">'.PHP_EOL;
  echo '<meta property="og:url" content="https://hpmeister.com">'.PHP_EOL;

} elseif (is_search()) {
  echo '<meta name="description" content="hpmeisterの開発メモ">'.PHP_EOL;
  echo '<meta property="og:title" content="';
  echo wp_title('', false);
  echo ' | hpmeister.com">'.PHP_EOL;
  echo '<meta property="og:description" content="hpmeisterの開発メモ">'.PHP_EOL;
  echo '<meta property="og:url" content="';
  echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].'/?'.$_SERVER['QUERY_STRING'];
  echo '">'.PHP_EOL;
  echo '<link rel="canonical" href="';
  echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'];
  echo '">'.PHP_EOL;

} else {
  echo '<meta name="description" content="hpmeisterの開発メモ（'.single_cat_title('', false).'のTAGがついたページ）">'.PHP_EOL;
  echo '<meta property="og:title" content="'.single_cat_title('', false).' | hpmeister.com">'.PHP_EOL;
  echo '<meta property="og:description" content="hpmeisterの開発メモ（'.single_cat_title('', false).'のTAGがついたページ）">'.PHP_EOL;
  // 参考サイト https://bambooworks.co/wordpress-category-url-outside-loop/
  $cat = get_the_category(); //現在のページのカテゴリ―を取得
  $cat_id = $cat[0] -> cat_ID; //取得したカテゴリーのIDを取り出す
  echo '<meta property="og:url" content="'.get_category_link($cat_id).'">'.PHP_EOL;
  echo '<link rel="canonical" href="'.get_category_link($cat_id).'">'.PHP_EOL;
} ?>
  <meta property="og:image" content="https://hpmeister.com/site.png">
  <meta name="msapplication-TileImage" content="https://hpmeister.com/site.png">
  <meta name="msapplication-TileColor" content="#000">
  
  <link rel="stylesheet" href="https://hpmeister.com/_assets/css/main.css">
  <link rel="stylesheet" href="https://hpmeister.com/_assets/css/blog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous">
  <link rel="icon" href="https://hpmeister.com/site.svg" sizes="32x32" type="image/svg+xml">
  <link rel="apple-touch-icon-precomposed" href="https://hpmeister.com/site.png">
  
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ7RN5NQ82"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BJ7RN5NQ82');
  </script>
</head>
<body>
  <div class="thecontent">
    <header>
      <div class="logo"><a href="https://hpmeister.com/"><img src="https://hpmeister.com/_assets/logo.svg" alt="hpmeister logo" width="160"></a></div>
      <nav><img src="https://hpmeister.com/_assets/menu.svg" alt="" width="30" class="menutoggle"></nav>
    </header>
    <section id="blogentry">
      <div class="wrapper">