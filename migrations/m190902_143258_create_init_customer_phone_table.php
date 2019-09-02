<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%init_customer_phone}}`.
 */
class m190902_143258_create_init_customer_phone_table extends Migration
{
    public $phoneTable = '{{%phone}}';
    public $customerTable = '{{%customer}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->phoneTable, [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->comment('Customer ID'),
            'number' => $this->string(16)->comment('Number')
        ],'ENGINE=InnoDB');
        $this->addForeignKey('customer_phone_numbers',
            $this->phoneTable, 'customer_id',
            $this->customerTable, 'id',
            'CASCADE',
            'CASCADE');
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('customer_phone_numbers', $this->phoneTable);
        $this->dropTable($this->phoneTable);
    }
}
