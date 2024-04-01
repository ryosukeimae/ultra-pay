<?php get_header(); ?>

<main>
  
  <section class="news_all inner pc_inner">
    <?php while (have_posts()): the_post(); ?>  
      <?php the_category(' '); ?>  
      <h2 class="news_title"><?php the_title(); ?></h2>  
      <div class="news_each">    
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>   
        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </section>
  
</main>
  
<?php get_footer(); ?>