<?php

/* titleタグの出力 */
add_theme_support('title-tag');

/* 固定ページで抜粋を有効化 */
add_post_type_support('page', 'excerpt');


/* アイキャッチ画像を使用可能にする */
add_theme_support( 'post-thumbnails' );


/*あれこれ一覧ページの抜粋省略文字の変更*/
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/* PHPコードを投稿記事内で呼び出せるようにする */
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('call_php', 'my_php_Include');


/*【プラグインカスタマイズ】Public Post Preview 有効期限変更*/
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
  return 60 * 60 * 24 * 31; // 7 days（秒 x 分 x 時 x 日）
}


/*自動補完リダイレクトを無効化する方法(Public Post PrevieのURLがトップに自動遷移したため)*/
function remove_redirect_guess_404_permalink( $redirect_url ) {
    if ( is_404() )
        return false;
    return $redirect_url;
}
add_filter( 'redirect_canonical', 'remove_redirect_guess_404_permalink' );


/*Wordpress管理画面で管理者アドレス変更完結させる（登録アドレス宛に確認メール不要になる）*/
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
function wpdocs_update_option_new_admin_email( $old_value, $value ) {
update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );


/*ウィジェットが管理画面から登録できるようにする（あれこれランキング表示用）2022.02.17*/
if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'フッターサイドバー',
      'id' => 'sidebar_footer',
      'description' => 'サイドバーウィジェット',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
   ));
}



/*投稿ページに固定ページをショートコードで表示する*/
// [page_scode slug='表示させたいスラッグ名']
function page_content_include($atts) {
	extract(shortcode_atts(array(
		'slug' => 'default'
	), $atts, 'page_scode'));

	ob_start();
	$page_info = get_page_by_path( $slug );
	$page = get_post($page_info);
	ob_end_clean();
	return do_shortcode( $page->post_content );
}
add_shortcode('page_scode', 'page_content_include');




/*****投稿一覧に最終更新日を表示する(20230721) *****/

//１）投稿一覧に列を追加（最終更新日の列を追加）
function add_posts_column($columns) {
    $columns['last_modified']	= '最終更新日';
    return	$columns;
}
add_filter( 'manage_edit-arekore_columns', 'add_posts_column' );
 
//２）値を取得して表示（最終更新日の取得と表示）
function add_posts_column_value($column_name, $post_id) {
    if ( 'last_modified' == $column_name ) {
        $date		= get_the_modified_date('Y年n月j日 g:i A');
        $show_date	= '最終更新日'.'<br />'.$date;
 
        echo	$show_date;
    } 
}
add_action( 'manage_posts_custom_column', 'add_posts_column_value', 10, 2 );

//３）ソート（並べ替え）ができるようにする（最終更新日の並べ替え）
function add_posts_column_sortable( $columns ) {
	$columns['last_modified'] = 'modified';
	return $columns;
}
add_filter( 'manage_edit-arekore_sortable_columns', 'add_posts_column_sortable' );



//RSSにサムネイル出力 2023年11月14日
function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID,'thumbnail') . '</p>' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');


//特殊文字を自動変換するのをやめさせる 2023年11月29日
/*add_filter( 'run_wptexturize', '__return_false' );*/


//RSS出力ファイルの呼び出しをテーマ直下の独自ファイルに置き換える 2023年11月29日
remove_filter('do_feed_rdf', 'do_feed_rdf', 10);
remove_filter('do_feed_rss', 'do_feed_rss', 10);
remove_filter('do_feed_rss2', 'do_feed_rss2', 10);
remove_filter('do_feed_atom', 'do_feed_atom', 10);

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

function custom_feed_rss2( $for_comments ) {
    $template_file = '/feed-rss2' . ( $for_comments ? '-comments' : '' ) . '.php';
    $template_file = ( file_exists( get_stylesheet_directory() . $template_file )
        ? get_stylesheet_directory()
        : ABSPATH . WPINC
        ) . $template_file;
    load_template( $template_file );
}
add_action('do_feed_rss2', 'custom_feed_rss2', 10, 1);
