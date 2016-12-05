<?php

namespace app\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
     /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return 'order';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'amount' => 'Amount',
        ];
    }
    public function getItems()
    {
        return $this->hasMany(Items::className(), ['id' => 'items_id'])
            ->viaTable('items_order', ['order_id' => 'id']);
    }
}
