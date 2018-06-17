<?php
namespace app\controllers;
use Yii;
class PostController extends AppController {
	public function actionTest(){
		$names=['Ivanov','Petrov','Sidorov'];
		$var='';
		// var_dump($names);
		// $this->debug($names);
		// $this->dump($names);
		return $this->render('test');
	}
}