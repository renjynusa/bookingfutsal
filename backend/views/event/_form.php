<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_mulai')->widget(\yii\jui\DatePicker::classname(), [

            'clientOptions' => [
                        'changeMonth'=>true, 
                        'changeYear'=>true,
            ],
            'dateFormat' => 'yyyy-MM-dd',
            'options' => ['class' => 'form-control', 'autocomplete'=>'off']
    ]) ?>

    <?= $form->field($model, 'tanggal_selesai')->widget(\yii\jui\DatePicker::classname(), [

            'clientOptions' => [
                        'changeMonth'=>true, 
                        'changeYear'=>true,
            ],
            'dateFormat' => 'yyyy-MM-dd',
            'options' => ['class' => 'form-control', 'autocomplete'=>'off']
    ]) ?>

    <?= $form->field($model, 'biaya_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'hadiah')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'aktif' => 'Aktif', 'nonaktif' => 'Nonaktif', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
