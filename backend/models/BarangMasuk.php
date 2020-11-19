<?php

namespace backend\models;

use Yii;

class BarangMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'supplier_id', 'tgl_masuk'], 'required'],
            [['user_id', 'supplier_id'], 'integer'],
            [['tgl_masuk'], 'safe'],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'supplier_id' => 'Supplier ID',
            'tgl_masuk' => 'Tgl Masuk',
        ];
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[DetailBarangMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBarangMasuks()
    {
        return $this->hasMany(DetailBarangMasuk::className(), ['barang_masuk_id' => 'id']);
    }
}
