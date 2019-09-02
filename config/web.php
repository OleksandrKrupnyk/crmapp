<?php
return [
    'id' => 'crmapp',
    'basePath' => dirname(__DIR__) . '/',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'secretPassword',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
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
            'class' => \yii\debug\Module::class,
            'allowedIPs' => ['*']
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ]
    ],
    'bootstrap' => ['debug', 'gii', 'log'],

];