<?php

namespace app\models;

use yii\db\ActiveRecord;

class Items extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return 'items';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'items_name' => 'Items name',
            'items_description' => 'Description',
        ];
    }
    public function rules()
    {
        return [
            [['items_name', 'items_description'], 'required'],
        ];
    }

    public function getOrder()
    {
        return $this->hasMany(Order::className(), ['id' => 'order_id'])
            ->viaTable('items_order', ['items_id' => 'id']);
    }
}