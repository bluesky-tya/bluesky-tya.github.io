<?php session_start();?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Titan | Multipurpose HTML5 Template</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/estilo.css" rel="stylesheet">


    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Blue Sky</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="button"><a class="button" href="index_mp_fullscreen_video_background.php" data-toggle="onclick">Inicio</a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Encabezados</a>
                <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_flexslider.php">Primero</a></li>
                      <li><a href="index_mp_fullscreen_video_background.php">Segundo</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Conócenos</a>
                <ul class="dropdown-menu">
                      <li><a href="about1.php">Acerca de</a></li>
                      <li><a href="service2.php">Servicios</a></li>
                      <li><a href="gallery_col_2.php">Galeria</a></li>
                      <li><a href="contact2.php">Contactanos</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Portafolio</a>
                <ul class="dropdown-menu" role="menu">
                      <li><a href="portfolio_full_width_gutter_col_3.php">Catalogo</a></li>
                      <li><a href="portfolio_single_featured_video1.php">Video</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Características</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="forms.php"><i class="fa fa-check-square-o"></i>Formularios</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Lugares</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="shop_product_col_3.php">Varios</a></li>
                  <li><a href="shop_single_product.php">Producto</a></li>
                  <li><a href="shop_checkout.php">Reservas</a></li>
                </ul>
              </li>

              <a href="login_register.php" class="icon-profile-male" style="position:absolute; color:#FFFFFF; font-size: 27px; padding: 11px; right:01px ; width:10; height:10;"></a>

              <!--li.dropdown.navbar-cart-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
              <!--        span.icon-basket-->
              <!--        |-->
              <!--        span.cart-item-number 2-->
              <!--    ul.dropdown-menu.cart-list(role='menu')-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Short striped sweater-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Colored jewel rings-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                .cart-sub-totle-->
              <!--                    strong Total: $476.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
              <!--li.dropdown-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
              <!--    ul.dropdown-menu(role='menu')-->
              <!--        li-->
              <!--            .dropdown-search-->
              <!--                form(role='form')-->
              <!--                    input.form-control(type='text', placeholder='Search...')-->
              <!--                    |-->
              <!--                    button.search-btn(type='submit')-->
              <!--                        i.fa.fa-search-->
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module bg-dark-30 about-page-header" data-background="assets/images/about_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Buttons</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h4 class="font-alt mb-0">Titan buttons</h4>
                <hr class="divider-w mt-10 mb-20">
                <p class="btn-list">
                  <button class="btn btn-g btn-round" type="submit">Submit</button>&nbsp;
                  <button class="btn btn-d btn-round" type="submit">Submit</button>&nbsp;
                  <button class="btn btn-b btn-round" type="submit">Submit</button>&nbsp;
                  <button class="btn btn-border-d btn-round" type="submit">Submit</button>
                </p>
                <p class="btn-list">
                  <button class="btn btn-g btn-circle" type="submit">Submit</button>&nbsp;
                  <button class="btn btn-d btn-circle" type="submit">Submit</button>&nbsp;
                  <button class="btn btn-b btn-circle" type="submit">Submit</button>&nbsp;
                  <button class="btn btn-border-d btn-circle" type="submit">Submit</button>
                </p>
                <h4 class="font-alt mt-40 mb-0">Titan buttons on dark</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="examples bg-dark">
                  <p class="btn-list mb-0">
                    <button class="btn btn-w btn-round" type="submit">Submit</button>&nbsp;
                    <button class="btn btn-border-w btn-round" type="submit">Submit</button>&nbsp;
                    <button class="btn btn-w btn-circle" type="submit">Submit</button>&nbsp;
                    <button class="btn btn-border-w btn-circle" type="submit">Submit</button>
                  </p>
                </div>
                <h4 class="font-alt mt-40 mb-0">Bootstrap buttons</h4>
                <hr class="divider-w mt-10 mb-20">
                <p class="btn-list">
                  <button class="btn btn-default btn-round" type="button">Submit</button>&nbsp;
                  <button class="btn btn-primary btn-round" type="button">Submit</button>&nbsp;
                  <button class="btn btn-success btn-round" type="button">Submit</button>&nbsp;
                  <button class="btn btn-info btn-round" type="button">Submit</button>&nbsp;
                  <button class="btn btn-warning btn-round" type="button">Submit</button>&nbsp;
                  <button class="btn btn-danger btn-round" type="button">Submit</button>
                </p>
                <p class="btn-list">
                  <button class="btn btn-default btn-circle" type="button">Submit</button>&nbsp;
                  <button class="btn btn-primary btn-circle" type="button">Submit</button>&nbsp;
                  <button class="btn btn-success btn-circle" type="button">Submit</button>&nbsp;
                  <button class="btn btn-info btn-circle" type="button">Submit</button>&nbsp;
                  <button class="btn btn-warning btn-circle" type="button">Submit</button>&nbsp;
                  <button class="btn btn-danger btn-circle" type="button">Submit</button>
                </p>
                <h4 class="font-alt mt-40 mb-0">Buttons size</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="row">
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-g btn-round btn-lg" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-g btn-round" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-g btn-round btn-sm" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-g btn-round btn-xs" type="submit">Submit</button>
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-d btn-circle btn-lg" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-circle" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-circle btn-sm" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-circle btn-xs" type="submit">Submit</button>
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-success btn-round btn-lg" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-success btn-round" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-success btn-round btn-sm" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-success btn-round btn-xs" type="submit">Submit</button>
                    </p>
                  </div>
                </div>
                <h4 class="font-alt mt-40 mb-0">Block buttons</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="row">
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-g btn-round btn-block" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-round btn-block" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-border-d btn-round btn-block" type="submit">Submit</button>
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-g btn-circle btn-block" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-circle btn-block" type="submit">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-border-d btn-circle btn-block" type="submit">Submit</button>
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-primary btn-round btn-block" type="button">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-info btn-round btn-block" type="button">Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-success btn-circle btn-block" type="button">Submit</button>
                    </p>
                  </div>
                </div>
                <h4 class="font-alt mt-40 mb-0">Buttons with icons</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="row">
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-g btn-round" type="submit"><i class="fa fa-cog fa-spin"></i> Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-round" type="submit"><i class="fa fa-comments-o"></i> Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-border-d btn-round" type="submit"><i class="fa fa-child"></i> Submit</button>
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-g btn-circle" type="submit"><i class="fa fa-bullhorn"></i> Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-d btn-circle" type="submit"><i class="fa fa-heart"></i> Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-border-d btn-circle" type="submit"><i class="fa fa-flag"></i> Submit</button>
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <p>
                      <button class="btn btn-primary btn-round" type="button"><i class="fa fa-paper-plane-o"></i> Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-info btn-round" type="button"><i class="fa fa-plug"></i> Submit</button>
                    </p>
                    <p>
                      <button class="btn btn-success btn-circle" type="button"><i class="fa fa-smile-o"></i> Submit</button>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>