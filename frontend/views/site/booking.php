<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\Html;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;
use frontend\models\TblOrder;

$this->title = 'Booking Lapangan';
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
      <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Booking Lapangan</h2>
          <h5>Sebelum booking lapangan pastikan informasi anda benar dan tidak bertabrakan dengan jadwal yang sudah tertera !</h5>
        </div>

          <div class="row">

            <div class="col-lg-6">

              <div class="row">
                <div class="col-md-12">
                  <div class="info-box" data-aos="fade-up">
                    <i class="bx bx-map"></i>
                    <h3><?= $model->lapangan->nama_lapangan ?></h3>
                    <p><?= $model->lapangan->tempat  ?></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-error-circle"></i>
                    <h3>Booking Information</h3>
                    <p>Berikut adalah daftar <?= $model->nama_detail ?> yang telah di booking</p>
                  </div>
                </div>

                <?php 

                  $daftar_order = TblOrder::find()->where(['id_detail_lapangan' => $_GET['id_detail'], 'status' => 'success'])->all();

                  foreach ($daftar_order as $key => $value) {
        
                ?>

                <div class="col-md-12">
                  <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                    <!-- <i class="bx bx-error-circle"></i> -->
                    <h3>Kode : <?= $value->kode ?></h3>
                    <p>
                      <table align="center">
                      <tr>
                        <th>Tgl booking</th>
                        <td>: <?= tanggal_indo($value->tgl_booking, true) ?></td>
                      </tr>
                      <tr>
                        <th>Jam </th>
                        <td>: <?= $value->time_start ?> - <?= $value->time_end ?></td>
                      </tr>
                    </table>
                    </p>
                    
                  </div>
                </div>

                <?php } ?>

              </div>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" style="background-color: #ffff;" data-aos="fade-up">

              <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up"> -->
              <?= Html::beginForm(['site/booking', 'action' => 'booking', 'id_detail' => $_GET['id_detail']], 'post', ['data-aos' => 'fade-up', 'style' => 'padding-top: 50px;']) ?>
                <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label>Kode order</label>
                    <input type="text" class="form-control" name="kode" value="<?= $shuffle ?>" readonly>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Lapangan</label>
                  <input type="text" class="form-control" name="detail" value="<?= $model->nama_detail ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="number" id="number" placeholder="No. Handphone / Whatsapp" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <?php 

                    echo DatePicker::widget([
                        'name' => 'date',    
                        'type' => DatePicker::TYPE_INPUT,
                        'options' => ['placeholder' => 'Pilih Tanggal'],
                        // 'convertFormat' => true,
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true,
                            'autoclose' => true
                        ]
                    ]);
                     ?>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control" name="jam" id="jam" placeholder="Berapa jam. ex : 1 , 2 , 3" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label>Mulai</label>
                    <input type="text" name="start" class="form-control" id="start" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" placeholder="contoh : 12:00" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label>Selesai</label>
                    <input type="text" class="form-control" name="end" id="end" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" placeholder="contoh : 12:00" required>
                  </div>
                </div>
                <!-- <div class="form-group mt-3">
                  <label>Total Bayar</label>
                  <input type="text" class="form-control" name="bayar" id="bayar" value="" readonly>
                </div> -->

                <div class="text-center"><button type="submit" class="btn-lg btn-primary btn-block">Booking</button></div>
              <!-- </form> -->
              <?= Html::endForm() ?>
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

    
