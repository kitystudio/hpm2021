<?php
/*
個別ページ
*/
get_header();

global $post;
$categories = get_the_category();
?>
<div class="article-header">
  <h1 class="title"><?=get_the_title()?></h1>
  <ul class="post-categories">
  <?php
  foreach ($categories as $category) {
    echo '<li><a href="'.esc_url(get_category_link($category->term_id)).'">'.$category->name.'</a></li>';
  }
  ?>
  </ul>
</div>
<div class="date"><?=get_the_date()?></div>
<div class="article-body">
  <?=the_content()?>
</div>
<aside class="comment">
  <h3>Comment</h3>
  <p>
    コメントはTwitterを使います。<br>
    <a href="https://twitter.com/share?url=<?=get_the_permalink()?>&text=@hpmeister" rel="nofollow" target="_blank">Twitterでコメントする</a>
  </p>
</aside>

<?php
get_template_part('inc/tagcloud');

get_footer();