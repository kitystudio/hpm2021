<?php
/*
  Template Name: top
  common menu screen
*/

$paged = (int) get_query_var('paged');
$args = array(
 'posts_per_page' => 5,
 'paged' => $paged,
 'orderby' => 'post_date',
 'order' => 'DESC',
 'post_type' => 'post',
 'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
  echo '<aside class="recent">';
  echo '<h3 class="menu_title">最新の投稿</h3>';
  echo '<ul class="recent">';

  while ( $the_query->have_posts() ) : $the_query->the_post();
    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>'.PHP_EOL;
  endwhile;

  echo '</ul>';
  echo '</aside>';
endif;
echo '<p class="text_righted"><a href="https://hpmeister.com/blog.php">すべての投稿の一覧ページを表示する &raquo;</a></p>';
wp_reset_postdata();

get_template_part( 'inc/tagcloud' );
echo '<aside class="search">';
echo '<h3 class="menu_title">検索フォーム</h3>';
get_search_form();
echo '</aside>';