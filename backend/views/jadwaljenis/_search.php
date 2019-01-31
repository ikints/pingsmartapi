<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="jadwal-jenis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
	
	<div class='row p10'>
		
		<div class='col-sm-3'>
			<?= $form->field($model, 'Jenis',['inputOptions' => ['placeholder' => 'Cari Jenis','class' => 'form-control']])->label(false) ?>
		</div>
		<div class='col-sm-4'>
			 <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			 <?= Html::a('Reset',['index'],['class' => 'btn btn-default']);?>
		</div>
	</div>
	<?php ActiveForm::end(); ?>

</div>
