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
              <li class="button"><a class="button" href="index.php" data-toggle="onclick">Inicio</a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="about1.php" data-toggle="dropdown">Conócenos</a>
                <ul class="dropdown-menu">
                      <li><a href="about1.php">Acerca de</a></li>
                      <li><a href="gallery_col_2.php">Galeria</a></li>
                      <li><a href="contact2.php">Contactanos</a></li>
                </ul>
              </li>
              
<?php

  

  if (isset($_SESSION['codigoRol'])){

  

  if ($_SESSION['codigoRol'] == 1){

    ?>

    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-check-square-o"></i>Formularios</a>
                <ul class="dropdown-menu" role="menu">

                  <li><a href="formAerolinea.php">Aerolineas</a></li>
                  <li><a href="formAeropuerto.php">Aeropuertos</a></li>
                  <li><a href="formAvion.php">Aviones</a></li>
                  <li><a href="formPuesto.php">Puestos</a></li>
                  <li><a href="formReserva.php">Reservas</a></li>
                  <li><a href="formUsuario.php">Usuarios</a></li>
                  <li><a href="formVuelo.php">Vuelos</a></li>

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
        <section class="module bg-dark-60 about-page-header" data-background="assets/images/portadas/acercade.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Blue Sky</h2>
                <div class="module-subtitle font-serif">Un buen viajero no tiene planes fijos ni la intención de llegar</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div style="text-align: center;">
                <h4 class="font-alt">Somos una agencia que se preocupa por dar una buena atención</h4><br/>
                <p>Nos encargamos de mostrarte los mejores precios para los viajes que quieras realizar.</p>
                <p>Puedes escribirnos por si tienes alguna queja o inquied y con toda seguridad te respoderemos.</p>
              </div>
            </div>
          </div>
        </section>

        <section class="module" id="alt-features">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Caracteristicas</h2>
                <div class="module-subtitle font-serif">«No vaciles nunca en irte lejos, más allá de todos los mares, de todas las fronteras, de todos los países, de todas las creencias».</div>
              </div>
            </div>
            <div class="row">

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-target"></span></div>
                  <h3 class="alt-features-title font-alt">Calidad</h3>Manejamos aeropuertos con muy buenas instalaciones y excelente atención a el cliente.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools"></span></div>
                  <h3 class="alt-features-title font-alt">Atención</h3>Nos encontramos en diferetntes plataformas digitales con atención a el cliente las 24 horas del día los 7 días de la semana.
                </div>
              </div>

              <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                <div class="alt-services-image align-center"><img src="assets/images/portadas/titan1.jpg" alt="Feature Image"></div>
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                  <h3 class="alt-features-title font-alt">Servicios</h3>Ofrecemos los servicios de reservas de vuelos en distintas aerolineas, atención a el cliente, buenos aviones y los mejores precios para su bolsillo.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                  <h3 class="alt-features-title font-alt">Precios</h3>Tenemos los mejores precios de vuelos para los mejores lugares de el mundo.
                </div>
              </div>
            </div>
          </div>
        </section>

        <hr class="divider-w">
        <section class="module" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Conozca a nuestro equipo</h2>
                <div class="module-subtitle font-serif">Llévate solo los recuerdos, deja solo tus huellas</div>
              </div>
            </div>
            <div class="row1">
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/autores/yamid.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hi all</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Yamid Usme</div>
                    <div class="team-role">Estudiante de programacíón</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/autores/angela.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Good day</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Angela Usme</div>
                    <div class="team-role">Estudiante de programación</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/autores/tata.jpeg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hello</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Tatiana Jiménez</div>
                    <div class="team-role">Estudiante de programación</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                <div class="callout-text font-alt">
                  <h3 class="callout-title">¿Tienes alguna sugerencia?</h3>
                  <p>Escríbenos a nuestro correo</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="callout-btn-box"><a class="btn btn-w btn-round" href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=DmwnWstqxGzRSllSRGKnDrjDspCPjKCZTxLtFPZHktccCXxgXWrCXvCKlwsjQMHvFNcBXKptlqpL">Pulsa aquí</a></div>
              </div>
            </div>
          </div>
        </section>
        <br></br>
        <br></br>

        <section class="module bg-dark-60" data-background="assets/images/section-6.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="video-box">
                  <div class="video-box-icon"><a class="video-pop-up" href="assets/video/BlueSky.mp4"><span class="icon-video"></span></a></div>
                  <div class="video-title font-alt">Presentation</div>
                  <div class="video-subtitle font-alt">Watch the video about our new products</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module" id="services">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Habilidades</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            
              <div class="row multi-columns-row">
                <center>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-lightbulb"></span></div>
                  <h3 class="features-title font-alt">¿Qué ofrecemos?</h3>
                  <p>Nos encaragamos de ofrecer precios a el alcance de su bolsillo.</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-bike"></span></div>
                  <h3 class="features-title font-alt">Atención</h3>
                  <p>Buscamos dar la mejor atención posible a nuestros clientes y nos preocupamos por su comodidad.</p>
                </div>
              </div>
             
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-tools"></span></div>
                  <h3 class="features-title font-alt">Misión</h3>
                  <p>Mejorar la experiencia del cliente al momento de buscar un  buen lugar de visita, cuando busquen sus vuelos, que pueda seleccionar su asiento preferido, realizar pagos de manera sencilla y atender a todas las opiniones posibles.</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-gears"></span></div>
                  <h3 class="features-title font-alt">Visión</h3>
                  <p>Se busca esencialmente que los usuarios que quieran disfrutar de un vuelo cómodo, seguro y rápido, logren encontrar un lugar confiable en el cual buscar los mejores precios y ofertas, como también se desea que los clientes reciban la mejor atención y sean escuchados a través de un servicio de ayuda al usuario.</p>
                </div>
              </div>
            </center>
            </div>
          </div>
          </section>

        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Acerca de Blue Sky</h5>
                  <p>Somos una agencia de viajes que escucha a sus viajeros.</p>
                  <p>Celular: +57 320 338 07 94</p> <p>Correo:<a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=DmwnWstqxGzRSllSRGKnDrjDspCPjKCZTxLtFPZHktccCXxgXWrCXvCKlwsjQMHvFNcBXKptlqpL"> bluesky.tya1@gmail.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Países disponibles</h5>
                  <ul class="icon-list">
                    <li><a href="#">Peru </a></li>
                    <li><a href="#">EE.UU </a></li>
                    <li><a href="#">Italia</a></li>
                    <li><a href="#">Francia</a></li>
                    <li><a href="#">Egipto</a></li>
                  </ul>
                </div>
              </div>
               <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Lugares populares</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/portadas/titan2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Machu picchu</a></div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/portadas/titan3.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Las vegas</a></div>
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
                <p class="copyright font-alt">&copy; 2022&nbsp;<a href="index.html">Blue sky</a>, todos los derechos reservados</p>
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