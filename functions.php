<?php

function mytheme_setup()
{
  add_theme_support('wp-block-styles'); //(c)のcss有効化
  add_theme_support('responsive-embeds'); //縦横比を維持したレスポンシブ
  add_theme_support('editor-styles'); //(E)エディタ用のCSS
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');
function mytheme_enqueue()
{
  // Google Fontsを読み込み
  wp_enqueue_style(
    'myfonts',
    'https://fonts.googleapis.com/css?family=Josefin+Sans:300,700&display=swap',
    array(),
    null
  );
  // Dashiconsを読み込み
  wp_enqueue_style(
    'dashicons'
  );
  if (is_page('about')) {
    wp_enqueue_style(
      'aboutpage',
      get_template_directory_uri() . '/page-about.css',
      array(),
      '1.0.0'
    );
  } else if (is_page('contact')) {
    wp_enqueue_style(
      'contactpage',
      get_template_directory_uri() . '/page-contact.css',
      array(),
      '1.0.0'
    );
  } else {
    wp_enqueue_style(
      'mytheme-style',
      get_stylesheet_uri(),
      array(),
      filemtime(get_theme_file_path('style.css'))
    );
  }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

/* ---------- カスタム投稿worksを追加 ---------- */
add_action('init', 'create_post_type');

function create_post_type()
{

  register_post_type( //カスタム投稿
    'works',
    array(
      'label' => '仕事・実績',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy( //カテゴリー:デフォルトはカテゴリの概念がない
    'works-cat',
    'works',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy( //タグ
    'works-tag',
    'works',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}
/* ---------- カスタム投稿worksを追加 ---------- */
add_action('init', 'create_post_type_news');

function create_post_type_news()
{

  register_post_type( //カスタム投稿
    'news',
    array(
      'label' => '更新情報等',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy( //カテゴリー:デフォルトはカテゴリの概念がない
    'news-cat',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy( //タグ
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}
/*news欄ショートコード */
function news_list()
{
  $args = array( //欲しい投稿を検索
    'posts_per_page' => 3,  // 一覧に表示させる件数
    'post_type' => 'news',  // お知らせのスラッグ
    'post_status' => 'publish', //publishは公開済
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $the_query = new WP_Query($args); //現在とは違うクエリから投稿を取得
  if ($the_query->have_posts()) {
    $output = "<div class='news-content'>"; //.=はphpの文字連結
    $output .= "<h1 class='news-content-title'>News!</h1>";
    $output .= '<ul>';
    while ($the_query->have_posts()) :
      /*変数 */
      $the_query->the_post();
      $title = get_the_title();
      $date = get_the_date("Y/m/d");
      $date_year = get_the_date('Y');
      $date_m_d = get_the_date('m/d');
      $url = get_permalink();
      /*出力部 */
      $output .= '<li class="news-content-item">';
      $output .= '<a href="' . $url . '">';
      $output .= '<time datetime=' . $date . '><span>' . $date_year . '</span><span class="news-date">' . $date_m_d . '</span></time><h3>' . $title . '</h3>';
      $output .= '</a>';
      $output .= '</li>';
    endwhile;
    $output .= '</ul>';
    $output .= "</div>";
  }
  return $output;
}
add_shortcode('news_content', 'news_list');//(コード名,コールバック関数)