<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['id' => 'add-customer-form']);
/** @var \app\models\customer\CustomerRecord $customer */
/** @var \app\models\customer\PhoneRecord $phone */
echo $form->errorSummary([$customer, $phone])
    . $form->field($customer, 'name')
    . $form->field($customer, 'birth_date')
    . $form->field($customer, 'notes')
    . $form->field($phone, 'number')
    . Html::submitButton('Submit', ['class' => 'btn btn-primary']);
ActiveForm::end();

