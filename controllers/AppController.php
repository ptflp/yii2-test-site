<?php
namespace app\controllers;
use yii\web\Controller;
/**
  *
  */
 class AppController extends Controller
 {
 	public	function actionFoo()
 	{
 		return 'HAHAH';
 	}
 	public function debug ($arr) {
 		echo '<pre>'.print_r($arr,true).'</pre>';
 	}

    public function dump($var) {
        echo '<pre>'.print_r($var,true).'</pre>';
    }
 }