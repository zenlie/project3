<?php

namespace backend\models;

use Yii;

class Supplier extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'supplier';
    }

    public function rules()
    {
        return [
            [['nm_supplier', 'ket_supplier', 'notelp_supplier'], 'required'],
            [['nm_supplier', 'ket_supplier', 'notelp_supplier'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm_supplier' => 'Nm Supplier',
            'ket_supplier' => 'Ket Supplier',
            'notelp_supplier' => 'Notelp Supplier',
        ];
    }

    public function getBarangMasuks()
    {
        return $this->hasMany(BarangMasuk::className(), ['supplier_id' => 'id']);
    }
}
