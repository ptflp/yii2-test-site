<?php
namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\Category;

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
			// dump(Yii::$app->request->post());
			// dump($model);
			// die();
			if($model->validate()) {
				Yii::$app->session->setFlash('success', 'Данные приняты');
				return $this->refresh();
			} else {
				Yii::$app->session->setFlash('error', 'Ошибка');
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
		// $cats = Category::find()->all(); as Object
		// $cats = Category::find()->orderBy(['id'=> SORT_ASC])->all(); as Object with Order Asc
		// $cats = Category::find()->orderBy(['id'=> SORT_DESC])->all(); as Object with Order Desc
		// $cats = Category::find()->asArray()->all(); // as Array
		// $cats = Category::find()->asArray()->where('parent=691')->all(); // as Array with where
		// $cats = Category::find()->asArray()->where(['like','title','pp'])->all(); // as Array with where like
		// $cats = Category::find()->asArray()->where(['<','id',695])->all(); // as Array with where below 695
		// $cats = Category::find()->asArray()->where(['<','id',695])->limit(1)->all(); // as Array with limit, limit is better than ->one()
		// $cats = Category::find()->asArray()->where(['<','id',695])->count(); //  row counts
		// $cats = Category::findOne(['<','id',695]); //  find one row
		// $cats = Category::findAll(['parent' => 691]); //  row counts
		// $query = "SELECT * FROM categories WHERE title LIKE '%pp%'"; using query
		// $cats = Category::findBySql($query)->all();
		// $query = "SELECT * FROM categories WHERE title LIKE :search"; // query parametrs shielding
		// $cats = Category::findBySql($query, [':search' => '%pp%'])->all();
		$cats= Category::findOne(694);
		return $this->render('show',compact('cats'));
	}
}