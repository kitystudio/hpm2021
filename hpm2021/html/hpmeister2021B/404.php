<?php
// 404
get_header();


echo '<div class="article-header"><h2 class="title">'.wp_title('', false).'</h2></div>';
echo '<div class="article-body">';
echo '<p>URLを手打ちしてませんか？<br>';
echo 'それか、投稿ページのスラッグを変えたかもしれません。</p>';
echo '</div>';

echo '<aside class="searchform">';
echo '<h3>検索フォーム</h3>';
get_search_form();
echo '</aside>';

get_template_part('inc/tagcloud');

get_footer();
