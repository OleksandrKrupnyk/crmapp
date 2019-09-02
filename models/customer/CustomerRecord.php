<?php


namespace app\models\customer;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * Class CustomerRecord
 *
 * @property  $name
 * @property  $birth_date
 * @property  $notes
 *
 * @package      app\models\customer
 * @author       Alex.Krupnik <krupnik_a@ukr.net>
 * @copyright (c), Thread
 */
class CustomerRecord extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%customer}}';
    }


    public function rules()
    {
        return [

            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 255],
            ['birth_date', 'date', 'format' => 'Y-m-d'],
            ['notes', 'safe']
        ];
    }


    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'class' => TimestampBehavior::class,
        ]);
    }

}