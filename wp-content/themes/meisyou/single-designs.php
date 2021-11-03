<?php get_header(); ?>

  <main class="text-light container animate__animated animate__fadeInUpBig animate__delay-2s">
    <?php
    if ( have_posts() ):
      while ( have_posts() ): the_post();
    ?>
    <div class="col-md-8 mx-auto border mt-5 ">
      <?php if(has_post_thumbnail()) {?>
        <?php the_post_thumbnail() ;?>
      <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri();?>/img/logo1.png" class="mx-auto d-block" width="50%" height="50%" alt="..." />
      <?php } ?>
    </div>
    <article class="article">
      <h2 class="col-md-8 mx-auto text-center mt-3 "><?php the_title(); ?></h2>
      <div class="article-content col-md-8 mx-auto mt-3">
        <h5><?php the_content(); ?></h5>
      </div>
    </article>

    <?php endwhile;
    endif;?>
  </main>

<?php get_footer();?>