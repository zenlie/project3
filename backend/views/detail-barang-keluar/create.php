<?php

use yii\helpers\Html;

$this->title = 'Create Detail Barang Keluar';
$this->params['breadcrumbs'][] = ['label' => 'Detail Barang Keluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-barang-keluar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
