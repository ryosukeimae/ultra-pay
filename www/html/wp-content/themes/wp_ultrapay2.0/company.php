<?php
/*
template Name: 会社概要
*/
?>

  <?php get_header(); ?>

  <main> 
    <!--Top Visual-->
    <section class="sub_top company_top_visual">
      <div class="inner">
        <h1>おかねを、かるく。</h1>
      </div>
    </section>
    <!--//Top Visual-->
    
    <section class="company_detail">
      <div class="sub_spec pc_inner inner">
        <h2 class="sub_section_title text_center">会社概要</h2>
        <table class="company_contents">
            <tr>
              <th>社名</th>
              <td>株式会社ULTRA</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>竹谷 直彦</td>
            </tr>        
            <tr>
              <th>創業</th>
              <td>2018年12月25日</td>
            </tr>             
            <tr>
              <th>資本金</th>
              <td>1億5,000万円（資本準備金を含む）</td>
            </tr>             
             <tr>
              <th>事業内容</th>
              <td>様々な産業向けのHR TechとFinTechサービスの提供</td>
            </tr>            
            <tr>
              <th>事業者登録</th>
              <td>前払式支払手段（第三者型）関東財務局第00727号</td>
            </tr>                    
        </table>
      </div>
    </section>        
    
    
    <!--プレスリリース-->
    <section class="bg_gray home_news">
      <div class="inner">
        <h2 class="home_news_title">プレスリリース</h2>
        <div class="home_news_container pc_inner">
          
          <?php
            $information= get_posts( array(
              'posts_per_page' => 3, //表示件数
              'post_type' => array('press') //カスタム投稿名              
            ));
            if( $information):
          ?>
          <ul>
            <?php
              foreach( $information as $post ):
              setup_postdata( $post );
            ?>
            <li class="home_news_one">
              <a href="<?php the_permalink(); ?>">
                <time class="post-news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>              
                <p><?php the_title(); ?></p>
              </a>
            </li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
          </ul>
          <?php else: ?>
          <p>表示できる情報はありません。</p>
          <?php endif; ?>
          
          <a class="home_news_more" href="<?php echo esc_url( home_url( '/' ) ); ?>press">もっとみる <span>&gt;</span></a>
        </div>
      </div>
    </section>
    <!--//プレスリリース-->    
    
    <section class="sub_spec inner pc_inner">
      <h2 class="home_news_title text_center">Message</h2>
      <div class="company_message">
        <h3 class="company_message_top">「働いて」ー「対価を受け取る」</h3>
        <p>何気なく繰り返されていることですが、この中には”日々の生活" や “未来” といった「ヒト」の "価値観" が詰まっています。</p>
        <p>初めて貰うバイト代やお給料の喜びには、いつまでも忘れられない思い出があったり、憧れがあったりすると思います。</p>
        <p>そんなシーンをもっと多く、もっと嬉しいものにできるよう、私たちは「働く」と、「おかね」の課題を「Fin Tech」で解決してまいります。</p>
        <p>そして "一人ひとりの異なる価値観" という "多様性" を大切にしつつ、「働く」を、もっと「おかね」につなげていきます。</p>
        <p>「働いたお金をすぐにスマホで受け取り、使える」。「働いた実績に応じて欲しいものが先に買える」。もしかすると、できそうで今はできてない小さな変化が、一人ひとりの未来を少しだけ変えることになるかもしれません。</p>

        <p>一緒にそんな未来をつくっていければ嬉しいです。</p>
        <p class="company_sign">代表取締役社長　竹谷 直彦</p>
      </div>
    </section>
    
    
  </main>
  <?php get_footer(); ?>
