<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblOrder */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-order-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <br><br>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode',
            'tgl_order',
            'tgl_booking',
            'nama',
            'telp',
            'jumlah_jam',
            'time_start',
            'time_end',
            'total_bayar',
            'status',
        ],
    ]) ?>

</div>
