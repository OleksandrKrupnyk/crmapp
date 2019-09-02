<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See taht landing page is up');
$I->amOnPage('/');
$I->see('Our CRM');
