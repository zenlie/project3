<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="detail-barang-keluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barang_id')->textInput() ?>

    <?= $form->field($model, 'barang_keluar_id')->textInput() ?>

    <?= $form->field($model, 'jumlah_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_permintaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
