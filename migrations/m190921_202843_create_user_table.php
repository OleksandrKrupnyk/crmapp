<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190921_202843_create_user_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user}}',
            [
                'id'       => $this->primaryKey(),
                'username' => $this->string()->unique()->comment('Username'),
                'password' => $this->string()->comment('Password')
            ]
        );

        $this->addCommentOnTable('{{%user}}', 'Users');
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
