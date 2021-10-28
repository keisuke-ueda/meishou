<?php
/*
Template Name: 検索結果表示ページ
*/
?>

<?php get_header(); ?>
<main class="container mt-5">

 <div class="row text-center text-light border-bottom border-2 animate__animated animate__zoomInDown animate__delay-1s">
        <h1>検索結果表示画面</h1>
      </div>
      <?php if (have_posts()): ?>
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>

<?php while(have_posts()): the_post(); ?>
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
           <?php endwhile; ?>

<?php else: ?>
検索されたキーワードにマッチする記事はありませんでした
<?php endif; ?>

</main>
 <?php get_footer(); ?>