<?php
/* @var $this PhilhealthController */
/* @var $model philhealth */

$this->breadcrumbs=array(
	'Philhealth Records'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Philhealth Records', 'url'=>array('index')),
	array('label'=>'Create Philhealth Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#philhealth-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Philhealth Records</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'philhealth-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
             'name'=>'employee_id',
             'filter'=>CHtml::listData(employee::model()->findAll(array('order'=>'id ASC')),'id','FullName'),
             'value'=>'philhealth::model()->FindByPk($data->id)->EmployeeFullName',
        ),
		'philhealth_no',
		'monthly_salary',
		'philhealth_date',
		'philhealth_periodMonth',
		'philhealth_totalDeduction',
		'philhealth_salarybracket',
		/*
		'philhealth_periodOfDeduction',
		'philhealth_periodYear',
		'philhealth_totalDeduction',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
