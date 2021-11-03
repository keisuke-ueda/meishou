<?php
/*
Template Name: 原状回復工事
*/
?>
   <?php get_header(); ?>

<main class="text-light container animate__animated animate__fadeInUpBig animate__delay-2s">
  <h2 class="article-title text-center mt-3">原状回復工事</h2>
  <div class="col-md-8 mx-auto border mt-5">
    <img src="<?php echo get_template_directory_uri();?>/img/原状回復.png" class="mx-auto d-block" width="90%" />
  </div>

  <article class="article">
      <div class="col-md-8 mx-auto mt-3">
        <h5 class="mb-5">原状回復は、借りていた居室(部屋)を返すときに入ったときと元通りの形に戻すことです<br>
        こちらにかかる費用は、テナント側が出資したり、ビル(居室)管理側側が出資したりと所掌範囲が違っていたりもするので注意しましょう<br>
        <span class="text-warning">C工事</span>と言われる部分は基本的に弊社で工事が可能です</h5>
      </div>
      <div class="container">
        <div class="col-md-12">
        <h5 class="text-center mt-3">工事所掌範囲の違い</h5>
          <table class="table table-dark table-hover">
            <tr>
              <th>種類</th>
              <th>出資社</th>
              <th>工事社</th>
              <th>費用感</th>
            </tr>
            <tr>
              <td>A工事</td>
              <td>ビル(居室)管理側</td>
              <td>指定業者へ依頼</td>
              <td>テナント側は関係ない</td>
            </tr>
            <tr>
              <td>B工事</td>
              <td>テナント側</td>
              <td>指定業者へ依頼</td>
              <td>値段交渉はほぼできない</td>
            </tr>
            <tr>
              <td>C工事</td>
              <td>テナント側</td>
              <td>テナント側が自由に依頼</td>
              <td>値段交渉に応じてくれる所が多いです(弊社もご相談可能です)</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-8 mx-auto mt-5">
        <h5 class="mb-5">原状回復で主にテナント側行う場所は下記のとおりです<br>
        <span class="text-warning">入居した時から左記のことを考慮した</span>ご提案をいたします</h5>
      </div>
      <div class="container">
        <div class="col-md-12">
        <h5 class="text-center mt-3">一般的な原状回復所掌範囲</h5>
          <table class="table table-dark table-hover">
            <tr>
              <th>場所</th>
              <th>内容</th>
            </tr>
            <tr>
              <td>天井</td>
              <td>増設や、変更した照明器具を戻したり、場合によっては空調や消防設備の工事がある</td>
            </tr>
            <tr>
              <td>壁</td>
              <td>新たに作った造作壁や、パーティション等の解体と廃棄がある</td>
            </tr>
            <tr>
              <td>床</td>
              <td>増設したOAフロアの撤去や、床材(タイルカーペット等)をビル(居室)管理側の指定の材料へ変更する</td>
            </tr>
            <tr>
              <td>インフラ系</td>
              <td>各種回線の解約と有線LANや電源ケーブルの撤去</td>
            </tr>
          </table>
          <h6>＊共有スペース(エレベーターエリア等)は、<span class="text-warning">所掌範囲外</span>になることが多いです</h6>
        </div>
      </div>


      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">既存造作物の解体</h5>
       <img src="<?php echo get_template_directory_uri();?>/img/既存造作物の解体1.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">オフィス内の什器、間仕切りの産廃</h5>
       <img src="<?php echo get_template_directory_uri();?>/img/オフィス内の什器.間仕切りの産廃.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
      <div class="col-md-8 mx-auto border mt-5">
        <h5 class="text-center mt-3">木材、鉄骨の産廃.png</h5>
       <img src="<?php echo get_template_directory_uri();?>/img/木材、鉄骨の産廃.png" class="mx-auto d-block mb-2  " width="70%"/>
      </div>
  </article>
</main>

   <?php get_footer();?>
