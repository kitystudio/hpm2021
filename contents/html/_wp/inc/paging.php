<?php
$big = 9999999999;
$arg = array(
  'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
  'current' => max( 1, get_query_var('paged') ),
  'total'   => $wp_query->max_num_pages,
  'prev_text' => '&lsaquo; 新しい投稿',
  'next_text' => '古い投稿 &rsaquo;'
);
echo paginate_links($arg);