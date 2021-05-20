<?php
/*
検索結果ページ
*/
get_header();

?>
<h1 class="small">検索ワード: <?=the_search_query()?></h1>
<?php
if(have_posts()): while(have_posts()): the_post();
?>
<a class="article-body" href="<?=the_permalink()?>">
  <h2 class="archives-header title"><?=the_title()?></h2>
  <?=the_excerpt()?>
  <span class="linked">「<?=the_title()?>」のパーマリンク &raquo;</span>
</a>
<?php
endwhile;
?>
<aside class="page">
<?php 
get_template_part('inc/paging');
?>
</aside>
<?php else: ?>
  <div class="article-body">
    <p>「<?=the_search_query()?>」を含む投稿はありませんでした。</p>
  </div>
  <aside class="searchform">
    <h3>検索フォーム</h3>
    <?=get_search_form()?>
  </aside>
<?php endif;

get_template_part('inc/tagcloud');

get_footer();