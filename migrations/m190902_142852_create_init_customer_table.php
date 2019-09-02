<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%init_customer}}`.
 */
class m190902_142852_create_init_customer_table extends Migration
{
    public $table = '{{%customer}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey()->comment('ID'),
            'name' => $this->string()->comment('Name'),
            'birth_date' => $this->date()->comment('BirthDay'),
            'notes'=> $this->text()->comment('Notes'),
            'created_at' => $this->integer(11)->comment('Created At'),
            'updated_at' => $this->integer(11)->comment('Updated At')
        ],
            'ENGINE=InnoDB'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
