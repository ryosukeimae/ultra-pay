
<!--Footer-->
  <footer class="footer pc_inner">
    <div class="footer_nav_container">
      <nav class="footer_nav">
        <p>ultra pay カードについて</p>
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>spec">カードの種類</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>news">お知らせ</a>
          </li>
          <li>
            <a href="https://support.ultra-pay.co.jp/hc/ja" target="_blank">よくあるご質問</a>
          </li> 
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>arekore">あれこれ</a>
          </li>          
        </ul>
      </nav>
      <nav class="footer_nav">
        <p>運営会社</p>
        <ul>
          <li>
            <a href="https://corp.ultra-pay.co.jp/" target="_blank">会社概要</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>press">プレスリリース</a>
          </li>
        </ul>
      </nav>
      <nav class="footer_nav">
        <p>規約等</p>
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>terms">利用規約</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>policy">プライバシーポリシー</a>
          </li>   
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>settlement">資金決済法に基づく表示</a>
          </li>   
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>antisocial">反社会的勢力への対応基本方針 </a>
          </li>           
        </ul>
      </nav>
    </div>
    <div class="footer_logo_wrap">
      <div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="footer_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ultra_logo.png" alt="ultra pay">
        </a>
      </div>
      <div class="footer_logo_small">
        &copy;2022 ULTRA Inc.
      </div>
    </div>
  </footer>
  <!--//Footer-->
  
	<!--::JS::-->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script><!--jQuery-->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

  <?php wp_footer(); ?>  
</body>
</html>
