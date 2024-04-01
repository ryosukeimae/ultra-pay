<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  
  <!-- Google Tag Manager -->
  
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MGG3WNF');</script>
  
  <!-- End Google Tag Manager -->
  
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  
  <meta name="description" content="<?php if( has_excerpt() ) {
    echo get_the_excerpt();
  } else {
    echo "ultra pay カードは、審査なしで誰でも持てるプリペイド式Visaカードです。アプリで明細チェックやチャージ方法も選べて簡単便利！";
  } ?>">

  <link rel="start" href="/" title="ultra pay カード ｰ 誰でもVisa">
  <link rel="canonical" href="https://ultra-pay.co.jp/">
  
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon.ico" type="image/vnd.microsoft.icon">  
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon.png">  
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/android-chrome-256x256.png">
  
  
  
  <!--あれこれのOGP-->
  <?php if( is_post_type_archive('arekore') ): ?>
  <meta name="description" content="ultra pay カードの使い方などを紹介する公式ブログです" />
  <link rel="canonical" href="https://ultra-pay.co.jp/arekore/">
  <meta property="og:type" content="article">
  <meta property="og:description" content="ultra pay カードの使い方などを紹介する公式ブログです">
  <meta property="og:title" content="ultra あれこれ | ultra pay カード">
  <meta property="og:url" content="https://ultra-pay.co.jp/arekore/">
  <meta property="og:site_name" content="ultra あれこれ | ultra pay カード">
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@ultra_pay_card">
  <meta property="twitter:description" content="ultra pay カードの使い方などを紹介する公式ブログです">
  <meta property="twitter:title" content="ultra あれこれ | ultra pay カード">
  <meta property="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png">
  <?php elseif( is_archive() ): ?>
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png">  
  <meta property="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png">  
  <?php endif; ?>
  
  
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/pagenavi-css.css">  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-post.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-arekore.css">

  <link rel='dns-prefetch' href='http://www.ajax.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />

<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/rellax.min.js"></script>

  <style>
  @font-face {
    font-family: 'Noto Sans Japanese';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Regular.woff2) format('woff2'),
        url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Regular.woff) format('woff'),
        url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Regular.otf) format('opentype');
  }
  @font-face {
    font-family: 'Noto Sans Japanese';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Medium.woff2) format('woff2'),
        url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Medium.woff) format('woff'),
        url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Medium.otf) format('opentype');
  }
  @font-face {
    font-family: 'Noto Sans Japanese';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Bold.woff2) format('woff2'),
        url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Bold.woff) format('woff'),
        url(//fonts.gstatic.com/ea/notosansjapanese/v6/NotoSansJP-Bold.otf) format('opentype');
  }
  </style>	
 	<?php wp_head(); ?>	
</head>
  
<body <?php body_class(); ?>>
  
<!-- Google Tag Manager (noscript) -->
  
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGG3WNF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

  <!--header-->
  <header class="header">
    <div class="header_container flex_between pc_inner">
      <div class="header_title">
        <a class="header_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ultra_logo.png" alt="ultra pay">
        </a>
        <a class="menu_trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>#">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
      <nav class="header_nav">
        <ul class="header_nav_list">
          <li class="hr_green">
            <a <?php if(is_home() || is_front_page()):?> class="current"<?php endif;?> href="<?php echo esc_url( home_url( '/' ) ); ?>">
               ultra pay カード
            </a>
          </li>
          <li>
            <a <?php if(is_page('spec')):?> class="current"<?php endif;?> href="<?php echo esc_url( home_url( '/' ) ); ?>spec">
              カードの種類
            </a>
          </li>
          <li>
            <a <?php if(is_post_type_archive('news')):?> class="current"<?php endif;?> href="<?php echo esc_url( home_url( '/' ) ); ?>news">
              お知らせ
            </a>
          </li>
          <li>
            <a href="https://support.ultra-pay.co.jp/hc/ja" target="_blank">
              よくあるご質問
            </a>
          </li> 
          <li>
            <a <?php if(is_post_type_archive('arekore')):?> class="current"<?php endif;?> href="<?php echo esc_url( home_url( '/' ) ); ?>arekore">
              あれこれ
            </a>
          </li>          
        </ul>
        <ul class="header_nav_app sp">
          <li>
            <a href="https://ultra-pay.onelink.me/0HFY/819e0ee9" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AppStore_btn.png" alt="App Store">
            </a>
          </li>
          <li>
            <a href="https://ultra-pay.onelink.me/XFUp/bb691600" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/GooglePlay_btn.png" alt="Google Play">
            </a>
          </li>
        </ul>
      </nav> 
    </div>
  </header>  