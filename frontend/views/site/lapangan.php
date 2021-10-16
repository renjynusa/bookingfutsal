<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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
