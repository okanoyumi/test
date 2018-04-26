<?php
/**
 * Custom-fields
 */

get_header(); ?>
<?php
$args = array(
        'post_type' => 'news',
        'paged'     => $paged,
);
?>
<?php query_posts( $args ); ?>
<?php
if ( have_posts() ) :
?>
<?php
while ( have_posts() ) :
  the_post();
?>
  <div class="post">
  <h3><?php the_title(); ?></h3>
  <p class="post-date">
<?php the_title( 'Y年m月j日' ); ?></p>
<?php the_content(); ?>
  </div>
<?php endwhile; ?>
<?php else : ?>
  <div class="post">
  <h3>記事がありません</h3>
  <p>表示する記事はありませんでした。</p>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
