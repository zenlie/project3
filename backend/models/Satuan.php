<?php

namespace backend\models;

use Yii;


class Satuan extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'satuan';
    }

   
    public function rules()
    {
        return [
            [['nm_satuan'], 'required'],
            [['nm_satuan'], 'string', 'max' => 100],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm_satuan' => 'Nm Satuan',
        ];
    }

    
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['satuan_id' => 'id']);
    }
}
