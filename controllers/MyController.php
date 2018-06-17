<?php 

namespace app\controllers;
use yii\web\Controller;
/**
  * 
  */
 class MyController extends Controller
 {
 	
 	public function actionIndex($id=false)
 	{
 		$hi='Hello, World';
 		$names=['Petro','Ivanov','Sidorov','Vasiliev'];
 		return $this->render('index', ['hello'=>$hi,'names'=>$names,'id'=>$id]);
 	}
 } ?>