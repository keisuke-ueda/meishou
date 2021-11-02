<?php get_header(); ?>

      <!-- ピックアップコンテンツ -->
      <main class="bg-light">
        <div class="container">
          <div class="row py-3">
            <?php $top_query = new WP_Query( 'tag=toppickup' ); ?> 
            <?php if ( $top_query->have_posts() ) : ?>
            <?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
              <div class="col-md-4 col-12">
                <div class="bg-white py-3">
                  <div class="pb-3">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
                    <?php else : ?>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img1.png" alt="">
                    <?php endif; ?>
                  </div>
                  <h2 class="h4 px-3 pb-3"><?php the_title(); ?></h2>
                  <div class="text-center">
                  <a href="<?php the_permalink(); ?>"><div class="d-inline-block border p-3 text-secondary">
                      read more
                    </div></a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>

            
            
    

          <div class="row py-3">
            <!--メインコンテンツ-->
              <div class="col-md-8 col-12">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="bg-white py-3 mb-5 text-center">
                  <!--日付-->
                  <p><?php the_time('Y/n/j/'); ?></p>
                  <!--カテゴリ-->
                  <p><?php the_category( ' ' ); ?></p>
                  <!--サムネイル-->
                  <h2 class="h2 px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
                  <!--画像-->
                  <div class="pb-3">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
                    <?php else : ?>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img1.png" alt="">
                    <?php endif; ?>
                  </div>
                  <!--ディスクリプション-->
                  <p　class="test-secondary"><?php the_excerpt(); ?></p>
                  <!--ボタン-->
                  <div class="text-center">
                    <a href="<?php the_permalink(); ?>"><div class="d-inline-block border p-3 text-secondary">
                      read more
                    </div></a>
                  </div>
                </div>
              <?php endwhile; else : ?>
              　　<p>記事がありません。</p>
              <?php endif; ?>

              </div>
              <!--サイドバー-->
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>

        <!--フッター-->
          <?php get_footer(); ?>
        
      </main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>