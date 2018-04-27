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
<div class="wrapper-s">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post-main">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <ul class="post">
    <li><?php echo get_the_date(); ?></li>
    <li><?php the_category( ', ' ); ?></li>
    <li><?php the_tags( '' ); ?></li>
  </ul>
<div class="post-img"><?php the_post_thumbnail(); ?></div>
<?php the_content( '読む' ); ?>
</div></div>
<?php endwhile; ?>
</div>


<?php get_footer(); ?>
