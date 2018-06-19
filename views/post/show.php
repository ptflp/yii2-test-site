<h1>Show action</h1>
<?php $this->registerJsFile('@web/js/scripts.js', ['depends'=>'yii\web\YiiAsset']) ?>
<?php $this->registerJs("$('.container').append('<p>this->registerJs');", \yii\web\View::POS_LOAD) ?>


<?php $this->registerCss(".container{background: #CCC;}") ?>