<?php
/*
インデックスページ
*/

if(have_posts()): while(have_posts()): the_post();?>
<ul>
  <li><a href="<?=the_permalink()?>"><?=the_title()?></a></li>
</ul>
<?php
endwhile; endif;