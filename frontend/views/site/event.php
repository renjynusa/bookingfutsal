<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\Html;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;
use frontend\models\TblOrder;

$this->title = 'Event';
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

     
    
      <!-- ======= Contact Section ======= -->
       <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Event Kejuaraan</h2>
          <!-- <h5>Sebelum booking lapangan pastikan informasi anda benar dan tidak bertabrakan dengan jadwal yang sudah tertera !</h5> -->
        </div>

          <div class="row">
            <div class="col-lg-12">
              <?php if ($count == 0) { ?>
               
              <div class="col-md-12" align="center">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-block"></i>
                  <h3>TIDAK ADA EVENT</h3>
                  <!-- <p></p> -->
                </div>
              </div>

              <?php } else { ?>

                <?php 
                  foreach ($model as $key => $value) { 

                    $gg = $value->id;

                    if ($gg % 2 == 0)
                    {
                      $fade = "fade-left";
                    } 
                    else 
                    {
                      $fade = "fade-right";
                    }

                    $photo = ($value->foto == '') ? Html::img(Yii::$app->urlManagerBackend->baseUrl.'/empty.jpg') : Html::img(Yii::$app->urlManagerBackend->baseUrl.'/'.$value->foto);

                ?>

                <div class="col-md-6 d-flex align-items-stretch" data-aos="<?php echo $fade ?>">
                  <div class="card">
                    <div class="card-img">
                      <?= $photo ?>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?= Html::a($value->nama, ['#']) ?></h5>
                      <p class="card-text">Keterangan : <?= $value->keterangan ?></p>
                      <p class="card-text">Biaya Pendaftaran : Rp. <?= number_format($value->biaya_pendaftaran) ?></p>
                      <p class="card-text">Hadiah : <?= $value->hadiah ?></p>
                      <p class="card-text">Tanggal Pendaftaran : <?= tanggal_indo($value->tanggal_mulai) ?></p>
                      <p class="card-text">Akhir Pendaftaran : <?= tanggal_indo($value->tanggal_selesai) ?></p>
                    </div>
                  </div>
                </div>

                <?php } ?>

              <?php } ?>

            </div>
          </div>

          </div>
            </div>

          </div>

        

      </div>
    </section>
    <!-- End Contact Section -->

    <style>
      table {
        /*border: 1px solid black;*/
        border-collapse: collapse;
        /*text-align: center;*/
        vertical-align: middle;
        font-size: 14px;
      }

      th {
        /*border: 1px solid black;*/
        border-collapse: collapse;
        text-align: left;
        vertical-align: middle;
        font-size: 14px;
        width: 50%;
      }

      td {
        /*border: 1px solid black;*/
        border-collapse: collapse;
        text-align: left;
        vertical-align: middle;
        font-size: 14px;
      }

    .card-img {
      height: 400px;
      width: 50%;
      /*background-color: powderblue;*/
    }

    </style>


      
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

    
