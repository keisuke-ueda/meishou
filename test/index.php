<?php get_header(); ?>
<body>
   <main class="container">
      <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="<?php echo get_template_directory_uri();?>/img/sample2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h1>最新トピック</h1>
              <p>施工実績</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="<?php echo get_template_directory_uri();?>/img/sample4.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h1>最新トピック</h1>
              <p>施工実績</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="<?php echo get_template_directory_uri();?>/img/sample3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h1>最新トピック</h1>
              <p>施工実績</p>
            </div>
          </div>
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
      <div></div>
    </main>
</body>
<?php get_footer(); ?>