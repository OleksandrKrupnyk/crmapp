<?php

namespace Step\Acceptance;

use Faker\Factory;

class CRMOperatorSteps extends \AcceptanceTester
{

    public function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customer/add');
    }

    public function imagineCustomer()
    {
        $faker = Factory::create();
        return [
            'CustomerRecord[name]' => $faker->name,
            'CustomerRecord[birth_date]' => $faker->date('Y-m-d'),
            'CustomerRecord[notes]' => $faker->sentence(8),
            'PhoneRecord[number]' => $faker->phoneNumber

        ];
    }

    public function fillCustomerDataForm($fieldsData)
    {
        $I = $this;
        foreach ($fieldsData as $key => $value) {
            $I->fillField($key, $value);
        }
    }

    public function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
    }

    public function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers');
    }


    public function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }

}