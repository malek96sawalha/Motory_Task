<?php

use yii\db\Migration;

/**
 * Class m231228_112745_services
 */
class m231228_112745_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(), // Change to integer type
            'warranty' => $this->integer(), // Assuming warranty is an integer, change if needed
        ]);

        $this->addForeignKey(
            'fk-services-category_id',
            'services',
            'category_id',
            'category',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-services-category_id', 'services');
        $this->dropTable('services');
        
        // Use alterColumn separately to modify the 'price' column
     }
}