<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m161204_195821_create_customer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customer');
    }
}
