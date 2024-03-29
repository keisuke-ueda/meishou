<?php
// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// デザイン集の投稿
function create_post_design() {
  $exampleSupports = [  // supports のパラメータを設定する配列
    'title',  // 記事タイトル
    'editor',  // 記事本文


    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type( 'designs',  // カスタム投稿ID
    array(
      'label' => 'デザイン',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'menu_icon'     => 'dashicons-admin-appearance', // メニューで使用するアイコン
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか
    )
  );
}
add_action( 'init', 'create_post_design' ); // アクションに上記関数をフックします

// カスタムタクソノミーの追加
function add_design_taxonomy(){
    // デザイン集(カテゴリー)
    register_taxonomy(
        'designs-category', // 1.タクソノミーの名前
        'designs',          // 2.利用する投稿タイプ
        array(            // 3.オプション
            'label' => 'カテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
    // デザイン集(タグ)
    register_taxonomy(
        'designs-tag', // 1.タクソノミーの名前
        'designs',     // 2.利用する投稿タイプ
        array(       // 3.オプション
            'label' => 'タグ', // タクソノミーの表示名
            'hierarchical' => false, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
}
add_action('init', 'add_design_taxonomy');

// トピックの投稿
function create_post_topic() {
  $exampleSupports = [  // supports のパラメータを設定する配列
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type( 'topics',  // カスタム投稿ID
    array(
      'label' => 'トピック',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 6,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか
    )
  );
}
add_action( 'init', 'create_post_topic' ); // アクションに上記関数をフックします

// カスタムタクソノミーの追加
function add_topic_taxonomy(){
    // トピック(カテゴリー)
    register_taxonomy(
        'topics-category', // 1.タクソノミーの名前
        'topics',          // 2.利用する投稿タイプ
        array(            // 3.オプション
            'label' => 'カテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
    // トピック(タグ)
    register_taxonomy(
        'topics-tag', // 1.タクソノミーの名前
        'topics',     // 2.利用する投稿タイプ
        array(       // 3.オプション
            'label' => 'タグ', // タクソノミーの表示名
            'hierarchical' => false, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
}
add_action('init', 'add_topic_taxonomy');

// サムネイル画像をカスタム投稿タイプに反映させる
add_theme_support( 'post-thumbnails' );

/*【出力カスタマイズ】検索結果のタイトルをカスタマイズ */
function wp_search_title($search_title){
  if(is_search()){
    $search_title = '「'.get_search_query().'」の検索結果';
  }
  return $search_title;
}
add_filter('wp_title','wp_search_title');
