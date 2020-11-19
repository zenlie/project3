<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "satuan".
 *
 * @property int $id
 * @property string $nm_satuan
 *
 * @property Barang[] $barangs
 */
class Satuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_satuan'], 'required'],
            [['nm_satuan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm_satuan' => 'Nm Satuan',
        ];
    }

    /**
     * Gets query for [[Barangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['satuan_id' => 'id']);
    }
}
