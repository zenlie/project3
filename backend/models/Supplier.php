<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property string $nm_supplier
 * @property string $ket_supplier
 * @property string $notelp_supplier
 *
 * @property BarangMasuk[] $barangMasuks
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_supplier', 'ket_supplier', 'notelp_supplier'], 'required'],
            [['nm_supplier', 'ket_supplier', 'notelp_supplier'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm_supplier' => 'Nm Supplier',
            'ket_supplier' => 'Ket Supplier',
            'notelp_supplier' => 'Notelp Supplier',
        ];
    }

    /**
     * Gets query for [[BarangMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangMasuks()
    {
        return $this->hasMany(BarangMasuk::className(), ['supplier_id' => 'id']);
    }
}
