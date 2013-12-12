<?php
/* @var $this EarningsController */
/* @var $model earnings */

$this->breadcrumbs=array(
	'Earnings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Earnings', 'url'=>array('index')),
	array('label'=>'Create Earnings Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#earnings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Earnings</h1>

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
	'id'=>'earnings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
             'name'=>'employee_id',
             'filter'=>CHtml::listData(earnings::model()->findAll(array('order'=>'employee_id ASC')),'employee_id','EmployeeFullName'),
             'value'=>'earnings::Model()->FindByPk($data->id)->EmployeeFullName',
        ),
		'earnings_date',
		'earnings_periodMonth',
		'earnings_periodDateRange',
		'earnings_periodYear',
		/*
		'earnings_totalWorkingHours',
		'earnings_totalAllowancePerDay',
		'earnings_otherEarnings',
		'earnings_overtime',
		'earnings_specialHoliday',
		'earnings_specialHolidayOnRestDay',
		'earnings_regularHoliday',
		'earnings_regularHolidayOnRestDay',
		'earnings_totalOvertimeOnHoliday',
		'earnings_totalOvertimeOnRestDay',
		'earnings_totalGross',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
