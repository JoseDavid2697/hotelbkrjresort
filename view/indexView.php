<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hotel BKRJ Resort</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/img/favicon.png" rel="icon">
  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.0.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">BKRJ Resort</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="view/about.php">Sobre Nosotros</a></li>
          <li><a href="view/services.php">Facilidades</a></li>
          <li><a href="view/portfolio.php">¿Cómo llegar?</a></li>
          <li><a href="view/pricing.php">Tarífas</a></li>
          <li><a href="view/blog.php">Reservas en Línea</a></li>
          <li><a href="view/contact.php">Contáctenos</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(public/assets/img/slide/slide-1.jpg);">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>Bienvenido a <span>BKRJ Resort</span></h2>
              <p>Nos identificamos por ser el mejor Beach Resort de Costa Rica, con más de 100 reconocimientos internacionales. Visítenos y disfrute de las hermosas vistas al mar caribe.</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(public/assets/img/slide/slide-2.jpg);">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>Su comodidad es nuestro objetivo</h2>
              <p>Nos preocupamos por el bienestar de los clientes, es por eso que contamos con todo el equipo necesario para su buena estadía, tanto por el día como por las noches, contamos con un ambiente preparado a la orilla del mar para que disfrute del atardecer caribeño.</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(public/assets/img/slide/slide-3.jpg);">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>Una experiencia nunca antes vivida</h2>
              <p>La cercanía con el mar nos permite deleitar a nuestros clientes con hermosas vistas, lo que conlleva una experiencia inimaginable, podrá relajarse frente al mar al tomar el sol, mientras disfruta del excelente servicio que nos caracteriza.</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Hemos destacado a nivel mundial por nuestro servicio, es por eso que somos <span>el mejor Beach Resort de Costa Rica</span></h3>
            <p>Nuestro gran servicio al cliente, instalaciones y profesionalismo, nos ha permitido estar entre los mejores <span>50 hoteles</span> alrededor del mundo. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Reservar Ahora!</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h2><strong>Promociones</strong></h2>
        </div>
        <div class="row">

        <?php foreach($vars['listaOfertas'] as $oferta){  ?>

          <div class="col-md-4">
            <div class="box" data-aos="fade-right">
              <h3> <?php echo $oferta['nombre'] ?></h3>
              <?php echo $oferta['descripcion'] ?>
              <img src=" <?php echo $oferta['imagen'] ?>" alt="oferta" class="img-fluid">
              <div class="btn-wrap">
                <a href=" <?php echo $oferta['link_destino'] ?>" target="_blank" class="btn-buy">Obtener</a>
              </div>
            </div>
          </div>

        <?php }?>

        </div>

      </div>
    </section><!-- End Pricing Section -->
    <!-- ======= Services Section ======= -->
    <section id="serviceshome" class="serviceshome">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Ofrecemos <strong>excelentes servicios</strong></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <a href="view/services.php">
              <div class="icon-box" data-aos="fade-up">
                <div class="icon" ><i class="icofont-computer"></i></div>
                <h4 class="title"><a href="view/services.php">Equipo</a></h4>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="view/services.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                <h4 class="title"><a href="view/services.php">Precios</a></h4>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="view/services.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-earth"></i></div>
                <h4 class="title"><a href="view/services.php">Internet</a></h4>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="view/services.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-image"></i></div>
                <h4 class="title"><a href="view/services.php">Mirador</a></h4>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="view/services.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="icofont-settings"></i></div>
                <h4 class="title"><a href="view/services.php">Seguridad</a></h4>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="view/services.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-tasks-alt"></i></div>
                <h4 class="title"><a href="view/services.php">Calendarios</a></h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BKRJ Resort</h3>
            <p>
              Jose David Rodriguez<br>
              Kenneth Lopez<br>
              Ronald Sancho<br>
              Byron Ortiz<br>
              <strong>Email list: </strong>josedavid2697@gmail.com<br>
              porraskenneth31@gmail.com<br>
              ronaldsm13.rsm@gmail.com<br>
              byronortizrojas0998@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reservas en Linea</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contactenos</h4>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
              <a href="#" class="twitter"><i class="bx bxl-github"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/assets/vendor/jquery/jquery.min.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>
  <script src="public/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/assets/vendor/venobox/venobox.min.js"></script>
  <script src="public/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="public/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="public/assets/js/main.js"></script>

</body>

</html>