<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string $nm_barang
 * @property string $stock_min
 * @property string $stock
 * @property string $keterangan
 * @property int $jenis_id
 * @property int $satuan_id
 *
 * @property Satuan $satuan
 * @property Jenis $jenis
 * @property DetailBarangKeluar[] $detailBarangKeluars
 * @property DetailBarangMasuk[] $detailBarangMasuks
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Gets query for [[Satuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuan()
    {
        return $this->hasOne(Satuan::className(), ['id' => 'satuan_id']);
    }

    /**
     * Gets query for [[Jenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'jenis_id']);
    }

    /**
     * Gets query for [[DetailBarangKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBarangKeluars()
    {
        return $this->hasMany(DetailBarangKeluar::className(), ['barang_id' => 'id']);
    }

    /**
     * Gets query for [[DetailBarangMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBarangMasuks()
    {
        return $this->hasMany(DetailBarangMasuk::className(), ['barang_id' => 'id']);
    }
}
