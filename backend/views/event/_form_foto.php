<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MdPegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="md-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'foto')->fileInput() ?>
                    
                            <img id="blah" src="#" alt=" "/>
                            
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-saved"></span> Simpan', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php
            if ($model->foto != "") {
                echo "<img src='upload/$model->foto' width='250'>";
            } else {
                echo "<img src='upload/empty.jpg' width='250'>";
            }
            ?>
        </div>
    </div>

    <div class="form-group">

    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    var reader = new FileReader();
    var yourImg = document.getElementById('blah');
    if(yourImg && yourImg.style) {
        yourImg.style.height = '200px';
        yourImg.style.width = '200px';
    }
    reader.onload = function (e) {
        $('#blah').attr('src', e.target.result);
    }
       
       function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#mdsiswa-foto").change(function(){
            readURL(this);

        });
</script>