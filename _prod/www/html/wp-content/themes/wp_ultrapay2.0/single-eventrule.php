<?php get_header(); ?>

<main>
  
  <section class="eventrule_all inner pc_inner">
    <?php while (have_posts()): the_post(); ?>  
      <?php the_category(' '); ?>  
      <div class="eventrule_each">    
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </section>
  
</main>
  
<?php get_footer(); ?>