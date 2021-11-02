<?php get_header(); ?>
    <main class="container mt-5">
      <div class="row text-center text-light border-bottom border-2">
        <h1>トピック</h1>
      </div>
      <ul>
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <li>
          <a href="<?php the_permalink();?>" class="design">
        <div class="row mt-5 pb-5 align-items-center border-bottom border-2">
          <div class="col-md-6">
            <h3 class="text-light text-center border-bottom"><?php the_title();?></h3>
            <h5 class="text-light">
              <?php the_excerpt();?>
            </h5>
          </div>
          <div class="col-md-6 d-flex justify-content-center border">

            <img src="<?php bloginfo('template_url');?>img/logo1.png" alt="" width="50%" height="50%" />
          </div>
        </div>
      </a>
        </li>
        <?php endwhile; endif;?>
      </ul>

    </main>
   <?php get_footer();?>