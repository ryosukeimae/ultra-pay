<?php get_header(); ?>

<main>
  <section class="news_all inner pc_inner">  
    <div>
      <h1 class="news_title">
        <?php if(is_post_type_archive('news')) : ?>
          お知らせ一覧
        <?php elseif(is_post_type_archive('press')) : ?>      
          プレスリリース一覧
        <?php endif; ?>     
      </h1>

      <?php if( have_posts()) : ?>
        <ul class="information-list">
          <?php while ( have_posts() ) : the_post(); ?>
          <li class="news_every">
            <a href="<?php the_permalink() ?>">
              <time class="post-news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
              <p><?php the_title(); ?></p>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      <?php else: ?>
        <p>現在表示するお知らせはありません。</p>
      <?php endif; ?>
    </div>
    <div class="news_next">    
      <?php if( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
    </div>    
  </section>
</main>
  
<?php get_footer(); ?>


