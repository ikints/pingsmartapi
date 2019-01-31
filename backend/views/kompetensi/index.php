<?php

use yii\helpers\Html;
use kartik\grid\GridView;

$this->title = 'Kompetensi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kompetensi-index">
	
	<div class='box box-info'>
		<div class='box-header with-border'>
			<h1>
				<?= Html::encode($this->title) ?>
				<span class='pull-right'>
					<?= Html::a('Input Kompetensi', ['create'], ['class' => 'btn btn-success']) ?>
				</span>
			</h1>
		</div>
		<div class='box-body no-padding'>
			<?= $this->render('_search',['model' => $searchModel]);?>
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				//'filterModel' => $searchModel,
				'bordered'=> false,
				'columns' => [
					['class' => 'kartik\grid\SerialColumn'],

					//'Id',
					'Kompetensi',
					[
						'label' => 'Program Studi',
						'attribute' => '',
						'format' => 'raw',
						'vAlign' => 'middle',
						'group' => true,
						'groupedRow'=>true,                    
						'groupOddCssClass'=>'kv-grouped-row',  
						'groupEvenCssClass'=>'kv-grouped-row', 
						'value' => function ($model, $key, $index) { 
							return $model->prodi->ProgramStudi;
						},
					],

					[
						'class' => 'kartik\grid\ActionColumn',
						'template' => '{view} {update} {delete}',
						'buttons' => [
								
								'view' => function ($url,$model) {
										return Html::a('<span class="label label-primary"><span class="fa fa-folder-open"></span></span>',$url);
								},
														
								'update' => function ($url,$model) {
										return Html::a('<span class="label label-success"><span class="fa fa-pencil"></span></span>',$url);
								},
																
								'delete' => function ($url,$model) {
										return Html::a('<span class="label label-danger"><span class="fa fa-close"></span></span>',$url,
												[
												'title' => Yii::t('yii', 'Delete'),
												'data-confirm' => Yii::t('yii', 'Are you sure to delete this item?'),
												'data-method' => 'post',
												]);
								},
								
								
								
							],
					],
				],
			]); ?>
		</div>
		
	</div>
</div>
