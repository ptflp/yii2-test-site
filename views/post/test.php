<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Test Action</h1>

<?php /*
dump($model)
*/

?>
<?php $form = ActiveForm::begin(['options'=> ['class'=>'form-horizontal','id'=>'myid']]) ?>
	<?= $form->field($model, 'name')->label('Имя')?>
	<?= $form->field($model, 'email')->input('email') ?>
	<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows' => 5])?>
	<?= Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end() ?>