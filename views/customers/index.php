<?php

use yii\widgets\ListView;

echo ListView::widget(
    [
        'options'=>[
            'class'=>'list-view',
            'id'=>'serach_result'
        ],
        'itemView'=>'_customer',
        'dataProvider'=>$records
    ]
);