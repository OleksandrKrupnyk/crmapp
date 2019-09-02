<?php


namespace app\models\customer;


class Customer
{
    public $name;
    public $birth_date;
    public $notes = '';
    /**
     * @var Phone[]
     */
    public $phones = [];

    public function __construct($name, $birth_name)
    {
        $this->name       = $name;
        $this->birth_date = $birth_name;


    }


}