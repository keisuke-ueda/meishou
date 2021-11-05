<?php get_header(); ?>

    <main class="text-light container animate__animated animate__zoomIn animate__delay-2s">
    <?php
    if ( have_posts() ):
      while ( have_posts() ): the_post();
    ?>
    <div class="thumb col-md-8 mx-auto border py-5 mt-5 ">
      <?php if(has_post_thumbnail()) {?>
         <?php the_post_thumbnail('medium_large') ;?>
      <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri();?>/img/logo1.png" class="mx-auto d-block" width="50%" height="50%" alt="..." />
      <?php } ?>
    </div>
    <article class="col-md-8 mx-auto text-center mt-3">
      <h2><?php the_title(); ?></h2>
      <h4><?php the_content(); ?></h4>
          <?php previous_post_link('%link','古い記事へ'); ?>
          <?php next_post_link('%link','新しい記事へ'); ?>
            <div class="mt-2">
               <a href="<?php bloginfo('url')?>/blog">投稿記事一覧へ</a>
            </div>
    </article>
      <?php endwhile;
    endif;?>


  </main>

<?php get_footer();?>