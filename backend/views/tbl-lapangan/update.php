<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapangan */

$this->title = 'Update Data Lapangan: ';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lapangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-lapangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
