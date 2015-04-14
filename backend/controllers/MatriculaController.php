<?php

namespace backend\controllers;

use Yii;
use backend\models\Matricula;
use backend\models\MatriculaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MatriculaController implements the CRUD actions for Matricula model.
 */
class MatriculaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Matricula models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MatriculaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Matricula model.
     * @param string $codigo
     * @param integer $idAgrupamiento
     * @return mixed
     */
    public function actionView($codigo, $idAgrupamiento)
    {
        return $this->render('view', [
            'model' => $this->findModel($codigo, $idAgrupamiento),
        ]);
    }

    /**
     * Creates a new Matricula model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Matricula();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo' => $model->codigo, 'idAgrupamiento' => $model->idAgrupamiento]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Matricula model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $codigo
     * @param integer $idAgrupamiento
     * @return mixed
     */
    public function actionUpdate($codigo, $idAgrupamiento)
    {
        $model = $this->findModel($codigo, $idAgrupamiento);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codigo' => $model->codigo, 'idAgrupamiento' => $model->idAgrupamiento]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Matricula model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $codigo
     * @param integer $idAgrupamiento
     * @return mixed
     */
    public function actionDelete($codigo, $idAgrupamiento)
    {
        $this->findModel($codigo, $idAgrupamiento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Matricula model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $codigo
     * @param integer $idAgrupamiento
     * @return Matricula the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codigo, $idAgrupamiento)
    {
        if (($model = Matricula::findOne(['codigo' => $codigo, 'idAgrupamiento' => $idAgrupamiento])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
