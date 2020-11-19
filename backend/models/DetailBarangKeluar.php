<?php

namespace backend\models;

use Yii;

class DetailBarangKeluar extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'detail_barang_keluar';
    }

    public function rules()
    {
        return [
            [['barang_id', 'barang_keluar_id', 'jumlah_keluar', 'ket_keluar', 'jumlah_permintaan'], 'required'],
            [['barang_id', 'barang_keluar_id'], 'integer'],
            [['jumlah_keluar', 'ket_keluar', 'jumlah_permintaan'], 'string', 'max' => 100],
            [['barang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['barang_id' => 'id']],
            [['barang_keluar_id'], 'exist', 'skipOnError' => true, 'targetClass' => BarangKeluar::className(), 'targetAttribute' => ['barang_keluar_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'barang_id' => 'Barang ID',
            'barang_keluar_id' => 'Barang Keluar ID',
            'jumlah_keluar' => 'Jumlah Keluar',
            'ket_keluar' => 'Ket Keluar',
            'jumlah_permintaan' => 'Jumlah Permintaan',
        ];
    }

    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id' => 'barang_id']);
    }

    public function getBarangKeluar()
    {
        return $this->hasOne(BarangKeluar::className(), ['id' => 'barang_keluar_id']);
    }
}
