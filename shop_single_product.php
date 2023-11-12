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
    <link href="assets/lib/lightbox/dist/css/lightbox.min.css" rel="stylesheet"/>
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
              <li class="button"><a class="button" href="index.php" data-toggle="onclick">Inicio</a>
                <ul class="dropdown-menu">
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
              
<?php

  

  if (isset($_SESSION['codigoRol'])){

  

  if ($_SESSION['codigoRol'] == 1){

    ?>

    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Características</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="forms.php"><i class="fa fa-check-square-o"></i>Formularios</a></li>
                </ul>
              </li>

    <?php
  } 
  
} else {

}

              
?>

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
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 mb-sm-40">

                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="assets/images/lugares/alahambra.jpg" ><img src="assets/images/lugares/alahambra.jpg" alt="Gallery Image 1"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-picture"></span></div>
                      </div></a></div>
                </div>

                <ul class="product-gallery">

                  <li><div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="assets/images/lugares/alahambra2.jpg" ><img src="assets/images/lugares/alahambra2.jpg" alt="Gallery Image 1"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-picture"></span></div>
                      </div></a></div>
                </div></li>

                  <li><div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="assets/images/lugares/alahambra3.jpg" ><img src="assets/images/lugares/alahambra3.jpg" alt="Gallery Image 1"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-picture"></span></div>
                      </div></a></div>
                </div></li>

                  <li>
                    <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="assets/images/lugares/alahambra4.jpg" ><img src="assets/images/lugares/alahambra4.jpg" alt="Gallery Image 1"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-picture"></span></div>
                      </div></a></div>
                </div>
              </li>

                </ul>
              </div>

              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="product-title font-alt">ALAHAMBRA</h1>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews">Opiniones de clientes</a>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="price font-alt"><span class="amount">$220.509,98</span></div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="description">
                      <p>La Alhambra es un complejo monumental sobre una ciudad palatina andalusí situada en Granada, España. Consiste en un conjunto de antiguos palacios, jardines y fortalezas  inicialmente concebido para alojar al emir y la corte del reino Nazarí, más tarde como residencia de los reyes de Castilla y de sus representantes. Su singularidad artística radica en los interiores de los palacios nazaríes, cuya decoración está entre las cumbres del arte andalusí, así como en su localización y adaptación, que generó un paisaje nuevo pero totalmente integrado con la naturaleza preexistente. Además, alberga un museo de arte andalusí, la pinacoteca principal de la ciudad y un antiguo convento convertido en parador nacional.</p>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-4 mb-sm-20">
                    <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required"/>
                  </div>
                  <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">Add To Cart</a></div>
                </div>
                </div>
              </div>
            </div>
            <div class="row mt-70">
              <div class="col-sm-12">
                <ul class="nav nav-tabs font-alt" role="tablist">
                  <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Descripción</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <p>La Alhambra es uno de los monumentos más visitados de Europa. Esto, unido a las lógicas restricciones de acceso por motivos de conservación, hace que no siempre sea sencillo conseguir una entrada. Es altamente recomendable reservar con antelación y conocer el sistema de acceso y visita del conjunto monumental.</p>
                    <p>Todos los domingos del año el acceso al monumento es gratuito para ciudadanos de la provincia que puedan acreditarlo.

                      Las entradas podrán retirarse en la Oficina del Corral del Carbón en calle Mariana Pineda s/ n.
                      
                      Horario: Domingos 14.00-18.00 h. en invierno; 14.00-20.00 h. en verano.</p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Related Products</h2>
              </div>
            </div>
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-11.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-12.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-13.jpg" alt="Men’s Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
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
    <script src="assets/lib/lightbox/dist/js/lightbox.min.js"></script>
  </body>
</html>