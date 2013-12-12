<?php
/* @var $this Withholding_taxController */
/* @var $model withholding_tax */

$this->breadcrumbs=array(
	'Withholding Tax Records'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Withholding Tax Records', 'url'=>array('index')),
	array('label'=>'Create Withholding Tax Records', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#withholding-tax-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Withholding Tax Records</h1>

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
	'id'=>'withholding-tax-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'employee_id',
		'tin_number',
		'withholdingtax_exemption_status',
		'withholdingtax_date',
		'withholdingtax_periodMonth',
		/*
		'withholdingtax_periodOfDeduction',
		'withholdingtax_periodYear',
		'taxable_income',
		'withholdingtax_salaryBase',
		'withholdingtax_baseTax',
		'withholdingtax_percentageExcess',
		'withholdingtax_exemption',
		'total_withholdingTax',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
