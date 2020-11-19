<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Barang Keluars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-keluar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang Keluar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'tanggal_keluar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
