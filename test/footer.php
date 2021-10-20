<footer class="container mt-5 pb-5 border-top">
      <div class="row">
        <div class="mt-3 col-md-4 text-light bg-dark text-center">
          <h3>会社情報</h3>

          <div class="text-center">
            <p>〒132-0015</p>
            <p>東京都江戸川区西瑞ピュアホワイトB201 <br /></p>
          </div>
        </div>

        <div class="mt-3 col-md-4 text-light bg-dark text-center">
          <h3>お問い合わせ</h3>
          <p>CONTACT</p>
          <div class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri();?>/img/tel.png" alt="" class="tel" width="30px" height="30px" />
            <p>お気軽にお問い合わせください</p>
          </div>
          <h1>090-4628-1074</h1>
          <a href="<?php bloginfo('url')?>/contact" class="btn btn--dark btn--radius">メール送信フォームへ</a>
        </div>
        <div class="mt-3 col-md-4 text-light text-center">
          <p>こちらから検索ください</p>
          <div class="input-group">
            <input type="search" class="form-control me-2" placeholder="テキスト入力欄" />
            <span class="input-group-btn">
              <button type="button" class="btn btn-default">検索</button>
            </span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <?php wp_footer(); ?>
    <!-- swiper設定用js -->
<script>
  let mySwiper = new Swiper('.post-slider', {
    // デフォルトの設定
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 5,
        loop: true
      },
      980: {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
</script>