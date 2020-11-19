<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nm_barang',
            'stock_min',
            'stock',
            'keterangan',
            //'jenis_id',
            //'satuan_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
