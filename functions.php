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
    if(is_page('about')){
        wp_enqueue_style( 
            'aboutpage', 
            get_template_directory_uri().'/page-about.css', 
            array(), 
            '1.0.0');
    }else if(is_page('contact')){
        wp_enqueue_style( 
            'contactpage', 
            get_template_directory_uri().'/page-contact.css', 
            array(), 
            '1.0.0');
    }else{
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
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(//カスタム投稿
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

  register_taxonomy(//カテゴリー:デフォルトはカテゴリの概念がない
    'works-cat',
    'works',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(//タグ
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
