<?php

namespace backend\models;

use Yii;

class Barang extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'barang';
    }

    public function rules()
    {
        return [
            [['nm_barang', 'stock_min', 'stock', 'keterangan', 'jenis_id', 'satuan_id'], 'required'],
            [['jenis_id', 'satuan_id'], 'integer'],
            [['nm_barang', 'stock_min', 'stock', 'keterangan'], 'string', 'max' => 100],
            [['satuan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Satuan::className(), 'targetAttribute' => ['satuan_id' => 'id']],
            [['jenis_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['jenis_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm_barang' => 'Nm Barang',
            'stock_min' => 'Stock Min',
            'stock' => 'Stock',
            'keterangan' => 'Keterangan',
            'jenis_id' => 'Jenis ID',
            'satuan_id' => 'Satuan ID',
        ];
    }

    public function getSatuan()
    {
        return $this->hasOne(Satuan::className(), ['id' => 'satuan_id']);
    }

    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'jenis_id']);
    }

    public function getDetailBarangKeluars()
    {
        return $this->hasMany(DetailBarangKeluar::className(), ['barang_id' => 'id']);
    }

    public function getDetailBarangMasuks()
    {
        return $this->hasMany(DetailBarangMasuk::className(), ['barang_id' => 'id']);
    }
}
