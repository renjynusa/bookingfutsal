<?php

use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use backend\models\AktPenjualan;
use backend\models\DataBarang;
use backend\models\DataPembelianDetail;
use backend\models\DataPenjualanBarang;

/* @var $this yii\web\View */

if (Yii::$app->user->isGuest) {
    header("Location: index.php");
    exit;
}
$this->title = 'Dashboard';
?>
<div class="site-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <ul class="breadcrumb">
        <li><a href="/"><?= $this->title ?></a></li>
    </ul>
</div>


<script type="text/javascript" src="js/Chart.js"></script>