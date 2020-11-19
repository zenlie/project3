<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailBarangMasuk */

$this->title = 'Create Detail Barang Masuk';
$this->params['breadcrumbs'][] = ['label' => 'Detail Barang Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-barang-masuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
