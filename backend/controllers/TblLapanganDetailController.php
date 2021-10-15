<?php

namespace backend\controllers;

use Yii;
use backend\models\TblLapanganDetail;
use backend\models\TblLapanganDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblLapanganDetailController implements the CRUD actions for TblLapanganDetail model.
 */
class TblLapanganDetailController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST', 'GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all TblLapanganDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblLapanganDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblLapanganDetail model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_detail, $id_lapangan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_detail),
        ]);
    }

    /**
     * Creates a new TblLapanganDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new TblLapanganDetail();

        $model->id_lapangan = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['tbl-lapangan/view', 'id' => $id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblLapanganDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_detail, $id_lapangan)
    {
        $model = $this->findModel($id_detail);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['tbl-lapangan/view', 'id' => $id_lapangan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblLapanganDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_detail, $id_lapangan)
    {
        $this->findModel($id_detail)->delete();

        return $this->redirect(['tbl-lapangan/view', 'id' => $id_lapangan]);
    }

    /**
     * Finds the TblLapanganDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblLapanganDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblLapanganDetail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
