<?php get_header(); ?>

  <!--Main-->  
  <main> 
    <?php if (have_posts()) : ?>  
      <?php while (have_posts()): the_post(); ?>  

        <article class="arekore_each_wrap">
          <div>
            <div class="arekore_each_header campaign_each_header">
              <h1><?php the_title(); ?></h1>
              <div class="campaign_each_term"><?php the_field('CampaignTerm'); ?></div>
            </div>
            <div>
              <?php if (has_post_thumbnail()) : ?> 
                <?php the_post_thumbnail('full'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arekore_img/default.png" alt="画像">
              <?php endif; ?>  
            </div>            
          </div>

          <div class="arekore_contents_wrap">

            <?php the_content(); ?>
          
          </div>
        </article>
    
      <?php endwhile; ?>
    <?php endif; ?>
    
    
    
    
    <section class="arekore_each_footer">
      <div class="arekore_each_footer_flex">
        
        <ul class="arekore_sns">
          <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>｜ultra pay カード" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arekore_img/icon_twitter.png" alt="twitter"></a></li>
          <li><a href="http://line.me/R/msg/text/?<?php the_title(); ?>｜ultra pay カード%0D%0A<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arekore_img/icon_line.png" alt="line"></a></li>
          <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>｜ultra pay カード" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arekore_img/icon_facebook.png" alt="facebook"></a></li>
        </ul>
      </div>


      <?php get_template_part('template-parts/apply_campaign'); ?>

      

      
   
  </main>
  <!--//Main-->    

  <?php get_footer(); ?>
