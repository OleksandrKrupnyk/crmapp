<?php

use yii\bootstrap4\Html;

echo Html::beginForm(['/customers'],'get')
    .Html::label('Phone number to search :','phone_number')
    .Html::textInput('phone_number')
    .Html::submitButton('Search')
    .Html::endForm();