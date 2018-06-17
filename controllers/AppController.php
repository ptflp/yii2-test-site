<?php
namespace app\controllers;
use yii\web\Controller;
use dump_r\Core;
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
 function dump($var)
 {
        echo dump_r($var);
 }