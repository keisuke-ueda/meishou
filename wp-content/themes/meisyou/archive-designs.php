<?php
/*
Template Name: デザインページ
*/
?>

<?php get_header(); ?>
  <main class="container mt-5">
    <div class="row text-center text-light border-bottom border-2 animate__animated animate__zoomInDown animate__delay-1s">
      <h1>デザインイメージ集</h1>
    </div>

    <?php
    global $post;
    $paged = get_query_var('paged') ?: 1; //ページネーションを使いたいなら指定
    $args = array(
    'paged' => $paged, //ページネーションを使いたいなら指定
    'posts_per_page' => -1, //-1で全ての投稿ページを表示
    'post_status' => 'publish', //公開の記事だけ
    'post_type' => 'designs', //カスタム投稿slag
    'orderby' => 'date', //日付を出力する基準
    'order' => 'ASC' //表示する順番（逆はASC）
    );
    $myposts = get_posts( $args );
    if($myposts ) : foreach( $myposts  as $post ) : setup_postdata($post);?>
      <a href="<?php the_permalink();?>" class="design">
      <div class="row mt-5 pb-5 align-items-center border-bottom border-2 animate__animated animate__zoomIn animate__delay-2s">
        <div class="col-md-6">
          <h3 class="text-light text-center border-bottom"><?php the_title();?></h3>
          <h5 class="text-light"><?php the_excerpt();?></h5>
        </div>
        <div class="col-md-6 d-flex justify-content-center border ">
          <?php if(has_post_thumbnail()) {?>
            <?php the_post_thumbnail() ;?>
          <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/img/logo1.png" class="mx-auto d-block" width="50%" height="50%" alt="..." />
          <?php } ?>
        </div>
      </div>
      </a>
    <?php endforeach;?>
    <?php else : //記事が無い場合?>
    <div class="result　text-light">
      <p>記事がまだありません</p>
    </div>

    <?php
      wp_reset_postdata();
    endif; ?>
    
  </main>
<?php get_footer(); ?>