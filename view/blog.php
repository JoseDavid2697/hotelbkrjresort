<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Flattern Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../public/assets/img/favicon.png" rel="icon">
  <link href="../public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../public/../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../public/assets/vendor/owl.carousel/../public/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../public/assets/css/style.css" rel="stylesheet">

  <style>
    #main{
      background-image: url('../public/assets/img/background.jpg');
      background-size: cover;
    }
    .section {
      position: relative;
      height: 60vh;
    }

    .section .section-center {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    #booking {
      font-family: 'Raleway', sans-serif;
    }

    .booking-form {
      position: relative;
      max-width: 642px;
      width: 100%;
      margin: auto;
      padding: 40px;
      overflow: hidden;
      background-size: cover;
      border-radius: 5px;
      z-index: 20;
    }

    .booking-form::before {
      content: '';
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      background: rgba(0, 0, 0, 0.7);
      z-index: -1;
    }

    .booking-form .form-header {
      text-align: center;
      position: relative;
      margin-bottom: 30px;
    }

    .booking-form .form-header h1 {
      font-weight: 700;
      text-transform: capitalize;
      font-size: 42px;
      margin: 0px;
      color: #fff;
    }

    .booking-form .form-group {
      position: relative;
      margin-bottom: 30px;
    }

    .booking-form .form-control {
      background-color: rgba(255, 255, 255, 0.2);
      height: 60px;
      padding: 0px 25px;
      border: none;
      border-radius: 40px;
      color: #fff;
      -webkit-box-shadow: 0px 0px 0px 2px transparent;
      box-shadow: 0px 0px 0px 2px transparent;
      -webkit-transition: 0.2s;
      transition: 0.2s;
    }

    .booking-form .form-control::-webkit-input-placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .booking-form .form-control:-ms-input-placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .booking-form .form-control::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .booking-form .form-control:focus {
      -webkit-box-shadow: 0px 0px 0px 2px #ff8846;
      box-shadow: 0px 0px 0px 2px #ff8846;
    }

    .booking-form input[type="date"].form-control {
      padding-top: 16px;
    }

    .booking-form input[type="date"].form-control:invalid {
      color: rgba(255, 255, 255, 0.5);
    }

    .booking-form input[type="date"].form-control+.form-label {
      opacity: 1;
      top: 10px;
    }

    .booking-form select.form-control {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    .booking-form select.form-control:invalid {
      color: rgba(255, 255, 255, 0.5);
    }

    .booking-form select.form-control+.select-arrow {
      position: absolute;
      right: 15px;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      width: 32px;
      line-height: 32px;
      height: 32px;
      text-align: center;
      pointer-events: none;
      color: rgba(255, 255, 255, 0.5);
      font-size: 14px;
    }

    .booking-form select.form-control+.select-arrow:after {
      content: '\279C';
      display: block;
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .booking-form select.form-control option {
      color: #000;
    }

    .booking-form .form-label {
      position: absolute;
      top: -10px;
      left: 25px;
      opacity: 0;
      color: #ff8846;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.3px;
      height: 15px;
      line-height: 15px;
      -webkit-transition: 0.2s all;
      transition: 0.2s all;
    }

    .booking-form .form-group.input-not-empty .form-control {
      padding-top: 16px;
    }

    .booking-form .form-group.input-not-empty .form-label {
      opacity: 1;
      top: 10px;
    }

    .booking-form .submit-btn {
      color: #fff;
      background-color: #e35e0a;
      font-weight: 700;
      height: 60px;
      padding: 10px 30px;
      width: 100%;
      border-radius: 40px;
      border: none;
      text-transform: uppercase;
      font-size: 16px;
      letter-spacing: 1.3px;
      -webkit-transition: 0.2s all;
      transition: 0.2s all;
    }

    .booking-form .submit-btn:hover,
    .booking-form .submit-btn:focus {
      opacity: 0.9;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.php">BKRJ Resort</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../view/about.php">Sobre Nosotros</a></li>
          <li><a href="../view/services.php">Facilidades</a></li>
          <li><a href="../view/portfolio.php">¿Cómo llegar?</a></li>
          <li><a href="../view/pricing.php">Tarífas</a></li>
          <li><a href="../view/blog.php">Reservas en Línea</a></li>
          <li><a href="../view/contact.php">Contáctenos</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reservacion en Linea</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Reservacion en Linea</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <br><br>
    <div id="booking" class="container">
		<div class="container" style="text-align: center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Country, ZIP, city...">
								<span class="form-label">Destination</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Check out</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>no of rooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>no of adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" required>
											<option value="" selected hidden>no of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Enter your Email">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" placeholder="Enter you Phone">
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <br><br>
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
  <script src="../public/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../public/assets/vendor/php-email-form/validate.js"></script>
  <script src="../public/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../public/assets/vendor/venobox/venobox.min.js"></script>
  <script src="../public/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../public/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../public/assets/js/main.js"></script>

</body>

</html>