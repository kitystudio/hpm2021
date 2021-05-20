<?php
/*
Template Name: Info
*/
// インフォメーション表示
//  wp_list_pages('title_li=&sort_column=post_date&sort_order=DESC');
// 必要なオブジェクトを用意する
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query( array(
    'post_type' => 'page',
    'nopaging'  => 'true'
) );

// 親とする固定ページをオブジェクトとして取得
$information = get_page_by_title('information');

// すべての固定ページから information の子ページを探す
$informarion_children = get_page_children($information->ID, $all_wp_pages);

// WP から取得した結果をブラウザへ表示する
//echo '<pre>' . print_r( $informarion_children, true ) . '</pre>';
$content = array_column($informarion_children, 'post_content');
//print_r($content);
foreach ($content as $info) {
  echo $info;
}

/*

参考サイト
https://itsakura.com/php-foreach
https://www.php.net/manual/ja/function.array-column.php
https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_page_children

*/