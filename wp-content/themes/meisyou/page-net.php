<?php
/*
Template Name: ネット工事
*/
?>
   <?php get_header(); ?>

<main class="text-light container animate__animated animate__fadeInUpBig animate__delay-2s">
  <h2 class="article-title text-center mt-3">ネット工事</h2>
  <div class="col-md-8 mx-auto border mt-5">
    <img src="<?php echo get_template_directory_uri();?>/img/ネットワーク1.png" class="mx-auto d-block" width="50%" height="50%" />
  </div>

  <article class="article">
      <div class="col-md-8 mx-auto mt-3">
        <h5 class="mb-5">部屋までの回線工事はNTT様の工事が多いですが、そこから先の工事は私たちのような業者が実施することが多いです<br>
        無線LAN(Wi-Fi)が主力にはなってきていますが、通信が一番安定するのは何といっても有線LANです<br>
        <span class="text-warning">使用用途に分けて適切に環境構築</span>をいたします</h5>
      </div>
      <div class="container">
        <div class="col-md-12">
        <h5 class="text-center mt-3">Wi-Fiの周波数の違い</h5>
          <table class="table table-dark table-hover">
            <tr>
              <th>種類</th>
              <th>特徴</th>
              <th>使用例</th>
            </tr>
            <tr>
              <td>2.4GHz</td>
              <td>扉や壁等の障害物に強く、遠くまで電波が届きやすい周波数帯だが、他の電波の影響を受けやすい</td>
              <td>IoT製品や、その他小規模ネットワーク通信機器</td>
            </tr>
            <tr>
              <td>5.0GHz</td>
              <td>電化製品等の電波に影響を受けることがなく、非常につながりやすく安定している<br>
                  障害物には弱く、長い通信距離には向いていません</td>
              <td>オフィス内のPC(居室内限定)、大容量データの通信</td>
            </tr>
          </table>
        </div>
      </div> 

      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">有線LAN</h5>
       <img src="<?php echo get_template_directory_uri();?>/img/有線LAN.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">無線LAN</h5>
       <img src="<?php echo get_template_directory_uri();?>/img/無線LAN.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
  </article>
</main>

   <?php get_footer();?>
