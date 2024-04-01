<?php
/*
template Name: テスト用固定ページ
*/
?>

  <?php get_header(); ?>
  
  <main> 
    <!--サブページ用　Top Visual-->
    <section class="sub_top">
      <div>
        <h1>テストページ</h1>
      </div>
    </section>
    <!--//Top Visual-->
    
    <!--Specの場合-->    
    <section>
      <div class="sub_spec flex_center flex_rv pc_inner">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/degina_img.png" alt="でじなカード">
        </div> 
        <div class="inner">
          <div>
            <h2 class="sub_section_title">でじなカード</h2>
            <p class="sub_section_mg">
              国内外のオンラインショッピングでのみ使えるカード。アプリをインストールすると、すぐに発行できます。
            </p>
          </div>  
          <a class="btn_1" href="#link_spec">
            <div>詳しくはこちら</div>
          </a>
        </div>
      </div>
    </section>
    <section class="bg_gray">
      <div class="sub_spec flex_center pc_inner">
        <div class="">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sotona_img.png" alt="そとなカード">
        </div>
        <div class="inner">
          <div class="">
            <h2 class="sub_section_title">そとなカード</h2>
            <p class="sub_section_mg">
            </p>
          </div>  
          <a class="btn_1" href="#link_spec">
            <div>詳しくはこちら</div>
          </a>
        </div>
      </div>
    </section>
 
    <!--//各カード-->
    
    
    
    
    <!--あれこれのフッター-->
  
    <section class="arekore_each_footer">
      <div class="arekore_each_footer_flex">
        
        <ul class="arekore_category">          
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
        
        <ul class="arekore_sns">
          <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>｜ultra pay カード" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arekore_img/icon_twitter.png" alt="twitter"></a></li>
          <li><a href="http://line.me/R/msg/text/?<?php the_title(); ?>｜ultra pay カード%0D%0A<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arekore_img/icon_line.png" alt="line"></a></li>
          <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>｜ultra pay カード" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arekore_img/icon_facebook.png" alt="facebook"></a></li>
        </ul>
      </div>


<!--ストアリンクの出し分け設定-->
    <?php if ( is_object_in_term($post->ID, 'storelink_fix','non_fix') ): ?>
        <?php get_template_part('template-parts/apply_arekore_wrap_normal'); ?>
     
    <?php else:?>
        <?php get_template_part('template-parts/apply_arekore_wrap_fix'); ?>  
      
    <?php endif; ?>       
      
<!--記事ランキング-->
    <div class="arekore_ranking">
      <h3>よく読まれている記事</h3>
      <?php dynamic_sidebar( 'sidebar_footer' ); ?>
    </div>  
      
      <div class="arekore_footer_caution">
        本Webサイトには、当社が運営しないWebサイトにもリンクされております。それらのWebサイトをご利用される際には、そのWebサイトのご利用条件に従ったご利用をしていただきますようお願いいたします。なお弊社は個別のお取引についてのご質問などにお答えすることはできませんのでご注意下さい。<br>
        本Webサイトに掲載されている情報は、掲載した時点での情報です。掲載した時点以降に変更される場合もありますので、あらかじめご了承ください。
      </div>
 
    </section>

    
     <!--//あれこれ-->       
    
    
    

  </main>
  <?php get_footer(); ?>
