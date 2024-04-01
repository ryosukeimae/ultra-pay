<?php get_header(); ?>

<main>
  <section class="news_all inner pc_inner">  
    <div>
      <h2 class="news_title">
        <?php if(is_post_type_archive('news')) : ?>
          お知らせ一覧
        <?php elseif(is_post_type_archive('press')) : ?>      
          プレスリリース一覧
        <?php endif; ?>     
      </h2>

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



<!--    <section class="news_all inner pc_inner">
      <div class="">
        <h2 class="news_title">お知らせ一覧</h2>
        <ul>
          <li class="news_every">
            <a href="news_each.html">
              <time>2020/03/30</time>
              <p>ホームページをリリースしました</p>
            </a>
          </li>
          
        </ul>
      </div>
      <div class="news_next">
        <p class="current">1</p><p>2</p><p>3</p><p>4</p><p>5</p><p>NEXT</p> 
      </div>
    </section>-->

