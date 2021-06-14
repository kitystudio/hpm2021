<?php
/*
インデックスページ
*/
?>
<ul>
<?php
if(have_posts()): while(have_posts()): the_post();?>
  <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
  <?php
endwhile; endif;
?>
</ul>