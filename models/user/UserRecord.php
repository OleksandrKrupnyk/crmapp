<?php

namespace app\models\user;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int    $id
 * @property string $username Username
 * @property string $password Password
 */
class UserRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'       => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public function beforeSave($insert)
    {
        $return = parent::beforeSave($insert);
        if ($this->isAttributeChanged('password')) {
            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        }
        return $return;
    }

}
