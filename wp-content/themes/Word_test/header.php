<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>testページです</title>
  </head>
  <body>
      <header>
        <div class="container">
        <?php
            if ( is_home() ) { ?>
                <h1 class="h1 py-3">testページです</h1>
        <?php
            } else {
            ?>
                <div class="h1 py-3">testページです</div>
        <?php  }
        ?>
        </div>
      </header>
      
      <!-- グローバルナビ -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">HOME</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                  $defaults = array(
                    'menu_class'      => 'navbar-nav',
                    'container'       => false,
                    'link_before'     => '<span class="nav-item text-white m-4">',
                    'link_after'      => '</span>',
                    'theme_location'  => 'gloval-navigation',
                  );
                  wp_nav_menu( $defaults );
              ?>
            </div>
          </div>
        </div>
      </nav>