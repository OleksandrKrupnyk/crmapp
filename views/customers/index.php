<?php

use yii\widgets\ListView;

echo ListView::widget(
    [
        'options'=>[
            'class'=>'list-view',
            'id'=>'search_result'
        ],
        'itemView'=>'_customer',
        'dataProvider'=>$records
    ]
);