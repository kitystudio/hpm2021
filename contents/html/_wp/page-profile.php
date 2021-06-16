<?php
/*
Template Name: Prof
*/

// 必要なオブジェクトを用意する
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query( array(
    'post_type' => 'page',
    'nopaging'  => 'true'
) );

// 親とする固定ページをオブジェクトとして取得
$profile = get_page_by_title( 'profile' );

// すべての固定ページから profile の子ページを探す
$profile_children = get_page_children( $profile->ID, $all_wp_pages );

// WP から取得した結果をブラウザへ表示する
$title = array_column( $profile_children, 'post_title' );
$content = array_column( $profile_children, 'post_content' );
$profile = array_combine( $title, $content );
//var_dump($title);
//var_dump($content);
//var_dump($profile);

foreach ($profile as $year => $cont) {
  echo '<ul class="year">'.PHP_EOL;
  echo '<li class="title">'.$year.'</li>'.PHP_EOL;
  echo '<li class="personal">'.$cont.'</li>'.PHP_EOL;
  echo '</ul>'.PHP_EOL;
}
