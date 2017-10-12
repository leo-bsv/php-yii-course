<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Product;

class TestController extends Controller
{
    /**
     * Displays Testpage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return Yii::$app->test->run();
        
        $model = new Product();
        $model->id = '1';
        $model->name = 'Карманный справочник Linux';
        $model->price = '132';
        $model->category = 'Книги';
        
        return $this->render('index', [
            'model' => $model
        ]);
    }

}
