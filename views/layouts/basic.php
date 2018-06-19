<?php
use yii\helpers\Html;
use app\assets\MyAsset;

MyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<div class="wrap">
		<div class="container">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><?=HTML::a('Главная','/')?></li>
			  <li role="presentation"><?=HTML::a('Статьи',['post/index'])?></li>
			  <li role="presentation"><?=HTML::a('Статья',['post/show'])?></li>
			</ul>
			<?=$content?>
		</div>
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>