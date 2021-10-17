<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MdPegawai */

$this->title = 'Data';
$this->params['breadcrumbs'][] = ['label' => 'Md Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="md-pegawai-create">

    <h1><?php Html::encode($this->title) ?></h1>

    <?= $this->render('_form_foto', [
        'model' => $model,
    ]) ?>

</div>