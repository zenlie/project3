<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BarangMasuk */

$this->title = 'Update Barang Masuk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-masuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
