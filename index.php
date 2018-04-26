<?php
/**
* index
* @package WordPress
 **/

get_header(); ?>

<div class="wrapper">
<?php
if ( have_posts() )
while ( have_posts() ) :
  the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post-main">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <ul class="post">
    <li><?php echo get_the_date(); ?></li>
    <li><?php the_category( ', ' ); ?></li>
    <li><?php the_tags( '' ); ?></li>
  </ul>
<?php the_post_thumbnail(); ?>
<?php the_content( '読む' ); ?>
</div>
</div>
<?php endwhile; ?>


<!-- <section class="toukou1">
  <h2>投稿</h2>
  <div class="container">
    <div class="item">
      <img src="img/1.jpg">
      <p class="pull-right">抜粋が
        ります。抜粋が入ります。抜粋が入ります。</p>
    </div>
    <div class="item">
      <img src="img/1.jpg">
      <p class="pull-right">抜粋が入ります。抜粋が入ります。抜粋が入ります。</p>
    </div>
    <div class="item">
      <img src="img/1.jpg">
      <p class="pull-right">抜粋が入ります。抜粋が入ります。抜粋が入ります。</p>
    </div>
  </div>
</section>

<section class="news">
  <h2>news</h2>
  <div class="container">
    <div class="item">
      <img src="img/n1.jpg">
      <p class="pull-right">抜粋が入ります。抜粋が入ります。抜粋が入ります。</p>
    </div>
    <div class="item">
      <img src="img/n2.jpg">
      <p class="pull-right">抜粋が入ります。抜粋が入ります。抜粋が入ります。</p>
    </div>
    <div class="item">
      <img src="img/n3.jpg">
      <p class="pull-right">抜粋が入り抜粋が入ります。抜粋が入ります。</p>
    </div>

  </div>
</section> -->
<?php get_footer(); ?>
