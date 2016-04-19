<?php

namespace api\controllers;

use Yii;

class SiteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return __FILE__;
    }
}