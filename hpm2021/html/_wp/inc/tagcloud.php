<aside class="categories">
  <h3>タグクラウド</h3>
  <ul class="tagcloud">
<?php
  $categories = get_categories('pad_counts=1&hide_empty=1');
  foreach( $categories as $category ) {
    echo '<li>';
    echo '<a href="'.get_category_link($category->term_id).'">';
    echo $category->name.'</a></li>'.PHP_EOL;
  }?>
  </ul>
</aside>
