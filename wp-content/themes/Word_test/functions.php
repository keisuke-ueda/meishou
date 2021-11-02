<?php
/*サムネイル */
add_theme_support('post-thumbnails');

/*メニュー機能をON */
register_nav_menus(
array(
'gloval-navigation' => 'グローバル', 
'footer-navigation' => 'フッター',
)
);

/*ウィジェット*/
function my_widgets_init() {
	register_sidebar( array(
		'name' => 'サイドバー',
		'id' => 'sideber_widget01',
		'before_widget' => '<div class="container bg-white mb-5 py-5">',
		'after_widget' => '</div>',
	) );

	register_sidebar( array(
		'name' => 'フッターabout',
		'id' => 'footer_widget01',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="d-inline-block py-3 border-bottom border-info">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => 'フッターツイッター',
		'id' => 'footer_widget02',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="d-inline-block py-3 border-bottom border-info">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );