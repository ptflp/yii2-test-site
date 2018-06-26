
<?php $this->beginBlock('block1'); ?>
	<h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

	<h1>Show action</h1>
<button class="btn btn-success" id="btn">Click me</button>
<?php
// foreach ($cats as $cat) {
// 	// echo '<br>'.$cat->title;
// }

// dump($cats); // возвращает категории без продуктов
// echo count ($cats[0]->products); // после обращения к объекту объект инициализируется (ЛЕНИВАЯ ОТЛОЖЕННАЯ ЗАГРУЗКА)
// dump($cats); // Возвращает совмещенный объект

foreach ($cats as $cat) {
	echo '<ul>';
		echo '<li>'. $cat->title .'</li>';
			$products = $cat->products;
			foreach ($products as $product) {
				echo '<ul>';
					echo '<li>'. $product->title .'</li>';
				echo '</ul>';
			}
	echo '</ul>';
}
//$this->title='ololo';
$js = <<< JS
	$('#btn').on('click',function() {
		console.log('clicked');
		$.ajax({
			url: 'index.php?r=post/index',
			data: {test: '123'},
			type: 'POST',
			success: function(res){
				$('.container').append(res);
			},
			error: function (){
				alert('error');
			}
		}).done(function(){console.log('done')});
	});
JS;
$this->registerJs($js);

 /*

<?php $this->registerJsFile('@web/js/scripts.js', ['depends'=>'yii\web\YiiAsset']) ?>
<?php $this->registerJs("$('.container').append('<p>this->registerJs');", \yii\web\View::POS_LOAD) ?>
<?php $this->registerCss(".container{background: #CCC;}") ?>
*/ ?>