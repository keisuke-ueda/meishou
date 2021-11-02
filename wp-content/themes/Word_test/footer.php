<footer class="bg-white">
          <div class="container">

            <div class="row">
               <!--about-->
              <div class="col-md-4 col-12">
                <?php dynamic_sidebar('footer_widget01'); ?>
              </div>

                <!--ポートフォリオ-->
              <div class="col-md-4 col-12">
                <div class="pb-3">
                  <h4 class="d-inline-block py-3 border-bottom border-info">ポートフォリオ</h4>
                </div>
                  <?php
                    $defaults = array(
                      'menu_class'      => 'list-unstyled',
                      'container'       => false,
                      'link_before'     => '<div class="p-3 border-bottom border-top border-scondary text-scondary">',
                      'link_after'      => '</div>',
                      'theme_location'  => 'footer-navigation',
                    );
                    wp_nav_menu( $defaults );
                  ?>
              </div>

              <!--ツイッター-->
              <div class="col-md-4 col-xs-12">
                <?php dynamic_sidebar('footer_widget02'); ?>
              </div>
            </div>
            
          </div>

          <div class="bg-dark text-white text-center p-3">
            Copylight - Field-UP
          </div>

</footer>