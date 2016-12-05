<?php

use yii\db\Migration;

/**
 * Handles the creation of table `items_order`.
 * Has foreign keys to the tables:
 *
 * - `items`
 * - `order`
 */
class m161204_201323_create_junction_table_for_items_and_order_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('items_order', [
            'items_id' => $this->integer(),
            'order_id' => $this->integer(),
            'PRIMARY KEY(items_id, order_id)',
        ]);

        // creates index for column `items_id`
        $this->createIndex(
            'idx-items_order-items_id',
            'items_order',
            'items_id'
        );

        // add foreign key for table `items`
        $this->addForeignKey(
            'fk-items_order-items_id',
            'items_order',
            'items_id',
            'items',
            'id',
            'CASCADE'
        );

        // creates index for column `order_id`
        $this->createIndex(
            'idx-items_order-order_id',
            'items_order',
            'order_id'
        );

        // add foreign key for table `order`
        $this->addForeignKey(
            'fk-items_order-order_id',
            'items_order',
            'order_id',
            'order',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `items`
        $this->dropForeignKey(
            'fk-items_order-items_id',
            'items_order'
        );

        // drops index for column `items_id`
        $this->dropIndex(
            'idx-items_order-items_id',
            'items_order'
        );

        // drops foreign key for table `order`
        $this->dropForeignKey(
            'fk-items_order-order_id',
            'items_order'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            'idx-items_order-order_id',
            'items_order'
        );

        $this->dropTable('items_order');
    }
}
