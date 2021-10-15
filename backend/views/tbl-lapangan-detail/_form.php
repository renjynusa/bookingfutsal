<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLapanganDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-lapangan-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_detail')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'booked' => 'Booked', 'free' => 'Free', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
