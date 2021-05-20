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
  <meta name="description" content="大阪でデザインするhpmeisterのホームページ。ウェブやグラフィック等のデザインが可能。">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@hpmeister">
  <meta property="og:url" content="https://hpmeister.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="hpmeister.com">
  <meta property="og:description" content="大阪でデザインするhpmeisterのホームページ。ウェブやグラフィック等のデザインが可能。">
  <meta property="og:image" content="https://hpmeister.com/site.png">
  <meta name="msapplication-TileImage" content="https://hpmeister.com/site.png">
  <meta name="msapplication-TileColor" content="#000">
  <title>hpmeister.com</title>
  <link rel="stylesheet" href="/_assets/css/main.css">
  <link rel="icon" href="https://hpmeister.com/site.png" sizes="32x32" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="https://hpmeister.com/site.png">
  <link rel="canonical" href="https://hpmeister.com">
</head>

<body>
  <div class="thecontent">
    <header>
      <div class="logo"><h1>大阪でデザインするhpmeisterのホームページ</h1><a href="https://hpmeister.com/"><img src="/_assets/logo.svg" alt="hpmeister logo" width="160"></a></div>
      <nav>
        <img src="/_assets/menu.svg" alt="" width="30" class="menutoggle">
        <div class="menu">
          <ul>
            <li><a href="#news">page top</a></li>
            <li><a href="#service">service</a></li>
            <li><a href="#prof">profile</a></li>
            <li><a href="#contact">contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <section id="news">
      <div class="wrapper">
        <h2 class="sectiontitle">information</h2>
<?php // WP 固定ページ（Information）
  readfile ('https://memo.hpmeister.com/information/');
?>
      </div>
    </section>
    <section id="blog">
      <div class="wrapper">
        <h2 class="sectiontitle">blog</h2>
<?php //WP 投稿ページ
  readfile ('https://memo.hpmeister.com/');
?>
      </div>
    </section>
    <section id="service">
      <div class="wrapper">
        <h2 class="sectiontitle">services</h2>
        <p>hpmeisterが提供しているサービスをご紹介します。</p>
      </div>
      <div class="serviceswrapper">
<?php // GoogleSpreadsheet
  $result = file('https://docs.google.com/spreadsheets/d/e/2PACX-1vQT1GF1SLIz-_IB4-LV2LWCvNrgj6W7vCVwnzJGVSPxygdMlPALrSmqhF6TxKo0C5CItx8MKB3YdYWl/pub?output=csv');
  for ( $i = 1; $i < sizeof( $result ); $i++ ) {
    list($id, $service, $description, $more, $disp) = explode( ",", $result[ $i ] );
    if ($disp == 1) {
?>
        <div class="servicemember">
          <h3 class="title"><?=$service?></h3>
          <p class="description"><?=$description?></p>
          <button class="servicedetail_button magnifyBtn" title="<?=$service?>を詳しく見る">read more</button>
<?php
      include_once '_assets/'.$more;
?>
        </div>
<?php
    }
  
  }
?>
      </div>
    </section>
    <section id="prof">
      <div class="wrapper">
        <h2 class="sectiontitle">profile</h2>
        <p>hpmeisterの経歴とプロフィールです。</p>
      </div>
      <div class="profwrapper">
<?php // 固定ページ（Profile）
  readfile ('https://memo.hpmeister.com/profile/');
?>
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
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="/_assets/main.js"></script>
</body>

</html>
