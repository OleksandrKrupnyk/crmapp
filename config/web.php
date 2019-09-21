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
            'theme' => [
                'class' => \yii\base\Theme::class,
                'basePath' => '@app/themes/snowy',
            ],
            'renderers' => [
                'md' => [
                    'class' => \app\utilities\MarkdownRenderer::class
                ],
            ]
        ],
        'response' => [
            'formatters' => [
                'yaml' => [
                    'class' => \app\utilities\YamlResponseFormatter::class
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