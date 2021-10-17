<?php
use yii\helpers\Html;
use frontend\models\TblLapangan;


$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	
	<section id="slider">
		<!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Booking</span>-Futsal</h1>
									<h2>Booking Lapangan Futsal</h2>
									<p>Website penyewaan jadwal lapangan futsal ini digunakan untuk memudahkan penyewa mengetahui jadwal lapangan futsal yang kosong, untuk memberikan kemudahan dalam melakukan proses penyewaan jadwal lapangan futsal tanpa harus datang langsung ke tempat futsal.</p>
									<?= Html::a('Daftar Sekarang !',['site/signup'], ['class' => 'btn btn-lg btn-primary']) ?>
								</div>
								<div class="col-sm-6">
									<img src="images/home/futsal3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/futsal3.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                  <h1><span>Booking</span>-Futsal</h1>
									<h2>Lapangan Futsal</h2>
									<p>Lihat daftar lapangan yang dapat di booking sekarang juga. </p>
									<?= Html::a('Booking Sekarang !',['site/booking'], ['class' => 'btn btn-lg btn-success']) ?>
								</div>
								<div class="col-sm-6">
									<img src="images/home/futsal4.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/futsal4.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
                  <h1><span>Booking</span>-Futsal</h1>
									<h2>Event Kejuaran</h2>
									<p>Kami mengadakan event - event kejuaran dimana anda dapat mendaftarkan tim anda dan dapatkan hadiah berupa uang tunai jutaan rupiah !</p>
									<?= Html::a('Lihat Event !',['site/event'], ['class' => 'btn btn-lg btn-info']) ?>
								</div>
								<div class="col-sm-6">
									<img src="images/home/futsal5.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/futsal5.png"  class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--/slider-->
	
    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100">Futsal GSS</h3>
              <p data-aos="fade-in">
              PILIH OLAHRAGA FAVORITMU & PESAN LAPANGANNYA
              </p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4><a href="#">Mudah & Praktis</a></h4>
                  <p>Cari dan booking lapangan olahraga, cukup dari ponsel pintar anda kapanpun, dimanapun.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="#">Banyak Pilihan Olahraga & Lapangan</a></h4>
                  <p>Kamu bisa temukan beragam jenis olahraga di Laparaga dan memilih lokasi yang kamu suka.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4><a href="#">Aman & Nyaman</a></h4>
                  <p>Keadaan dan tempat yang sangat strategis tentunya sangat nyaman</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4><a href="#">Cek Detail Lapangan Tanpa ke Lokasi</a></h4>
                  <p>Bingung pilih lapangan yang mana? kamu bisa cek detail tiap lapangan tanpa harus bolak balik ke lokasi.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Lapangan Futsal</h2>
          <!-- <h5>Aplikasi penyewaan jadwal lapangan futsal ini digunakan untuk memudahkan penyewa mengetahui jadwal lapangan futsal yang kosong, untuk memberikan kemudahan dalam melakukan proses penyewaan jadwal lapangan futsal tanpa harus datang langsung ke tempat futsal.</h5>
 -->        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/lp1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Lapangan Futsal Vinyl</a></h5>
                <p class="card-text">Lapangan futsal vinyl ini biasa disebut dengan rubber karena bahan dasarnya menyerupai karet yang permukaanya lembut.  Jenis lapangan futsal yang satu ini merupakan yang paling banyak disukai oleh penggemar olahraga futsal. Hal tersebut dikarenakan bahannya yang empuk sehingga membuat kita lebih mudah dalam melakukan aksi-aksi penyelamatan terlebih bagi mereka yang suka diving.</p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/lp2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Lapangan Futsal Taraflex</a></h5>
                <p class="card-text">Jenis lapangan ini sekilas hampir sama dengan Parquette tetapi ini bahannya dari polyethylen atau biji plastik yang dipadatkan. Meskipun dari bahan plastik tetapi lapangan ini keset dan enak digunakan, sehingga tidak mudah terjatuh. Jenis lapangan ini juga sudah banyak sekali di Indonesia.</p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/lp3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Lapangan Futsal Rumput Sintetis</a></h5>
                <p class="card-text">Jenis lapangan ini mungkin yang paling populer di Indonesia. Lapangan rumput futsal ini sangat banyak ditemui hampir di setiap wilayah kota di Indonesia. Rumput sintetis ini sebenarnya diperuntukkan untuk lapangan indoor soccer bukan untuk futsal. Jenis lapangan ini digunakan hanya untuk hiburan saja bukan untuk tujuan prestasi walaupun diantara kita mungkin pernah menemui kompetisi menggunakan lapangan rumput sintetis ini. </p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/lp1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Lapangan Futsal Semen</a></h5>
                <p class="card-text">Lapangan jenis ini biasanya adalah lapangan outdoor atau di luar ruangan dan mudah ditemui terutama di daerah pinggiran kota besar. Hal ini dikarenakan nilainya yang ekonomis serta daya tahan yang lama.</p>
                <!-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->
					


					<div class="recommended_items">
						<!--recommended_items-->
						<h2 class="title text-center">recommended</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<?php 

				            $daftar = TblLapangan::find()->where(['status' => 'aktif'])->limit(3)->all();

				            foreach ($daftar as $key => $value) {

				            	$img = ($value->foto == '') ? Html::img(Yii::$app->urlManagerBackend->baseUrl.'/empty.jpg') : Html::img(Yii::$app->urlManagerBackend->baseUrl.'/'.$value->foto);
				            
				          ?>

										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<?= $img ?>
														<h2><?= $value->nama_lapangan ?></h2>
														<p>Booking <?= $value->nama_lapangan ?></p>

	                           <?php if (Yii::$app->user->isGuest) { ?>

										        

										            <p><?= Html::a('Booking', ['site/login'], ['class' => 'btn btn-lg btn-success' ]) ?></p>
										            
										        <?php } else { ?>

										        
										            <p><?= Html::a('Booking', ['site/detail-lapangan' , 'id' => $value->id], ['class' => 'btn btn-lg btn-success' ]) ?></p>

										        <?php } ?>
													</div>
													
												</div>
											</div>
										</div>

									<?php } ?>
								</div>

								<div class="item">	
									<?php 

				            $daftar = TblLapangan::find()->where(['status' => 'aktif'])->andWhere('id > 3')->all();

				            foreach ($daftar as $key => $value) {

				            	$photo = ($value->foto == '') ? Html::img(Yii::$app->urlManagerBackend->baseUrl.'/empty.jpg') : Html::img(Yii::$app->urlManagerBackend->baseUrl.'/'.$value->foto);
				            
				          ?>
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<?= $photo ?>
														<h2><?= $value->nama_lapangan ?></h2>
														<p>Booking <?= $value->nama_lapangan ?></p>

	                           <?php if (Yii::$app->user->isGuest) { ?>

										        

										            <p><?= Html::a('Booking', ['site/login'], ['class' => 'btn btn-lg btn-success' ]) ?></p>
										            
										        <?php } else { ?>

										        
										            <p><?= Html::a('Booking', ['site/detail-lapangan' , 'id' => $value->id], ['class' => 'btn btn-lg btn-success' ]) ?></p>

										        <?php } ?>
													</div>
													
												</div>
											</div>
										</div>

									<?php } ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div>
					<!--/recommended_items-->


    


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>BOOKING FUTSAL BY RUDI</h3>
            <p>WEBSITE INI DI BUAT UNTUK MEMENUHI SYARAT KELULUSAN S1</p>
          </div>
        </div>

        <!-- <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div> -->

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>
  <!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>