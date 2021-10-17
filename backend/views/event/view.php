<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-view">
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

        <?= Html::button(
            '<span class="glyphicon glyphicon-picture"></span> Upload Foto',
            [
              'value' => Url::to(['foto', 'id' => $model->id]),
              'title' => 'Upload Foto Siswa',
              'class' => 'showModalButton btn btn-success',
            ]
          ) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'keterangan:ntext',
            'tanggal_mulai',
            'tanggal_selesai',
            'biaya_pendaftaran',
            'hadiah:ntext',
            [
                'attribute' => 'foto',
                'value' => $model->foto == '' ? Yii::getAlias('@web/upload') . '/empty.jpg' : Yii::getAlias('@web/upload') . '/' . $model->foto,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ],
            'status',
        ],
    ]) ?>

</div>
