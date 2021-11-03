<?php
/*
Template Name: 会社情報
*/
?>

<?php get_header(); ?>

  <main class="container mt-5 animate__animated animate__zoomIn animate__delay-1s">
    <div class="row text-center text-light border-bottom border-2">
      <h1>代表挨拶</h1>
    </div>

    <div class="row mt-5 align-items-center">
      <div class="col-md-6">
        <h5 class="text-light">
          これまで警備、内装、中古家具などの販売などの経験を経て、明彰は2021年3月に事業を立ち上げ、オフィス周りを中心に移転業の窓口やコンサルを行っています。<br />
          本来ならば、お客様が各業者に問い合わせるなど手間がかかってしまう部分も、弊社が代行を行なって「ワンストップ」で手続きができるようにして、
          お客様の負担を最大限減らして、スムーズな作業をさせていただきます。<br />
          よりお客様の負担がないように、かつお客様のご要望に寄り添えるご提案をさせていただきます。
        </h5>
      </div>
      <div class="col-md-6 d-flex justify-content-center border">
        <img src="<?php echo get_template_directory_uri();?>/img/logo1.png" alt="" width="50%" height="50%" />
      </div>
    </div>
    <div class="row text-center text-light border-bottom border-2 mt-5">
      <h1>会社概要</h1>
    </div>
    <div class="row mt-5 align-items-center">
      <div class="col-md-6">
        <table class="company">
          <tr>
            <th>会社名</th>
            <td>明彰</td>
          </tr>
          <tr>
            <th>設立日</th>
            <td>2021年3月1日</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>東京都江戸川区西瑞江3-9-2 ピュアホワイトB201</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>090-4628-1074</td>
          </tr>
        </table>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <img src="<?php echo get_template_directory_uri();?>/img/company.jpg" alt="" width="80%" height="70%" />
      </div>
    </div>
  </main>

<?php get_footer(); ?>