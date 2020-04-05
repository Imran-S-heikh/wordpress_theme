<?php /* Template Name: Cart */ ?>
<h3>robin here</h3>
<?php get_header(); ?>

<?php
  if(have_posts()):
    while (have_posts()) : the_post();
      ?><p><?php the_content(); ?></p><?php
    endwhile;
  endif;
?>

<h1>hi</h1>
<?php get_footer(); ?>
