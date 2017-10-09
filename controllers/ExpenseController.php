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
        unset($actions['update']);
        unset($actions['create']);
        return $actions;
    }

    protected function verbs(){
        return [
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH','POST'],
            'delete' => ['DELETE'],
            'view' => ['GET'],
            'index'=>['GET'],
        ];
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

	private function updateStatus($model) {

		$model->status = Yii::$app->request->bodyParams['Expense']['status'];

		if($model->save()) return $model;
	}

	public function actionUpdate($id) {
		
		$model = Expense::findOne($id);

		// Alteração de Status
		if(!empty(Yii::$app->request->bodyParams))
			return $this->updateStatus($model);

		// Alteração no formulário
		
		$form  = new ExpenseForm;

		if($model->load(Yii::$app->request->post()) && $model->validate()) {

			$form->repeat   = Yii::$app->request->post('repeat');
			$form->_expense = $model;

			return $form->update();
		}
	}
	
	public function createAction() {
		
		$model = new Expense;
		$form  = new ExpenseForm;

		if($model->load(Yii::$app->request->post()) && $model->validate()) {

			$form->repeat   = Yii::$app->request->post('repeat');
			$form->_expense = $model;

			return $form->create();
		}

		return false;
	}

}
