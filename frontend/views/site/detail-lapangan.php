<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\TblLapanganDetail;

$this->title = 'Detail Lapangan';
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
          <h2 data-aos="fade-in">Lapangan Futsal <?= $model->nama_lapangan ?></h2>
        </div>

        <!-- <div class="row"> -->
          <body>
            <div data-aos="fade-top" style="width:800px; margin:0 auto;">
              <div class="card">
                <div class="card-img" align="center">
                  <?= $photo ?>
                </div>
                <div class="card-body">
                  <div class="section-title">
                    <h2 data-aos="fade-in">DAFTAR LAPANGAN</h2>
                  </div>

                  <table width="100%">

                    <?php

                      $detail = TblLapanganDetail::find()->where(['id_lapangan' => $_GET['id']])->all();

                      foreach ($detail as $key => $value) {
                        
                    ?>
                      <tr>
                        <th>
                          <?= $value->nama_detail ?>
                        </th>
                        <th>
                          <?php if (Yii::$app->user->isGuest) { ?>
                            <?= Html::a('Booking', ['site/login'], ['class' => 'btn-booking btn-lg btn-primary btn-block' ]) ?>
                                
                          <?php } else { ?>
                            <?= Html::a('Booking', ['site/booking', 'id_detail' => $value->id_detail], ['class' => 'btn-booking btn-lg btn-primary btn-block']) ?>

                          <?php } ?>
                        </th>
                      </tr>
                    <?php } ?>
                  </table>

                </div>
              </div>
            </div>
          </body>
          
         
        <!-- </div> -->

      </div>
    </section>

    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        vertical-align: middle;
        font-size: 20px;
      }

      .btn-booking {
        margin-top: 0px;
        background: #FE980F;
        border-radius: 0;
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
