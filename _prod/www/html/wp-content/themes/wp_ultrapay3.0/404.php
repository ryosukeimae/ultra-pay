 <?php
/*
template Name: 404
*/
?>

  <?php get_header(); ?>
  <main> 
 
    <section class="error_404 inner pc_inner">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" alt="404エラー">
      <p>指定されたURLのページが見つかりません。</p>
      <p>ページが移動または削除されたか、URLが間違っている可能性があります。</p>
      <a class="btn_1" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div>トップページ</div>
      </a> 
    </section>
  
  
  </main>
  <?php get_footer(); ?>
