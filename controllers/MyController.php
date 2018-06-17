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
 		$hello='Hello, World';
 		$names=['Petro','Ivanov','Sidorov','Vasiliev'];
 		$id = $id ? $id : 'test';
 		//return $this->render('index', ['hello'=>$hi,'names'=>$names,'id'=>$id]);
 		return $this->render('index', compact('hello','names','id'));
 	}
 } ?>