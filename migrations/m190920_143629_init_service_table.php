<?php

use yii\db\Migration;

/**
 * Class m190920_143629_init_service_table
 */
class m190920_143629_init_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('service',
            [
                'id' => 'pk',
                'name' => 'string unique',
                'hourly_rate' => 'integer'
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('service');
    }

}
