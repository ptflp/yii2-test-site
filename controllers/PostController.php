<?php
namespace app\controllers;
use Yii;
use app\models\TestForm;

class PostController extends AppController {
	public $layout = 'basic';
	public function beforeAction($action)
	{
		if ($action->id == 'index') {
			$this->enableCsrfValidation = false;
		}
		return parent::beforeAction($action);
	}
	public function actionIndex($min=false,$max=false){
		if (Yii::$app->request->isAjax) {
			Yii::$app->request->post();
			return dump($_POST);
		}
		$model = new TestForm();
		if ($model->load(Yii::$app->request->post())) {
			dump(Yii::$app->request->post());
			dump($model);
			die();
			if($model->validate()) {
				Yii::$app->session->setFlash()

			}
		}
		$model->min = $min ? $min : $model->min;
		$model->max = $max ? $max : $model->max;
		return $this->render('test', compact('model'));
	}
	public function actionShow(){
		$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевые слова']);
		$this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы']);
		$this->view->title='Title from controller';
		return $this->render('show');
	}
}