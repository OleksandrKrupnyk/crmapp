<?php
$I = new Step\Acceptance\CRMOperatorSteps($scenario);
$I->wantTo('add two different customers to database');

$I->amInAddCustomerUi();

$first_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($first_customer);
$I->submitCustomerDataForm();

$I->seeIAmInListCustomersUi();


$I->amInAddCustomerUi();

$second_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($second_customer);
$I->submitCustomerDataForm();

$I->seeIAmInListCustomersUi();

$I = new \Step\Acceptance\CRMUserSteps($scenario);
$I->wantTo('query the customer info using his phone number');

$I->amInQueryCustomerUi();
$I->fillInPhoneFieldWithDataForm($first_customer);
$I->clickSearchButton();

$I->seeIAmInListCustommerUi();
$I->seeCustomerInList($first_customer);
$I->dontSeeCustomerInList($second_customer);
