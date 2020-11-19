<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailBarangMasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-barang-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barang_id')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barang_masuk_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
