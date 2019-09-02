<?php


namespace app\models\customer;


use yii\db\ActiveRecord;

/**
 * Class PhoneRecord
 *
 * @property  $number
 * @property  $customer_id
 * @package      app\models\customer
 * @author       Alex.Krupnik <krupnik_a@ukr.net>
 * @copyright (c), Thread
 */
class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%phone}}';
    }

    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'], 'required']
        ];
    }


}