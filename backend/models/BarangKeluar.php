<?php

namespace backend\models;

use Yii;

class BarangKeluar extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'barang_keluar';
    }

    public function rules()
    {
        return [
            [['user_id', 'tanggal_keluar'], 'required'],
            [['user_id'], 'integer'],
            [['tanggal_keluar'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'tanggal_keluar' => 'Tanggal Keluar',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getDetailBarangKeluars()
    {
        return $this->hasMany(DetailBarangKeluar::className(), ['barang_keluar_id' => 'id']);
    }
}