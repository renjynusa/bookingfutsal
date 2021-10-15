<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-lapangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_lapangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lapangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'harga_sewa')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'aktif' => 'Aktif', 'nonaktif' => 'Nonaktif', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
