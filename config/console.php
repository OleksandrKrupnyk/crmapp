<?php
return [
    'id' => 'crmapp-console',
    'basePath' => dirname(__DIR__) . '/',
    'components' => [
        'db'=>require (__DIR__.'/db.php'),
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ]
    ],
    'bootstrap' => ['debug', 'gii', 'log'],

];