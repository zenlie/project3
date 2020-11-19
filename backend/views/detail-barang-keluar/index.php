<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Barang Keluars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-barang-keluar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Barang Keluar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'barang_id',
            'barang_keluar_id',
            'jumlah_keluar',
            'ket_keluar',
            //'jumlah_permintaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
