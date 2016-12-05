<?php

use yii\db\Migration;

/**
 * Handles the creation of table `items`.
 */
class m161204_201116_create_items_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('items', [
            'id' => $this->primaryKey(),
            'items_name' => $this->string(30),
            'items_description' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('items');
    }
}
