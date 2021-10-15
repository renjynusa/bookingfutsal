<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapangan */

$this->title = 'Create Data Lapangan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lapangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-lapangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
