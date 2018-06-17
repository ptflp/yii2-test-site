<?php
namespace app\controllers;
class PostController extends AppController {
	public function actionTest(){
		$names=['Ivanov','Petrov','Sidorov'];
		var_dump($names);
		$this->debug($names);
		//return $this->render('test');
	}
} ?>