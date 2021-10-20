<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <title>HOME</title>
    <?php wp_head(); ?>
  </head>
  <body class="bg-dark">
    <header>
      <div class="container">
        <div class="d-flex justify-content-center">
          <a href="<?php bloginfo('url')?>/">
            <img src="<?php echo get_template_directory_uri();?>/img/logo1.png" alt="" width="200" height="150" />
          </a>
        </div>
      </div>
      <nav class="container navbar navbar-expand-md navbar-dark bg-dark">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggler"
          aria-controls="navbarToggler"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav">
            <li class="col-md-4 nav-item dropdown">
              <a
                class="nav-link active text-center"
                href="<?php bloginfo('url')?>/company"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle=""
              >
                会社概要
              </a>
            </li>
            <li class="col-md-4 px-1 nav-item dropdown border-start">
               <a
                class="nav-link active text-center"
                href="<?php bloginfo('url')?>/design"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle=""
              >
                デザインイメージ集
              </a>
            </li>
            <li class="col-md-4 nav-item dropdown border-start">
              <a
                class="nav-link active dropdown-toggle text-center"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                移転について
              </a>
              <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">・近距離移転</a></li>
                <li><a class="dropdown-item" href="#">・中距離移転</a></li>
                <li><a class="dropdown-item" href="#">・長距離移転</a></li>
              </ul>
            </li>
            <li class="col-md-3 nav-item dropdown border-start">
              <a
                class="nav-link active dropdown-toggle text-center"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                内装工事
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">・間仕切り工事</a></li>
                <li><a class="dropdown-item" href="#">・弱電工事</a></li>
                <li><a class="dropdown-item" href="#">・照明工事</a></li>
                <li><a class="dropdown-item" href="#">・ネット工事</a></li>
                <li><a class="dropdown-item" href="#">・床工事</a></li>
                <li><a class="dropdown-item" href="#">・空調工事</a></li>
                <li><a class="dropdown-item" href="#">・ブラインド工事</a></li>
                <li><a class="dropdown-item" href="#">・エクステリア工事</a></li>
              </ul>
            </li>
            <li class="col-md-3 nav-item dropdown border-start">
              <a
                class="nav-link active dropdown-toggle text-center"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                現状回復工事
              </a>
              <ul class="col dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">現状回復について</a></li>
                <li><a class="dropdown-item" href="#"></a></li>
                <li><a class="dropdown-item" href="#"></a></li>
              </ul>
            </li>
            <li class="col-md-3 nav-item dropdown border-start">
              <a
                class="nav-link active dropdown-toggle text-center"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                家具販売
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">・オーダーメイド</a></li>
                <li><a class="dropdown-item" href="#">・メーカー品</a></li>
                <li><a class="dropdown-item" href="#">・格安家具</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </body>
</html>