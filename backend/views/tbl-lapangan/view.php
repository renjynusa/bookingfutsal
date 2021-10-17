<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapangan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lapangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-lapangan-view">

    <h1></h1>

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
            'kode_lapangan',
            'nama_lapangan',
            'tempat:ntext',
            'harga_sewa',
            // 'jumlah',
            [
                'attribute' => 'foto',
                'value' => $model->foto == '' ? Yii::getAlias('@web/upload') . '/empty.jpg' : Yii::getAlias('@web/upload') . '/' . $model->foto,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ],
            'status',
        ],
    ]) ?>

    <p>
        <?= Html::a('Tambah Lapangan', ['tbl-lapangan-detail/create', 'id' => $_GET['id']], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => " {update} {delete}",
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<button class = "btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Detail</button>', $url, [
                            'title' => Yii::t('app', 'lead-view'),
                        ]);
                    },

                    'update' => function ($url, $model) {
                        return Html::a('<button class = "btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Ubah</button>', $url, [
                            'title' => Yii::t('app', 'lead-update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<button class = "btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>', $url, [
                            'title' => Yii::t('app', 'lead-delete'),
                            'data' => [
                                'method' => 'post',
                            ],
                            'class' => 'tombol-hapus'
                        ]);
                    },

                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        $url = 'index.php?r=tbl-lapangan-detail/view&id_detail=' . $model->id_detail . '&id_lapangan=' .$_GET['id'];
                        return $url;
                    }

                    if ($action === 'update') {
                        $url = 'index.php?r=tbl-lapangan-detail/update&id_detail=' . $model->id_detail . '&id_lapangan=' .$_GET['id'];
                        return $url;
                    }

                    if ($action === 'delete') {
                        $url = 'index.php?r=tbl-lapangan-detail/delete&id_detail=' . $model->id_detail . '&id_lapangan=' .$_GET['id'];
                        return $url;
                    }
                }
            ],

            // 'id',
            'nama_detail',
            // 'nama_lapangan',
            // 'tempat:ntext',
            // 'harga_sewa',
            //'jumlah',
            // 'status',

        ],
        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
        //'pjax' => true, // pjax is set to always true for this demo
        // set your toolbar
        'toolbar' =>  [

            '{export}',
            '{toggleData}',
        ],
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        // set export properties
        'export' => [
            'fontAwesome' => true
        ],
        'responsiveWrap' => false,
        // parameters from the demo form
        //'bordered' => $bordered,
        //'striped' => $striped,
        //'condensed' => $condensed,
        //'responsive' => $responsive,
        //'hover' => $hover,
        //'showPageSummary' => $pageSummary,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => 'Data Lapangan',
        ],
        'persistResize' => false,
        'toggleDataOptions' => ['minCount' => 100],
        'autoXlFormat' => true,
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        'export' => [
            'showConfirmAlert' => false,
            'target' => GridView::TARGET_BLANK
        ],
        'exportConfig' => [
            GridView::EXCEL =>  [
                'filename' => 'Data Kota',
                'showPageSummary' => true,
            ]

        ],
    ]); ?>

</div>
