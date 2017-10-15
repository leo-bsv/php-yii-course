<?php

namespace app\controllers;

use Yii;
use yii\db\Query;
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

//        $model = new Product();
//        $model->id = '1';
//        $model->name = 'Карманный справочник Linux';
//        $model->price = '132';
//        $model->category = 'Книги';
        
//        \Yii::$app->db->createCommand()->
//        addForeignKey('fx_access_user', 'evrnt_access', ['user_id'], 'evrnt_user', ['id'])->execute();
//        \Yii::$app->db->createCommand()->
//        addForeignKey('fx_access_note', 'evrnt_access', ['note_id'], 'evrnt_note', ['id'])->execute();
//        \Yii::$app->db->createCommand()-> 
//        addForeignKey('fx_note_user', 'evrnt_note', ['creator'], 'evrnt_user', ['id'])->execute();

        _end();
        
        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
