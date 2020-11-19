<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detail_barang_masuk".
 *
 * @property int $id
 * @property int $barang_id
 * @property string $jumlah
 * @property string $ket
 * @property int $barang_masuk_id
 *
 * @property Barang $barang
 * @property BarangMasuk $barangMasuk
 */
class DetailBarangMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_barang_masuk';
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id' => 'barang_id']);
    }

    /**
     * Gets query for [[BarangMasuk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangMasuk()
    {
        return $this->hasOne(BarangMasuk::className(), ['id' => 'barang_masuk_id']);
    }
}
