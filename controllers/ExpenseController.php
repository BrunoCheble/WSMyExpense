<?php

namespace app\controllers;

use Yii;
use app\models\Expense;
use app\models\ExpenseSearch;
use app\models\forms\ExpenseForm;
use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;

/**
 * NotificationController implements the CRUD actions for Expense model.
 */
class ExpenseController extends ActiveController
{
	public $modelClass = 'app\models\Expense';
    public $enableCsrfValidation = false;
    
	public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

	public function behaviors()
	{
		$behaviors = parent::behaviors();

		$behaviors['contentNegotiator'] = [
                    'class' => \yii\filters\ContentNegotiator::className(),
                    'formats' => [
                        'application/json' => \yii\web\Response::FORMAT_JSON,
                    ]
        ];

	    return ArrayHelper::merge($behaviors, [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'DELETE', 'HEAD'],
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Allow-Credentials' => null,
                    'Access-Control-Max-Age' => 86400,
                    'Access-Control-Expose-Headers' => [],
                ],
            ],
        ]);
	}

	public function actionIndex() {
	
		$searchModel = new ExpenseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $dataProvider->getModels();	
	}

	public function actionError() {
		die('Erro');
	}

/*
	public function createAction() {
		
		$model = new Expense;
		$form  = new ExpenseForm;

		if($model->load(Yii::$app->request->post()) && $model->validate()) {

			$form->repeat   = Yii::$app->request->post('repeat');
			$form->_expense = $model;

			$form->create();
		}

		exit();
	}

	public function actionUpdate() {
		
		die('2');
		$model = new Expense();

		if($model->load(Yii::$app->request->post()) && $model->save()) {
			die('salvo com sucesso');
		}

		exit();
	}

	public function deleteAction($id) {
		
		$model = new Expense();

		die('3');
		if($model->load(Yii::$app->request->post()) && $model->save()) {
			die('salvo com sucesso');
		}

		exit();
	}
	*/
}
