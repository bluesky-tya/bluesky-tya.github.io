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
                <h1 class="module-title font-alt mb-0">Icons</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 et-icons">
                <h4 class="font-alt mb-0">Et-line icons</h4>
                <hr class="divider-w mt-10 mb-20"><span class="box1"><span class="icon-mobile" aria-hidden="true"></span> icon-mobile</span><span class="box1"><span class="icon-laptop" aria-hidden="true"></span> icon-laptop</span><span class="box1"><span class="icon-desktop" aria-hidden="true"></span> icon-desktop</span><span class="box1"><span class="icon-tablet" aria-hidden="true"></span> icon-tablet</span><span class="box1"><span class="icon-phone" aria-hidden="true"></span> icon-phone</span><span class="box1"><span class="icon-document" aria-hidden="true"></span> icon-document</span><span class="box1"><span class="icon-documents" aria-hidden="true"></span> icon-documents</span><span class="box1"><span class="icon-search" aria-hidden="true"></span> icon-search</span><span class="box1"><span class="icon-clipboard" aria-hidden="true"></span> icon-clipboard</span><span class="box1"><span class="icon-newspaper" aria-hidden="true"></span> icon-newspaper</span><span class="box1"><span class="icon-notebook" aria-hidden="true"></span> icon-notebook</span><span class="box1"><span class="icon-book-open" aria-hidden="true"></span> icon-book-open</span><span class="box1"><span class="icon-browser" aria-hidden="true"></span> icon-browser</span><span class="box1"><span class="icon-calendar" aria-hidden="true"></span> icon-calendar</span><span class="box1"><span class="icon-presentation" aria-hidden="true"></span> icon-presentation</span><span class="box1"><span class="icon-picture" aria-hidden="true"></span> icon-picture</span><span class="box1"><span class="icon-pictures" aria-hidden="true"></span> icon-pictures</span><span class="box1"><span class="icon-video" aria-hidden="true"></span> icon-video</span><span class="box1"><span class="icon-camera" aria-hidden="true"></span> icon-camera</span><span class="box1"><span class="icon-printer" aria-hidden="true"></span> icon-printer</span><span class="box1"><span class="icon-toolbox" aria-hidden="true"></span> icon-toolbox</span><span class="box1"><span class="icon-briefcase" aria-hidden="true"></span> icon-briefcase</span><span class="box1"><span class="icon-wallet" aria-hidden="true"></span> icon-wallet</span><span class="box1"><span class="icon-gift" aria-hidden="true"></span> icon-gift</span><span class="box1"><span class="icon-bargraph" aria-hidden="true"></span> icon-bargraph</span><span class="box1"><span class="icon-grid" aria-hidden="true"></span> icon-grid</span><span class="box1"><span class="icon-expand" aria-hidden="true"></span> icon-expand</span><span class="box1"><span class="icon-focus" aria-hidden="true"></span> icon-focus</span><span class="box1"><span class="icon-edit" aria-hidden="true"></span> icon-edit</span><span class="box1"><span class="icon-adjustments" aria-hidden="true"></span> icon-adjustments</span><span class="box1"><span class="icon-ribbon" aria-hidden="true"></span> icon-ribbon</span><span class="box1"><span class="icon-hourglass" aria-hidden="true"></span> icon-hourglass</span><span class="box1"><span class="icon-lock" aria-hidden="true"></span> icon-lock</span><span class="box1"><span class="icon-megaphone" aria-hidden="true"></span> icon-megaphone</span><span class="box1"><span class="icon-shield" aria-hidden="true"></span> icon-shield</span><span class="box1"><span class="icon-trophy" aria-hidden="true"></span> icon-trophy</span><span class="box1"><span class="icon-flag" aria-hidden="true"></span> icon-flag</span><span class="box1"><span class="icon-map" aria-hidden="true"></span> icon-map</span><span class="box1"><span class="icon-puzzle" aria-hidden="true"></span> icon-puzzle</span><span class="box1"><span class="icon-basket" aria-hidden="true"></span> icon-basket</span><span class="box1"><span class="icon-envelope" aria-hidden="true"></span> icon-envelope</span><span class="box1"><span class="icon-streetsign" aria-hidden="true"></span> icon-streetsign</span><span class="box1"><span class="icon-telescope" aria-hidden="true"></span> icon-telescope</span><span class="box1"><span class="icon-gears" aria-hidden="true"></span> icon-gears</span><span class="box1"><span class="icon-key" aria-hidden="true"></span> icon-key</span><span class="box1"><span class="icon-paperclip" aria-hidden="true"></span> icon-paperclip</span><span class="box1"><span class="icon-attachment" aria-hidden="true"></span> icon-attachment</span><span class="box1"><span class="icon-pricetags" aria-hidden="true"></span> icon-pricetags</span><span class="box1"><span class="icon-lightbulb" aria-hidden="true"></span> icon-lightbulb</span><span class="box1"><span class="icon-layers" aria-hidden="true"></span> icon-layers</span><span class="box1"><span class="icon-pencil" aria-hidden="true"></span> icon-pencil</span><span class="box1"><span class="icon-tools" aria-hidden="true"></span> icon-tools</span><span class="box1"><span class="icon-tools-2" aria-hidden="true"></span> icon-tools-2</span><span class="box1"><span class="icon-scissors" aria-hidden="true"></span> icon-scissors</span><span class="box1"><span class="icon-paintbrush" aria-hidden="true"></span> icon-paintbrush</span><span class="box1"><span class="icon-magnifying-glass" aria-hidden="true"></span> icon-magnifying-glass</span><span class="box1"><span class="icon-circle-compass" aria-hidden="true"></span> icon-circle-compass</span><span class="box1"><span class="icon-linegraph" aria-hidden="true"></span> icon-linegraph</span><span class="box1"><span class="icon-mic" aria-hidden="true"></span> icon-mic</span><span class="box1"><span class="icon-strategy" aria-hidden="true"></span> icon-strategy</span><span class="box1"><span class="icon-beaker" aria-hidden="true"></span> icon-beaker</span><span class="box1"><span class="icon-caution" aria-hidden="true"></span> icon-caution</span><span class="box1"><span class="icon-recycle" aria-hidden="true"></span> icon-recycle</span><span class="box1"><span class="icon-anchor" aria-hidden="true"></span> icon-anchor</span><span class="box1"><span class="icon-profile-male" aria-hidden="true"></span> icon-profile-male</span><span class="box1"><span class="icon-profile-female" aria-hidden="true"></span> icon-profile-female</span><span class="box1"><span class="icon-bike" aria-hidden="true"></span> icon-bike</span><span class="box1"><span class="icon-wine" aria-hidden="true"></span> icon-wine</span><span class="box1"><span class="icon-hotairballoon" aria-hidden="true"></span> icon-hotairballoon</span><span class="box1"><span class="icon-globe" aria-hidden="true"></span> icon-globe</span><span class="box1"><span class="icon-genius" aria-hidden="true"></span> icon-genius</span><span class="box1"><span class="icon-map-pin" aria-hidden="true"></span> icon-map-pin</span><span class="box1"><span class="icon-dial" aria-hidden="true"></span> icon-dial</span><span class="box1"><span class="icon-chat" aria-hidden="true"></span> icon-chat</span><span class="box1"><span class="icon-heart" aria-hidden="true"></span> icon-heart</span><span class="box1"><span class="icon-cloud" aria-hidden="true"></span> icon-cloud</span><span class="box1"><span class="icon-upload" aria-hidden="true"></span> icon-upload</span><span class="box1"><span class="icon-download" aria-hidden="true"></span> icon-download</span><span class="box1"><span class="icon-target" aria-hidden="true"></span> icon-target</span><span class="box1"><span class="icon-hazardous" aria-hidden="true"></span> icon-hazardous</span><span class="box1"><span class="icon-piechart" aria-hidden="true"></span> icon-piechart</span><span class="box1"><span class="icon-speedometer" aria-hidden="true"></span> icon-speedometer</span><span class="box1"><span class="icon-global" aria-hidden="true"></span> icon-global</span><span class="box1"><span class="icon-compass" aria-hidden="true"></span> icon-compass</span><span class="box1"><span class="icon-lifesaver" aria-hidden="true"></span> icon-lifesaver</span><span class="box1"><span class="icon-clock" aria-hidden="true"></span> icon-clock</span><span class="box1"><span class="icon-aperture" aria-hidden="true"></span> icon-aperture</span><span class="box1"><span class="icon-quote" aria-hidden="true"></span> icon-quote</span><span class="box1"><span class="icon-scope" aria-hidden="true"></span> icon-scope</span><span class="box1"><span class="icon-alarmclock" aria-hidden="true"></span> icon-alarmclock</span><span class="box1"><span class="icon-refresh" aria-hidden="true"></span> icon-refresh</span><span class="box1"><span class="icon-happy" aria-hidden="true"></span> icon-happy</span><span class="box1"><span class="icon-sad" aria-hidden="true"></span> icon-sad</span><span class="box1"><span class="icon-facebook" aria-hidden="true"></span> icon-facebook</span><span class="box1"><span class="icon-twitter" aria-hidden="true"></span> icon-twitter</span><span class="box1"><span class="icon-googleplus" aria-hidden="true"></span> icon-googleplus</span><span class="box1"><span class="icon-rss" aria-hidden="true"></span> icon-rss</span><span class="box1"><span class="icon-tumblr" aria-hidden="true"></span> icon-tumblr</span><span class="box1"><span class="icon-linkedin" aria-hidden="true"></span> icon-linkedin</span><span class="box1"><span class="icon-dribbble" aria-hidden="true"></span> icon-dribbble</span>
                <h4 class="font-alt mt-40 mb-0">FontAwesome icons</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="row fa-icons">
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF042;</i> fa-adjust<span class="muted">[&amp;#xf042;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF170;</i> fa-adn<span class="muted">[&amp;#xf170;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF037;</i> fa-align-center<span class="muted">[&amp;#xf037;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF039;</i> fa-align-justify<span class="muted">[&amp;#xf039;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF036;</i> fa-align-left<span class="muted">[&amp;#xf036;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF038;</i> fa-align-right<span class="muted">[&amp;#xf038;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F9;</i> fa-ambulance<span class="muted">[&amp;#xf0f9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF13D;</i> fa-anchor<span class="muted">[&amp;#xf13d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF17B;</i> fa-android<span class="muted">[&amp;#xf17b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF103;</i> fa-angle-double-down<span class="muted">[&amp;#xf103;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF100;</i> fa-angle-double-left<span class="muted">[&amp;#xf100;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF101;</i> fa-angle-double-right<span class="muted">[&amp;#xf101;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF102;</i> fa-angle-double-up<span class="muted">[&amp;#xf102;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF107;</i> fa-angle-down<span class="muted">[&amp;#xf107;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF104;</i> fa-angle-left<span class="muted">[&amp;#xf104;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF105;</i> fa-angle-right<span class="muted">[&amp;#xf105;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF106;</i> fa-angle-up<span class="muted">[&amp;#xf106;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF179;</i> fa-apple<span class="muted">[&amp;#xf179;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF187;</i> fa-archive<span class="muted">[&amp;#xf187;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0AB;</i> fa-arrow-circle-down<span class="muted">[&amp;#xf0ab;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A8;</i> fa-arrow-circle-left<span class="muted">[&amp;#xf0a8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF01A;</i> fa-arrow-circle-o-down<span class="muted">[&amp;#xf01a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF190;</i> fa-arrow-circle-o-left<span class="muted">[&amp;#xf190;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF18E;</i> fa-arrow-circle-o-right<span class="muted">[&amp;#xf18e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF01B;</i> fa-arrow-circle-o-up<span class="muted">[&amp;#xf01b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A9;</i> fa-arrow-circle-right<span class="muted">[&amp;#xf0a9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0AA;</i> fa-arrow-circle-up<span class="muted">[&amp;#xf0aa;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF063;</i> fa-arrow-down<span class="muted">[&amp;#xf063;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF060;</i> fa-arrow-left<span class="muted">[&amp;#xf060;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF061;</i> fa-arrow-right<span class="muted">[&amp;#xf061;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF062;</i> fa-arrow-up<span class="muted">[&amp;#xf062;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF047;</i> fa-arrows<span class="muted">[&amp;#xf047;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0B2;</i> fa-arrows-alt<span class="muted">[&amp;#xf0b2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF07E;</i> fa-arrows-h<span class="muted">[&amp;#xf07e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF07D;</i> fa-arrows-v<span class="muted">[&amp;#xf07d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF069;</i> fa-asterisk<span class="muted">[&amp;#xf069;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B9;</i> fa-automobile<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1b9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF04A;</i> fa-backward<span class="muted">[&amp;#xf04a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF05E;</i> fa-ban<span class="muted">[&amp;#xf05e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19C;</i> fa-bank<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf19c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF080;</i> fa-bar-chart-o<span class="muted">[&amp;#xf080;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF02A;</i> fa-barcode<span class="muted">[&amp;#xf02a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C9;</i> fa-bars<span class="muted">[&amp;#xf0c9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0FC;</i> fa-beer<span class="muted">[&amp;#xf0fc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B4;</i> fa-behance<span class="muted">[&amp;#xf1b4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B5;</i> fa-behance-square<span class="muted">[&amp;#xf1b5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F3;</i> fa-bell<span class="muted">[&amp;#xf0f3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A2;</i> fa-bell-o<span class="muted">[&amp;#xf0a2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF171;</i> fa-bitbucket<span class="muted">[&amp;#xf171;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF172;</i> fa-bitbucket-square<span class="muted">[&amp;#xf172;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF15A;</i> fa-bitcoin<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf15a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF032;</i> fa-bold<span class="muted">[&amp;#xf032;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E7;</i> fa-bolt<span class="muted">[&amp;#xf0e7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1E2;</i> fa-bomb<span class="muted">[&amp;#xf1e2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF02D;</i> fa-book<span class="muted">[&amp;#xf02d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF02E;</i> fa-bookmark<span class="muted">[&amp;#xf02e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF097;</i> fa-bookmark-o<span class="muted">[&amp;#xf097;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0B1;</i> fa-briefcase<span class="muted">[&amp;#xf0b1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF15A;</i> fa-btc<span class="muted">[&amp;#xf15a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF188;</i> fa-bug<span class="muted">[&amp;#xf188;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1AD;</i> fa-building<span class="muted">[&amp;#xf1ad;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F7;</i> fa-building-o<span class="muted">[&amp;#xf0f7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A1;</i> fa-bullhorn<span class="muted">[&amp;#xf0a1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF140;</i> fa-bullseye<span class="muted">[&amp;#xf140;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1BA;</i> fa-cab<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1ba;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF073;</i> fa-calendar<span class="muted">[&amp;#xf073;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF133;</i> fa-calendar-o<span class="muted">[&amp;#xf133;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF030;</i> fa-camera<span class="muted">[&amp;#xf030;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF083;</i> fa-camera-retro<span class="muted">[&amp;#xf083;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B9;</i> fa-car<span class="muted">[&amp;#xf1b9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D7;</i> fa-caret-down<span class="muted">[&amp;#xf0d7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D9;</i> fa-caret-left<span class="muted">[&amp;#xf0d9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DA;</i> fa-caret-right<span class="muted">[&amp;#xf0da;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF150;</i> fa-caret-square-o-down<span class="muted">[&amp;#xf150;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF191;</i> fa-caret-square-o-left<span class="muted">[&amp;#xf191;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF152;</i> fa-caret-square-o-right<span class="muted">[&amp;#xf152;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF151;</i> fa-caret-square-o-up<span class="muted">[&amp;#xf151;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D8;</i> fa-caret-up<span class="muted">[&amp;#xf0d8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A3;</i> fa-certificate<span class="muted">[&amp;#xf0a3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C1;</i> fa-chain<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF127;</i> fa-chain-broken<span class="muted">[&amp;#xf127;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF00C;</i> fa-check<span class="muted">[&amp;#xf00c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF058;</i> fa-check-circle<span class="muted">[&amp;#xf058;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF05D;</i> fa-check-circle-o<span class="muted">[&amp;#xf05d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF14A;</i> fa-check-square<span class="muted">[&amp;#xf14a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF046;</i> fa-check-square-o<span class="muted">[&amp;#xf046;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF13A;</i> fa-chevron-circle-down<span class="muted">[&amp;#xf13a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF137;</i> fa-chevron-circle-left<span class="muted">[&amp;#xf137;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF138;</i> fa-chevron-circle-right<span class="muted">[&amp;#xf138;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF139;</i> fa-chevron-circle-up<span class="muted">[&amp;#xf139;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF078;</i> fa-chevron-down<span class="muted">[&amp;#xf078;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF053;</i> fa-chevron-left<span class="muted">[&amp;#xf053;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF054;</i> fa-chevron-right<span class="muted">[&amp;#xf054;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF077;</i> fa-chevron-up<span class="muted">[&amp;#xf077;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1AE;</i> fa-child<span class="muted">[&amp;#xf1ae;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF111;</i> fa-circle<span class="muted">[&amp;#xf111;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF10C;</i> fa-circle-o<span class="muted">[&amp;#xf10c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CE;</i> fa-circle-o-notch<span class="muted">[&amp;#xf1ce;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1DB;</i> fa-circle-thin<span class="muted">[&amp;#xf1db;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0EA;</i> fa-clipboard<span class="muted">[&amp;#xf0ea;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF017;</i> fa-clock-o<span class="muted">[&amp;#xf017;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C2;</i> fa-cloud<span class="muted">[&amp;#xf0c2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0ED;</i> fa-cloud-download<span class="muted">[&amp;#xf0ed;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0EE;</i> fa-cloud-upload<span class="muted">[&amp;#xf0ee;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF157;</i> fa-cny<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf157;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF121;</i> fa-code<span class="muted">[&amp;#xf121;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF126;</i> fa-code-fork<span class="muted">[&amp;#xf126;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CB;</i> fa-codepen<span class="muted">[&amp;#xf1cb;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F4;</i> fa-coffee<span class="muted">[&amp;#xf0f4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF013;</i> fa-cog<span class="muted">[&amp;#xf013;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF085;</i> fa-cogs<span class="muted">[&amp;#xf085;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DB;</i> fa-columns<span class="muted">[&amp;#xf0db;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF075;</i> fa-comment<span class="muted">[&amp;#xf075;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E5;</i> fa-comment-o<span class="muted">[&amp;#xf0e5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF086;</i> fa-comments<span class="muted">[&amp;#xf086;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E6;</i> fa-comments-o<span class="muted">[&amp;#xf0e6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF14E;</i> fa-compass<span class="muted">[&amp;#xf14e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF066;</i> fa-compress<span class="muted">[&amp;#xf066;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C5;</i> fa-copy<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF09D;</i> fa-credit-card<span class="muted">[&amp;#xf09d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF125;</i> fa-crop<span class="muted">[&amp;#xf125;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF05B;</i> fa-crosshairs<span class="muted">[&amp;#xf05b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF13C;</i> fa-css3<span class="muted">[&amp;#xf13c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B2;</i> fa-cube<span class="muted">[&amp;#xf1b2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B3;</i> fa-cubes<span class="muted">[&amp;#xf1b3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C4;</i> fa-cut<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F5;</i> fa-cutlery<span class="muted">[&amp;#xf0f5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E4;</i> fa-dashboard<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0e4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C0;</i> fa-database<span class="muted">[&amp;#xf1c0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03B;</i> fa-dedent<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf03b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A5;</i> fa-delicious<span class="muted">[&amp;#xf1a5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF108;</i> fa-desktop<span class="muted">[&amp;#xf108;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1BD;</i> fa-deviantart<span class="muted">[&amp;#xf1bd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A6;</i> fa-digg<span class="muted">[&amp;#xf1a6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF155;</i> fa-dollar<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf155;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF192;</i> fa-dot-circle-o<span class="muted">[&amp;#xf192;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF019;</i> fa-download<span class="muted">[&amp;#xf019;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF17D;</i> fa-dribbble<span class="muted">[&amp;#xf17d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF16B;</i> fa-dropbox<span class="muted">[&amp;#xf16b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A9;</i> fa-drupal<span class="muted">[&amp;#xf1a9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF044;</i> fa-edit<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf044;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF052;</i> fa-eject<span class="muted">[&amp;#xf052;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF141;</i> fa-ellipsis-h<span class="muted">[&amp;#xf141;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF142;</i> fa-ellipsis-v<span class="muted">[&amp;#xf142;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D1;</i> fa-empire<span class="muted">[&amp;#xf1d1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E0;</i> fa-envelope<span class="muted">[&amp;#xf0e0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF003;</i> fa-envelope-o<span class="muted">[&amp;#xf003;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF199;</i> fa-envelope-square<span class="muted">[&amp;#xf199;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF12D;</i> fa-eraser<span class="muted">[&amp;#xf12d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF153;</i> fa-eur<span class="muted">[&amp;#xf153;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF153;</i> fa-euro<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf153;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0EC;</i> fa-exchange<span class="muted">[&amp;#xf0ec;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF12A;</i> fa-exclamation<span class="muted">[&amp;#xf12a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF06A;</i> fa-exclamation-circle<span class="muted">[&amp;#xf06a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF071;</i> fa-exclamation-triangle<span class="muted">[&amp;#xf071;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF065;</i> fa-expand<span class="muted">[&amp;#xf065;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF08E;</i> fa-external-link<span class="muted">[&amp;#xf08e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF14C;</i> fa-external-link-square<span class="muted">[&amp;#xf14c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF06E;</i> fa-eye<span class="muted">[&amp;#xf06e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF070;</i> fa-eye-slash<span class="muted">[&amp;#xf070;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF09A;</i> fa-facebook<span class="muted">[&amp;#xf09a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF082;</i> fa-facebook-square<span class="muted">[&amp;#xf082;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF049;</i> fa-fast-backward<span class="muted">[&amp;#xf049;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF050;</i> fa-fast-forward<span class="muted">[&amp;#xf050;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1AC;</i> fa-fax<span class="muted">[&amp;#xf1ac;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF182;</i> fa-female<span class="muted">[&amp;#xf182;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0FB;</i> fa-fighter-jet<span class="muted">[&amp;#xf0fb;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF15B;</i> fa-file<span class="muted">[&amp;#xf15b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C6;</i> fa-file-archive-o<span class="muted">[&amp;#xf1c6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C7;</i> fa-file-audio-o<span class="muted">[&amp;#xf1c7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C9;</i> fa-file-code-o<span class="muted">[&amp;#xf1c9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C3;</i> fa-file-excel-o<span class="muted">[&amp;#xf1c3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C5;</i> fa-file-image-o<span class="muted">[&amp;#xf1c5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C8;</i> fa-file-movie-o<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1c8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF016;</i> fa-file-o<span class="muted">[&amp;#xf016;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C1;</i> fa-file-pdf-o<span class="muted">[&amp;#xf1c1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C5;</i> fa-file-photo-o<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1c5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C5;</i> fa-file-picture-o<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1c5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C4;</i> fa-file-powerpoint-o<span class="muted">[&amp;#xf1c4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C7;</i> fa-file-sound-o<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1c7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF15C;</i> fa-file-text<span class="muted">[&amp;#xf15c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F6;</i> fa-file-text-o<span class="muted">[&amp;#xf0f6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C8;</i> fa-file-video-o<span class="muted">[&amp;#xf1c8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C2;</i> fa-file-word-o<span class="muted">[&amp;#xf1c2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1C6;</i> fa-file-zip-o<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1c6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C5;</i> fa-files-o<span class="muted">[&amp;#xf0c5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF008;</i> fa-film<span class="muted">[&amp;#xf008;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0B0;</i> fa-filter<span class="muted">[&amp;#xf0b0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF06D;</i> fa-fire<span class="muted">[&amp;#xf06d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF134;</i> fa-fire-extinguisher<span class="muted">[&amp;#xf134;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF024;</i> fa-flag<span class="muted">[&amp;#xf024;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF11E;</i> fa-flag-checkered<span class="muted">[&amp;#xf11e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF11D;</i> fa-flag-o<span class="muted">[&amp;#xf11d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E7;</i> fa-flash<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0e7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C3;</i> fa-flask<span class="muted">[&amp;#xf0c3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF16E;</i> fa-flickr<span class="muted">[&amp;#xf16e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C7;</i> fa-floppy-o<span class="muted">[&amp;#xf0c7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF07B;</i> fa-folder<span class="muted">[&amp;#xf07b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF114;</i> fa-folder-o<span class="muted">[&amp;#xf114;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF07C;</i> fa-folder-open<span class="muted">[&amp;#xf07c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF115;</i> fa-folder-open-o<span class="muted">[&amp;#xf115;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF031;</i> fa-font<span class="muted">[&amp;#xf031;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF04E;</i> fa-forward<span class="muted">[&amp;#xf04e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF180;</i> fa-foursquare<span class="muted">[&amp;#xf180;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF119;</i> fa-frown-o<span class="muted">[&amp;#xf119;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF11B;</i> fa-gamepad<span class="muted">[&amp;#xf11b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E3;</i> fa-gavel<span class="muted">[&amp;#xf0e3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF154;</i> fa-gbp<span class="muted">[&amp;#xf154;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D1;</i> fa-ge<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1d1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF013;</i> fa-gear<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf013;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF085;</i> fa-gears<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf085;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF06B;</i> fa-gift<span class="muted">[&amp;#xf06b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D3;</i> fa-git<span class="muted">[&amp;#xf1d3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D2;</i> fa-git-square<span class="muted">[&amp;#xf1d2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF09B;</i> fa-github<span class="muted">[&amp;#xf09b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF113;</i> fa-github-alt<span class="muted">[&amp;#xf113;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF092;</i> fa-github-square<span class="muted">[&amp;#xf092;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF184;</i> fa-gittip<span class="muted">[&amp;#xf184;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF000;</i> fa-glass<span class="muted">[&amp;#xf000;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0AC;</i> fa-globe<span class="muted">[&amp;#xf0ac;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A0;</i> fa-google<span class="muted">[&amp;#xf1a0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D5;</i> fa-google-plus<span class="muted">[&amp;#xf0d5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D4;</i> fa-google-plus-square<span class="muted">[&amp;#xf0d4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19D;</i> fa-graduation-cap<span class="muted">[&amp;#xf19d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C0;</i> fa-group<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0FD;</i> fa-h-square<span class="muted">[&amp;#xf0fd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D4;</i> fa-hacker-news<span class="muted">[&amp;#xf1d4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A7;</i> fa-hand-o-down<span class="muted">[&amp;#xf0a7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A5;</i> fa-hand-o-left<span class="muted">[&amp;#xf0a5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A4;</i> fa-hand-o-right<span class="muted">[&amp;#xf0a4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A6;</i> fa-hand-o-up<span class="muted">[&amp;#xf0a6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0A0;</i> fa-hdd-o<span class="muted">[&amp;#xf0a0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1DC;</i> fa-header<span class="muted">[&amp;#xf1dc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF025;</i> fa-headphones<span class="muted">[&amp;#xf025;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF004;</i> fa-heart<span class="muted">[&amp;#xf004;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF08A;</i> fa-heart-o<span class="muted">[&amp;#xf08a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1DA;</i> fa-history<span class="muted">[&amp;#xf1da;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF015;</i> fa-home<span class="muted">[&amp;#xf015;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F8;</i> fa-hospital-o<span class="muted">[&amp;#xf0f8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF13B;</i> fa-html5<span class="muted">[&amp;#xf13b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03E;</i> fa-image<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf03e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF01C;</i> fa-inbox<span class="muted">[&amp;#xf01c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03C;</i> fa-indent<span class="muted">[&amp;#xf03c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF129;</i> fa-info<span class="muted">[&amp;#xf129;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF05A;</i> fa-info-circle<span class="muted">[&amp;#xf05a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF156;</i> fa-inr<span class="muted">[&amp;#xf156;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF16D;</i> fa-instagram<span class="muted">[&amp;#xf16d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19C;</i> fa-institution<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf19c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF033;</i> fa-italic<span class="muted">[&amp;#xf033;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1AA;</i> fa-joomla<span class="muted">[&amp;#xf1aa;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF157;</i> fa-jpy<span class="muted">[&amp;#xf157;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CC;</i> fa-jsfiddle<span class="muted">[&amp;#xf1cc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF084;</i> fa-key<span class="muted">[&amp;#xf084;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF11C;</i> fa-keyboard-o<span class="muted">[&amp;#xf11c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF159;</i> fa-krw<span class="muted">[&amp;#xf159;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1AB;</i> fa-language<span class="muted">[&amp;#xf1ab;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF109;</i> fa-laptop<span class="muted">[&amp;#xf109;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF06C;</i> fa-leaf<span class="muted">[&amp;#xf06c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E3;</i> fa-legal<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0e3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF094;</i> fa-lemon-o<span class="muted">[&amp;#xf094;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF149;</i> fa-level-down<span class="muted">[&amp;#xf149;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF148;</i> fa-level-up<span class="muted">[&amp;#xf148;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CD;</i> fa-life-bouy<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1cd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CD;</i> fa-life-ring<span class="muted">[&amp;#xf1cd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CD;</i> fa-life-saver<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1cd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0EB;</i> fa-lightbulb-o<span class="muted">[&amp;#xf0eb;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C1;</i> fa-link<span class="muted">[&amp;#xf0c1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E1;</i> fa-linkedin<span class="muted">[&amp;#xf0e1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF08C;</i> fa-linkedin-square<span class="muted">[&amp;#xf08c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF17C;</i> fa-linux<span class="muted">[&amp;#xf17c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03A;</i> fa-list<span class="muted">[&amp;#xf03a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF022;</i> fa-list-alt<span class="muted">[&amp;#xf022;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0CB;</i> fa-list-ol<span class="muted">[&amp;#xf0cb;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0CA;</i> fa-list-ul<span class="muted">[&amp;#xf0ca;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF124;</i> fa-location-arrow<span class="muted">[&amp;#xf124;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF023;</i> fa-lock<span class="muted">[&amp;#xf023;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF175;</i> fa-long-arrow-down<span class="muted">[&amp;#xf175;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF177;</i> fa-long-arrow-left<span class="muted">[&amp;#xf177;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF178;</i> fa-long-arrow-right<span class="muted">[&amp;#xf178;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF176;</i> fa-long-arrow-up<span class="muted">[&amp;#xf176;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D0;</i> fa-magic<span class="muted">[&amp;#xf0d0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF076;</i> fa-magnet<span class="muted">[&amp;#xf076;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF064;</i> fa-mail-forward<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf064;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF112;</i> fa-mail-reply<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf112;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF122;</i> fa-mail-reply-all<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf122;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF183;</i> fa-male<span class="muted">[&amp;#xf183;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF041;</i> fa-map-marker<span class="muted">[&amp;#xf041;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF136;</i> fa-maxcdn<span class="muted">[&amp;#xf136;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0FA;</i> fa-medkit<span class="muted">[&amp;#xf0fa;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF11A;</i> fa-meh-o<span class="muted">[&amp;#xf11a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF130;</i> fa-microphone<span class="muted">[&amp;#xf130;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF131;</i> fa-microphone-slash<span class="muted">[&amp;#xf131;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF068;</i> fa-minus<span class="muted">[&amp;#xf068;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF056;</i> fa-minus-circle<span class="muted">[&amp;#xf056;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF146;</i> fa-minus-square<span class="muted">[&amp;#xf146;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF147;</i> fa-minus-square-o<span class="muted">[&amp;#xf147;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF10B;</i> fa-mobile<span class="muted">[&amp;#xf10b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF10B;</i> fa-mobile-phone<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf10b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D6;</i> fa-money<span class="muted">[&amp;#xf0d6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF186;</i> fa-moon-o<span class="muted">[&amp;#xf186;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19D;</i> fa-mortar-board<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf19d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF001;</i> fa-music<span class="muted">[&amp;#xf001;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C9;</i> fa-navicon<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19B;</i> fa-openid<span class="muted">[&amp;#xf19b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03B;</i> fa-outdent<span class="muted">[&amp;#xf03b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF18C;</i> fa-pagelines<span class="muted">[&amp;#xf18c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D8;</i> fa-paper-plane<span class="muted">[&amp;#xf1d8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D9;</i> fa-paper-plane-o<span class="muted">[&amp;#xf1d9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C6;</i> fa-paperclip<span class="muted">[&amp;#xf0c6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1DD;</i> fa-paragraph<span class="muted">[&amp;#xf1dd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0EA;</i> fa-paste<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0ea;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF04C;</i> fa-pause<span class="muted">[&amp;#xf04c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B0;</i> fa-paw<span class="muted">[&amp;#xf1b0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF040;</i> fa-pencil<span class="muted">[&amp;#xf040;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF14B;</i> fa-pencil-square<span class="muted">[&amp;#xf14b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF044;</i> fa-pencil-square-o<span class="muted">[&amp;#xf044;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF095;</i> fa-phone<span class="muted">[&amp;#xf095;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF098;</i> fa-phone-square<span class="muted">[&amp;#xf098;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03E;</i> fa-photo<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf03e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03E;</i> fa-picture-o<span class="muted">[&amp;#xf03e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A7;</i> fa-pied-piper<span class="muted">[&amp;#xf1a7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A8;</i> fa-pied-piper-alt<span class="muted">[&amp;#xf1a8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A7;</i> fa-pied-piper-square<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1a7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D2;</i> fa-pinterest<span class="muted">[&amp;#xf0d2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D3;</i> fa-pinterest-square<span class="muted">[&amp;#xf0d3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF072;</i> fa-plane<span class="muted">[&amp;#xf072;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF04B;</i> fa-play<span class="muted">[&amp;#xf04b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF144;</i> fa-play-circle<span class="muted">[&amp;#xf144;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF01D;</i> fa-play-circle-o<span class="muted">[&amp;#xf01d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF067;</i> fa-plus<span class="muted">[&amp;#xf067;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF055;</i> fa-plus-circle<span class="muted">[&amp;#xf055;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0FE;</i> fa-plus-square<span class="muted">[&amp;#xf0fe;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF196;</i> fa-plus-square-o<span class="muted">[&amp;#xf196;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF011;</i> fa-power-off<span class="muted">[&amp;#xf011;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF02F;</i> fa-print<span class="muted">[&amp;#xf02f;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF12E;</i> fa-puzzle-piece<span class="muted">[&amp;#xf12e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D6;</i> fa-qq<span class="muted">[&amp;#xf1d6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF029;</i> fa-qrcode<span class="muted">[&amp;#xf029;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF128;</i> fa-question<span class="muted">[&amp;#xf128;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF059;</i> fa-question-circle<span class="muted">[&amp;#xf059;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF10D;</i> fa-quote-left<span class="muted">[&amp;#xf10d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF10E;</i> fa-quote-right<span class="muted">[&amp;#xf10e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D0;</i> fa-ra<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1d0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF074;</i> fa-random<span class="muted">[&amp;#xf074;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D0;</i> fa-rebel<span class="muted">[&amp;#xf1d0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B8;</i> fa-recycle<span class="muted">[&amp;#xf1b8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A1;</i> fa-reddit<span class="muted">[&amp;#xf1a1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A2;</i> fa-reddit-square<span class="muted">[&amp;#xf1a2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF021;</i> fa-refresh<span class="muted">[&amp;#xf021;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF18B;</i> fa-renren<span class="muted">[&amp;#xf18b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C9;</i> fa-reorder<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF01E;</i> fa-repeat<span class="muted">[&amp;#xf01e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF112;</i> fa-reply<span class="muted">[&amp;#xf112;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF122;</i> fa-reply-all<span class="muted">[&amp;#xf122;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF079;</i> fa-retweet<span class="muted">[&amp;#xf079;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF157;</i> fa-rmb<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf157;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF018;</i> fa-road<span class="muted">[&amp;#xf018;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF135;</i> fa-rocket<span class="muted">[&amp;#xf135;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E2;</i> fa-rotate-left<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0e2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF01E;</i> fa-rotate-right<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf01e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF158;</i> fa-rouble<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf158;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF09E;</i> fa-rss<span class="muted">[&amp;#xf09e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF143;</i> fa-rss-square<span class="muted">[&amp;#xf143;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF158;</i> fa-rub<span class="muted">[&amp;#xf158;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF158;</i> fa-ruble<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf158;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF156;</i> fa-rupee<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf156;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C7;</i> fa-save<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0c7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C4;</i> fa-scissors<span class="muted">[&amp;#xf0c4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF002;</i> fa-search<span class="muted">[&amp;#xf002;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF010;</i> fa-search-minus<span class="muted">[&amp;#xf010;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF00E;</i> fa-search-plus<span class="muted">[&amp;#xf00e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D8;</i> fa-send<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1d8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D9;</i> fa-send-o<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1d9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF064;</i> fa-share<span class="muted">[&amp;#xf064;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1E0;</i> fa-share-alt<span class="muted">[&amp;#xf1e0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1E1;</i> fa-share-alt-square<span class="muted">[&amp;#xf1e1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF14D;</i> fa-share-square<span class="muted">[&amp;#xf14d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF045;</i> fa-share-square-o<span class="muted">[&amp;#xf045;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF132;</i> fa-shield<span class="muted">[&amp;#xf132;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF07A;</i> fa-shopping-cart<span class="muted">[&amp;#xf07a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF090;</i> fa-sign-in<span class="muted">[&amp;#xf090;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF08B;</i> fa-sign-out<span class="muted">[&amp;#xf08b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF012;</i> fa-signal<span class="muted">[&amp;#xf012;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E8;</i> fa-sitemap<span class="muted">[&amp;#xf0e8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF17E;</i> fa-skype<span class="muted">[&amp;#xf17e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF198;</i> fa-slack<span class="muted">[&amp;#xf198;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1DE;</i> fa-sliders<span class="muted">[&amp;#xf1de;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF118;</i> fa-smile-o<span class="muted">[&amp;#xf118;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DC;</i> fa-sort<span class="muted">[&amp;#xf0dc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF15D;</i> fa-sort-alpha-asc<span class="muted">[&amp;#xf15d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF15E;</i> fa-sort-alpha-desc<span class="muted">[&amp;#xf15e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF160;</i> fa-sort-amount-asc<span class="muted">[&amp;#xf160;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF161;</i> fa-sort-amount-desc<span class="muted">[&amp;#xf161;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DE;</i> fa-sort-asc<span class="muted">[&amp;#xf0de;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DD;</i> fa-sort-desc<span class="muted">[&amp;#xf0dd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DD;</i> fa-sort-down<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0dd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF162;</i> fa-sort-numeric-asc<span class="muted">[&amp;#xf162;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF163;</i> fa-sort-numeric-desc<span class="muted">[&amp;#xf163;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DE;</i> fa-sort-up<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0de;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1BE;</i> fa-soundcloud<span class="muted">[&amp;#xf1be;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF197;</i> fa-space-shuttle<span class="muted">[&amp;#xf197;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF110;</i> fa-spinner<span class="muted">[&amp;#xf110;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B1;</i> fa-spoon<span class="muted">[&amp;#xf1b1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1BC;</i> fa-spotify<span class="muted">[&amp;#xf1bc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C8;</i> fa-square<span class="muted">[&amp;#xf0c8;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF096;</i> fa-square-o<span class="muted">[&amp;#xf096;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF18D;</i> fa-stack-exchange<span class="muted">[&amp;#xf18d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF16C;</i> fa-stack-overflow<span class="muted">[&amp;#xf16c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF005;</i> fa-star<span class="muted">[&amp;#xf005;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF089;</i> fa-star-half<span class="muted">[&amp;#xf089;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF123;</i> fa-star-half-empty<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf123;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF123;</i> fa-star-half-full<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf123;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF123;</i> fa-star-half-o<span class="muted">[&amp;#xf123;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF006;</i> fa-star-o<span class="muted">[&amp;#xf006;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B6;</i> fa-steam<span class="muted">[&amp;#xf1b6;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1B7;</i> fa-steam-square<span class="muted">[&amp;#xf1b7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF048;</i> fa-step-backward<span class="muted">[&amp;#xf048;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF051;</i> fa-step-forward<span class="muted">[&amp;#xf051;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F1;</i> fa-stethoscope<span class="muted">[&amp;#xf0f1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF04D;</i> fa-stop<span class="muted">[&amp;#xf04d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0CC;</i> fa-strikethrough<span class="muted">[&amp;#xf0cc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A4;</i> fa-stumbleupon<span class="muted">[&amp;#xf1a4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1A3;</i> fa-stumbleupon-circle<span class="muted">[&amp;#xf1a3;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF12C;</i> fa-subscript<span class="muted">[&amp;#xf12c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F2;</i> fa-suitcase<span class="muted">[&amp;#xf0f2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF185;</i> fa-sun-o<span class="muted">[&amp;#xf185;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF12B;</i> fa-superscript<span class="muted">[&amp;#xf12b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CD;</i> fa-support<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1cd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0CE;</i> fa-table<span class="muted">[&amp;#xf0ce;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF10A;</i> fa-tablet<span class="muted">[&amp;#xf10a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E4;</i> fa-tachometer<span class="muted">[&amp;#xf0e4;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF02B;</i> fa-tag<span class="muted">[&amp;#xf02b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF02C;</i> fa-tags<span class="muted">[&amp;#xf02c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0AE;</i> fa-tasks<span class="muted">[&amp;#xf0ae;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1BA;</i> fa-taxi<span class="muted">[&amp;#xf1ba;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D5;</i> fa-tencent-weibo<span class="muted">[&amp;#xf1d5;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF120;</i> fa-terminal<span class="muted">[&amp;#xf120;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF034;</i> fa-text-height<span class="muted">[&amp;#xf034;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF035;</i> fa-text-width<span class="muted">[&amp;#xf035;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF00A;</i> fa-th<span class="muted">[&amp;#xf00a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF009;</i> fa-th-large<span class="muted">[&amp;#xf009;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF00B;</i> fa-th-list<span class="muted">[&amp;#xf00b;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF08D;</i> fa-thumb-tack<span class="muted">[&amp;#xf08d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF165;</i> fa-thumbs-down<span class="muted">[&amp;#xf165;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF088;</i> fa-thumbs-o-down<span class="muted">[&amp;#xf088;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF087;</i> fa-thumbs-o-up<span class="muted">[&amp;#xf087;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF164;</i> fa-thumbs-up<span class="muted">[&amp;#xf164;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF145;</i> fa-ticket<span class="muted">[&amp;#xf145;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF00D;</i> fa-times<span class="muted">[&amp;#xf00d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF057;</i> fa-times-circle<span class="muted">[&amp;#xf057;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF05C;</i> fa-times-circle-o<span class="muted">[&amp;#xf05c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF043;</i> fa-tint<span class="muted">[&amp;#xf043;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF150;</i> fa-toggle-down<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf150;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF191;</i> fa-toggle-left<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf191;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF152;</i> fa-toggle-right<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf152;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF151;</i> fa-toggle-up<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf151;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF014;</i> fa-trash-o<span class="muted">[&amp;#xf014;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1BB;</i> fa-tree<span class="muted">[&amp;#xf1bb;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF181;</i> fa-trello<span class="muted">[&amp;#xf181;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF091;</i> fa-trophy<span class="muted">[&amp;#xf091;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0D1;</i> fa-truck<span class="muted">[&amp;#xf0d1;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF195;</i> fa-try<span class="muted">[&amp;#xf195;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF173;</i> fa-tumblr<span class="muted">[&amp;#xf173;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF174;</i> fa-tumblr-square<span class="muted">[&amp;#xf174;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF195;</i> fa-turkish-lira<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf195;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF099;</i> fa-twitter<span class="muted">[&amp;#xf099;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF081;</i> fa-twitter-square<span class="muted">[&amp;#xf081;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E9;</i> fa-umbrella<span class="muted">[&amp;#xf0e9;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0CD;</i> fa-underline<span class="muted">[&amp;#xf0cd;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0E2;</i> fa-undo<span class="muted">[&amp;#xf0e2;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19C;</i> fa-university<span class="muted">[&amp;#xf19c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF127;</i> fa-unlink<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf127;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF09C;</i> fa-unlock<span class="muted">[&amp;#xf09c;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF13E;</i> fa-unlock-alt<span class="muted">[&amp;#xf13e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0DC;</i> fa-unsorted<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf0dc;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF093;</i> fa-upload<span class="muted">[&amp;#xf093;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF155;</i> fa-usd<span class="muted">[&amp;#xf155;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF007;</i> fa-user<span class="muted">[&amp;#xf007;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0F0;</i> fa-user-md<span class="muted">[&amp;#xf0f0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0C0;</i> fa-users<span class="muted">[&amp;#xf0c0;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF03D;</i> fa-video-camera<span class="muted">[&amp;#xf03d;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF194;</i> fa-vimeo-square<span class="muted">[&amp;#xf194;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1CA;</i> fa-vine<span class="muted">[&amp;#xf1ca;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF189;</i> fa-vk<span class="muted">[&amp;#xf189;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF027;</i> fa-volume-down<span class="muted">[&amp;#xf027;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF026;</i> fa-volume-off<span class="muted">[&amp;#xf026;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF028;</i> fa-volume-up<span class="muted">[&amp;#xf028;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF071;</i> fa-warning<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf071;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D7;</i> fa-wechat<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf1d7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF18A;</i> fa-weibo<span class="muted">[&amp;#xf18a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF1D7;</i> fa-weixin<span class="muted">[&amp;#xf1d7;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF193;</i> fa-wheelchair<span class="muted">[&amp;#xf193;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF17A;</i> fa-windows<span class="muted">[&amp;#xf17a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF159;</i> fa-won<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf159;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19A;</i> fa-wordpress<span class="muted">[&amp;#xf19a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF0AD;</i> fa-wrench<span class="muted">[&amp;#xf0ad;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF168;</i> fa-xing<span class="muted">[&amp;#xf168;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF169;</i> fa-xing-square<span class="muted">[&amp;#xf169;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF19E;</i> fa-yahoo<span class="muted">[&amp;#xf19e;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF157;</i> fa-yen<span class="text-muted">(alias)</span><span class="muted">[&amp;#xf157;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF167;</i> fa-youtube<span class="muted">[&amp;#xf167;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF16A;</i> fa-youtube-play<span class="muted">[&amp;#xf16a;]</span></div>
                  <div class="col-md-4 col-sm-6 col-lg-3"><i class="fa fa-fw">&#xF166;</i> fa-youtube-square<span class="muted">[&amp;#xf166;]</span></div>
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