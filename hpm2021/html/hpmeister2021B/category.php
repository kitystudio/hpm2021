<?php
/*
カテゴリーページ
*/
get_header();

$title = single_cat_title('', false);
?>
<h1 class="small">TAG: <?=$title?></h1>
<?php
if(have_posts()): while(have_posts()): the_post();
?>
<a class="article-body" href="<?=the_permalink()?>">
  <h2 class="archives-header title"><?=the_title()?></h2>
  <?=the_excerpt()?>
  <span class="linked">「<?=the_title()?>」のパーマリンク &raquo;</span>
</a>
<?php
endwhile; endif;
?>
<aside class="page">
<?php
get_template_part('inc/paging');
?>
</aside>
<?php
get_template_part('inc/tagcloud');

get_footer();