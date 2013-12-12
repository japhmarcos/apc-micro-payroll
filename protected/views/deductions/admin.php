<?php
/* @var $this DeductionsController */
/* @var $model deductions */

$this->breadcrumbs=array(
	'Salary Deductions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Salary Deductions', 'url'=>array('index')),
	array('label'=>'Create Salary Deduction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#deductions-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salary Deductions</h1>

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
	'id'=>'deductions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
             'name'=>'employee_id',
             'filter'=>CHtml::listData(employee::model()->findAll(array('order'=>'id ASC')),'id','FullName'),
             'value'=>'deductions::model()->FindByPk($data->id)->EmployeeFullName',
        ),
		'earnings_id',
		'philhealth_id',
		'sss_id',
		'pagibig_id',
		'deductions_totalNetPayBeforeTax',
		/*
		'deductions_date',
		'deductions_periodMonth',
		'deductions_periodDateRange',
		'deductions_periodYear',
		'deductions_otherDeduction',
		'deductions_longDistanceCall',
		'deductions_totalNetPayBeforeTax',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
