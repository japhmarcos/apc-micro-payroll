<?php
/* @var $this PayrollController */
/* @var $model payroll */

$this->breadcrumbs=array(
	'Payroll Records'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Payroll Records', 'url'=>array('index')),
	array('label'=>'Create Payroll Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#payroll-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Payroll Records</h1>

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
	'id'=>'payroll-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'employee_id',
		'payroll_date',
		'payroll_month',
		'payroll_dateRange',
		'payroll_year',
		'payroll_totalNetPayBeforeTax',
		/*
		'payroll_totalNetPayBeforeTax',
		'payroll_withholdingTax',
		'payroll_totalNetPayAfterTax',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
