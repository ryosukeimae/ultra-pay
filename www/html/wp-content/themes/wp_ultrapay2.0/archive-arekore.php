<?php get_header(); ?>

  <main> 

    <!--Top Visual-->
    <section class="arekore_top_visual">
      <div>
        <h1>ultra あれこれ</h1>
        <p>
          ultra pay カードの使い方などを<br>紹介する公式ブログです
        </p>
      </div>
    </section>
    <!--//Top Visual-->    
    

    <section class="arekore_wrap">
      <div class="article_wrap">

        <?php if (have_posts()) : ?>  
          <?php while (have_posts()): the_post(); ?>   

            <article class="arekore_article">
              <a href="<?php the_permalink(); ?>">
              <div>
                <?php if (has_post_thumbnail()) : ?> 
                  <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/arekore_img/default.png" alt="画像">
                <?php endif; ?>  
              </div>
                
                <div class="arekore_meta">
                  <ul class="post-categories">
                    
                    <?php
                        if ($terms = get_the_terms($post->ID, 'a_category')) {
                            foreach ( $terms as $term ) {
                                echo ('<li>') ;
                                echo esc_html($term->name)  ;
                                echo ('</li>') ;
                            }
                        }
                    ?>
                    
                  </ul>
                  <h2 class="arekore_title"><?php the_title(); ?></h2>
                  <p class="arekore_detail">
                    <?php the_excerpt(); ?>
                  </p>              
                  <time class="arekore_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>	
                </div>
              </a>
            </article>

          <?php endwhile; ?>
        <?php endif; ?>
        
      </div>
      
      <div class="news_next">    
        <?php if( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
      </div>    

    </section>
      
  </main>
 

<?php get_footer(); ?>
