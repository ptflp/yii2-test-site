<h1>Show action</h1>
<button class="btn btn-success" id="btn">Click me</button>

<?php
$this->title='ololo';
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