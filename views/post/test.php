<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Test Action</h1>

<?php /*
dump($model)
*/

?>
<?php 
if (Yii::$app->session->hasFlash('success')) {
 	echo Yii::$app->session->getFlash('success');
 } ?>
<?php 
if (Yii::$app->session->hasFlash('error')) {
 	echo Yii::$app->session->getFlash('error');
 } ?>
<?php $form = ActiveForm::begin(['options'=> ['class'=>'form-horizontal','id'=>'myid']]) ?>
	<?= $form->field($model, 'name')?>
	<?= $form->field($model, 'email')->input('email') ?>
	<?= $form->field($model, 'text')->textarea(['rows' => 5])?>
	<?= Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end() ?>