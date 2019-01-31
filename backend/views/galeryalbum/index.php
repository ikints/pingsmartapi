<?php

use yii\helpers\Html;
use kartik\grid\GridView;
$this->title = 'Galery Album';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galery-album-index">
	
	<div class='box box-default'>
		<div class='box-header with-border'>
			<h1>
				<?= Html::encode($this->title);?>
				<?= Html::a('Create Galery Album', ['create'], ['class' => 'btn btn-success pull-right']) ?>
			</h1>
		</div>
		<div class='box-body no-padding'>
			
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				//'filterModel' => $searchModel,
				'columns' => [
					['class' => 'kartik\grid\SerialColumn'],

					//'Id',
					 [
                        'label' => 'Nama',
                        'attribute' => '',
                        'format' => 'raw',
                        'vAlign' => 'middle',
						'group' => true,
						'groupedRow'=>true,                    
						'groupOddCssClass'=>'kv-grouped-row',  
						'groupEvenCssClass'=>'kv-grouped-row', 
                        'value' => function ($model, $key, $index) {
                            return Html::a($model->member->Nama, ['view', 'id' => $model->Id]);
                        }, 
                    ],
					 [
                        'label' => 'Nama',
                        'attribute' => '',
                        'format' => 'raw',
                        'vAlign' => 'middle',
						'value' => function ($model, $key, $index) {
                            return Html::a($model->Album, ['view', 'id' => $model->Id]);
                        }, 
                    ],
					[
						'label' => 'Action',
						'attribute' => '',
						'format' => 'raw',
						'value' => function ($model, $key, $index) { 
							
							return '<div class="btn-group">
								  <button type="button" class="btn btn-default dropdown-toggle btn-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="fa fa-bars"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li>'.Html::a('Tampilkan',['view','id'=> $model->Id]).'</li>
									<li>'.Html::a('Ubah',['update','id'=> $model->Id]).'</li>
									<li role="separator" class="divider"></li>
									<li>'.Html::a('Hapus',['delete','id' => $model->Id],[
												'title' => Yii::t('yii', 'Delete'),
												'data-confirm' => Yii::t('yii', 'Are you sure to delete this item?'),
												'data-method' => 'post',
												]).'</li>
								  </ul>
								</div>';
							
						},
						
					],
				],
			]); ?>
		</div>
		<div class='box-footer'>
		</div>
	</div>
 
</div>
