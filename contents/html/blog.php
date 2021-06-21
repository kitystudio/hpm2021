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
  <meta name="description" content="hpmeisterの開発メモ（全ての投稿）">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@hpmeister">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://hpmeister.com/blog.php?blog=<?=$_GET['blog']?>&amp;title=全ての投稿">
  <meta property="og:title" content="全ての投稿 | hpmeister.com">
  <meta property="og:description" content="hpmeisterの開発メモ（全ての投稿）">
  <meta property="og:image" content="https://hpmeister.com/site.png">
  <meta name="msapplication-TileImage" content="https://hpmeister.com/site.png">
  <meta name="msapplication-TileColor" content="#000">
  
  <title>全ての投稿 | hpmeister.com</title>
  <link rel="stylesheet" href="/_assets/css/main.css">
  <link rel="stylesheet" href="/_assets/css/blog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous">
  <link rel="icon" href="https://hpmeister.com/site.png" sizes="32x32" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="https://hpmeister.com/site.png">
  <link rel="canonical" href="https://hpmeister.com">
</head>
<body>
  <div class="thecontent">
    <header>
      <div class="logo"><h1>大阪でデザインするhpmeisterのホームページ</h1><a href="https://hpmeister.com/"><img src="/_assets/logo.svg" alt="hpmeister logo" width="160"></a></div>
      <nav> <img src="/_assets/menu.svg" alt="" width="30" class="menutoggle"> </nav>
    </header>
    <section id="blogentry">
      <div class="wrapper">
        <div class="article-header">
          <h2 class="title">全ての投稿ページ</h2>
        </div>
        <ul class="allposts">
<?php
readfile ('https://memo.hpmeister.com/allposts/');
?>
        </ul>
      </div>
    </section>
    <footer class="title">
      <div class="wrapper">
        <h2>お問い合わせ</h2>
      </div>
    </footer>
    <footer class="content" id="contact">
      <div class="wrapper">
        <ul class="socmed">
          <li><a href="mailto:infodesk@hpmeister.com?body=ここを消したのち、お問い合わせの内容をお書きください" target="_blank"><img src="/_assets/mail.svg" alt="email">email</a></li>
          <li><a href="https://twitter.com/messages/213127725-1669807136" target="_blank"><img src="/_assets/twitter.svg" alt="Twitter">Twitter</a></li>
          <li><a href="https://www.instagram.com/hpmeister/" target="_blank"><img src="/_assets/instagram.svg" alt="Instagram">Instagram</a></li>
          <li><a href="https://github.com/kitystudio/hpmeister2021/issues/new" target="_blank"><img src="/_assets/github.svg" alt="GiyHub">GitHub</a></li>
        </ul>
        <div class="footerbottom">
          <small>Copyright &copy; hpmeister.com All Rights Reserved.</small>
        </div>
      </div>
    </footer>
    <article class="menu">
<?php //WP 投稿ページ
  readfile ( 'https://memo.hpmeister.com/home/' );
?>
    </article>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script>
  <script src="/_assets/main.js"></script>
</body>
</html>