
<?php
/*
Template Name: 投稿一覧ページ
*/
?>

<?php get_header(); ?>

    <main class="text-light container animate__animated animate__zoomIn animate__delay-2s">
    <?php
    if ( have_posts() ):
      while ( have_posts() ): the_post();
    ?>
   <a href="<?php the_permalink();?>" class="design">
      <div class="row mt-5 pb-5 align-items-center border-bottom border-2 animate__animated animate__zoomIn animate__delay-2s">
        <div class="col-md-4">
          <h3 class="text-light text-center border-bottom"><?php the_title();?></h3>
          <h5 class="text-light"><?php the_excerpt();?></h5>
        </div>
        <div class="col-md-8 d-flex justify-content-center border">
          <?php if(has_post_thumbnail()) {?>
            <?php the_post_thumbnail('medium_large') ;?>
          <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/img/logo1.png" class="mx-auto d-block" width="50%" height="50%" alt="..." />
          <?php } ?>
        </div>
      </div>
      </a>
    </article>
      <?php endwhile;
    endif;?>


  </main>

<?php get_footer();?>
