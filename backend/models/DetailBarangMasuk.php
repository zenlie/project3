<?php

namespace backend\models;

use Yii;

class DetailBarangMasuk extends \yii\db\ActiveRecord
{
    
    public function rules()
    {
        return [
            [['barang_id', 'jumlah', 'ket', 'barang_masuk_id'], 'required'],
            [['barang_id', 'barang_masuk_id'], 'integer'],
            [['jumlah', 'ket'], 'string', 'max' => 100],
            [['barang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['barang_id' => 'id']],
            [['barang_masuk_id'], 'exist', 'skipOnError' => true, 'targetClass' => BarangMasuk::className(), 'targetAttribute' => ['barang_masuk_id' => 'id']],
        ];
    }

   
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'barang_id' => 'Barang ID',
            'jumlah' => 'Jumlah',
            'ket' => 'Ket',
            'barang_masuk_id' => 'Barang Masuk ID',
        ];
    }


    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id' => 'barang_id']);
    }

    public function getBarangMasuk()
    {
        return $this->hasOne(BarangMasuk::className(), ['id' => 'barang_masuk_id']);
    }
}
