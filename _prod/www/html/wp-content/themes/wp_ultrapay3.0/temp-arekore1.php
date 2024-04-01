<?php
/*
template Name: あれこれ_テンプレート1_ultra pay カードについて
*/
?><head>
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/pagenavi-css.css">  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-post.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-arekore.css">

</head>


<?php if (have_posts()) : ?>  
  <?php while (have_posts()): the_post(); ?>  

    <article class="arekore_each_wrap">
      <div class="arekore_contents_wrap">
        <?php the_content(); ?>
      </div>     
    </article>

  <?php endwhile; ?>
<?php endif; ?>
