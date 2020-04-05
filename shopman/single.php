<?php get_header(); ?>
<?php if (have_posts()): ?>
  <?php
    while (have_posts()) { the_post();
      ?>
        <div class="container">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <h1><?php the_title(); ?></h1>
          <p class="">
            <?php the_content(); ?>
          </p>
        </div>

      <?php
    }

  ?>
<?php endif; ?>
<?php get_footer(); ?>
