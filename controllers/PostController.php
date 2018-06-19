<?php
namespace app\controllers;
use Yii;
class PostController extends AppController {
	public $layout = 'basic';
	public function beforeAction($action)
	{
		if ($action->id == 'index') {
			$this->enableCsrfValidation = false;
		}
		return parent::beforeAction($action);
	}
	public function actionIndex($test=false){
		if (Yii::$app->request->isAjax) {
			Yii::$app->request->post();
			return dump($_POST);
		}
		return $this->render('index');
	}
	public function actionShow(){
		$this->view->title='Title from controller';
		return $this->render('show');
	}
}