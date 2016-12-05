<?php

namespace app\models;

use app\db\ActiveRecord;

class Customer extends ActiveRecord
{
    public static function tableName()
    {
        return 'customer';
    }
    public function rules()
    {
        return [
            [['customer_name'], 'required'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'customer_name' => 'Customer Name',
        ];
    }

    /**
     * @return mixed
     */
    public function getOrders()
    {
        return $this->hasOne(Order::className(), ['customer_id' => 'id']);
    }
}