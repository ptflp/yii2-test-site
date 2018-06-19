<?php
namespace app\controllers;
use Yii;
class PostController extends AppController {
	public $layout = 'basic';
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionShow(){
		return $this->render('show');
	}
}