<?php get_header(); ?>

<main>
  <section class="news_all inner pc_inner">  
    <h2>お知らせ</h2>
    <?php if( is_category() ): ?>
      <h3><?php single_cat_title(); ?></h3>
    <?php endif; ?>
    <?php if( have_posts()) : ?>
      <ul class="information-list">
        <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <time class="post-news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
          <?php the_category(' '); ?>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
    <p>現在表示するお知らせはありません。</p>
    <?php endif; ?>
    <?php if( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
  </section>
</main>
  
<?php get_footer(); ?>