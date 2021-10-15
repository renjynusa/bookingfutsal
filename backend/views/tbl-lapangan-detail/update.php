<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapanganDetail */

$this->title = 'Update Data';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lapangan Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail, 'url' => ['view', 'id' => $model->id_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-lapangan-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
