<?php get_header(); ?>
<?php
    $args = array (
        'post_type'      => 'post', // 投稿タイプ
        'posts_per_page' => 3, // 取得する投稿数
    );
    $myposts = get_posts($args);
    setup_postdata($myposts); //　グローバル変数$postを書き換え
?>
<body>
   <main class="container">
      <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
             <ol class="carousel-indicators">
                <?php
                    for ($myposts = 0;$myposts < 3;$myposts++) {
                        if ($myposts == 0) {?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $myposts; ?>" class='active'></li>
                    <?php   } else { ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $myposts; ?>"></li>
                <?php   }
                    }?>
            </ol>
                 <div class="carousel-inner">
            <?php
             for ($myposts = 0; $myposts < 3; $myposts++) {
            if ($myposts == 0) {?>
            <div class="carousel-item active" data-bs-interval="5000">
            <a href="<?php the_permalink();?>"<?php echo get_the_title();?>>
            <?php if(has_post_thumbnail()) {?>
                <?php the_post_thumbnail() ;?>
             <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/img/sample4.jpg" class="d-block w-100" alt="..." />
                <?php } ?>
            <div class="carousel-caption d-none d-md-block">
              <h1><?php the_title();?></h1>
              <p> <?php the_excerpt();?></p>
            </div>
            </a>

             </div><?php
                        } else {?>
            <div class="carousel-item" data-bs-interval="5000">
            <a href="<?php the_permalink();?>">
            <?php if(has_post_thumbnail()) {?>
                <?php the_post_thumbnail() ;?>
             <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/img/sample2.jpg" class="d-block w-100" alt="..." />
                <?php } ?>
            <div class="carousel-caption d-none d-md-block">
              <h1><?php the_title();?></h1>
              <p> <?php the_excerpt();?></p>
            </div>
            </a>
          </div>
                     <?php } ?>
                <?php } ?>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>


<?php
    wp_reset_postdata(); // $postをグローバル変数に戻す
?>


    </main>
</body>
<?php get_footer(); ?>