<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nm_supplier',
            'ket_supplier',
            'notelp_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
