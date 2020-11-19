<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Satuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="satuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_satuan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
