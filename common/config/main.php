<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'Saludo' => [
            'class' => 'common\components\MyComponent',
            'message' => "José López Chávez"
        ],
    ],
];
