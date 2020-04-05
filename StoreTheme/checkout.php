<?php /* Template Name: CheckOut */ ?>
<?php get_header(); ?>

<?php
  if(have_posts()):
    while (have_posts()) : the_post();
      ?><div class="checkout--container"><?php the_content(); ?></div><?php
    endwhile;
  endif;
?>
<h1>hllo</h1>

<?php get_footer(); ?>
