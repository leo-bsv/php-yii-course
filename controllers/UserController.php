<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Note;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Fills data in different tables.
     * @return mixed
     */
    public function actionFill()
    {
//        // ответ на вопрос 5а
//        $model = new User();
//        $model->username = 'Oskar';
//        $model->name = 'Оскар';
//        $model->surname = 'Де Ла Хойя';
//        $model->password = 'asdfasdf';
//        $model->salt = 'fghdgh';
//        $model->save();
//        
//        // ответ на вопрос 5б
//        $note = new Note();
//        $note->text = 'Купить капу';
//        $note->link('creator', $model);
//        $note->save();
//        
//        $note = new Note();
//        $note->text = 'Купить перчатки';
//        $note->link('creator', $model);
//        $note->save();
//        
//        $note = new Note();
//        $note->text = 'Выиграть бой с Мейвезером';
//        $note->link('creator', $model);
//        $note->save();                
//        
//        _end($model->find()->with('notes')->all());
        
//        // жадная загрузка со связанными данными (ответ на 5в)
//        $model = new User();
//        $model->find()->with('notes')->all();
//        return $this->renderContent(\yii\helpers\VarDumper::dumpAsString($model, 5, true));
        
//        // жадная загрузка с приджонеными связанными данными (ответ на 5г)
//        $model = new User();
//        $model->find()->joinWith('notes')->all();
//        return $this->renderContent(\yii\helpers\VarDumper::dumpAsString($model, 5, true));
        
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
}
