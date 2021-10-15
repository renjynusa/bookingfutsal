<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapanganDetail */

$this->title = 'Create Data';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lapangan Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-lapangan-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
