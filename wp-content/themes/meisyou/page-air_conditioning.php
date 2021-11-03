<?php
/*
Template Name: 空調工事
*/
?>
<?php get_header(); ?>

<main class="text-light container animate__animated animate__fadeInUpBig animate__delay-2s">
  <h2 class="article-title text-center mt-3">空調工事</h2>
  <div class="col-md-8 mx-auto border mt-5">
    <img src="<?php echo get_template_directory_uri();?>/img/空調.png" class="mx-auto d-block" width="80%" />
  </div>

  <article class="article">
      <div class="col-md-8 mx-auto mt-3">
        <h5 class="mb-5">春夏秋冬快適に過ごすためには空調管理が大切です<br>
        空調機にもいろんな種類があるのはご存じでしたか？<br>
        空調機のサイズは<span class="text-warning">単に床面積(畳数)だけで選定すると失敗することも</span>あるので、心配なときはご相談下さい</h5>
      </div>

      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">壁掛けエアコン</h5>
        <img src="<?php echo get_template_directory_uri();?>/img/壁掛けエアコン.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">天吊りエアコン</h5>
        <img src="<?php echo get_template_directory_uri();?>/img/天吊りエアコン.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">アネモ吹出し口</h5>
        <img src="<?php echo get_template_directory_uri();?>/img/アネモ.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">業務用エアコン</h5>
        <img src="<?php echo get_template_directory_uri();?>/img/業務用エアコン.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
  </article>
</main>

<?php get_footer();?>
