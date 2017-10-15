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
        //_end(app()->db->createCommand("select * from {{order}}")->queryAll());
//        app()->db->getQueryBuilder()->insert($table, $columns, $params)
//        _end((new Query())->select(['name','email'])->from('order'));
        
//        app()->db->createCommand()->
//                insert('evrnt_user', [
//                    'username' => 'Ali',
//                    'name' => 'Мухамед',
//                    'surname' => 'Али',
//                    'password' => ' jtjkgidjf',
//                    'salt' => ' fdhsgsdfg'
//                ])->execute();
//        app()->db->createCommand()->
//                insert('evrnt_user', [
//                    'username' => 'Mike',
//                    'name' => 'Майк',
//                    'surname' => 'Тайсон',
//                    'password' => 'asdfasdf',
//                    'salt' => 'gfhfdg'
//                ])->execute();
//        app()->db->createCommand()->
//                insert('evrnt_user', [
//                    'username' => 'Kostia',
//                    'name' => 'Костя',
//                    'surname' => 'Дзю',
//                    'password' => 'dfasdf',
//                    'salt' => 'ghdfhgsdf'
//                ])->execute();
//        _end((new Query())->
//            from('evrnt_user')->
//            where(['id'=>'1'])->
//            all());
//        _end((new Query())->
//            from('evrnt_user')->
//            orderBy(['name' => SORT_ASC])->
//            all());
//        _end((new Query())->
//            from('evrnt_user')->
//            count());
//        _end(app()->db->createCommand()->batchInsert(
//                'evrnt_note',
//                ['text', 'creator'],
//                [
//                    ['Пробежка', 1],
//                    ['Душ', 1],
//                    ['Тренировка', 1],
//                ]
//                )->execute());
        
        $responce = (new Query())->
                from('evrnt_note')->
                innerJoin('evrnt_user', 'evrnt_note.creator = evrnt_user.id')
                ->all();
        _log($responce);

        $model = new Product();
        $model->id = '1';
        $model->name = 'Карманный справочник Linux';
        $model->price = '132';
        $model->category = 'Книги';
        
        return $this->render('index', [
            'model' => $model,
            'responce' => $responce
        ]);
    }

}
