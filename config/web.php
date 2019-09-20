<?php
return [
    'id' => 'crmapp',
    'basePath' => dirname(__DIR__) . '/',
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
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
        'view' => [
            'renderers' => [
                'md' => [
                    'class' => \app\utilities\MarkdownRenderer::class
                ]
            ]
        ]

    ],
    'modules' => [
        'debug' => [
            'class' => \yii\debug\Module::class,
            'allowedIPs' => ['*']
        ],
        'gii' => [
            'class' => \yii\gii\Module::class,
            'allowedIPs' => ['*'],
        ]
    ],
    'bootstrap' => ['debug', 'gii', 'log'],
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php')
];