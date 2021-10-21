<?php get_header(); ?>
<body>
   <main class="container">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <?php
         for ($i=0; $i < 2; $i++) {
             # code...
         }
         ?>

     <?php
                    for ($i = 0;$i < count($sliders);$i++) {
                        if ($i == 0) {?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class='active'></li>
                    <?php   } else { ?>

                <?php   }
                    }?>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <?php
         for ($i=0; $i < 2; $i++) {
             # code...
         }
         ?>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">

            <a href="<?php the_permalink();?>">
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

             </div>

          <div class="carousel-item" data-bs-interval="5000">
            <img src="<?php echo get_template_directory_uri();?>/img/sample4.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h1><?php the_title();?></h1>
              <p><?php the_excerpt();?></p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="<?php echo get_template_directory_uri();?>/img/sample3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h1><?php the_title();?></h1>
              <p><?php the_excerpt();?></p>
            </div>
          </div>
         <?php endwhile; endif;?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>

    </main>
</body>
<?php get_footer(); ?>