<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang_keluar".
 *
 * @property int $id
 * @property int $user_id
 * @property string $tanggal_keluar
 *
 * @property User $user
 * @property DetailBarangKeluar[] $detailBarangKeluars
 */
class BarangKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'tanggal_keluar'], 'required'],
            [['user_id'], 'integer'],
            [['tanggal_keluar'], 'safe'],
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
            'tanggal_keluar' => 'Tanggal Keluar',
        ];
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
     * Gets query for [[DetailBarangKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBarangKeluars()
    {
        return $this->hasMany(DetailBarangKeluar::className(), ['barang_keluar_id' => 'id']);
    }
}
