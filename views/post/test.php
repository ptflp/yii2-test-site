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
dump($post);
 ?>

<?php
if (Yii::$app->session->hasFlash('success')) { ?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Success!</strong> <?=Yii::$app->session->getFlash('success')?>
	</div>
 <?php
 } ?>
<?php
if (Yii::$app->session->hasFlash('error')) {?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Error!</strong> <?=Yii::$app->session->getFlash('error')?>
	</div>
 <?php
 } ?>
<?php $form = ActiveForm::begin(['options'=> ['class'=>'form-horizontal','id'=>'myid']]) ?>
	<?= $form->field($model, 'name')?>
	<?= $form->field($model, 'email')->input('email') ?>
	<?= $form->field($model, 'text')->textarea(['rows' => 5])?>
	<?= Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end() ?>